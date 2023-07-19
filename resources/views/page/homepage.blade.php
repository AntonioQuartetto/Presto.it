<x-template>
    <div class="container my-3">
        <div class="text-center mb-2">
            <h2>{{ __('ui.pageHomepage') }}</h2>
        </div>
        <div class="row">
            @foreach ($announcements as $announcement)
                @if ($announcement->is_accepted)
                    <x-card :$announcement />
                @endif
            @endforeach

        </div>
    </div>
    <hr>
    <div class="container">
        <div class="text-center my-4 p-3">
            <h3>{{ __('ui.pageHomepage_2') }}</h3>
        </div>
        <div>
            <x-categories />
        </div>
    </div>
    <div class="container my-5 text-center">
    <hr>
        <h2 class="bold">Scarica l’App ufficiale di Presto.</h2>
        <p>Cerca tra migliaia di annunci e inserisci i tuoi, ovunque tu sia.</p>
        <div class="container">
           <div class="row">
             <div class="col-12 col-md-6 d-flex justify-content-end">
                <a id="download-android-app" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                        width="48px" height="48px" fill-rule="evenodd" clip-rule="evenodd" baseProfile="basic">
                        <linearGradient id="jFdG-76_seIEvf-hbjSsaa" x1="1688.489" x2="1685.469" y1="-883.003"
                            y2="-881.443" gradientTransform="matrix(11.64 0 0 22.55 -19615.32 19904.924)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#047ed6" />
                            <stop offset="1" stop-color="#50e6ff" />
                        </linearGradient>
                        <path fill="url(#jFdG-76_seIEvf-hbjSsaa)" fill-rule="evenodd"
                            d="M7.809,4.608c-0.45,0.483-0.708,1.227-0.708,2.194 v34.384c0,0.967,0.258,1.711,0.725,2.177l0.122,0.103L27.214,24.2v-0.433L7.931,4.505L7.809,4.608z"
                            clip-rule="evenodd" />
                        <linearGradient id="jFdG-76_seIEvf-hbjSsab" x1="1645.286" x2="1642.929" y1="-897.055"
                            y2="-897.055" gradientTransform="matrix(9.145 0 0 7.7 -15001.938 6931.316)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#ffda1c" />
                            <stop offset="1" stop-color="#feb705" />
                        </linearGradient>
                        <path fill="url(#jFdG-76_seIEvf-hbjSsab)" fill-rule="evenodd"
                            d="M33.623,30.647l-6.426-6.428v-0.45l6.428-6.428 l0.139,0.086l7.603,4.321c2.177,1.227,2.177,3.249,0,4.493l-7.603,4.321C33.762,30.561,33.623,30.647,33.623,30.647z"
                            clip-rule="evenodd" />
                        <linearGradient id="jFdG-76_seIEvf-hbjSsac" x1="1722.978" x2="1720.622" y1="-889.412"
                            y2="-886.355" gradientTransform="matrix(15.02 0 0 11.5775 -25848.943 10324.73)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#d9414f" />
                            <stop offset="1" stop-color="#8c193f" />
                        </linearGradient>
                        <path fill="url(#jFdG-76_seIEvf-hbjSsac)" fill-rule="evenodd"
                            d="M33.762,30.561l-6.565-6.567L7.809,43.382 c0.708,0.761,1.9,0.847,3.232,0.103L33.762,30.561"
                            clip-rule="evenodd" />
                        <linearGradient id="jFdG-76_seIEvf-hbjSsad" x1="1721.163" x2="1722.215" y1="-891.39"
                            y2="-890.024" gradientTransform="matrix(15.02 0 0 11.5715 -25848.943 10307.886)"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#33c481" />
                            <stop offset="1" stop-color="#61e3a7" />
                        </linearGradient>
                        <path fill="url(#jFdG-76_seIEvf-hbjSsad)" fill-rule="evenodd"
                            d="M33.762,17.429L11.041,4.522 c-1.33-0.761-2.524-0.658-3.232,0.103l19.386,19.369L33.762,17.429z"
                            clip-rule="evenodd" />
                    </svg></a>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-start">
                <a href="#" id="download-ios-app"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                        width="48px" height="48px">
                        <path fill="#0091ea"
                            d="M14.1,42h19.8c4.474,0,8.1-3.627,8.1-8.1V27H6v6.9C6,38.373,9.626,42,14.1,42z" />
                        <rect width="36" height="11" x="6" y="16" fill="#00b0ff" />
                        <path fill="#40c4ff"
                            d="M33.9,6H14.1C9.626,6,6,9.626,6,14.1V16h36v-1.9C42,9.626,38.374,6,33.9,6z" />
                        <path fill="#fff"
                            d="M22.854,18.943l1.738-2.967l-1.598-2.727c-0.418-0.715-1.337-0.954-2.052-0.536 c-0.715,0.418-0.955,1.337-0.536,2.052L22.854,18.943z" />
                        <path fill="#fff"
                            d="M26.786,12.714c-0.716-0.419-1.635-0.179-2.052,0.536L16.09,28h3.477l7.754-13.233 C27.74,14.052,27.5,13.133,26.786,12.714z" />
                        <path fill="#fff"
                            d="M34.521,32.92l-7.611-12.987l-0.763,1.303c-0.444,0.95-0.504,2.024-0.185,3.011l5.972,10.191 c0.279,0.476,0.78,0.741,1.295,0.741c0.257,0,0.519-0.066,0.757-0.206C34.701,34.554,34.94,33.635,34.521,32.92z" />
                        <path fill="#fff"
                            d="M25.473,27.919l-0.171-0.289c-0.148-0.224-0.312-0.434-0.498-0.621H12.3 c-0.829,0-1.5,0.665-1.5,1.484s0.671,1.484,1.5,1.484h13.394C25.888,29.324,25.835,28.595,25.473,27.919z" />
                        <path fill="#fff"
                            d="M16.66,32.961c-0.487-0.556-1.19-0.934-2.03-0.959l-0.004,0c-0.317-0.009-0.628,0.026-0.932,0.087 l-0.487,0.831c-0.419,0.715-0.179,1.634,0.536,2.053c0.238,0.14,0.5,0.206,0.757,0.206c0.515,0,1.017-0.266,1.295-0.741 L16.66,32.961z" />
                        <path fill="#fff"
                            d="M30.196,27.009H35.7c0.829,0,1.5,0.665,1.5,1.484s-0.671,1.484-1.5,1.484h-5.394 C30.112,29.324,30.01,27.196,30.196,27.009z" />
                    </svg></a>
            </div>
           </div>
        </div>
    </div>
</x-template>
