<?php

namespace App\Http\Livewire\Owner;

use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;

class OwnerDashboardComponent extends Component
{
    public function render()
    {
        $products = Product::where('jumlah_stok', '<', '1')->count();
        $totalTransaksiBerhasil = Order::where('status', '=', 'diterima')->count();

        // Mendapatkan tanggal hari ini
        $today = Carbon::now()->toDateString();
        // Mendapatkan total pendapatan harian dari pesanan yang diterima
        $incomePerDay = Order::whereDate('created_at', $today)
            ->where('status', 'dikemas')
            ->sum('subtotal');
        $totalIncome = Order::where('status', '=', 'diterima')->sum('subtotal');
        return view('livewire.owner.owner-dashboard-component', [
            'products' => $products,
            'totalTransaksiBerhasil' => $totalTransaksiBerhasil,
            'incomePerDay' => $incomePerDay,
            'totalIncome' => $totalIncome,
        ])->layout('layouts.main');
    }
}
