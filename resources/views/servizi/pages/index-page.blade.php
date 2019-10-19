@extends('layouts.page')

@section('breadcrumbs')
<div>
    <div class="container mx-auto pt-8 px-4">

    <nav aria-label="breadcrumb">
        <ol class="mb-4 flex flex-wrap">
            <li><a href="{{ route('website.homepage') }}" class="underline text-blue-600">{{ __( "Home" ) }}</a></li>
            <li><span class="mx-2">/</span></li>
            <li aria-current="page">{{ __( "Servizi" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<p class="mb-4 text-4xl">{{ __( "I nostri servizi" ) }}</p>

<div class="flex flex-wrap">

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/chirurgia.jpg') }}" alt="Esempio di chirurgia" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.chirurgia') }}">{{ __( "Chirurgia Orale" ) }}</a>
            </p>
            <p>{{ __( "Servizio di chirurgia orale" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/implantologia.jpg') }}" alt="Esempio di implantologia" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.implantologia') }}">{{ __( "Implantologia" ) }}</a>
            </p>
            <p>{{ __( "Servizio di implantologia" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/protesi.jpg') }}" alt="Esempio di protesi" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.protesi') }}">{{ __( "Protesi" ) }}</a>
            </p>
            <p>{{ __( "Servizio di protesi" ) }}</p>
        </div>
    </article>

</div>

<div class="mt-8 flex flex-wrap">

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/conservativa.jpg') }}" alt="Esempio di conservativa" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.conservativa') }}">{{ __( "Conservativa" ) }}</a>
            </p>
            <p>{{ __( "Servizio di odontoiatria conservativa" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/pedodonzia.jpg') }}" alt="Esempio di pedodonzia" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.pedodonzia') }}">{{ __( "Pedodonzia" ) }}</a>
            </p>
            <p>{{ __( "Servizio di pedodonzia" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/ortodonzia.jpg') }}" alt="Esempio di ortodonzia" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.ortodonzia') }}">{{ __( "Ortodonzia" ) }}</a>
            </p>
            <p>{{ __( "Servizio di ortodonzia" ) }}</p>
        </div>
    </article>

</div>

<div class="mt-8 flex flex-wrap">

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/paradontologia.jpg') }}" alt="Esempio di paradontologia" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.paradontologia') }}">{{ __( "Paradontologia" ) }}</a>
            </p>
            <p>{{ __( "Servizio di paradontologia" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/laser.jpg') }}" alt="Esempio di laser" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.laser') }}">{{ __( "Laser" ) }}</a>
            </p>
            <p>{{ __( "Servizio di laser" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/igiene.jpg') }}" alt="Esempio di igiene" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.igiene') }}">{{ __( "Igiene Orale" ) }}</a>
            </p>
            <p>{{ __( "Servizio di igiene orale" ) }}</p>
        </div>
    </article>

</div>

</div> <!-- close main page section -->

<div class="py-8 px-4 leading-relaxed text-center bg-blue-600 text-white">
    <div class="select-none inline-block mx-auto mb-6 p-0 w-16 h-16 flex justify-center items-center rounded-full border border-transparent font-medium leading-normal text-3xl bg-white text-blue-600">
        <span class="fas fa-user-md"></span>
    </div>

    <p class="mb-6 text-2xl font-semibold">{{ __( "I Medici Specialisti" ) }}</p>
    <p class="w-3/5 mx-auto">Collaboriamo attivamente con un medico specialista in <b>Chirurgia Maxillo facciale</b>, un medico specialista <b>Anestesista</b> ed un medico specialista <b>Ortopedico</b> a supporto degli interventi di chirugia più complessi.</p>
</div>

<div class="container mx-auto pt-12 pb-16 px-6"> <!-- reopen main page section -->

<div class="mt-8 flex flex-wrap">

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/estetica.jpg') }}" alt="Esempio di estetica" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.estetica') }}">{{ __( "Estetica dentale" ) }}</a>
            </p>
            <p>{{ __( "Servizio di estetica dentale" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/medicina.jpg') }}" alt="Esempio di medicina" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.medicina') }}">{{ __( "Medicina estetica" ) }}</a>
            </p>
            <p>{{ __( "Servizio di medicina estetica" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/roncopatia.jpg') }}" alt="Esempio di roncopatia" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.roncopatia') }}">{{ __( "Roncopatia" ) }}</a>
            </p>
            <p>{{ __( "Servizio di roncopatia" ) }}</p>
        </div>
    </article>

</div>

<div class="mt-8 flex flex-wrap">

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/prgf.jpg') }}" alt="Esempio di PRGF" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.prgf') }}">{{ __( "Emoderivati PRGF" ) }}</a>
            </p>
            <p>{{ __( "Servizio di emoderivati PRGF" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/sedazione.jpg') }}" alt="Esempio di sedazione" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.sedazione') }}">{{ __( "Sedazione" ) }}</a>
            </p>
            <p>{{ __( "Servizio di sedazione" ) }}</p>
        </div>
    </article>

    <article class="relative mb-4 mx-2 flex flex-col flex-1 rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/radiologia.jpg') }}" alt="Esempio di radiologia" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.radiologia') }}">{{ __( "Radiologia" ) }}</a>
            </p>
            <p>{{ __( "Servizio di radiologia" ) }}</p>
        </div>
    </article>

</div>

<div class="mt-8 flex flex-wrap justify-center">

    <article class="relative w-1/3 mb-4 mx-2 flex flex-col rounded-lg shadow-lg bg-white">
        <img src="{{ asset('images/layout/servizi/osteopatia.jpg') }}" alt="Esempio di osteopatia" class="rounded-t-lg" />

        <div class="p-6 flex-auto">
            <p class="mb-2 font-medium text-xl">
                <a href="{{ route('servizi.osteopatia') }}">{{ __( "Osteopatia" ) }}</a>
            </p>
            <p>{{ __( "Servizio di osteopatia" ) }}</p>
        </div>
    </article>

</div>

@endsection
