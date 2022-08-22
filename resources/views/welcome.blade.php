<x-app-layout>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <style>
        /*each image is referenced twice in the HTML, but each image only needs to be updated in the CSS*/
        .image1 {
          content: url("{{asset('img/c11.jpg')}}")
        }
      
        .image2 {
          content: url("{{asset('img/c22.jpg')}}")
        }
      
        .image3 {
          content: url("{{asset('img/c33.jpg')}}")
        }
      
        .image4 {
          content: url("{{asset('img/c44.jpg')}}")
        }
      
        .image5 {
          content:  url("{{asset('img/c55.jpg')}}")
        }
          </style>
 
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
<section class="mx-auto max-w-2xl text-center">
     
    <div >
   
         <iframe align="center" src="https://player.vimeo.com/video/728270887?h=f5fad23dad" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>
   
</section>

<section class="mt-24 py-12" style="background: #00536b">
    <h1 class="text-center text-white text-3xl">Formación Cursos y Talleres</h1>
    <p class="text-center text-white">LSM</p>
    
    {{--<div class="flex justify-center mt-4">
    <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Ver mas
    </a>
    </div> --}}
</section>

  
<section class="mx-auto max-w-2xl">
    <h2 class="text-4xl text-center tracking-wide font-extrabold font-serif leading-loose mb-2">LSM</h2>
    <div class="shadow-2xl relative">
      <!-- large image on slides -->
      <div class="mySlides hidden">
        <div class="image1 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image2 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image3 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image4 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image5 w-full object-cover"></div>
      </div>

      <!-- butttons -->
      <a class="absolute left-0 inset-y-0 flex items-center -mt-32 px-4 text-white hover:text-gray-800 cursor-pointer text-3xl font-extrabold" onclick="plusSlides(-1)">❮</a>
      <a class="absolute right-0 inset-y-0 flex items-center -mt-32 px-4 text-white hover:text-gray-800 cursor-pointer text-3xl font-extrabold" onclick="plusSlides(1)">❯</a>

      <!-- image description -->
      <div style="background: #00536b" class="text-center text-white font-light tracking-wider  py-2">
        <p id="caption"></p>
      </div>

      <!-- smaller images under description -->
      <div class="flex">
        <div>
          <img class="image1 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(1)" alt="Juan Hernández Cruz">
        </div>
        <div>
          <img class="image2 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(2)" alt="Juan Hernández Cruz">
        </div>
        <div>
          <img class="image3 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(3)" alt="Juan Hernández Cruz">
        </div>
        <div>
          <img class="image4 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(4)" alt="Juan Hernández Cruz">
        </div>
        <div>
          <img class="image5 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(5)" alt="Juan Hernández Cruz">
        </div>
      </div>
    </div>
  </section>


<section class="mt-24">
    <h1  class="text-center text-3xl text-gray-600">Ultimos Cursos</h1>
    <p class="text-center text-gray-500 text-sm mb-6">Forma parte de la comunidad</p>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        

        @foreach ($courses as $course)
        <!-- se esta utilizando un componente en la carpeta componets-->
        <x-course-card :course="$course" />
        @endforeach
    </div>

</section>

<section class="p-6">
    
    {{--<div class="flex items-center justify-center p-6">
        <iframe width="560 " height="315"  src="{{asset('movie/intro.mp4')}}" frameborder="0" allowfullscreen></iframe>
    </div>
--}}
    <h1 class="text-gray-600 text-center text-3xl mb-6">Conocé más</h1>
   
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

    <article>
        <figure >
            <img  class="rounded-xl h-36 w-full object-cover" src="{{asset('img/cm.jpg')}}" alt="">
        </figure>

        <header class="m-2 text-center">
            <a href="#" class="text-xl text-gray-700">Escuela LSM</a>
        </header>
        <p class="text-sm text-gray-500 text-justify ">Como sabes, se requiere de personas capacitadas en la Lengua de Señas Mexicana para lograr accesibilidad universal para las personas sordas.
        Es por eso que en esta sección tienes disponible todos los cursos y talleres que te ayudarán a formarte profesionalmente desde 0 hasta intérprete profesional de la LSM.</p>
    </article>

    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover"  src="{{asset('img/mn1.jpg')}}" alt="">
        </figure>

        <header class="m-2 text-center">
            <a href="#" class="text-center text-xl text-gray-700 ">Recursos de Apoyo</a>
        </header>
        <p class="text-sm text-gray-500 text-justify ">En este apartado te comparto recursos accesibles para las personas sordas en el ámbito del entretenimiento como son: Canciones, películas e interpretaciones en lengua de señas mexicana.
