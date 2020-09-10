<?php

namespace App\Http\Controllers\Web\Networking_agent;

use App\Http\Controllers\Controller;
use App\ImageUpload;
use App\NaSellers;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use JsonResponse;

    protected $networking_agent;

    public function __construct()
    {
            $this->networking_agent = Auth::guard('networking_agent')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stage1 = NaSellers::where('networking_agent_id',$this->networking_agent->id)->where('stage',1)->get();
        $stage2 = NaSellers::where('networking_agent_id',$this->networking_agent->id)->where('stage',2)->get();
        $stage3 = NaSellers::where('networking_agent_id',$this->networking_agent->id)->where('stage',3)->get();

        return view('dashboard.networking_agent.home',compact(['stage1','stage2','stage3']));
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
    public function notification()
    {
      $notifications = $this->networking_agent->notifications()->latest()->paginate(8);

      return view('dashboard.networking_agent.notification',compact(['notifications']));
    }


}
