<?php

namespace App\Http\Livewire\Admin;

use App\Helpers\Helper;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $slider_id;
    public $nama_slider;
    public $foto;
    public $status;

    public function mount()
    {
        $this->status = 0;
    }

    public function storeSlide()
    {
        // $idgenerate = Helper::IDGenerator(new HomeSlider, 'slider_id', 4, 'HS');
        // $slider = new HomeSlider();
        // $slider->slider_id = $idgenerate;
        // $slider->nama_slider = $this->nama_slider;
        // $namafoto = Carbon::now()->timestamp . '.' . $this->foto->extension();
        // $this->foto->storeAs('sliders', $namafoto);
        // $slider->foto = $namafoto;
        // $slider->status = $this->status;

        $slider = new HomeSlider();
        $slider->nama_slider = $this->nama_slider;
        $namafoto = Carbon::now()->timestamp . '.' . $this->foto->extension();
        $this->foto->storeAs('sliders', $namafoto);
        $slider->foto = $namafoto;
        $slider->status = $this->status;

        $slider->save();
        session()->flash('message', 'Slide berhasil ditambahkan!');
        return redirect()->route('admin.slider');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.main');
    }
}
