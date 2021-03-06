<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ZETABIT · Dashboard</title>

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Viga"
        />

        <!-- Bootstrap core CSS -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Favicons -->
        <link
            rel="apple-touch-icon"
            href="/docs/5.1/assets/img/favicons/apple-touch-icon.png"
            sizes="180x180"
        />
        <link
            rel="icon"
            href="/docs/5.1/assets/img/favicons/favicon-32x32.png"
            sizes="32x32"
            type="image/png"
        />
        <link
            rel="icon"
            href="/docs/5.1/assets/img/favicons/favicon-16x16.png"
            sizes="16x16"
            type="image/png"
        />
        <link
            rel="manifest"
            href="/docs/5.1/assets/img/favicons/manifest.json"
        />
        <link
            rel="mask-icon"
            href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg"
            color="#7952b3"
        />
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico" />
        <meta name="theme-color" content="#7952b3" />

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .navbar-brand{
            font-size:26pt;
            font-family: Viga;
            color:white;
            text-decoration: none;
            }
        </style>

        <!-- Custom styles for this template -->
        <!-- <link href="{{ asset('frontend/styles.css') }}" rel="stylesheet" /> -->

        <!-- Custom styles for this template -->
        <link href="{{ asset('frontend/sidebar.css') }}" rel="stylesheet" />
    </head>
    <body>      
        <!--SIDEBAR-->
        <main>
          <div class="container-fluid m-0 p-0">
            <div class="row">
              <div class="col-auto">
                <div class="p-3 h-100 bg-dark text-white" style="width: 280px;">
                  <a href="/" class="d-flex align-items-center justify-content-center pb-3 mb-3 link-light text-decoration-none border-bottom">
                    <span class="navbar-brand">ZETABIT</span>
                  </a>
                  <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                      <button class="btn btn-toggle text-white align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                        ADD DATA
                      </button>
                      <div class="collapse" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <!-- <li><a href="{{route('kategoriform')}}" class="link-light rounded">Category</a></li> -->
                          <li><a href="{{route('produkform')}}" class="link-light rounded">Product</a></li>
                          <!-- <li><a href="{{route('deliveryform')}}" class="link-light rounded">Delivery</a></li>
                          <li><a href="{{route('supplierform')}}" class="link-light rounded">Supplier</a></li> -->
                        </ul>
                      </div>
                    </li>
                    <li class="mb-1">
                      <button class="btn btn-toggle text-white align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        SHOW DATA
                      </button>
                      <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="{{route('showkategori')}}" class="link-light rounded">Category</a></li>
                          <li><a href="{{route('showproduk')}}" class="link-light rounded">Product</a></li>
                          <li><a href="{{route('showdelivery')}}" class="link-light rounded">Delivery</a></li>
                          <li><a href="{{route('showsupplier')}}" class="link-light rounded">Supplier</a></li>
                          <li><a href="{{route('showwishlist')}}" class="link-light rounded">Wishlist</a></li>
                          <li><a href="{{route('showorderdetail')}}" class="link-light rounded">User's Order Detail</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="mb-1">
                      <button class="btn btn-toggle text-white align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                        ORDERS
                      </button>
                      <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="{{route('showorder')}}" class="link-light rounded">New</a></li>
                          <li><a href="{{route('showpayment')}}" class="link-light rounded">Processed</a></li>
                          <li><a href="{{route('showshipped')}}" class="link-light rounded">Shipped</a></li>
                          <li><a href="#" class="link-light rounded">Returned</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                      <button class="btn btn-toggle text-white align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#stockings-collapse" aria-expanded="false">
                        STOCKINGS
                      </button>
                      <div class="collapse" id="stockings-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="{{route('stockingform')}}" class="link-light rounded">Add Stock</a></li>
                          <li><a href="{{route('showstocking')}}" class="link-light rounded">Show Stocking History</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="b-example-divider"></div>
              </div>
  
              <div class="col p-0">
                <!--Navbar-->
                <header class="p-3 mb-3 border-bottom">
                  <div class="container">
                    <div class="row">
                      <div class="col text-end">
                        @csrf
                        @auth
                        <div>
                          <a class="text-decoration-none"
                          style="color: black; font-weight:500"
                          >{{ Auth::user()->name }}</a>
                        </div>
                        @endauth
                      </div>

                      <div class="col-auto">
                        <div class="d-flex flex-wrap align-items-center justify-content-end">
                          {{-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                          </a> --}}
                  
                          <div class="dropdown text-end">
                            @auth
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="/frontend/image/upload/avatar/{{Auth::user()->avatar}}" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            @endauth
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                              <li><a class="dropdown-item" href="#">New project...</a></li>
                              <li><a class="dropdown-item" href="#">Settings</a></li>
                              <li><a class="dropdown-item" href="#">Profile</a></li>
                              <li><hr class="dropdown-divider"></li>
                              {{-- <li><a class="dropdown-item" href="#">Sign out</a></li> --}}
                              <li><form method="POST" action="{{ route('logout') }}">
                                @csrf
      
                                <a class="dropdown-item" href="{{route('logout')}}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log out') }}
                              </a></li>
                            </form>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </header>
              <!--end of navbar-->
              <!--Content-->
              @yield('konten-produk-admin')
              </div>
  
            </div>
          </div>
          
            
            <!--Navbar-->
            
          <!--end of navbar-->
          
            
          </main>
          

        <script src="{{
                asset('frontend/js/bootstrap.bundle.min.js')
            }}"></script>
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
        <script src="sidebars.js"></script>
    </body>
</html>
