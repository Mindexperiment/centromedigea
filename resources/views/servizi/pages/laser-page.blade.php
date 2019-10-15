@extends('layouts.page')

@section('breadcrumbs')
<div>
    <div class="container mx-auto pt-8 px-4">

    <nav aria-label="breadcrumb">
        <ol class="mb-4 flex flex-wrap">
            <li><a href="{{ route('website.homepage') }}" class="underline text-blue-600">{{ __( "Home" ) }}</a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="{{ route('services.index') }}" class="pl-2 underline text-blue-600">{{ __( "Servizi" ) }}</a></li>
            <li><span class="mx-2">/</span></li>
            <li aria-current="page">{{ __( "Laser" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Laser terapia" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Il benessere a luce pulsante" ) }}</p>

    <p class="mb-4">Il <strong>laser a onda piana</strong> trova grande applicazione nel campo dell'odontoiatria e della medicina estetica.</p>
    <p class="mb-4">Si tratta infatti di <em>una tecnologia minimamente invasiva</em> che porta a numerosi vantaggi per il paziente.</p>

    <h3 class="mb-2 text-xl">{{ __( "Il laser in Odontoiatria" ) }}</h3>
    <p class="mb-4">In <strong>odontoiatria</strong> la laser terapia viene utilizzata <em>per minimizzare i fastidi che seguono le procedure dentali</em> (ipersensibilità dentale, infiammazioni) e per l'ottimo <em>effetto emostatico</em>, <em>cicatrizzante e antibatterico</em>.</p>
    <p class="mb-4">Il laser viene preferito ad altri strumenti nelle operazioni microchirurgiche, eliminando la necessità dell'anestesia locale. Viene inoltre <em>utilizzato per la pulizia delle tasche parodontali</em>, in endodonzia per la <em>sterilizzazione dei canali e nello sbiancamento dentale</em>, poiché riesce a penetrare in profondità attaccando con efficacia le macchie dei denti.</p>
    <p class="mb-4">L'utilizzo del <strong>laser</strong> garantisce <em>riduzione del dolore</em>, riduzione <em>delle complicazioni</em> e, in generale, una <em>guarigione più rapida</em>.</p>

    <h3 class="mb-2 text-xl">{{ __( "Il laser nella medicina estetica" ) }}</h3>
    <p class="mb-4">In <strong>medicina estetica</strong> viene utilizzato <em>per trattare inestetismi quali verruche, angiomi, telangectasie e  fibromi</em> e per intervenire su <em>acne, cicatrici, cisti e lentigio senile</em>.</p>
    <p class="mb-4">{{ __( "Anche in questo caso l'impatto sul paziente è minimamente invasivo e la guarigione è più rapida." ) }}</p>
    <p class="mb-4">Questo strumento <em>garantisce anche un ottimo risultato estetico</em> grazie al rimodellamento delle fibre di collagene che contribuiscono a dare alla pelle un aspetto più levigato.</p>
</article>

@endsection
