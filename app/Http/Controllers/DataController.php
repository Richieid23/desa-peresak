<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function apbdes()
    {
        return view('pages.data.apbdes');
    }

    public function administratif()
    {
        return view('pages.data.administratif');
    }
}
