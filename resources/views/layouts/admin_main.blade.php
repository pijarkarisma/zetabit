<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> ZETABIT | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            padding: 6px 14px;
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
        }

        .sidebar ul li{
            position: relative;
            height: 50px;
            width: 100%;
            margin: 0 5px;
            list-style:none;
            line-height: 50px;
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
        }

        .sidebar .profile_content .profile{
            position: relative;
            padding: 10px 6px;
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
            transform: translateX(-50%);
            min-width: 50px;
            line-height: 50px;
        }
    </style>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">ZETABIT</div>    
            </div>
        </div>
        <ul class="nav_list">
            <li>
                <a href="#">
                    <i class="bx bx-grid-alt" ></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <!-- <span class="tooltip">Dashboard</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-package' ></i>
                    <span class="links_name">Produk</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">User</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-chat' ></i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-check-square' ></i>
                    <span class="links_name">Request</span>
                </a>
            </li>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="hermonie.jpg" alt="">
                        <div class="name_job">
                            <div class="name">Desi Christine </div>
                            <div class="job">Admin</div>
                        </div>
                    </div>
                    <i class='bx bx-log-out' id="log_out"></i>
                </div>
            </div>
        </ul>
    </div>
        
</body>
</html>