<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Http\Request;

class OneController extends Controller
{
    public function one()
    {
        return view('one');
    }

    public function index()
    {
        $rents=Rent::where('site_id', '采風堂')->get();
        return view('one',compact('rents'));
    }

    public function page()
    {
        return view('admin.one');
    }

    public function show()
    {
        $rents=Rent::where('site_id', '采風堂')->get();
        return view('admin.one',compact('rents'));
    }

}