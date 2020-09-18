<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Product;
use App\Review;
use App\SubCategory;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile as HttpUploadedFile;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile as FileUploadedFile;
use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{

    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
    //list all prpoducts of sellers
    // public function sellerList($id){
    //     $products = Product::where('seller_id',$id)->get();

    //     return view('dashboard.seller.allproducts',compact(['products']));
    // }

    //





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(Request $request)
    // {

    //     $prod = new Product();

    //     $request->validate([
    //         'product_name'           => ['required', 'string', 'max:255'],
    //         'product_description'    => ['required', 'string'],
    //         'product_price'          => ['required', 'string'],
    //         'product_color'          => ['required', 'string'],
    //         'minimum_order_quantity' => ['integer'],
    //         'product_sales_price'     => [],
    //         'weight'                => 'required | integer',

    //     ]);
    //     $uploadedFiles = array();
    //     $created = $prod->create($request->all());
    //     if($created){
    //         return $this->send_response(true, $created, 200, 'Product added');
    //     } else {
    //         return $this->send_response(false, [], 400, 'Message added');
    //     }

    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'product_name'           => ['required', 'string', 'max:255'],
            'product_description'    => ['required', 'string'],
            'product_price'          => ['required', 'string'],
            'product_color'          => ['required', 'string'],
            'minimum_order_quantity' => ['integer'],
            'product_sale_price'     => [],
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      // dd($request->id);
        $id = base64_decode($request->id);
        $product = Product::where('id',$id)->first();
        //redirects ifproduct does not exist
        if(!$product){
         return redirect('/not-found');
        }
        $colors = $product->product_color?$product->product_color:[];

        $images = [];
        if($product->avatars) {
            $images = $product->avatars;
        }


        return view('front.product-details', compact(['product','images','colors']));
    }

    public function addReview(Request $request){

// Log::debug($request);
//
// dd($request);
        //check if user already gave reviews
        $reviewExist = Review::where('buyer_id',$request->buyer_id)->where('product_id',$request->product_id)->first();

        if($reviewExist != null){
            $reviewExist->update($request->all());
            return $this->send_response(true, $reviewExist, 200, 'Product Review updated');
        }


        //creates
        $review = Review::create($request->all());
        if($review){
            return $this->send_response(true, $review, 200, 'Product Review added');
        }

        return $this->send_response(true, $review, 400, 'Product added');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function checkout(){
        return view('front.checkout');
    }
    public function edit($id)
    {
        //
    }

    public function getSubCategories($id){
        $sub = SubCategory::where('category_id',$id)->get();
        return $this->send_response(true, $sub, 200, 'Product sub-categories listed');
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

    //handles images sent from dropzones
    public function upload_image(Request $request)
    {
        if($request->hasFile('file')){
            $imgName = time() . '.' . $request->file->getClientOriginalExtension();
            try {
                $url = $request->file('file')->storeAs('/assets/product/avatars', $imgName, 'public');

               return $this->send_response(false,$imgName, 200,'Image stored');
            }catch(\Exception $e){
                return $this->send_response(false,$e, 400,'Problem adding image to advert');
            }
        }
    }

    //deletes images sent form dropzone
    public function delete_image(Request $request){
        $filename = $request->filename;
        $path = storage_path().'assets/product/avatars/'.$filename;
        if(file_exists($path)){
            unlink($path);
        }
        return $filename;
    }
}
