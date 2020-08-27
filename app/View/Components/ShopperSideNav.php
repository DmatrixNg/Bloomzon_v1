<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
class ShopperSideNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $shopper;
    public function __construct()
    {
        $this->shopper = Auth::guard('shopper')->user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dashboard.shopper-side-nav');
    }
}
