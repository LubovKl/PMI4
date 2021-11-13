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
<div class="back">
<a href="http://134.122.94.44/js2">Назад</a>
</div>
<div class="back2">
<a href="http://134.122.94.44/">На главную</a>
</div>
       <div>
            <p>Дан абзац. Даны чекбоксы 'перечеркнуть', 'сделать жирным', 'сделать красным'. Если соответствующий чекбокс отмечен - заданное действие происходит с абзацем (становится красным, например). Если чекбоксу снять отметку - действие отменяется</p>
            <form>
                <p id="result"><br>Буря мглою небо кроет,
                               <br>Вихри снежные крутя;
                               <br>То, как зверь, она завоет,
                               <br>То заплачет, как дитя,
                               <br>То по кровле обветшалой
                               <br>Вдруг соломой зашумит,
                               <br>То, как путник запоздалый,
                               <br>К нам в окошко застучит.
                </p>
                <input class="checkIt" type="checkbox" value="crossOut">
                <lable>Перечеркнуть</lable>
                <input class="checkIt" type="checkbox" value="bold">
                <lable>Сделать жирным</lable>
                <input class="checkIt" type="checkbox" value="color">
                <lable>Сделать красным</lable>
            </form>
        </div>
    <script>
        var elem = document.getElementsByClassName('checkIt');
        for (var i = 0; i < elem.length; i++) {
            elem[i].addEventListener('click', func);
        }
        function func() {
            elem1 = document.getElementById('result');
            for (var i = 0; i < elem.length; i++) {
                if (elem[i].checked === true) {
                    if (elem[i].value === "crossOut") {
                        elem1.style = "text-decoration:line-through;"    
                    }
                    else if (elem[i].value === "bold") {
                        elem1.style.fontWeight = "bold";
                    }
                    else {
                        elem1.style.color = "red";
                    }
                }
                else {
                    if (elem[i].value === "crossOut") {
                        elem1.style = "text-decoration:none"    
                    }
                    else if (elem[i].value === "bold") {
                        elem1.style.fontWeight = "none";
                    }
                    else {
                        elem1.style.color = "none";
                    }
                }
            }
        }
    </script>
    </body>
</html>

