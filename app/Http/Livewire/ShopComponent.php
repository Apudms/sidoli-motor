<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\withPagination;
use Cart;
use App\Models\Category;

class ShopComponent extends Component
{
    public $sorting;
    public $pageSize;

    public $min_price;
    public $max_price;

    public function mount()
    {
        $this->sorting = "default";
        $this->pageSize = 12;

        $this->min_price = 100;
        $this->max_price = 10000000;
    }

    public function store($product_id, $product_name, $product_price)
    {
        // Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        // session()->flash('success_message', 'Produk berhasil ditambahkan ke keranjang!');

        // return redirect()->route('produk.keranjang');
        $product = Product::find($product_id);

        if ($product && $product->jumlah_stok > 0) {
            Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
            session()->flash('success_message', 'Produk berhasil ditambahkan ke keranjang!');
            return redirect()->route('produk.keranjang');
        } else {
            session()->flash('error_message', 'Produk tidak tersedia atau stok habis.');
            return redirect()->back();
        }
    }

    use withPagination;
    public function render()
    {
        if ($this->sorting == 'date') {
            $products = Product::whereBetween('harga_normal', [$this->min_price, $this->max_price])->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        } elseif ($this->sorting == 'price') {
            $products = Product::whereBetween('harga_normal', [$this->min_price, $this->max_price])->orderBy('harga_normal', 'ASC')->paginate($this->pageSize);
        } elseif ($this->sorting == 'price-desc') {
            $products = Product::whereBetween('harga_normal', [$this->min_price, $this->max_price])->orderBy('harga_normal', 'DESC')->paginate($this->pageSize);
        } else {
            $products = Product::whereBetween('harga_normal', [$this->min_price, $this->max_price])->paginate($this->pageSize);
        }

        $categories = Category::all();

        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories])->layout('layouts.main');
    }
}
