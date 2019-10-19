<header class="z-10 w-full py-2">
    <nav class="container mx-auto relative">

    <div class="flex justify-between items-center">
        <a href="{{ route('website.homepage') }}">
            <img src="{{ asset('images/branding/logo/svg/logotype-cmigea.svg') }}" alt="IGEA logo tipo" class="w-24" />
        </a>

        @include('layouts.menu')

        <a href="https://www.facebook.com/studiodentisticopozza" title="Profilo Facebook Igea" target="_blank" class="hidden sm:block flex justify-center items-center cursor-pointer whitespace-no-wrap select-none py-2 px-4 rounded-sm border border-transparent font-medium bg-blue-600 text-white">{{ __( "FB" ) }}</a>
    </div>

    </nav>
</header>
