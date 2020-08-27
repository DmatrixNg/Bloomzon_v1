<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class SubadminSideNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $admin;
    public function __construct()
    {
        $this->admin = Auth::guard('admin')->user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dashboard.subadmin-side-nav');
    }
}
