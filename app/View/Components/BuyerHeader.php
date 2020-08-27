<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class BuyerHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $buyer;
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
        
        return view('components.dashboard.buyer-header');
    }
}
