<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Шестое задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        
        
    </head>
    <body>
        <div>
            <p>Дан инпут. В него вводится ФИО через пробел. ФИО вводится с маленькой буквы. Сделайте так, чтобы по потери фокуса инпутом, введенные фамилия, имя и отчество автоматически стали записанными с большой буквы (в том же инпуте).</p>
            <input type="text" id="input" placeholder="Введите Ваши ФИО">
        </div>
    <script>
        "use strict";
var elem = document.getElementById('input');
elem.addEventListener('blur', func);

function func(){
   var str = elem.value;
   var arr = str.split(' ');
   for (var i = 0; i < arr.length; i++){
       arr[i]=arr[i].charAt(0).toUpperCase()+ arr[i].slice(1);
       console.log(arr[i]);
   }
   let endstr = arr.join(' ');
   elem.value=endstr;
}

    </script>
    </body>
</html>

