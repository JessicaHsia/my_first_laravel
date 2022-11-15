<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/loading.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/hambar-box.css')}}">
    <link rel="stylesheet" href="{{asset('css/jessicahsia.css')}}">
    <title>JessicaHsia 2022.08 - 2022.11</title>
</head>

<body>
    <div id="preloader">
        <div id="container">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
            <div class="circle5"></div>
        </div>
        <div class="loading">
            <h3>LOADING</h3>
        </div>
    </div>
    <nav>
        <ul class="hambar-box">
            <label for="menu-switch" class="menu_all" id="menu_all">
                <div>
                    <span class="menu_line"></span>
                </div>
            </label>
            <input type="checkbox" id="menu-switch" hidden>

            <ul class="menu-1">
                <li><a href="#">My Project</a></li>
                <li><a href="#">80 sprint</a></li>
                <li><a href="#">Resume</a></li>
            </ul>
        </ul>
        <ul id="my_name">
            <li>Jessica Hsia</li>
        </ul>
    </nav>
    <header>
        <ul class="btn">
            <li><a href="#">My Project</a></li>
            <li><a href="#">80 sprint</a></li>
            <li><a href="#">Resume</a></li>
        </ul>
        <ul class="social-btn">
            <a href="https://www.facebook.com/jessica.hsia.5"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://line.me/ti/p/tbYoGhY8QY"><i class="fa-brands fa-line"></i></a>
        </ul>
    </header>
    <main>
        <div class="swiper-scrollbar"></div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/weather-map">
                        <img src="{{asset('img/weathermap.jpg')}}" />
                    </a>
                    <p><a href="https://github.com/JessicaHsia/WeatherMap.git">Weather Map</a></p>
                </div>
                <div class="swiper-slide">
                    <a href="/colorgame">
                        <img src="{{asset('img/colorgame.jpg')}}" />
                    </a>
                    <p><a href="https://github.com/JessicaHsia/Hsia.git">Color Game</a></p>
                </div>
                <div class="swiper-slide">
                    <a href="/bmi-test">
                        <img src="{{asset('img/BMI.jpg')}}" />
                    </a>
                    <p><a href="https://github.com/JessicaHsia/BMI.git">BMI</a></p>
                </div>
                <div class="swiper-slide">
                    <a href="/microsoft-index">
                        <img src="{{asset('img/microsoftindex.jpg')}}" />
                    </a>
                    <p><a href="https://github.com/JessicaHsia/MicrosoftIndex.git">Microsoft Index</a></p>
                </div>
            </div>
        </div>

        <!-- <ul id="my_project">
            <li>BMI</li>
            <li>Weather MAp</li>
            <li>Color game</li>
            <li>Moon Card</li>
            <li>Microsoft Index</li>
            <li></li>
        </ul>
        <ul id="team_project"></ul>
        <ul id="resume"></ul> -->
    </main>
    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>

        const outbody = document.querySelector('body');
        const loadingpag = document.querySelector('#preloader');
        const menubox = document.querySelector('#menu_all');
        const menuList = document.querySelector('.menu-1');
        const lineM = document.querySelector('.menu_line');


        //loading頁面結束設定
        window.addEventListener("load", function (event) {
            setTimeout(() => loadingpag.classList.add('offload'), 3000);
        });


        menubox.addEventListener('click', function(){
            menuList.classList.toggle('menu-show');
        })



        var swiper = new Swiper(".mySwiper", {
            effect: "cube",
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 6000,
            },
            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
            },
            scrollbar: {
                el: ".swiper-scrollbar",
            },
        });
    </script>

</body>

</html>
