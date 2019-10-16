@extends('layouts.profile')

@section('aside')
<div class="relative mb-6 p-2 flex flex-col rounded-md bg-white">
    <div class="p-4 flex-1 text-center">

    <div class="mb-4">
        <img src="{{ asset('images/partners/pedodonzia/monica-bio.jpg') }}" alt="Immagine profilo Monica Pozza" class="mx-auto w-24 h-24 rounded-full" />
    </div>
    <div class="mb-4">
        <p class="font-medium">{{ __( "Monica Pozza" ) }}</p>
        <p class="text-gray-600"><small>{{ __( "Odontoiatra" ) }}</small></p>
    </div>

    </div>
</div>

@endsection

@section('content')
<div class="mb-6">
    <h2 class="mb-2 font-medium text-2xl">{{ __( "Dott.ssa Monica Pozza" ) }} <span class="z-30 inline-block px-3 py-1 ml-2 rounded font-semibold text-base bg-green-400 text-white">+39 349-8245614</span></h2>
    <p class="font-medium text-gray-700">{{ __( "Piazza Marconi, 4" ) }} - <small class="font-normal">info@centromedigea.it</small></p>
</div>

<div>
    <p>{{ __( "Si occupa principalmente di odontoiatria infantile, parodontologia minimamente invasiva, estetica e conservativa." ) }}</p>
</div>

<hr class="my-12 border-t border-t-gray-700" />

@include('partners.pedodonzia.table')

<hr class="my-12 border-t border-t-gray-700" />

<div class="mb-8">
    <p class="mb-4">{{ __( "Mi sono laureata in Odontoiatria presso l'Universidad Alfonso X El Sabio a Madrid nel 2016." ) }}</p>
    <p class="mb-4">{{ __( "Ho continuato la mia formazione con un corso di due anni di Ortodonzia Straight Wire a Milano ed ho frequentato diversi corsi di odontoiatria infantile, conservativa e parodontologia." ) }}</p>
    <p class="mb-4">Sono socia ANDI (<em>Associazione Nazionale Dentisti Italiani</em>) e SIOI (<em>Società Italiana Odontoiatria Infantile</em>)</p>
    <p class="mb-4">{{ __( "Lavorare con i bambini è diventata la mia passione, lo trovo un lavoro molto stimolante perche i nostri piccoli pazienti ci spingono a dare sempre di più. Ogni giorno con loro è una scoperta. Ho portato avanti vari progetti di prevenzione nella scuole dell'infanzia del territorio e presso centri pedagogici. Organizzo spesso serate informative per i genitori." ) }}</p>
    <p class="mb-4">{{ __( "Ho aderito a vari progetti per sensibilizzare adulti e bambini sulla cura dell'igiene orale nelle Scuole dell'infanzia di Castelgomberto e Brogliano e presso il Centro Pedagogico Proposte Educative (Cornedo)." ) }}</p>
    <p>{{ __( "Nello studio di Castelgomberto e Ca' Trenta di Schio mio occupo di pedodonzia, ortodonzia, conservativa e parodontologia. A Verona collaboro con uno studio odontoiatrico in cui mi occupo in maniera esclusiva di odontoiatria infantile." ) }}</p>
</div>

@include('partners.pedodonzia.corsi')

@endsection
