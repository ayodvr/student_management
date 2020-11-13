<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\staff;
use Illuminate\Http\Facade\Input;
use DB;

class attritedController extends Controller
{
    //
    public function index()
    {
        //
        $staffs = staff::onlyTrashed()->get();
        //dd($staff);
        return view('staff/attritedstaff')->with('staffs',$staffs);
    
    }

    public function restore($id)
    {
        //
        $staff = staff::withTrashed()->where('id',$id)->first();
        $staff->restore();
        return redirect()->back();
    }



}
