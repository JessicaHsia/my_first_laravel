<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Jessica's BMI</title>
    <link rel="stylesheet" href="{{asset('css/bmi.css')}}">
</head>

<body>
    <div class="container">
        <ul>
            <form>
                <h2>BMI值計算</h2>
                Height:
                <input type="text" min="10" pattern="(0-9) {1,3}" placeholder="cm" id="h-input">
                <br>
                Weight:
                <input type="text" min="10" pattern="(0-9) {1,2}" placeholder="kg" id="w-input">
                <br>

                <!-- <input type="button" id="submit" value="Calculate">
                <input type="button" id="clean" value="Reset"> -->
                <!-- 如要使用<button></button> 需在form 外面才不會產生數值閃退的情形 -->
            </form>
            <button id="submit">Calculate</button>
            <button id="clean">Reset</button>
            <br>
            <div id="output"></div>
            <li><a href="/"><i class="fa-regular fa-house"></i></a></li>
        </ul>
        <ul>
            <table>
                <caption>體重分級與標準</caption>
                <thead>
                    <tr>
                        <th>分級</th>
                        <th>BMI range = kg/&#13217;</th>
                        <th>評估後的建議</th>
                    </tr>
                    <tr id="tineness">
                        <th>體重過輕</th>
                        <th>BMI &lt; 18.5</th>
                        <td>需要多運動，均衡飲食，以增加體能，維持健康！</td>
                    </tr>
                    <tr id="normal">
                        <th>健康體重</th>
                        <th>18.5 &le; BMI &lt; 24</th>
                        <td>要繼續保持喔！</td>
                    </tr>
                    <tr id="overweight">
                        <th>體重過重</th>
                        <th>24 &le; BMI &lt; 27</th>
                        <td>要小心囉！趕快力行健康管理！</td>
                    </tr>
                    <tr id="obesel">
                        <th>輕度肥胖</th>
                        <th>27 &le; BMI &lt; 30</th>
                        <td>調整飲食及運動生活！</td>
                    </tr>
                    <tr id="obesell">
                        <th>中度肥胖</th>
                        <th>30 &le; BMI &lt; 35</th>
                        <td>維持調整飲食及運動生活，依醫師建議加上套裝減重計畫！</td>
                    </tr>
                    <tr id="obeselll">
                        <th>重度肥胖</th>
                        <th>BMI &ge; 35</th>
                        <td>維持調整飲食及運動生活，依醫師建議加上藥物輔助治療！</td>
                    </tr>

                </thead>
            </table>
        </ul>
    </div>

    <script>
        const height = document.querySelector('#h-input');  //取得身高位置
        const weight = document.querySelector('#w-input');  //取得體重位置
        const submit = document.querySelector('#submit');   //取得計算按鈕位置
        const clean = document.querySelector('#clean');     //取得清除按鈕位置
        const output = document.querySelector('#output');   //取得輸出位置
        //取得table顏色變化位置
        const tineness = document.querySelector('#tineness');
        const normal = document.querySelector('#normal');
        const ow = document.querySelector('#overweight');
        const ol = document.querySelector('#obesel');
        const oll = document.querySelector('#obesell');
        const olll = document.querySelector('#obeselll');

        //測試是否正確取得位置
        console.log(height, weight, submit, clean, output);
        console.log(tineness, normal, ow, ol, oll, olll);

        //按下字算時的動作
        submit.onclick = function () {
            let w = parseInt(weight.value);     //因體重欄位輸入的數字是字串型態 所以利用parseInt方法將其型態字串改為數字
            let h = parseInt(height.value);         //身高輸入是cm單位 可計算須用m單位 因此需用運算法 運算過後的值為數字型態
            console.log(w, h);
            //當體重與身高輸入 小於零、非數字、帶小數點 顯示錯誤
            if (w <= 0 || h <= 0 || isNaN(w) || isNaN(h) || !Number.isInteger(w) || !Number.isInteger(h)) {
                output.classList.remove('output-act');
                output.classList.add('output');
                output.innerHTML = '輸入值錯誤，請重新輸入';
            } else {
                let sum = w / (h/ 100 * h/ 100);              //計算BMI = kg / (m * m) 體重除身高平方
                let num = Math.floor(sum * 10) / 10; //利用Math.floor方法去小數點 取小數點後一位 四捨五入 回傳值為number
                // let num = sum.toFixed(1);   // 利用toFixed() 四捨五入至小數點後指定位數 回傳值為string

                // let bmi = w / Math.pow( h / 100, 2); //另一種寫法

                console.log(w, h, sum, num);  //確認上述變數資料型態

                //將計算出來的數值範圍 經過比對 圈出相對的table欄位 給予顏色
                if (0 <= num && num < 18.5) {
                    tineness.classList.add('coloryellow');
                    normal.classList.remove('colorgreen');
                    ow.classList.remove('coloryellow');
                    ol.classList.remove('colorred');
                    oll.classList.remove('colorred');
                    olll.classList.remove('colorred');
                } else if (18.5 <= num && num < 24) {
                    normal.classList.add('colorgreen');
                    tineness.classList.remove('coloryellow');
                    ow.classList.remove('coloryellow');
                    ol.classList.remove('colorred');
                    oll.classList.remove('colorred');
                    olll.classList.remove('colorred');

                } else if (24 <= num && num < 27) {
                    ow.classList.add('coloryellow');
                    tineness.classList.remove('coloryellow');
                    normal.classList.remove('colorgreen');
                    ol.classList.remove('colorred');
                    oll.classList.remove('colorred');
                    olll.classList.remove('colorred');

                } else if (27 <= num && num < 30) {
                    ol.classList.add('colorred');
                    tineness.classList.remove('coloryellow');
                    normal.classList.remove('colorgreen');
                    ow.classList.remove('coloryellow');
                    oll.classList.remove('colorred');
                    olll.classList.remove('colorred');

                } else if (30 <= num && num < 35) {
                    oll.classList.add('colorred');
                    tineness.classList.remove('coloryellow');
                    normal.classList.remove('colorgreen');
                    ow.classList.remove('coloryellow');
                    ol.classList.remove('colorred');
                    olll.classList.remove('colorred');

                } else {
                    olll.classList.add('colorred');
                    tineness.classList.remove('coloryellow');
                    normal.classList.remove('colorgreen');
                    ow.classList.remove('coloryellow');
                    ol.classList.remove('colorred');
                    oll.classList.remove('colorred');
                }
                output.classList.add('output');
                output.classList.remove('output-act');
                output.innerHTML = 'YOUR BMI: ' + num;    //將運算結果回傳頁面輸出
            }

            //按下清除時的動作
            clean.onclick = function () {
                let str = '';           //建立一個空字串
                //將空字串的值套入  身高、體重與結果的欄位
                weight.value = '';
                height.value = '';
                output.innerHTML.opacity = 0;
                output.classList.add('output-act');
                //清除table的選取顏色
                tineness.classList.remove('coloryellow');
                normal.classList.remove('colorgreen');
                ow.classList.remove('coloryellow');
                ol.classList.remove('colorred');
                oll.classList.remove('colorred');
                olll.classList.remove('colorred');
            }

        }

    </script>
</body>

</html>
