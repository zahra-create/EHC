<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>EHC</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ url('assets/imgs/logo/favicon.webp')}}">


  <!-- All CSS files -->

  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/icomon.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.css') }}">
 <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-financial.css') }}"> 
    <link rel="stylesheet" href="{{ url('assets/css/detail-podcast.css') }}">


</head>


<body class="font-heading-beatricetrial-regular">

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text="E" class="characters">E</span>
          <span data-text="H" class="characters">H</span>
          <span data-text="C" class="characters">C</span>
        </div>
      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>

  <!-- Scroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>


  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-robot"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="switcher__items">

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Language Support</p>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Layout</p>
        </div>
        <div class="switcher__btn layout-type wc-col-2">
          <button class="active" data-mode="full-width">Full Width</button>
          <button data-mode="box-layout">Box Layout</button>
        </div>
      </div>
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <p class="switcher__title">Cursor</p>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->

  <!-- offcanvas start  -->
  @include('partials.menu-bar')
  <!-- offcanvas end  -->

  <!-- search modal start -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <form action="#" class="form-search">
            <input type="text" placeholder="Search">
			<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>   <!--Recherche-icon-->
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- search modal end -->

  @include('partials.header')

  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <div class="body-wrapper">

        <!-- overlay switcher close  -->
        <div class="overlay-switcher-close"></div>



        <main>

          <!-- blog area start  -->
          <section class="blog-area section-spacing pin__area">
            <div class="container" style="margin-top:50px;">
              <div class="blog-area-inner">
			   <div class="btn-wrapper has_fade_anim pin__element" data-fade-from="left" >

       <!--<div class="player" style="height:300px; width:200;">-->
       <div class="wrapper" style=" height:450px; margin:auto; margin-bottom:50px; margin-top:50px; background-color:#00515114; width:380px;">  <!--style="width:250; height:400px; "-->
           <div class="details">
               <div class="now-playing">PLAYING x OF y</div>
               <!--<div class="track-art>--> <img class="track-art" src="{{ url('assets/imgs/podcasts/femme.png') }}" alt="podcast"><!-- </div>-->
               <div class="track-name">{{$podcast->titre}}</div>
               <div class="track-artist">{{$podcast->Proprietaire}}</div>
           </div>
		   

           <div class="slider_container">
               <div class="current-time">00:00</div>
                <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                <div class="total-duration">00:00</div>
           </div>

           <div class="slider_container">
               <i class="fa fa-volume-down"></i>
                <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                <i class="fa fa-volume-up"></i>
           </div>

           <div class="buttons" style="font-size:0.75rem; ">

               <div class="prev-track" onclick="prevTrack()">
                    <i class="fa fa-step-backward fa-2x"></i>
                </div>
                <div class="playpause-track" onclick="playpauseTrack()" >
                    <i class="fa fa-play-circle fa-5x"></i>
                </div>
                <div class="next-track" onclick="nextTrack()">
                    <i class="fa fa-step-forward fa-2x"></i>
                </div>

           </div>


        <!--    <div id="wave">
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
            </div>   -->
       </div>

       <audio id="audio" hidden>
           <source src="" />
       </audio>
   <!-- </div> -->
   </div>
      
                <div class="blog-main-wrapper">
                  <div class="section-heading">
                    <div class="section-title-wrapper">
                      <div class="title-wrapper has_fade_anim">
                        <h1 class="section-title large" style="color:#005151;">Écoutez nos experts </h1>
                      </div>
                    </div>
                  </div>
                  <div class="blog-wrapper-area fix has_fade_anim" data-delay=".35">
                    <div class="blog-wrapper">


                    @foreach($podcast->episodes as $index => $episode)
                   <x-episode-item :episode="$episode" :numero="$index + 1"></x-episode-item>
                   @endforeach
 
                    </div>
                  </div>

                  <div class="pagination-links">
                      {{ $episodes->links() }}
                  </div>

                </div>
              </div>
            </div>
          </section>
          <!-- blog area end  -->


        </main>

        @include('partials.footer')


<script>

const audio=document.querySelector('#audio');
let now_playing = document.querySelector('.now-playing');
let track_art = document.querySelector('.track-art');
let track_name = document.querySelector('.track-name');
let track_artist = document.querySelector('.track-artist');

let play_btn = document.getElementById('btn-play');
let playpause_btn = document.querySelector('.playpause-track');
let next_btn = document.querySelector('.next-track');
let prev_btn = document.querySelector('.prev-track');

let seek_slider = document.querySelector('.seek_slider');
let volume_slider = document.querySelector('.volume_slider');
let curr_time = document.querySelector('.current-time');
let total_duration = document.querySelector('.total-duration');
//let wave = document.getElementById('wave');
//let randomIcon = document.querySelector('.fa-random');
//let curr_track = document.createElement('audio');

let track_index = 0;
let isPlaying = false;
//let isRandom = false;
let updateTimer;



/*
const music_list = [
    {
        img : 'images/stay.png',
        name : 'Épisode 1',
        artist : 'EHC',
        music : 'music/Épisode 1.mp3'
    },
    {
        img : 'images/fallingdown.jpg',
        name : 'Épisode 2',
        artist : 'EHC',
        music : 'music/fallingdown.mp3'
    },
    {
        img : 'images/faded.png',
        name : 'Épisode 3',
        artist : 'EHC',
        music : 'music/Faded.mp3'
    },
    {
        img : 'images/ratherbe.jpg',
        name : 'Épisode 4',
        artist : 'EHC',
        music : 'music/Rather Be.mp3'
    }
]; */


