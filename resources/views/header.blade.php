<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <style>
        /* Style the header with a grey background and some padding */
        header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 10px 10px;
        }

        /* Style the header links */
        header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
        header a.logo {
            font-size: 25px;
            font-weight: bold;
        }



        /* Float the link section to the right */
        .header-right {
            float: right;
        }

        /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
        @media screen and (max-width: 500px) {
            header a {
                float: none;
                display: block;
                text-align: left;
            }

            header-right {
                float: none;
            }
        }

        nav {
            /* background: hsl(216deg 18.07% 16.27%); */
            position: relative;
        }

        nav i {
            margin-top: 20px;

        }

        nav>ul {}
    </style>

    <header>
        <div class="header">
            <a href="#default" class="logo"><img src="https://topdev.vn/_next/image?url=%2Fv4%2Fassets%2Fimages%2Ftd-logo.png&w=256&q=75" alt=""></a>
            <div class="header-right">
                <a class="phone" href=""><i class="bi bi-telephone-fill"></i>0123456789</a>
                <a href="#"><i class="bi bi-briefcase"></i>Đăng tuyển</a>
                <a href="#">Liên hệ</a>
                <a href=""><img src="https://investone-law.com/wp-content/uploads/2019/06/quoc-ky-viet-nam.jpg" height="40px" width="40px" alt=""></a>
            </div>
        </div>

    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Việc làm IT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tạo CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Việc làm IT Fresher</a>
                    </li>
                </ul>
                <span style="padding-right: 10px;" class="navbar-text">
                <i style="font-size: 20px;" class="bi bi-bell"></i>
                </span>
                <span  class="navbar-text">
                   <b> Login</b>
                    <i class="bi bi-caret-down"></i>
                </span>
            </div>
        </div>
    </nav>
</body>

</html>