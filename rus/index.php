<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Самарканд</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/registon.css">
   <!-- Javascript file link -->
   <script src="js/registon.js"></script>

   <!-- JQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
</head>
<body>


<?php include 'components/user_header.php'; ?>

<div class="registon"> 
  <div class="tillarone">
         <a href="../index.php" class="tillartwo">O'zbekcha</a>
         <a href="../english/index.php" class="tillartwo">English</a>
         <a href="index.php" class="tillartwo">Русский</a>
  </div>
</div>



<div class="home-bg">

<section class="home">


   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>



<section class="category">

   <h1 class="heading">Исторические памятники Самарканда</h1>
   <b style="color:#FFFFFF; font-size:5px">Zafarali Daminov</b>
   <div class="swiper category-slider">

   <div class="swiper-wrapper">

  
   <a href="registonmaydoni.php" class="swiper-slide slide">
      <img src="images/icon15-15.png" alt="">
      <h3>Регистан</h3>
   </a>

   <a href="shohizinda.php" class="swiper-slide slide">
      <img src="images/icon13-13.png" alt="">
      <h3>Шахизинда</h3>
   </a>

   <a href="bibixonim.php" class="swiper-slide slide">
      <img src="images/icon11-11.png" alt="">
      <h3>Бибиханим</h3>
   </a>

   <a href="al-buxoriy.php" class="swiper-slide slide">
      <img src="images/icon12-12.png" alt="">
      <h3>Аль-Бухари</h3>
   </a>

   <a href="al-motrudiy.php" class="swiper-slide slide">
      <img src="images/icon2-2.png" alt="">
      <h3>Аль-Мотруди</h3>
   </a>

   <a href="doniyor-ota.php"  class="swiper-slide slide">
      <img src="images/icon3-3.png" alt="">
      <h3>Отец Даниил</h3>
   </a>

 
   <a href="amir-temur.php"class="swiper-slide slide">
      <img src="images/icon4-4.png" alt="">
      <h3>Амир Темур</h3>
   </a>

   <a href="afrosiyob.php" class="swiper-slide slide">
      <img src="images/icon14-14.png" alt="">
      <h3>Афросиаб</h3>
   </a>

   <a href="shop.php" class="swiper-slide slide">
      <img src="images/icon9-9.png" alt="">
      <h3>Все</h3>
   </a>
   
   
   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<!-- Effectli rasmdstur kodi boshlandi -->

  
<div class="containercon">
        <div class="section-title">
           
        </div>

        <div class="rowcon">

            <div class="columncon">
                
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/reg2.png" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Площадь Регистан</h2>
                            <p>Сам район Регистон делится на несколько частей, это медресе Тиллакори, Шердор и Улугбека. </p>
                            <div class="effect-btn">
                                <a href="registonmaydoni.php" class="btncon"><i class="fa fa-eye"></i> Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/3reg400.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Медресе Тиллакори</h2>
                            <p>Изначально оно называлось "Малый медресе Налангтошби". Позже, поскольку количества золота, использованного при отделке мечети, хватило на постройку еще одного памятника, ее стали называть «ювелирной» (сделанной из золота).</p>
                            <div class="effect-btn">
                                <a href="3tamadrasalar.php" class="btncon"><i class="fa fa-eye"></i>Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/2reg400.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                        <h2>Медресе Шердар</h2>
                             <p>Медресе Шердар — памятник архитектуры в Самарканде. В составе ансамбля Регистан. Ялангтош Бахадир был построен вместо дома Мирзо Улугбека. Находится напротив медресе Улугбека.</p>
                            <div class="effect-btn">
                                <a href="3tamadrasalar.php" class="btncon"><i class="fa fa-eye"></i>Узнать больше </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/bibixonim9.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                        <h2>Медресе Бибиханим</h2>
                             <p>Мечеть Бибиханим Джаме (Мечеть Амира Темура Джаме) — памятник архитектуры в Самарканде. Оно связано с именем старшей жены Амира Темура Бибиханум (первоначально госпожа Сараймульк).</p>
                            <div class="effect-btn">
                                <a href="bibixonim.php" class="btncon"><i class="fa fa-eye"></i>Узнать больше </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/shoxizinda4.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                        <h2> Шахизинда </h2>
                             <p>Архитектурный комплекс Шахизинда был основан династией Караханидов.Самым древним из них является мавзолей Кусама ибн Аббаса, в народе известный как Шахизинда (гробница царей).</p>
                            <div class="effect-btn">
                                <a href="shohizinda.php" class="btncon"><i class="fa fa-eye"></i>Узнать больше </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/amir400.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                        <h2>Гори Амир</h2>
                             <p>Горийский мавзолей Амира или Амира Темура — памятник архитектуры в Самарканде. В народе его называют Гори Амир или Гори Мир (Мир Сайид Барака).</p>
                            <div class="effect-btn">
                                <a href="amir-temur.php" class="btncon"><i class="fa fa-eye"></i>Узнать больше </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!-- Effectli rasmdstur kodi tugadi -->





