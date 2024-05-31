<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Support Exam</title>
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta content="always" name="referrer">
       
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/header.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/entry-udlite-baseline.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/category-udlite-app.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/foot.css')}}" />

    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-140936863-2');
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .filter-panel-paginated-course-list-2F0x1 div{
            margin-bottom: 20px;
            text-align: unset!important;
        }
        .filter-panel-paginated-course-list-2F0x1 h2 {
            font-size: 32px;
            margin-bottom: 20px;
            line-height: 1.2em;
            font-weight: 400;
            text-transform: none;
            text-align: unset!important;
        }
        .filter-panel-paginated-course-list-2F0x1 h2 b{
            font-weight: unset!important;
        }

        .filter-panel-paginated-course-list-2F0x1 h3 {
            font-size: 25px;
            margin-bottom: 20px;
            line-height: 1.2em;
            font-weight: 400;
            text-transform: none;
        }
        .filter-panel-paginated-course-list-2F0x1 p {
            margin-bottom: 1.5em;
        }
        .filter-panel-paginated-course-list-2F0x1 ol, ul {
            margin: 0 0 1.5em 2em;
        }
        .filter-panel-paginated-course-list-2F0x1 li {
            list-style-type: disc;
            /*margin-bottom: 1.5em;*/
        }

        .ez-toc-title-container {
            background: #f9f9f9;
            border: 1px solid #aaa;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
            display: table;
            margin-bottom: 1em;
            padding: 10px;
            position: relative;
            width: auto;
        }
        .ullist p.ez-toc-title {
            text-align: left;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            font-weight: 500;
            font-size: 130%;
        }

        .ullist{
            background: #edf6ff;
            border: 1px solid #aaa;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
            display: table;
            margin-bottom: 1em;
            padding: 10px;
            position: relative;
            width: auto;
            margin-top: 10px;
        }
        .ullist ul{
            margin: 0 2rem 0 2rem!important;
        }

        .ullist li {
            background: 0 0;
            list-style: none;
            line-height: 1.8;
            overflow: hidden;
            z-index: 1;
        }

        .ullist li a {
            color: #444;
            box-shadow: none;
            text-decoration: none;
            text-shadow: none;
            font-weight: 500;
        }
        .ullist li a:visited{
            color: #9f9f9f;
        }
        .relate-lab a{
            color: #186fc4;
            line-height: 30px;
            cursor: pointer;
        }
        .relate-lab a:visited{
            color: #9f9f9f;
        }
    </style>
</head>
<body>



<div class="container">
    
<script src="{{ asset('assets/js/jquery.js')}}"></script>
<script src="{{ asset('assets/js/menu.js')}}"></script>
<script src="{{ asset('assets/js/jquery.cookie.js')}}"></script>
<script>
    cw = document.body.clientWidth;
    if (cw < 1000) {
        document.getElementsByClassName('container')[0].classList.add('isMobile')
    }
    window.onresize = function () {
        cw = document.body.clientWidth;
        if (cw < 1000) {
            document.getElementsByClassName('container')[0].classList.add('isMobile')
        }
    };

    // 导航栏初始化
    setTimeout(() => {
        jQuery('.nav_ctn_mobile nav').meanmenu();
    }, 300)

    function logout() {
        $.cookie('user_id', "", {expires: -1, path: "/"});
        $.cookie('user_email', "", {expires: -1, path: "/"});
        location.reload();
    }
</script>
@include('partials.header')


{{$slot}}

</div>
</body>
<script src="{{ asset('assets/js/jquery.js')}}"></script>
<script src="{{ asset('assets/js/menu.js')}}"></script>
<style>
    @media screen and (min-width: 641px) {
        .flex_box {
            display: flex;
            display: -webkit-flex;
        }
    }
</style>

</html>