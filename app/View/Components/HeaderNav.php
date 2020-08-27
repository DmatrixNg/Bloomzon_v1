<?php

namespace App\View\Components;

use App\Category;
use App\Helpers\CartHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class HeaderNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $adverts;
    public $categories;
    public $isBuyer;
    public $isSeller;
    public $isAdmin;
    public $isNtw;
    public $isMan;
    public $isShop;
    public $cart;
    
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $this->adverts = [];
        $this->categories = Category::all();
        $this->isBuyer = Auth::guard('buyer')->user()?true:false;
        $this->isSeller = Auth::guard('seller')->user()?true:false;
        $this->isAdmin = Auth::guard('admin')->user()?true:false;
        $this->isNtw = Auth::guard('networking_agent')->user()?true:false;
        $this->isMan = Auth::guard('manufacturer')->user()?true:false;
        $this->isShop = Auth::guard('shopper')->user()?true:false;
        $cart = new CartHelper();
        $this->cart = $cart->get_current_cart();
        
    

        return view('components.front.header-nav');
    }
}
