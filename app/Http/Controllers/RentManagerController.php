<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentManagerController extends Controller
{
    public function rentmanager()
    {
        return view('rentmanager');
    }
}