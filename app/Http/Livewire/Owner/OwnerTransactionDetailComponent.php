<?php

namespace App\Http\Livewire\Owner;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaksi;
use Livewire\Component;

class OwnerTransactionDetailComponent extends Component
{
    public $order_status, $transaksi_status, $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
        $order = Order::where('id', $order_id)->first();
        $this->order_status = $order->order_status;
    }

    public function render()
    {
        $transaksi = Transaksi::with(['order'])->where('order_id', $this->order_id)->first();
        $detail = DetailOrder::with(['order'])->where('order_id', $this->order_id)->get();
        $detailProduk = Product::latest()->get();
        $order = Order::find($this->order_id)->get();
        return view('livewire.owner.owner-transaction-detail-component', [
            'transaksi' => $transaksi,
            'detail' => $detail,
            'detailProduk' => $detailProduk,
            'order' => $order,
        ])->layout('layouts.main');
    }
}
