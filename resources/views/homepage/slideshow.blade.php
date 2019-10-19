<div class="relative">
    <carousel v-bind:per-page="1" v-bind:autoplay-timeout="10000" autoplay loop>

        <slide>
            <div class="hero bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('images/layout/slideshow/slide01.jpg') }});"></div>
        </slide>
        <slide>
            <div class="hero bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('images/layout/slideshow/slide02.jpg') }});"></div>
        </slide>
        <slide>
            <div class="hero bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('images/layout/slideshow/slide03.jpg') }});"></div>
        </slide>
        <slide>
            <div class="hero bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('images/layout/slideshow/slide04.jpg') }});"></div>
        </slide>
        <slide>
            <div class="hero bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('images/layout/slideshow/slide05.jpg') }});"></div>
        </slide>

    </carousel>
    <div><div></div></div>
</div>
