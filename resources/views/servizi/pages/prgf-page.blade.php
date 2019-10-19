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
            <li aria-current="page">{{ __( "Emoderivati PRGF" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Trattamento con emoderivati PRGF" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "La forza delle piastrine per curare e ringiovanire" ) }}</p>

    <p class="mb-4">La terapia con <strong>PRGF</strong> (Plasma Ricco di Fattori di Crescita), detto anche <strong>PRP</strong> (Plasma Ricco di Piastrine), è una cura innovativa e all'avanguardia, che si usa da più di dieci anni in moltissimi campi della medicina.</p>
    <p class="mb-4">Questa terapia, totalmente priva di effetti collaterali, <em>utilizza emoderivati dello stesso paziente per accelerare i processi di guarigione o stimolare la riattivazione di cellule sopite</em>.</p>
    <p class="mb-4">In pratica, l'applicazione di particolari fattori chimici stimolanti <em>induce le piastrine presenti nel sangue ad attivare la loro capacità di ricostruzione</em>, dando vita ad un processo di <strong>biorivitalizzazione cellulare</strong>.</p>
    <p class="mb-4">Il <strong>PRGF</strong> trova applicazione in diverse aree della medicina:</p>

    <ul class="list-disc list-inside">
        <li><strong>in chirurgia e in odontoiatria</strong> viene utilizzato a seguito di interventi per diminuire la risposta infiammatoria e accelerare il processo di guarigione</li>
        <li><strong>in medicina estetica</strong> viene utilizzato per attivare processi di biorivitalizzazione con effetto ringiovanente</li>
        <li><strong>in dermatologia</strong>: per il trattamento di piaghe, ulcere etc..</li>
        <li>si utilizza inoltre nel <em>trattamento dell'<strong>alopecia areata</strong></em> (calvizie)</li>
    </ul>

    <h3 class="mb-2 text-xl">{{ __( "Come si può trattare l'alopecia con terapia a base di PRGF?" ) }}</h3>
    <p class="mb-4">Le più recenti ricerche sulla biologia del <strong>bulbo del capello</strong> e le scoperte di molti dei meccanismi di controllo della vita del <strong>follicolo pilifero</strong> hanno permesso di decifrare i meccanismi che causano alcune delle patologie dei capelli più frequenti.</p>
    <p class="mb-4">È stato infatti rilevato che, <em>alla base dei bulbi piliferi sono situate le cellule staminali dei follicoli piliferi</em>, che normalmente vanno a generare le cellule che daranno poi vita al capello. In numerosi casi di calvizie, le <strong>cellule staminali</strong> intorno ai bulbi piliferi <em>entrano in una fase di quiescenza</em>, provocando una riduzione progressiva della crescita del capello, fino ad una fase di totale arresto. Una volta arrestato il processo il capello inizia a miniaturizzarsi fino a cadere.</p>
    <p class="mb-4">Queste cellule staminali “dormienti” <em>possono però essere riattivate tramite <strong>il trattamento a base di PRGF</strong></em>. Solitamente dopo qualche seduta è già visibile ad occhio nudo un effetto di rinfoltimento e di vistosa riduzione delle aree più diradate.</p>
    <p class="mb-4">{{ __( "In seguito possono essere programmati trattamenti ciclici a scopo di mantenimento." ) }}</p>
</article>

@endsection
