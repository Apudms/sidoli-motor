<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Kategori berhasil dihapus!');
    }

    public function render()
    {
        $categories = Category::latest()->paginate(10);
        return view('livewire.admin.admin-category-component', ['categories' => $categories])->layout('layouts.main');
    }
}
