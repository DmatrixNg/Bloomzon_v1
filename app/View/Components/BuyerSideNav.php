<?php

namespace App\View\Components;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class BuyerSideNav extends Component
{
    public $buyer;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->buyer = Auth::guard('buyer')->user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return view('components.dashboard.buyer-side-nav');
    }
}
