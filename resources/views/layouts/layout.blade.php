<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white font-sans antialiased">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Metadata -->
        @stack('metadata')

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        @stack('stylesheets')

        <!-- Javascript -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @stack('scripts')

        <!-- analytics layer -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112589282-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-112589282-1');
        </script>

        <title>{{ __( "Centro Medico IGEA" ) }}{{ isset( $title ) ? " | {$title}" : '' }}</title>
    </head>
    <body class="leading-normal font-normal text-base text-left text-gray-900">
        <div id="cmi">
            @yield('body')

        </div>
    </body>
</html>
