<section class="leading-relaxed text-gray-600">
    <div class="container mx-auto px-4 py-24 text-center">

        <div class="mx-auto mb-4 w-full md:w-1/2">
            <p class="select-none whitespace-no-wrap inline-block py-2 px-4 border border-transparent rounded-full leading-normal text-xs bg-green-100 text-green-500">Il Team</p>

            <h3 class="mb-2 font-light leading-normal text-3xl text-blue-600">{{ __( "I migliori specialisti" ) }} <span class="font-semibold">medici</span> ed <span class="font-semibold">odontoiatri</span></h3>
            <p>{{ __( "Le nostre prestazioni vanno dall'ortodonzia alla medicina estetica, dalla chirurgia orale ai trattamenti dei disturbi del sonno." ) }}</p>
        </div>

        <div class="mt-8">
            <carousel v-bind:per-page="1" v-bind:per-page-custom="[[768,2]]" v-bind:autoplay-timeout="5000" autoplay loop>

                <slide>
                    @include( 'homepage.slides.monica' )
                </slide>
                <slide>
                    @include( 'homepage.slides.carmelo' )
                </slide>
                <slide>
                    @include( 'homepage.slides.paolo' )
                </slide>
                <slide>
                    @include( 'homepage.slides.marta' )
                </slide>
                <slide>
                    @include( 'homepage.slides.luca' )
                </slide>

            </carousel>
        </div>

        <div class="mt-8">
            <div class="mx-auto mb-4 w-full md:w-1/2">
                <p class="mb-2 font-light leading-normal text-3xl text-blue-600">{{ __( "Un team completo" ) }} di <span class="font-semibold">professionisti</span></p>
                <p>{{ __( "Abbiamo coinvolto un team di professionisti dinamico per la cura del corpo a 360 gradi, per bambini, adulti ed anziani." ) }}</p>
            </div>

            <div class="mt-8">
                <carousel v-bind:per-page="1" v-bind:per-page-custom="[[768,2]]" v-bind:autoplay-timeout="5000" autoplay loop>

                    <slide>
                        @include( 'homepage.slides.gianmarco' )
                    </slide>
                    <slide>
                        @include( 'homepage.slides.matteo' )
                    </slide>
                    <slide>
                        @include( 'homepage.slides.mirka' )
                    </slide>
                    <slide>
                        @include( 'homepage.slides.giulia' )
                    </slide>

                </carousel>
            </div>
        </div>
    </div>
</section>
