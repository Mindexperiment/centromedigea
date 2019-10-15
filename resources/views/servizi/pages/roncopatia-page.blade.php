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
            <li aria-current="page">{{ __( "Roncopatia" ) }}</li>
        </ol>
    </nav>

    </div>
</div>

@endsection

@section('page')
<article class="text-gray-700">
    <h2 class="text-3xl">{{ __( "Roncopatia e Apnea del sonno" ) }}</h2>
    <p class="mb-2 font-thin text-2xl text-green-300">{{ __( "Dormire bene per vivere meglio" ) }}</p>

    <p class="mb-4">La sindrome nota come <strong>apnea</strong> o <em>ipoapnea del sonno</em> (il russamento) è una delle più diffuse fra le patologie che affliggono le vie respiratorie: <em>ne soffre circa il 25% della popolazione</em>.</p>
    <p class="mb-4">Sebbene nella maggior parte dei casi si tratti di forme lievi con sintomatologia limitata, <strong>questa patologia può dar vita a una serie di disturbi dannosi</strong> per la salute dei pazienti.</p>

    <h3 class="mb-2 text-xl">{{ __( "Apnea del sonno" ) }}</h3>
    <p class="mb-4">Nel caso in cui la patologia si presenti nella sua forma più grave, assistiamo all'<em>ostruzione totale delle vie respiratorie</em> durante le ore di sonno. Lo spazio fra la lingua e il palato viene totalmente occluso <em>generando una sensazione di soffocamento</em> nel paziente affetto.</p>

    <h3 class="mb-2 text-xl">{{ __( "Roncopatia" ) }}</h3>
    <p class="mb-4">Nella forma più lieve, nota come <strong>Roncopatia</strong>, il disturbo si manifesta come un <em>restringimento delle vie respiratorie</em>.</p>
    <p class="mb-4">La dilatazione dello spazio fra il palato e la lingua è ridotta rispetto alla situazione ottimale <strong>e genera una vibrazione al passaggio dell'aria</strong> che a sua volta causa il <strong>russamento</strong>; la roncopatia può tuttavia sfociare anche in un'ostruzione parziale delle vie respiratorie.</p>

    <h3 class="mb-2 text-xl">{{ __( "Le conseguenze della roncopatia" ) }}</h3>
    <p class="mb-4">Questa sindrome può avere delle conseguenze che <em>si riflettono sullo stile di vita</em> di chi ne è affetto. Può infatti causare <strong>insonnia</strong> e difficoltà a prendere sonno, <strong>problemi di concentrazione</strong>, <strong>perdite di memoria</strong>, eccessiva <strong>sonnolenza diurna</strong> e <strong>spossatezza</strong>.</p>

    <h4 class="mb-2">{{ __( "Come si tratta?" ) }}</h4>
    <p class="mb-4">Recenti studi rivelano il collegamento tra questi disturbi e il <strong>bruxismo</strong>: è possibile quindi approcciare e risolvere questa patologia con terapia odontoiatrica.</p>
    <p class="mb-4">{{ __( "Il trattamento consiste in tre fasi:" ) }}</p>

    <ul class="list-disc list-inside">
        <li>{{ __( "monitoraggio" ) }}</li>
        <li>{{ __( "diagnosi" ) }}</li>
        <li>{{ __( "terapia" ) }}</li>
    </ul>

    <p class="mb-4">Nella prima fase si utilizza il dispositivo elettronico <strong>APNiA</strong>, in grado di <em>monitorare il sonno</em> del paziente (flusso respiratorio, ossimetria, frequenza cardiaca e russamento). Attraverso i dati raccolti è possibile diagnosticare con facilità il disturbo.</p>
    <p class="mb-4">{{ __( "Nel caso di responso positivo della macchina si procede con la terapia." ) }}</p>
    <p>Attraverso l'<em>utilizzo di un <strong>byte</strong></em>, un apparecchio mobile intraorale, si può evitare che la mandibola si ritragga, garantendo così un ottimale dilatazione delle vie aeree.</p>
</article>

@endsection
