<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        $this->emitTo('cart-count-component', 'refreshComponent');
        session()->flash('success_message', 'Barang berhasil dihapus dari keranjang');
    }

    public function destroyAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component', 'refreshComponent');
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.main');
    }
}
