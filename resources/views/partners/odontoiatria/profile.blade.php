@extends('layouts.profile')

@section('aside')
<div class="relative mb-6 p-2 flex flex-col rounded-md bg-white">
    <div class="p-4 flex-1 text-center">

    <div class="mb-4">
        <img src="{{ asset('images/partners/odontoiatria/carmelo-bio.jpg') }}" alt="Immagine profilo Carmelo Pozza" class="mx-auto w-24 h-24 rounded-full" />
    </div>
    <div class="mb-4">
        <p class="font-medium">{{ __( "Carmelo Pozza" ) }}</p>
        <p class="text-gray-600"><small>{{ __( "Medico Chirurgo e Odontoiatra" ) }}</small></p>
    </div>

    </div>
</div>

@endsection

@section('content')
<div class="mb-6">
    <h2 class="mb-2 font-medium text-2xl">{{ __( "Dott. Carmelo Pozza" ) }} <span class="z-30 inline-block px-3 py-1 ml-2 rounded font-semibold text-base bg-green-400 text-white">+39 0445-941352</span></h2>
    <p class="font-medium text-gray-700">{{ __( "Piazza Marconi, 4" ) }} - <small class="font-normal">info@centromedigea.it</small></p>
</div>

<div>
    <p>{{ __( "Si occupa di conservativa, riabilitazioni protesiche, implantologia e interventi di chirurgia orale." ) }}</p>
</div>

<hr class="my-12 border-t border-t-gray-700" />

@include('partners.odontoiatria.table')

<hr class="my-12 border-t border-t-gray-700" />

<div>
    <p class="mb-4">{{ __( "Laureato in Medicina e Chirurgia presso l’Università degli Studi di Verona nel 1986." ) }}</p>
    <p class="mb-4">{{ __( "Nel 1997 ha ottenuto il diploma di Anatomia Applicata all’Implantologia presso l’Università Claude Bernard di Lyone (Francia)" ) }}</p>
    <p class="mb-4">{{ __( "Si occupa di conservativa, riabilitazioni protesiche, implantologia, interventi di chirurgia orale." ) }}</p>
    <p class="mb-4">{{ __( "Ha partecipato a numerosi master e corsi teorico-pratici di implantologia e ha seguito corsi teorico-pratici di medicina estetica, per eseguire filler di botulino ed acido ialuronico." ) }}</p>
    <p class="mb-4">{{ __( "E' autorizzato all'utilizzo di prodotti emoderivati (PRP) che utilizza in campo odontoiatrico, estetico e per il trattamento dell'alopecia aereata." ) }}</p>
    <p class="mb-4">{{ __( "E' socio Sitri (Societa Italiana di tricologia) e socio ANDI (Associazione Nazionale Dentisti Italiani)." ) }}</p>
    <p>{{ __( "Nel tempo libero ama passeggiare e godersi la quiete e il silenzio della montagna." ) }}</p>
</div>

@endsection
