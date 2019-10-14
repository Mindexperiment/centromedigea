<div class="py-8 px-6">
    <div class="container mx-auto">

    <div class="clearfix mb-6 p-6">
        <img src="{{ asset('images/layout/yellow-fish.svg') }}" class="w-32 float-right ml-4 my-2" />
        <p class="mb-4 font-bold text-2xl">{{ __( "Chi si occupa della salute orale dei bambini?" ) }}</p>
        <p class="font-thin text-xl">{{ __( "Il Pedodontista che è il dentista dei bambini, non tutti i dentisti infatti sono adatti a curare i piccoli pazienti." ) }}</p>
    </div>

    <div class="flex items-center">
        <div class="hidden sm:block sm:w-2/5 pr-2">
            <a href="{{ route('partners.pedodonzia') }}">
                <img src="{{ asset('images/partners/pedodonzia/bambini.jpg') }}" class="border-4 border-teal-400 rounded-full shadow-md" />
            </a>
        </div>

        <div class="w-full sm:w-3/5 sm:pl-2">
            <p class="mb-2">Per la Dott.ssa Monica (<a href="" title="Profilo di Monica Pozza" class="underline text-blue-600">#monica</a>) lavorare con i più piccoli è una vera e propria vocazione.</p>
            <p class="mb-2">La nostra dottoressa e tutto il personale di assistenza si è dedicato alla <strong>formazione nel campo pediatrico</strong> per cui le attività, i giochi che vengono proposti prima e durante la seduta sono sempre frutto di <u>tecniche studiate per guadagnare la fiducia del piccolo paziente</u>, niente viene fatto con superficialità.</p>
            <p class="mb-2">{{ __( "La fiducia, del genitore e del piccolo paziente sono fondamentali per creare un buon rapporto con il pedodontista da cui dipende la buona riuscita delle cure." ) }}</p>
            <p>{{ __( "Tutto questo significa dedicare tempo nella costruzione di questo rapporto speciale, così che in un futuro il bambino possa essere un adulto che vive con serenità le cure odontoiatriche." ) }}</p>
        </div>
    </div>

    </div>
</div>
