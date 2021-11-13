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
<a href="http://134.122.94.44/js2">Назад</a>
</div>
<div class="back2">
<a href="http://134.122.94.44/">На главную</a>
</div>
     <div>
            <p>Даны два селекта. В первом находятся страны, во втором - города. Когда выбирается определенная страна - в другом селекте появлялись города этой страны. В абзаце появляется выбранная страна и город через запятую.</p>
            <div>
                <select id="countries" name="countries">
                    <option class="countries" value="rf">Российская Федерация</option>
                    <option class="countries" value="states">Соединённые Штаты Америки</option>
                    <option class="countries" value="gb">Великобритания</option>
                    <option class="countries" value="france">Франция</option>
                    <option class="countries" value="italy">Италия</option>
                </select>
                <select id="cities" name="cities">
                    <option hidden="">Выбертите город</option>
                    
                    <option class="rf" hidden="">Великий Новгород</option>
                    <option class="rf" hidden="">Смоленск</option>
                    <option class="rf" hidden="">Владивосток</option>
                    <option class="rf" hidden="">Санкт-Петербург</option>
                    <option class="rf" hidden="">Волгоград</option>
                    <option class="rf" hidden="">Калининград</option>
                    
                    <option class="states" hidden="">Нью Йорк</option>
                    <option class="states" hidden="">Лос-Анджелес</option>
                    <option class="states" hidden="">Чикаго</option>
                    <option class="states" hidden="">Филадельфия</option>
                    <option class="states" hidden="">Сан-Франциско</option>
                    <option class="states" hidden="">Хьюстон</option>
                    
                    <option class="gb" hidden="">Лондон</option>
                    <option class="gb" hidden="">Ливерпуль</option>
                    <option class="gb" hidden="">Йорк</option>
                    <option class="gb" hidden="">Бристоль</option>
                    <option class="gb" hidden="">Манчестер</option>
                    <option class="gb" hidden="">Бирмингем</option>
                    
                    <option class="france" hidden="">Париж</option>
                    <option class="france" hidden="">Марсель</option>
                    <option class="france" hidden="">Ницца</option>
                    <option class="france" hidden="">Лион</option>
                    <option class="france" hidden="">Бордо</option>
                    <option class="france" hidden="">Лилль</option>
                    
                    <option class="italy" hidden="">Рим</option>
                    <option class="italy" hidden="">Милан</option>
                    <option class="italy" hidden="">Неаполь</option>
                    <option class="italy" hidden="">Турин</option>
                    <option class="italy" hidden="">Палермо</option>
                    <option class="italy" hidden="">Генуа</option>
                </select>
                <p id="result"></p>
            </div>
    <script>
        var elem = document.getElementById('countries');
        elem.addEventListener('change', func);
        elem.addEventListener('change', funcPrint);
        var elem2 = document.getElementById('cities');
        elem2.addEventListener('change', funcPrint);
        function func() {
            var elem1 = document.getElementById('cities');
            for (var i = 0; i < elem1.length; i++) {
                if (elem1[i].className === elem.value) {
                    elem1[i].hidden = false;
                }
                else {
                    elem1[i].hidden = true;
                }
            }
        }
        function funcPrint() {
            var resault = document.getElementById('result');
            resault.innerHTML = elem.options[elem.selectedIndex].text + ", " + elem2.options[elem2.selectedIndex].text;
        }
    </script>
    </body>
</html>

