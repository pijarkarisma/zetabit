@extends('layouts.main')

@section('konten')
<style>
  .catalog-category{
    padding-bottom: 3rem;
  }
</style>
<div class="album py-3 product-page-bg">
    {{-- Breadcrumb --}}
    <nav style="--bs-breadcrumb-divider: '>'; padding-left: 2rem" aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a id="breadcrumb-inactive" href="{{route('landing')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">All-In-One PC</li>
        </ol>
    </nav>
    {{-- Page Heading Text --}}
    <h1 style="padding-left: 2rem; font-size: xx-large; font-family: Viga; color: black;">All-In-One-PC</h1>
</div>

<div class="album py-4 product-page-bg">
    <div class="row" style="margin-right:0">
      {{-- Sidebar Catalog Page --}}
      <div class="col-md-3">
        @include('productPage.side_product_category')
      </div>
      

      {{-- Main Catalog Page --}}
      <div class="col-md-9">
        {{-- Start of Catalog Carousel --}}
        <div id="catalogCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active catalog-carousel">
              <img src="{{asset('frontend/image/aiopc-carousel-1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item catalog-carousel">
              <img src="{{asset('frontend/image/aiopc-carousel-2.jpg')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#catalogCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#catalogCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        {{-- End of Catalog Carousel --}}
        {{-- Start of Catalog Content --}}
        <div class="card mt-4">
          <div class="card-body">
              <h4 style="color: black; padding-bottom:2rem">Belanja All-In-One PC</h4>
              <div class="row">
                <div class="col-lg-4 d-flex justify-content-center align-items-center catalog-category">
                  <img src="{{asset('frontend/image/product-img/komponen-pc/acer-notebook.png')}}" alt="Acer" style="max-width: 120px; max-height:70px"></img>
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-center catalog-category">
                  <img src="{{asset('frontend/image/product-img/komponen-pc/apple-notebook.png')}}" alt="Apple" style="max-width: 120px; max-height:70px"></img>
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-center catalog-category">
                  <img src="{{asset('frontend/image/product-img/komponen-pc/asus-notebook.png')}}" alt="Asus" style="max-width: 120px; max-height: 70px"></img>
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-center catalog-category">
                  <img src="{{asset('frontend/image/product-img/komponen-pc/dell-notebook.png')}}" alt="Dell" style="max-width: 120px; max-height: 70px"></img>
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-center catalog-category">
                  <img src="{{asset('frontend/image/product-img/komponen-pc/hp-notebook.png')}}" alt="HP" style="max-width: 120px; max-height: 70px"></img>
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-center catalog-category">
                  <img src="{{asset('frontend/image/product-img/komponen-pc/lenovo-notebook.png')}}" alt="Lenovo" style="max-width: 120px; max-height: 70px"></img>
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-center catalog-category">
                  <img src="{{asset('frontend/image/product-img/komponen-pc/toshiba-notebook.png')}}" alt="Toshiba" style="max-width: 120px; max-height: 70px"></img>
                </div>

                <div class="col-lg-4 d-flex justify-content-center align-items-center catalog-category">
                  <img src="{{asset('frontend/image/product-img/komponen-pc/msi-notebook.png')}}" alt="MSI" style="max-width: 120px; max-height: 70px"></img>
                </div>

              </div>
          </div>
      </div>
      {{-- End of catalog content --}}
      </div>
    </div>
</div>

@endsection