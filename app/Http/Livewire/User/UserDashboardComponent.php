<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserDashboardComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->latest()->paginate(10);
        $dikemas = Order::where('status', '=', 'dikemas')->where('user_id', Auth::user()->id)->count();
        $dikirim = Order::where('status', '=', 'dikirim')->where('user_id', Auth::user()->id)->count();
        $diterima = Order::where('status', '=', 'diterima')->where('user_id', Auth::user()->id)->count();
        $dibatalkan = Order::where('status', '=', 'dibatalkan')->where('user_id', Auth::user()->id)->count();


        return view('livewire.user.user-dashboard-component', [
            'orders' => $orders,
            'dikemas' => $dikemas,
            'dikirim' => $dikirim,
            'diterima' => $diterima,
            'dibatalkan' => $dibatalkan,
            'now' => Carbon::now()->toDateTimeString(),
        ])->layout('layouts.main');
    }
}
