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
            <li aria-current="page">{{ __( "Conservativa" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Odontoiatria conservativa" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Mantenere i denti in salute" ) }}</p>

    <p class="mb-4">L'odontoiatria conservativa è quella branca dell'ortodonzia che si occupa di <strong>conservare la salute dei denti</strong>, specialmente combattendo il fenomeno della <strong>carie</strong>.</p>
    <p class="mb-4">L'intervento di odontoiatria conservativa più comune è l'<strong>otturazione</strong> dei denti, ma ci si occupa anche di <strong>devitalizzazione</strong> dei denti, <strong>ricostruzione</strong> indiretta e lievi interventi correttivi a fini estetici (ricostruzioni, chiusura dei diastemi).</p>

    <h3 class="mb-2 text-xl">{{ __( "La carie" ) }}</h3>
    <p class="mb-4">La <strong>carie</strong> <em>è una malattia degenerativa su base infettiva</em>, causata da alcuni batteri presenti normalmente nel cavo orale.</p>
    <p class="mb-4">Una <em>scorretta igiene orale</em> o un abbassamento del sistema immunitario può aiutare questi batteri a proliferare.</p>
    <p class="mb-4">{{ __( "La carie consuma il dente, creando la tipica cavità vuota. Se trascurata, la carie può arrivare fino alla polpa dentale e rendere necessario un trattamento di devitalizzazione. Nei casi più gravi è necessario procedere all'estrazione del dente infetto." ) }}</p>

    <h4 class="mb-2">{{ __( "Come riconoscere una carie" ) }}</h4>
    <p class="mb-4">Una <strong>carie</strong> in fase di sviluppo iniziale non comporta alcun fastdio per il paziente, perciò è difficile riconoscerla.</p>
    <p class="mb-4">Solo <em>frequenti visite di igiene e controllo</em> dal dentista permettono di individuare eventuali carie in fase iniziale e trattarle con una terapia semplice e rapida.</p>
    <p class="mb-4">{{ __( "Quando la carie raggiunge una certa profondità,possono insorgere:" ) }}</p>

    <ul class="list-disc list-inside">
        <li>{{ __( "dolore e sensibilità al caldo e al freddo" ) }}</li>
        <li>{{ __( "dolore alla masticazione" ) }}</li>
        <li>{{ __( "dolore in presenza di cibi acidi e/o dolci" ) }}</li>
    </ul>

    <p class="mb-4">{{ __( "Se la carie viene trascurata, continua a distruggere il dente fino a giungere alla polpa. La sintomatologia cambia, e il dolore diventa intenso e prolungato, provocando anche gonfiori al viso." ) }}</p>

    <h3 class="mb-2 text-xl">{{ __( "La prevenzione" ) }}</h3>
    <p class="mb-4">I <em>batteri</em> che contribuiscono a formare le carie sono normalmente presenti nel nostro cavo orale, ma proliferano in caso di igiene non accurata.</p>
    <p class="mb-4">Anche il <em>consumo di carboidrati</em> e <em>cibi zuccherini</em> favorisce la formazione di carie, quindi è bene limitarla e ricordarsi di <strong>lavare i denti</strong> dopo aver assunto cibi o bevande particolarmente ricchi di zuccheri.</p>
    <p class="mb-4">Importante ricordare di eseguire una <strong>fluoroprofilassi</strong> adeguada e nel caso dei bambini la sigillatura dei primi molari permanenti appena nascono.</p>

    <section class="mt-8 py-8 px-4 rounded-lg bg-grey-100">
        <h3 class="mb-4 font-medium text-xl">{{ __( "DOMANDE COMUNI" ) }}</h3>

        <ul class="flex flex-col">

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Il trattamento di una carie" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">{{ __( "Dopo aver effettuato un'anestesia locale, l'odontoiatra procede alla rimozione del tessuto danneggiato dalla carie. Una volta conclusa questa operazione si valuta l'entità del danno." ) }}</p>
                        <p class="mb-4">Se la <strong>carie</strong> ha colpito solo la parte più superficiale del dente si procede ad un'otturazione, detta anche restauro diretto. In questo caso la cavità creata dalla rimozione del tessuto necrotico viene riempita con un materiale apposito, la resina composita, che ridà al dente la forma originaria.</p>
                        <p class="mb-4">Se invece la carie ha raggiunto la polpa del dente è necessario eseguire una <strong>devitalizzazione</strong>, ovvero l'asportazione della polpa del dente. Nel corso di questa operazione si va ad intervenire sui canali del dente, che vengono privati delle terminazioni nervose e quindi sigillati con la <strong>guttaperca</strong>, un materiale naturale derivata dalla linfa dell'albero omonimo.</p>
                        <p class="mb-4">{{ __( "Concluso il trattamento di devitalizzazione il dente può essere ricostruito in varie maniere:" ) }}</p>

                        <ul class="list-disc list-inside">
                            <li>{{ __( "con un restauro diretto con la resina composita" ) }}</li>
                            <li>{{ __( "restauro diretto con composito e perno in fibra di vetro, se la struttura risulta essere troppo danneggiata" ) }}</li>
                            <li>{{ __( "restauro indiretto: intarsio o corona, costruite in laboratorio" ) }}</li>
                        </ul>

                        <p class="mb-4">Nei giorni successivi agli interventi i pazienti possono essere soggetti a <em>particolare sensibilità dentale</em> per cui è sconsigliato mangiare cibi molto duri, molto caldi o molto freddi.</p>
                        <p>Sia l'otturazione che la devitalizzazione sono eseguite in anestesia locale, quindi <em>il dolore è completamente assente</em>.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Materiali per la ricostruzione dentale" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">{{ __( "Un tempo il materiale più utilizzato per ricostruire un dente danneggiato dalla carie era l'amalgama d'argento, in seguito eliminato anche per l'alta concentrazione di mercurio che conteneva." ) }}</p>
                        <p class="mb-4">Oggi si usano le <strong>resine composite</strong>, <em>biomateriali più elastici e duraturi</em> che si integrano perfettamente con la forma del dente e ne ricostruiscono l'aspetto e la colorazione originaria.</p>
                        <p>{{ __( "Le vecchie otturazioni di amalgama vengono rimosse con l'uso della diga di gomma e di aspiratori per evitare la dispersione del materiale." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Trattamenti per i denti scheggiati" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Una problematica comune dell'odontoiatria conservativa è il <em>trattamento dei denti scheggiati</em>.</p>
                        <p class="mb-4">{{ __( "Questo fenomeno è molto comune nei bambini, per coloro che praticano attività sportive e per le persone di età avanzata, i cui denti diventano più fragili e si scheggiano facilmente anche durante la masticazione in presenza di un alimento duro." ) }}</p>
                        <p class="mb-4">{{ __( "La problematica dei denti scheggiati o rotti si verifica inoltre in presenza di traumi che intervengono sulla struttura del dente." ) }}</p>
                        <p class="mb-4">{{ __( "Nel caso di dentatura permanente, l'effetto scheggiatura può essere traumatico per i pazienti soprattutto dal punto di vista estetico, quindi si procede ad un intervento di correzione estetica." ) }}</p>
                        <p class="mb-4">{{ __( "In caso di danno superficiale esistono diverse soluzioni:" ) }}</p>

                        <ul class="list-disc list-inside">
                            <li>{{ __( "Arrotondamento della scheggiatura" ) }}</li>
                            <li>{{ __( "Otturazione estetica di composito" ) }}</li>
                        </ul>

                        <p>{{ __( "Se il danno ha raggiunto la polpa, si dovrà invece procedere ad un intervento di devitalizzazione del dente, seguita da una ricostruzione del dente grazie ad una faccetta estetica in ceramica o ad una corona dentale in ceramica." ) }}</p>
                    </div>
                </div>
            </li>

        </ul>
    </section>
</article>

@endsection
