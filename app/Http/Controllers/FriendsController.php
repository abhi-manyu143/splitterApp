<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\friends;
use App\Models\Group;
use DB;

class FriendsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function friendsControl($id)
    {
        // $data[] = friends::where('group_id', $id)->get();
        $data = DB::table('friends')->where('group_id', $id)->get();
        // echo "<pre>";
        // print_r($data);
        // die();
        return view('friends_list',compact('id','data'));
    }
    public function friendsave(Request $request,$id)
    {
        $validated = $request->validate([
            'name'=> 'required',
        ]);

        $data = new friends;

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->group_id = $id;

        $savedata = $data->save();

        if($savedata)
        {
            return view('friends_list');
        }
        
    }
    
}
