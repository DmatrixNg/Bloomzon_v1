<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class ProfessionalSideNav extends Component
{
    public $professional;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->professional = Auth::guard('professional')->user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dashboard.professional-side-nav');
    }
}
