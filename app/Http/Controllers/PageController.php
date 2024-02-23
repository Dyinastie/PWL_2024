<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama : Dyinastie Marchelina Puspitawening | NIM : 2241720166';
    }

    public function articles($id)
    {
        return 'Halaman artikel dengan ID ' . $id;
    }
}
