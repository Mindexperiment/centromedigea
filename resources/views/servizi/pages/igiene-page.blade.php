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
            <li aria-current="page">{{ __( "Igiene orale" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Igiene orale" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Pulizia regolare per un sorriso da invidiare" ) }}</p>

    <p class="mb-4">{{ __( "L'igiene orale professionale (la classica pulizia dei denti) è sicuramente la prima, importante procedura per difendersi dalle possibili patologie del cavo orale e avere sempre un sorriso bello e sano." ) }}</p>
    <p class="mb-4">Una prevenzione adeguata è infatti in grado di tutelarci da patologie come <em>piorrea, carie e gengiviti</em>, causate dalla presenza di batteri nel cavo orale e dal conseguente accumulo di tartaro e placca.</p>
    <p class="mb-4">{{ __( "L'igiene orale domiciliare può, da solo, non essere sufficiente a mantenere una buona salute dentale." ) }}</p>
    <p class="mb-4">Ricorrere regolarmente alla <strong>pulizia professionale</strong> aiuta quindi a prevenire l'insorgere di patologie e a mantenere sempre intatta l'estetica del sorriso.</p>

    <section class="mt-8 py-8 px-4 bg-grey-100">
        <h3 class="mb-4 font-medium text-xl">{{ __( "DOMANDE COMUNI" ) }}</h3>

        <ul class="flex flex-col">

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Perché è necessaria l'igiene professionale?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4"><em>Lo spazzolino</em> da denti, anche usato con regolarità dopo ogni pasto, <em>non riesce a  raggiungere ogni angolo del cavo orale</em> in cui si annidano batteri e tartaro pericolosi per il sorriso.</p>
                        <p class="mb-4">Non sempre, oltretutto, si riesce a garantire un'adeguata sostituzione dello spazzolino: ricordiamo infatti che <strong>lo spazzolino andrebbe cambiato non appena le setole iniziano ad inclinarsi</strong>.</p>
                        <p class="mb-4">La deformazione delle setole può essere tale da rendere quasi inefficace la procedura di spazzolamento quotidiano. Inoltre, <em>se lo spazzolino rimane a lungo umido, può diventare sede di una proliferazione batterica dannosa</em> per la nostra igiene.</p>
                        <p>L'<strong>igiene orale</strong> ad opera dell'odontoiatra garantisce un risultato duraturo in grado di proteggere il tuo sorriso in maniera prolungata e efficace.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come si forma la carie?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">La <strong>carie</strong>, di gran lunga <em>la più diffuse fra tutte le patologie</em> che affliggono la salute dentale, <strong>è una malattia infettiva</strong> generata da una flora batterica fuori controllo presente nel cavo orale. La carie <em>prolifera in caso di cattiva igiene orale e bassa frequenza nei controlli odontoiatrici</em>.</p>
                        <p class="mb-4">Le carie <em>hanno origine sulla superficie del dente</em>; se si aggrava può però arrivare fino alla polpa dentale.</p>
                        <p>{{ __( "I trattamenti delle carie possono essere diversi, a seconda della gravità del danno: si va da un'otturazione alla devitalizzazione e altri trattamenti più complessi." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Cos'è il tartaro?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Il <strong>tartaro</strong> <em>è la mineralizzazione della placca batterica</em>, una sorta di pellicola appiccicosa formata da batteri, cellule morte e residui di cibo che si deposita sui denti. La placca può solidificarsi in sole 7 ore; una volta formato, il tartaro risulta poi molto difficile da rimuovere.</p>
                        <p>Lasciare che il tartaro si addensi sui denti <em>può portare a gravi problemi in termini di carie, mal di denti, ascessi e perfino parodontite</em> (anche nota come piorrea).</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Cos'è la fluorizzazione?" ) }}</a>
                    </p>
                </div>
               <div>
                    <div class="p-4">
                        <p class="mb-4">La <strong>fluorizzazione</strong> è una procedura che consiste nell'<em>applicazione topica del fluoro direttamente sui denti</em>. Tipicamente viene eseguita al termine di una seduta di igiene orale.</p>
                        <p class="mb-4">Il fluoro ha vari effetti positivi per l'apparato dentario: <em>aumenta la resistenza dello smalto, favorisce la mineralizzazione del dente e svolge un'azione antibatterica</em>, prolungando di fatto gli effetti positivi della seduta di igiene.</p>
                        <p>Se il paziente soffre di parodontite o gengivite, il fluoro <em>aiuta inoltre a prevenire o eliminare la sensibilità al freddo ed evita la comparsa delle carie</em>.</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Ma il fluoro fa male?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">{{ __( "In passato il fluoro veniva prescritto preventivamente e assunto in maniera sistemica tramite pastiglie, se non diffuso nell'acqua potabile. Questo metodo di assunzione presenta notevoli rischi per l'organismo." ) }}</p>
                        <p>{{ __( "Al contrario, l'utilizzo topico (in superficie), unito ad una serie di piccole precauzioni per evitare l'ingestione accidentale della sostanza, portano notevoli benefici in termine di prevenzione e mantenimento della salute dentale." ) }}</p>
                    </div>
                </div>
            </li>

        </ul>
    </section>
</article>

@endsection
