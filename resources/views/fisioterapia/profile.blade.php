@extends('layouts.profile')

@section('aside')
<div class="relative mb-6 p-2 flex flex-col rounded-md bg-white">
    <div class="p-4 flex-1 text-center">

        <div class="mb-4">
            <img src="{{ asset('images/partners/fisioterapia/veller-gianmarco.jpg') }}" alt="Immagine profilo di Gianmarco Veller" class="mx-auto w-24 h-24 rounded-full" />
        </div>
        <div class="mb-4">
            <p class="font-medium">{{ __( "Gianmarco Veller" ) }}</p>
            <p class="text-gray-600"><small>{{ __( "Fisioterapista manuale ortopedico" ) }}</small></p>
        </div>

    </div>
</div>

@endsection

@section('content')
<div class="mb-6">
    <h2 class="mb-2 font-medium text-2xl">{{ __( "Dott. Gianmarco Veller" ) }} <span class="z-30 inline-block px-3 py-1 ml-2 rounded font-semibold text-base bg-green-400 text-white">+39 347-9003378</span></h2>
    <p class="font-medium text-gray-700">{{ __( "Piazza Marconi, 3" ) }} - <small class="font-normal">gianmarco.veller@gmail.com</small></p>
</div>

<div>
    <p>{{ __( "Specializzato nella prevenzione, cura e riabilitazione di cervicalgie, mal di testa, mal di schiena, lombalgie, lombo-sciatalgie, ernie del disco e di tutte le problematiche e i dolori legati alla colonna vertebrale." ) }}</p>
</div>

<hr class="my-12 border-t border-t-gray-700" />

@include('fisioterapia.table')

<hr class="my-12 border-t border-t-gray-700" />

<div>
    <p class="mb-4">Ho conseguito la Laurea in <strong>Fisioterapia</strong> presso l'<em>Università degli studi di Verona</em> nel 2013 e ho terminato il <strong>Master in riabilitazione dei disordini muscolo-scheletrici</strong> presso l'<em>Università degli studi di Genova</em> nel 2017.</p>
    <p class="mb-4">{{ __( "Lavoro come fisioterapista dal 2013 come dipendente ed in libera professione, collaborando con vari centri di fisioterapia della provincia di Vicenza." ) }}</p>
    <p>I punti di riferimento che guidano il mio operato sono l'<strong>Etica professionale</strong> e la <strong>Formazione ed Aggiornamento</strong> continuo, per garantire i più alti standard qualitativi da offrire ai miei pazienti.</p>
</div>

@include('fisioterapia.riabilitazione')

@include('fisioterapia.massaggi')

@include('fisioterapia.disturbi')

@include('fisioterapia.slideshow')

@include('fisioterapia.neurologica')

@include('fisioterapia.domicilio')

@endsection
