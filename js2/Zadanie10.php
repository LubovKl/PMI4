<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Десятое задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
         <style>
            #inputValue{
                width: 250px;
            }
        </style>
        
    </head>
    <body>
     <div>
            <p>Калькулятор валют. Есть два селекта - селект с исходной валютой, селект с той валютой, в которую необходимо перевести деньги, инпут, в который вводится сумма для обмена. Курсы валют храните в массиве. В селектах нельзя выбрать две одинаковых валюты. </p>
            <div>
                <select id="from" name="startCurrency">
                    <option class="startCurrency" value="rub" selected="">Рубль</option>
                    <option class="startCurrency" value="dol">Доллар</option>
                    <option class="startCurrency" value="eur">Евро</option>
                    <option class="startCurrency" value="uan">Юань</option>
                    <option class="startCurrency" value="fnt">Фунт</option>
                    <option class="startCurrency" value="frn">Франк</option>
                </select>
                <select id="to" name="endCurrency">
                    <option class="startCurrency" value="rub" hidden="">Рубль</option>
                    <option class="startCurrency" value="dol" selected="">Доллар</option>
                    <option class="startCurrency" value="eur">Евро</option>
                    <option class="startCurrency" value="uan">Юань</option>
                    <option class="startCurrency" value="fnt">Фунт</option>
                    <option class="startCurrency" value="frn">Франк</option>
                </select>
                <input id="inputValue" type="text" value="" placeholder="Введите сумму для конвертации">
                <p id="result"></p>
            </div>
    <script>
        var elem1 = document.getElementById('from');
        var elem2 = document.getElementById('to');
        var elem3 = document.getElementById('inputValue');
        elem1.addEventListener('change', func1);
        elem3.addEventListener('blur', func2);
        function func1() {
            var elem = document.getElementById('to');
            for (var i = 0; i < elem.length; i++) {
                if (elem[i].value === elem1.value) {
                    elem[i].hidden = true;
                    elem[i].selected = false;
                }
                else {
                    elem[i].hidden = false;
                }
            }
        }
        rate = [
            [1, 0.014, 0.0121, 0.0895, 0.0103, 0.0128],
            [71.4876, 1, 0.8633 , 6.3974, 0.7342, 0.9125],
            [82.8112, 1.1584, 1, 7.4107, 0.8505, 1.057],
            [11.1745, 0.1563, 0.1349, 1, 0.1148, 0.1426],
            [97.3733, 1.3621, 1.1758, 8.7139, 1, 1.2429],
            [78.3426, 1.0959, 0.946, 7.0108, 0.8046, 1]
        ];
        function func2() {
            var elem1 = document.getElementById('from');
            var elem2 = document.getElementById('to');
            var res = document.getElementById('result');
            if (elem3.value !== 0) {
                res.innerHTML = "Результат конвертации: " + 
                        elem3.value * rate[elem1.selectedIndex][elem2.selectedIndex] 
                        + " " + elem2.options[elem2.selectedIndex].text;
            } 
        }
    </script>
    </body>
</html>

