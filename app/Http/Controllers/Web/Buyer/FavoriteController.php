<?php

namespace App\Http\Controllers\Web\Buyer;

use App\Favorite;
use App\Http\Controllers\Controller;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    use JsonResponse;


    public function __construct()
    {
        $this->buyer = Auth::guard('buyer')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorites = Favorite::where('buyer_id', $this->buyer->id)->get();
        

        return view('dashboard.buyer.favourites', compact(['favorites']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pid = $request->product_id;
        $bid = $request->buyer_id;
        Favorite::updateOrCreate(['buyer_id' => $bid, 'product_id' => $pid], [
            'buyer_id' => $bid,
            'product_id' => $pid
        ]);
        return $this->send_response(true, [], 200, 'Product added to your favorites');
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
    public function destroy(Request $request)
    {
        $fid = $request->fid;
        $fv = Favorite::find($fid);
        if ($fv != null) {
            $fv->delete();
            return $this->send_response(true, [], 200, 'Favorite removed');
        }
        return $this->send_response(false, [], 401, 'Favorite not found');
    }
}
