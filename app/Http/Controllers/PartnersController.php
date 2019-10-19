<?php

namespace App\Http\Controllers;

class PartnersController extends Controller
{
    public function index()
    {
        return view('partners.index');
    }

    public function estetica()
    {
        return view('partners.estetica');
    }

    public function fisioterapia()
    {
        return view('partners.fisioterapia');
    }

    public function logopedia()
    {
        return view('partners.logopedia');
    }

    public function odontoiatria()
    {
        return view('partners.odontoiatria');
    }

    public function pedodonzia()
    {
        return view('partners.pedodonzia');
    }

    public function pilates()
    {
        return view('partners.pilates');
    }

    public function protesi()
    {
        return view('partners.protesi');
    }

    public function udito()
    {
        return view('partners.udito');
    }
}
