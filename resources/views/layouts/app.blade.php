<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta name="facebook-domain-verification" content="u9hod5mfq37lqss0at4t0pws6tnu1k" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ 'assets/css/estilos.css' }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Glider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FlexSlider -->
    <link rel="stylesheet" href="{{ asset('vendor/FlexSlider/flexslider.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ 'assets/js/app.js' }}" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>


    <!-- Glider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
        integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- FlexSlider -->
    <script src="{{ asset('vendor/FlexSlider/jquery.flexslider-min.js') }}"></script>

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen text-white">

        @livewire('navigation')


        <!-- Page Content -->
        <main class="text-gray-600">
            {{ $slot }}
        </main>
    </div>

    <footer style="background: #00536b" class=" text-white p-4 sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl  text-white">
            <div class="md:flex md:justify-between  ">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
    
                        <img class="block lg:hidden h-12 w-auto" src="{{ asset('img/home/logo2.png') }}" alt="ITSW">
                        <img class="hidden lg:block h-12 w-auto" src="{{ asset('img/home/logo2.png') }}" alt="ITSW">
    
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"> JHC</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold  uppercase dark:text-white">Formación</h2>
                        <ul>
                            <li class="mb-4">
                                <a href="https://juanhernandezcruz.com.mx/EscuelaLSM" class="hover:underline">Cursos</a>
                            </li>
                            <li>
                                <a href="https://juanhernandezcruz.com.mx/EscuelaLSM" class="hover:underline">Talleres</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase dark:text-white">Recursos</h2>
                        <ul>
                            <li class="mb-4">
                                <a href="https://www.juanhernandezcruz.com.mx/cancioneslsm"
                                    class="hover:underline ">Canciones</a>
                            </li>
                            <li>
                                <a href="https://www.juanhernandezcruz.com.mx/peliculaslsm"
                                    class="hover:underline">Peliculas</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold  uppercase dark:text-white">Actividades</h2>
                        <ul>
                            <li class="mb-4">
                                <a href="https://www.juanhernandezcruz.com.mx/conciertos"
                                    class="hover:underline">Conciertos</a>
                            </li>
                            <li>
                                <a href="https://www.juanhernandezcruz.com.mx/viajes" class="hover:underline">Viajes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm  sm:text-center dark:text-gray-400">© 2022 <a href="https://intelisoftw.com/"
                        class="hover:underline">Juan Hernandez Cruz</a>. Desarrollado por Intelisoftw.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="https://www.facebook.com/JuanHernandezCruzILS"
                        class="text-white hover:text-red-500 dark:hover:text-red">
                        <button
                            class="bg-blue-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button">
                            <i class="fab fa-facebook"></i>
                        </button>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=525574344337"
                        class="text-white hover:text-red-500 dark:hover:text-red">
                        <button
                            class="bg-green-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button">
                            <i class="fab fa-whatsapp"></i>
                        </button>
                    </a>
                    <a href="https://www.instagram.com/juanhernandezcruzils/"
                        class="text-white hover:text-red-500 dark:hover:text-red">
                        <button class="bg-red-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button">
                            <i class="fab fa-instagram"></i>
                        </button>
                    </a>
    
                    <a href="https://twitter.com/Juan_Hdz_Cruz" class="text-white hover:text-red-500 dark:hover:text-red">
    
                        <button
                            class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button">
                            <i class="fab fa-twitter"></i>
                        </button>
    
                    </a>
                    <a href="https://www.youtube.com/channel/UCjIsmn_FRHKJsqU6KNDtjRQ"
                        class="text-white hover:text-red-500 dark:hover:text-red">
                        <button class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button">
                            <i class="fab fa-youtube"></i>
                        </button>
    
    
                    </a>
    
    
                    <a href="https://www.tiktok.com/@juan_hernandez_cruz"
                        class="text-white hover:text-red-500 dark:hover:text-red">
                        <button class="bg-black text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                            type="button">
                            <i class="fab fa-tiktok"></i>
                        </button>
    
    
                    </a>
    
    
    
                </div>
            </div>
        </div>
    </footer>

    @stack('modals')

    @livewireScripts

    @stack('js')

    <script>
        function dropdown() {
            return {
                open: false,
                show() {
                    if (this.open) {
                        //se cierra el menu
                        this.open = false;
                        document.getElementsByTagName('html')[0].style.overflow = 'auto'
                    } else {
                        //se abre el menu
                        this.open = true;
                        document.getElementsByTagName('html')[0].style.overflow = 'hidden'
                    }
                },
                close() {
                    this.open = false;
                    document.getElementsByTagName('html')[0].style.overflow = 'auto'
                }
            }
        }
    </script>
    @stack('script')
</body>

</html>
