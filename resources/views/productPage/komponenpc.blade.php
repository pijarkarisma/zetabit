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
                Komponen PC
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
        Komponen PC
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
            <div class="card mt-4">
                <div class="card-body">
                    <h4 style="color: black; padding-bottom:2rem">Belanja Komponen PC</h4>
                    <div class="row">
                      <div class="col-lg-4 catalog-category">
                        <div class="row">
                            <div class="col-5">
                              <img src="{{asset('frontend/image/product-img/komponen-pc/processor-thumbnail.png')}}" alt="Processor" style="max-width: 120px; max-height: 120px"></img>
                            </div>
                            <div class="col-7">
                              <h5>CPU / Processor</h5>
                              <ul style="list-style: none; padding-left:0">
                                <li>Intel Processor</li>
                                <li>AMD Processor</li>
                              </ul>
                            </div>
                        </div>
                      </div>

                      <div class="col-lg-4 catalog-category">
                        <div class="row">
                          <div class="col-5">
                            <img src="{{asset('frontend/image/product-img/komponen-pc/motherboard-thumbnail.png')}}" alt="Motherboard" style="max-width: 120px; max-height: 120px"></img>
                          </div>
                          <div class="col-7">
                            <h5>Motherboard</h5>
                            <ul style="list-style: none; padding-left:0">
                              <li>Intel Chipset</li>
                              <li>AMD Chipset</li>
                              <li>Lainnya</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 catalog-category">
                        <div class="row">
                          <div class="col-5">
                            <img src="{{asset('frontend/image/product-img/komponen-pc/gpu-thumbnail.png')}}" alt="Processor" style="max-width: 120px; max-height: 120px"></img>
                          </div>
                          <div class="col-7">
                            <h5>GPU / Graphic Card</h5>
                            <ul style="list-style: none; padding-left:0">
                              <li>NVIDIA GPU</li>
                              <li>AMD GPU</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 catalog-category">
                        <div class="row">
                          <div class="col-md-5">
                            <img src="{{asset('frontend/image/product-img/komponen-pc/memory-thumbnail.png')}}" alt="Processor" style="max-width: 120px; max-height: 120px"></img>
                          </div>
                          <div class="col-7">
                            <h5>Memory</h5>
                            <ul style="list-style: none; padding-left:0">
                              <li>DDR4</li>
                              <li>DDR3</li>
                              <li>Lainnya</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 catalog-category">
                        <div class="row">
                          <div class="col-md-5">
                            <img src="{{asset('frontend/image/product-img/komponen-pc/case-thumbnail.png')}}" alt="Processor" style="max-width: 120px; max-height: 120px"></img>
                          </div>
                          <div class="col-7">
                            <h5>Destkop Case</h5>
                            <ul style="list-style: none; padding-left:0">
                              <li>Full Tower</li>
                              <li>Mid Tower</li>
                              <li>Lainnya</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 catalog-category">
                        <div class="row">
                          <div class="col-md-5">
                            <img src="{{asset('frontend/image/product-img/komponen-pc/psu-thumbnail.png')}}" alt="Processor" style="max-width: 120px; max-height: 120px"></img>
                          </div>
                          <div class="col-7">
                            <h5>Power Supply</h5>
                            <ul style="list-style: none; padding-left:0">
                              <li>Bronze</li>
                              <li>Silver</li>
                              <li>Gold</li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 catalog-category">
                        <div class="row">
                          <div class="col-md-5">
                            <img src="{{asset('frontend/image/product-img/komponen-pc/storage-thumbnail.png')}}" alt="Processor" style="max-width: 120px; max-height: 120px"></img>
                          </div>
                          <div class="col-7">
                            <h5>Hard Drive</h5>
                            <ul style="list-style: none; padding-left:0">
                              <li>SSD</li>
                              <li>Hard Disk</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            {{-- End of catalog content --}}
        </div>
    </div>
</div>

@endsection
