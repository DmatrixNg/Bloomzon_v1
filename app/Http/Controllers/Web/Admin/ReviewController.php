<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;
use App\Traits\JsonResponse;

class ReviewController extends Controller
{

    use JsonResponse;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.admin.review', [
            'reviews' => $reviews,
        ]);

    }

    public function change_status($id)
    {
        $ffg = Review::find($id);
        if($ffg->status == 1) {
            $ffg->status = 0;
            $stat = "Rejected";
        } else {
            $ffg->status = 1;
            $stat = "Accepted";
        }
        $result = $ffg->save();
        $sender = \App\Buyer::find($ffg->buyer_id)->first();
        $sender->notify(new \App\Notifications\Action($ffg,$stat));
        if($result) return $this->send_response(true,$ffg,200,'Status has been changes');
        return $this->send_response(true,$ffg,400,'');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
