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
<div class="back">
<a href="http://134.122.94.44/js2">Назад</a>
</div>
<div class="back2">
<a href="http://134.122.94.44/">На главную</a>
</div>
     <div>
            <p>Спросить у пользователя какой язык (html, css, js, php) он знает с помощью радио кнопочек. Выведите этот язык в абзац.</p>
            <form>
                <p>Какой язык вы знаете? Выберите:</p>
                <div>
                    <input id="button" type="radio" name="language" value="HTML">
                    <label>HTML</label>
                    <input id="button" type="radio" name="language" value="css">
                    <label>css</label>
                    <input id="button" type="radio" name="language" value="JavaScript">
                    <label>JavaScript</label>
                    <input id="button" type="radio" name="language" value="php">
                    <label>php</label>
                </div>
                <p id="result"></p>
            </form>
        </div>
    <script>
        var elem = document.getElementsByName('language');
        for (var i = 0; i < elem.length; i++) {
            elem[i].addEventListener('click', func);
        }
        function func() {
            var newElem = document.getElementById('result');
            for (var i = 0; i < elem.length; i++) {
                if (elem[i].checked === true) {
                    newElem.innerHTML = "Вы знаете язык: " + elem[i].value;
                }
            }  
        }
    </script>
    </body>
</html>

