<?php

namespace App\Http\Controllers\Web\Seller;

use App\Http\Controllers\Controller;
use App\ImageUpload;
use App\Message;
use App\OrderDetails;
use App\Product;
use Illuminate\Http\Request;
use App\Traits\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Seller;
use App\WithdrawalRequest;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use JsonResponse;

    protected $seller;

    public function __construct()
    {
            $this->seller = Auth::guard('seller')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = $this->seller->id;
        $withdrawals = WithdrawalRequest::where('user_id',$id)->where('user_type','seller')->where('status',1)->get();
        $orders = $this->seller->order_details()->get();
        $sales =  $this->seller->order_details()->where('status','delivered')->get();
        return view('dashboard.seller.home',compact(['orders','sales','withdrawals']));
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
        $sellerMsg = new SellerMessage();
        $this->validator($request->all())->validate();
        $msg = $sellerMsg::create($request->all());
        if ($msg) {
            return $this->send_response(true, $msg, 200, 'Message added');
        }
        return $this->send_response(false, $msg, 400, 'Error adding message');
    }

    public function listMessages($id)
    {
        $id = base64_decode($id);
        $messages = Message::where('seller_id', $id)->get();
        return view('dashboard.seller.messages', compact(['messages']));
    }

    public function showMessage($message)
    {
        $message = json_decode(base64_decode($message));

        return view('dashboard.seller.show-message', compact(['message']));
    }
    protected function validator(array $data)
    {

        // able->integer('seller_id')->unsigned();
        //     $table->mediumText('message');
        //     $table->string('subject');
        //     $table->string('issue_type');
        //     $table->mediumText('reply')->nullable();
        //     $table->dateTime('message_date')->nullable();
        //     $table->dateTime('reply_date')->nullable();

        return Validator::make($data, [
            'seller_id'   => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
            'issue_type'     => ['required', 'string'],
        ]);
    }
    public function notifications(){

      $notifications = $this->seller->notifications;
        return view('dashboard.seller.notifications',compact(['notifications']));
    }
    public function notification($id){
      $notifications = $this->seller->notifications;
        return view('dashboard.seller.notifications',compact(['notifications']));
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
