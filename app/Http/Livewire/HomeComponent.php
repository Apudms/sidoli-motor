<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view(
            'livewire.home-component',
            [
                'product_cat' => Category::with('products')->get(),
                'products' => Product::latest()->get(),
            ]
        )->layout('layouts.main');
    }
}
