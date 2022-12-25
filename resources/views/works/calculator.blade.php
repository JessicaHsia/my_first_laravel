<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/calculator.css') }}">
    <title>Calculator-JH</title>
</head>

<body>
    <div class="container">
        <ul class="history">
        </ul>
        <div class="output">
            <input type="text" placeholder="0" readonly>
        </div>
        <div class="btns">
            <button onclick="cln()" class="sp">C</button>
            <button onclick="del()" class="sp">DEL</button>
            <button onclick="insert('%')" class="sp">%</button>
            <button onclick="insert('/')" class="sp">/</button>
            <button onclick="insert('7')" class="sp">7</button>
            <button onclick="insert('8')" class="sp">8</button>
            <button onclick="insert('9')" class="sp">9</button>
            <button onclick="insert('*')" class="sp">＊</button>
            <button onclick="insert('4')" class="sp">4</button>
            <button onclick="insert('5')" class="sp">5</button>
            <button onclick="insert('6')" class="sp">6</button>
            <button onclick="insert('-')" class="sp">-</button>
            <button onclick="insert('1')" class="sp">1</button>
            <button onclick="insert('2')" class="sp">2</button>
            <button onclick="insert('3')" class="sp">3</button>
            <button onclick="insert('+')" class="sp">+</button>
            <button onclick="insert('0')" class="sp">0</button>
            <button onclick="insert('.')" class="sp">.</button>
            <button onclick="calSum()" class="sp">=</button>
        </div>

    </div>

    <script>
        const showLink = document.querySelector('input');
        const historyList = document.querySelector('.history');
        var numStringArray = []; //存數字
        var opStringArray = []; //存符號

        //按C 清空所有東西
        function cln() {
            showLink.value = ''; //上方output清空
            historyList.innerHTML = ''; //下方歷史紀錄清空
            numStringArray = [];
        };

        //按del 刪除最後一次的輸入動作
        function del() {
            showLink.value = showLink.value.slice(0, -1);
            historyList.innerHTML = historyList.innerHTML.slice(0, -1);
        }

        //按計算區
        function insert(e) {
            //input顯示出所有數字
            showLink.value += e;
            //歷史紀錄區顯示所有數字
            historyList.innerHTML += `${e}`;

            //每三位數加入一個逗號
            //每個數字的小數點只能有一個
            //運算符不得連續出現
            //0、00不得為數字數字開頭(小數點除外)
            let num = showLink.value.slice(0, -1);

            if (showLink.value == 0 && showLink.value == '') {
                showLink.value = '';
            }

            switch (e) {
                case '+':
                    showLink.value = ''; //清空input
                    numStringArray.push(num); //將數字放於陣列中
                    numStringArray.push('+'); //將運算子存於陣列中
                    console.log(numStringArray);
                    break;
                case '-':
                    showLink.value = ''; //清空input
                    numStringArray.push(num); //將數字放於陣列中
                    numStringArray.push('-'); //將運算子存於陣列中
                    console.log(numStringArray);
                    break;
                case '*':
                    showLink.value = ''; //清空input
                    numStringArray.push(num); //將數字放於陣列中
                    numStringArray.push('*'); //將運算子存於陣列中
                    console.log(numStringArray);
                    break;
                case '/':
                    showLink.value = ''; //清空input
                    numStringArray.push(num); //將數字放於陣列中
                    numStringArray.push('/'); //將運算子存於陣列中
                    console.log(numStringArray);
                    break;
                case '%':
                    let pNum = num / 100;
                    showLink.value = pNum;
                    console.log(numStringArray);
                    break;
            }
        }
        //排除可能
        function calSum() {
            var num = Number(numStringArray[numStringArray.length - 1]);
            if (isNaN(num) && showLink.value == "") { //如果陣列最後的值是運算式或是小數點且showLink沒有值
                numStringArray.pop();
                historyList.innerHTML = historyList.innerHTML.slice(0, -1);
                answer();
            } else {
                sentStr(); //將numStringArray送入陣列
                answer();
            }

        }
        //將陣列的運算式算出來
        function answer() {
            var numAnswer = eval(numStringArray.join('')); //將arry物件型態轉成string後進行陣列運算
            var answer = parseFloat(numAnswer); //將計算出來的值轉為字串
            console.log("arr of function calSum: " + answer);
            historyList.innerHTML += `= ${answer} <br>`;
            console.log(numStringArray);
            numStringArray = []; //清空陣列可重新開啟新的運算
        }

        //當按下運算符按紐時將數字送入numStringArry的陣列
        function sentStr() {
            if (showLink.value != "") { //避免送空值到showLink.value
                numStringArray.push(showLink.value);
                showLink.value = "";
            }
        }
    </script>

</body>

</html>
