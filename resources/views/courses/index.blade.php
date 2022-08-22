    <x-app-layout>

        <section  class="object-cover bg-cover" style="background-image: url({{asset('img/bh2.png')}})">

       
            <!-- component -->
            <section class="bg-white dark:bg-gray-900">
                    <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
                        <div class="flex justify-center xl:w-1/2">
                            <img class="h-80 w-80 sm:w-[28rem] sm:h-[28rem] flex-shrink-0 object-cover rounded-full"  src="{{asset('img/jhc.jpg')}}" alt="">
                        </div>
                        
                        <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0">
                            <h2 class="text-3xl font-bold tracking-tight text-gray-800 xl:text-4xl dark:text-white">
                                Juan Hernández Cruz
                            </h2>
            
                            <p class="block max-w-2xl mt-4 text-xl text-gray-500 dark:text-gray-300">Artista, intérprete traductor y profesor de la Lengua de Señas Mexicana (LSM) </p>
                            
                            <div class="mt-6 sm:-mx-2">
                                <div class="inline-flex w-full overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2">
                                    <a href="#" class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-gradient-to-r from-gray-700 to-gray-900 hover:from-gray-600 hover:to-gray-600 sm:w-auto">
                                        
                                        <span class="mx-2">
                                            Cursos
                                        </span>
                                    </a>
                                </div>
            
                                <div class="inline-flex w-full mt-4 overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2 sm:mt-0">
                                    <a href="#" class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white transition-colors duration-150 transform sm:w-auto bg-gradient-to-r from-blue-700 to-blue-900 hover:from-blue-600 hover:to-blue-600">
                                        
                                        <span class="mx-2">
                                            Canciones
                                        </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
            
            </section>
    
        @livewire('courses-index') 
   
    </x-app-layout>
    



