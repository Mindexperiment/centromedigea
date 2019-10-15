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
        return view('services.index', [ 'page' => 'services.pages.chirurgia-page' ])
            ->with('title', 'Chirurgia orale');
    }

    public function conservativa()
    {
        return view('services.index', [ 'page' => 'services.pages.conservativa-page' ])
            ->with('title', 'Odontoiatria conservativa');
    }

    public function estetica()
    {
        return view('services.index', [ 'page' => 'services.pages.estetica-page' ])
            ->with('title', 'Estetica dentale');
    }

    public function igiene()
    {
        return view('services.index', [ 'page' => 'services.pages.igiene-page' ])
            ->with('title', 'Igiene orale');
    }

    public function implantologia()
    {
        return view('services.index', [ 'page' => 'services.pages.implantologia-page' ])
            ->with('title', 'Implantologia');
    }

    public function laser()
    {
        return view('services.index', [ 'page' => 'services.pages.laser-page' ])
            ->with('title', 'Laser terapia');
    }

    public function medicina()
    {
        return view('services.index', [ 'page' => 'services.pages.medicina-page' ])
            ->with('title', 'Medicina estetica');
    }

    public function ortodonzia()
    {
        return view('services.index', [ 'page' => 'services.pages.ortodonzia-page' ])
            ->with('title', 'Ortodonzia');
    }

    public function osteopatia()
    {
        return view('services.index', [ 'page' => 'services.pages.osteopatia-page' ])
            ->with('title', 'Osteopatia');
    }

    public function paradontologia()
    {
        return view('services.index', [ 'page' => 'services.pages.paradontologia-page' ])
            ->with('title', 'Paradontologia');
    }

    public function pedodonzia()
    {
        return view('services.index', [ 'page' => 'services.pages.pedodonzia-page' ])
            ->with('title', 'Pedodonzia');
    }

    public function prgf()
    {
        return view('services.index', [ 'page' => 'services.pages.prgf-page' ])
            ->with('title', 'PRGF ed emoderivati');
    }

    public function protesi()
    {
        return view('services.index', [ 'page' => 'services.pages.protesi-page' ])
            ->with('title', 'Protesi');
    }

    public function radiologia()
    {
        return view('services.index', [ 'page' => 'services.pages.radiologia-page' ])
            ->with('title', 'Radiologia');
    }

    public function roncopatia()
    {
        return view('services.index', [ 'page' => 'services.pages.roncopatia-page' ])
            ->with('title', 'Roncopatia');
    }

    public function sedazione()
    {
        return view('services.index', [ 'page' => 'services.pages.sedazione-page' ])
            ->with('title', 'Sedazione');
    }
}
