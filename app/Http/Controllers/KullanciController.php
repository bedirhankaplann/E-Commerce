<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullanciController extends Controller
{
    public function giris_form()
    {
        return view('kullanici.oturumac');
    }

    public function kaydol_form()
    {
        return view('kullanici.kaydol');
    }
}
