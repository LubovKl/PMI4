<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Седьмое задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        
        
    </head>
    <body>
       <div>
           <p>Дан инпут. В него вводится текст. По потери фокуса узнайте количество слов в этом тексте.</p>
            <input type="text" id="input" placeholder="Введите текст">
            <p id="result"></p>
        </div>
    <script>
       "use strict";
var elem = document.getElementById('input');
elem.addEventListener('blur', func);

function func(){
   var str = elem.value;
   var arr = str.split(' ');
   console.log(arr);
   var newElem = document.getElementById('result');
   newElem.innerHTML = arr.length;
}

    </script>
    </body>
</html>

