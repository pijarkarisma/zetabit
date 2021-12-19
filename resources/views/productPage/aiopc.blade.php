@extends('layouts.main')

@section('konten')

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
      </div>
    </div>
</div>

@endsection