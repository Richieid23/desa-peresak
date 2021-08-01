<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sejarah()
    {
        return view('pages.profile.sejarah');
    }

    public function visi_misi()
    {
        return view('pages.profile.visi-misi');
    }
}
