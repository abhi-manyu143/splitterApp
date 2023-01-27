<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addgroup()
    {
        return view('group_form');
    }

    public function savegroup(Request $request)
    {
        $validated = $request->validate([
            'group_name' => 'required'
        ]);

        $data = new Group();

        // $data->group_name()->associate();

        $data->group_name = $request->input('group_name');

        $savedate = $data->save();

        if($savedate)
        {
            return redirect('home')->with('Added', 'Group saved successfully');
        }
        else
        {
            return redirect('group_form')->with('error', 'Group not saved');
        }
    }
}
