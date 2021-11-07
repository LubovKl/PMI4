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
            <p>Даны чекбоксы. Под каждым чекбоксом размещен абзац. Если чекбокс отмечен - соответствующий абзац видимый, а если не отмечен - не видимый.</p>
            <form>
                <input class="checkIt" type="checkbox" value="1">
                <p id="1">Абзац 1</p>
                <input class="checkIt" type="checkbox" value="2">
                <p id="2">Абзац 2</p>
                <input class="checkIt" type="checkbox" value="3">
                <p id="3">Абзац 3</p>
                <input class="checkIt" type="checkbox" value="4">
                <p id="4">Абзац 4</p>
                <input class="checkIt" type="checkbox" value="5">
                <p id="5">Абзац 5</p>
            </form>
        </div>
    <script>
        var elem = document.getElementsByClassName('checkIt');
        for (var i = 0; i < elem.length; i++) {
                document.getElementById(elem[i].value).hidden = true;
                }
        for (var i = 0; i < elem.length; i++) {
            elem[i].addEventListener('click', func);
        }
        function func() {
            for (var i = 0; i < elem.length; i++) {
                if (elem[i].checked === true) {
                    document.getElementById(elem[i].value).hidden = false;
                }
                else
                {
                   document.getElementById(elem[i].value).hidden = true; 
                }
            }
        }
    </script>
    </body>
</html>