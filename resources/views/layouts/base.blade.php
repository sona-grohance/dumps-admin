<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>SPOTO Online IT Certification | Cisco, AWS, PMP Certification Courses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-site-verification" content="">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
   
 
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/header.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/index.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/foot.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}" />




</head>

<body>

    <div class="container">
        <!-- 导航栏 -->
        <script src="{{ asset('assets/js/jquery.js')}}"></script>
        <script src="{{ asset('assets/js/menu.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.cookie.js')}}"></script>
        <script>
            cw = document.body.clientWidth;
            if (cw < 1000) {
                document.getElementsByClassName('container')[0].classList.add('isMobile')
            }
            window.onresize = function() {
                cw = document.body.clientWidth;
                if (cw < 1000) {
                    document.getElementsByClassName('container')[0].classList.add('isMobile')
                }
            };

            
            setTimeout(() => {
                jQuery('.nav_ctn_mobile nav').meanmenu();
            }, 300)

            function logout() {
                $.cookie('user_id', "", {
                    expires: -1,
                    path: "/"
                });
                $.cookie('user_email', "", {
                    expires: -1,
                    path: "/"
                });
                location.reload();
            }
        </script>


        @include('partials.header')
        @include('partials.inc-mob')


        {{$slot}}

        @include('partials.footer')
        

    </div>
</body>
<style>
    @media screen and (min-width: 641px) {
        .flex_box {
            display: flex;
            display: -webkit-flex;
        }
    }
</style>
<script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>



</html>