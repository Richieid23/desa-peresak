<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LembagaController extends Controller
{
    public function karang_taruna()
    {
        return view('pages.lembaga.taruna');
    }
}
