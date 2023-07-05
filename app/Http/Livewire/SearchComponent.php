<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\withPagination;
use Cart;
use App\Models\Category;

class SearchComponent extends Component
{
    public $sorting;
    public $pageSize;

    public $search;
    public $product_cat;
    public $product_cat_id;

    public $min_price;
    public $max_price;

    public function mount()
    {
        $this->sorting = "default";
        $this->pageSize = 12;
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));

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
        if ($this->sorting == 'date') {
            $products = Product::where('nama_produk', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%' . $this->product_cat_id . '%')->whereBetween('harga_normal', [$this->min_price, $this->max_price])->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        } elseif ($this->sorting == 'price') {
            $products = Product::where('nama_produk', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%' . $this->product_cat_id . '%')->whereBetween('harga_normal', [$this->min_price, $this->max_price])->orderBy('harga_normal', 'ASC')->paginate($this->pageSize);
        } elseif ($this->sorting == 'price-desc') {
            $products = Product::where('nama_produk', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%' . $this->product_cat_id . '%')->whereBetween('harga_normal', [$this->min_price, $this->max_price])->orderBy('harga_normal', 'DESC')->paginate($this->pageSize);
        } else {
            $products = Product::where('nama_produk', 'like', '%' . $this->search . '%')->where('category_id', 'like', '%' . $this->product_cat_id . '%')->whereBetween('harga_normal', [$this->min_price, $this->max_price])->paginate($this->pageSize);
        }

        $categories = Category::all();

        return view('livewire.search-component', ['products' => $products, 'categories' => $categories])->layout('layouts.main');
    }
}
