<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $slider_id;
    public $nama_slider;
    public $foto;
    public $status;
    public $newImage;

    public function mount($id)
    {
        $slider = HomeSlider::where('id', $id)->first();
        $this->nama_slider = $slider->nama_slider;
        $this->foto = $slider->foto;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;
    }

    public function updated($field)
    {
        $this->validateOnly([
            'nama_slider' => 'required',
            'newImage' => 'required|mimes:jpeg,jpg,png',
        ]);
    }

    public function updateSlider()
    {
        $this->validate([
            'nama_slider' => 'required',
            'newImage' => 'required|mimes:jpeg,jpg,png',
        ]);

        $slider = HomeSlider::find($this->slider_id);
        $slider->nama_slider = $this->nama_slider;
        $slider->foto = $this->foto;
        $slider->status = $this->status;
        if ($this->newImage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs('sliders', $imageName);
            $slider->image = $imageName;
        }
        $slider->id = $this->slider_id;

        $slider->save();
        session()->flash('message', 'Slide berhasil diubah!');
        return redirect()->route('admin.slider');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.main');
    }
}
