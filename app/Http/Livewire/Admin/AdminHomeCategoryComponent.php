<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\HomeCategory;
use Livewire\Component;

class AdminHomeCategoryComponent extends Component
{
    public $selected_categories = [];
    public $numberofproduct;

    public function mount()
    {
        $category = HomeCategory::find(1);
        $this->selected_categories = explode(',', $category->sel_categories);
        $this->numberofproduct = $category->no_produk;
    }

    public function updateHomeCategory()
    {
        $category = HomeCategory::find(1);
        $category->sel_categories = implode(',', $this->selected_categories);
        $category->no_produk = $this->numberofproduct;
        $category->save();
        session()->flash('message', 'Manajemen Kategori berhasil diubah!');
        return redirect()->route('admin.manajemenkategori');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-home-category-component', ['categories' => $categories])->layout('layouts.main');
    }
}
