<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Binox HTML5 Template">

  <title>Candidature spontanée</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.webp">





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
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
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
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
          <form action="#" class="form-search">
            <input type="text" placeholder="Search">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- search modal end -->

          <!-- Header area start -->
        @include('partials.header')
          <!-- Header area end -->

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
                    <span style="color:#005151;" class="section-subtitle">Condidature spontanée</span>
                  </div>
                  <div class="title-wrapper has_fade_anim">
                    <h2 style="color:#005151;" class="section-title">Rejoignez l'équipe EHC et explorez de nouvelles opportunités professionnelles!</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="location-thumb has_fade_anim">
              <img src="assets/imgs/gallery/candidature.jpeg" alt="location-image">
              <div class="container">
                <div class="location-info-wrapper has_fade_anim">
                  <div class="location-info">
                    <div class="logo">
                      <img src="assets/imgs/logo/logo.webp" alt="logo">
                    </div>
                    <h3 style="color:#005151;" class="title">Contact info:</h3>
                    <ul class="info-list">
                      <li><a style="color:#005151;" href="#">+212 6 63-80-85-01</a></li>
                      <li><a style="color:#005151;" href="#">contact@expertshumancapital.com</a></li>
                    </ul>
                    <p style="color:#005151;" class="text">Rue du Calvon Bv Abdelmoumen- Casablanca</p>
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
                      <h2 class="section-title">Postulez!
                      
                      </h2>
                    </div>
                  </div>
                  <div class="line-vertical"></div>
                  <div class="meta-list has_fade_anim">
                    <ul>
                      <li><a style="color:#005151;" href="mailto:inquiry@binox.com">contact@expertshumancapital.com</a></li>
                    </ul>
                  </div>
                  <div class="logo has_fade_anim">
                    <a href="#"><img src="assets/imgs/logo/logo.webp" alt="logo"></a>
                  </div>
                </div>
                <div class="contact-wrapper has_fade_anim">
                <form action="{{ route('submitCondidature') }}" method="POST" enctype="multipart/form-data">
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
                    <div  class="wc-single-input">
                      <label style="color:#005151;"  for="name" class="wc-form-label">Nom et prénom</label>
                      <input name='name' style="background-color:rgba(208, 235, 220, 0.9);" type="text" id="name" value="{{ old('name') }}">
                      @error('name')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="wc-single-input">
                      <label style="color:#005151;" for="email" class="wc-form-label">Email</label>
                      <input name="email" style="background-color:rgba(208, 235, 220, 0.9);" type="text" id="email" value="{{ old('email') }}">
                      @error('email')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="wc-single-input">
                      <label style="color:#005151;" for="phone" class="wc-form-label">Numéro de téléphone</label>
                      <input name="phone" style="background-color:rgba(208, 235, 220, 0.9);" type="text" id="phone" value="{{ old('phone') }}">
                      @error('phone')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="wc-single-input">
                      <label style="color:#005151;" for="company" class="wc-form-label">CV</label>
                      <input name="cv" style="background-color:rgba(208, 235, 220, 0.9);" type="file" id="company">
                      @error('cv')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="wc-single-input">
                      <label style="color:#005151;" for="phone" class="wc-form-label">Subject</label>
                      <input name="subject" style="background-color:rgba(208, 235, 220, 0.9);" type="text" id="phone" value="{{ old('phone') }}">
                      @error('subject')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="wc-single-input">
                      <label style="color:#005151;" for="message" class="wc-form-label">Message</label>
                      <textarea name="message" style="background-color:rgba(208, 235, 220, 0.9);"  id="message" placeholder="Write your message here....." >{{ old('message') }}</textarea>
                      @error('message')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                    <div class="btn-wrapper">
                      <button name='btn' style="background-color:#005151;" type="submit" class="wc-btn-primary btn-text-flip"><span data-text="Soumettre ma candidature">Soumettre ma candidature</span> <i class="fa fa-caret-right"></i> </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- contact area end  -->

          <!-- cta area start  -->
     @include('partials.disponibility')
          <!-- cta area end  -->

        </main>

        <!-- footer start  -->
        @include('partials.footer')
        <!-- footer end  -->

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