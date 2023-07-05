<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public $nama_kategori;
    public $slug;

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

    public function storeCategory()
    {
        $this->validate([
            'nama_kategori' => 'required',
            'slug' => 'required|unique:categories'
        ]);

        $category = new Category();
        $category->nama_kategori = $this->nama_kategori;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message', 'Kategori berhasil ditambahkan!');
        return redirect()->route('admin.kategori');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.main');
    }
}
