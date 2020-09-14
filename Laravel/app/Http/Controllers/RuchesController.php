<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuchesController extends Controller
{
    public function index()
    {
        return view('ruches');
    }

    public function voir() {
        $nom = \request('nom');
    }
}
