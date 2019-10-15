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
            <li aria-current="page">{{ __( "Medicina estetica" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Medicina estetica" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Il benessere passa dal corpo" ) }}</p>

    <p class="mb-4">La <strong>medicina estetica</strong> è quella branca della medicina <em>rivolta al miglioramento della qualità della vita dei pazienti</em> che convivono con <strong>inestetismi</strong> indesiderati, attraverso metodi non chirurgici e non invasivi.</p>
    <p class="mb-4">Le terapie proposte sono atte alla <strong>prevenzione dell'invecchiamento</strong>, in particolare quello cutaneo, e alla <strong>correzione di imperfezioni</strong> corporee non patologiche.</p>
    <p class="mb-4">I trattamenti di medicina estetica sono eseguiti in collaborazione con la dottoressa Marta Massignani (<a href="{{ route('partners.estetica') }}" title="Profilo di Marta Massignani" class="underline text-blue-600">#marta</a>), che da anni si occupa di medicina estetica e collabora con diversi chirurghi plastici.</p>
    <p class="mb-4">{{ __( "I trattamenti di medicina e chirurgia estetica offerti dal Centro Medico Igea sono:" ) }}</p>

    <ul class="list-disc list-inside">
        <li>{{ __( "Filler" ) }}</li>
        <li>{{ __( "Botulino" ) }}</li>
        <li>{{ __( "Biostimolazione cutanea" ) }}</li>
        <li>{{ __( "Peelings chimici" ) }}</li>
        <li>{{ __( "Fili intramedici" ) }}</li>
        <li>{{ __( "Mesoterapia" ) }}</li>
        <li>{{ __( "Rimozione chirurgica di nei e formazioni cutanee" ) }}</li>
        <li>{{ __( "Ricostruzione del lobo dell'orecchio" ) }}</li>
        <li>{{ __( "Trattamento dell'alopecia areale" ) }}</li>
    </ul>

    <h3 class="mb-2 text-xl">{{ __( "Botulino e fillers" ) }}</h3>
    <p class="mb-4">Sia il <strong>botulino</strong> che i <strong>fillers</strong> sono trattamenti anti-age ma agiscono in maniera differente.</p>
    <p class="mb-4">Il <strong>filler</strong> è una <em>terapia a base di acido ialuronico</em>, sostanza in grado di restituire elasticità e idratazione alla pelle del viso, che tende a diminuire con l'avanzare dell'età. Ogni applicazione, totalmente riassorbibile, ha una funzione appianante e di riempimento dei solchi e delle rughe sul viso del paziente.</p>
    <p class="mb-4">Il <strong>botulino</strong> ha invece una <em>funzione distensiva degli inestetismi</em> del tempo nella regione della fronte e perioculare e conferisce al viso un aspetto giovanile e rilassato.</p>
    <p class="mb-4">{{ __( "Il botulino può essere utilizzato anche che trattare una eccessiva sudorazione di mani e ascelle." ) }}</p>

    <h3 class="mb-2 text-xl">{{ __( "Biorivitalizzazione con fattori di crescita piastrinici (PRGF)" ) }}</h3>
    <p class="mb-4">Questo trattamento, all'avanguardia nel campo della ricostruzione dei tessuti, consiste nel <em>somministrazione di fattori chimici stimolanti</em> che inducono le piastrine a innescare <strong>processi di rigenerazione</strong>.</p>
    <p class="mb-4">Questa tecnologia, <strong>priva di effetti collaterali</strong>, trova le sue applicazione negli ambiti più disparati della medicina: viene infatti utilizzato non solo a livello cutaneo, ma anche odontoiatrico, vascolare e chirurgico, nonché per il trattamento dell'alopecia areata.</p>
    <p class="mb-4">L'applicazione <em>nella medicina estetica è rivolta a donare lucentezza e spessore alla pelle</em> del paziente attraverso una vera e propria <strong>biorivitalizzazione</strong>.</p>
    <p class="mb-4">{{ __( "È altamente indicato per il ringiovanimento di décolleté, viso, mani e collo. Non si escludono anche trattamenti per cosce, addome e braccia." ) }}</p>
</article>

@endsection
