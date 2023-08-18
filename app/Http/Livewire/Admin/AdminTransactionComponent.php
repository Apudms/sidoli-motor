<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTransactionComponent extends Component
{
    use WithPagination;
    public function render()
    {
        //$orders = Order::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get()->take(10);
        // $totalCost = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->sum('total');
        // $totalPurchase = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->count();
        // $totalDelivered = Order::where('status', '!=', 'delivered')->where('user_id', Auth::user()->id)->count();
        // $totalCanceled = Order::where('status', '!=', 'canceled')->where('user_id', Auth::user()->id)->count();

        $orders = DB::table('orders')
            ->leftJoin('users', function ($join) {
                $join->on('users.id', '=', 'orders.user_id');
            })
            ->selectRaw('orders.created_at')
            ->selectRaw('orders.id as orderId')
            ->selectRaw('orders.user_id')
            ->selectRaw('orders.ongkir')
            ->selectRaw('users.id as custId')
            ->selectRaw('users.name')
            ->selectRaw('orders.nama_depan')
            ->selectRaw('orders.nama_belakang')
            ->selectRaw('orders.alamat')
            ->selectRaw('orders.status')
            ->selectRaw('orders.subtotal')
            ->selectRaw('orders.total')
            ->selectRaw('orders.bukti_transfer')
            ->latest()->paginate(10);

        return view('livewire.admin.admin-transaction-component', [
            'orders' => $orders,
        ])->layout('layouts.main');
    }
}
