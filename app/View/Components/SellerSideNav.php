<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class SellerSideNav extends Component
{
    public $seller;
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->seller = Auth::guard('seller')->user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        
        return view('components.dashboard.seller-side-nav');
    }
}
