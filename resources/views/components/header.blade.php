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
                            <a class="nav-link text-white" href="{{ route('job.index') }}">Việc làm IT</a>
                        </li>
                        <li class="nav-item p-2">
                            @if (Auth::check())
                                @if (Auth::user()->role == 2 || Auth::user()->role == 1)
                                    <a class="nav-link text-white" href="{{ route('cv.create') }}">Tạo CV</a>
                                @endif
                            @elseif(!Auth::check())
                                <a class="nav-link text-white" href="{{ asset('login') }}">Tạo CV</a>
                            @endif
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
                                    <a title="Bảng điều khiển" class="text-dark nav-link p-0"
                                        href="{{ route('user.edit', Auth::user()->id) }}">
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
                                    <a title="Bảng điều khiển" class="text-dark nav-link p-0"
                                        href="{{ route('cv.index') }}">
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
                                    <a title="Bảng điều khiển" class="text-dark nav-link p-0"
                                        href="{{ route('jobTracking.index') }}">
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
    <div class="alert notification d-flex justify-content-center align-items-center m-0 position-relative">
        <div class="success" style="position: absolute;top: 0;">
            @if (Session::has('success'))
                <div id="success-notification" class="alert alert-success alert-dismissible fade show d-flex"
                    role="alert" style="z-index: 999999;">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 4.38462C7.79374 4.38462 4.38462 7.79374 4.38462 12C4.38462 16.2063 7.79374 19.6154 12 19.6154C16.2063 19.6154 19.6154 16.2063 19.6154 12C19.6154 7.79374 16.2063 4.38462 12 4.38462ZM3 12C3 7.02903 7.02903 3 12 3C16.971 3 21 7.02903 21 12C21 16.971 16.971 21 12 21C7.02903 21 3 16.971 3 12Z"
                                fill="#ffff" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.1818 9.66432C16.4522 9.93468 16.4522 10.373 16.1818 10.6434L11.5664 15.2588C11.2961 15.5291 10.8577 15.5291 10.5874 15.2588L7.81813 12.4895C7.54777 12.2192 7.54777 11.7808 7.81813 11.5105C8.08849 11.2401 8.52684 11.2401 8.7972 11.5105L11.0769 13.7902L15.2027 9.66432C15.4731 9.39396 15.9115 9.39396 16.1818 9.66432Z"
                                fill="#ffff" />
                        </svg>
                    </div>
                    <div class="message pl-3">
                        {{ Session::get('success') }}
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span class="d-flex" aria-hidden="true"><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 18L6 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M18 6L6 18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            @endif
        </div>
        <div class="danger" style="position: absolute;top: 0;">
            @if (Session::has('error'))
                <div id="error-notification" class="alert d-flex alert-danger alert-dismissible fade show m-0"
                    role="alert" style="z-index: 999999;">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 4.38462C7.79374 4.38462 4.38462 7.79374 4.38462 12C4.38462 16.2063 7.79374 19.6154 12 19.6154C16.2063 19.6154 19.6154 16.2063 19.6154 12C19.6154 7.79374 16.2063 4.38462 12 4.38462ZM12 21C7.02903 21 3 16.971 3 12C3 7.02903 7.02903 3 12 3C16.971 3 21 7.02903 21 12C21 16.971 16.971 21 12 21Z"
                                fill="#ffff" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 7.15384C12.3824 7.15384 12.6923 7.4638 12.6923 7.84615V12.4615C12.6923 12.8439 12.3824 13.1538 12 13.1538C11.6177 13.1538 11.3077 12.8439 11.3077 12.4615V7.84615C11.3077 7.4638 11.6177 7.15384 12 7.15384Z"
                                fill="#ffff" />
                            <circle cx="12" cy="15.6923" r="0.923077" fill="#ffff" />
                        </svg>
                    </div>
                    <div class="message pl-3">
                        {{ Session::get('error') }}
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span class="d-flex" aria-hidden="true"><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 18L6 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M18 6L6 18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            @endif
        </div>
        <div class="warning" style="position: absolute;top: 0px;">
            @if (Session::has('warning'))
                <div id="error-notification" class="alert d-flex alert-warning alert-dismissible fade show m-0"
                    role="alert" style="z-index: 999999;">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 4.38462C7.79374 4.38462 4.38462 7.79374 4.38462 12C4.38462 16.2063 7.79374 19.6154 12 19.6154C16.2063 19.6154 19.6154 16.2063 19.6154 12C19.6154 7.79374 16.2063 4.38462 12 4.38462ZM12 21C7.02903 21 3 16.971 3 12C3 7.02903 7.02903 3 12 3C16.971 3 21 7.02903 21 12C21 16.971 16.971 21 12 21Z"
                                fill="#ffff" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 7.15384C12.3824 7.15384 12.6923 7.4638 12.6923 7.84615V12.4615C12.6923 12.8439 12.3824 13.1538 12 13.1538C11.6177 13.1538 11.3077 12.8439 11.3077 12.4615V7.84615C11.3077 7.4638 11.6177 7.15384 12 7.15384Z"
                                fill="#ffff" />
                            <circle cx="12" cy="15.6923" r="0.923077" fill="#ffff" />
                        </svg>
                    </div>
                    <div class="message pl-3">
                        {{ Session::get('warning') }}
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span class="d-flex" aria-hidden="true"><svg width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 18L6 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M18 6L6 18" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
            @endif
        </div>
    </div>
