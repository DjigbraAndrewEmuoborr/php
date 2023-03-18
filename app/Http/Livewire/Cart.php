<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\CartController as VeeCart;

class Cart extends Component
{
    public $cart;

    public $cartTotal = 0;

    public function mount(): void
    {
        $veecart = new VeeCart;
        $this->cart = $veecart->getCart();
    }

    public function render()
    {
        return view('livewire.cart');
    }

    public function updateCartTotal(): void
    {
        $veecart = new VeeCart();
        $this->cartTotal = count($veecart->getCart()['products']);
    }
}
