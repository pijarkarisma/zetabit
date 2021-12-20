<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZETABIT · Pijar Desi</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Viga">
    

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      } 

      .navbar-bg-color{
        background-color: whitesmoke;
      }

      .product-page-bg{
        background-image: linear-gradient(rgb(228, 228, 228), whitesmoke);
      }

      /* BREADCRUMB */
      #breadcrumb-inactive{
        text-decoration: none;
        color:black;
      }

      #breadcrumb-inactive:hover{
        color:rgb(66, 186, 150);
      }

      .side-product-catalog-link{
        text-decoration: none;
        color: #5a5a5a; 
      }

      .side-product-catalog-link:hover{
        color: rgb(66,186,150); 
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/styles.css')}}" rel="stylesheet">

  </head>
  <body>
    <!---HEADER---->
    @include('layouts.header')


    <main>
      <!-- LOGIN -->
      @include('login')

      <!-- KONTEN -->
      @yield('konten')
      
      <!-- FOOTER -->
      @include('layouts.footer')
    </main>


    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      
  </body>
</html>