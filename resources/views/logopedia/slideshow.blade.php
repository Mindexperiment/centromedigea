<carousel class="my-6"
    pagination-active-color="#3182ce"
    v-bind:per-page="1"
    v-bind:per-page-custom="[[768,2],[1024,3]]"
    v-bind:scroll-per-page="false">

    <slide class="hero mr-4">
        <div class="w-full h-full inline-block rounded bg-cover bg-no-repeat bg-center bg-top" style="background-image: url({{ asset('images/partners/logopedia/tiles/tile1.jpg') }});"></div>
    </slide>
    <slide class="hero mr-4">
        <div class="w-full h-full inline-block rounded bg-cover bg-no-repeat bg-center bg-top" style="background-image: url({{ asset('images/partners/logopedia/tiles/tile2.jpg') }});"></div>
    </slide>
    <slide class="hero mr-4">
        <div class="w-full h-full inline-block rounded bg-cover bg-no-repeat bg-center bg-top" style="background-image: url({{ asset('images/partners/logopedia/tiles/tile3.jpg') }});"></div>
    </slide>
    <slide class="hero mr-4">
        <div class="w-full h-full inline-block rounded bg-cover bg-no-repeat bg-center bg-top" style="background-image: url({{ asset('images/partners/logopedia/tiles/tile4.jpg') }});"></div>
    </slide>
    <slide class="hero mr-4">
        <div class="w-full h-full inline-block rounded bg-cover bg-no-repeat bg-center bg-top" style="background-image: url({{ asset('images/partners/logopedia/tiles/tile5.jpg') }});"></div>
    </slide>
    <slide class="hero mr-4">
        <div class="w-full h-full inline-block rounded bg-cover bg-no-repeat bg-center bg-top" style="background-image: url({{ asset('images/partners/logopedia/tiles/tile6.jpg') }});"></div>
    </slide>

</carousel>
