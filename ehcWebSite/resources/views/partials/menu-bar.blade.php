<style>
        .offcanvas-3__menu ul::before {
            width: 0px;
            height: 0px;
        }
        .offcanvas-3__menu ul li{
        padding-left:0px;}
    </style>

  <!-- offcanvas start  -->
  <div class="offcanvas-3__area">
    <!--<div class="offcanvas-3__inner">
      <div class="offcanvas-3__meta-wrapper">-->
        <div class="">
          <button id="close_offcanvas" class="close-button close-offcanvas" onclick="hideCanvas3()" style="margin-bottom:20px;" >
            <span></span>
            <span></span>
          </button>
        </div>
        <!--<div class="">
          <div class="offcanvas-3__meta mb-145 d-none d-md-block">
            <ul>
              <li><a href="tel:+2-352698102" class="unnerline"><u>+2-352 698 102</u></a></li>
              <li><a href="mailto:contact@me.com">contact@me.com</a></li>
              <li><a href="">27 Division St, <br>
                  New York, NY 10002, USA</a></li>
            </ul>
          </div> 
          <div class="offcanvas-3__social d-none d-md-block">
            <p class="title">Follow Me</p>
            <div class="offcanvas-3__social-links">
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-twitter"></i></a>
              <a href=""><i class="fa-brands fa-dribbble"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div> 
        </div>
      </div>  -->
      <div class="offcanvas-3__menu-wrapper">
        <nav class="nav-menu offcanvas-3__menu">
          <ul>
          <li><a href="{{route('about')}}">A propos</a></li>
            <li><a href="{{ route('service-entreprise') }}"> Services Entreprises</a></li>
            <li><a href="{{ route('service-fonctionnaire') }}">Services Salariés</a></li>
            <li><a href="{{ route('service-etudiant') }}">Services Etudiants</a></li>
            <li><a href="{{ route('emplois') }}">Offres d'Emploi</a></li>
            <li><a href="{{ route('stages') }}">Stages</a></li>
            <li><a href="{{ route('condidature') }}">Candidature spontannee</a></li>
            <li><a href="{{ route('blogs') }}">Blog</a></li>
            <li><a href="{{ route('playlists') }}">Videos</a></li>
            <li><a href="{{ route('Podcasts') }}">Podcasts</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('demande-devis') }}">Demander devis</a></li>
            <li><a href="about-1.html">Payer prestation</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!-- offcanvas end  -->