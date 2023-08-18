<?php

namespace App\Http\Livewire\Owner;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class OwnerTransactionDataComponent extends Component
{
    use WithPagination;
    public function render()
    {
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

        return view('livewire.owner.owner-transaction-data-component', [
            'orders' => $orders,
        ])->layout('layouts.main');
    }
}
