<?php

namespace App\Http\Livewire;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Cart;

class CheckoutComponent extends Component
{
    public $nama_depan;
    public $nama_belakang;
    public $no_telp;
    public $email;
    public $alamat;
    public $kecamatan;
    public $kabupaten;
    public $provinsi;
    public $kode_pos;

    public $transfer;
    public $terimakasih;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'no_telp' => 'required|numeric',
            'email' => 'required|email',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required|numeric',
            'transfer' => 'required'
        ]);
    }

    public function placeOrder()
    {
        $this->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'no_telp' => 'required|numeric',
            'email' => 'required|email',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required|numeric',
            'transfer' => 'required'
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->ongkir = session()->get('checkout')['ongkir'];
        $order->total = session()->get('checkout')['total'];

        $order->nama_depan = $this->nama_depan;
        $order->nama_belakang = $this->nama_belakang;
        $order->no_telp = $this->no_telp;
        $order->email = $this->email;
        $order->alamat = $this->alamat;
        $order->kecamatan = $this->kecamatan;
        $order->kabupaten = $this->kabupaten;
        $order->provinsi = $this->provinsi;
        $order->kode_pos = $this->kode_pos;
        $order->status = 'memesan';
        $order->save();

        foreach (Cart::instance('cart')->content() as $item) {
            $detailOrders = new DetailOrder();
            $detailOrders->product_id = $item->id;
            $detailOrders->order_id = $order->id;
            $detailOrders->price = $item->price;
            $detailOrders->quantity = $item->qty;
            $detailOrders->save();
        }

        if ($this->transfer == 'Bank') {
            $transaksi = new Transaksi();
            $transaksi->user_id = Auth::user()->id;
            $transaksi->order_id = $order->id;
            $transaksi->transfer = 'Bank';
            $transaksi->status = 'menunggu';
            $transaksi->save();
        } else if ($this->transfer == 'Dana') {
            $transaksi = new Transaksi();
            $transaksi->user_id = Auth::user()->id;
            $transaksi->order_id = $order->id;
            $transaksi->transfer = 'Dana';
            $transaksi->status = 'menunggu';
            $transaksi->save();
        } else if ($this->transfer == 'Shopeepay') {
            $transaksi = new Transaksi();
            $transaksi->user_id = Auth::user()->id;
            $transaksi->order_id = $order->id;
            $transaksi->transfer = 'Shopeepay';
            $transaksi->status = 'menunggu';
            $transaksi->save();
        }

        $this->terimakasih = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    public function verifyForCheckout()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        } else if ($this->terimakasih) {
            return redirect('terimakasih');
        } else if (!session()->get('checkout')) {
            return redirect()->route('keranjang');
        }
    }

    public function render()
    {
        $this->verifyForCheckout();
        return view('livewire.checkout-component')->layout('layouts.main');
    }
}