<section class="home-products">

   <h1 class="heading">Информация об исторических памятниках</h1>
<!-- 
   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <input type="submit" value="Sayohat uchun" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">Tarixiy joylar qushilmagan!</p>';
   }
   ?> -->

   </div>

   <div class="swiper-pagination"></div>

</div>

</section>


<!-- Sariqli rasm content dastur kodi boshlandi -->

    <div class="wrappermalumot1">
       <div class="boxmalumot">
         <span><i class="fa fa-bars"></i></span>
         <div class="contentmalumot">
         <h2 style="font-size: 18px; color: white;">Имама аль-Бухари</h2>
          <p>Мавзолей Имама аль-Бухари 19583 Имам аль-Бухари, один из известных ученых мусульманского мира, родился в Бухаре 21 июля 810 г., умер в 870 г. в селении Хартанг, расположенном в 25 км от Самарканда ( ныне Челакский район Самаркандской области) и там похоронен. В мавзолее Имама аль-Бухари построен мемориальный комплекс в соответствии с архитектурными традициями Средней Азии. 
         </p>
         <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="al-buxoriy.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
         </div>
      </div>
    </div>  

     
    <div class="wrappermalumot2">
        <div class="boxmalumot">
          <span><i class="fa fa-bars"></i></span>
          <div class="contentmalumot">

              <h2 style="font-size: 18px; color: white;">Усыпальница отца Даниила</h2>
           <p>Мавзолей Ходжи Данияра является памятником архитектуры в Самарканде Мавзолей Ходжи Данияра является одним из самых престижных и известных мест паломничества в Самарканде. Представители трех религий – ислама, христианства и иудаизма – посещают мавзолей Ходжи Даниера. Даниер, Даниер, Даниил - появились в мусульманской, христианской и еврейской литературе за четыреста лет до рождения Амира Темура.
          </p>
          <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="doniyor-ota.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
          </div>
       </div>
     </div> 


     <div class="wrappermalumot3">
        <div class="boxmalumot">
          <span><i class="fa fa-bars"></i></span>
          <div class="contentmalumot">

              <h2 style="font-size: 18px; color: white;"> Амира Темура</h2>
           <p>Мавзолей Амира Темура, Гори Амир (конец 14 века - 1405 год) - памятник архитектуры в Самарканде. В народе его называют Гори Амир или Гори Мир (Мир Сайид Барака). В мавзолее были захоронены люди, принадлежащие к династии Тимуридов (Амир Темур, его старший Мир Сайид Барака, сыновья Умар-шейх, Мироншах и Шахрух, внуки Мухаммед Султан, Улугбек и др.) В основном двор с воротами и мавзолей здание сохранилось. 
          </p>
     
          <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="amir-temur.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
          </div>
       </div>
     </div> 


     <div class="wrappermalumot4">
        <div class="boxmalumot">
          <span><i class="fa fa-bars"></i></span>
          <div class="contentmalumot">

              <h2 style="font-size: 18px; color: white;">Статуя Амира Темура</h2>
           <p>Великолепные статуи Амира Темура находятся в городах Ташкент, Шахрисабз и Самарканд... Ташкент - открыт накануне независимости 31 августа 1994 года. Самарканд и Шахрисабз - 18 октября 1996 года, статуи Амира Темура были торжественно открыты в обоих городах.23-26 октября 1996 года международная организация ЮНЕСКО организовала международную конференцию «Амир Темур и его место в мировой истории».
          </p>
       
          <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="#"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
          </div>
       </div>
     </div> 




     <div class="wrappermalumot5">
       <div class="boxmalumot">
         <span><i class="fa fa-bars"></i></span>
         <div class="contentmalumot">
            
             <h2 style="font-size: 18px; color: white;">Обсерватория Мирзо Улугбека</h2>
          <p>Обсерватория Улугбека — один из редких образцов архитектуры 15 века в Самарканде, старинная астрономическая обсерватория. В нем находилось более десяти различных астрономических приборов и инструментов, самый главный из них — квадрантный прибор, состоящий из двойной дуги радиусом 40,2 м. В обсерватории имелись малые приборы: армиллярная сфера,солнечные и звездные часы, астролябия и другие.
         </p>
         <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="m-rasadxonasi.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
         </div>
      </div>
    </div>  

    <div class="wrappermalumot6">
       <div class="boxmalumot">
         <span><i class="fa fa-bars"></i></span>
         <div class="contentmalumot">
             <h2 style="font-size: 18px; color: white;">Сиабский базар</h2>
          <p>Бибиханим с одной стороны и мечети Хазрат Хизр с другой стороны, этот рынок расположен между комплексами Регистан и Шахизинда и является излюбленным местом туристов.Около 2000 прилавков накрыты навесами для защиты от летнего зноя и суровость зимы.Вход на рынок через трехстворчатые арочные ворота, украшенные голубыми изразцами в стиле мастерства, сохранившегося на протяжении веков.
          </p>
         <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="diqqatsj.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
         </div>
      </div>
    </div>   
    


