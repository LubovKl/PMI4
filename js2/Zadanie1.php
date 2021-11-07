<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Первое задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        
        
    </head>
    <body>
      <div>
            <p>Дана ссылка. Дан чекбокс. По нажатию на ссылку меняется состояние чекбокса с отмеченного на неотмеченное и наоборот.</p>
            <a id="link">Жми</a>
            <input id="checkIt" type="checkbox">
        </div>
    <script>
        var elem = document.getElementById('link');
        elem.addEventListener('click', func);
        function func() {
            var elem1 = document.getElementById('checkIt');
            if (elem1.checked) {
                elem1.checked = false;
            }
            else {
                elem1.checked = true;
            }
        }
    </script>  
    </body>
</html>

