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
            <li aria-current="page">{{ __( "Ortodonzia" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Ortodonzia" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Denti sani e allineati" ) }}</p>

    <p class="mb-4">L'<strong>ortodonzia</strong> è quella branca dell'odontoiatria che <em>si occupa della diagnosi, della prevenzione e della cura delle anomalie della costituzione, sviluppo e posizione dei denti e delle ossa mascellari</em>.</p>
    <p class="mb-4">Oltre ad avere effetti negativi dal punto di vista estetico, <em>queste anomalie possono causare disturbi muscolari e posturali notevoli</em>, dando luogo a cefalee, squilibri posturali, algie cervicali e vertebrali, disturbi della vista e dell'udito.</p>
    <p class="mb-4">{{ __( "La pratica ortodontica consiste sostanzialmente in due tipi di terapia:" ) }}</p>

    <ul class="list-disc list-inside">
        <li><strong>Terapia chirurgica</strong>: si attua estraendo quei denti che ostacolano l'allineamento e l'articolazione degli altri o la corretta posizione dento-facciale.</li>
        <li><strong>Terapia meccanica</strong>: si attua mediante la costruzione e l'applicazione di diversi tipi di apparecchi, che esercitano sulle arcate dentarie un'azione di tipo meccanico</li>
    </ul>

    <section class="mt-8 py-8 px-4 bg-grey-100">
        <h3 class="mb-4 font-medium text-xl">{{ __( "DOMANDE COMUNI" ) }}</h3>

        <ul class="flex flex-col">

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "L'apparecchio dentale è adatto solo per bambini e adolescenti?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Gli <strong>apparecchi dentali</strong> possono essere applicati a qualsiasi età.</p>
                        <p class="mb-4">{{ __( "Naturalmente è saggio intervenire sulla dentatura in fase di sviluppo per evitare che le conseguenze negative delle malocclusioni possano causare danno nel corso degli anni." ) }}</p>
                        <p class="mb-4">Tuttavia <em>le soluzioni ortodontiche possono correggere i difetti di posizionamento</em> anche in età adulta. In questi casi il problema che generalmente insorge è il disagio sociale che si prova ad indossare l'apparecchio.</p>
                        <p>Fortunatamente sono state sviluppate soluzioni che cercano di ridurre al minimo la visibilità degli apparecchi ortodontici: <strong>piastrine di ceramica</strong> per apparecchi fissi, <strong>apparecchi ad attacco linguale</strong> (apparecchi invisibili) e <strong>allineatori trasparenti</strong> dalla visibilità minima.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come funziona l'apparecchio invisibile interno?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">L'<strong>apparecchio invisibile</strong> interno è un apparecchio linguale in cui le piastrine vengono incollate al lato interno dei denti, in modo da risultare totalmente invisibile dall'esterno.</p>
                        <p class="mb-4">L'apparecchio invisibile <em>può essere di due tipologie, con attacchi e senza attacchi</em>.</p>
                        <p class="mb-4">{{ __( "Nel primo caso si applicano degli attacchi nella parte interna del palato. Nel secondo caso i fili ortodontici vengono applicati direttamente sulla superficie interna dei denti, senza dover applicare gli attacchi." ) }}</p>
                        <p>{{ __( "Questa soluzione è quella maggiormente consigliata per i pazienti adulti in cerca del massimo comfort e del minimo impatto estetico, tuttavia non è adatta per tutti i casi di malocclusione." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Cos'è l'allineatore invisibile (Invalisign)?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">L'<strong>allineatore invisibile</strong> è un'alternativa all'apparecchio: un allineatore trasparente in plastica da applicare come mascherina sopra i denti.</p>
                        <p class="mb-4">{{ __( "Il trattamento prevede la realizzazione di una serie di aligner da applicare ogni due settimane che gradualmente aiutano a portare i denti nella posizione desiderata." ) }}</p>
                        <p class="mb-4">{{ __( "Uno dei vantaggi dell'allineatore sta nella possibilità di rimozione dell'apparecchio durante i pasti o per lavare i denti." ) }}</p>
                        <p>{{ __( "Anche in questo caso siamo in presenza di una soluzione molto richiesta dai pazienti adulti per il ridotto impatto estetico, tuttavia non adatta per tutti i casi. Solo uno studio approfondito del singolo caso può aiutare a scegliere la soluzione migliore." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come funziona il Bite per il Bruxismo" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Il <strong>Bruxismo</strong> è un disturbo involontario che <em>consiste nel contrarre i muscoli della bocca e digrignare i denti fino a farli stridere</em>. Molto spesso questo fenomeno avviene durante il sonno, motivo per cui di frequente chi ne soffre non ne è consapevole.</p>
                        <p class="mb-4">Il bruxismo impatta sulla salute del cavo orale <em>provocando tensione muscolare e usura dei denti</em> per i micro-traumi da contatto. Inoltre influisce sulla salute del sonno, disturbando la fase REM.</p>
                        <p class="mb-4">{{ __( "Non è ancora stata stabilita con certezza la causa del bruxismo. La comunità scientifica ha ipotizzato che possa essere causato da malformazione della mandibola, disallineamento che non permette la normale chiusura dei denti o predisposizione genetica o stress." ) }}</p>
                        <p class="mb-4">Ad oggi non esistono trattamenti in grado di eliminare il disturbo all'origine. <strong>Si può però ridurre il danno grazie al bite</strong>, un apparecchio mobile che, durante la notte, protegge i denti dall'erosione e favorisce il corretto equilibrio neuromuscolare.</p>
                        <p>Il bite ha inoltre <em>impatti positivi sul benessere familiare</em>: molto spesso chi soffre di bruxismo (così come chi soffre di roncopatia) disturba il riposo del partner nelle ore notturne producendo suoni fastidiosi. L'applicazione del bite migliora anche questo aspetto, forzando una posizione di rilassamento muscolare e riducendo al minimo le emissioni di rumore.</p>
                    </div>
                </div>
            </li>

        </ul>
    <section>
</article>

@endsection
