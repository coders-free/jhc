 <x-app-layout>








    <div class="app">
        <div class=" bg-black  ">

            <aside class="text-right   lg:w-60 ">
                <ul class="playlists" id="menuMusic">
                    <li class="playlist"><a href="#" class="play playEstudiar" id="cargarEstudiar">Audio libros</a></li>
                    <li class="playlist"><a href="#" class="play playRock">Meditación</a></li>
                    <li class="playlist"><a href="#" class="play playDeporte">Conferencias</a></li>
                </ul>
            </aside>
        </div>

        <div class="inline-block   w-full">

            <div class="album " id="album">


                <div class="album-img flex justify-center p-6">
                    <img class="" id="imgAlbum" src="assets/img/f-princi.jpg" width="350" height="190">
                </div>


                <div class="album-description ">

                       

                        <div class="album-text">
                            <div class="title">
                                <span>Podcast</span>
                                <h2 id="titlePlaylist">ITSW-Academy</h2>
                            </div>
                            <div class="description">
                                <p id="playDescription">Impulsando competencias</p>
                            </div>
                            <div class="acciones hidden ">

                                <a href="#" class="btn reaccion-inactiva " id="reaccion"><i class="far fa-thumbs-up"></i></a>
                            </div>
                        </div>

                </div>


                <div class="album-list-music">

                    
                    <ul class="list-music " id="lista-music">
                            <hr>
                        <li class="music">
                            <p class="justify-center">Academy of Consciousness</p>
                        </li>


                    </ul>
                </div>
            </div>

        </div>





    </div>
    <div class="reproducir">
        <div class="controles" id="controles">
            <a href="#" class="btn control atras"><i class="fas fa-backward"></i></a>
            <a href="#" class="btn control play-musica"><i class="far fa-play-circle"></i></a>
            <a href="#" class="btn control siguiente"><i class="fas fa-forward"></i></a>
            <a href="#" class="btn control pausa"><i class="far fa-pause-circle"></i></a>
            <div class="volumen">
                <a href="#" class="subir"></a>
                <a href="#" class="bajar"></a>
            </div>


        </div>
    </div>

</x-app-layout>
