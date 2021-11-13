<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Четвертое задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
         <style>
            #num{
                width: 200px;
            }
        </style>
        
    </head>
    <body>
<div class="back">
<a href="http://134.122.94.44/js1">Назад</a>
</div>
<div class="back2">
<a href="http://134.122.94.44/">На главную</a>
</div>
     <div>
         <p>Дан инпут. В него вводятся числа через запятую. По потери фокуса найдите среднее арифметическое этих чисел (сумма делить на количество).</p>
        <input id="num" type="text" value="" placeholder="введите число через запятую">
        <p id="result"></p>
        </div>
    <script>
       "use strict";
var elem = document.getElementById('num');
elem.addEventListener('blur', func);

function func(){
    var sum = 0;
    var str = elem.value;
    var arr = str.split(',');
    for (var i = 0; i < arr.length; i++) {
        sum += +arr[i];
    }
    var newElem = document.getElementById('result');
    newElem.innerHTML = sum/arr.length;
}

    </script>
    </body>
</html>

