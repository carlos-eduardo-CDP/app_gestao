<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        //return view('site.teste', ['x' => $p1]); //ARRAY ASSOCIATIVO
        //return view('site.teste', compact('p1', 'p2')); //COMPACT
        return view('site.teste')->with('p1',$p1);  //METODO WITH
    }
}