<!-- Sariqli rasm content dastur kodi tugadi -->

<div class="section-title"></div>


<!-- CARUCELLLLLLLLLLLLL -->
<div id="container">
    
    
    <input hidden type="radio" name="carousel-control" id="button_a" checked/>
    <input hidden type="radio" name="carousel-control" id="button_b"/>
    <input hidden type="radio" name="carousel-control" id="button_c"/>
    <input hidden type="radio" name="carousel-control" id="button_d"/>            
            
    
    <div id="carousel">
        <div class="p-wrapper">
                    
            <section class="panel_a">
            <span class="bibi"> Афросиаб</span>
              <div  class="bibi2">Афросиаб — древние руины Самарканда. Это название появляется в исторических источниках применительно к древнему Самарканду только с XVII века. Древний Самарканд в Согдийских источниках назывался Смараканве. Мил. средний. После завоевания Самарканда войсками Александра Максуни в IV веке греческие авторы упоминают его в своих дневниках как Мароканда. Греческий перевод Смараканве в Марокко. После прихода к власти в Мовароуннахре Саманидов древняя Смараканве с IX века называлась Самаркандом.Афросиаб представляет собой обширный пустой холм, примыкающий к северной границе современного Самарканда, его площадь составляет 219 га. Штаны с горы. Он ограничен ручьем Сиоб. Жан. с другой стороны, он был присоединен к Самарканду, который назывался «старым городом».Сведения о ранней истории города в письменных источниках очень редки. Археологические раскопки в старом городе дают больше такой информации.</div>
              <div class="bibi3">
               <span><img src="images/Desktop/Afrosiyob/afrosiyob5.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Afrosiyob/afrosiyob2.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Afrosiyob/afrosiyob8.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images/Desktop/Afrosiyob/afrosiyob2.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div class="bibi2">
              Археологические раскопки позволяют увидеть, какие культурные слои имели толщину в несколько метров, выявить дома богатых и бедных, мастерские ремесленников, лавки купцов, улицы и площади, царские дворцы и храмы, мечети и медресе, оборонительные сооружения, система водоснабжения города и др. Археологические материалы, обнаруженные в Афросиабе, показывают, что Самарканд был основан как центральный город Сугдианы в VIII-V вв. до н.э. В 329 г. до н.э. город был разрушен войсками Александра Македонского, следы которого до сих пор хорошо сохранились в оборонительных сооружениях города. В 3-1 вв. до н.э., при династии Кушан, произошел подъем жизни города.
              </div>
              <div class="bibi3">
               <span><img src="images/Desktop/Afrosiyob/afrosiyob10.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/Afrosiyob/afrosiyob12.webp" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/Afrosiyob/afrosiyob9.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/Afrosiyob/afrosiyob11.webp" alt="Rasm topilmadi" ></span>
              </div>
               <div class="xarita1">
                        <div class="xarita">
                              <a href="https://www.google.com/maps/search/Afrosiyob+qalasi,+Samarqand/@39.6732965,66.9780477,1853m/data=!3m1!1e3">
                              Расположение на карте <i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
               
            </section>
                    
            <section class="panel_b">
            <span class="bibi">Горийский мавзолей Амира</span>
               <div class="bibi2">Мавзолей Амира Темура, Гори Амир (конец 14 века - 1405 год) - памятник архитектуры в Самарканде. В народе его называют Гори Амир или Гори Мир (Мир Сайид Барака). В мавзолее захоронены люди, принадлежащие к династии Тимуридов (Амир Темур, его старший Мир Сайид Барака, сыновья Умар-шейх, Мироншах и Шахрух, внуки Мухаммед Султан, Улугбек и др.). Бабур рассказывает, что сначала внук Темура Мухаммад Султан Мирза построил медресе в окрестностях самаркандской крепости Ташкурган. Когда Мухаммад Султан умер (1403 г.), Амир Темур приказал построить в его память мавзолей. Мавзолей построен во дворе медресе.</div>
              <div class="bibi3">
               <span><img src="images/Desktop/A-Temur/7A-Temur.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/A-Temur/2A-Temur.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/A-Temur/3A-Temur.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images/Desktop/A-Temur/4A-Temur.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div class="bibi2">
              Сохранился двор с воротами и здание мавзолея. В результате археологических исследований по обеим сторонам двора мавзолея были обнаружены остатки медресе и ханаки, построенных Мухаммедом Султаном. Медресе и ханака чорси занимают восточную и западную стороны двора. С южной стороны двора находится купольный мавзолей. Идите в мавзолей. от, в него можно попасть через коридор, построенный Улугбеком (1424 г.). Усыпальница мавзолея имеет высокий потолок, арку, а сверху покрыта надписями и внутренним куполом. Внешний купол поставлен на высоком постаменте с 64 ребрами (диаметр - 15 м, высота 12,5 м). Ряды надгробий размещены в мурабба-хазире, которая обнесена мраморной оградой посередине святыни. На верхней (сетке) находится усыпальница Мир Сайида Барака, сопровождавшего Амира Темура в его военных походах и заслужившего его высокое уважение. Сам Амир Темур был похоронен у подножия могилы Сайида Бараки. С трех сторон от него расположены гробницы Мухаммад Султана, Мироншаха, Омаршайха.
              </div>
              <div class="bibi3">
              <span><img src="images/Desktop/A-Temur/8A-Temur.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/A-Temur/5A-Temur.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/A-Temur/6A-Temur.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/A-Temur/1A-Temur.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div>
              <div class="xarita1">
                        <div class="xarita">
                              <a href="https://www.google.com/maps/place/Go'r+Amir+Maqbarasi/@39.6485509,66.9646358,604m/data=!3m1!1e3!4m14!1m7!3m6!1s0x3f4d18cc761ff98f:0x8a218422bc21edfa!2sGo'r+Amir+Maqbarasi!8m2!3d39.6485469!4d66.9692492!16zL20vMDRkcmYz!3m5!1s0x3f4d18cc761ff98f:0x8a218422bc21edfa!8m2!3d39.6485469!4d66.9692492!16zL20vMDRkcmYz">
                              Местоположение карты <i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
            </section>
                    
            <section class="panel_c">
                <span class="bibi">Мавзолей Бибиханим</span>
               <div class="bibi2">Медресе Бибиханум — медресе, построенное старшей женой Амира Темура Бибиханум (Хоним Сараймульк) в Самарканде в конце XIV века «в честь своей матери». Турист, ученый А. Вамбери рассказал, что в этом медресе обучалось около 1000 студентов. Но она была построена раньше мечети. Об этом свидетельствуют сведения дворцового историка Гиёсиддина Али о том, что «Амир Темур остановился в медресе 10 мая 1399 года». Историк Фасих Хавафи (1375-1442) утверждал, что когда Амир Темур увидел строительство мечети Джаме, он разгневался, потому что были нарушены пропорции архитектурного комплекса - крыльцо и крыльцо медресе были выше и круче, чем мечеть Джаме, и он наказал зодчих (Ходжа Махмуд Давуд и Мухаммад Джалд). Археологические раскопки также подтверждают это несоответствие. Каким бы величественным ни был фасад здания, заметно, что он не соответствует зданию перед ним. Согласно требованиям архитектурного стиля, неправомерно обрушившаяся крыша медресе была приговорена к сносу. Именно поэтому в последующие годы остатки медресе были снесены.</div>
              <div class="bibi3">
              <span><img src="images\Desktop\Bibixonim/bibixonim1.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images\Desktop\Bibixonim/bibixonim9.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images\Desktop\Bibixonim/bibixonim10.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images\Desktop\Bibixonim/bibixonim16.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div class="bibi2">
              Рядом с медресе Бибиханим для нее был построен дом Туман ого в «двойном» стиле. Исторические источники указывают, что этот дом был построен до 1399 года. Он соединен с большим сводчатым помещением с высоким куполом. Стены украшены красивыми цветами и красивыми украшениями. Комната очень хорошо освещена широкими окнами на 4 стороны, окнами и дверьми. Подвал-цистерна внизу поменьше, а стены отделаны крупными серыми камнями. В подвале хранится несколько каменных гробов. В результате землетрясения 1875 года обрушился купол цоколя, и стало известно, что внизу есть камни. С этого момента среди жителей распространился слух, что один из этих гробов принадлежит Бибиханиму. Археологические исследования, проведенные в 1941 году, вроде бы подтвердили эту историю. По этой причине до недавнего времени это помещение называлось мавзолеем Бибиханима.Последующие исследования внесли ясность в этот вопрос. Бибиханим (госпожа Сараймульк) была отравлена ​​в кризисные годы после смерти Амира Темура. Тело женщины в этом здании было забальзамировано (поэтому его привезли издалека), и, по словам антрополога, это была женщина средних лет с черными и вьющимися волосами.
              </div>
              <div class="bibi3">
               <span><img src="images\Desktop\Bibixonim/Bibi-Khanym.webp" alt="Rasm topilmadi" ></span>
               <span><img src="images\Desktop\Bibixonim/bibixonim9.jpg" alt="Rasm topilmadi"></span>
               <span><img src="images\Desktop\Bibixonim/bibixonim14.jpg" alt="Rasm topilmadi"></span>
               <span><img src="images\Desktop\Bibixonim/bibixonim11.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div>
              <div class="xarita1">
                        <div class="xarita">
                              <a href="https://www.google.com/maps/place/%D0%91%D0%B8%D0%B1%D0%B8+%D0%A5%D0%BE%D0%BD%D1%83%D0%BC+%D0%9C%D0%B0%D1%81%D0%B6%D0%B8%D0%B4%D0%B8/@39.6598724,66.9801815,406m/data=!3m1!1e3!4m6!3m5!1s0x3f4d18b96f1a8c49:0x710d9f233b69199e!8m2!3d39.660748!4d66.9800816!16zL20vMGJzOWsz">
                              Местоположение карты <i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
            </section>
                    
            <section class="panel_d">
      
                <span class="bibi"> Хазрата Хизира</span>
               <div class="bibi2">Мечеть Хазрати Хизр — одна из святынь Самарканда. Она признана первой мусульманской мечетью и памятником архитектуры в Самарканде. Мечеть была построена Кутейбой ибн Муслимом и названа в честь Хазрата Хизра. Согласно информации, сначала здесь было место отправления культа. В VIII веке арабы разрушили  огнепоклонников. Вместо храма на этом холме Кутайба ибн Муслим построил первое здание мечети, названное в честь Хазрата Хизра. Наше мнение подтверждается надписями 1274 года по хиджре (1854 год по Мелодии) и 1302 года по Хиджре (1884 год по Мелодии) на минарете, который был очищен и возвращен в свое древнее состояние.</div>
              <div class="bibi3">
               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir2.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir5.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir1.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir4.jpg" alt="Rasm topilmadi" ></span>
              </div>
              
              <div class="xarita1">
                        <div class="xarita">
                              <a href="https://www.google.com/maps/place/Hazrati+Xizr+masjidi/@39.6634436,66.9806549,603m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3f4d18bc7a6409bb:0x57e481af408fac1a!8m2!3d39.6634395!4d66.9832298!16s%2Fg%2F11h1st3ym">
                              Местоположение карты<i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
            </section>
                    
        </div> <!-- // .p-wrapper -->
    </div> <!-- // #carousel -->            
            
    
    <div id="navigation">
        <label for="button_a" class="label_a"> <span>1</span> </label>
        <label for="button_b" class="label_b"> <span>2</span> </label>
        <label for="button_c" class="label_c"> <span>3</span> </label>
        <label for="button_d" class="label_d"> <span>4</span> </label>
    </div> <!-- // #navigation -->               
            
    </div> <!-- // #container -->  
