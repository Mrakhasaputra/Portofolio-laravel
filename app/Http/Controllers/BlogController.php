<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function portofolio() {
        return view('portofolio');
    }

    public function kontak() {
        return view('kontak');
    }
}
