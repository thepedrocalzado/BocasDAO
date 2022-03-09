<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>


<div class="bg-lightgreen pb-12">

    <div class="bg-lightgreen pt-10 static " id="passport">
        <div class="md:max-w-6xl md:mx-auto text-left justify-left ">
            <p class="text-white leading-tight font-boldao text-5xl mb-10 ml-4">
                The Passport of your choice...
            </p>
        </div>
    </div>


        @extends('components/passports/refugio')





</div>