<!-- CARUCELLLLLLLLLLLLL tugadi-->

<div class="orqafon">

<р>
    Исторические письменные источники содержат сведения о древности эпохи Самарканда. В трудах Мухаммада ан-Насафи «Аль-Канд фий зикри уламой», Хайдара ас-Самарканди (XII век) «Кандияи Хурд», Абу Тахирходжи Самарканди «Самария», китайского историка Чжан Сяна, греческих и римских историков Арриана, Курси Руфа и многие др. авторы об этом писали. Самарканд и Рим были названы «вечными городами» в связи с их великими заслугами перед судьбой человечества. Недаром в народной поговорке «Самарканд сайкали ройи замин аст» говорят, что Самарканд — это полировка земли. Амир Темур с любовью лелеял Самарканд и сделал его жемчужиной мира.</p>

</div>


<div class="load-more"> <a href="orders.php">Больше информации<i class="fa-solid fa-arrow-right fa-beat-fade"></i></a> </div>

<!-- carusel 1 malumot  boshlandi-->

<div class="container-allbox">
<div class="containerbox">
  <img src="images/Desktop/Hazrati-Xizr/hazratixizir6.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white; font-size:25px;">Мечеть Хазрат Хизр</a></span>
</div>
<div class="containerbox">
  <img src=" images/Desktop/Mirzo-U/mirzo-u1.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Обсерватория Мирзо Улугбека</a></span>
