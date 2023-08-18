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

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nama_produk' => 'required',
            'slug' => 'required|unique:products',
            'deskripsi_singkat' => 'required',
            'deskripsi' => 'required',
            'harga_normal' => 'required|numeric',
            'harga_diskon' => 'numeric',
            'SKU' => 'required',
            'status_stok' => 'required',
            'jumlah_stok' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'category_id' => 'required',
        ]);
    }

    public function storeProduct()
    {
        $this->validate([
            'nama_produk' => 'required',
            'slug' => 'required|unique:products',
            'deskripsi_singkat' => 'required',
            'deskripsi' => 'required',
            'harga_normal' => 'required|numeric',
            'harga_diskon' => 'numeric',
            'SKU' => 'required',
            'status_stok' => 'required',
            'jumlah_stok' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'category_id' => 'required',
        ], [
            'nama_produk.required' => 'Nama produk harus diisi.',
            'slug.required' => 'Slug harus diisi.',
            'slug.unique' => 'Slug sudah digunakan.',
            'deskripsi_singkat.required' => 'Deskripsi singkat harus diisi.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'harga_normal.required' => 'Harga normal harus diisi.',
            'harga_normal.numeric' => 'Harga normal harus berupa angka.',
            'harga_diskon.numeric' => 'Harga diskon harus berupa angka.',
            'SKU.required' => 'SKU harus diisi.',
            'status_stok.required' => 'Status stok harus diisi.',
            'jumlah_stok.required' => 'Jumlah stok harus diisi.',
            'image.required' => 'Gambar harus diunggah.',
            'image.mimes' => 'Gambar harus berformat jpeg, jpg, atau png.',
            'category_id.required' => 'Kategori harus dipilih.',
        ]);

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
