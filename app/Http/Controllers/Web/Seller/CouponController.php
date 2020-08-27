<?php

namespace App\Http\Controllers\Web\Seller;

use App\Coupon;
use App\Http\Controllers\Controller;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $seller;
    public function __construct()
    {
        $this->seller = Auth::guard('seller')->user();
    }
    public function index()
    {
        $coupons = Coupon::where('user_id',$this->seller->id)->get();
        return view('dashboard.seller.promotion',compact(['coupons']));
    }

    public function changeStatus($id){
        $coupon = Coupon::find($id);
        $coupon->status = $coupon->status == 1?0:1;
        $coupon->save();
        return $this->send_response(true,$coupon,200); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seller = $this->seller;
        return view('dashboard.seller.promotion2',compact(['seller']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required | string | max:255',
            'code'          => 'string | required',
            'description'   => 'string | required',
            'component'     => 'string | required',
            'discount'      => 'integer | required'
        ]);

        $created = Coupon::create(
            ['name'         => $request->name,
            'code'          =>  $request->code,
            'description'   =>  $request->description,
            'component'     => $request->component,
            'user_id'       =>  $request->user_id,
            'user_type'     =>  $request->user_type,
            'discount'      => $request->discount,
            'status'        => 0
        ]
        );
        if($created){
            return $this->send_response(true,$created,200);
        }return $this->send_response(false,$created,500);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
