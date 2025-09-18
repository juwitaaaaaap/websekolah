<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eskul;

class EskulController extends Controller
{
    public function eskul(){
        $data = Eskul::all();
        return view("eskul", compact('data'));
    }
}
