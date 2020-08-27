<?php

namespace App\View\Components;

use App\WalletHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class NetworkingAgentHeader extends Component
{
    public $networking_agent;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->networking_agent = Auth::guard('networking_agent')->user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $net_balance = WalletHistory::where('user_id',$this->networking_agent->id)->where('user_type','networking_agent')->where('type',1)->get();
        return view('components.dashboard.networking-agent-header',compact(['net_balance']));
    }
}
