<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\CartController as VeeCart; 

class CartHeader extends Component
{
    public $cart;
    public $cartTotal = 0;

    protected $listeners = [
        'productAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal'
    ];

    public function mount(): void
    {
        $veecart = new VeeCart;
        $this->cart = $veecart->getCart();
    }

    public function render()
    {
        return view('livewire.cart-header');
    }

    public function updateCartTotal(): void
    {
        $veecart = new VeeCart();
        $this->cartTotal = count($veecart->getCart()['products']);
    }
}
