<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Восьмое задание</title>
         <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        <style>
            body{
                text-align: left;
            }
            p{
                margin: 30px;
            }
        </style>
        
    </head>
    <body>
      <div>
            <p>По умолчанию есть список стран (ul), по нажатию на страну внутри li со страной появляется список городов</p>
            <div id="List">
                <ul id="countriesList">
                    <li class="countrie" title="rf">Российская Федерация
                        <ul id="rf" hidden="">
                            <li>Великий Новгород</li>
                            <li>Смоленск</li>
                            <li>Владивосток</li>
                            <li>Санкт-Петербург</li>
                            <li>Волгоград</li>
                            <li>Калининград</li>
                        </ul>
                    </li>
                    <li class="countrie" title="states">Соединённые Штаты Америки
                        <ul id="states" hidden="">
                            <li>Нью Йорк</li>
                            <li>Лос-Анджелес</li>
                            <li>Чикаго</li>
                            <li>Филадельфия</li>
                            <li>Сан-Франциско</li>
                            <li>Хьюстон</li>
                        </ul>
                    </li>
                    <li class="countrie" title="gb">Великобритания
                        <ul id="gb" hidden="">
                            <li>Лондон</li>
                            <li>Ливерпуль</li>
                            <li>Йорк</li>
                            <li>Бристоль</li>
                            <li>Манчестер</li>
                            <li>Бирмингем</li>
                        </ul>
                    </li>
                    <li class="countrie" title="france">Франция
                        <ul id="france" hidden="">
                            <li>Париж</li>
                            <li>Марсель</li>
                            <li>Ницца</li>
                            <li>Лион</li>
                            <li>Бордо</li>
                            <li>Лилль</li>
                        </ul>
                    </li>
                    <li class="countrie" title="italy">Италия
                        <ul id="italy" hidden="">
                            <li>Рим</li>
                            <li>Милан</li>
                            <li>Неаполь</li>
                            <li>Турин</li>
                            <li>Палермо</li>
                            <li>Генуа</li>
                        </ul>
                    </li>
                </ul>
            </div>
    <script>
        var elem = document.getElementsByClassName('countrie');
        for (var i = 0; i < elem.length; i++) {
            elem[i].addEventListener('click', func);
        }
        function func() {
            var elem1 = document.getElementById(event.target.title);
            if (elem1.hidden === true) {
                elem1.hidden = false;
            }
            else
            {
                elem1.hidden = true;
            }
        }
    </script>
    </body>
</html>

