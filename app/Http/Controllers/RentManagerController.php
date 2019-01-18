<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RentManagerController extends Controller
{
    public function rentmanager()
    {
        return view('rentmanager');
    }
    public function index()
    {
        $rents=Rent::where('user_name',  Auth::user()->name )->get();
        return view('rentmanager',compact('rents'));
    }

    public function destroy($id)
    {
        Rent::destroy($id);
        return redirect()->route('rentmanager.index');
    }

}