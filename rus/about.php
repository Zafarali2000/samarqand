<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>о нас</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/registon.css">

   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<!-- <div class="haqimizda"></div> -->

<!-- Slide boshlanishi -->
<div class="slideshow-container">

<div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="images/tatu1.jpg" style="width:100%">
    <div class="textrasm">ТАТУ СФ</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="images/tatu2.jpg" style="width:100%">
    <div class="textrasm">КОМНАТА РАЗРАБОТЧИКОВ</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="images/tatu3.jpg" style="width:100%">
    <div class="textrasm">ТАТУ СФ</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="images/tatu4.jpg" style="width:100%">
    <div class="textrasm">ПРОЦЕСС УРОКА</div>
</div> 

<div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="images/tatu5.jpg" style="width:100%">
    <div class="textrasm">КОМНАТА РАЗРАБОТЧИКОВ</div>
</div>
<a class="prevrasm" onclick="plusSlides(-1)">&#10094;</a>
<a class="nextrasm" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
<span class="dotrasm" onclick="currentSlide(1)"></span>
<span class="dotrasm" onclick="currentSlide(2)"></span>
<span class="dotrasm" onclick="currentSlide(3)"></span>
<span class="dotrasm" onclick="currentSlide(4)"></span>
<span class="dotrasm" onclick="currentSlide(5)"></span>
</div>

<script >
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dotrasm");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
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
<!-- Slide tugashi -->






<div class="containercon">
        <div class="section-title">
            <h1>Информация о конструкторе сайтов</h1>
        </div>

    </div>



<!-- ********************* -->

<section class="reviews">
   
  
<div class="swiper reviews-slider">

   <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p  class="foydalanuvchi">
            <b  class="foydalanuvchiend">Цель создания сайта</b><br>
             Одна из основных целей создания сайта – познакомить мир с историческими памятниками Узбекистана. Важно предоставить больше информации об исторических памятниках Самаркандской области. Из истории нам известно, что на этой земле жило много зрелых ученых. Творчество наших предков направлено на знакомство и информирование мира об исторических памятниках.</p>
            <h2 class="readread1"><a href="menhaqimda.php">Узнать больше <i class="fa-solid fa-arrow-right fa-fade"></i></a></h2>
            
         </div>

      <div class="swiper-slide slide">
         <img src="images/zafar.png" alt="">
         <p>
           <b class="ism">Зафарали Даминов</b><br>
           <b class="kasb"></b><br>
           <b class="ismsharif"></b><br>
           Ташкентский университет информационных технологий имени Мухаммада ал-Хоразми, Самаркандский филиал, факультет «Компьютерная инженерия» запрос.
         </p>
        <span class="tarmoq"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></span>
        <span class="tarmoq"> <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></span>
        <span class="tarmoq"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></span>
        <span class="tarmoq"> <a href="https://t.me/Zafarali_Husanovich"><i class="fab fa-telegram"></i></a></span>
        <h2 class="readread1"><a href="menhaqimda.php">Узнать больше <i class="fa-solid fa-arrow-right fa-fade"></i></a></h2>
            
      </div>

      <div class="swiper-slide slide">
         <p class="foydalanuvchi">
            <b class="foydalanuvchiext">Важность веб-сайта</b><br>
             Работа веб-сайта, посвященного историческим памятникам, очень актуальна, поскольку исторические памятники являются важными памятниками культуры, которые дают представление о нашем общем культурном наследии. Предоставляя информацию об исторических местах и ​​поощряя их сохранение, веб-сайты, посвященные этим местам, помогают будущим поколениям продолжать учиться у них.</p>
            <h2 class="readread1"> <a href="menhaqimda.php">Узнать больше <i class="fa-solid fa-arrow-right fa-fade"></i></a></h2>
      </div>
      
   </div>

      
   <div class="swiper-pagination"></div>

</div>

</section>




<!-- ******************** -->
<section class="reviews">
   
   <h1 class="heading">Комментарии пользователей</h1>
   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>
         Thanks in advance to the organizers of the site. Because all the necessary information can be found on the website created for us
         </p>
         <div class="stars">
            <a href=""><i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <i class="fa-solid fa-thumbs-up fa-fade"></i>
           </a>
         
         </div>
         <h3>Martin Charles Scorsese</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>
           
            Veb sayt yaratuvchilariga rahmat. Chunki ajdodlarimi haqida va tarixiy obidalar haqida aniq ma'lumotlar berilibdi. Qo'shimcha ma'lumot uchun xaritadagi manzili ham ko'rsatilgan. Biz bu veb sayt yaratilganidan xursandmiz!
         </p>
                  <div class="stars">
                  <a href=""><i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <i class="fa-solid fa-thumbs-up fa-fade"></i>
           </a>
         </div>
         <h3> Rustamova Dildora</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>
         Пишу в качестве предложения, т.е. для нас будет полезнее, если будет больше информации об исторических памятниках. Мы рады, что информация на сайте представлена ​​четко и понятно!
         </p>
         <div class="stars">
         <a href=""><i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <i class="fa-solid fa-thumbs-up fa-fade"></i>
           </a>
         </div>
         <h3>Алексей Серебряков</h3>
      </div>

       <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Websites like this are rare. The reason is that it is difficult to find platforms that provide information about each historical monument. And on this website, everything is explained simply and clearly.</p>
         <div class="stars">
         <a href=""><i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <i class="fa-solid fa-thumbs-up fa-fade"></i>
           </a>
         </div>
         <h3>Sophie Turner</h3>
      </div> 

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>