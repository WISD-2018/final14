<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Http\Request;

class TwoController extends Controller
{
    public function two()
    {
        return view('two');
    }

    public function index()
    {
        $rents=Rent::where('site_id', '匯川堂')->get();
        return view('two',compact('rents'));
    }

    public function page()
    {
        return view('admin.two');
    }

    public function show()
    {
        $rents=Rent::where('site_id', '匯川堂')->get();
        return view('admin.two',compact('rents'));
    }

}