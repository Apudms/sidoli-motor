<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status', 1)->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(10);
        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->no_produk;

        return view('livewire.home-component', [
            // // Database: Query Builder
            // // Basic Where Clauses
            // 'sliders' => DB::table('home_sliders')
            //     ->where('status', 1)
            //     ->get(),

            'sliders' => $sliders, 'lproducts' => $lproducts, 'categories' => $categories, 'no_of_products' => $no_of_products
        ])->layout('layouts.main');
    }
}
