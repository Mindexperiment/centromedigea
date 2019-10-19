<footer class="pt-24 px-4 pb-8 bg-gray-800 text-white">
    <div class="container mx-auto">

    <div class="flex justify-between">
        <div class="p-4">
            <a href="{{ route('website.homepage') }}">
                <img src="{{ asset('images/branding/logo/svg//logo.svg')}}" alt="Marchio completo del Centro Medico IGEA" class="w-32" />
            </a>
        </div>

        <div class="p-4">
            <h4 class="mb-2 font-medium text-xl">{{ __( "Contatti" ) }}</h4>
 
            <address class="mb-4 text-sm">
                <p><a href="tel:+390445941352" class="tex-blue-400">{{ __( "+39 0445-941352" ) }}</a></p>
                <p><a href="mailto:info@centromedigea.it" class="text-blue-400">{{ __( "info@centromedigea.it" ) }}</a></p>
                <p>{{ __( "Piazza Marconi, 4 Castelgomberto" ) }}</p>
            </address>
        </div>
    </div>

    <div class="mt-4 flex justify-between items-center">
        <div>
            <p><small>&copy; centromedigea.it - 2019 All right reserved.</small></p>
            <p><small>Made with <span class="fas fa-hearth text-red-500"></span> by <a href="https://andreagiuseppe.com" class="underline text-green-400" target="_blank">andreagiuseppe.com</a></small></p>
        </div>
        <a href="https://www.facebook.com/studiodentisticopozza" class="cursor-pointer flex justify-center items-center w-8 h-8 border border-transparent rounded-sm bg-blue-600">
            <span class="fab fa-facebook-f"></span>
        </a>
    </div>

    </div>
</footer>
