<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function history()
    {
        return view('history');
    }

    public function Show()
    {
        $rents=Rent::all();
        return view('history',compact('rents'));
    }
}