@extends('layouts.profile')

@section('aside')
<div class="relative mb-6 p-2 flex flex-col rounded-md bg-white">
    <div class="p-4 flex-1 text-center">

        <div class="mb-4">
            <img src="{{ asset('images/partners/estetica/massignani-marta.jpg') }}" alt="Immagine profilo di Marta Massignani" class="mx-auto w-24 h-24 rounded-full" />
        </div>
        <div class="mb-4">
            <p class="font-medium">{{ __( "Marta Massignani" ) }}</p>
            <p class="text-gray-600"><small>{{ __( "Specialista in chirurgia generale" ) }}</small></p>
            <p class="text-gray-600"><small>{{ __( "Medicina estetica" ) }}</small></p>
        </div>

    </div>
</div>

@endsection

@section('content')
<div class="mb-6">
    <h2 class="mb-2 font-medium text-2xl">{{ __( "Dott.ssa Marta Massignani" ) }} <span class="z-30 inline-block px-3 py-1 ml-2 rounded font-semibold text-base bg-green-400 text-white">+39 328-9587773</span></h2>
    <p class="font-medium text-gray-700">{{ __( "Piazza Marconi, 3" ) }} - <small class="font-normal">info@martamassignani.it</small></p>
</div>

<div>
    <p>{{ __( "Diplomata presso la Scuola Internazionale di Medicina Estetica della Fondazione FateBeneFratelli di Roma, da anni si occupa di medicina estetica e collabora con diversi chirurghi plastici." ) }}</p>
</div>

<hr class="my-12 border-t border-t-gray-700" />

@include('estetica.table')

<hr class="my-12 border-t border-t-gray-700" />

<div>
    <p class="mb-4">{{ __( "Laureata in Medicina e Chirurgia presso l'Università di Verona nel 2008, consegue la laurea specialistica in Chirurgia Generale nel 2015." ) }}</p>
    <p class="mb-4">{{ __( "Durante il percorso accademico inizia a frequentare il reparto di Chirurgia Plastica e Ricostruttiva dell'Azienda Ospedaliera Universitaria di Verona dove si appassiona alla chirurgia e alla medicina estetica." ) }}</p>
    <p>{{ __( "Si aggiorna costantemente e frequenta regolarmente corsi e workshop organizzati dalle più importanti Società Scientifiche del settore." ) }}</p>
</div>

@include('estetica.medicina')

@include('estetica.ambulatoriale')

@endsection
