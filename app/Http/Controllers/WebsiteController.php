<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('website.homepage');
    }

    public function bambini()
    {
        return view('website.bambini');
    }
}
