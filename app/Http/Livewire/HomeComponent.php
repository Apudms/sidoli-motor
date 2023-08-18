<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\Product;
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
            'sliders' => $sliders, 'lproducts' => $lproducts, 'categories' => $categories, 'category' => $category, 'no_of_products' => $no_of_products
        ])->layout('layouts.main');
    }
}
