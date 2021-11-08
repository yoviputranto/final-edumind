<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EduMind | Dashboard</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashboard') }}/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('dashboard') }}/images/favicon.png" />
</head>

<body>
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container-fluid">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                    <ul class="navbar-nav navbar-nav-left">
                        <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                            <a href="#" class="nav-link horizontal-nav-left-menu"><i
                                    class="mdi mdi-format-list-bulleted"></i></a>
                        </li>

                        <li class="nav-item nav-search d-none d-lg-block ml-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="search">
                                        <i class="mdi mdi-magnify"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="search" aria-label="search"
                                    aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo" href="index.html"><img class="img-fluid"
                                src="{{ asset('frontend/assets/ic/logo-horizontal-dark.png') }}" width="100"></a>
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img
                                src="{{ asset('dashboard') }}/images/logo-mini.svg" alt="logo" /></a>
                    </div>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown  d-lg-flex d-none">
                            <form action="{{ route('beranda') }}" method="get">
                                <button type="submit" class="btn btn-inverse-primary btn-sm">Go Back </button>
                            </form>
                        </li>
                        {{-- <li class="nav-item dropdown d-lg-flex d-none">
                            <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm"
                                id="nreportDropdown" href="#" data-toggle="dropdown">
                                Reports
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="nreportDropdown">
                                <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                                <a class="dropdown-item">
                                    <i class="mdi mdi-file-pdf text-primary"></i>
                                    Pdf
                                </a>
                                <a class="dropdown-item">
                                    <i class="mdi mdi-file-excel text-primary"></i>
                                    Exel
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown d-lg-flex d-none">
                            <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                        </li> --}}
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                                <span class="online-status"></span>
                                <img src="{{ asset('dashboard') }}/images/faces/face28.png" alt="profile" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary"></i>
                                    Settings
                                </a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="horizontal-menu-toggle">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </div>
        </nav>
        <nav class="bottom-navbar">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/admin') ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}">
                            <i class="mdi mdi-file-document-box menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="mdi mdi-cube-outline menu-icon"></i>
                            <span class="menu-title">Artikel</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->is('/admin/articles') ? 'active' : '' }}"
                                        href="{{ route('articles.index') }}">Artikel</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->is('/admin/category-articles') ? 'active' : '' }}"
                                        href="{{ route('category-articles.index') }}">Kategori</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('diskusi.index') }}" class="nav-link">
                            <i class="mdi mdi-chart-areaspline menu-icon"></i>
                            <span class="menu-title">Diskusi</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->is('/admin/diskusi') ? 'active' : '' }}"
                                        href="{{ route('diskusi.index') }}">Pertanyaan</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->is('/admin/jawab') ? 'active' : '' }}"
                                        href="{{ route('jawaban.index') }}">Jawaban</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->is('/admin/komentar') ? 'active' : '' }}"
                                        href="{{ route('komentar.index') }}">Komentar</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->is('/admin/jawab_komentar') ? 'active' : '' }}"
                                        href="{{ route('jawab-komentar.index') }}">Jawaban Komentar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="mdi mdi-cube-outline menu-icon"></i>
                            <span class="menu-title">Event</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->is('/admin/events') ? 'active' : '' }}"
                                        href="{{ route('events.index') }}">Event</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->is('/admin/category-events') ? 'active' : '' }}"
                                        href="{{ route('category-events.index') }}">Kategori</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->is('/admin/category-events') ? 'active' : '' }}"
                                        href="{{ route('jenis-events.index') }}">Jenis</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/admin/daftar-events') ? 'active' : '' }}"
                            href="{{ route('daftar-events.index') }}">
                            <i class="mdi mdi-file-document-box menu-icon"></i>
                            <span class="menu-title">Daftar Event</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="pages/tables/basic-table.html" class="nav-link">
                            <i class="mdi mdi-grid menu-icon"></i>
                            <span class="menu-title">Workshop</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/icons/mdi.html" class="nav-link">
                            <i class="mdi mdi-emoticon menu-icon"></i>
                            <span class="menu-title">Kursus</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </nav>
    </div>
    @yield('content')
    <footer class="footer">
        <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                    bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                        href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                        templates</a> from Bootstrapdash.com</span>
            </div>
        </div>
    </footer>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{ asset('dashboard') }}/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('dashboard') }}/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="{{ asset('dashboard') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('dashboard') }}/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('dashboard') }}/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
    <script src="{{ asset('dashboard') }}/vendors/justgage/raphael-2.1.4.min.js"></script>
    <script src="{{ asset('dashboard') }}/vendors/justgage/justgage.js"></script>
    <!-- Custom js for this page-->
    <script src="{{ asset('dashboard') }}/js/dashboard.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- End custom js for this page-->
    @stack('script')
</body>

</html>
