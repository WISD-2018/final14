<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function rent()
    {
        $user=Auth::user();
        $names=$user['name'];
        return view('rent',compact('names'));
    }

    public function store(Request $request)
    {
        Rent::create($request->all());
        return redirect('/rent')->with('response','已送出，請等待審核 !');
    }

}