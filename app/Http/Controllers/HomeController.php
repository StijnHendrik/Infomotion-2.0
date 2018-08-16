<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function privacy()
    {
        return view('privacy.privacy');
    }

    public function av()
    {
        return view('privacy.algemenevoorwaarde');
    }
}
