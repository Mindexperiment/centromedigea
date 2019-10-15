@extends('layouts.page')

@section('breadcrumbs')
<div>
    <div class="container mx-auto pt-8 px-4">

    <nav aria-label="breadcrumb">
        <ol class="mb-4 flex flex-wrap">
            <li><a href="{{ route('website.homepage') }}" class="underline text-blue-600">{{ __( "Home" ) }}</a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="{{ route('servizi.index') }}" class="pl-2 underline text-blue-600">{{ __( "Servizi" ) }}</a></li>
            <li><span class="mx-2">/</span></li>
            <li aria-current="page">{{ __( "Radiologia" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Radiografia panoramica e TAC 3D" ) }}</h2>

    <p class="mb-4">{{ __( "Per studiare a fondo l'anatomia orale del paziente si inizia dall'analisi delle immagini radiologiche." ) }}</p>
    <p class="mb-4">{{ __( "I nuovi apparecchi che realizzano radiografie ci permettono di ottenere immagini di alta qualità esponendo i pazienti ad un basso dosaggio di radiazioni. Le immagini attraverso dei software vengono trasmesse sui computer dove si possono analizzare e studiare." ) }}</p>

    <h3 class="mb-2 text-xl">{{ __( "A cosa serve una panoramica (OPT)?" ) }}</h3>
    <p class="mb-4">{{ __( "L'ortopantomografia (OPT) o panoramica è una tecnica radiografica che fornisce un'immagine dei denti, delle arcate dentarie, delle ossa mandibolari e mascellari, dei seni mascellari su un'unica pellicola radiografica." ) }}</p>

    <h3>{{ __( "A cosa serve la TAC 3D?" ) }}</h3>
    <p class="mb-4">{{ __( "La TAC 3D è un esame radiologico che effettua immagini tridimensionali frutto di un'elaborazione computerizzata. E' un esame radiologico che offre un'immagine molto precisa che consente la valutazione anatomica di strutture orali nel loro aspetto tridimensionale." ) }}</p>
    <p class="mb-4">{{ __( "I principali utilizzi che interessano il distretto odontoiatrico e maxillo-facciale sono:" ) }}</p>

    <ul class="list-disc list-inside">
        <li>{{ __( "Indagini sull'articolazione temporo-mandibolare (ATM)" ) }}</li>
        <li>{{ __( "Indagini endodontiche" ) }}</li>
        <li>{{ __( "Indagini ortognatodontiche" ) }}</li>
        <li>{{ __( "Implantologia computer assistita" ) }}</li>
        <li>{{ __( "Diagnosi di patologie odontoiatriche" ) }}</li>
    </ul>

    <h3 class="mb-2 text-xl">{{ __( "Per il paziente?" ) }}</h3>
    <p class="mb-4">{{ __( "Sia la panoramica che la tac 3D non sono esami invasivi, il centro medico è attrezzato per eseguire l'esame in pochi minuti." ) }}</p>
</article>

@endsection
