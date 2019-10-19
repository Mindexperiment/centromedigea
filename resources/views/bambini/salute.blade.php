<div class="relative">
    <div class="container mx-auto mb-6 py-8 px-6">
  
    <p class="mb-4 font-medium text-2xl">{{ __( "Da cosa dipende la salute orale dei nostri bambini?" ) }}</p>

    <p class="mb-2">{{ __( "La salute orale dell'individuo, bambino o adulto che sia, dipende da diversi fattori: dalla dieta, dalle abitudini igieniche e da fattori predisponenti o genetici." ) }}</p>
    <p class="mb-2">{{ __( "Quello che il dentista può fare con la collaborazione del paziente e dei genitori è andare a modificare i fattori, quali la dieta e le abitudini igieniche, per ottenere come risultato la salute della bocca del nostro bambino anche nel caso ci siano dei fattori predisponenti o genetici." ) }}</p>

    <div class="my-6 flex flex-wrap justify-center items-center">
        <div class="w-3/5 p-4 rounded-lg text-center text-sm bg-green-600 text-white">
            <p>{{ __( "Il pedodontista grazie a una diagnosi precoce può iniziare a gestire le abitudini viziate per evitare problemi nel corretto sviluppo orale." ) }}</p>
        </div>

        <div class="w-24 pl-6">
            @include('svg.octopus')
        </div>
    </div>

    <p>{{ __( "Dato che la salute orale, come abbiamo visto, non dipende da un singolo fattore, abbiamo deciso di collaborare con tutte quelle figure che ruotano attorno al bambino per garantire la sua salute. Per questo, abbiamo scelto di creare un team specializzato per dar vita ad una clinica che ruotasse attorno alle esigenze del bambino." ) }}</p>

    @include('bambini.footer')

    </div>

    <div class="w-full h-auto">
        @include('svg.bottom')
    </div>
</div>
