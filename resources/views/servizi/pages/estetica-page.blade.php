@extends( 'layouts.page' )

@section( 'breadcrumbs' )
<div>
    <div class="container mx-auto pt-8 px-4">

    <nav aria-label="breadcrumb">
        <ol class="mb-4 flex flex-wrap">
            <li><a href="{{ route('website.homepage') }}" class="underline text-blue-600">{{ __( "Home" ) }}</a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="{{ route('servizi.index') }}" class="pl-2 underline text-blue-600">{{ __( "Servizi" ) }}</a></li>
            <li><span class="mx-2">/</span></li>
            <li aria-current="page">{{ __( "Chirurgia estetica" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section( 'page' )
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Estetica Dentale" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Fai brillare il tuo sorriso" ) }}</p>

    <p class="mb-4">L'<strong>estetica dentale</strong> è quella branca dell'odontoiatria riguardante la cura di denti, struttura ossea, gengive e labbra, <em>finalizzata al miglioramento del sorriso</em>.</p>
    <p class="mb-4">Nel nostro Centro Medico <em>eseguiamo trattamenti specializzati che garantiscono risultati del tutto naturali</em>, in linea con l'età e le esigenze del paziente.</p>
    <p class="mb-4">{{ __( "Le terapie più comuni a cui si ricorre quando si cerca di migliorare l'estetica orale sono lo sbiancamento (professionale su poltrona o domiciliare) e le faccette dentali." ) }}</p>

    <h3 class="mb-2 text-xl">{{ __( "Perchè è utile ricorrere all'estetica dentale" ) }}</h3>
    <p class="mb-4">La cura dei denti e della bocca è estremamente importante non solo per la propria salute orale, ma è anche <strong>fondamentale per il proprio benessere psicofisico</strong>.</p>
    <p class="mb-4">Avere <em>un sorriso bello e sano migliora la qualità della vita</em> e aumenta la sicurezza in noi stessi.</p>

    <section class="mt-8 py-8 px-4 bg-grey-100">
        <h3 class="mb-4 font-medium text-xl">{{ __( "DOMANDE COMUNI" ) }}</h3>

        <ul class="flex flex-col">

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come funziona lo sbiancamento dentale?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Lo <strong>sbiancamento dentale</strong> è la terapia più richiesta per migliorare l'estetica del nostro sorriso e la bellezza dei nostri denti.</p>
                        <p class="mb-4">La procedura di sbiancamento può essere attuata in diversi modi: <em>si può</em> infatti <em>svolgere nello studio dentistico</em> -alla poltrona- <em>o a domicilio</em>, ricorrendo alle mascherine.</p>
                        <p class="mb-4"><em>L'agente sbiancante utilizzato nel <strong>trattamento nello studio</strong> è il perossido di idrogeno</em>; nel caso del trattamento domiciliare si utilizza perossido di carbamide in concentrazioni molto basse.</p>
                        <p class="mb-4">Nel caso del <strong>trattamento alla poltrona</strong> la procedura è più rapida: l'agente sbiancante viene infatti attivato tramite luce laser per accelerare il processo di sbiancamento. <em>Basta una sola seduta per ottenere denti immediatamente più bianchi e brillanti</em>.</p>
                        <p class="mb-4">Quando si decide invece di ricorrere a <strong>procedure di sbiancamento domiciliare</strong> viene realizzata una mascherina in silicone morbido che il paziente riempie con un gel di perossido di carbammide da indossare durante le ore notturne per circa 6 notti. <em>Essendo la concentrazione di prodotto più bassa il risultato richiede più tempo</em>.</p>
                        <p><em>Il trattamento di sbiancamento è indolore</em>. Vi sono limitati effetti collaterali di sensibilità dentale che generalmente si risolvono nel giro di poche ore.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Quanto dura lo sbiancamento dentale?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Lo sbiancamento dentale <em>non è permanente</em>.</p>
                        <p class="mb-4">La durata dello sbiancamento può variare molto a seconda delle abitudini personali: generalmente si va <em>da uno a tre anni</em>.</p>
                        <p>{{ __( "Tuttavia successive sedute domiciliari concordate con l'odontoiatra possono allungare nel tempo l'effetto dello sbiancamento." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Cosa sono le faccette dentali?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Le <strong>faccette dentali</strong> (o veeners) sono piccoli laminati molto sottili realizzati in ceramica in composito che si applicano sulla superficie dei denti.</p>
                        <p class="mb-4">Possono essere considerate delle vere e proprie protesi, anche se sono poco invasive e <em>utilizzate soprattutto per risolvere problemi estetici</em> - come, ad esempio, discromie, macchie sui denti, lievi disallineamenti, difetti dello smalto.</p>
                        <p>Le faccette dentali sono molto resistenti e <em>possono durare fino a 10 anni</em> senza bisogno di sostituzioni.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Cos'è lo sbiancamento endocanalare?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">{{ __( "I denti che hanno subito una cura canalare nel tempo possono scurire." ) }}</p>
                        <p class="mb-4">In questo caso si procede ad uno <strong>sbiancamento endocanalare</strong>: si toglie l'otturazione e si inserisce nella corona dentale del periossido di idrogeno con effetto sbiancante.</p>
                        <p>{{ __( "Una volta giunti al risultato desiderato il dente viene richiuso utilizzando il composito." ) }}</p>
                    </div>
                </div>
            </li>

        </ul>
    <section>
</article>

@endsection
