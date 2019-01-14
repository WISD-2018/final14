<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentController extends Controller
{
    public function rent()
    {
        return view('rent');
    }
}