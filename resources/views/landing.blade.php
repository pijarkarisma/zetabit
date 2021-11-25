@extends('layouts.main')

@section('konten')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{asset('frontend/image/banner-carousel-2.jpg')}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption text-start">
            <!--<h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>-->
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{asset('frontend/image/banner-carousel-3.jpg')}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption text-center">
            <h1>Selamat datang di ZETABIT</h1>
            <p>Solusi lengkap dan terpercaya kebutuhan teknologimu</p>
            <p><a class="btn btn-lg btn-success" href="#">Mulai Belanja</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{asset('frontend/image/banner-carousel-1.jpeg')}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption text-end">
            <!--<h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>-->
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--------------------------KONTEN PRODUK-------------------------->
  <!----------------------------------------------------------------->
  <div class="album py-0 navbar-bg-color">
  <div class="album py-5 product-page-bg">

    <h1 style="padding-left: 2rem; font-size: xx-large; font-family: Viga; color: black;">SEDANG PROMO</h1>

    <div class="container-fluid product-content">

      <div class="row row-cols-sm-5 row-cols-sm-5 row-cols-sm-5 g-3">
        <div class="col">
          <img src="{{asset('frontend/image/banner-product-msi.jpg')}}" class="img-fluid" alt="banner-product-msi">
        </div>
        
        <div class="cols">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="card shadow-sm mt-3">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="card shadow-sm mt-3">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div> 

        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>

  <!-------------------PALING LAKU------------------->
  <div class="album py-5 product-page-bg">

    <h1 style="padding-left: 2rem; font-size: xx-large; font-family: Viga; color: black;">PALING LAKU</h1>


    <div class="container-fluid product-content">

      <div class="row row-cols-sm-5 row-cols-sm-5 row-cols-sm-5 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!------------------BANNER PRODUK TENGAH------------------->
  <div class="album product-page-bg container-fluid px-0 justify-content-center">
    <img class="img-fluid w-100" src="{{asset('frontend/image/banner-product-ekwb.jpg')}}" href="#" alt="banner-product-ekwb" class="img-fluid">
  </div>

  <!------------------PRODUK PILIHAN------------------------>
  <div class="album py-5 product-page-bg">

    <h1 style="padding-left: 2rem; font-size: xx-large; font-family: Viga; color: black;">PRODUK PILIHAN</h1>


    <div class="container-fluid product-content">

      <div class="row row-cols-sm-5 row-cols-sm-5 row-cols-sm-5 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="200"
            src="{{asset('frontend/image/product-img/MSI GL66 11UDK - 442ID PULSE.jpg')}}" role="img" 
            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-title product-title">MSI GL66 11UDK - 442ID Pulse | I7-11800H | RTX3050TI 4GB | 512GB | 144HZ</p>
              <!--<p class="card-text harga-coret" 
              style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p>-->
              <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp 19.999.999</p>
              <div class="d-flex align-items-center">
                <div>
                  <button type="button" class="btn btn-md btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                  </button>
                  <button type="button" class="btn btn-md btn-dark">
                    <a>Tambah ke</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-------------------BANNER PRODUK TENGAH 2-------->
  <div class="album product-page-bg container-fluid justify-content-center">
    <div class="row">
      <img class="img-fluid w-100 px-0" src="{{asset('frontend/image/banner-product-amdryzen.jpg')}}" href="#" alt="banner-product-ekwb" class="img-fluid">
    </div>
  </div>

  <!-------------------KATEGORI---------------------->
  <div class="container-fluid py-5 product-page-bg text-center">
    <h1 style="font-size: xx-large; font-style: Viga; color: black;">Kategori</h1>

    <div class="row py-4 justify-content-center">
        <div class="col-sm-auto">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="{{asset('frontend/image/categories/processor.png')}}" role="img" aria-label="Placeholder: 100x100" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Komponen PC</title><rect width="100%" height="100%" fill="#777"/></img>
        </div>
        <div class="col-sm-auto">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="{{asset('frontend/image/categories/notebook.png')}}" role="img" aria-label="Placeholder: 100x100" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Komponen PC</title><rect width="100%" height="100%" fill="#777"/></img>
        </div>
        <div class="col-sm-auto">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="{{asset('frontend/image/categories/aio.png')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        </div>
        <div class="col-sm-auto">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="{{asset('frontend/image/categories/accessories.png')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        </div>
        <div class="col-sm-auto">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="{{asset('frontend/image/categories/flashdrive.png')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        </div>
        <div class="col-sm-auto">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="{{asset('frontend/image/categories/speaker.png')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        </div>
        <div class="col-sm-auto">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="{{asset('frontend/image/categories/networking.png')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        </div>
        <div class="col-sm-auto">
          <img class="bd-placeholder-img rounded-circle" width="100" height="100" src="{{asset('frontend/image/categories/printer.png')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        </div>
    </div>
  </div>

  </div>

@endsection