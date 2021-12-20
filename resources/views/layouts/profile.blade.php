<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ZETABIT · Profile</title>

        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Viga"
        />

        <!-- Bootstrap core CSS -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

        <style>
            body{
                background-image: linear-gradient(rgb(228, 228, 228), whitesmoke);
            }
        </style>
        
        <!-- Custom styles for this template -->
        <link href="{{asset('frontend/styles.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('frontend/sidebar.css') }}" rel="stylesheet" />
    </head>
    <body>
        {{-- Start of Navbar       --}}
            <div class="d-flex bg-dark py-2">
                <div class="ps-4 my-auto">
                    <a style="text-decoration:none; color:white" href="{{route('landing')}}"><p class="navbar-brand mb-0">ZETABIT</p></a>
                </div>
                <div class="flex-grow-1 my-auto">
                    <p class="navbar-brand-sub mb-0 h1" style="font-size:20pt; 
                        color:white; font-weight:normal">Profile</p> 
                </div>
                <div class="my-auto pe-2">
                        @auth
                            <a class="text-decoration-none"
                              style="color: white; font-weight:500; font-size:13pt"
                              >{{ Auth::user()->name }}</a>
                        @endauth
                </div>
                <div class="my-auto pe-4">
                    @auth
                    @if ($user->avatar == 'default-avatar.jpg')
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="white" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    @else
                    <img src="/frontend/image/upload/avatar/{{Auth::user()->avatar}}" style="width:45px; height:45px; border-radius:50%;">    
                    @endif
                    @endauth
                </div>
            </div>
        {{-- End of Navbar --}}

        {{-- Start of content --}}
        <div class="container-fluid">
            <div class="row py-4">
                <div class="col-4 ps-4">
                    <h3>Informasi Profil</h3>
                    <p>Anda dapat mengubah foto profil dan nama</p>
                </div>
                <div class="col pe-4">
                    <div class="card">
                        <div class="card-content p-4">
                           
                            <form enctype="multipart/form-data" action="{{route('updateprofile')}}" method="POST">
                                @csrf
                                <div class="pb-4">
                                    <div class="pb-2">
                                        @auth
                                        @if ($user->avatar != 'default-avatar.jpg')
                                        <div>
                                            <img src="/frontend/image/upload/avatar/{{Auth::user()->avatar}}" style="width:120px; height:120px; border-radius:50%;">    
                                        </div>
                                        @else
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="white" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                            </svg>
                                        </div>
                                        @endif
                                        @endauth
                                    </div>
                                    <div>
                                        <label for="avatar" class="form-label">Ubah foto profil</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="file" name="avatar">
                                        </div>
                                    </div>

                                    </div>
                                    <div class="pb-4">
                                        @auth
                                        <label for="name" class="form-label">Nama</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" value="{{ Auth::user()->name }}" name="name">
                                        </div>
                                        @endauth
                                    </div>
        
                                    <div class="pb-5">
                                        @auth
                                        <label for="address" class="form-label">Alamat</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" value="{{ Auth::user()->address }}" name="address">
                                        </div>
                                        @endauth
                                    </div>
        
                                    <div class="float-end">
                                        <button type="submit" class="btn btn-dark px-4">SAVE</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Content --}}
          

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
    </body>
</html>
