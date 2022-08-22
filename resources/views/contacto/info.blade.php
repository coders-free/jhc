<x-app-layout>
    @if (session('info'))
    <div class="alert alert-success text-green-700 text-center"> 
       <strong >{{session('info')}}</strong> 
         </div>
@endif


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
                   
                    <p class="block max-w-2xl mt-4  text-sm text-gray-500 dark:text-gray-300">  Nací el 13 de mayo de 1985 en el Estado de México.</p>
                  
                    <div class="mt-6 sm:-mx-2">
                         <div class="inline-flex w-full overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2">
                        <a href="https://www.juanhernandezcruz.com.mx/EscuelaLSM" class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-gradient-to-r from-gray-700 to-gray-900 hover:from-gray-600 hover:to-gray-600 sm:w-auto">
                        
                            <span class="mx-2">
                                Escuela LSM
                            </span>
                        </a>
                    </div>

                    <div class="inline-flex w-full mt-4 overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2 sm:mt-0">
                        <a href="https://www.juanhernandezcruz.com.mx/LSM" class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white transition-colors duration-150 transform sm:w-auto bg-gradient-to-r from-blue-700 to-blue-900 hover:from-blue-600 hover:to-blue-600">
                            
                            <span class="mx-2">
                                Lengua de Señas Mexicana
                            </span> 
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    
    
    </section>




    <div class="container px-6 py-10 mx-auto md:py-16">
        <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
            <div class="w-full md:w-1/2">
                <div class="max-w-lg">
                    <h1 class="text-2xl text-center font-medium tracking-wide text-gray-800 md:text-4xl">
                       Mi Historia
                    </h1>
                    <p class="mt-2  text-justify  text-gray-600">
                        Desde los 9 años soñaba con aprender a comunicarse con personas sordas, pero fue hasta los 14 años que tuve mi primer contacto directo con personas sordas, desde ese momento me apasione por este idioma maravilloso.
                    </p>
                    <p class="mt-2 text-justify  text-gray-600">
                        Mi trayectoria como intérprete inició en el 2003 interpretando en grandes eventos en el Auditorio Nacional, Teatro Metropolitan, Arena Ciudad de México. En televisión he interpretado para TV Azteca en los programas: 
                </p>
                    <div class="grid gap-6 mt-8 sm:grid-cols-2">
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Con sello de Mujer</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Venga la alegría</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>A quien corresponda</span>
                        </div>
                        <div class="flex items-center space-x-6 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Noticieros Proyecto 40</span>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="flex items-center    justify-center  w-full md:w-1/2">
                <img src="{{asset('img/jhc1.JPG')}}"
                    alt="itsw" class="w-full h-full max-w-2xl rounded" />
            </div>
        </div>
    </div>
   









    <div class="px-12 mx-auto max-w-7xl">
        <div class="w-full mx-auto  md:w-11/12 xl:w-9/12 text-center">
           
   {{--
            <div class="container px-6 py-10 mx-auto bg-gray-200">
                <h3 class="text-gray-800">Coméntanos sobre tu proyecto</h3>
                    {!! Form::open(['route'=>'proyecto.store']) !!}
                    <div class="grid mt-6  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
                            <div class="form-group p-2">
                                {!! Form::text('name', null, ['class' => 'form-control w-full', 'placeholder' => 'Proyecto']) !!}  
                                @error('name')
                                    <span class="text-red-700">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group p-2">
                                {!! Form::text('folio', null, ['class' => 'form-control w-full', 'placeholder' => 'Nombre']) !!}
                                @error('folio')
                                    <span class="text-red-700">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group p-2">
                                {!! Form::text('contacto', null, ['class' => 'form-control w-full', 'placeholder' => 'Contacto']) !!}
                                @error('contacto')
                                <span class=" text-red-700">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="form-group p-2 lg:col-span-3">
                                {!! Form::textarea('mensaje', null, ['class' => 'form-control w-full', 'placeholder' => 'Escribe tu mensaje']) !!}
                                @error('mensaje')
                                <span class=" text-red-700">{{$message}}</span>
                            @enderror
                            </div>
                        
                                {!! Form::submit('Enviar', ['class'=>'btn btn-primary w-full']) !!}
                             
                        
                    </div>
                    {!! Form::close() !!}

             
            </div>

        --}}
        </div>



<!-- component -->


<!-- component -->
    <div class="block">

        <div x-data="{ open : false }">
            <div class="bg-white shadow">
                <div class="container mx-auto px-4 py-4">
                    <div class="flex justify-between">
                        
                        <div class="">
                            <button type="button" @click="open = !open" class="flex items-center text-gray-700 px-3 py-1 border font-medium rounded"> 
                                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" class="w-5 h-5 mr-1">
                                    <g class="">
                                        <path d="M0 0h24v24H0z" fill="none" class=""></path>
                                        <path d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z" class=""></path>
                                    </g>
                                </svg>
                            Contacto
                            </button>

                
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
                <div class="flex flex-col mx-4 px-8 py-6 bg-white rounded-b-md shadow"
                    x-show="open" x-on:click.away="open=false"
                    x-transition:enter="transition ease-out origin-top duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in origin-top duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90"
                    >
                
                  <div class="items-center justify-center">
                    <button class="btn-primary  w-80" href="tel:574344337"><i class="fas fa-phone-alt"></i> Llamar</button>
                    <br>
                    <br>
                      <button class="btn-primary  w-80" href="https://api.whatsapp.com/send?phone=52574344337"><i class="fab fa-whatsapp"></i> WhatsApp</button>
                 
                  </div>
                  </div>
            </div>
      

