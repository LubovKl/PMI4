<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Второе задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        
        
    </head>
    <body>
      <div>
          <p>Даны N инпутов с классом .num и кнопка. По нажатию на кнопку получите числа, стоящие в этих инпутах и запишите их сумму в абзац с id="result".</p>
        <input class="num" type="text" value="" placeholder="число">
        <input class="num" type="text" value="" placeholder="число">
        <input class="num" type="text" value="" placeholder="число">
        <button id="task">жми</button>
        <p id="result"></p>
        </div>
    <script>
       "use strict";
var elem = document.getElementById('task');
elem.addEventListener('click', func);
var elem1 = document.getElementsByClassName('num');

function func(){
    var sum = 0;
    for (var i = 0; i < elem1.length; i++) {
        sum += +elem1[i].value;
    }
    var newElem = document.getElementById('result');
    newElem.innerHTML = sum;
}

    </script>  
    </body>
</html>

