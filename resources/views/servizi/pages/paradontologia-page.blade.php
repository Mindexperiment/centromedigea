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
            <li aria-current="page">{{ __( "Paradontologia" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Paradontologia" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Gengive sane per un sorriso più forte" ) }}</p>

    <p class="mb-4">La <strong>parodontologia</strong> è il campo dell'odontoiatria che <em>si occupa della prevenzione, della diagnosi e della cura delle patologie a carico dei tessuti di sostegno del dente</em> come gengive e osso.</p>
    <p class="mb-4">Proteggere e <strong>curare le gengive è estremamente importante</strong>: una semplice gengivite potrebbe, nei casi più gravi, degenerare in <strong>parodontite</strong> (o piorrea) e portare alla perdita dei denti.</p>
    <p class="mb-4">Il Centro Medico Igea fornisce una serie di servizi specifici dedicate alla protezione e alla cura dell'apparato parodontale: oltre all'<strong>igiene orale</strong>, proponiamo anche il trattamento di <strong>currettaggio delle gengive</strong> (scaling) e <strong>levigatura radicolare</strong>.</p>
    <p class="mb-4">Nei casi in cui si assiste ad una recessione delle gengive, <em>operiamo innesti gengivali con l'utilizzo di <strong>PRP</strong></em> (Plasma Ricco di Piastrine), un sistema all'avanguardia che utilizza i tessuti corporei per accelerare il processo di guarigione.</p>

    <h3 class="mb-2 text-xl">{{ __( "Il nemico numero uno dei denti: la placca" ) }}</h3>
    <p class="mb-4">Quando mangiamo la saliva e i residui di cibo formano <strong>la placca</strong>, una sorta di pellicola (biofilm) che si deposita tipicamente nei punti di congiunzione tra denti e gengive e che favorisce il proliferare dei germi.</p>
    <p class="mb-4">Se la placca si è appena depositata <em>può essere facilmente rimossa con lo spazzolino da denti</em> (se usato correttamente). Un'igiene orale scarsa o poco accurata può invece causare l'accumulo della placca, ricco di conseguenze negative.</p>
    <p class="mb-4">Tra queste, una delle più tipiche è la <strong>gengivite</strong>, una patologia che causa gonfiore e sanguinamento delle gengive quando si spazzolano i denti.</p>
    <p class="mb-4">Nel corso del tempo <em>la gengivite può dar luogo alla parodontite</em> (o piorrea).</p>
    <p class="mb-4">{{ __( "Una patologia assimilabile alla gengivite può insorgere anche in caso di impianti dentali: in questo caso si parla di mucosite che, se non trattata, può degenerare in perimplantite." ) }}</p>

    <section class="mt-8 py-8 px-4 bg-grey-100">
        <h3 class="mb-4 font-medium text-xl">{{ __( "DOMANDE COMUNI" ) }}</h3>

        <ul class="flex flex-col">

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Cos'è la parodontite (o piorrea)?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Se l'infiammazione delle gengive si estende all'apparato parodontale insorge la <strong>parodontite</strong>, un'infezione cronica agli elementi di sostegno dei denti, ovvero osso, cemento radicolare, legamento parodontale e gengive.</p>
                        <p class="mb-4">{{ __( "Oltre ad un'igiene orale approssimativa esistono altri fattori che possono favorire l'insorgere della parodontite:" ) }}</p>

                        <ul class="list-disc list-inside">
                            <li>{{ __( "il fumo" ) }}</li>
                            <li>{{ __( "la predisposizione genetica" ) }}</li>
                            <li>{{ __( "lo stress" ) }}</li>
                            <li>{{ __( "alcune patologie sistemiche (tra cui il diabete)" ) }}</li>
                        </ul>

                        <p class="mb-4">I sintomi della parodontite sono difficili da individuare in fase iniziale. La <em>sanguinazione delle gengive</em> può essere un campanello d'allarme, così come <em>il gonfiore</em> (edema) del bordo gengivale e l'<em>alitosi</em>. In casi più gravi si può invece assistere alla formazione di tasche parodontali, mobilità dentale, ascessi e suppurazioni fino alla perdita di uno o più denti.</p>
                        <p>{{ __( "Uno specialista parodontologo può diagnosticare la malattia servendosi della radiografia e del sondaggio delle tasche parodontali." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come si cura la parodontite?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">La <strong>terapia di cura della parodontite</strong> consiste in una o più sedute di igiene orale con annessa ablazione del tartaro, scaling (currettaggio gengivale) elevigatura delle radici.</p>
                        <p class="mb-4">{{ __( "Nei casi più gravi può essere necessario un intervento chirurgico non invasivo per ripulire i tessuti più profondi. Se la parodontite ha causato anche recessione delle gengive si procede anche ad un intervento di chirurgia rigenerativa." ) }}</p>
                        <p>{{ __( "Se l'infezione ha portato alla caduta di denti si applica infine un impianto dentale." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Cos'è lo scaling (currettaggio gengivale)?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Il <strong>trattamento di scaling</strong> e <strong>levigatura radicolare</strong> aiuta a levigare le radici dei denti – normalmente coperte dalla gengiva – e a togliere il tartaro che vi si accumula. Questo trattamento <em>permette inoltre di asportare i sottili strati di materiale necrotico che si annida nelle tasche gengivali</em> create dai batteri.</p>
                        <p class="mb-4">Attraverso il trattamento di scaling e levigatura <strong>è possibile riacquisire una superficie radicolare liscia e dura</strong> che rende più difficile ai batteri aderire. In questo modo si evita l'accumulo della placca e del tartaro.</p>
                        <p class="mb-4">{{ __( "È nostra prassi, dopo aver eseguito la “tradizionale” rimozione del tartaro, di eseguire una terapia fotodinamica tramite il Laser che permette di eliminare i batteri dalle tasche parodontali e dal resto della bocca." ) }}</p>
                        <p class="mb-4">{{ __( "In questo modo si eliminano le concrezioni di tartaro che si annidano più in profondità, diminuendo la probabilità di dover eseguire un trattamento chirurgico." ) }}</p>
                        <p class="mb-4">{{ __( "Il currettaggio può essere ripetuto regolarmente per coloro che sono più soggetti all'accumulo di placca e alla formazione di tartaro." ) }}</p>
                        <p>Si tratta di una <em>terapia non chirurgica effettuata in anestesia locale</em>.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Perché usare la terapia laser per lo scaling?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">{{ __( "I batteri della placca producono tossine capaci di annidarsi in profondità, in punti impossibili da raggiungere con lo spazzolino o con il filo interdentale, che danneggiano i tessuti circostanti." ) }}</p>
                        <p class="mb-4">La <strong>terapia laser</strong> <em>si basa su una fibra molto sottile che si insinua dentro le tasche gengivali profonde, in grado di eliminare i batteri e un sottile strato delle gengiva infiammata</em>. La rimozione del tessuto necrotico stimola le nuove cellule, dando il via ad un processo di biostimolazione. In questo modo diminuiscono i tempi di guarigione e si riducono le probabilità di dover ricorrere ad un intervento chirurgico.</p>
                        <p class="mb-4">La terapia laser abbinata allo scaling <em>porta infatti ad un immediato arresto dei sintomi di gengivite e parodontite</em> (infiammazione e sanguinamento gengivale, mobilità dentale, profondità delle tasche parodontali) e ad un minore fastidio nei giorni successivi alle procedure: i tessuti si sfiammano più velocemente, il dolore è ridotto e la ripresa della masticazione è immediata. A lungo termine si nota maggiore stabilità del miglioramento post trattamento e, in generale, benefici più durevoli.</p>
                        <p>La terapia laser <strong>è completamente indolore</strong>.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come funzionano gli innesti gengivali con PRP?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">{{ __( "In casi particolarmente gravi la parodontite può causare fenomeni di recessione gengivale, ovvero di retrazione del tessuto gengivale che lascia scoperte le radici dentali. Possono esserci anche altre cause della recessione gengivale, come ad esempio uno scorretto spazzolamento dei denti prolungato nel tempo." ) }}</p>
                        <p class="mb-4">{{ __( "Queste situazioni possono richiedere interventi chirurgici poco invasivi di riposizionamento della gengiva o di innesto gengivale." ) }}</p>
                        <p class="mb-4">In casi come questi risulta particolarmente importante l'utilizzo di <strong>PRP (Plasma Ricco di Piastrine)</strong>, una tecnica che <em>sfrutta tessuti del corpo per stimolare il processo di rigenerazione dei tessuti</em>, diminuire la risposta infiammatoria e accelerare la riparazione delle ferite.</p>
                        <p>{{ __( "Gli interventi chirurgici sull' apparato parodontale vengono eseguiti in studio e in anestesia locale." ) }}</p>
                    </div>
                </div>
            </li>

        </ul>
    </section>
</article>

@endsection
