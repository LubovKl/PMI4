<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Пятое задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        
        
    </head>
    <body>
       <div>
           <p>Дан инпут. В него вводится ФИО через пробел. По потери фокуса запишите фамилию, имя и отчество в отдельные инпуты.</p>
        <input type="text" id="input" placeholder="Введите Ваши ФИО">
        <input type="text" class="name">
        <input type="text" class="name">
        <input type="text" class="name">
        </div>
    <script>
       "use strict";
var elem = document.getElementById('input');
elem.addEventListener('focus', func);
elem.addEventListener('blur', func2);

function func(){
    elem.placeholder = '';
}

function func2(){
    var elem = document.getElementById('input');
    var elems = document.getElementsByClassName('name');
    if (elem.value !== 0) {
        var str = elem.value;
        var arr = str.split(' ');
        for (var i = 0; i < arr.length; i++) {
            elems[i].value = arr[i];
        }
    }
    if (elem.value === 0) {
        elem.placeholder = 'Введите Ваши ФИО';
        for (var i = 0; i < elems.length; i++){
            elems[i].value = '';
        }
    }
}
    </script>
    
    </body>
</html>

