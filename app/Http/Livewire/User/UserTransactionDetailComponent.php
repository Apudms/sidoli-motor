<?php

namespace App\Http\Livewire\User;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaksi;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class UserTransactionDetailComponent extends Component
{
    use WithFileUploads;

    public $bukti_transfer, $new_bukti_transfer, $order_id;

    public function mount($order_id)
    {
        $transaksi = Transaksi::with(['order'])->where('order_id', $this->order_id)->whereAnd('user_id', auth()->user()->id)->first();

        if ($transaksi->order->user_id !== auth()->user()->id) {
            abort(403);
        }

        $this->order_id = $order_id;
        $order = Order::where('id', $order_id)->first();
        $this->bukti_transfer = $order->bukti_transfer;
    }

    public function updateBuktiTransfer()
    {
        $transaksi = Transaksi::with(['order'])->where('order_id', $this->order_id)->whereAnd('user_id', auth()->user()->id)->first();

        if ($transaksi->order->user_id !== auth()->user()->id) {
            abort(403);
        }

        $order = Order::find($this->order_id);
        if ($this->new_bukti_transfer) {
            $buktiTransferName = Carbon::now()->timestamp . '.' . $this->new_bukti_transfer->extension();
            $this->new_bukti_transfer->storeAs('bukti_transfer', $buktiTransferName);
            $order->bukti_transfer = $buktiTransferName;
        }
        $order->save();
        session()->flash('success_message', 'Foto berhasil diunggah!');
    }

    public function render()
    {
        $transaksi = Transaksi::with(['order'])->where('order_id', $this->order_id)->first();
        $detail = DetailOrder::with(['order'])->where('order_id', $this->order_id)->get();
        $detailProduk = Product::latest()->get();
        $order = Order::find($this->order_id)->get();

        return view('livewire.user.user-transaction-detail-component', [
            'transaksi' => $transaksi,
            'detail' => $detail,
            'detailProduk' => $detailProduk,
            'order' => $order,
            'now' => Carbon::now()->toDateTimeString(),
        ])->layout('layouts.main');
    }
}
