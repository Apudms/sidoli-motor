<?php

namespace App\Http\Livewire\Admin;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Carbon\Carbon;

class AdminTransactionDetailComponent extends Component
{
    public $order_status, $transaksi_status, $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
        $order = Order::where('id', $order_id)->first();
        $this->order_status = $order->order_status;
    }

    public function updateStatusConfirmed()
    {
        $order = Order::find($this->order_id);
        $order->status = 'dikemas';
        $order->save();

        $transaksi = Transaksi::with(['order'])->where('order_id', $this->order_id)->first();
        $transaksi->status = 'disetujui';
        $transaksi->save();

        session()->flash('success_message', 'Status telah dikonfirmasi!');
        return redirect()->route('admin.manajemenTransaksi');
    }

    public function updateStatusShipped()
    {
        $order = Order::find($this->order_id);
        $order->status = 'dikirim';
        $order->save();

        session()->flash('success_message', 'Status telah dikonfirmasi!');
        return redirect()->route('admin.manajemenTransaksi');
    }

    public function updateStatusRejected()
    {
        $order = Order::find($this->order_id);
        $order->status = 'dibatalkan';
        $order->save();

        $transaksi = Transaksi::with(['order'])->where('order_id', $this->order_id)->first();
        $transaksi->status = 'ditolak';
        $transaksi->save();
        session()->flash('success_message', 'Status telah dikonfirmasi!');
        return redirect()->route('admin.manajemenTransaksi');
    }

    public function render()
    {
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
