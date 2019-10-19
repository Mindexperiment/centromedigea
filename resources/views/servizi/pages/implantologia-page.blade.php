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
            <li aria-current="page">{{ __( "Implantologia" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Implantologia" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Riabilitare il sorriso con un impianto dentale" ) }}</p>

    <p class="mb-4">L'<strong>implantologia</strong> è quella branca dell'odontoiatria che <em>consente di rimpiazzare elementi dentali mancanti con protesi in titanio</em> ancorate all'osso: una procedura priva di controindicazioni che permette di ottenere risultati immediati in termini di comfort e resa estetica.</p>
    <p class="mb-4">Gli <strong>impianti dentali</strong> consentono infatti di ripristinare del tutto un sorriso danneggiato dalla mancanza di qualche dente. L'arcata viene così riportata alla sua originale bellezza, con notevole miglioramento anche della funzione masticatoria.</p>
    <p class="mb-4">La soluzione implantare <em>permette di conservare integri i denti</em> vicini allo spazio da colmare, poiché la protesizzazione degli impianti non richiede la preparazione dei denti naturali adiacenti.</p>

    <section class="mt-8 py-8 px-4 bg-grey-100">
        <h3 class="mb-4 font-medium text-xl">{{ __( "DOMANDE COMUNI" ) }}</h3>

        <ul class="flex flex-col">

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Cos'è un impianto a carico immediato?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">La tecnica del <strong>carico immediato</strong> permette di <em>ancorare una protesi provvisoria fissa a poche ore di distanza dall'intervento</em> implantologico.</p>
                        <p class="mb-4">{{ __( "Dopo la procedura di tipo estrattivo, quando necessaria all'inserimento degli impianti, verrà applicata una protesi provvisoria fissa: un dispositivo studiato per essere perfettamente integrato nella bocca del paziente che verrà usato per tutto il periodo delle cure prima della costruzione della protesi fissa definitiva." ) }}</p>
                        <p>Questo trattamento <em>è in grado di restituire al sorriso il suo originale rendimento estetico</em> in poche ore. Una volta avvenuta l'osteointegrazione degli impianti -cioè dopo circa 3 mesi- verrà applicata la protesi definitiva fissa con corone in ceramica o del materiale preventivamente concordato.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Esistono controindicazioni all'impianto dentale?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Le <strong>controindicazioni</strong> agli interventi di implantologia sono uguali a quelle di qualsiasi altro intervento chirurgico. Nello specifico possiamo dire che esistono delle controindicazioni assolute in caso di immunodeficienza, cirrosi epatica e insufficienza renale ed il trattamento con bifosfonati per via parenterale, che vietano in maniera categorica un trattamento di questo tipo.</p>
                        <p>{{ __( "Altre patologie, come un diabete grave o disturbi alla coagulazione, comportano vari livelli di rischio, ma che se tenuti sotto controllo non pregiudicano l'intervento." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Quali sono i rischi dell'implantologia?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">La maggior parte delle persone che intende affidarsi all'implantologia crede che il rischio principale sia il rigetto dell'impianto dentale. In realtà <strong>non esiste alcun rischio legato al rigetto</strong> in quanto il titanio, il materiale utilizzato per gli impianti, ha un'eccezionale biocompatibilità; l'organismo non lo considera un corpo estraneo e non lo rigetta.</p>
                        <p>{{ __( "Esistono tuttavia una serie rischi di cui è necessario tener conto prima di sottoporsi all'intervento. La mancata osteointegrazione, che spesso viene considerato un rigetto ma che in realtà avviene quando l'osso non si integra con l'impianto, è il rischio maggiore, sebbene si verifichi con estrema rarità, in caso di infiammazioni di gengive (piorrea o paradontite le più diffuse), fumo eccessivo, scarsa densità ossea o tecniche chirurgiche inadeguate." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "L'intervento di implantologia è doloroso?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">L'intervento implantologico <em>si svolge generalmente in anestesia locale</em> tramite un blocco nervoso periferico. La procedura prevede una fase iniziale di premedicazione con antinfiammatori e/o antibiotici qualora i pazienti ne necessitino, per poi continuare con l'intervento che viene realizzato in stato di “sedazione cosciente”.</p>
                        <p>{{ __( "Il trattamento così realizzato ci consente creare per il paziente un ambiente confortevole e rilassato." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Quanto dura un impianto dentale?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Le ultime ricerche dimostrano che <em><strong>un intervento implantare realizzato con successo</strong> ha una durata di 10 anni nel 98% dei casi</em>, oggi giorno si stima che il successo sia ancora più duraturo.</p>
                        <p class="mb-4">{{ __( "Questo risultato si può ottenere grazie alla totale biocompatibilità del titanio, un materiale che sta facendo fare passi da gigante alla tecnologia implantare." ) }}</p>
                        <p>{{ __( "Tuttavia, gli impianti hanno un fisiologico riassorbimento dell'osso periimplantare di 1mm nel primo anno, seguito da 0.5mm negli anni successivi. E' fondamentale sottoporsi a periodici controlli trimestrali per poter eseguire le adeguate manovre di igiene professionale. Bisogna infatti considerare che placca e tartaro colpiscono gli impianti in ugual misura rispetto ai denti, causando mucositi e perimplantiti." ) }}</p>
                    </div>
                </div>
            </li>

        </ul>
    </section>
</article>

@endsection
