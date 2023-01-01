<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ItemMainPage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $item;
    public $cartItems;
    public $check;

    public function __construct($item, $cartItems, $check)
    {
        $this->item = $item;
        $this->cartItems = $cartItems;
        $this->check = $check;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item-main-page');
    }
}
