@extends('layouts.layout')

@section('body')
    @include('layouts.header')

    <div class="py-32 px-6">
        <div class="container mx-auto relative flex justify-center">

        <div class="w-full md:w-2/3 lg:w-1/2 text-center">
            <h2 class="font-thin text-4xl text-blue-600">Collaborazione <span class="font-semibold">Polispecialistica</span></h2>
            <p class="text-gray-600">L'approccio multidisciplinare volto alla <strong>collaborazione tra professionisti</strong> e la nostra filosofia di <b>aggiornamento costante</b> ci permettono di offrire <strong>prestazioni all'avanguardia</strong> e minimamente invasive in tutti gli ambiti della salute e del benessere.</p>
        </div>

        </div>
    </div>

    <div class="py-16 px-6">
        <div class="container mx-auto">
            <p class="mb-6 text-3xl">{{ __( "Il nostro Team" ) }}</p>

            @include('partners.index.tiles')

        </div>
    </div>

    @include('partners.index.valori')

    @include('layouts.footer')

@endsection
