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

}
