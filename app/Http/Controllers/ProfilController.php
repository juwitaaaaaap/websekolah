<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;

class ProfilController extends Controller
{
    public function profil(){
        $data = profil::all();
        return view("profil", compact('data'));
    }
}
