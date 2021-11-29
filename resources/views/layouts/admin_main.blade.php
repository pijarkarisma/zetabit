<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> ZETABIT | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap core CSS -->
     <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

     {{-- Logotype Font --}}
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Viga">


    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body{
            position: relative;
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
        }

        .sidebar{
            position: fixed;
            top: 0;
            left: 0;
            height:100%;
            width: 240px;
            background: #11101d;
            padding-left:0rem;
            padding-top: 6px;
        }

        .sidebar .logo_content .logo{
            color: #fff;
            display: flex;
            height: 50px;
            width: 100%;
            align-items: center;
        }

        .logo_content .logo i{
            font-size: 28px;
            margin-right: 5px;
        }

        .logo_content .logo .logo_name{
            font-size: 20px;
            font-weight: 400;
            text-decoration: none;
        };

        /* .sidebar #btn{
            position: absolute;
            color: #fff;;
            left: 90%;
            top: 6px;
            font-size: 20px;
            height: 50px;
            width: 50px;
            text-align: center;
            line-height: 50px;
            transform: translateX(-50%);
        } */

        .sidebar ul{
            margin-top: 20px;
            margin-left:0px;
            padding-left:0px;
        }

        .sidebar ul li{
            position: relative;
            height: 50px;
            width: 100%;
            /* margin: 0 5px; */
            list-style:none;
            line-height: 50px;
            margin-left:0px;
            padding-left: 0px;
        }

        .sidebar ul li a{
            color: #fff;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.4s ease;
            border-radius: 12px;
        } 

        .sidebar ul li a:hover{
            color: #11101d;
            background: #fff;
        }

        .sidebar ul li a i{
            height: 50px;
            min-width: 50px;
            border-radius:12px;
            line-height: 50px;
            text-align:center;
        }

        .sidebar .profile_content{
            position: absolute;
            color: #fff;
            bottom: 0;
            left: 0;
            width:100%;
        }

        .sidebar .profile_content .profile{
            position: relative;
            padding-top: 1rem;
            padding-bottom: 4.5rem;
            padding-left: 1rem;
            height: 60px;
            background: #1d1b31;
        }

        .profile_content .profile .profile_details{
            display:flex;
            align-items: center;
        }

        .profile .profile_details img{
            height: 45px;
            width: 45px;
            object-fit:cover;
            border-radius: 12px;
        }

        .profile .profile_details .name_job{
            margin-left: 10px;
        }

        .profile .profile_details .name{
            font-size: 15px;
            font-weight: 400;
        }   

        .profile .profile_details .job{
            font-size: 12px;
        }

        .profile #log_out{
            position:absolute;
            left: 88%;
            bottom: 5px;
            font-size: 20px;
            transform: translateX(-50%);
            min-width: 50px;
            line-height: 50px;
            text-decoration: none;
        }

        .name{
            display:inline-block; 
            max-width:120px; 
            overflow:hidden; 
            white-space:nowrap; 
            text-overflow: ellipsis; 
            color:white;
        }

        .navbar-brand{
            font-size:26pt;
            font-family: Viga;
            color:white;
            text-decoration: none;
        }
    </style>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="row">
        <!--Sidebar-->
        @include('layouts.admin_sidebar')
        <!--end of Sidebar-->

        <div class="col-md main-content">
            <!--Navbar-->
            <nav class="container-fluid p-3 bg-dark text-white float-left">
                <div class="row align-items-start">
                    <div class="col-md-auto">
                        <h5 class="title-text-nav">
                            Lembar Kerja Program Studi
                        </h5>
                        <h5 class="title-text-nav">|</h5>
                        <h5 class="title2-text-nav">
                            Fakultas Teknik Unika Atma Jaya
                        </h5>
                    </div>
                </div>
            </nav>
            <!--end of navbar-->

            <!--start Content section-->
            @yield('content')
            <!--end of Content section-->
        </div>
    </div>
        
</body>
</html>