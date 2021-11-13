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
        <style>
            #inp{
                width: 200px;
            }
        </style>
        
    </head>
    <body>
<div class="back">
<a href="http://134.122.94.44/js2">Назад</a>
</div>
<div class="back2">
<a href="http://134.122.94.44/">На главную</a>
</div>
       <div>
            <p>В инпут через запятую вводятся страны. По нажатию на кнопку все страны записываются в ul под инпутом (каждая страна отдельный li)</p>
            <div>
                <input id="inp" type="text" value="" placeholder="Введите страны через запятую">
                <button id="task">Жми</button>
                <ul id="list"></ul>
            </div>
    <script>
        var elem = document.getElementById('task');
        elem.addEventListener('click', func);
        
        function func() {
            var elem1 = document.getElementById('inp');
            var newUl = document.getElementById('list');
            var arr = elem1.value.split(',');
            newUl.innerHTML = '';
            if (elem1.value !== 0) {
                for (var i = 0; i < arr.length; i++) {
                    var li = document.createElement('li');
                    li.innerHTML = arr[i];
                    newUl.appendChild(li);
                }
            }
            else {
                elem1.placeholder = "Введите страны через запятую";
            }
        }
    </script>
    </body>
</html>

