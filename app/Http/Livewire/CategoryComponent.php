<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\withPagination;
use Cart;
use App\Models\Category;

class CategoryComponent extends Component
{
    public $sorting;
    public $pageSize;
    public $category_slug;

    public $min_price;
    public $max_price;

    public function mount($category_slug)
    {
        $this->sorting = "default";
        $this->pageSize = 12;
        $this->category_slug = $category_slug;

        $this->min_price = 100;
        $this->max_price = 10000000;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Produk berhasil ditambahkan ke keranjang');

        return redirect()->route('produk.keranjang');
    }

    use withPagination;
    public function render()
    {
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->nama_kategori;

        if ($this->sorting == 'date') {
            $products = Product::where('category_id', $category_id)->orderBy('created_at', 'DESC')->whereBetween('harga_normal', [$this->min_price, $this->max_price])->paginate($this->pageSize);
        } elseif ($this->sorting == 'price') {
            $products = Product::where('category_id', $category_id)->orderBy('harga_normal', 'ASC')->whereBetween('harga_normal', [$this->min_price, $this->max_price])->paginate($this->pageSize);
        } elseif ($this->sorting == 'price-desc') {
            $products = Product::where('category_id', $category_id)->orderBy('harga_normal', 'DESC')->whereBetween('harga_normal', [$this->min_price, $this->max_price])->paginate($this->pageSize);
        } else {
            $products = Product::where('category_id', $category_id)->whereBetween('harga_normal', [$this->min_price, $this->max_price])->paginate($this->pageSize);
        }

        $categories = Category::all();

        return view('livewire.category-component', ['products' => $products, 'categories' => $categories, 'category_name' => $category_name])->layout('layouts.main');
    }
}
