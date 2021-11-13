<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Четвертое задание</title>
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
            <p>Дан чекбокс. Дан инпут. Если чекбокс отмечен - инпут видимый, если не отмечен - не видимый</p>
            <form>
                <input id="check" type="checkbox">
                <input id="inp" type="text" placeholder="Инпут">
            </form>
        </div>
    <script>
        var elem = document.getElementById('check');
        elem.addEventListener('click', func);
        function func() {
            elem1 = document.getElementById('inp');
            if (elem.checked === true) {
                elem1.type = "hidden";
            }
            else {
                elem1.type = "text";
            }
        }
    </script>
    </body>
</html>

