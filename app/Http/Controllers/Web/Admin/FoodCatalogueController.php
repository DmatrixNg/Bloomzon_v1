<?php

namespace App\Http\Controllers\Web\Admin;

use App\FoodCatalogue;
use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\JsonResponse;

class FoodCatalogueController extends Controller
{
    use JsonResponse;
    public function __construct(){
        $this->admin = Auth::guard('admin')->user();
    }

    public function index(){
        $food_catalogues = FoodCatalogue::all();
        return view('dashboard.admin.all-food-catalogues',compact(['food_catalogues']));
    }

    public function create(){
        $admin = $this->admin;
        return view('dashboard.admin.create-catalogue',compact(['admin']));
    }

    public function store(Request $request){
        $imgName = null;
        $request->validate([
            'name' => ['string','required'],
            'description' => ['string','required'],
            'avatar'    => ['required']
        ],['avatar.required'=> "Please upload catalogue image"]);

        if ($request->hasFile('avatar')) {
            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
            try {
                 $request->file('avatar')->storeAs('/assets/fast_food_grocery/catalogue', $imgName, 'public');
                 
            }catch(\Exception $e){
                return $this->send_response(false,$e, 400,'Problem uploading');
            }
        }
        $stored = FoodCatalogue::create([
            'name'=> $request->name,
            'description'=>$request->description,
            'avatar' => $imgName
        ]);
        if($stored) return $this->send_response(true,$stored, 200,'Successful');
    }

    public function destroy($id){
        $delete = FoodCatalogue::find($id)->delete();
        if($delete) return $this->send_response(true,$delete, 200,'Successful');
    }

    public function show($id)
    {
        // 
        $food_catalogue = FoodCatalogue::findOrFail($id);

        return view('dashboard.admin.edit-catalogue', [
            'food_catalogue' => $food_catalogue
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'catalogue_id' => ['required'],
            'name'         => ['required'],
            'description'  => ['required'],
            // 'avatar'       => ['sometimes', 'image'],
        ]);

     
        $catalogue = FoodCatalogue::findOrFail($request->catalogue_id);
        $catalogue->name = $request->name;
        $catalogue->description = $request->description;

        if ($request->hasFile('avatar')) {
            try {
                $catalogue->avatar = FileHelper::upload_image($request->avatar, 'storage/assets/fast_food_grocery/catalogue/');
            }catch(\Exception $e){
                return $e;
            }
        }
       

        $catalogue->save();

        return redirect()->back()->with([
            'message' => 'catalogue updated successfuly',
        ]);
    }
}