Además si eres oyente y quieres consultar algunas palabras específicas en LSM puedes ingresar a la sección de diccionario LSM.
</p>
    </article>

    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover"   src="{{asset('img/act.jpg')}}" alt="">
        </figure>
        <header class="m-2 text-center">
            <a href="#" class="text-center text-xl text-gray-700">Actividades</a>
        </header>
        <p class="text-sm text-gray-500 text-justify">Si deseas conocer más de mi y de mis pasatiempos favoritos, puedes visitar esta sección donde te compartiré mis actividades.</p>
    </article>

    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover"  src="{{asset('img/bg.jpg')}}"  alt="">
        </figure>
        <header class="m-2 text-center">
            <a href="#" class="text-center text-xl text-gray-700">Blog</h1>
        </header>
        <p class="text-sm text-gray-500 text-justify ">Hay días que amanezco inspirado y puede que escriba algo para este blog, puedes darte una vuelta de vez en cuando</p>
    </article>
    </div>
</section>

<!-- -->









{{--


<div class="container py-8">
    <h2 class="text-gray-600 text-center text-3xl mb-6">Piezas y Accesorios</h2>
    @foreach ($categoriis as $categorii)
    <section class="mb-6">
      <div class="flex items-center mb-2 ">
        <h1 class="text-lg uppercase font-semibold text-gray-700 ">
            {{$categorii->name}}
        </h1>
        <a href="{{route('categoriis.show', $categorii)}}" class="text-blue-500 ml-2 font-semibold hover:underline hover:text-blue-400">Ver mas</a>
      </div>
        @livewire('category-products', ['categorii' => $categorii])
    </section>
    @endforeach

</div>



--}}









<!-- Seccion de post -->



<section style="background: #00536b" class="mt-24  py-12">
    <h1 class="text-center text-white text-3xl"> Publicaciónes</h1>
   
   

  
<div class="flex justify-center mt-4">
    <a href="{{route('posts.index')}}" class="hover:bg-blue-500 bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Ver mas
    </a>
    </div>

</section>


<div class="container py-8" >

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
        <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2016/05/14/15/10/banner-1391996_960_720.jpg @endif)">
       <div class="w-full h-full px-8 flex flex-col justify-center">
        <div>
            @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}} </a>
            @endforeach
         
        </div>
        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
              <a href="{{route('posts.show', $post)}}">
                 {{$post->name}} 
              </a>
          </h1>
       </div>
        </article>
        @endforeach
    </div>

    <div class="mt-4">
    {{$posts->links()}}
    </div>

</div>


<!-- Seccion   -->
<!-- component -->

<body>
   

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl text-black dark:text-black">Lengua de Señas Mexicana LSM</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">En este taller aprenderás la Lengua de Señas Mexicana por medio de canciones.</p>
                <a href="https://www.juanhernandezcruz.com.mx/EscuelaLSM" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Tomar curso
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="https://www.juanhernandezcruz.com.mx/LSM" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Conocer más
                </a> 
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img  src="{{asset('img/a3.jpg')}}" alt="mockup">
            </div>                
        </div>
    </section>

    <section class="bg-gray-50 dark:bg-gray-900 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Porque la pasión <span class="font-extrabold">te motiva</span> y te enseña</h2>
                <p class="mb-4 font-light"> Hago conciertos para sordos, además de ser el primer intérprete que realiza interpretaciones de películas a la Lengua de Señas Mexicana, esto con el objetivo de crear accesibilidad para los sordos en el ámbito del entretenimiento.</p>
               
                <a href="https://www.juanhernandezcruz.com.mx/conciertos" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 dark:text-blue-500 dark:hover:text-blue-700">
                    Leer más
                    <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
      </section>

      <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">!Inicia Hoy¡</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Preparate en el horario que gustes</p>
                <a href="https://www.juanhernandezcruz.com.mx/EscuelaLSM" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tomar curso</a>
            </div>
        </div>
    </section>

    
   

<!-- fin de sesion  --> 

@push('script')
    

 

<script>
    //JS to switch slides and replace text in bar//
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("description");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" opacity-100", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " opacity-100";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>

<script>
    Livewire.on('glider', function(id){



    new Glider(document.querySelector('.glider-'+id), {
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    dots: '.glider-' + id + '~ .dots',
    arrows: {
        prev: '.glider-'+ id + '~ .glider-prev',
        next: '.glider-'+ id + '~ .glider-next'
    },
    responsive: [
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 2.5,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3.5,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4.5,
                slidesToScroll: 4,
            }
        },
        {
            breakpoint: 1280,
            settings: {
                slidesToShow: 5.5,
                slidesToScroll: 5,
            }
        },
    
    ]
    });


    } );
</script>
@endpush
  
</x-app-layout>