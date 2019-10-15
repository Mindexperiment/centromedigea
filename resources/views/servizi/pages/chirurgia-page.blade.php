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
            <li aria-current="page">{{ __( "Chirurgia" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Chirurgia Orale" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Intervenire per mantenere la salute della bocca" ) }}</p>

    <p class="mb-4">La chirurgia orale comprende una gamma di <strong>interventi chirurgici</strong> che si svolgono sulla bocca e sulle mascelle. Gli <em>interventi di chirurgia orale</em>, eseguiti dal dottor Carmelo Pozza, <em>vengono svolti alla poltrona sotto anestesia locale</em> o in sedazione cosciente (in collaborazione con un anestesista).</p>
    <p class="mb-4">{{ __( "Tra gli interventi di chirurgia orale si possono elencare:" ) }}</p>

    <ul class="list-disc list-inside">
        <li>{{ __( "Estrazioni - semplici e complesse" ) }}</li>
        <li>{{ __( "Estrazioni dei denti del giudizio - semplici e complesse" ) }}</li>
        <li>{{ __( "Interventi per il trattamento delle infezioni dentali" ) }}</li>
        <li>{{ __( "Chirurgia parodontale" ) }}</li>
        <li>{{ __( "Interventi di implantologia" ) }}</li>
        <li>{{ __( "Rimozione di condilomi (verruche) e papillomi" ) }}</li>
        <li>{{ __( "Biopsie sui papillomi" ) }}</li>
    </ul>

    <section class="mt-8 py-8 px-4 rounded-lg bg-grey-100">
        <h3 class="mb-4 font-medium text-xl">{{ __( "DOMANDE COMUNI" ) }}</h3>

        <ul class="flex flex-col">

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come si tratta l'estrazione di denti del giudizio vicini al nervo mandibolare?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">Quando ci troviamo a dover estrarre <strong>denti del giudizio</strong> che pescano nel nervo mandibolare <em>utilizziamo una tecnica innovativa con l'ausilio delle mini-viti</em>.</p>
                        <p>{{ __( "Questa tecnica ortodontica ci permette di allontanare il dente dal nervo e procedere poi all'estrazione chirurgica in maniera del tutto sicura." ) }}</p>
                    </div>
                </div>
            </li>

            <li class="relative mb-2 flex flex-col border border-green-300 bg-white">
                <div>
                    <p class="px-6 py-4">
                        <a>{{ __( "Come si formano i condilomi del cavo orale?" ) }}</a>
                    </p>
                </div>
                <div>
                    <div class="p-4">
                        <p class="mb-4">I condilomi del cavo orale (volgarmente noti come verruche) possono essere di varie tipologie: <strong>papilloma squamoso</strong>, <strong>verruca volgare</strong> e <strong>condiloma acuminato</strong>.</p>
                        <p class="mb-4">La <strong>verruca volgare</strong>, anche detta porro, è piuttosto rara nel cavo orale, poiché generalmente insorge sulle mani o sui piedi.</p>
                        <p class="mb-4">Il <strong>papilloma squamoso</strong> è invece la forma più riconoscibile dell'infezione da HPV a livello del cavo orale. Si tratta di un sollevamento peduncolato della mucosa che, per le diverse digitazioni, assume il tipico aspetto “a cavolfiore” bianco o rosato.</p>
                        <p class="mb-4">Il <strong>condiloma acuminato</strong>, infine, rappresenta la manifestazione più frequentemente correlata a trasmissione sessuale, tant'è vero che la si osserva di solito a livello genitale.</p>
                        <p class="mb-4">Il <strong>virus HPV</strong> (il Papilloma Virus Umano) è il responsabile della comparsa di queste lesioni. Alcuni ceppi di HPV possono causare tumori oringofagei (nella parte posteriore della gola, sulla lingua o sulle tonsille).</p>
                        <p class="mb-4">{{ __( "L'infezione da virus del papilloma umano (HPV) è oggi molto diffusa e può coinvolgere diversi distretti corporei. A seconda dell'epitelio colpito, cambieranno le manifestazioni cliniche: in linea di massima, lo si potrà ritrovare sulla cute o a livello delle diverse semimucose, genitali (è risaputo il suo ruolo nell'oncogenesi del carcinoma della cervice uterina) e anche nel cavo orale. In base a questo, quindi, il virus HPV viene oggi classificato all'interno dei virus a potenzialità oncogenica." ) }}</p>
                        <p class="mb-4">{{ __( "Ovviamente, non tutti i tipi manifestano la stessa virulenza: in base alle conoscenze attuali e ai dati epidemiologici, si afferma oggi che HPV 16 e 18 siano quelli a più alto potenziale di trasformazione cellulare." ) }}</p>
                        <p>{{ __( "In caso di contagio, il trattamento consiste nella rimozione chirurgica della lesione tramite bisturi o laser. Successivamente si procede ad eseguire una biopsia per accertarsi della gravità della patologia." ) }}</p>
                    </div>
                </div>
            </li>

        </ul>
    </section>
</article>

@endsection
