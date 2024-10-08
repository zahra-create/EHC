
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>EHC Contact</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ url('assets/imgs/logo/logoEHC.png') }}">


  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/icomon.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/master-contact.css">
  <link rel="stylesheet" href="{{ url('assets/css/master-human.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/master-financial.css') }}">




      </head>


<body class="font-heading-hkgrotesk-bold">

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
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
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

          <!-- contact intro start  -->
          <section class="contact-intro">
            <div class="container">
              <div class="section-heading">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper has_fade_anim">
                    <span class="section-subtitle">{!!$Titre!!}</span>
                  </div>
                  <div class="title-wrapper has_fade_anim">
                    <h2 class="section-title">{!!$TitreIntro!!}</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="location-thumb has_fade_anim">
              <img src="{{asset('/storage/'.$Image)}}" alt="location-image">
              <div class="container">
                <div class="location-info-wrapper has_fade_anim">
                  <div class="location-info">
                    <h3 class="title">Contact info:</h3>
                    <ul class="info-list">
                    @foreach($contacts as $contact)
		@if($contact->nom === 'Numéro')
          <li><a href="tel:{{$contact->lien}}">{{$contact->lien}}</a></li>
	  @elseif($contact->nom === 'Email')
          <li><a href="mailto:{{$contact->lien}}">{{$contact->lien}}</a></li>
	  @endif
		@endforeach
        </ul>
		@foreach($localisations as $localisation)
        <p class="text">{{$localisation->lien}}</p>
		@endforeach
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- contact intro end  -->

          <!-- contact area start  -->
          <section class="contact-area section-spacing">
            <div class="container">
              <div class="contact-area-inner">
                <div class="section-heading">
                  <div class="section-title-wrapper style-6">
                    <div class="title-wrapper has_fade_anim">
                      <h2 class="section-title">{!! $TitreForm !!}
                      </h2>
                    </div>
                  </div>
                  <div class="line-vertical"></div>
                  <div class="meta-list has_fade_anim">
                  <!--  <ul>
                      <li><a href="mailto:inquiry@binox.com">LiveChat@binox.skype</a></li>
                    </ul> -->
                  </div>
                  <div class="logo has_fade_anim">
                    <a href="#"><img src="assets/imgs/logo/logoEHC.png" alt="logo"></a>
                  </div>
                </div>
                <div class="contact-wrapper has_fade_anim">
                <form action="{{ route('submitContact') }}" method="POST" enctype="multipart/form-data">
                  @csrf  
                  @if (Session::has('success'))
                  <div class="alert alert-success alert-dismissible" role="alert">
                    {{ Session::get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  </div>
                  @elseif (Session::has('error'))
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    {{ Session::get('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  </div>
                  @endif
		   <div class="wc-single-input">
                      <label for="name" class="wc-form-label">Nom</label>
                      <input type="text" id="name" name="name" required>
                      @error('name')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
		    <div class="wc-single-input">
                      <label for="prenom" class="wc-form-label">Prénom</label>
                      <input type="text" id="prenom" name="prenom" required>
                      @error('prenom')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="wc-single-input">
                      <label for="email" class="wc-form-label">Email</label>
                      <input type="email" id="email" name="email" required>
                      @error('email')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="wc-single-input">
                      <label for="objet" class="wc-form-label">Objet</label>
                      <input type="text" id="objet" name="objet" required>
                      @error('objet')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
					          <div></div>
                    <div class="wc-single-input">
                      <label for="message" class="wc-form-label">Message</label>
                      <textarea id="message" name="message" placeholder="Écrivez votre message ....." required></textarea>
                      @error('message')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="btn-wrapper">

                  <!--  @if(Session('success'))
                   {{ Session('success') }}
                     @endif -->

                     @if(Session('success'))
                     <div class="alert alert-success alert-dismissible fade in">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session('success') }}
</div>
@endif 
                      <button type="submit" class="wc-btn-primary btn-text-flip"><span data-text="{!! $Button !!}">{!! $Button !!}
                      </span> <i class="fa fa-caret-right"></i> </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- contact area end  -->



        </main>
        @include('partials.chatboat')
        @include('partials.footer')
  
      </div>
    </div>
  </div>



  <!-- All JS files -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/progressbar.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollSmoother.min.js"></script>
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/backToTop.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/error-handling.js"></script>
  <script src="assets/js/wc-cursor.js"></script>
  <script src="assets/js/offcanvas.js"></script>

  <script>
    if ('.testimonial.style-1') {
      var testimonial_style_1 = new Swiper(".testimonial.style-1", {
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next.style-1",
          prevEl: ".swiper-button-prev.style-1",
        }
      });
    }
  </script>

</body>

</html>