<?php

namespace App\View\Components;

use App\WalletHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class ProfessionalHeader extends Component
{
    public $professional;
    public $networth;
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
        $this->networth = WalletHistory::where('user_id',$this->professional->id)->where('user_type','professional')->get();
        return view('components.dashboard.professional-header');
    }
}