</div>
<div class="containerbox">
  <img src="images/Desktop/Shohizinda/shoxizinda9.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Храм Шахизинды</a></span>
</div>
<div class="containerbox">
  <img src="images/Desktop/Arab-ota/ota1.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Арабского отца</a></span>
</div>
<div class="containerbox">
  <img src="images/Desktop/A-Temur-haykali/haykal5.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Могила Амира Темура</a></span>
</div>
<div class="containerbox">
  <img src="images/Desktop/Afrosiyob/afrosiyob5.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;"> Афросиаб</a></span>
   
</div>
</div>
<!-- carusel 1 malumot tugadi-->

<!--  BIRINCHI progresning boshlanish kodi  CIRCLE-->
<div class="samuzbar">
      <b>Статистика о путешественниках, прибывающих в Самарканд</b>
      <i class="fa fa-line-chart" aria-hidden="true"></i>
   </div>   
    <!--chart start-->
    <div class="chart">
      <ul class="numbers">
        <li><span class="belgisamuz1">100%</span></li>
        <li><span class="belgisamuz2">50%</span></li>
        <li><span class="belgisamuz3">0%</span></li>
      </ul>
      <ul class="bars">
        <li><div class="bar" data-percentage="74"></div><span>Март 2020</span></li>
        <li><div class="bar" data-percentage="65"></div><span>Апрел 2020</span></li>
        <li><div class="bar" data-percentage="45"></div><span>Март 2021</span></li>
        <li><div class="bar" data-percentage="50"></div><span>Апрел 2021</span></li>
        <li><div class="bar" data-percentage="72"></div><span>Март 2022</span></li>
        <li><div class="bar" data-percentage="80"></div><span>Апрел 2022</span></li>
        <li><div class="bar" data-percentage="85"></div><span>May 2023</span></li>
      </ul>
    </div>
    <!--chart end-->

    <script type="text/javascript">
    $(function(){
      $('.bars li .bar').each(function(key, bar){
        var percentage = $(this).data('percentage');
        $(this).animate({
          'height' : percentage + '%'
        },5000);
      });
    });
    </script>
