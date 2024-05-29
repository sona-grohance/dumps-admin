<!DOCTYPE html>
<html lang="en-us" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Exam Support</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta content="always" name="referrer">
    
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/header.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/product_en.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/foot.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}"/>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">

    <!-- Google Tag Manager -->
    
    <style>
        @media screen and (min-width: 1000px) {
                    }

        .overview {
            line-height: 30px;
        }
    </style>
</head>

<body>


<div class="container">
    <!-- 导航栏 -->
    <!-- 导航栏 -->
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
@include('partials.inc-mob')


    {{$slot}}

    @include('partials.footer')


    <script>
        function wpLoadJSOnce() {
            
            $(document).ready(function () {
                (function () {
                    var _53code = document.createElement("script");
                    _53code.src = "https://tb.53kf.com/code/code/10172212/4";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(_53code, s);
                })();
            });
    
           
            document.removeEventListener("touchmove", wpLoadJSOnce);
        }
        
        document.addEventListener("touchmove", wpLoadJSOnce);
    </script>
    
    </div>
    </body>
    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.raty.js')}}"></script>
    <script src="{{ asset('assets/js/menu.js')}}"></script>
    <script src="{{ asset('assets/js/scroll.js')}}"></script>
    <script src="{{ asset('assets/js/swiper.animate1.0.3.min.js')}}"></script>
    <script src="{{ asset('assets/js/message.js')}}"></script>
    
    <script>
        function handle() {
            let flag = /(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i
                .test(navigator.userAgent);
         
            return flag;
        }
    
        var isMobile = handle();
        //战报
        var screenWidth = document.documentElement.clientWidth;
        window.onload = function () {
            let swipers = new Swiper('.rpot', {
                init: false,
                pagination: {
                    el: '.swiper-pagination-report',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.b-n-1',
                    prevEl: '.b-p-1',
                },
    
                slidesPerView: isMobile ? 2 : 4,
                spaceBetween: screenWidth < 1600 ? 20 : 10,
                centeredSlides: isMobile,
                autoplay: {
                    delay: 3000, 
                    disableOnInteraction: false, 
                },
                observer: true,
                observeParents: true,
                observeSlideChildren: true,
                loop: true,
            });
            swipers.init();
    
            // 相关产品
            let comment = new Swiper(".comt", {
                init: false,
                pagination: {
                    el: ".swiper-pagination-comment",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".b-n-2",
                    prevEl: ".b-p-2",
                },
                slidesPerView: isMobile ? 1 : 3,
                spaceBetween: screenWidth < 1600 ? 20 : 10,
                centeredSlides: isMobile,
                autoplay: {
                    delay: 3000, 
                    disableOnInteraction: false, 
                },
                observer: true,
                observeParents: true,
                observeSlideChildren: true,
                loop: false
            });
            comment.init();
    
            // 相关产品
            let slider = new Swiper(".rrtio", {
                init: false,
                pagination: {
                    el: ".swiper-pagination-product",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".b-n-3",
                    prevEl: ".b-p-3",
                },
                slidesPerView: isMobile ? 2 : 4,
                spaceBetween: screenWidth < 1600 ? 20 : 10,
                centeredSlides: isMobile,
                autoplay: {
                    delay: 3000, 
                    disableOnInteraction: false, 
                },
                observer: true,
                observeParents: true,
                observeSlideChildren: true,
                loop: false
            });
            slider.init();
        }
    </script>
    <script>
        $(function () {
            $("#starts").raty({
                number: 5,
                path: 'assets/img/',
                half: false,
                size: 24,
                starOn: 'star-on-big.png',
                starOff: 'star-off-big.png',
                click: function (score, evt) {
                    $(this).val(score);
                }
            });
        });
    </script>
    <script>
        function ds() {
            $.ajax({
                type: "get",
                url: "https://publicsys.spotoclub.net/api/tool/get-captcha",
                dataType: "json",
                success: function (res) {
                    $("#captcha").attr("src", res.data.captcha);
                    $("input[name=unique]").val(res.data.unique);
                }
            });
        }
    
        $(function () {
            $("#captcha").bind("click", function () {
                ds();
            })
            ds();
        })
    
        flag_msg = false;
    
        function disMsg() {
            if (flag_msg == true) {
                return;
            }
            var name = $("input[name='u_name']").val();
            var email = $("input[name='u_email']").val();
            var whatsapp = $("input[name='whatsapp']").val();
            var message = $("input[name='message']").val();
            var visit_url = $(location).attr("href");
    
            if (name == '') {
                $.message({
                    message: "Please enter your name",
                    type: 'error'
                });
                return;
            }
            var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            if (!myreg.test(email)) {
                $.message({
                    message: "Please enter your email",
                    type: 'error'
                });
                return;
            }
            if (whatsapp == '' || whatsapp.length < 5) {
                $.message({
                    message: "Please enter your WhatsApp",
                    type: 'error'
                });
                return;
            }
    
            if (message == '') {
                $.message({
                    message: "Please enter your massege",
                    type: 'error'
                });
                return;
            }
    
            $.ajax({
                type: "post",
                url: "/product/dismsg",
                beforeSend: function () {
                    $(".sm1").css("background", "#999999");
                    flag_msg = true;
                },
                data: {
                    name: name,
                    email: email,
                    whatsapp: whatsapp,
                    message: message,
                    visit_url: visit_url
                },
                dataType: "json",
                success: function (res) {
                    flag_msg = false;
                    if (res.errcode == 0) {
                        $.message({
                            message: res.errmsg,
                            type: 'success'
                        });
    
                        $("input[name='u_name']").val("");
                        $("input[name='u_email']").val("");
                        $("input[name='whatsapp']").val("");
                        $("input[name='message']").val("");
                    } else {
                        $.message({
                            message: res.errmsg,
                            type: 'error'
                        });
                    }
                    $(".sm1").css("background", "#ff610f");
                }
            });
        }
    
        function getCookie(cname) {
            let name = cname + "=";
            let ca = document.cookie.split(";");
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i].trim();
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
        }
    
        $(".smt").bind("click", function () {
            var score = $("input[name=score]").val();
            var review = $("textarea[name=review]").val();
            var name = $("input[name=name]").val();
            var email = $("input[name=email]").val();
            var code = $("input[name=code]").val();
            var unique = $("input[name=unique]").val();
            var postid = $("input[name=postid]").val();
            if (score == '') {
                $.message({
                    message: "Please select your rating",
                    type: 'error'
                });
                return;
            }
            if (name == '') {
                $.message({
                    message: "Please fill in the full name",
                    type: 'error'
                });
                return;
            }
            if (email == '') {
                $.message({
                    message: "Please fill in the email address",
                    type: 'error'
                });
                return;
            }
    
            var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            if (!myreg.test(email)) {
                $.message({
                    message: "Please fill in the correct email address",
                    type: 'error'
                });
                return;
            }
            if (code == '') {
                $.message({
                    message: "Please fill in the verification code",
                    type: 'error'
                });
                return;
            }
    
            $.ajax({
                type: "post",
                url: "/product/comment",
                data: {
                    score: score,
                    review: review,
                    name: name,
                    email: email,
                    code: code,
                    unique: unique,
                    postid: postid
                },
                dataType: "json",
                success: function (res) {
                    alert(res.msg)
                    if (res.code == 0) {
                        $("textarea[name=review]").val("");
                        $("input[name=name]").val("");
                        $("input[name=email]").val("");
                        $("input[name=code]").val("");
                        $("input[name=unique]").val("");
                        ds();
                    }
                }
            });
        })
    </script>
    <script>
        $(function () {
            $(window).scroll(function () {
                if ($(document).scrollTop() >= 60) {
                    //console.log($(document).scrollTop());
                    var top = $(document).scrollTop() + 60
                    $("#buyCtn").css("top", top + "px")
                } else {
                    $("#buyCtn").css("top", "60px")
                }
            });
        })
    
        $(".tbs-title").bind('click', function () {
            var tabid = $(this).attr("tabid");
            $(".tbs-title").removeClass("active");
            $(this).addClass("active");
            $(".tbs-content").css("display", "none");
            $("#" + tabid).css("display", "block");
        })
    
        $(".more_btn").bind('click', function () {
            var pid = $(this).attr("pid");
            if ($(this).text() == "Collapse All") {
                $("." + pid).css("max-height", "310px")
                $(this).html("Read More")
            } else {
                $("." + pid).css("max-height", "unset")
                $(this).html("Collapse All")
            }
        })
    
    
        if ($('.faq').height() > 300) {
            $(".pn_faq").show();
        }
    
        $(".tbs-content").each(function (i, n) {
            var newhg = $(this).height();
            if (newhg > 300) {
                var id = $(this).attr("id");
                $(".pn_" + id).show();
            }
        })
    
    
        function tab(e) {
            let dom = e.target;
            // console.log(dom.parentNode);
            let wrap = '';
            //  console.log(dom.parentNode);
            if (dom.parentNode.className.replace(/(^\s*)|(\s*$)/g, "") == 'el-collapse-item__header') {
                wrap = dom.parentNode.parentNode.parentNode
            } else {
                wrap = dom.parentNode.parentNode
            }
            if (wrap.className.replace(/(^\s*)|(\s*$)/g, "").indexOf('show') != -1) {
                wrap.classList.remove('show')
            } else {
                wrap.classList.add('show')
            }
        }
    </script>
    
    <script>
        comment_height = 280;
        $(".comment-content").each(function (index, element) {
            var idx_height = $(this).height();
            //console.log(idx_height)
            if (comment_height < idx_height-300) {
                comment_height = idx_height-500;
            }
        })
    
        comment_height = comment_height+"px";
        $(".comment-content").css("min-height",comment_height);
    </script>
    <script>
        const tow = (n) => {
            return n >= 0 && n < 10 ? '0' + n : '' + n;
        };
        const timerClock = (startimer, endtimer) => {
            let oldTime = startimer; 
            let newTime = endtimer; 
            let second = Math.floor((newTime - oldTime) / 1000); 
            let day = Math.floor(second / 86400); 
            second = second % 86400; 
            let hour = Math.floor(second / 3600); 
            second %= 3600; 
            let minute = Math.floor(second / 60);
            second %= 60;
            return {
                day: tow(day),
                hour: tow(hour),
                minute: tow(minute),
                second: tow(second)
            }
        };
    
        let nDate = new Date(),
            oDate = Number(nDate.getTime()) + 86400 * 1000;
        clearInterval(timer);
        var timer = setInterval(() => {
            let _Date = new Date();
            let {
                day,
                hour,
                minute,
                second
            } = timerClock(_Date.getTime(), oDate);
            document.getElementsByClassName('day')[0].innerHTML = day;
            document.getElementsByClassName('hour')[0].innerHTML = hour;
            document.getElementsByClassName('minute')[0].innerHTML = minute;
            document.getElementsByClassName('second')[0].innerHTML = second;
            // time = `${day}Day ${hour}:${minute}:${second}`;
        }, 1000);
    </script>
    <script>
        
        myScroll.upScroll("demo_0","-36px",3000);
        myScroll.upScroll("demo_1","-36px",3000);
    
    </script>

    <style>
        @media screen and (min-width: 641px) {
            .flex_box {
                display: flex;
                display: -webkit-flex;
            }
        }
    </style>
    
    
    </html>