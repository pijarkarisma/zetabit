@extends('layouts.main') 

@section('konten')
<style>
  .catalog-category{
    padding-bottom: 3rem;
  }
</style>
<div class="album py-3 product-page-bg">
    {{-- Breadcrumb --}}
    <nav
        style="--bs-breadcrumb-divider: '>'; padding-left: 2rem"
        aria-label="breadcrumb"
    >
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a id="breadcrumb-inactive" href="{{ route('landing') }}"
                    >Home</a
                >
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Processor
            </li>
        </ol>
    </nav>
    {{-- Page Heading Text --}}
    <h1
        style="
            padding-left: 2rem;
            font-size: xx-large;
            font-family: Viga;
            color: black;
        "
    >
        Processor
    </h1>
</div>

<div class="album py-4 product-page-bg">
    <div class="row" style="margin-right: 0">
        {{-- Sidebar Catalog Page --}}
        <div class="col-md-3">
            @include('productPage.side_product_category')
        </div>

        {{-- Main Catalog Page --}}
        <div class="col-md-9">
            {{-- Start Catalog Carousel --}}
            <div
                id="catalogCarousel"
                class="carousel slide"
                data-bs-ride="carousel"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active catalog-carousel">
                        <img
                            src="{{
                                asset(
                                    'frontend/image/komponenpc-carousel-1.jpg'
                                )
                            }}"
                            class="d-block w-100"
                            alt="..."
                        />
                    </div>
                    <div class="carousel-item catalog-carousel">
                        <img
                            src="{{
                                asset(
                                    'frontend/image/komponenpc-carousel-2.jpg'
                                )
                            }}"
                            class="d-block w-100"
                            alt="..."
                        />
                    </div>
                    <div class="carousel-item catalog-carousel">
                        <img
                            src="{{
                                asset(
                                    'frontend/image/komponenpc-carousel-3.jpg'
                                )
                            }}"
                            class="d-block w-100"
                            alt="..."
                        />
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#catalogCarousel"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#catalogCarousel"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            {{-- Enf of Catalog Carousel --}}
            {{-- Start of Catalog Content --}}
            <div class="card p-4 mt-4">
                <div class="card-content">
                    <h4>Temukan Processor / CPU</h4>

                    {{-- Catalog Card --}}
                    <div class="row pt-4">
                        @foreach($produk as $produks)
                        <div class="col-4">
                            <div class="card shadow-sm mb-4">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="220" style="object-fit:cover"
                                src="/frontend/image/upload/produk/{{$produks->image}}" role="img" 
                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" 
                                focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                    
                                <div class="card-body">
                                  <p class="card-title product-title">{{$produks->produkName}} - {{$produks->deskripsi}}</p>
                                  {{-- <p class="card-text harga-coret" 
                                  style="font-size: medium; text-decoration: line-through; margin-bottom: 0;">Rp 20.499.000</p> --}}
                                  <p class="card=text harga-promo" style="font-weight: bold; font-size: x-large;">Rp {{$produks->harga}}</p>
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
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- End of catalog content --}}
        </div>
    </div>
</div>

@endsection
