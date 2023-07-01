<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
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

    public function mount()
    {
        $this->status_stok = 'Tersedia';
        $this->fitur = 0;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->nama_produk);
    }

    public function storeProduct()
    {
        // $validasi = $request->validate([
        //     'name' => 'required|max:255',
        //     'price' => 'required',
        //     'berat' => 'required|max:255',
        //     'stok' => 'required|max:255',
        //     'quantity' => 'required',
        //     'jnsKulit' => 'required|max:255',
        //     'masaSimpan' => 'required|max:255',
        //     'deskripsi' => 'required',
        //     'fotoProduk' => 'nullable',
        // ]);

        // if ($request->hasFile('fotoProduk')) {
        //     $file = $request->file('fotoProduk');
        //     $imagemimes = ['mimes:png,jpg,jpeg'];

        //     if (in_array($file->getMimeType(), $imagemimes)) {
        //         $validasi['fotoProduk'] = 'mimes:png,jpg,jpeg|file|max:5120';
        //     }

        //     $validasi['fotoProduk'] = $request->file('fotoProduk')->store('foto-products');
        // }

        $product = new Product();
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
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;

        $product->save();
        session()->flash('message', 'Produk berhasil ditambahkan!');
        return redirect()->route('admin.produk');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component', ['categories' => $categories])->layout('layouts.main');
    }
}
