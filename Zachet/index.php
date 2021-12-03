<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Зачет</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        <style>
body{
    background-color: #009999;
}
/* Стиль слайдера */
.slider{
    max-width: 740px;
    position: relative;
    margin: auto;
    max-height: 510px;
    margin-bottom: 15px;
}
/*Картинка масштабируется по отношению к слайдеру*/
.slider .item img {
    object-fit: cover;
    width: 100%;
    height: 100%;
    border: none !important;
    box-shadow: none !important;
}
/*Кнопки вперед и назад*/
.slider .prev, .slider .next,  .slider .close{
    cursor: pointer;
    position: absolute;
    top: 0;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
}
/*Для кнопки (сслыки) next */
.slider .next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

/*Для кнопки (сслыки) prev */
.slider .prev {
    left: 0;
    border-radius: 0 3px 3px 0;
}
/*Для кнопки (сслыки) close */
.slider .close {
    right: 0;
    top: 22px;
    border-radius: 0 3px 3px 0;
    display: none;
    color: #cc0000;
    background-color: rgba(0, 0, 0, 0.8);
}
/*При наведении на кнопки добавляем фон кнопок*/
.slider .close:hover,
.slider .prev:hover,
.slider .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
/*Кружочки под слайдером*/
.slider-dots {
    text-align: center;
}
/*Общий стиль для всех элементов в превью*/
.slider-dots_item{
    cursor: pointer;
    height: 100px;
    width: 100px;
    margin: 2px 2px;
    display: inline-block;
}
 /*Картинки в кружочках (превью)*/
.slider-dots_item img{
    object-fit: cover;
    width: 100px;
    height: 100px;
}
/*Видео в кружочках (превью)*/
.slider-dots_item iframe{
    object-fit: cover;
    width: 100px;
    height: 100px;
    border: none !important;
    box-shadow: none !important;
} 
/*Стиль для активного элемента в превью*/
.active{
    background-color: yellow;
    width: 110px;
    height: 110px;
    padding-top: 10px;
}

.bigSlide{
    max-width: 1200px;
    position: relative;
    margin: auto;
    max-height: 800px;
    margin-bottom: 15px;
    text-align: center;
}

.bigSlideItem{
    object-fit: cover;
    width: 100%;
    height: 800px;
    border: none !important;
    box-shadow: none !important;
}

        </style>
        
    </head>
    <body>

<div class="back">
    <a href="http://134.122.94.44/">Назад</a>
</div>
      
<div class="slider">

    <div class="item">
        
            <img src="img/image11.jpg" onclick="showBigSlides(1)">
        
    </div>

    <div class="item">
        
            <img src="img/image21.jpg" onclick="showBigSlides(2)">
       
    </div>

    <div class="item">
        <iframe class="video" width="740" height="470" src="https://www.youtube.com/embed/Owi3lG9XoNU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  
    </div> 

    <div class="item">
        
            <img src="img/image31.jpg" onclick="showBigSlides(4)">
        
    </div>

    <div class="item">
        
            <img src="img/image41.jpg" onclick="showBigSlides(5)">
     
    </div>

    <div class="item">
       
            <img src="img/image51.jpg" onclick="showBigSlides(6)">
       
    </div>

    <div class="item">
        <iframe class="video" width="740" height="470" src="https://www.youtube.com/embed/RdPEwDlcaNE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div> 
    
    <div class="item">
      
            <img src="img/image61.jpg" onclick="showBigSlides(8)">
        
    </div>
   
    <a class="prev" onclick="minusSlide()">⇦</a> 
    <a class="next" onclick="plusSlide()">⇨</a>
    <a class="close" onclick="closeB()">X</a>
</div>
<!-- Превью-->
<div class="slider-dots">
    <span class="slider-dots_item" onclick="currentSlide(1)"><img src="img/image11.jpg"></span> 
    <span class="slider-dots_item" onclick="currentSlide(2)"><img src="img/image21.jpg"></span> 
    <span class="slider-dots_item" onclick="currentSlide(3)"><img src="img/prevVideo1.jpg"></span>
    <span class="slider-dots_item" onclick="currentSlide(4)"><img src="img/image31.jpg"></span>
    <span class="slider-dots_item" onclick="currentSlide(5)"><img src="img/image41.jpg"></span>
    <span class="slider-dots_item" onclick="currentSlide(6)"><img src="img/image51.jpg"></span>
    <span class="slider-dots_item" onclick="currentSlide(7)"><img src="img/prevVideo2.jpg"></span>
    <span class="slider-dots_item" onclick="currentSlide(8)"><img src="img/image61.jpg"></span>
</div>        
    
<script>
var slideIndex = 1; 
showSlides(slideIndex); 

function closeB() {
    window.open('http://134.122.94.44/Zachet/index.php','_self');
}

function plusSlide() {
    showSlides(slideIndex += 1);
}


function minusSlide() {
    showSlides(slideIndex -= 1);  
}


function currentSlide(n) {
    showSlides(slideIndex = n);
}


function showSlides(n) {
    var i; 
    var slides = document.getElementsByClassName("item"); 
    var dots = document.getElementsByClassName("slider-dots_item"); 
   
    if (n > slides.length) {
      slideIndex = 1;
    }
    
    if (n < 1) {
        slideIndex = slides.length;
    }
  
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
   
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    } 
    slides[slideIndex - 1].style.display = "block"; 
    dots[slideIndex - 1].className += " active"; 
   
}
document.onkeydown = function(e){
        switch (e.keyCode) {
            case 37:
                //left
                e.preventDefault();
                slideIndex--;
                showSlides(slideIndex);
                break;
            case 39:
                //right
                e.preventDefault();
                slideIndex++;
                showSlides(slideIndex);
                break;
            case 27:
                //esc
                e.preventDefault();
                window.open('http://134.122.94.44/Zachet/index.php','_self');
                break;
        }
    };   
    
function showBigSlides(n){
    var i = n-1; 
    var slides = document.getElementsByClassName("item"); 
    var dots = document.getElementsByClassName("slider-dots_item"); 
    var slider = document.getElementsByClassName("slider");
    var closeButton = document.getElementsByClassName("close");  
        
    closeButton[0].style.display = "block";
    
    slider[0].className = slider[0].className.replace(" bigSlide", "");
    slider[0].className += " bigSlide"; 
   
   
    if (n > slides.length) {
      slideIndex = 1;
    }
    
    if (n < 1) {
        slideIndex = slides.length;
    }
   
    for (i = 0; i < dots.length; i++) {
        dots[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" active", "");
    }
    
    for (i = 0; i < slides.length; i++) {
        slides[i].className = slides[i].className.replace(" bigSlideItem", "");
        slides[i].className += " bigSlideItem";
        slides[i].style.display = "none";
    }
    
    slides[slideIndex - 1].style.display = "block"; 
}
</script>
    </body>
</html>


