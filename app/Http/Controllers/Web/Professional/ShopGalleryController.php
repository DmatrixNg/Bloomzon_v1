<?php

namespace App\Http\Controllers\Web\Professional;

use App\Http\Controllers\Controller;
use App\ShopGallery;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopGalleryController extends Controller
{
    use JsonResponse;
    private $professional;

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
        $professional = $this->professional;
        $shop_galleries = ShopGallery::where('professional_id',$professional->id)->get();
        return view('dashboard.professional.shop-gallery',compact(['professional','shop_galleries']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professional = $this->professional;
        // $shop_galleries = ShopGallery::where('professional_id',$professional->id)->get();
        return view('dashboard.professional.add-shop-gallery',compact(['professional']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgName = null;
        $request->validate([
            'title'=> ['string','required'],
            'description' => ['required','string','max:255'],
            'avatar'    => ['required','file']

        ],['avatar.required' =>'You need to upload an image']);

        if($request->hasFile('avatar')){
            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
            try {
                $url = $request->file('avatar')->storeAs('/assets/gallery/avatar', $imgName, 'public');
              
            }catch(\Exception $e){
                return $this->send_response(false,$e, 400,'Problem adding image to advert');
            }
        }

        $created = ShopGallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'avatar'    =>  $imgName,
            'professional_id' => $request->professional_id
        ]);


        if($created){
            return $this->send_response(true,$created, 200,'Shop Gallery created successfully');
        }
        return $this->send_response(false,[], 400,'Problem creating gallery');


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
