<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('pages.profile.profile');
    }

    public function sejarah()
    {
        return view('pages.profile.sejarah');
    }

    public function visi_misi()
    {
        return view('pages.profile.visi-misi');
    }

    public function perangkat()
    {
        return view('pages.profile.perangkat');
    }

    public function potensi()
    {
        return view('pages.profile.potensi');
    }
}
