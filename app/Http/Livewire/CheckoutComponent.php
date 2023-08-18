<?php

namespace App\Http\Livewire;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaksi;
use Carbon\Carbon;
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

    public function cancelExpiredOrders()
    {
        $expiredOrders = Order::where('status', 'memesan')
            ->whereNull('bukti_transfer')
            // ->where('created_at', '<=', Carbon::now()->subMinutes(1440)) // 1440 menit = 1 hari
            ->where('created_at', '<=', Carbon::now()->subDay())
            ->get();

        foreach ($expiredOrders as $order) {
            $order->status = 'dibatalkan';
            $order->save();

            $transaksi = Transaksi::where('order_id', $order->id)->first();
            if ($transaksi) {
                $transaksi->status = 'dibatalkan';
                $transaksi->save();
            }
        }
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
            $product = Product::find($item->id);
            $product->jumlah_stok -= $item->qty;
            $product->save();

            $detailOrders = new DetailOrder();
            $detailOrders->product_id = $item->id;
            $detailOrders->order_id = $order->id;
            $detailOrders->price = $item->price;
            $detailOrders->quantity = $item->qty;
            $detailOrders->save();

            // Check if stock becomes empty
            if ($product->jumlah_stok <= 0) {
                $product->status_stok = 'Kosong';
                $product->save();
            }
        }

        if ($this->transfer == 'Bank Mandiri') {
            $transaksi = new Transaksi();
            $transaksi->user_id = Auth::user()->id;
            $transaksi->order_id = $order->id;
            $transaksi->transfer = 'Bank Mandiri';
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

        // Setelah menyimpan order dan transaksi, panggil fungsi untuk membatalkan order yang kadaluwarsa
        $this->cancelExpiredOrders();
        // dd($order->subtotal);
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
        // $order = new Order();
        // $order->subtotal = session()->get('checkout')['subtotal'];
        // dd($order->subtotal);
        // dd(session()->get('checkout')['ongkir']);
        $this->verifyForCheckout();
        return view('livewire.checkout-component')->layout('layouts.main');
    }
}
