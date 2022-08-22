<x-app-layout>
<!-- component -->
<!-- Designer: Eleana Gkogka -->
<!-- Web Developer: Dilshod Fayzullayev[DreamCoder] -->
<style>
    body {
        font-family: "Poppins",sans-serif;
    }

    .bg-my-color {
        background-color: #00536b;
    }

    .text-my-color {
        color: #0E163B;
    }
</style>


<div class="h-screen w-full flex justify-center items-center rounded">
        <div class="grid   shadow-2xl bg-white xl:w-4/5 md:w-full md:h-4/5 h-full w-96 text-center text-sm rounded-sm">
           
            <div class="bg-my-color text-white w-full h-full flex justify-center items-center px-3 text-center">
                <div class="h-full px-8 text-gray-100 lg:text-lg">
                    <br>
                    <img class="h-24   w-24 mx-auto"
                    src="{{asset('img/home/logo2.png')}}"
                        alt="">
                    <div class="font-sans md:mb-3 mb-2">
                        <h2 class="uppercase font-medium">Juan Hernández Cruz</h2>
                        <p>Interprete LSM</p>
                    </div>
                    <p class="lg:text-md text-sm">
                       Forma parte de nuestro Equipo. 
                    </p>
                    <p class="mt-5 md:mb-10 mb-5 lg:text-md text-justify text-sm">
                        Es una excelente herramienta para ti que quieres aprender la LSM o ya aprendiste, pero deseas practicar, reforzar y perfeccionar tu aprendizaje.
                    </p>
                    <a class="transition-all duration-150 hover:bg-green-500 bg-green-400 md:px-12  sm:px-10 sm:py-3 px-8 py-2 text-center rounded-full md:text-xl text-md text-my-color font-medium"
                        href="#">
                        Mensaje
                    </a>
                    <br>
                    <br>
                    <br>
                    <div class="font-sans md:mb-3 mb-2">
                    
                        <h2 class=" font-medium text-white">Siguénos en redes sociales </h2>
                        <p class="text-white">@juanhernandezcruz</p>
    
    
                        
                    </div>
                    <br>
                    <br>
                     <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="https://www.facebook.com/JuanHernandezCruzILS" class="text-white hover:text-red-500 dark:hover:text-red">
                   <button class="bg-blue-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                        <i class="fab fa-facebook"></i>
                    </button>
                </a>
                <a href="https://api.whatsapp.com/send?phone=525574344337" class="text-white hover:text-red-500 dark:hover:text-red">
                     <button class="bg-green-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                    <i class="fab fa-whatsapp"></i>
                    </button>
                </a>
                <a href="https://www.instagram.com/juanhernandezcruzils/" class="text-white hover:text-red-500 dark:hover:text-red">
                      <button class="bg-red-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                            <i class="fab fa-instagram"></i>
                    </button>
                </a>
               
                <a href="https://twitter.com/Juan_Hdz_Cruz" class="text-white hover:text-red-500 dark:hover:text-red">
                  
                    <button class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                        <i class="fab fa-twitter"></i>
                    </button>
                   
                </a>
                  <a href="https://www.youtube.com/channel/UCjIsmn_FRHKJsqU6KNDtjRQ" class="text-white hover:text-red-500 dark:hover:text-red">
                    <button class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                    <i class="fab fa-youtube"></i>
                    </button>
                

                </a>
                  
                    <a href="https://www.tiktok.com/@juan_hernandez_cruz" class="text-white hover:text-red-500 dark:hover:text-red">
                    <button class="bg-black text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1" type="button">
                    <i class="fab fa-tiktok"></i>
                    </button>
                

                </a>
                 
              
                </div>
                   <br>
            </div>
        </div>
    </div>
{{--
<!-- component -->
<head>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
      <script>
        var cont=0;
    function loopSlider(){
      var xx= setInterval(function(){
            switch(cont)
            {
            case 0:{
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-gray-800");
                $("#sButton2").addClass("bg-gray-800");
            cont=1;
            
            break;
            }
            case 1:
            {
            
                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-gray-800");
                $("#sButton1").addClass("bg-gray-800");
               
            cont=0;
            
            break;
            }
            
            
            }},8000);
    
    }
    
    function reinitLoop(time){
    clearInterval(xx);
    setTimeout(loopSlider(),time);
    }
    
    
    
    function sliderButton1(){
    
        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-gray-800");
        $("#sButton1").addClass("bg-gray-800");
        reinitLoop(4000);
        cont=0
        
        }
        
        function sliderButton2(){
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-gray-800");
        $("#sButton2").addClass("bg-gray-800");
        reinitLoop(4000);
        cont=1
        
        }
    
        $(window).ready(function(){
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-gray-800");
            
    
            loopSlider();
         
            
        
        
        
        
        });
    
      
      </script>
      

    <!-- component -->
    <style>
        /* RED BORDER ON INVALID INPUT */
        .check input:invalid {
            border-color: red;
        }
      
        /* FLOATING LABEL */
        .label-floating input:not(:placeholder-shown),
        .label-floating textarea:not(:placeholder-shown) {
            padding-top: 1.4rem;
        }
        .label-floating input:not(:placeholder-shown) ~ label,
        .label-floating textarea:not(:placeholder-shown) ~ label {
            font-size: 0.8rem;
            transition: all 0.2s ease-in-out;
            color: #1f9d55;
            opacity: 1;
        }
      
      </style>
              
    </head>
    <!-- component -->

    <!-- Nuevos datos  -->
    style="background: #00536b" 


<section>
    <div align="center" class="flex justify-center  mt-4">
        <a href="https://api.whatsapp.com/send?phone=529612206477">
        <img style="margin:5px" src="https://teantojamos.com/wp-content/uploads/2021/04/wp.png" width="60" height="60" alt="WhatsApp">
        </a>
        
        
        <a href="https://www.facebook.com/intelisoftw">
        <img style="margin:5px" src="https://teantojamos.com/wp-content/uploads/2021/04/fa.png" width="60" height="60" alt="Facebook">
        </a>
        
        <a href="https://www.instagram.com/intelisoftw/">
        <img style="margin:5px" src="https://teantojamos.com/wp-content/uploads/2021/04/ins.png" width="60" height="60" alt="Instagram"></a>
        
        <a href="https://www.youtube.com/channel/UClWwySEQaL_8XCJnrmk0A9A">
        <img style="margin:5px" src="https://teantojamos.com/wp-content/uploads/2021/04/yt.png" width="60" height="60" alt="YouTube"></a>
        
        <a href="https://twitter.com/intelisoftw">
        <img style="margin:5px" src="https://teantojamos.com/wp-content/uploads/2021/04/tw.png" width="60" height="60" alt="Twitter"></a>
        
        
        <a href="https://www.linkedin.com/in/intelisoftw/">
        <img style="margin:5px" src="https://intelisoftw.com/wp-content/uploads/2021/04/linkedin.png" width="50" height="50" alt="Linkedin">
        </a>
        </div>


    </section>

    <section class="mt-4">      
        <div class="sliderAx h-auto">
            <div id="slider-1" class="container mx-auto">
                <div class=" bg-center lg:bg-cover   h-auto text-white py-20 px-10 object-fill" style="background-image: url({{asset('img/bg3.jpg')}})">
                 <div class="md:w-1/2 ">
                <p class="font-bold text-sm uppercase">Enseña tu talento</p>
                <p class="text-3xl font-bold">Generando nuevas competencias </p>
                <p class="text-2xl mb-10 leading-none">Llega a tus objetivos </p>
              
                </div>  
            </div> <!-- container -->
            <br>
            </div>
            <div id="slider-2" class="container mx-auto">
                <div class="bg-cover lg:bg-cover bg-top  h-auto text-white py-20 px-10 object-fill" style="background-image: url({{asset('img/bg3.jpg')}})">
            
                 <p class="font-bold text-sm uppercase">Ganancias desde casa</p>
                <p class="text-3xl font-bold">Monetiza tus conocimientos</p>
                <p class="text-2xl mb-10 leading-none">Educacion y bienestar</p>
               
                
                </div> <!-- container -->
            <br>
            </div>
            </div>
        <div  class="flex justify-between w-12 mx-auto pb-2">
                <button id="sButton1" onclick="sliderButton1()" class="bg-blue-700 rounded-full w-4 pb-2 " ></button>
            <button id="sButton2" onclick="sliderButton2() " class="bg-blue-700 rounded-full w-4 p-2"></button>
        </div>
    
    </section>




    <section class="bg-gray-900 sm:py-32 py-16">
        <h2 class="text-white text-center font-bold text-5xl mb-8"> Fundadores </h2>
        <div class="container mx-auto sm:flex-row flex-col flex ">
         

            <div class="sm:w-1/3 w-full sm:mb-0 mb-16">
                <img src="{{asset('img/11.jpg')}}" class=" object-cover rounded-full w-24 h-24 mx-auto mb-2">
                <p class="font-bold  text-gray-400 text-center text-xl">Manuel Cervantes - Director </p>
                <p class="italic text-gray-500  text-justify p-6">Licenciado en sistemas Computacionales con Diplomado en Marketing Digital.
                    Administrador de servidores GNU-Linux, Formación en Supercomputo y simulación. Desarrollador de software, Diseño de sistemas y servicios basados en las TIC e IoT.</p>
                
            </div>
            
            <div class="sm:w-1/3 w-full sm:mb-0 mb-16">
                <img src="{{asset('img/22.jpeg')}}" class=" object-cover rounded-full w-24 h-24 mx-auto mb-2">
                <p class="font-bold  text-gray-400 text-center text-xl">Breyda Cervantes - Community Manager</p>
                <p class="italic text-gray-500 text-justify   p-6">Creadora de contenido, administración de redes sociales y paginas, auxiliar en actividades marketing digital.</p>
                
            </div>

            <div class="sm:w-1/3 w-full sm:mb-0 mb-16">
                
                <img src="{{asset('img/33.png')}}" class=" object-cover rounded-full w-24 h-24 mx-auto mb-2">
                <p class="font-bold  text-gray-400 text-center text-xl">Ruth Cerezo - Planeación</p>
                <p class="italic text-gray-500 text-justify p-6">Maestra en Psicobiología por la UNAM. Creadora de la Meditación Neurosintérgica y del enfoque terapéutico neurosintérgico. Experta en modelos educativos y desarrollo pedagógico.</p>
                
            </div> 

          
       
        </div>
    </section>


      





<!-- fines de datos -->



  <form id="contact-me" action="{{route('contacto.store')}}" method="POST" class="w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700 ">
  
  @csrf
      <h2 class="w-full my-2 text-3xl text-center font-bold leading-tight ">Formulario de contacto</h2>
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
          <button class="w-full shadow bg-teal-400 bg-gray-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded"
              type="submit">
              Enviar
          </button>
  
      </div>
  </form>
  
  @if (session('info'))
      <script>
          alert("{{session('info')}}");
          </script>
  @endif
  <script>
  
  
  //RED BORDER ON INVALID INPUT
  document.getElementById('contact-me').addEventListener("invalid", function (event) {
      this.classList.add('check');
  }, true);
  
  
  
  
      // TEXT AREA AUTO EXPAND
  var textarea = document.querySelector('textarea.autoexpand');
  
  textarea.addEventListener('keydown', autosize);
  
  function autosize(){
    var el = this;
    setTimeout(function(){
      el.style.cssText = 'height:auto; padding: 1.4rem .2rem .5rem';
      
      el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
  }
  
  
  
  </script>
 
  
    </div>
 
  --}}
</x-app-layout>