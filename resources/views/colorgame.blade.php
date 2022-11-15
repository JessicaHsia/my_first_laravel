<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/game.css')}}">
    <title>Jessica's Color Game</title>
</head>

<body>
    <header>
        <!-- <button id="goingGame"> <span>START GAME</span></button> -->
        <input type="button" id="btn_Start" value="START GAME">
        <ul>
            <li>點擊StartGame開始遊戲</li>
            <li>時間計時30秒後即結束遊戲</li>
            <li>測試自己辨識顏色的能力</li>
            <li>點對顏色+5分並進入下一個關卡</li>
            <li>點錯顏色方塊或是提示都會扣 -5分</li>
            <li>GO!GO!加油喔！</li>
        </ul>
        <ul><a href="/"><i class="fa-regular fa-house"></i></a></ul>
    </header>

    <main>
        <div id="main_top" class="top">
            <div class="score" id="score"></div>
            <div id="timeLine" class="timeLine"></div>
        </div>
        <div id="main_in" class="middle">
            <div class="square_container">
                <!-- <div id="square" onclick="checkanswer(false)" style="width:50% ;height:50%"></div>
                <div id="squareans" onclick="checkansweㄦr(true)" style="width:50% ;height:50%"></div> -->
            </div>
        </div>
        <div class="main_down">
            <input type="button" value="TIME-STOP" class="btn_Stop">
            <input type="button" value="NEED-HELP" class="btn_Help">
            <!-- <input type="button" value="PASS" id="btn_Pass"> -->
        </div>
    </main>

    <footer>
        <div>
            <h1>你的分數</h1>
        </div>
        <div class="scoreSum"></div>
        <li class="conment"></li>
        <!-- <li>分數30分以下 -> 這....要練練喔！眼睛請張開！</li>
        <li>分數60分以下 -> 去看看遠方的樹木🌲，再來一次</li>
        <li>分數80分以下 -> 還行，可能手抖了一下</li>
        <li>分數90分以上 -> 鷹眼來著！</li> -->
        <input type="button" id="btn_Again" value="PLAY AGAIN">
    </footer>

    <script>
        const goGame = document.querySelector('#btn_Start');
        const playAgain = document.querySelector('#btn_Again');
        const header = document.querySelector('header');
        const main = document.querySelector('main');
        const footer = document.querySelector('footer');
        const gameScore = document.querySelector('#score');
        const timeLine = document.querySelector('#timeLine');
        const container = document.querySelector('.square_container');
        const btnStop = document.querySelector('.btn_Stop');
        const btnHelp = document.querySelector('.btn_Help');
        const scoreSum = document.querySelector('.scoreSum');
        const conment = document.querySelector('.conment');
        const down = document.querySelector('.main_down')

        // console.log(gameScore, timeLine);
        var ans;
        var squarelevel = 2;
        //答案判斷
        function checkAnswer(guess) {
            if (guess) {  //因為guess是布林值，所以可以直接放入條件即可
                //分數加5
                gameScore.innerHTML = parseInt(gameScore.innerHTML) + 5;
                //清空square
                container.innerHTML = '';

                if (80 <= gameScore.innerHTML && gameScore.innerHTML < 100 && squarelevel < 10) {
                    squarelevel = 10;
                } else if (60 <= gameScore.innerHTML && gameScore.innerHTML < 80 && squarelevel < 8) {
                    squarelevel = 8;
                } else if (40 <= gameScore.innerHTML && gameScore.innerHTML < 60 && squarelevel < 6) {
                    squarelevel = 6;
                } else if (20 <= gameScore.innerHTML && gameScore.innerHTML < 40 && squarelevel < 3) {
                    squarelevel = 3;
                } else if (gameScore.innerHTML < 20 && squarelevel < 3) {
                    squarelevel = 2;
                } else {
                    //games over
                }

                r = Math.floor(Math.random() * 256)
                g = Math.floor(Math.random() * 256)
                b = Math.floor(Math.random() * 256)

                ans = Math.floor(Math.random() * (squarelevel * squarelevel));
                console.log(ans);
                for (let i = 0; i < (squarelevel * squarelevel); i++) {
                    //亂數產生answer
                    if (i == ans) {
                        container.innerHTML += `<div onclick="checkAnswer(true)" class="squareans" style="width:${100 / squarelevel}% ;height:${100 / squarelevel}%; background-color:rgb(${r}, ${g}, ${b}); opacity:0.5;"></div>`;
                    } else {
                        container.innerHTML += `<div onclick="checkAnswer(false)" class="square" style="width:${100 / squarelevel}% ;height:${100 / squarelevel}%; background-color:rgb(${r}, ${g}, ${b});"></div>`;
                    }
                }
            } else {
                gameScore.innerHTML = parseInt(gameScore.innerHTML) - 5;
            }

        }



        goGame.onclick = function () {
            //點擊START GAME跳轉畫面
            //分數版清空
            gameScore.innerHTML = 0;

            //將計時計重置 30s
            var timeleft = 30;
            timeLine.innerHTML = 'Time:  ' + timeleft + 'S';

            //打開第二頁
            main.classList.add('open');


            //方塊生成

             r = Math.floor(Math.random()* 200)
             g = Math.floor(Math.random()* 200)
             b = Math.floor(Math.random()* 200)

            ans = Math.floor(Math.random() * (squarelevel * squarelevel));

            for (let i = 0; i < squarelevel * squarelevel; i++) {
                // console.log(ans, squarelevel);
                //亂數產生answer
                if (i == ans) {
                    container.innerHTML += `<div onclick="checkAnswer(true)" class="squareans" style="width:${100 / squarelevel}% ;height:${100 / squarelevel}%; background-color:rgb(${r}, ${g}, ${b}); opacity:0.5;"></div>`;
                } else {
                    container.innerHTML += `<div onclick="checkAnswer(false)" class="square" style="width:${100 / squarelevel}% ;height:${100 / squarelevel}%; background-color:rgb(${r}, ${g}, ${b});"></div>`;
                }
            }


            //關閉起始畫面
            header.classList.add('close')
            footer.classList.add('close');


            //計時器開始計時
            //所有方塊都綁定同一個function 執行時會檢查正確答案（會需要方塊傳參數）

            var timer1 = setInterval(function () { //匿名function
                timeleft = timeleft - 1; //開始倒數
                timeLine.innerHTML = 'Time:  ' + timeleft + 'S'
                if(timeleft == 0 || gameScore.innerHTML >= 100){
                    clearInterval(timer1); //停止倒數
                    //將遊戲視窗區塊隱藏
                    timeLine.classList.remove('timeLine');//移除時間的css
                    container.classList.remove('square_container');//移除裝小square的容器
                    container.innerHTML = ''; //移除小square
                    gameScore.classList.remove('score');//移除計分板css
                    timeLine.innerHTML = ''; //清空計時時間
                    down.classList.remove('main_down');
                    down.classList.add('close');


                    //顯示結果視窗
                    footer.classList.add('open');
                    main.classList.add('close'); //遊戲頁面隱藏
                    scoreSum.innerHTML = gameScore.innerHTML;
                    gameScore.innerHTML = '';
                    if(scoreSum.innerHTML >= 90){
                        conment.innerHTML = '鷹眼來著！';
                    }else if(scoreSum.innerHTML < 90 && scoreSum.innerHTML >= 60 ){
                        conment.innerHTML = '還行，可能手抖了一下';
                    }else if(scoreSum.innerHTML < 60 && scoreSum.innerHTML >= 30){
                        conment.innerHTML = '去看看遠方的樹木🌲，再來一次';
                    }else{
                        conment.innerHTML = '這....要練練喔！眼睛請張開！';
                    }
                }
            }, 1000);
        }


        //暫停按鈕
        btnStop.onclick = function () {
            alert(' 時間暫停 ');
            gameScore.innerHTML = parseInt(gameScore.innerHTML) - 1;
        }


        //提示按鈕
        btnHelp.onclick = function () {
            gameScore.innerHTML = parseInt(gameScore.innerHTML) - 1;
            const squareans = document.querySelector('.squareans');
            console.log(squareans);
            squareans.classList.add('act');
        }





        playAgain.onclick = function () {
            //點擊PLAY AGAIN跳轉畫面
            header.classList.remove('close');
            main.classList.add('main');
            footer.classList.remove('open');

        }


    </script>
</body>

</html>
