<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ajaxpage extends Controller
{
    public function lokasi()
    {
        return view('page.ajax.lokasi');
    }
}
