@extends('layouts.profile')

@section('aside')
<div class="relative mb-6 p-2 flex flex-col rounded-md bg-white">
    <div class="p-4 flex-1 text-center">

    <div>
        <img src="{{ asset('images/partners/pilates/pegoraro-mirka.jpg') }}" alt="Immagine profilo Mirka Pegoraro" class="mx-auto w-24 h-24 rounded-full" />
    </div>
    <div class="mb-4">
        <p class="font-medium">{{ __( "Mirka Pegoraro" ) }}</p>
        <p class="text-gray-600"><small>{{ __( "Insegnante federale certificata per tutti i livelli del metodo Pilates" ) }}</small></p>
    </div>

    </div>
</div>

@endsection

@section('content')
<div class="mb-6">
    <h2 class="mb-2 font-medium text-2xl">{{ __( "Mirka Pegoraro" ) }} <span class="z-30 inline-block px-3 py-1 ml-2 rounded font-semibold text-base bg-green-400 text-white">+39 340-9416660</span></h2>
    <p class="font-medium text-gray-700">{{ __( "Piazza Marconi, 3" ) }} - <small class="font-normal">mirkapegoraro@libero.it</small></p>
</div>

<div>
    <p>A sette anni, attraverso lo studio della danza, inizia la ricerca della "<em>perfezione del movimento</em>", dell'allenamento atto a creare movenze aggraziate, espressive, fluide, coordinate ed al contempo forti e flessibili e così è stato per i trent'anni successivi.</p>
</div>

<hr class="my-12 border-t border-t-gray-700" />

@include('pilates.table')

<hr class="my-12 border-t border-t-gray-700" />

<div>
    <p class="mb-4">{{ __( "Questa disciplina, infatti, non ha come parte focale quante volte si fa un movimento ma come lo si esegue: una precisione benefica e non puramente estetica." ) }}</p>
    <p class="mb-4">Non basta copiare i gesti che vengono insegnati ma bisogna introiettarli, sentirli, farli propri ,rendendo il nostro agire un movimento cosciente, un'esperienza in grado di essere integrata nel nostro schema motorio attraverso l'<em>attivazione della muscolatura profonda in sinergia con quella superficiale</em>.</p>
    <p>Nel corso degli anni di approfondimento e di pratica dell'allenamento <strong>Pilates</strong>, integrato nel contempo anche da altri percorsi di studio, torna sempre preponderante la consapevolezza che i dettagli del movimento sono di fondamentale importanza, ecco perché ho scelto di strutturare i corsi come sarà descritto di seguito, al fine di creare un ambiente scrupoloso, professionale e nel quale ogni singola persona si senta accolta nelle sue necessità.</p>
</div>

@include('pilates.metodo')

@include('pilates.a-chi')

@include('pilates.altro')

@include('pilates.slideshow')

@include('pilates.corsi')

@endsection
