@extends('layouts.layout')

@section('body')
    @include('layouts.header')

    @include('homepage.slideshow')

    @include('homepage.il-centro')

    @include('homepage.contatti')

    @include('homepage.valori')

    @include('homepage.lead')

    @include('homepage.il-team')

    @include('layouts.footer')

@endsection