<!--  BIRINCHI progresning tugash kodi BAR-->

<div class="containercon">
        <div class="section-title">
            <h1>Достопримечательности Самарканда</h1>
        </div>

        <div class="rowcon">

            <div class="columncon">
                
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Desktop/city/city04.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Самарканд: Силк роад</h2>
                            <p>Древний город не является историческим местом, но сейчас он становится очень популярным местом для туристов. Есть также различные изделия ручной работы из этого города</p>
                            <div class="effect-btn">
                                <a href="diqqatsj.php" class="btncon"><i class="fa fa-eye"></i> Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Desktop/Siyob-bozor/01.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Сиабский базар</h2>
                            <p>Бибиханим с одной стороны и мечети Хазрат Хизр с другой, расположенные между комплексами Регистан и Шахизинда, этот рынок также является излюбленным местом туристов.</p>
                            <div class="effect-btn">
                                <a href="diqqatsj.php" class="btncon"><i class="fa fa-eye"></i> Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Desktop/afrosiyob-muzeyi/muzey11.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                        <h2>Музей Афросиаб</h2>
                             <p>В музее собраны богатые коллекции керамики, стекла, камня, металла, кости, корапиластики и архитектурных узоров, освещающих материальную культуру Самарканда. Они составляют более 20 000 артефактов.</p>
                            <div class="effect-btn">
                                <a href="diqqatsj.php" class="btncon"><i class="fa fa-eye"></i> Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
           

          
        </div>
    </div>


<!-- tez tez so'raladigan savollar dastur kodi boshlanishi -->
<div class="oftenqs">
    <h1>Часто задаваемые вопросы</h1>
    
</div>
<!-- tez tez so'raladigan savollar dastur kodi tugadi -->

