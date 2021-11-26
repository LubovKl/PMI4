<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Main page</title>
         
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        <style>
            body{
                background-image: url(img/fon.jpg);
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                text-align: center;
                margin: 40px;
                font-size: 20px;
                color: white;
            }
            
            
            .title{
                font-size: 40px;
                margin: 50px;
                border-bottom: 5px solid #aa0719;
                font-style: italic;
                
            }
            
            .title_title{
                font-size: 30px;
                margin: 47px;
                border-bottom: 5px solid chocolate;
                 font-style: oblique;
            }
            a{
                color: #cc0000;
                font-family: "Monotype Corsiva";
                font-size: 25px; 
            }
            a:visited{
                color: #ffffff;
            }
            a:hover{
                text-decoration: none;
                color: #000000;
                background: #66ff33;
               
            }
        </style>    
        
    </head>
    <body>
        <div class="main_page">
       <div class="title">Страница Климкиной Любы</div>
        <div class="title_title">Домашние задания:</div>
       <div class="s1">
            <p><a href="/s1/index.php">Блочный тип</a></p>
        </div>
        <div class="zadanie2">
            <p><a href="/zadanie2/index.php">Страница обо мне</a></p>
        </div>
        <div class="lending">
            <p><a href="/lending/index.php">Lending</a></p>
        </div>
        <div class="js1">
            <p><a href="/js1/index.php">JS часть 1</a></p>
        </div>
        <div class="js2">
            <p><a href="/js2/index.php">JS часть 2</a></p>
        </div>
         <div class="Zachet">
            <p><a href="/Zachet/index.php">Slider</a></p>
        </div>
        </div>
    </body>
</html>
