<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>

    {{-- Bootstap 4.6.2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {{-- Bootstap 4.6.2 --}}
    {{-- Font awesome --}}
    <script src="https://kit.fontawesome.com/774b78ff1e.js" crossorigin="anonymous"></script>
    {{-- Font awesome --}}
    {{-- Css --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    {{-- Css --}}
    {{-- swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    {{-- swiper --}}
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    {{-- bootstrap icon --}}
</head>

<body>
    <header>
        <div class="container">
            <div class="row pt-3 pb-3 align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="image-logo w-25">
                            <a href="{{asset('index')}}">
                                <img src="https://assets.topdev.vn/static/assets/desktop/images/logo-td.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                        <div class="text-logo p-2">
                            <span class="text-danger text-xl">Việc làm IT</span>
                            <span class="text-xl">hàng đầu</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info d-flex align-items-center justify-content-end">
                        <div class="phone p-2 border-right">
                            <i class="fa-solid fa-phone"></i>
                            0987712063
                        </div>
                        <div class="post-jobs p-2 border-right">
                            <i class="fa-solid fa-briefcase"></i>
                            Đăng tuyển
                        </div>
                        <div class="contact p-2">
                            <i class="fa-solid fa-address-book"></i>
                            Liên hệ
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="{{asset('search_job.jobs')}}">Việc làm IT</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="{{asset('cv.addCV')}}">Tạo CV</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="#">Việc làm IT Fresher</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="{{asset('blog.index')}}">Blog IT</a>
                        </li>
                    </ul>
                </div>
                <div class="login-post d-flex justify-content-between">
                    <a href="#" class="pr-3">
                        <button class="text-white py-2 px-4 bg-dangtuyen border">
                            <span class="dangtuyen">Đăng tuyển</span>
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </button>
                    </a>
                    @if (Request::path() !== 'login')

     <a href="{{asset('/login')}}">
        <button class="text-white py-2 px-4 border border-white bg-dark">Đăng Nhập</button>
    </a>

@else
<a href="{{asset('/login')}}" hidden>
    <button class="text-white py-2 px-4 border border-white bg-dark">Đăng Nhập</button>
</a>
@endif
                </div>
            </div>
        </nav>
    </header>
