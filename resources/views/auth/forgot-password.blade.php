<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img class="h-24" src="{{asset('img/home/logo2.png')}}" alt="">
        </x-slot>

        <div class="mb-2 text-sm text-gray-600 text-justify">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente envianos tu  correo electronico y enviaremos a su cuenta de correo una contraseña nueva') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-2" />

        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div style="background: #00536b"  class="px-8 py-12  rounded-md md:px-10 md:flex md:items-center md:justify-between">
              
    
                <a class="block px-8 py-2 mr-2 mt-4 text-lg font-medium text-center text-white transition-colors duration-300 transform bg-green-600 rounded md:mt-0 hover:bg-green-400"
                    href="https://api.whatsapp.com/send?phone=525574344337">WhatsApp</a>

                    <a class="block px-8 py-2 mt-6 text-lg font-medium text-center text-white transition-colors duration-300 transform bg-blue-700 rounded md:mt-0 hover:bg-blue-500"
                    href="tel:5574344337">Llamar</a>
            </div>
        </div>

    </x-jet-authentication-card>
</x-guest-layout>