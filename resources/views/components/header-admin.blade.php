<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/774b78ff1e.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    {{-- Css --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ asset('admin.index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ asset('admin.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ asset('admin.users.index') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Quản lý user</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ asset('admin.employer.index') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Quản lý nhà tuyển dụng</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('recruitment.index') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Danh sách ứng tuyển</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ asset('admin.job.index') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Danh sách công việc</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ asset('admin.blog.index') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Quản lý Blog</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('listCV') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Quản lý CV</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('listJobTracking') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Công việc theo dõi</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                @if (Auth::check() && Auth::user()->role == 1)
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                @endif
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="alert notification d-flex justify-content-center align-items-center m-0 position-relative">
                    <div class="success" style="position: absolute;top: 0;">
                        @if (Session::has('success'))
                            <div id="notification" class="alert alert-success alert-dismissible fade show"
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
                                            <path d="M18 18L6 6" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18 6L6 18" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="danger" style="position: absolute;top: 60px;">
                        @if (Session::has('error'))
                            <div id="notification" class="alert alert-danger alert-dismissible fade show m-0"
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
                                            <path d="M18 18L6 6" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18 6L6 18" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
