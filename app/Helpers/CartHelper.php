<?php

namespace App\Helpers;


/*

example of how the cart session array will look.
the 'key' will be the product id
cart = [
    key_1 => [
        priduct_id => 1,
        quantity => 3
    ],

    key_2 => [
        priduct_id => 4,
        quantity => 1
    ],

    key_3 => [
        priduct_id => 29,
        quantity => 2
    ]
]

*/

class CartHelper {

    protected $current_cart = [];

    public function __construct()
    {
        $this->get_current_cart();
    }

    /**
     * get the current cart session
     *
     * @return  array
     */
    public function get_current_cart()
    {

        if(session()->has('cart')) {
            $this->current_cart = session()->get('cart');
        } else {
            $this->current_cart = [];
        }

        return $this->current_cart;

    }

    /**
     * move the content of $this->current_cart to cart session
     *
     * @return  array
     */
    protected function set_cart()
    {
        session(['cart' => $this->current_cart]);
    }

    /**
     * increase the quantity of an item in cart
     *
     * @return  null
     */
    public function inc_quantity($product_id, $increment_by = 1, $color = "")
    {

        if(array_key_exists($product_id, $this->current_cart)) {

            $this->current_cart[$product_id]['quantity'] = $increment_by;

            $this->set_cart();
            return;

        }

        $this->current_cart[$product_id] = [
            'product_id' => $product_id,
            'quantity'   => $increment_by,
            'color'   => $color
        ];

        $this->set_cart();

    }

    /**
     * reduce the quantity of an item in cart
     *
     * @return  null
     */
    public function reduce_quantity($product_id, $reduce_by = 1)
    {

        if(array_key_exists($product_id, $this->current_cart)) {

            $this->current_cart[$product_id]['quantity'] = $reduce_by;

            // remove the item if the quantity is less than one
            if($this->current_cart[$product_id]['quantity'] < 1) {
                $this->remove_item($product_id);
            }

            // delete the cart if no item is in cart
            if(count($this->current_cart) < 1) {
                $this->delete_cart();
                return [];
            }

        }

        $this->set_cart();

    }

    /**
     * remove the item from cart
     *
     * @return  array
     */
    public function remove_item($product_id)
    {

        unset($this->current_cart[$product_id]);
        $this->set_cart();

    }

    /**
     * remove the item from cart
     *
     * @return  array
     */
    public function delete_cart()
    {

        //
        if(session()->has('cart')) {
            // Forget cart array...
            session()->forget('cart');
            session()->forget('coupon');
        }
    }


}
