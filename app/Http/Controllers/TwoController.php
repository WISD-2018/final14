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
        $rent=Rent::where('site_id', '匯川堂')->get();
        return view('two',compact('rents'));
    }

    public function destroy($id)
    {
        Rent::destroy($id);
        return redirect()->route('two.index');
    }


}