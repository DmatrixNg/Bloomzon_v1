<?php

namespace App\Http\Controllers\Web\Admin;

use App\Admin;
use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QueryController extends Controller
{
    public function queries()
    {
        $user = Auth::guard('admin')->user();

        if($user->role == 'sub_admin')
        {
            $queries = $user->queries()->paginate(10);
        } else {
            $queries = Query::all();
        }
        

        return view('dashboard.admin.queries', [
            'queries' => $queries
        ]);

    }

    public function create_query($id)
    {
        $admin = Admin::findOrFail($id);

        return view('dashboard.admin.query_create', [
            'admin' => $admin
        ]);

    }

    public function store_query(Request $request)
    {

        $request->validate([
            'message'    => ['required'],
            'subject'  => ['required'],
            'admin_id' => ['required'],
        ]);

        $query = QueryHelper::store($request);

        return redirect('admin/query_replies/' . $query->id);

    }

    public function get_replies($query_id)
    {

        $replies = QueryHelper::replies($query_id);
        
        return view('dashboard.admin.query_replies', [

            // since i am returning to view i need to convert back to array
            'replies'  => json_decode($replies->content()),
            'query_id' => $query_id,

        ] );

    }

    public function super_admin_reply(Request $request, $query_id)
    {
        
        $request->validate([
            'message' => 'required'
        ]);

        $result = QueryHelper::reply($query_id, $request->message, 'super_admin');

        return redirect('/admin/query_replies/' . $query_id);

    }

    public function sub_admin_reply(Request $request, $query_id)
    {
        $request->validate([
            'message' => 'required'
        ]);

        $result = QueryHelper::reply($query_id, $request->message, 'sub_admin');
        
        return redirect('/admin/query_replies/' . $query_id);
    }
}
