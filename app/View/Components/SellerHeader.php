<?php

namespace App\View\Components;

use App\WalletHistory;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class SellerHeader extends Component
{
    public $seller;
    public $networth;
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
        $this->networth = WalletHistory::where('user_id',$this->seller->id)->where('user_type','seller')->get();
        return view('components.dashboard.seller-header');
    }
}
