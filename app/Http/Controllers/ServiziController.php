<?php

namespace App\Http\Controllers;

class ServiziController extends Controller
{
    public function index()
    {
        return view('servizi.index');
    }

    public function chirurgia()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.chirurgia-page' ])
            ->with('title', 'Chirurgia orale');
    }

    public function conservativa()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.conservativa-page' ])
            ->with('title', 'Odontoiatria conservativa');
    }

    public function estetica()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.estetica-page' ])
            ->with('title', 'Estetica dentale');
    }

    public function igiene()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.igiene-page' ])
            ->with('title', 'Igiene orale');
    }

    public function implantologia()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.implantologia-page' ])
            ->with('title', 'Implantologia');
    }

    public function laser()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.laser-page' ])
            ->with('title', 'Laser terapia');
    }

    public function medicina()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.medicina-page' ])
            ->with('title', 'Medicina estetica');
    }

    public function ortodonzia()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.ortodonzia-page' ])
            ->with('title', 'Ortodonzia');
    }

    public function osteopatia()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.osteopatia-page' ])
            ->with('title', 'Osteopatia');
    }

    public function paradontologia()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.paradontologia-page' ])
            ->with('title', 'Paradontologia');
    }

    public function pedodonzia()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.pedodonzia-page' ])
            ->with('title', 'Pedodonzia');
    }

    public function prgf()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.prgf-page' ])
            ->with('title', 'PRGF ed emoderivati');
    }

    public function protesi()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.protesi-page' ])
            ->with('title', 'Protesi');
    }

    public function radiologia()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.radiologia-page' ])
            ->with('title', 'Radiologia');
    }

    public function roncopatia()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.roncopatia-page' ])
            ->with('title', 'Roncopatia');
    }

    public function sedazione()
    {
        return view('servizi.index', [ 'page' => 'servizi.pages.sedazione-page' ])
            ->with('title', 'Sedazione');
    }
}
