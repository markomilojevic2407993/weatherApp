<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function layout()
    {
        return view('layout');
    }

    public function index()
    {
        $weather = [
            'Beograd' => 35,
            'Pancevo' => 40,
            'Subotica' => 38,
            'Novi Sad' => 35,
        ];

        return view('home', compact('weather'));
    }
}
