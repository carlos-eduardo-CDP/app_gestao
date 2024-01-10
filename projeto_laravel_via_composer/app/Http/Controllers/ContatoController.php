<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContatoController extends Controller
{
    public function contato()
    {
        return view('site.contato');
    }
}
