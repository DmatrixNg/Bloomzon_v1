<?php

namespace App\Http\Controllers;

use Akaunting\Money\Currency;
use Akaunting\Money\Money;
use App\Coupon;
use App\Helpers\CartHelper;
use App\Product;
use App\SiteConfig;
use App\Traits\JsonResponse;
use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    use JsonResponse;
    private $cartHelper;
    public $total;
    public $products;
    public function __construct()
    {
        $this->cartHelper = new CartHelper();
    }

    public function addToCart($id, $qty)
    {
        $this->cartHelper->inc_quantity($id, $qty);
        $cart = $this->cartHelper->get_current_cart();
        return $this->send_response(true, $cart, 200, 'Cart has been updated');
    }

    public function addCoupon(Request $request)
    {
        $request->validate(['code' => 'string']);
        $coupon = Coupon::where('code', $request->code)->first();
        if ($coupon) {
            session(['coupon' => [
                'code' => $request->code,
             'discount' => $coupon->discount,
             'user_id' => $coupon->user_id,
             'user_type' => $coupon->user_type]]);
            return $this->send_response(true, $coupon, 200);
        }
        return $this->send_response(false, $coupon, 400);
    }

    public function clearCart()
    {
        $cart = $this->cartHelper->delete_cart();
        return $this->send_response(true, $cart, 200, 'Cart has been updated');
    }
    public function redItemQty($product_id, $qtyRed)
    {

        $this->cartHelper->reduce_quantity($product_id, $qtyRed);
        $cart = $this->cartHelper->get_current_cart();
        return $this->send_response(true, $cart, 200, 'Cart has been updated');
    }
    public function removeItem(Request $request)
    {
        $pid  = $request->product_id; //
        $this->cartHelper->remove_item($pid);
        return $this->send_response(true, [], 200, 'Cart Item has been removed');
    }

    public function displayCart()
    {

        $cart_items = [];
        $products = [];
        $total = [];

        $res = $this->getProductFromCart();
        if ($res) {
            $cart_items = $res[0];
            $products = $res[1];
            $total = $res[2];
        }

        // dd($cart_items);

        return view('front.cart', compact(['cart_items', 'products', 'total']));
    }


    public function checkout()
    {
        // $exchangeRates = new ExchangeRate();
        // $result = $exchangeRates->exchangeRate('GBP', 'EUR');

        $res = $this->getProductFromCart();
        // $naira_price = null; // for niara value
        $cart_items = $res[0];
        $products = $res[1];
        $ref = 'BZ' . rand(0, 99999);
        $total = $res[2];
        //HANDEL ALL CONVERSIONS RATE HERE
        $m1 = Money::USD($total,true);
        $config = SiteConfig::find(1);
        $c = ['NGN' => 386.23, 'EUR' => 0.84, 'GBP' => 0.76]; //all currency conversion
        $currencies = array();
        foreach ($c as $key => $curr) {
            array_push($currencies, $m1->convert(currency($key), (double)$curr));
            if ($key == 'NGN') {
                $naira_price = $m1->convert(currency($key), (double)$curr)->getValue();
            }
        }
        ///END OF CONVERSION OPERATION
        $buyer = Auth::guard('buyer')->user();
        return view('front.checkout', compact(['ref', 'cart_items', 'naira_price', 'products', 'total', 'buyer', 'currencies']));
    }

    protected function getProductFromCart()
    {
        $cart_items = $this->cartHelper->get_current_cart();
        $products = array();
        $total = 0;

        foreach ($cart_items as $key => $cart) {

            $product = Product::where('id', $key)->first();

            if ($product != []) {
                //get the coupon code from session
                //check if the coupon code matches product seller id and seller type
                //get the discount from the product and apply it to the product_sales_price
                $coupon = $this->applyCoupon();
                $product->discounted = false;

                if(count($coupon) && $coupon['user_id'] == $product->seller_id->id && $coupon['user_type'] == $product->product_type){

                    $discount = $product->product_sales_price * $coupon['discount'] / 100;
                    $product->product_sales_price = $product->product_sales_price - $discount;
                    $product->discounted = true;
                }
                $product->quantity = $cart['quantity'];
                $product->total = $cart['quantity'] * $product->product_sales_price;
                array_push($products, $product);
                $total += $cart['quantity'] * $product->product_sales_price;
            }
        }

        return [$cart_items, $products, $total];
    }


    public function applyCoupon(){
        if(session()->has('coupon')){
            $coupon = session()->get('coupon');
            return $coupon;
        } return [];
    }

    public function getConversion($total)
    {
      $m1 = Money::USD($total,true);
      $config = SiteConfig::find(1);
      $c = ['NGN' => 386.23, 'EUR' => 0.84, 'GBP' => 0.76]; //all currency conversion
      $currencies = array();
      foreach ($c as $key => $curr) {
        // dd($m1->convert(currency($key), (double)$curr)->getCurrency());

          array_push($currencies,[ $m1->convert(currency($key), (double)$curr),'currency' => $m1->convert(currency($key), (double)$curr)->getCurrency()]);
          if ($key == 'NGN') {
              $naira_price = $m1->convert(currency($key), (double)$curr)->getValue();
          }
      }

      return response()->json($currencies);
    }
}
