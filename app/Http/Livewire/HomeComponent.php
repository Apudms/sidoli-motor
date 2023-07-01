<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home-component', [
            // // Database: Query Builder
            // // Basic Where Clauses
            // 'sliders' => DB::table('home_sliders')
            //     ->where('status', 1)
            //     ->get(),

            'sliders' => HomeSlider::where('status', 1)->get(),
            'product_cat' => Category::with('products')->get(),
            'products' => Product::latest()->get(),
        ])->layout('layouts.main');
    }
}
