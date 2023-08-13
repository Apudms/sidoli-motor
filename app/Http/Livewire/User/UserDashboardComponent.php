<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class UserDashboardComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->latest()->paginate(10);
        $totalCost = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->sum('total');
        $totalPurchase = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->count();
        $totalDelivered = Order::where('status', '!=', 'delivered')->where('user_id', Auth::user()->id)->count();
        $totalDibatalkan = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->count();
        $totalTransaksi = Transaksi::where('status', '!=', 'ditolak')->where('user_id', Auth::user()->id)->count();

        // $orders = DB::table('orders')
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
        //     ->latest()->paginate(10);

        // dd($orders);
        return view('livewire.user.user-dashboard-component', [
            'orders' => $orders,
            'totalCost' => $totalCost,
            'totalPurchase' => $totalPurchase,
            'totalDelivered' => $totalDelivered,
            'totalDibatalkan' => $totalDibatalkan,
            'totalTransaksi' => $totalTransaksi,
        ])->layout('layouts.main');
    }
}
