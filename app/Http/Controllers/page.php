<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class page extends Controller
{
    public function home()
    {
        return view('page.home');
    }
}