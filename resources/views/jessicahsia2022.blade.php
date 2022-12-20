<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hambar-box.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jessicahsia.css') }}">
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
                <li onclick="myArea()">My Work</li>
                <li onclick="teamArea()">80 sprint</li>
                <li onclick="resumeArea()">Resume</li>
                <a href="https://www.facebook.com/jessica.hsia.5"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://line.me/ti/p/tbYoGhY8QY"><i class="fa-brands fa-line"></i></a>
            </ul>
        </ul>
        <ul id="my_name">
            <li>Jessica Hsia</li>
        </ul>
    </nav>
    <header>
        <ul class="btn">
            <li onclick="myArea()">My Work</li>
            <li onclick="teamArea()">80 sprint</li>
            <li onclick="resumeArea()">Resume</li>
        </ul>
        <ul class="social-btn">
            <a href="https://www.facebook.com/jessica.hsia.5"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://line.me/ti/p/tbYoGhY8QY"><i class="fa-brands fa-line"></i></a>
        </ul>
    </header>
    <main>

        <ul class="works">
            @foreach ($data as $data)
            <li>
                @if ($data->img == null || $data->img == '')
                <div class="no-img">J</div>
                @else
                <a href="/{{$data->pagelink}}"><img src="{{$data->img}}"></a>
                @endif

                <p>{{$data->title}}</p>
                <a href="https://github.com/JessicaHsia/{{$data->link}}">Github<i class="fa-solid fa-right-long"></i></a>
            </li>
            @endforeach
        </ul>

        <ul class="team-project">
            <li>
                <a
                    href="https://docs.google.com/document/d/1QcvhOhkz27QBkRhO-9rM6GPxk1Kt4OtP/edit?usp=sharing&ouid=103935938099245850249&rtpof=true&sd=true"><img
                        src="./img/frontdesk-sitemap.jpg" alt="">企劃-前台網站地圖</a>

                <a href="https://111-08-fcu-dessertcave.dev-hub.io/about_us"><img src="./img/dessert-cave-story.jpg"
                        alt="">程式-前台介面</a>
            </li>
            <li>
                <a
                    href="https://docs.google.com/document/d/1n_jdyx_UORMY_LPTnq_LzlMk-kuhmgEZ/edit?usp=sharing&ouid=103935938099245850249&rtpof=true&sd=true"><img
                        src="./img/backdesk-sitemap.jpg" alt="">企劃-後台網站地圖</a>

                <a href="https://jessicahsia.github.io/BackDesk/"><img src="./img/backdesk.jpg"
                        alt="">程式-後台介面</a>
            </li>

        </ul>
        <ul class="resume">
            <a href="./img/jh_resume.jpg" id="openimg-newpage" target="_blank"><img
                    src="./img/jh_resume.jpg" alt=""></a>
            <a href="./img/jh_resume2.jpg" id="openimg-newpage" target="_blank"><img
                    src="./img/jh_resume2.jpg" alt=""></a>
        </ul>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        const main = document.querySelector('main');
        const loadingpag = document.querySelector('#preloader');
        const menubox = document.querySelector('#menu_all');
        const menuList = document.querySelector('.menu-1');
        const lineM = document.querySelector('.menu_line');

        const swiperArea = document.querySelector('.swiper-area');
        const teamProject = document.querySelector('.team-project');
        const resume = document.querySelector('.resume');
        const worksArea = document.querySelector('.works');


        //loading頁面結束設定
        window.addEventListener("load", function(event) {
            setTimeout(() => loadingpag.classList.add('offload'), 3000);
        });

        //hambar設定
        menubox.addEventListener('click', function() {
            menuList.classList.toggle('menu-show');
        });

        main.addEventListener('click', function() {
            menuList.classList.remove('menu-show');
        })


        // 頁面切換設定
        function teamArea() {
            // swiperArea.style.display = 'none';
            teamProject.style.display = 'flex';
            resume.style.display = 'none';
            worksArea.style.display = 'none';
        }

        function myArea() {
            // swiperArea.style.display = 'block';
            teamProject.style.display = 'none';
            resume.style.display = 'none';
            worksArea.style.display = 'flex';
        }

        function resumeArea() {
            // swiperArea.style.display = 'none';
            teamProject.style.display = 'none';
            resume.style.display = 'block';
            worksArea.style.display = 'none';
        }



        var swiper = new Swiper(".mySwiper", {
            effect: "cube",
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 10000,
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

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
