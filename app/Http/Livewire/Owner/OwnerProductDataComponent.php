<?php

namespace App\Http\Livewire\Owner;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class OwnerProductDataComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::orderBy('jumlah_stok', 'ASC')->latest()->paginate(10);
        return view('livewire.owner.owner-product-data-component', ['products' => $products])->layout('layouts.main');
    }
}
