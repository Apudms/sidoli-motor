<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('success_message', 'Barang berhasil dihapus dari keranjang');
    }

    public function destroyAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function checkout()
    {
        if (Auth::check()) {
            return redirect()->route('checkout');
        } else {
            return redirect()->route('login');
        }
    }

    public function setAmountforCheckout()
    {
        if (!Cart::instance('cart')->count() > 0) {
            session()->forget('checkout');
            return;
        }

        if (Cart::instance('cart')->subtotal() >= number_format(
            500000
        )) {
            $ongkir = 0;
        } else {
            $ongkir = 10000;
        }

        session()->put('checkout', [
            'subtotal' => Cart::instance('cart')->subtotal() * 1000,
            'ongkir' => $ongkir,
            'total' => (Cart::instance('cart')->total() * 1000) + $ongkir,
        ]);
    }

    public function render()
    {
        $this->setAmountforCheckout();

        return view('livewire.cart-component')->layout('layouts.main');
    }
}
