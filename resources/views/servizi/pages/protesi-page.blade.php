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
            <li aria-current="page">{{ __( "Protesi" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Protesi" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Sostituire i denti, sempre con estetica e comfort" ) }}t</p>

    <p class="mb-4">La <strong>protesi dentaria</strong> è quella branca dell' odontoiatria che <em>si occupa della diagnosi, del trattamento, della riabilitazione e del mantenimento delle funzioni orali, dell'estetica e della salute dei pazienti</em> in mancanza di uno o più denti.</p>
    <p class="mb-4">{{ __( "Esistono due principali tipologie di protesi dentarie:" ) }}</p>

    <ul class="list-disc list-inside">
        <li><strong>Protesi fisse</strong> (faccette, corone, ponti)</li>
        <li><strong>Protesi mobili</strong> (dentiere, scheletrati)</li>
    </ul>

    <p class="mb-4">{{ __( "A queste opzioni si aggiungono alcune soluzioni ibride che vengono normalmente applicate in presenza di impianti dentali." ) }}</p>

    <h3 class="mb-2 text-xl">{{ __( "Le protesi fisse" ) }}</h3>
    <p class="mb-4">Dove possibile si sceglie sempre di utilizzare <strong>protesi fisse</strong>: esse rappresentano infatti <em>la soluzione più confortevole per il paziente</em> perché danno una sensazione di maggiore stabilità.</p>
    <p class="mb-4">{{ __( "Prerequisito necessario è tuttavia è la presenza di pilastri sani che permettano la fissazione della protesi. Si può partire dalla dentatura del paziente (su cui vengono innestati ponti, faccette o capsule) o da una base artificiale costituita dagli impianti dentali." ) }}</p>
    <p class="mb-4">{{ __( "Il dottor Pozza realizza impianti a carico immediato: questo significa che, nella stessa seduta dell'estrazione del dente, si procede alla collocazione dell'impianto e alla cementazione dei provvisori, così da evitare di rimanere senza degli elementi dentali per diversi mesi." ) }}</p>

    <h3 class="mb-2 text-xl">{{ __( "Le protesi mobili" ) }}</h3>
    <p class="mb-4">{{ __( "Di norma si utilizzano due principali tipologie di protesi mobili:" ) }}</p>

    <ul class="list-disc list-inside">
        <li><strong>Protesi parziali</strong> (scheletrati): {{ __( "si agganciano su denti naturali residui o su elementi artificiali come gli impianti. Solitamente costituita da una struttura metallica, consente di ottenere un miglior livello di stabilità funzionale e masticatoria rispetto alla protesi totale." ) }}</li>
        <li><strong>Protesi totali</strong> (dentiere): {{ __( "in mancanza di denti o radici naturali residui, la protesi totale sostituisce una o entrambe le arcate dentarie poggiando unicamente sulle mucose e sull'osso del paziente. L'utilizzo di materiali innovativi come compositi e ceramiche garantisce un risultato funzionale, estetico e anallergico." ) }}</li>
    </ul>
</article>

@endsection
