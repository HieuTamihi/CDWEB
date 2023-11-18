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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="row pt-3 pb-3 align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <div class="image-logo w-25">
                            <a href="{{ asset('index') }}">
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
                            <a class="nav-link text-white" href="{{ asset('search_job.jobs') }}">Việc làm IT</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="{{ asset('cv.addCV') }}">Tạo CV</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="#">Việc làm IT Fresher</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-white" href="{{ route('blog.index') }}">Blog IT</a>
                        </li>
                    </ul>
                </div>
                <div class="login-post d-flex justify-content-between">
                    @if (Auth::check())
                        @if (Auth::user()->role === 3 || Auth::user()->role === 1)
                            <a href="#" class="pr-3">
                                <button class="text-white py-2 px-4 bg-dangtuyen border">
                                    <span class="dangtuyen">Đăng tuyển</span>
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </button>
                            </a>
                        @endif
                    @endif
                    @if (!Auth::check())
                        @if (Request::path() !== 'login')
                            <a href="{{ asset('/login') }}">
                                <button class="text-white py-2 px-4 border border-white bg-dark">Đăng Nhập</button>
                            </a>
                        @else
                            <a href="{{ asset('/login') }}" hidden>
                                <button class="text-white py-2 px-4 border border-white bg-dark">Đăng Nhập</button>
                            </a>
                        @endif
                    @elseif(Auth::check())
                        <div class="position-relative">
                            <div
                                class="text-white d-flex justify-content-center align-items-center py-2 px-2 hover-item-login">
                                <svg class="mr-1" stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" class="hidden h-5 w-5 lg:block" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 4c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm0 14c-2.03 0-4.43-.82-6.14-2.88a9.947 9.947 0 0112.28 0C16.43 19.18 14.03 20 12 20z">
                                    </path>
                                </svg>
                                <div class="tenNguoiDung">
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                                <svg class="arrow-login ml-1" stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24"
                                    class="transition duration-500 group-hover/button:rotate-180 lg:h-5 lg:w-5"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.22 8.22a.749.749 0 0 0 0 1.06l6.25 6.25a.749.749 0 0 0 1.06 0l6.25-6.25a.749.749 0 1 0-1.06-1.06L12 13.939 6.28 8.22a.749.749 0 0 0-1.06 0Z">
                                    </path>
                                </svg>
                            </div>
                            <ul class="text-white position-absolute bg-white option rounded py-2 border">
                                <li class="nav-link p-0 py-2 px-2">
                                    <a title="Bảng điều khiển" class="text-dark nav-link p-0" href="#">
                                        <span class="mr-2 rounded">
                                            <svg stroke="currentColor" fill="none" stroke-width="1.5"
                                                viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            Bảng điều khiển
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-link p-0 py-2 px-2">
                                    <a title="Bảng điều khiển" class="text-dark nav-link p-0" href="#">
                                        <span class="mr-2 rounded">
                                            <svg stroke="currentColor" fill="none" stroke-width="2"
                                                viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            Quản lý CV
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-link p-0 py-2 px-2">
                                    <a title="Bảng điều khiển" class="text-dark nav-link p-0" href="#">
                                        <span class="mr-2 rounded">
                                            <svg stroke="currentColor" fill="none" stroke-width="1.5"
                                                viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            Việc đã ứng tuyển
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-link p-0 py-2 px-2">
                                    <a title="Bảng điều khiển" class="text-dark nav-link p-0" href="#">
                                        <span class="mr-2 rounded">
                                            <svg stroke="currentColor" fill="none" stroke-width="1.5"
                                                viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            Việc đang theo dõi
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-link p-0 py-2 px-2">
                                    <a href="{{ route('logout') }}" class="text-dark nav-link p-0">
                                        <span class="mr-2 rounded">
                                            <svg stroke="currentColor" fill="none" stroke-width="1.5"
                                                viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9">
                                                </path>
                                            </svg>
                                        </span>
                                        <span>
                                            Đăng xuất
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </header>
