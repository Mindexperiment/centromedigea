@extends('layouts.profile')

@section('aside')
<div class="relative mb-6 p-2 flex flex-col rounded-md bg-white">
    <div class="p-4 flex-1 text-center">

    <div class="mb-4">
        <img src="{{ asset('images/partners/protesi/paolo-bio.jpg') }}" alt="Immagine profilo Paolo Sartori" class="mx-auto w-24 h-24 rounded-full" />
    </div>
    <div class="mb-4">
        <p class="font-medium">{{ __( "Paolo Sartori" ) }}</p>
        <p class="text-gray-600"><small>{{ __( "Odontoiatria e protesi dentaria" ) }}</small></p>
    </div>

    </div>
</div>

@endsection

@section('content')
<div class="mb-6">
    <h2 class="mb-2 font-medium text-2xl">{{ __( "Dott. Paolo Sartori" ) }} <span class="z-30 inline-block px-3 py-1 ml-2 rounded font-semibold text-base bg-green-400 text-white">+39 0445-510645</span></h2>
    <p class="font-medium text-gray-700">{{ __( "Via Pio X, Schio loc. Ca'Trenta" ) }} - <small class="font-normal">sartoridottpaolo@gmail.com</small></p>
</div>

<div>
    <p>{{ __( "Dottore laureato in odontoiatria e protesi dentale presso l'Università degli studi di Padova." ) }}</p>
</div>

<hr class="my-12 border-t border-t-gray-700" />

@include('partners.protesi.table')

<hr class="my-12 border-t border-t-gray-700" />

@include('partners.protesi.corsi')

@endsection
