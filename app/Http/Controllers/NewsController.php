<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.berita.index');
    }

    public function details()
    {
        return view('pages.berita.detail');
    }
}
