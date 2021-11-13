<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Девятое задание</title>
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
         <p>Дан инпут. В него вводится дата в формате 31.12.2016. По потери фокуса в этом же инпуте поставьте эту дату в формате 2016-12-31.</p>
            <input type="text" id="input" placeholder="Введите дату">
        </div>
    <script>
        "use strict";
var elem = document.getElementById('input');
elem.addEventListener('blur', func);

function func(){
   var date = elem.value.split('.');
   let newDate = date[2] + '-' + date[1] + '-' + date[0];
   elem.value = newDate;
}

    </script>
    </body>
</html>

