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

.slider{
    max-width: 740px;
    position: relative;
    margin: auto;
    height: 510px;
    margin-bottom: 15px;
}

.slider .item img {
    object-fit: cover;
    width: 100%;
    height: 510px;
    border: none !important;
    box-shadow: none !important;
}


.slider .prev, .slider .next {
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
.slider .next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.slider .prev:hover,
.slider .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.slider-dots {
    text-align: center;
}
.slider-dots_item{
    cursor: pointer;
    height: 100px;
    width: 100px;
    margin: 2px 2px;
    display: inline-block;
}
 
.slider-dots_item img{
    object-fit: cover;
    width: 100px;
    height: 100px;
}

.slider-dots_item iframe{
    object-fit: cover;
    width: 100px;
    height: 100px;
    border: none !important;
    box-shadow: none !important;
}

.active{
    background-color: yellow;
    width: 110px;
    height: 110px;
    padding-top: 10px;
}
        </style>
        
    </head>
    <body>

<div class="back">
    <a href="http://134.122.94.44/">Назад</a>
</div>
      
<div class="slider">

    <div class="item">
        <a href="img/image1.jpg" onclick="return hs.expand(this)">
            <img src="img/image1.jpg">
        </a>
    </div>

    <div class="item">
        <a href="img/image2.jpg" onclick="return hs.expand(this)">
            <img src="img/image2.jpg">
        </a>
    </div>

    <div class="item">
        <iframe width="740" height="510" src="https://www.youtube.com/embed/Owi3lG9XoNU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="Второе видео"></iframe>  
    </div> 

    <div class="item">
        <a href="img/image3.jpg" onclick="return hs.expand(this)">
            <img src="img/image3.jpg">
        </a>
    </div>

    <div class="item">
        <a href="img/image4.jpg" onclick="return hs.expand(this)">
            <img src="img/image4.jpg">
        </a>
    </div>

    <div class="item">
        <a href="img/image5.jpg" onclick="return hs.expand(this)">
            <img src="img/image5.jpg">
        </a>
    </div>

    <div class="item">
        <iframe width="740" height="510" src="https://www.youtube.com/embed/RdPEwDlcaNE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="Второе видео"></iframe>
    </div> 
    
    <div class="item">
        <a href="img/image6.jpg" onclick="return hs.expand(this)">
            <img src="img/image6.jpg">
        </a>
    </div>
   
    <a class="prev" onclick="minusSlide()">⇦</a> 
    <a class="next" onclick="plusSlide()">⇨</a>
</div>
 
<div class="slider-dots">
    <span class="slider-dots_item" onclick="currentSlide(1)"><img src="img/image1.jpg"></span> 
    <span class="slider-dots_item" onclick="currentSlide(2)"><img src="img/image2.jpg"></span> 
    <span class="slider-dots_item" onclick="currentSlide(3)"><img src="img/prevVideo1.jpg"></span>
    <span class="slider-dots_item" onclick="currentSlide(4)"><img src="img/image3.jpg"></span>
    <span class="slider-dots_item" onclick="currentSlide(5)"><img src="img/image4.jpg"></span>
    <span class="slider-dots_item" onclick="currentSlide(6)"><img src="img/image5.jpg"></span>
    <span class="slider-dots_item" onclick="currentSlide(7)"><img src="img/prevVideo2.jpg"></iframe></span>
    <span class="slider-dots_item" onclick="currentSlide(8)"><img src="img/image6.jpg"></span>
</div>        
    
<script>
var slideIndex = 1; 
showSlides(slideIndex); 


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
</script>
    </body>
</html>


