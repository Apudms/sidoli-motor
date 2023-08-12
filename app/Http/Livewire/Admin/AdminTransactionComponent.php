<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Transaksi;
use Livewire\Component;

class AdminTransactionComponent extends Component
{
    public function render()
    {
        //$orders = Order::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get()->take(10);
        // $totalCost = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->sum('total');
        // $totalPurchase = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->count();
        // $totalDelivered = Order::where('status', '!=', 'delivered')->where('user_id', Auth::user()->id)->count();
        // $totalCanceled = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->count();

        $orders = Order::orderBy('created_at', 'DESC')->get()->take(10);
        $totalCost = Order::where('status', '!=', 'dibatalkan')->sum('total');
        $totalPurchase = Order::where('status', '!=', 'dibatalkan')->count();
        $totalDelivered = Order::where('status', '!=', 'delivered')->count();
        $totalDibatalkan = Order::where('status', '=', 'dibatalkan')->count();

        $totalTransaksi = Transaksi::where('status', '!=', 'ditolak')->count();

        return view('livewire.admin.admin-transaction-component', [
            'orders' => $orders,
            'totalCost' => $totalCost,
            'totalPurchase' => $totalPurchase,
            'totalDelivered' => $totalDelivered,
            'totalDibatalkan' => $totalDibatalkan,
            'totalTransaksi' => $totalTransaksi,
        ])->layout('layouts.main');
    }
}