<!-- According to ya'ni tez tez beriladigan savollar dastur kodi boshlanishi -->
<div>
<ul class="accordion-menu">
<li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-bounce"></i>
               
                В каких регионах Республики Узбекистан находятся известные древние исторические памятники?
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                <li><a href="#">Во всех регионах Республики Узбекистан есть известные исторические памятники, мы перечислим некоторые из них! </a></li>
                    <li><a href="#">Самаркандская область: площадь Регистан, усыпальница Шахизинда, мечеть Биби-Ханым, мавзолей Амира Гори, усыпальница отца Даниёра, мавзолей имама аль-Бухари, мавзолей имама аль-Мотуруди и обсерватория Улугбека.</a></li>
                    <li><a href="#">Бухарская область: мавзолей Исмаила Сомони, комплексы Чор Бакр, Бахауддина Накшбанда, мечеть Магоки Аттар, ансамбль Пои-Калон, остатки древнего города Пойкент и медресе Тошсарай. <b>Эти исторические памятники были включены в список всемирного исламского наследия ICYeSCO.</b> </a></li>

                    <li><a href="#">Хорезмская область: город Хива, Земляной замок Ичан-Кала, Замок Айоз, Замок Забитых Овец, Замок Гулдурсун, Замок Пиль, Замок Анка, Замок Свинец В его состав входит замок Джанбас.</a></li>
                    <li><a href="#">Сурхандарьинская область: Кыргызский замок, комплекс Хаким ат-Термизи, отчий дом Кокилдар, комплекс Султан Саодат, мавзолей Саид Ваккос, платан Сайроб, пещера Тешикташ, отцовский район Ходжа Гур Гур, водопад Сангардак, памятник Далварзинтепа, замок Кампиртепа асы, башня Джаркурган</a></li>
                    <li><a href="#">Кашкадарьинская область: Мемориальный комплекс Абу Убайд ибн аль-Джарра, мост Карши, мечеть Голубой купол, медресе Кылычбой, медресе Ходжа Абдулазиз,</a></li>
                    <li><a href="#"> Ферганская область: ХАРД ХУДООРХАНА (ПАЛАС), Гробница МОДАРИХАНА, ШАХИМАРДОН</a></li>
                    <li><a href="#">Андижанская область: мавзолей Кутайба ибн Муслима, Мингтепа, гостиница Ахмадбеходжи, внутри ковчега</a></li>
                    <li><a href="#">Наманганская область: монумент Бибиона в Чусте, усыпальница Султана Увайса Карани в Чортоке, мавзолей Ходжи Амина</a></li>
                </ul>
            </li>



            <li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-beat-fade"></i>
                Сколько исторических памятников в Самаркандской области?<b> <i class="fa-solid fa-question fa-beat-fade"></i></b> 
                    
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                    <li><a href="#">Самарканд – один из древнейших городов мира – его история насчитывает более 2700 лет. В Самарканде насчитывается более 600 зданий, имеющих историческое значение. Исторические письменные источники содержат сведения о древности эпохи Самарканда. В трудах Мухаммада ан-Насафи «Аль-Канд фий зикри уламой», Хайдара ас-Самарканди (XII век) «Кандияи Хурд», Абу Тахирходжи Самарканди «Самария», китайского историка Чжан Сяна, греческих и римских историков Арриана, Курси Руфа и многие др. авторы об этом писали. </a></li>
                    <li><a href="#">SАмарканд – один из древнейших городов мира, равный Риму, Афинам и Вавилону. Поэты и историки прошлого давали ему прекрасные сравнения, такие как «Райский сад Востока», «Земля», «Бесценная жемчужина восточного мира», «Украшение стран мира», «Римоподобный город Востока». и т. д. даром не дали. Самарканд получил название «Вечные города» в связи с их великими заслугами перед судьбой человечества. Недаром в народе существует поговорка «Самарканд сайкали ройи замин аст» - Самарканд – это лак земной поверхности. Амир Темур с любовью лелеял Самарканд и сделал его центром мира. </a></li>
                </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-beat-fade"></i>
                Есть ли какая-нибудь общая информация о "Самарканд сайкали рои замин аст"?
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                    <li><a href="#">В VI веке Самарканд входил в состав Тюркского ханства и управлялся местными правителями. В этот период Самарканд торговал с Индией, Ираном, Египтом и Византией. В свое время он был известен как «Каганат 10 Стрел».</a></li>
                    <li><a href="#">К управлению Мовароуннахром и его районами с 20-х годов IX века привлекались представители местных заминдаров, активно участвовавшие в подавлении восстаний против арабов, например, управление Самаркандом перешло в руки Саманидов . С этого времени Самарканд стал столицей соманского государства. С 887 года в Самарканде впервые чеканились саманидские серебряные монеты. Даже после переноса столицы Саманидов в Бухару (889 г.) Самарканд оставался одним из крупнейших ремесленных и торговых центров Моваруннахра. С XI века Самарканд входил в состав Караханидского государства, в эпоху Караханидов объединение разных стран дало возможность развитию науки и культуры. В этот период возрастало, расширялось и развивалось значение Самарканда как административного и культурного центра.</a></li>
                    <li><a href="#">В 1220 году войска Чингисхана вторглись в Самарканд, подожгли город и убили большую часть населения, остальные выжили, покинув город. Через несколько лет Самарканд начал восстанавливаться. Марко Поло, венецианский турист, приехавший в Самарканд во второй половине XIII века, писал, что «Сонмаркон — великий и знаменитый город». Во время правления монголов Самарканд входил в состав Чигатойского улуса.</a></li>
                    <li><a href="#">В середине 14 века в Мовароуннахре произошли народные выступления против монголов. В результате восстания полевых командиров на несколько месяцев в городе установилась народная власть. В конце 14 века и в 15 веке экономическая, политическая и культурная жизнь Самарканда значительно улучшилась. Как столица царства Амира Темура Самарканд приобрел мировую известность. Столица султаната Самарканд процветала во время правления Амира Темура. Дворцы, мечети, медресе, мавзолеи возводятся в городе руками зодчих и строителей из Исфахана, Шираза, Алеппо, Хорезма, Бухары, Карши и Кеша. </a></li>
                    <li><a href="#"> В частности, будут построены мавзолей Шадымульк аго, мавзолей Ширинбека аго и другие, принадлежащие архитектурному комплексу Шахи-Зинда. В городе возвышаются мечеть Бибиханим Джаме, резиденция Амира Темура Коксарой и Бостонсаройс. В целом город Самарканд был полностью перестроен во времена правления Амира Темура. Город был окружен мощной крепостной стеной, и было установлено 6 ворот, именуемых Оханин, Шайхзаде, Чорсу, Коризгох, Созангарон и Феруза. В земледельческих оазисах Мовароуннахра, в частности, в Зеравшанской долине, были построены десятки оросительных сетей и расширены сельскохозяйственные угодья..</a></li>
                    <li><a href="#"> 17 февраля 1925 года на состоявшемся в Бухаре первом учредительном съезде Всеузбекских Советов была принята «Декларация об образовании Советской Социалистической Республики Узбекистан». Город Бухара был выбран первой столицей республики. Согласно информации из книги «Важные даты истории Узбекистана», изданной издательством «Узбекистан» в 2012 году, в апреле 1925 года он был перенесен из столицы страны Бухары в Самарканд. В 1930 году столица была перенесена в Ташкент, и до 31 августа 1991 года он был столицей УзССР, а затем Республики Узбекистан.</a></li>
                    <li><a href="#"> Благодаря своей древней истории и архитектурным памятникам Самарканд стал настоящим городом-музеем, признанным во всем мире. Поэтому по решению правительства республики в 1982 году на базе города Афросиаб г. Самарканда, архитектурных памятников средневековья и зданий в «Новом Город», построенный в 19-20 веках, историко-краеведческий музеи. В том же году были определены пределы охраны исторической части города.</a></li>
                    <li><a href="#"> Архитектурно-исторические памятники Самарканда были включены в список Всемирного наследия на 25-й сессии ЮНЕСКО, проходившей в Финляндии в 2001 году.</a></li>
                    <li><a href="#">Самарканд – один из старейших и центральных городов мирового развития, город, внесший большой вклад в сокровищницу мировой культуры и науки. Под руководством Президента Республики Узбекистан и Правительства Республики Узбекистан были проведены большие работы по реставрации и ремонту памятников архитектуры города Самарканда, особенно по реконструкции, ремонту и благоустройству старая часть города. Памятники архитектуры, созданные династией Тимуридов, ничем не отличаются от памятников архитектуры, созданных в таких странах, как Египет, Китай, Индия, Греция, Италия. </a></li>
                    <li><a href="#">Теперь он относится к категории известных городов мира. Проводится большая работа по улучшению состояния исторических памятников и их сохранению. Самарканд становится пляжным городом, и туристы со всего мира приезжают, чтобы увидеть великие исторические памятники.</a></li>
                </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-beat-fade"></i>
                Какие самые известные исторические памятники в Самарканде и какие исторические памятники посещают туристы?
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                    <li><a href="#"> В Самарканде много известных исторических памятников, и для посещения всех созданы условия. Среди них наиболее посещаемыми историческими памятниками являются следующие: </a></li>
                    <li><a href="registonmaydoni.php">площадь Регистан</a></li>
                    <li><a href="shohizinda.php"> Шахизинды</a></li>
                    <li><a href="bibixonim.php">Бибиханим  (1399-1404)</a></li>                  
                    <li><a href="3tamadrasalar.php">Медресе Тиллакори (1647-1659/6</a></li>
                    <li><a href="3tamadrasalar.php">Медресе Шердар (1619-1635/36)</a></li>
                    <li><a href="3tamadrasalar.php">Медресе Улугбека (1417-1420)</a></li>
                    <li><a href="amir-temur.php">Мавзолей Гори Амир(1404)</a></li>
                    <li><a href="doniyor-ota.php">Отец Даниил</a></li>
                    <li><a href="al-buxoriy.php">имама аль-Бухари</a></li>
                    <li><a href="al-motrudiy.php">Imom al-Moturudiy </a></li>
                    <li><a href="m-rasadxonasi.php">Обсерватория Улугбека (1428-1429)</a></li>
                </ul>
            </li>
           
        </ul>
        </div>
    <script >let listElements = document.querySelectorAll('.link');

        listElements.forEach(listElement => {
            listElement.addEventListener('click', ()=>{
                if (listElement.classList.contains('active')){
                    listElement.classList.remove('active');
                }else{
                    listElements.forEach (listE => {
                        listE.classList.remove('active');
                    })
                    listElement.classList.toggle('active');
                }
            })
        });</script>


<!-- According to ya'ni tez tez beriladigan savollar dastur kodi tugashi -->

<div class="lavha1">Расположение Самарканда на карте</div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d669974.0111500308!2d66.1740052527628!3d39.85124753676018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d192105ad6575%3A0x3dd6eaee02d96aa6!2sSamarqand%20viloyati%2C%20O%60zbekiston!5e1!3m2!1suz!2s!4v1684938018621!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


  

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>