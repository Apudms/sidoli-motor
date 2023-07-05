<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{
    public $nama_kategori;
    public $slug;
    public $category_slug;
    public $category_id;

    public function mount($id)
    {
        $this->category_id = $id;
        $category = Category::where('id', $id)->first();
        $this->category_id = $category->id;
        $this->nama_kategori = $category->nama_kategori;
        $this->slug = $category->slug;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->nama_kategori);
    }

    public function update($fields)
    {
        $this->validateOnly($fields, [
            'nama_kategori' => 'required',
            'slug' => 'required|unique:categories'
        ]);
    }

    public function updateCategory()
    {
        $this->validate([
            'nama_kategori' => 'required',
            'slug' => 'required|unique:categories'
        ]);

        $category = Category::find($this->category_id);
        $category->nama_kategori = $this->nama_kategori;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message', 'Kategori berhasil diubah!');
        return redirect()->route('admin.kategori');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.main');
    }
}
