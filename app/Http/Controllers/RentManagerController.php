<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Http\Request;

class RentManagerController extends Controller
{
    public function rentmanager()
    {
        return view('rentmanager');
    }
    public function index()
    {
        $remt=Rent::all();
        return view('rentmanager',compact('rents'));
    }

    public function destroy($id)
    {
        Rent::destroy($id);
        return redirect()->route('rentmanager.index');
    }

}