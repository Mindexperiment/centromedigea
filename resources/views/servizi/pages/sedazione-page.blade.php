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
            <li aria-current="page">{{ __( "Sedazione" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Sedazione cosciente con protossido d'azoto" ) }}</h2>

    <p class="mb-4">La sedazione cosciente è una semplice <strong>tecnica di rilassamento</strong> che consente al paziente ed al dentista di <em>vivere con serenità</em> le cure odontoiatriche.</p>
    <p class="mb-4">{{ __( "La tecnologia utilizzata funziona con una miscela ad alto contenuto di ossigeno e protossido d'azoto." ) }}</p>
    <p class="mb-4">{{ __( "Grazie alla combinazione di questi due elementi siamo in grado di ottenere un leggero effetto ansiolitico, sedativo, miorilassante ed analgesico, liberando il paziente e di conseguenza il dentista da stress, ansia e paura." ) }}</p>

    <h3 class="mb-2 text-xl">{{ __( "A chi è diretta?" ) }}</h3>
    <p class="mb-4">La sedazione cosciente può essere <em>usata da chiunque</em> senza particolari controindicazioni.</p>
    <p class="mb-4">{{ __( "Questa metodica viene utilizzata da anni nella maggior parte degli studi odontoiatrici degli Stati Uniti e del Canada. Da pochi anni ha iniziato a diffondersi anche in Italia. Si rivolge, in generale, a tutti i pazienti ma in modo particolare ai bambini molto piccoli e a quelli traumatizzati da una precedente esperienza odontoiatrica o ai paziente che vivono con ansia o stress la seduta dal dentista." ) }}</p>

    <h3 class="mb-2 text-xl">{{ __( "Come funziona?" ) }}</h3>
    <p class="mb-4">Si utilizza un apparecchio (<strong>sedation machine</strong>) in grado di miscelare due gas, ossigeno e protossido d'azoto, in percentuali ben definite; la miscela viene poi inalata tramite una mascherina sterile in modo da raggiungere una stato di sedazione.</p>
    <p class="mb-4">{{ __( "Durante la sedazione cosciente si rimane perfettamente vigili e collaborativi, si risponde agli stimoli ed alle richieste dell'operatore, mantenendo comunque uno stato di estrema tranquillità." ) }}</p>
    <p class="mb-4">La facilità e la comodità di utilizzo ne fanno una metodica estremamente efficiente. L'induzione della sedazione è molto rapida (3-5 minuti), altrettanto rapida è la metabolizzazione del protossido d'azoto (1-2 minuti). La sedazione cosciente <strong>ci consente pertanto di lavorare in totale sicurezza ed affidabilità</strong>.</p>

    <h3 class="mb-2 text-xl">{{ __( "E per i più piccoli?" ) }}</h3>
    <p class="mb-4">{{ __( "Reinholdino toglie la paura ai pazienti del Dottor Pozione." ) }}</p>
    <p class="mb-4">{{ __( "Curare i bambini è il mestiere più bello che ci sia, ma non è mai facile conquistare la fiducia del piccolo paziente. Brave Potions ha creato Super Poteri, un progetto innovativo che fa divertire i bambini durante la visita." ) }}</p>
    <p>{{ __( "In questo modo il lavoro dell'operatore è semplificato e il legame tra medico e paziente risulta essere molto più forte." ) }}</p>
</article>

@endsection
