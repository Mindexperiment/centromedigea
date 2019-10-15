@extends('layouts.layout')

@section('body')
    @include('layouts.header')

    @include($page)

    @include('layouts.footer')

@endsection
