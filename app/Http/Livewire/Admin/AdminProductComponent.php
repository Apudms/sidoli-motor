<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message', 'Produk berhasil dihapus!');
    }

    public function render()
    {
        $products = Product::orderBy('jumlah_stok', 'ASC')->latest()->paginate(10);
        return view('livewire.admin.admin-product-component', ['products' => $products])->layout('layouts.main');
    }
}
