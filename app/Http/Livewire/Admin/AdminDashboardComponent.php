<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->get()->take(10);
        $totalCost = Order::where('status', '!=', 'dibatalkan')->sum('total');
        $totalPurchase = Order::where('status', '!=', 'dibatalkan')->count();
        $totalDelivered = Order::where('status', '!=', 'delivered')->count();
        $totalDibatalkan = Order::where('status', '=', 'dibatalkan')->count();

        $transaksi = DB::table('orders')
            ->leftJoin('users', function ($join) {
                $join->on('users.id', '=', 'orders.user_id');
            })
            ->selectRaw('orders.created_at')
            ->selectRaw('orders.id as orderId')
            ->selectRaw('orders.user_id')
            ->selectRaw('users.id as custId')
            ->selectRaw('users.name')
            ->selectRaw('orders.alamat')
            ->selectRaw('orders.status')
            ->selectRaw('orders.subtotal')
            ->selectRaw('orders.total')
            ->selectRaw('orders.bukti_transfer')
            ->latest()->get();

        // dd($transaksi);

        //$transaksi = Transaksi::where('status', '=', 'menunggu')->orderBy('created_at', 'DESC')->get()->take(3);
        $totalTransaksi = Transaksi::where('status', '!=', 'ditolak')->count();
        $products = Product::orderBy('created_at', 'DESC')->get()->take(3);

        return view('livewire.admin.admin-dashboard-component', [
            'orders' => $orders,
            'totalCost' => $totalCost,
            'totalPurchase' => $totalPurchase,
            'totalDelivered' => $totalDelivered,
            'totalDibatalkan' => $totalDibatalkan,
            'transaksi' => $transaksi,
            'totalTransaksi' => $totalTransaksi,
            'products' => $products,
        ])->layout('layouts.main');
    }
}
