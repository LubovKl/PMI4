<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Первое задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        
        
    </head>
    <body>
<div class="back">
<a href="http://134.122.94.44/js1">Назад</a>
</div>
<div class="back2">
<a href="http://134.122.94.44/">На главную</a>
</div>
       <div>
           <p>Даны 3 инпута и кнопка. По нажатию на кнопку получите числа, стоящие в этих инпутах и запишите их сумму в четвертый инпут.</p>
        <input class="cls" type="text" value="" placeholder="число">
        <input class="cls" type="text" value="" placeholder="число">
        <input class="cls" type="text" value="" placeholder="число">
        <button id="task">жми</button>
        <input id="sum" type="text" value="">
        </div>
    <script>
       "use strict";
var elem = document.getElementById('task');
elem.addEventListener('click', func);
var elem1 = document.getElementsByClassName('cls');

function func(){
    var sum = 0;
    for (var i = 0; i < elem1.length; i++) {
        sum += +elem1[i].value;
    }
    var newElem = document.getElementById('sum');
    newElem.value = sum;
}
    </script>  
    </body>
</html>

