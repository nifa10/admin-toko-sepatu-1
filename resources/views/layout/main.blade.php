<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
    <meta name="author" content="AdminKit" />
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

    <link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />

    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Toko Sepatu</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">Pages</li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('/') }}">
                            <i class="align-middle" data-feather="sliders"></i>
                            <span class="align-middle">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('item') }}">
                            <i class="align-middle" data-feather="item"></i>
                            <span class="align-middle">Item</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('customer') }}">
                            <i class="align-middle" data-feather="item"></i>
                            <span class="align-middle">Customer</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('order') }}">
                            <i class="align-middle" data-feather="item"></i>
                            <span class="align-middle">Order</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="settings"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ url('/brand') }}">Brand</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ url('/category') }}">Category</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>

                <form class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search…" aria-label="Search" />
                        <button class="btn" type="button">
                            <i class="align-middle" data-feather="search"></i>
                        </button>
                    </div>
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    {{-- <i class="align-middle" data-feather="bell"></i> --}}
                                    <i class="fa fa-bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">Notifications</div>

                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">Messages</div>
                                </div>

                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-toggle="dropdown">
                                <i class="align-middle fa fa" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-toggle="dropdown">
                                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1"
                                    alt="Charles Hall" />
                                <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1"
                                        data-feather="user"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle mr-1"
                                        data-feather="pie-chart"></i>
                                    Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1"
                                        data-feather="settings"></i>
                                    Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle mr-1"
                                        data-feather="help-circle"></i>
                                    Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row mb-2 mb-xl-3">
                        <div class="col-auto d-none d-sm-block">
                            <h3>@yield('titlePage')</h3>
                        </div>
                    </div>
                    @yield('main')
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <p class="mb-0">
                                <a href="index.html" class="text-muted"><strong>Toko Sepatu</strong></a>
                                &copy;
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
