@extends('layouts.profile')

@section('aside')
<div class="relative mb-6 p-2 flex flex-col rounded-md bg-white">
    <div class="p-4 flex-1 text-center">

    <div>
        <img src="{{ asset('images/partners/logopedia/gobbi-giulia.jpg') }}" alt="Immagine profilo di Giulia Gobbi" class="mx-auto w-24 h-24 rounded-full" />
    </div>
    <div class="mb-4">
        <p class="font-medium">{{ __( "Giulia Gobbi" ) }}</p>
        <p class="text-gray-600"><small>{{ __( "Valutazione e terapia logopedica" ) }}</small></p>
    </div>

 </div>
</div>

@endsection

@section('content')
<div class="mb-6">
    <h2 class="mb-2 font-medium text-2xl">{{ __( "Dott.ssa Giulia Gobbi" ) }} <span class="z-30 inline-block px-3 py-1 ml-2 rounded font-semibold text-base bg-green-400 text-white">+39 349-2406477</span></h2>
    <p class="font-medium text-gray-700">{{ __( "Piazza Marconi, 3" ) }} - <small class="font-normal">giuliagobbi.logopedista@gmail.com</small></p>
</div>

<div>
    <p>{{ __( "Ho conseguito la laurea in Logopedia presso l'università degli studi di Verona nel novembre del 2012 con votazione di 110 e lode ed esercito la libera professione collaborando con pediatri, medici di base e scuole del territorio." ) }}</p>
</div>

<hr class="my-12 border-t border-t-gray-700" />

@include('logopedia.table')

<hr class="my-12 border-t border-t-gray-700" />

<div>
    <p class="mb-4">{{ "Durante il mio percorso di studi ho svolto tirocinio formativo presso: U.O. Neuropsichiatria Psicologia Riabilitazione Età evolutiva dell'Ulss 4 Alto Vicentino, U.O. Età Evolutiva Disabilità dell'Ulss 5 Ovest Vicentino, Centro Medico di Foniatria (Padova), Medicina Fisica e Riabilitazione dell'Ospedale di Lonigo, U.O.C. Recupero e Riabilitazione Funzionale dell'Ospedale di Santorso e C.R.I.C. (Centro Regionale Invecchiamento Cerebrale)." ) }}</p>
    <p>{{ __( "Partecipo periodicamente a corsi di formazione e aggiornamento secondo il sistema di Educazione Continua in Medicina, cercando sempre di crescere attraverso lo studio e l'esperienza." ) }}</p>
</div>

@include('logopedia.cosa')

@include('logopedia.corsi')

@include('logopedia.come')

@endsection
