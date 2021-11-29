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

        .sidebar .btn{
            position: absolute;
            color: #fff;
            left: 90%;
            top: 6px;
            font-size: 20px;
            height: 50px;
            width: 50px;
            text-align: center;
            line-height: 50px;
            transform: translateX(-50%);
        }

        .sidebar ul{
            margin-top: 20px;
        }

        .sidebar ul li{
            position: relative;
            height: 50px;
            width: 100%;
            margin: 0 5px;
            list
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
                    <i class="bx bx-package">
                        <box-icon name='package' ></box-icon>
                    </i>
                    <span class="links_name">Produk</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-user" >
                        <box-icon name='user' ></box-icon>
                    </i>
                    <span class="links_name">User</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-chat" >
                        <box-icon name='chat' ></box-icon>
                    </i>
                    <span class="links_name">Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-check-square" >
                        <box-icon name='check-square' ></box-icon>
                    </i>
                    <span class="links_name">Request</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-log-out" >
                        <box-icon name='log-out' ></box-icon>
                    </i>
                    <span class="links_name">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
        
</body>
</html>