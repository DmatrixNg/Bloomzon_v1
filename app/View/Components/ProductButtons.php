<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductButtons extends Component
{

    public $product;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
        $this->id = $product->id;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-buttons');
    }
}
