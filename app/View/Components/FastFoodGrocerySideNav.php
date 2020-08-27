<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class FastFoodGrocerySideNav extends Component
{
    public $fast_food_grocery;
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->fast_food_grocery = Auth::guard('fast_food_grocery')->user();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dashboard.fast-food-grocery-side-nav');
    }
}
