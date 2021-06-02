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
    <link rel="icon" type="image/png" href="{{asset("assets/img/favicon.png")}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/img/icon/192x192.png")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <link rel="manifest" href="{{asset("__manifest.json")}}">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="{{ route('home') }}" class="headerButton">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Chat</div>
        <div class="right">
            <a href="javascript:;" class="headerButton">
                <ion-icon name="videocam-outline"></ion-icon>
            </a>
            <a href="javascript:;" class="headerButton">
                <ion-icon name="call-outline"></ion-icon>
                <span class="badge badge-danger">1</span>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div id="fb-root"></div>

        <!-- Your Plugin chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "102138695427729");
            chatbox.setAttribute("attribution", "biz_inbox");
            window.fbAsyncInit = function() {
                FB.init({
                xfbml            : true,
                version          : 'v10.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </div>
    <!-- * Share Action Sheet -->

    <!-- chat footer -->
    <div class="chatFooter">

    </div>
    <!-- * chat footer -->

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


</body>

</html>
