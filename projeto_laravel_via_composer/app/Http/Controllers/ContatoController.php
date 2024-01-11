<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContatoController extends Controller
{
    public function contato()
    {

        $teste = new \App\Models\SiteContato();



        return view('site.contato');
    }
}
