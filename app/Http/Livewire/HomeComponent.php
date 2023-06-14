<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $products = Product::latest()->get();
        return view('livewire.home-component', ['products' => $products])->layout('layouts.main');
    }
}
