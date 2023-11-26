<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Ifthakhar Ahmed';
        $summary = 'A passionate web developer with a focus on Laravel.';
        $nb= 'N:B. This portfolio is under construction.';

        return view('home.index', compact('name', 'summary','nb'));
    }
}

