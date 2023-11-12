<?php

namespace App\Http\Livewire\Admin;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use PDF;

class AdminSalesReportsComponent extends Component
{
    use WithPagination;

    public function print($firstDate, $lastDate)
    {
        $defaultMonth = Carbon::parse(request('firstDate'))->locale('id')->monthName;
        $defaultYear = Carbon::parse(request('firstDate'))->year;

        $startDate = Carbon::parse($firstDate)->startOfDay();
        $endDate = Carbon::parse($lastDate)->endOfDay();

        $month = $defaultMonth;
        $year = $defaultYear;

        $items = DetailOrder::with(["order", "product"])->whereBetween("created_at", [$startDate, $endDate])->get();

        // dd($items);

        foreach ($items as $item) {
            // membuat instance Carbon dari atribut created_at
            $date = Carbon::parse($item->created_at);

            // mengambil nama bulan dalam bahasa Indonesia
            $month = $date->locale('id')->monthName;

            // mengambil nama tahun
            $year = $date->year;
        }

        return view("livewire.admin.sales", [
            "items" => $items,
            "month" => $month,
            "year" => $year,
        ]);
    }

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
            ->latest()
            ->paginate(10);

        return view('livewire.admin.admin-sales-reports-component', [
            'orders' => $orders,
        ])->layout('layouts.main');
    }
}
