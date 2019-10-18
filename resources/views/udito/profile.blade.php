@extends('layouts.profile')

@section('aside')
<div class="relative mb-6 p-2 flex flex-col rounded-md bg-white">
    <div class="p-4 flex-1 text-center">

    <div class="mb-4">
        <img src="{{ asset('images/partners/udito/massignani-matteo.jpg') }}" alt="Immagine profilo di Matteo Massignani" class="mx-auto w-24 h-24 rounded-full" />
    </div>
    <div class="mb-4">
        <p class="font-medium">{{ __( "Matteo Massignani" ) }}</p>
        <p class="text-gray-600"><small>{{ __( "Tecnico audio protesista" ) }}</small></p>
    </div>

    </div>
</div>

@endsection

@section('content')
<div class="mb-6">
    <h2 class="mb-2 font-medium text-2xl">{{ __( "Dott. Matteo Massignani" ) }} <span class="z-30 inline-block px-3 py-1 ml-2 rounded font-semibold text-base bg-green-400 text-white">+39 338-3978524</span></h2>
    <p class="font-medium text-gray-700">{{ __( "Piazza Marconi, 3" ) }} - <small class="font-normal">filiale753@amplifon.com</small></p>
</div>

<div>
    <div class="mb-6">
        <div class="flex justify-center">
            <div class="mb-6 p-8 text-center">
                <p class="font-semibold text-2xl">{{ __( "Controllo Gratuito dell'udito" ) }}</p>
            </div>
            <div class="mb-6 p-8 text-center">
                <p class="font-semibold text-2xl">{{ __( "Prova fino a 30 giorni" ) }}</p>
            </div>
        </div>
        <div class="p-8 text-center">
            <p class="font-semibold text-2xl">{{ __( "Assistenza apparecchi acustici" ) }}</p>
        </div>
    </div>
    <div class="p-8">
        <a href="https://www.amplifon.com/it/" title="Sito web di Amplifon" target="_blank">
            @include('svg.amplifon')

        </a>
    </div>
</div>

<hr class="my-12 border-t border-t-gray-700" />

@include('udito.table')

<hr class="my-12 border-t border-t-gray-700" />

<div>
    <p class="mb-4">Ho conseguito la Laurea in <strong>Tecniche Audioprotesiche</strong> presso l'<em>Università degli studi di Verona Medicina e Chirurgia</em> nel 2006.</p>
    <p class="mb-4">Lavoro come Audioprotesista dal 2006 collaborando attivamente con l'azienda <a href="https://www.amplifon.com/it/">Amplifon</a> all'interno dei centri medici presenti su tutto il territorio della Valle dell'Agno.</p>
    <p>I punti di riferimento che guidano il mio operato sono l'<b>Etica professionale</b>, la <b>Formazione</b> e l'<b>Aggiornamento</b> continuo, per garantire i più alti standard qualitativi da offrire ai miei pazienti.</p>
</div>

@include('udito.services')

@endsection
