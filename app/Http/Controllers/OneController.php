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
        $rent=Rent::where('site_id', '采風堂')->get();
        return view('one',compact('rents'));
    }

    public function destroy($id)
    {
        Rent::destroy($id);
        return redirect()->route('one.index');
    }
}