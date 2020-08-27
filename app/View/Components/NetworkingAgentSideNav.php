<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class NetworkingAgentSideNav extends Component
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
        return view('components.dashboard.networking-agent-side-nav');
    }
}
