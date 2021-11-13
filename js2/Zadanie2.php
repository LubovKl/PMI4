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
<div class="back">
<a href="http://134.122.94.44/js2">Назад</a>
</div>
<div class="back2">
<a href="http://134.122.94.44/">На главную</a>
</div>
      <div>
            <p>Даны чекбокс. Дана кнопка. По нажатию на кнопку все чекбоксы будут отмеченными</p>
            <button id="buton">Жми</button>
            <input class="checkIt" type="checkbox">
            <input class="checkIt" type="checkbox">
            <input class="checkIt" type="checkbox">
            <input class="checkIt" type="checkbox">
            <input class="checkIt" type="checkbox">
        </div>
    <script>
        var elem = document.getElementById('buton');
        elem.addEventListener('click', func);
        function func() {
            var elem1 = document.getElementsByClassName('checkIt');
            for (var i = 0; i < elem1.length; i++) {
                elem1[i].checked = true;
            }
        }
    </script>  
    </body>
</html>

