<x-app-layout>
   


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







    
<section style="background: #00536b"  class="mt-2  py-12">
    <h1 class="text-center text-white text-3xl"> Blog</h1>
    <p class="text-center text-white">Conoce mas de LSM</p>
<p class="text-center text-white"> La practica puede llevarte a otro nivel</p>
   
</section>


<div class="container py-8" >

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
        <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-3 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2016/05/14/15/10/banner-1391996_960_720.jpg @endif)">
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