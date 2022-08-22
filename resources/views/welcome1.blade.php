<x-app-layout>


<section  class="bg-cover" style="background-image: url({{asset('img/home/1.jpg')}})">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
    <div class="w-full md:w-3/4 lg:w-1/2">

    <h1 class="text-white font-bold text-5xl"> Información</h1>
    <p class="text-white text-lg mt-2 mb-4"> Desarollo de la Información </p>

    <!-- component -->
      
    @livewire('search')

    </div>
    </div>
</section>

<section class="mt-24">
    
    <h1 class="text-gray-600 text-center text-3xl mb-6">contenido</h1>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/1.jpg')}}" alt="">
        </figure>

        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700"> Herramientas digitales para impartir clases en linea</h1>
        </header>
        <p class="text-sm text-gray-500 ">Herramientas digitales para diseñar e impartir clases en línea</p>
    </article>

    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover"  src="{{asset('img/home/2.jpg')}}" alt="">
        </figure>

        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700">Herramientas digitales para la administración de negocios</h1>
        </header>
        <p class="text-sm text-gray-500 ">Conoce herramientas para el control y segumiento de procesos y actividades </p>
    </article>

    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover"  src="{{asset('img/home/7.jpg')}}" alt="">
        </figure>
        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700">Soporte e Infraestructura</h1>
        </header>
        <p class="text-sm text-gray-500 ">Soporte técnico e infraestructura de equipos de computo</p>
    </article>

    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover"  src="{{asset('img/home/5.jpg')}}" alt="">
        </figure>
        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700">Administración de servidores</h1>
        </header>
        <p class="text-sm text-gray-500 ">Monta y administra servidores WEB, DNS, Base de datos </p>
    </article>
    </div>
</section>

<section class="mt-24 bg-gray-700 py-12">
    <h1 class="text-center text-white text-3xl"> Cursos y Capacitación</h1>
    <p class="text-center text-white</p>
    
    <div class="flex justify-center mt-4">
    <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        cursos y capacitación 
    </a>
    </div>
</section>



<section class="mt-24">
<h1 class="text-center text-3xl text-gray-600">Ultimos cursos</h1>
<p class="text-center text-gray-500 text-sm mb-6">Concoce mas</p>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
    

    @foreach ($courses as $course)
    <!-- se esta utilizando un componente en la carpeta componets-->
    <x-course-card :course="$course" />
    @endforeach
</div>

</section>





<!-- Seccion de post -->



<section class="mt-24 bg-gray-700 py-12">
    <h1 class="text-center text-white text-3xl"> Publicaciónes</h1>
    <p class="text-center text-white">Categroias y Etiquetas</p>
    
    <div class="flex justify-center mt-4">
    <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        conocer mas
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





 



</x-app-layout>

