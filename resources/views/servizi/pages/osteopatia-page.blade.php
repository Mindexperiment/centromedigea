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
            <li aria-current="page">{{ __( "Osteopatia" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Osteopatia" ) }}</h2>

    <p class="mb-4">{{ __( "L'osteopatia è una professione sanitaria (individuata ufficialmente nella legge 3/2018) basata su un approccio integrato e complementare alla medicina tradizionale." ) }}</p>
    <p class="mb-4">{{ __( "Attraverso una valutazione osteopatica, individua la “disfunzione somatica”, espressione dell'alterazione dello stato di salute causato da eventi stressanti esterni o interni all'organismo, come traumi e/o patologie. Solitamente si manifestano principalmente sul sistema muscolo scheletrico con dolore o riduzione di mobilità." ) }}</p>
    <p class="mb-4">{{ __( "L'osteopata, attraverso tecniche specifiche, stimola il ripristino della mobilità fisiologica a livello dei diversi sistemi (circolatorio, respiratorio, fasciale, nervoso, muscolo-scheletrico) che attraverso un'attività sinergica e coordinata, regolano il normale funzionamento dell'organismo." ) }}</p>
    <p class="mb-4">{{ __( "Princìpi cardine di cui ancora oggi l'Osteopatia si avvale:" ) }}</p>

    <ul class="list-disc list-inside">
        <li>{{ __( "L'essere umano è un'unità dinamica di funzioni, il cui stato di salute è determinato da corpo, mente, e spirito." ) }}</li>
        <li>{{ __( "Il corpo possiede dei meccanismi di autoregolazione e autoguarigione." ) }}</li>
        <li>{{ __( "La struttura e la funzione sono reciprocamente inter-correlate." ) }}</li>
        <li>{{ __( "La terapia razionale si fonda sull'applicazione di tutti e tre i principi." ) }}</li>
    </ul>

    <h3 class="mb-2 text-xl">{{ __( "Che cosa tratta l'osteopatia?" ) }}</h3>
    <p class="mb-4">{{ __( "L'osteopatia si occupa principalmente dei problemi strutturali e meccanici di tipo muscolo-scheletrico a cui possono però associarsi delle alterazioni funzionali degli organi e visceri e del sistema cranio sacrale. Poiché in Osteopatia si ha una visione olistica del corpo umano, è valida anche l'idea contraria: un problema funzionale organico-viscerale può provocare dei dolori di tipo muscolo-scheletrico." ) }}</p>
    <p class="mb-4">{{ __( "L'osteopatia, grazie proprio ai principi su cui si basa, interviene su persone di tutte le età, dal neonato all'anziano, alla donna in gravidanza." ) }}</p>
    <p>{{ __( "Si rivela efficace in diversi disturbi che spesso affliggono l'individuo impedendogli di poter condurre una vita serena, disturbi come: cervicalgie, lombalgie, sciatalgie, artrosi, discopatie, cefalee, dolori articolari e muscolari da traumi, alterazioni dell'equilibrio, nevralgie, stanchezza cronica, affezioni congestizie come otiti, sinusiti, disturbi ginecologici e digestivi." ) }}</p>
</article>

@endsection
