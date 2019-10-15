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
            <li aria-current="page">{{ __( "Pedodonzia" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Pedodonzia" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Denti sani fin da piccoli" ) }}</p>

    <p class="mb-4">La <strong>pedodonzia</strong> è la branca dell'odontoiatria che <em>si occupa della cura dei denti dei bambini da due ai sedici anni</em>.</p>
    <p class="mb-4"><strong>La salute orale dei più piccoli è un tema estremamente importante</strong>: l'attenzione precoce all'igiene orale e una corretta educazione durante la crescita possono infatti <em>prevenire efficacemente l'insorgere di problemi in età più avanzata</em>.</p>
    <p class="mb-4">Per questo motivo nel nostro Centro Medico <em>prestiamo particolare attenzione alle cure dentali per l'infanzia</em>, utilizzando strumenti (come <strong>la siringa senz'ago</strong> o <strong>l'applicazione Super Poteri</strong>) che avvicinano i bambini al mondo dell'odontoiatria senza traumi.</p>
    <p class="mb-4">Ad occuparsi di pedodonzia nel Centro Medico è la dottoressa <strong>Monica Pozza</strong>, socia di SIOI (Società Italiana Odontoiatria Infantile). La dottoressa partecipa inoltre ad un programma di educazione all'igiene orale nelle scuole primarie.</p>

    <section class="mt-8 py-8 px-4 bg-grey-100">
        <h3 class="mb-4 font-medium text-xl">{{ __( "DOMANDE COMUNI" ) }}</h3>

        <ul class="flex flex-col">

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "A che età è consigliata la prima visita dal dentista?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">{{ __( "Non è mai troppo presto per iniziare a prendersi cura dei denti dei più piccini! Bisogna inoltre considerare che in una prima visita di controllo è possibile fermare sul nascere le abitudini negative (ad esempio succhiare il pollice) che potrebbero nuocere più avanti." ) }}</p>
                        <p class="mb-4">L'età ideale per <strong>una prima visita va dai 24 ai 30 mesi</strong>, quando sono emersi tutti i denti da latte.</p>
                        <p class="mb-4">{{ __( "È però consigliato anticipare la prima visita al dentista in caso di:" ) }}</p>

                        <ul class="list-disc list-inside">
                            <li>{{ __( "malattie sistemiche che interessano il cavo orale" ) }}</li>
                            <li>{{ __( "malformazioni oro-facciali" ) }}</li>
                            <li>{{ __( "mancata eruzione dei denti da latte" ) }}</li>
                            <li>{{ __( "frenuli labiali e linguali corti" ) }}</li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "I denti da latte vanno curati anche se poi cadono?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4"><strong>È sbagliata l'idea per cui i denti da latte non vanno curati</strong> in quanto destinati a cadere.</p>
                        <p class="mb-4"><em>La dentatura decidua</em>, infatti, <em>conserva lo spazio per i successivi denti permanenti</em> fungendo da guida nella loro eruzione.</p>
                        <p>{{ __( "Inoltre, i denti da latte sono fondamentali per la funzione masticatoria e fonatoria, consentono un armonico sviluppo di mandibola e mascella, e, infine, hanno funzione estetica, contribuendo a dare una buona immagine di sé." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come evitare la paura del dentista nel bambino?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">{{ __( "Ci sono vari metodi che aiutano a costruire un buon rapporto tra i bambini e l'odontoiatra." ) }}</p>
                        <p class="mb-4">Per iniziare, è bene organizzare <strong>una prima visita di controllo</strong> al termine della dentizione: in questo modo i piccoli avranno modo di <strong>incontrare lo specialista in una situazione di serenità</strong> e la visita dal dentista non verrà associata, ad esempio, al dolore della carie.</p>
                        <p class="mb-4">Nel nostro Centro Medico ci avvaliamo inoltre, dove necessario, di <strong>siringhe senza ago</strong>, che infondono l'anestetico per diffusione, eliminando il microtrauma dell'iniezione.</p>
                        <p class="mb-4">Un altro degli strumenti a nostra disposizione è l'<strong>applicazione Super Poteri</strong>, un'app progettata per trasformare la visita in un momento di divertimento. Con questa applicazione, che i genitori possono scaricare sul cellulare, i bambini si identificano in un personaggio immaginario con i loro stessi problemi. Durante la visita gli strumenti vengono associati a pozioni magiche che permettono al bambino di acquisire dei super poteri.</p>
                        <p>{{ __( "Per saperne di più visita" ) }} <a href="http://bravepotions.com/superpoteri/genitori" target="_blank">questo sito web</a></p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "A cosa serve la sigillatura dei denti?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">La sigillatura è una procedura raccomandata <strong>per prevenire la carie nei bambini</strong>.</p>
                        <p class="mb-4">Quando crescono, <em>i denti permanenti hanno solchi profondi e difficili da pulire e la superficie ha poco smalto</em>. Di conseguenza <em>i batteri proliferano indisturbati generando la carie</em>, soprattutto se l'igiene è carente.</p>
                        <p class="mb-4">La sigillatura serve proprio a scongiurare questo rischio, <em>applicando una speciale resina che chiude le fessure</em>. Si tratta di <strong>una procedura veloce e completamente indolore</strong>.</p>
                        <p>{{ __( "La superficie dei denti diventa così più liscia: di conseguenza risulta molto più facile rimuovere la placca con lo spazzolino." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come funziona la fluoroprofilassi per i bambini?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4"><strong>Il fluoro</strong> - specialmente se applicato in modo topico, cioè direttamente sull'apparato dentale - <strong>ha vari effetti positivi</strong>: aumenta la resistenza dello smalto, favorisce la mineralizzazione del dente e svolge un'azione antibatterica. <em>Si tratta di un elemento importante di prevenzione</em>, che abbassa l'insorgenza di successive patologie dentali.</p>
                        <p class="mb-4">{{ __( "Le linee guida dell'Organizzazione Mondiale per la Sanità prescrivono per i più piccoli un trattamento di fluoroprofilassi in due fasi:" ) }}</p>

                        <ul class="list-disc list-inside">
                            <li><strong>Dai 6 mesi ai 6 anni</strong> è opportuno utilizzare un dentifricio contenente almeno 1000ppm di fluoro due volte al giorno con un attento controllo degli adulti per evitare l'ingestione.Nei casi in cui l'uso del dentifricio risulta complicato o in soggetti ad alto rischio di carie è possibile integrare con l'assunzione di gocce.</li>
                            <li><strong>Dai 6 anni</strong> è opportuno utilizzare un dentifricio contenente almeno 1000ppm di fluoro due volte al giorno. il dentifricio dovrebbe essere risciacquato il meno possibile.</li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Cosa fare in caso di traumi dentali?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Nei bambini è molto facile che occorrano <strong>traumi</strong> (cadute accidentali, urti) che interessano anche l'apparato dentale. In questi casi è sempre indicato <strong>accompagnare i piccoli ad una visita di controllo</strong> dall'odontoiatra, anche in assenza di danni evidenti.</p>
                        <p>Un dente traumatizzato anche senza danni apparenti <em>potrebbe portare nel tempo ad una necrosi della polpa dentale</em>, con conseguenza gravi. Un indizio che può far pensare alla necrosi della polpa dentale è il cambiamento di colore dell'elemento dentario traumatizzato.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Quando dovrebbero spuntare i dentini?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">I denti decidui (denti da latte) sono 20. Solitamente <strong>iniziano a spuntare intorno ai 6 mesi di vita</strong>, ma ci possono essere eruzioni precoci o tardive rispetto a tale data.</p>
                        <p class="mb-4">I primi a spuntare sono i 2 incisivi centrali inferiori, poi i 2 incisivi centrali superiori, i 2 laterali superiori e i 2 laterali inferiori. A seguire compaiono 4 canini e 8 molari, che verranno in seguito sostituiti dai premolari permanenti. <strong>I molari permanenti erompono all'età di 6 anni</strong> e non verranno più sostituiti.</p>
                        <p class="mb-4">Ricordiamo che <strong>i denti da latte</strong> hanno una funzione importantissima per la salute ed il benessere del bambino, pertanto <em>i genitori devono prendersene cura sin dai primi mesi di vita</em> anche quando non sono ancora spuntati.</p>
                        <p>{{ __( "Come? Insegnando ai bambini le prime tecniche di igiene dentale (come spazzolare denti e gengive) e accompagnandoli alle prime visite regolari dal dentista." ) }}</p>
                    </div>
                </div>
            </li>

        </ul>
    </section>
</article>

@endsection
