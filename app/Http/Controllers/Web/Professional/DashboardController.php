<?php

namespace App\Http\Controllers\Web\Professional;

use App\Http\Controllers\Controller;
use App\ImageUpload;
use App\NaSellers;
use App\OrderDetails;
use App\Product;
use App\Professional;
use App\ShopGallery;
use App\Traits\JsonResponse;
use App\WithdrawalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    use JsonResponse;

    protected $professional;

    public function __construct()
    {
            $this->professional = Auth::guard('professional')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professional = Auth::guard('professional')->user();
        $shop_galleries = ShopGallery::where('professional_id',$professional->id)->get();

        $products = $professional->products;
        $orders = $professional->order_details;
        $withdrawals = WithdrawalRequest::where('user_type','professional')->where('user_id',$professional->id)->get();
        return view('dashboard.professional.home', [
            'shop_galleries' => $shop_galleries,
            'products'       => $products,
            'orders'        => $orders,
            'withdrawals'   => $withdrawals
        ]);
    }

    // handles the file and image uploads
    public function fileStore($data)
    {
        $url = array();
        foreach ($data as $img) {
            $image = $img;
            $imageName = $image->getClientOriginalName();
            $image->move(storage_path('products/images'), $imageName);
            array_push($imageName,$url);
            // $imageUpload = new ImageUpload();
            // $imageUpload->filename = $imageName;
            // $imageUpload->save();
        }

        return $url;
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ImageUpload::where('filename', $filename)->delete();
        $path = public_path() . '/images/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
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
    public function notifications(){

      $notifications = $this->professional->notifications()->paginate(10);
        return view('dashboard.professional.notifications',compact(['notifications']));
    }
}
