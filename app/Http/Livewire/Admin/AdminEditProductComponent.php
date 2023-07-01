<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $nama_produk;
    public $slug;
    public $deskripsi_singkat;
    public $deskripsi;
    public $harga_normal;
    public $harga_diskon;
    public $SKU;
    public $status_stok;
    public $fitur;
    public $jumlah_stok;
    public $image;
    public $category_id;
    public $newImage;
    public $product_id;

    public function mount($id)
    {
        $product = Product::where('id', $id)->first();
        $this->nama_produk = $product->nama_produk;
        $this->slug = $product->slug;
        $this->deskripsi_singkat = $product->deskripsi_singkat;
        $this->deskripsi = $product->deskripsi;
        $this->harga_normal = $product->harga_normal;
        $this->harga_diskon = $product->harga_diskon;
        $this->SKU = $product->SKU;
        $this->status_stok = $product->status_stok;
        $this->fitur = $product->fitur;
        $this->jumlah_stok = $product->jumlah_stok;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->product_id = $product->id;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->nama_produk, '-');
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);
        $product->nama_produk = $this->nama_produk;
        $product->slug = $this->slug;
        $product->deskripsi_singkat = $this->deskripsi_singkat;
        $product->deskripsi = $this->deskripsi;
        $product->harga_normal = $this->harga_normal;
        $product->harga_diskon = $this->harga_diskon;
        $product->SKU = $this->SKU;
        $product->status_stok = $this->status_stok;
        $product->fitur = $this->fitur;
        $product->jumlah_stok = $this->jumlah_stok;
        $product->category_id = $this->category_id;
        if ($this->newImage) {
            # code...
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs('products', $imageName);
            $product->image = $imageName;
        }
        $product->category_id = $this->category_id;

        $product->save();
        session()->flash('message', 'Produk berhasil diubah!');
        return redirect()->route('admin.produk');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component', ['categories' => $categories])->layout('layouts.main');
    }
}
