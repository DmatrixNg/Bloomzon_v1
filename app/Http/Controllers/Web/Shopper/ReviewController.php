<?php

namespace App\Http\Controllers\Web\Shopper;

use App\Http\Controllers\Controller;
use App\Review;
use App\ReviewReply;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    use JsonResponse;
    protected $shopper;
    public function __construct()
    {   
        $this->shopper = Auth::guard('shopper')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('dashboard.shopper.review-feedback',compact(['reviews']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reply($id)
    {
        $review = Review::find($id);
        $shopper = $this->shopper;
        return view('dashboard.shopper.reply-review',compact(['review','shopper']));
    }

    public function storeReply(Request $request){
        $request->validate([
            'message' => 'required | string'
        ]);
        $reply = ReviewReply::create([
            'message'   => $request->message,
            'reply_by'  => $request->reply_by,
            'review_id' => $request->review_id,
            'reply_type' => $request->reply_type,

        ]);

        if($reply){
            return $this->send_response(true);
        }
        else return $this->send_response(false);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
