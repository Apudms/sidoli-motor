<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        // Mendapatkan tanggal hari ini
        $today = Carbon::now()->toDateString();

        // Mendapatkan total pendapatan harian dari pesanan yang diterima
        $incomePerDay = Order::whereDate('created_at', $today)
            ->where(function ($query) {
                $query->where('status', 'dikirim')
                    ->orWhere('status', 'dikemas');
            })
            ->where('status', '!=', 'dibatalkan')
            ->sum('subtotal');

        $orders = Order::orderBy('created_at', 'DESC')->where('status', '=', 'memesan')->get()->take(10);
        $totalIncome = Order::where('status', '=', 'diterima')->sum('subtotal');
        $totalPurchase = Order::where('status', '=', 'memesan')->count();
        $totalDelivered = Order::where('status', '=', 'dikirim')->count();
        $totalDibatalkan = Order::where('status', '=', 'dibatalkan')->count();

        $transaksi = DB::table('transaksis')
            ->leftJoin('orders', function ($join) {
                $join->on('orders.id', '=', 'transaksis.order_id');
            })
            ->leftJoin('users', function ($join) {
                $join->on('users.id', '=', 'orders.user_id');
            })
            ->selectRaw('orders.created_at')
            ->selectRaw('transaksis.created_at')
            ->selectRaw('transaksis.id as transaksiId')
            ->selectRaw('transaksis.order_id as transaksiId')
            ->selectRaw('orders.id as orderId')
            ->selectRaw('transaksis.user_id as transaksi_user_id')
            ->selectRaw('orders.user_id')
            ->selectRaw('orders.nama_depan')
            ->selectRaw('orders.nama_belakang')
            ->selectRaw('users.id as custId')
            ->selectRaw('users.name')
            ->selectRaw('orders.alamat')
            ->selectRaw('transaksis.status as transaksiStatus')
            ->selectRaw('orders.status as orderStatus')
            ->selectRaw('orders.subtotal')
            ->selectRaw('orders.total')
            ->selectRaw('orders.bukti_transfer')
            ->where('transaksis.status', '=', 'menunggu')
            ->get();

        // dd($transaksi);

        //$transaksi = Transaksi::where('status', '=', 'menunggu')->orderBy('created_at', 'DESC')->get()->take(3);
        $totalTransaksiBerhasil = Order::where('status', '=', 'diterima')->count();
        $products = Product::orderBy('created_at', 'DESC')->get()->take(3);

        return view('livewire.admin.admin-dashboard-component', [
            'orders' => $orders,
            'totalIncome' => $totalIncome,
            'incomePerDay' => $incomePerDay,
            'totalPurchase' => $totalPurchase,
            'totalDelivered' => $totalDelivered,
            'totalDibatalkan' => $totalDibatalkan,
            'transaksi' => $transaksi,
            'totalTransaksiBerhasil' => $totalTransaksiBerhasil,
            'products' => $products,
        ])->layout('layouts.main');
    }
}
