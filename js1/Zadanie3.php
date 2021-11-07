<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Третие задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        
        
    </head>
    <body>
      <div>
          <p>Дан инпут. В него вводится число. По потери фокуса найдите сумму цифр этого числа.</p>
        <input id="num" type="text" value="" placeholder="число">
        <p id="result"></p>
        </div>
    <script>
       "use strict";
var elem = document.getElementById('num');
elem.addEventListener('blur', func);

function func(){
    var sum = 0;
    var str = elem.value;
    var arr = str.split('');
    for (var i = 0; i < arr.length; i++) {
        sum += +arr[i];
    }
    var newElem = document.getElementById('result');
    newElem.innerHTML = sum;
}
    </script>
    </body>
</html>