//test
/*
playpause_btn.addEventListner('click', playTroack);

function playTrack(){

  if(isPlaying === false){
    audio.play();
    playpause_btn.innerHTML = `<span class='material-symbols-outlined'>pause</span>`;
    isPlaying = true;
  }
  else{
    audio.pause();
    playpause_btn.innerHTML = `<span class='material-symbols-outlined'>pause</span>`;
    isPlaying = false;
  }

  }

  function switchTrack(){
    if(isPlaying === true){
      audio.play();
    }
    const trackSrc = 'assets/tracks/ ' + tracks[trackId] + '.mp3';
  }

*/




loadTrack(track_index);



function loadTrack(track_index){
    clearInterval(updateTimer);
    reset();

    curr_track.src = music_list[track_index].music;
    curr_track.load();

    track_art.style.backgroundImage = "url(" + music_list[track_index].img + ")";
    track_name.textContent = music_list[track_index].name;
    track_artist.textContent = music_list[track_index].artist;
    now_playing.textContent = "Playing music " + (track_index + 1) + " of " + music_list.length;

    updateTimer = setInterval(setUpdate, 1000);

    curr_track.addEventListener('ended', nextTrack);
    random_bg_color();
}

function random_bg_color(){
    let hex = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e'];
    let a;

    function populate(a){
        for(let i=0; i<6; i++){
            let x = Math.round(Math.random() * 14);
            let y = hex[x];
            a += y;
        }
        return a;
    }
    let Color1 = populate('#');
    let Color2 = populate('#');
    var angle = 'to right';

    let gradient = 'linear-gradient(' + angle + ',' + Color1 + ', ' + Color2 + ")";
    document.body.style.background = gradient;
}
function reset(){
    curr_time.textContent = "00:00";
    total_duration.textContent = "00:00";
    seek_slider.value = 0;
}
function randomTrack(){
    isRandom ? pauseRandom() : playRandom();
}
function playRandom(){
    isRandom = true;
    randomIcon.classList.add('randomActive');
}
function pauseRandom(){
    isRandom = false;
    randomIcon.classList.remove('randomActive');
}
function repeatTrack(){
    let current_index = track_index;
    loadTrack(current_index);
    playTrack();
}


function playpauseTrack(){
    isPlaying ? pauseTrack() : playTrack();
}

function playTrack(){
    curr_track.play();
    isPlaying = true;
    track_art.classList.add('rotate');
//    wave.classList.add('loader');
    playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';
	play_btn.innerHTML = '<i class="fa-regular fa-circle-pause" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i>';
 
}
function pauseTrack(){
    curr_track.pause();
    isPlaying = false;
    track_art.classList.remove('rotate');
//    wave.classList.remove('loader');
    playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';
	play_btn.innerHTML = '<i class="fa-regular fa-circle-play" style="color:#005151; font-size:50px; transform: rotate(0deg);"></i>';

}


//function nextTrack(){
 //   if(track_index < music_list.length - 1 && isRandom === false){
  //      track_index += 1;
  //  }else if(track_index < music_list.length - 1 && isRandom === true){
   //     let random_index = Number.parseInt(Math.random() * music_list.length);
   //     track_index = random_index;
  //  }else{
 //       track_index = 0;
 //   }
 //   loadTrack(track_index);
 //   playTrack();
//}
function prevTrack(){
    if(track_index > 0){
        track_index -= 1;
    }else{
        track_index = music_list.length -1;
    }
    loadTrack(track_index);
    playTrack();
}

function nextTrack(){
    if(track_index < music_list.length){
        track_index += 1;
    }else{
        track_index = music_list.length +1;
    }
    loadTrack(track_index);
    playTrack();
}

function seekTo(){
    let seekto = curr_track.duration * (seek_slider.value / 100);
    curr_track.currentTime = seekto;
}
function setVolume(){
    curr_track.volume = volume_slider.value / 100;
}
function setUpdate(){
    let seekPosition = 0;
    if(!isNaN(curr_track.duration)){
        seekPosition = curr_track.currentTime * (100 / curr_track.duration);
        seek_slider.value = seekPosition;

        let currentMinutes = Math.floor(curr_track.currentTime / 60);
        let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
        let durationMinutes = Math.floor(curr_track.duration / 60);
        let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);

        if(currentSeconds < 10) {currentSeconds = "0" + currentSeconds; }
        if(durationSeconds < 10) { durationSeconds = "0" + durationSeconds; }
        if(currentMinutes < 10) {currentMinutes = "0" + currentMinutes; }
        if(durationMinutes < 10) { durationMinutes = "0" + durationMinutes; }

        curr_time.textContent = currentMinutes + ":" + currentSeconds;
        total_duration.textContent = durationMinutes + ":" + durationSeconds;
    }
}




</script>


  <!-- All JS files -->
   
  <script src="{{ url('assets/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ url('assets/js/swiper-bundle.min.js')}}"></script>
  <script src="{{ url('assets/js/counter.js')}}"></script>
  <script src="{{ url('assets/js/progressbar.js')}}"></script>
  <script src="{{ url('assets/js/gsap.min.js')}}"></script>
  <script src="{{ url('assets/js/ScrollSmoother.min.js')}}"></script>
  <script src="{{ url('assets/js/ScrollTrigger.min.js')}}"></script>
  <script src="{{ url('assets/js/jquery.meanmenu.min.js')}}"></script>
  <script src="{{ url('assets/js/backToTop.js')}}"></script>
  <script src="{{ url('assets/js/main.js')}}"></script>
  <script src="{{ url('assets/js/error-handling.js')}}"></script>
  <script src="{{ url('assets/js/wc-cursor.js')}}"></script>
  <script src="{{ url('assets/js/offcanvas.js')}}"></script>



</body>

</html>