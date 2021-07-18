<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Learn Online</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    {{-- <link rel="icon" type="image/png" href="{{asset("assets/img/favicon.png")}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/img/icon/192x192.png")}}">
    <link rel="manifest" href="{{asset("__manifest.json")}}"> --}}
    @laravelPWA
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="{{ url()->previous() }}" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">  @yield('pageTitle') </div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">
        {{-- content --}}

        <div class="listview image-listview flush transparent mt-3 mb-2">
            @yield('content')
        </div>

        {{-- content --}}

        <!-- app footer -->
        <div class="appFooter">
            <div class="footer-title">
                Copyright © Nguyen Tung Lam. All Rights Reserved.
            </div>
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->

    <!-- Action Sheet Inset Exam -->
    <div class="modal fade action-sheet inset" id="actionSheetInset" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Chọn môn học</h5>
                </div>
                <div class="modal-body">
                    <ul class="action-button-list">
                        <li>
                            <a href="{{ route('exam', ['id' => \App\Models\Subject::SUBJECT_ID_1]) }}" class="btn btn-list text-primary" >
                                <span>Tiếng Việt</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('exam', ['id' => \App\Models\Subject::SUBJECT_ID_2]) }}" class="btn btn-list">
                                <span>Toán</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('exam', ['id' => \App\Models\Subject::SUBJECT_ID_3]) }}" class="btn btn-list">
                                <span>Tiếng Anh</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('exam', ['id' => \App\Models\Subject::SUBJECT_ID_4]) }}" class="btn btn-list" >
                                <span>Khoa Học</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('exam', ['id' => \App\Models\Subject::SUBJECT_ID_5]) }}" class="btn btn-list">
                                <span>Tin Học</span>
                            </a>
                        </li>
                        <li class="action-divider"></li>
                        <li>
                            <a href="#" class="btn btn-list text-danger" data-dismiss="modal">
                                <span>Close</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- * Action Sheet Inset Exam -->

    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="{{ route('home') }}" class="item {{ request()->routeIs('home') ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
            </div>
        </a>
        <a href="{{ route('course') }}" class="item {{ request()->routeIs('course') ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="bookmarks-outline"></ion-icon>
            </div>
        </a>
        <a href="javascript:;" class="item {{ request()->is('exam/*') ? 'active' : '' }}" data-toggle="modal" data-target="#actionSheetInset">
            <div class="col">
                <ion-icon name="pencil-outline"></ion-icon>
            </div>
        </a>
        <a href="{{ route('chat') }}" class="item {{ request()->routeIs('chat') ? 'active' : '' }}">
            <div class="col">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                <span class="badge badge-danger">5</span>
            </div>
        </a>
        <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">

                    <!-- profile box -->
                    <div class="profileBox">
                        <div class="image-wrapper">
                            <img src="https://scontent-hkt1-1.xx.fbcdn.net/v/t1.6435-9/192656313_1229849174141206_4845823471560590426_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=uKUv_rFZlvAAX-GTNNF&_nc_ht=scontent-hkt1-1.xx&oh=9778ab2b023c6f94e9faf6aa6f38793c&oe=60F97410" alt="image" class="imaged rounded">
                        </div>
                        <div class="in">
                            <strong>{{ Auth::user()->name }}</strong>
                            <div class="text-muted">
                                <ion-icon name="location"></ion-icon>
                                Hà Nội
                            </div>
                        </div>
                        <a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
                            <ion-icon name="close"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->

                    <ul class="listview flush transparent no-line image-listview mt-2">
                        <li>
                            <a href="{{ route('notification.list') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="notifications-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Notification
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('home') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Home
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('course') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="cube-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Khóa Học
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="item" data-toggle="modal" data-target="#actionSheetInset">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="layers-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Thi Online</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('chat') }}" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Hỏi Đáp</div>
                                    <span class="badge badge-danger">5</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="moon-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Dark Mode</div>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input dark-mode-switch"
                                            id="darkmodesidebar">
                                        <label class="custom-control-label" for="darkmodesidebar"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    {{-- <div class="listview-title mt-2 mb-1">
                        <span>Friends</span>
                    </div>
                    <ul class="listview image-listview flush transparent no-line">
                        <li>
                            <a href="page-chat.html" class="item">
                                <img src="assets/img/sample/avatar/avatar7.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Sophie Asveld</div>
                                </div>
                            </a>
                        </li>
                    </ul> --}}
                    <button type="button" class="btn btn-secondary mr-05 mb-1"
                    onclick="notification('notification-6' , 3000)">Auto Close (3s)</button>
                </div>

                <!-- sidebar buttons -->
                <div class="sidebar-buttons">
                    <a href="javascript:;" class="button">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                    <a href="javascript:;" class="button">
                        <ion-icon name="archive-outline"></ion-icon>
                    </a>
                    <a href="javascript:;" class="button">
                        <ion-icon name="settings-outline"></ion-icon>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="button">
                        @csrf
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                        this.closest('form').submit();" class="button">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </a>
                    </form>

                </div>
                <!-- * sidebar buttons -->
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->

    <!-- android style -->
    <div id="notification-6" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <strong>Notification</strong>
                    <span>just now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Auto close in 3 seconds.</h3>
                    <div class="text">
                        Lorem ipsum dolor sit amet.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * android style -->
    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{asset("assets/js/lib/jquery-3.4.1.min.js")}}"></script>
    <!-- Bootstrap-->
    <script src="{{asset("assets/js/lib/popper.min.js")}}"></script>
    <script src="{{asset("assets/js/lib/bootstrap.min.js")}}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{asset("assets/js/plugins/owl-carousel/owl.carousel.min.js")}}"></script>
    <!-- jQuery Circle Progress -->
    <script src="{{asset("assets/js/plugins/jquery-circle-progress/circle-progress.min.js")}}"></script>
    <!-- Base Js File -->
    <script src="{{asset("assets/js/base.js")}}"></script>
    @stack('scripts')
</body>

</html>
