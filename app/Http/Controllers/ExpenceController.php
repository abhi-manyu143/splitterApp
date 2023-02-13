<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use DB;

class ExpenceController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('auth');
    }

    public function ExpenceView($id)
    {
        $data = DB::table("expenses")->where('group_id', $id)->get();
        return view('expence_list', compact('id', 'data'));
    }
    

    public function ExpenceSave(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'amount' => 'required'
        ]);

        $data = new Expense;

        $data->title = $request->input('title');
        $data->amount = $request->input('amount');
        $data->group_id = $id;

        $savedata = $data->save();

        if($savedata)
        {
            return view('expence_list', compact('id'));
        }

    }

    public function ExpenceSplitter($id,$tt)
    {
        $data = DB::table('friends')->where('group_id', $id)->get();

        $member = array();

        foreach ($data as $d)
        {
            $member[] = $d->name;
        }

        $count = count($member);

        $listmember = DB::table('expenses')->where('title', $tt)->get();

        $amount = $listmember[0]->amount;

        $exp = $amount / $count;

        // echo "<pre>";
        // print_r($exp);
        // die();
        return view('Splitter_list', compact('exp', 'data'));
    }
}