<!-- -->

    <div class="container px-6 py-10 mx-auto md:py-16">
        <h1 class="text-2xl text-center font-medium tracking-wide text-gray-800 md:text-4xl">
            Todo es un cambio 
         </h1> 
         
        <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
            <div class="w-full md:w-1/2">
          
                 <p class="mt-5 leading-7 text-gray-600 text-justify">   
                    Intérprete particular del director General del DIF CDMX e Intérprete auxiliar del Jefe de Gobierno de la CDMX en la administración del Doc. Miguel Ángel Mancera Espinoza.
               </p>
               <p class="mt-5 leading-7 text-gray-600 text-justify">
                   
                   En el 2004 comencé como profesor dando clases de Lengua de Señas Mexicana y formación de intérpretes. A lo largo de mi carrera he tenido el honor de ver a muchos de sus alumnos desarrollarse en dicha profesión.
             </p>

              <p class="mt-5 leading-7 text-gray-600 text-justify">
               Como artista, desde niño he sido amante de la música y de los cantantes de todos los géneros musicales, es por eso que al iniciar a aprender la Lengua de Señas iba adaptando las canciones a la Lengua de Señas y fue que me llegue a apasionar por las canciones interpretadas en Lengua de Señas Mexicana. Ha tenido el privilegio de fundar el grupo artístico “Canto al silencio” y la compañía artística “Tu música en mi Silencio” donde he realizado conciertos para personas sordas en festivales, eventos de gobierno y espacios culturales de la CDMX e interior de la república.
           </p>
            </div>
            <div class="w-full md:w-1/2">
                <div class="max-w-md mx-auto"> 
                <p class="mt-5 leading-7 text-gray-600 text-justify">
                    Con esta novedosa propuesta de accesibilidad musical para personas sordas, me han entrevistado para TV Azteca en Noticieros TV Azteca, Venga la Alegría, Yo amo mi dinero, Al extremo, Mi ciudad, imagen TV.


                </p>
                <p class="mt-5 leading-7 text-gray-600 text-justify">
                    Periódicos: El Universal, Publimetro, Animal Político.
  
                </p>
                <p class="mt-5 leading-7 text-gray-600 text-justify">
                    Entrevistas de radio en: La hora nacional, Código DF, Aquí entre nos: desde otra perspectiva, Radio Red, la 12.60am, MVS Radio.
 
                </p>
                <p class="mt-5 leading-7 text-gray-600 text-justify">
                    He interpretado conciertos para Alex Sintek, Edith Marquez, Elefante, Oscar & Leo.
Su sueño es que la Lengua de Señas Mexicanas aunque ya es reconocida en nuestro país como un idioma, sea accesible para las personas sordas en todos los ámbitos: sociales, culturales, artísticos e informativos.
 
                </p>
                </div>
            </div>
        </div>
    </div>
   <!--Contacto  -->

{{--
   <form id="contact-me" action="{{route('contacto.store')}}" method="POST" class="w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 ">
  
    @csrf
        <h2 class="w-full my-2 text-3xl text-center font-bold leading-tight ">Escribenós</h2>
        <!-- name field -->
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                id="name" name="name" type="text" placeholder="Nombre"required>
                <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                  Nombre
                </label>
            </div>
        </div>
  
         <!-- telefono field -->
         <div class="flex flex-wrap mb-6">
          <div class="relative w-full appearance-none label-floating">
              <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
              id="name" name="telefono" type="text" placeholder="Telefono"required>
              <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                  Telefono
              </label>
          </div>
      </div>
            <!-- email field -->
            <div class="flex flex-wrap mb-6">
              <div class="relative w-full appearance-none label-floating">
                  <input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                  id="name" name="correo" type="text" placeholder="Correo"required>
                  <label for="name" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">
                      Correo
                  </label>
              </div>
          </div>
        <!-- Message field -->
        <div class="flex flex-wrap mb-6">
            <div class="relative w-full appearance-none label-floating">
                <textarea class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
                    id="message" name="mensaje" type="text" placeholder="Mensaje"></textarea>
                    <label for="message" class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text">Mensaje
                </label>
            </div>
        </div>
    
        <div class="">
            <button             class="w-full shadow bg-teal-400 bg-gray-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded"
                type="submit">
                Enviar
            </button>
    
        </div>
    </form>
    
 
    
--}}






</x-app-layout>