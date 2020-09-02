<?php

namespace App\Http\Controllers\Web\FastFoodGrocery;

use App\FoodCatalogue;
use App\Http\Controllers\Controller;
use App\ImageUpload;
use App\Message;
use App\OrderDetails;
use App\Product;
use Illuminate\Http\Request;
use App\Traits\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Seller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use JsonResponse;

    protected $fast_food_grocery;

    public function __construct()
    {
            $this->fast_food_grocery = Auth::guard('fast_food_grocery')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = $this->fast_food_grocery->id;
        $catalogues = FoodCatalogue::all();

        $orders = $this->seller->order_details()->where('order_type','fast_food_grocery')->get();
        $sales =  $this->seller->order_details()->where('status','delivered')->where('order_type','fast_food_grocery')->get();
        return view('dashboard.fast_food_grocery.home',compact(['orders','sales','catalogues']));
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


    public function contactAdmin(Request $request): \Illuminate\Http\JsonResponse
    {
        $fast_food_groceryMsg = new SellerMessage();
        $this->validator($request->all())->validate();
        $msg = $fast_food_groceryMsg::create($request->all());
        if ($msg) {
            return $this->send_response(true, $msg, 200, 'Message added');
        }
        return $this->send_response(false, $msg, 400, 'Error adding message');
    }


    public function showMessage($message)
    {
        $message = json_decode(base64_decode($message));

        return view('dashboard.fast_food_grocery.show-message', compact(['message']));
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
