<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Десятое задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        
        
    </head>
    <body>
     <div>
         <p>Дан инпут. В него вводится год рождения пользователя. По нажатию на кнопку выведите в абзац ниже сколько пользователю лет.</p>
            <input type="text" id="input" placeholder="Введите год рождения"> 
             <br>
             <input id="result" type="text" value="">
             <br/>
             <button id="task">жми</button>
        </div>
    <script>
        "use strict";
var elem = document.getElementById('input');
elem.addEventListener('blur', func);

function func(){
   var year = elem.value;
   let newyear = new Date().getFullYear();
   
   var newElem = document.getElementById('result');
   newElem.value = newyear-year;
}

    </script>
    </body>
</html>

