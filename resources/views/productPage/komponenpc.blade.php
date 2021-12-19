@extends('layouts.main')

@section('konten')

<div class="album py-5 product-page-bg">
    {{-- Breadcrumb --}}
    <nav style="--bs-breadcrumb-divider: '>'; padding-left: 2rem" aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a id="breadcrumb-inactive" href="{{route('landing')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Komponen PC</li>
        </ol>
    </nav>

    <h1 style="padding-left: 2rem; font-size: xx-large; font-family: Viga; color: black;">Komponen PC</h1>
</div>

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

@endsection