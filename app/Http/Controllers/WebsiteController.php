<?php

namespace App\Http\Controller;

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
