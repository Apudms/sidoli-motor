<?php

namespace App\Http\Livewire\Admin;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminTransactionDetailComponent extends Component
{
    // public $user_id;
    // public $subtotal;
    // public $ongkir;
    // public $total;
    // public $nama_depan;
    // public $nama_belakang;
    // public $no_telp;
    // public $email;
    // public $alamat;
    // public $kecamatan;
    // public $kabupaten;
    // public $provinsi;
    // public $kode_pos;
    // public $bukti_transfer;
    // public $status;

    // public function mount($id)
    // {
    //     $order = Order::where('id', $id)->first();
    //     $this->user_id = $order->user_id;
    //     $this->subtotal = $order->subtotal;
    //     $this->ongkir = $order->ongkir;
    //     $this->total = $order->total;
    //     $this->nama_depan = $order->nama_depan;
    //     $this->nama_belakang = $order->nama_belakang;
    //     $this->no_telp = $order->no_telp;
    //     $this->email = $order->email;
    //     $this->alamat = $order->alamat;
    //     $this->kecamatan = $order->kecamatan;
    //     $this->kabupaten = $order->kabupaten;
    //     $this->provinsi = $order->provinsi;
    //     $this->kode_pos = $order->kode_pos;
    //     $this->bukti_transfer = $order->bukti_transfer;
    //     $this->status = $order->status;
    // }

    public $buktiTransfer, $newBuktiTransfer, $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
        $order = Order::where('id', $order_id)->first();
        $this->buktiTransfer = $order->buktiTransfer;
    }

    public function render()
    {
        // $order = DB::table('orders')
        //     ->leftJoin('users', function ($join) {
        //         $join->on('users.id', '=', 'orders.user_id');
        //     })
        //     ->selectRaw('orders.created_at')
        //     ->selectRaw('orders.id as orderId')
        //     ->selectRaw('orders.user_id')
        //     ->selectRaw('orders.ongkir')
        //     ->selectRaw('users.id as custId')
        //     ->selectRaw('users.name')
        //     ->selectRaw('orders.nama_depan')
        //     ->selectRaw('orders.nama_belakang')
        //     ->selectRaw('orders.alamat')
        //     ->selectRaw('orders.status')
        //     ->selectRaw('orders.subtotal')
        //     ->selectRaw('orders.total')
        //     ->selectRaw('orders.bukti_transfer')
        //     ->get();

        $transaksi = Transaksi::with(['order'])->where('order_id', $this->order_id)->first();
        $detail = DetailOrder::with(['order'])->where('order_id', $this->order_id)->get();
        $detailProduk = Product::latest()->get();
        $order = Order::find($this->order_id)->get();

        // dd($transaksi);
        return view('livewire.admin.admin-transaction-detail-component', [
            'transaksi' => $transaksi,
            'detail' => $detail,
            'detailProduk' => $detailProduk,
            'order' => $order,
        ])->layout('layouts.main');
    }
}
