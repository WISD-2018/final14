<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function Show()
    {
        $rents=Rent::all();
        return view('admin',compact('rents'));
    }

    public function completed(Request $request)
    {
        $fix = Rent::find($request->id);
        $fix->status=true;
        $fix->save();
        $rents = Rent::all()->where('id',$request->id);
        return view('admin',compact('rents'));

    }
}
