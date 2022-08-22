<x-app-layout>
    
 




<!-- component -->



<!-- component -->
<div class="flex justify-center items-center">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
      <div role="main" class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Lengua de Señas Mexicanas</h1>
        <p class="text-base leading-normal text-center text-gray-600 dark:text-white mt-4 lg:w-1/2 md:w-10/12 w-11/12">Todos lo hacemos posible</p>
      </div>
      <div class="lg:flex items-stretch md:mt-12 mt-8">
        <div class="lg:w-1/2">
          <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
            <div class="sm:w-1/2 relative">
              <div>
                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">JHC</p>
                <div class="absolute bottom-0 left-0 p-6">
                  <h2 class="text-xl font-semibold 5 text-white">Canciones LSM</h2>
                  <p class="text-base leading-4 text-white mt-2">Canciones Interpretadas</p>
                  <a href="https://www.juanhernandezcruz.com.mx/cancioneslsm" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Leer Más</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
              </div>
              <img src="{{asset('img/m.jpg')}}" class="w-full" alt="chair" />
            </div>
            <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
              <div>
                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">JHC</p>
                <div class="absolute bottom-0 left-0 p-6">
                  <h2 class="text-xl font-semibold 5 text-white">Peliculas LSM</h2>
                  <p class="text-base leading-4 text-white mt-2">Peliculas Interpretadas</p>
                  <a href="https://www.juanhernandezcruz.com.mx/peliculaslsm" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Leer Más</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
              </div>
              <img src="{{asset('img/p.png')}}" class="w-full" alt="wall design" />
            </div>
          </div>
          <div class="relative">
            <div>
              <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">JHC</p>
              <div class="absolute bottom-0 left-0 md:p-10 p-6">
                <h2 class="text-xl font-semibold 5 text-white">Diccionario LSM</h2>
                <p class="text-base leading-4 text-white mt-2">Diccionario</p>
                <a href="https://www.juanhernandezcruz.com.mx/diccionariolsm" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Leer Más</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="{{asset('img/tc.jpg')}}" alt="sitting place" class="w-full mt-8 md:mt-6 hidden sm:block" />
            <img  href="https://juanhernandezcruz.com.mx/EscuelaLSM" class="w-full mt-4 sm:hidden" src="{{asset('img/tc.jpg')}}" alt="sitting place" />
          </div>
        </div>
        <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
          <div class="relative">
            <div>
              <p class="md:p-10 p-6 text-xs font-medium leading-3 text-black absolute top-0 right-0">JHC</p>
              <div class="absolute bottom-0 left-0 md:p-10 p-6">
                <h2 href="https://juanhernandezcruz.com.mx/EscuelaLSM" class="text-xl font-semibold 5 text-white">Escuela LSM</h2>
                <p class="text-base leading-4 text-white mt-2">Cursos y talleres</p>
                <a  href="https://juanhernandezcruz.com.mx/EscuelaLSM" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Leer Más</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img  src="{{asset('img/c.jpg')}}" alt="sitting place" class="w-full sm:block hidden" />
            <img class="w-full sm:hidden"  src="{{asset('img/c.jpg')}}" alt="sitting place" />
          </div>
          <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
            <div class="relative w-full">
              <div>
                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">JHC</p>
                <div class="absolute bottom-0 left-0 p-6">
                  <h2 class="text-xl font-semibold 5 text-white">Viajes</h2>
                  <p class="text-base leading-4 text-white mt-2">¿En donde estamos hoy?</p>
                  <a href="https://www.juanhernandezcruz.com.mx/viajes" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Leer Más</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
              </div>
              <img src="{{asset('img/v.jpg')}}" class="w-full" alt="chair" />
            </div>
            <div class="relative w-full sm:mt-0 mt-4">
              <div>
                <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">JHC</p>
                <div class="absolute bottom-0 left-0 p-6">
                  <h2 class="text-xl font-semibold 5 text-white">Conciertos LSM</h2>
                  <p class="text-base leading-4 text-white mt-2">Conciertos Interpretados</p>
                  <a href="https://www.juanhernandezcruz.com.mx/conciertos" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                    <p class="pr-2 text-sm font-medium leading-none">Leer Más</p>
                    <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>
              </div>
              <img src="{{asset('img/ccc.jpg')}}" class="w-full" alt="wall design" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    

</x-app-layout>