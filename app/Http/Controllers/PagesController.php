<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function features()
    {
        return view('features');
    }

    public function index()
    {
        return view('index');
    }

    public function pricing()
    {
        $nama_halaman = 'Pricing Page Baru';
        return view('pricing', 
            ['nama_halaman' => $nama_halaman]
        );
    }
}
