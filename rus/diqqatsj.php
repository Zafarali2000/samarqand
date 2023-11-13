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
   <title>Информация о достопримечательностях</title>

   
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- JQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

   
      <div class="content">
      <h3>Сиабский базар</h3>
          <p>Приехать в Самарканд и не посетить Сиабский базар – значит упустить очень интересное приключение. Восточный базар – уникальное место, где можно ощутить атмосферу древнего города. Еще несколько лет назад базары служили главными стратегическими торговыми объектами на Великом шелковом пути. Рынок Сийоб в Самарканде – одна из старинных точек города, которую должен увидеть каждый турист. <br><b>Атмосфера рынка:</b> Сиабский базар предлагает яркую и живую атмосферу с лабиринтом узких улочек и оживленных магазинов. Рынок известен своими яркими цветами, ароматами и энергичным шумом и суетой торговцев, местных жителей и туристов.
          </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Siyob-bozor/siyob3.jpeg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
      <p>Также известный как базар Сийоб, это оживленный рынок, расположенный в Самарканде, Узбекистан.
          <b> Немного информации о рынке Siab:</b>
         <b> Адрес: </b> Сиабский базар расположен в самом центре Самарканда, недалеко от мечети Бибиханум и площади Регистан. Это один из старейших и крупнейших рынков города, история которого уходит в глубь веков.
       </p>

          <p> <br>
          <b>Разнообразие товаров.</b> Сиабский базар – это место, где местные жители и гости могут найти самые разнообразные товары. Рынок разделен на секции, которые специализируются на различных продуктах. Вы можете найти ассортимент свежих фруктов, овощей, трав и специй, а также традиционные сладости, сухофрукты, орехи и местные деликатесы. Другие разделы рынка предлагают одежду, текстиль, изделия ручной работы, керамику и сувениры.</p>
          <p><b> Текущее использование:</b> Традиционная узбекская кухня: Сийобский базар — отличное место, где можно попробовать традиционную узбекскую кухню. Здесь много продуктовых лавок и небольших ресторанчиков, где можно найти плов (плов), шашлык (шашлык на гриле), сомсу (пирожное с начинкой из мяса или овощей) и разнообразные хлеба, в том числе, можно попробовать знаменитые узбекские лепешки. бр>
         </p>
         <p> <b>Культурный опыт:</b> Сиабский базар позволяет погрузиться в местную культуру и понаблюдать за повседневной жизнью самаркандцев. Это оживленный центр, где вы можете пообщаться с дружелюбными продавцами, узнать о традиционных узбекских продуктах и ​​увидеть местные торговые обычаи и традиции.
        </p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Siyob-bozor/siyob2.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
         <p>Местные жители говорят, что сухофрукты, сладости и орехи в этом месте настолько вкусные, что даже жители столицы ходят за ними на базар Сиёб. В то же время на восточном рынке можно найти самые разные специи, даже самые редкие. Помимо продуктов питания здесь также представлены изделия, изготовленные местными ремесленниками и мастерами. Хлебная линейка привлекает особое внимание, ведь самаркандский хлеб готовится из особого сорта муки. На Сиобском базаре можно найти более 17 видов хлеба.
             </p>
         </div>
         <div class="content">
            
         <p> Посещение Сиёбского базара – это прекрасный и эмоциональный опыт, позволяющий увидеть традиционную рыночную культуру Самарканда. Это место, где можно исследовать окрестности, попробовать местные деликатесы и открыть для себя уникальные продукты и ремесла, отражающие богатое наследие региона.</p>
            <h3 style="margin-bottom:15px;">Видео о Сиабский базар</h3>
         </div>
       
   </div>
   
   <iframe style="margin-bottom:15px;" width="100%" height="550px" src="https://www.youtube.com/embed/fwYOWhz4_W8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Расположение Сиобского базара на карте.</div>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1104.2972297950396!2d66.97931217243011!3d39.66210829156856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18b95039584f%3A0x8663a8356a71c854!2sSiab%20Bazar!5e1!3m2!1suz!2s!4v1684844493887!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="margin-bottom:20px;"></iframe>
      
   <br>
      <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top 45px; margin-bottom:25px; margin-top:20px;">
   <br>


<!-- *********************************************************************************************************************************************************************************************************************************** -->

<div class="row">

   
<div class="content">
<h3>Боқий шахар (Шелковый путь)</h3>
          <p>Конечно же, основной целью сегодняшнего визита станет «Комплекс Вечный город» Международного туристического центра, расположенный на территории Самаркандского района. Общая площадь равна 7 га. Все это делается для создания комфорта для туристов и увеличения потока туристов в Самарканд. Все это создано на основании заказа частного ООО «Самаркандский туристический центр».
          </p>
      </div>
      <div class="image">
      <img src="images/Desktop/city/city1.jpg" alt="rasm topilmadi">

      </div>


</div>




<div class="row">

   <div class="image">
   <img src="images/Desktop/city/city13.jpg" alt="rasm topilmadi">
      
</div>
   
   <div class="content">
            
   <p><b>Вместимость: 1000 человек.</b> <br>
          <b>На территории: 1 галерея и старинный восточный базар. <br>
          Ремесленные мастерские: 14, количество ларьков в них 36. <br>
          Ресторан национальной кухни: 2.
       </b>
    </p>

          <p><b>В том числе: гончарная мастерская - 3;
             <br>
             - кузнечная мастерская - 2;
             <br>
             - Самаркандский цех изготовления бумаги - 1;
             <br>
             - цех шелкового ковроткачества - 3;
             <br>
             - ювелирная мастерская - 3;
             <br>
             - мастерская резьбы по дереву - 2.

          </b>
      </p>
   </p>
   </div>
</div>


<!-- 6666 -->
<div class="row">
<div class="content">
<p>Открывшийся в Самарканде международный туристический центр «Великий шелковый путь» может обслуживать 2 млн туристов в год. Строительство комплекса началось в 2019 году на площади 212 га вдоль гребного канала в Самаркандском районе.В центре находятся Конгресс-холл, комплекс «Бессмертный город», амфитеатр и многие другие объекты. Амир Темур» и еще семь отелей.

    </p>
</div>

</div>
<!-- 666 -->
<div class="row">
<div class="content">
<p>В историческом комплексе «Вечный город» расположены народные ремесленные мастерские в области живописи, прикладного искусства, ювелирного дела, чайханы в национальном стиле, кондитерские, восточный базар Чорсу, галерея национальной одежды, торговля, библиотека, есть театр и шахматная школа.Образным выражением нового центра стала музыкальная повесть «Эпос о Вечном городе». Шоу, объединившее искусство нашего народа и мира, придало церемонии особый шарм.
    </p>
  
</div>
<div class="image">
<img src="images/Desktop/city/city9.jpeg" alt="rasm topilmadi">

</div>


<div class="content">
<p>Также созданы удобства для туристов, посещающих Самарканд. Имеются также гостиницы, обслуживающие туристов.Новый туристический центр сыграет важную роль в увеличении числа иностранных туристов, приезжающих в Самарканд с 1,5 млн. человек. Он направлен на увеличение числа туристов с нынешних 2 миллионов до 9 миллионов в ближайшие пять лет. Самое главное, количество людей, работающих в сфере туризма, превышает 500 000 человек.
    </p>
</div>

</div>
<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Видео о Боқий шахар </div>
<iframe  style="margin-bottom:20px;" width="100%" height="550px"" src="https://www.youtube.com/embed/mtJ4fsrwU3w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<iframe style="margin-bottom:20px;" width="100%" height="550px" src="https://www.youtube.com/embed/mz95LxPVpkU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


   <div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Расположение Вечного города на карте.</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5567.523438153006!2d67.05862323822576!3d39.659381804472204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d215f218c9fa9%3A0x1b8eb01d6e562990!2sSilk%20Road%20Samarkand!5e1!3m2!1suz!2s!4v1684844374078!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-bottom:20px; margin-top:20px;">
   <br>

<!-- *********************************************************************************************************************************************************************************************************************************
 -->

 <div class="row">

   
<div class="content">
   <h3 >Африканский музей</h3>
   <p>Самаркандский городской историко-краеведческий музей был создан в 1970 году. Музей расположен в городе Афросиаб - древней части Самарканда, до завоевания монголами.В выставочных залах музея представлены экспонаты, освещающие историю города с середины первого тысячелетия до н.э. XIII века Самарканд на протяжении двух тысячелетий (Согд или Согдия) является центральным городом, и экспонаты, выставленные в музее, ярко освещают культурную, политическую, религиозную и промышленную жизнь Самарканда на высоком уровне.
    </p>
  
</div>
<div class="image">
<img src="images/Desktop/afrosiyob-muzeyi/muzey2.jpg" alt="rasm topilmadi">

</div>


<div class="content">
<p>В музее собраны богатые коллекции керамики, стекла, камня, металла, кости, корапиластики и архитектурных узоров, освещающих материальную культуру Самарканда. Это более 20 000 артефактов.Основная часть этих экспонатов выставлена ​​в экспозиции музея, состоящего из 11 залов, а остальные вспомогательные материалы хранятся в фондах музея.Музей истории города Самарканда, расположенного в восточной части древнего города Афросиаб, был основан в 1970 году по инициативе Шарифа Рашидова от 24 октября.
</p>

</div>

</div>




<div class="row">

   <div class="image">
   <img src="images/Desktop/afrosiyob-muzeyi/muzey8.jpg" alt="rasm topilmadi"> 
      
</div>
   
   <div class="content">
   <p>В <b>первом зале</b> музея размещена рельефная карта, на которой представлены материалы по истории археологического изучения развалин Афросиаба до середины XIX века, археологические объекты и административные памятники города.
          <br>
          <b>Во втором зале</b> находятся предметы, относящиеся к истории первых веков жизни города: макет гончарной печи, мельницы. ср. Размещены гончарные, каменные и металлические предметы VI-IV веков.

      </p>
      
   </div>


   
   <div class="content">
   
   <p> <b>В третьем зале</b> нашли свое место предметы, относящиеся к эллинистическому периоду, это самаркандская мельница. ср. Здесь представлены макеты оборонительных стен, построенных в III-II веках, оружие, монеты, гончарные, терракотовые, каменные и деревянные предметы, а также фрагменты деревянной резьбы, снятые с крепостной стены. <br>
       В четвертом зале заняли свое место предметы, освещающие духовную жизнь и быт самаркандцев I-IV вв. н.э., среди которых алтарь-очаг IV в. н.э., терракотовые статуэтки, предметы быта, мастерская с костями отображаются. <br><b> В пятом зале</b> предметы, связанные с верой в огонь и духи предков: оссуарии, молитвенная часть дома, фрески, деревянные скульптуры-столбы в виде танцовщицы, предметы с согдийской письменностью - кожа (конверт) хм, порсанг. В то же время свое место нашли предметы быта из железа, кости и керамики.
       </p>
      <br>
   </div>

</div>





<div class="row">


<div class="content">
<p>Среди редчайших экспонатов музея особое место занимают настенные росписи, украшающие стены вестибюля дворца VII века, обнаруженные в 1965 году в центральном зале, в нескольких сотнях метров к западу от здания музея. Это была резиденция рода Вархуманов, правивших Самаркандом в третьей четверти VII века. На четырех стенах изображены четыре композиционных сюжета – прием послов правителем Самарканда, торжественное посещение мавзолея, охота на ильвиров и др.
    </p>
  
</div>
<div class="image">
<img src="images/Desktop/afrosiyob-muzeyi/muzey3.jpg" alt="rasm topilmadi">

</div>


<div class="content">
<p>Настенные росписи, представленные в центральном зале музея «Афросиаб», считались редкими произведениями искусства своего времени и использовались для оформления гостевых приемных. Случайно обнаружили закопанную в землю стену при строительстве ташкентской дороги, позже эти росписи специальными методами были перенесены в центральный зал музея и экспонируются с 1985 года. После археологических раскопок было установлено, что это место принадлежало гостинице высокопоставленного лица. Точнее, это гостевая комната короля Вархумана, правившего в третьей половине 7 века.
    </p>
  
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;"><br><br>

</div>

</div>
<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Видеоролик о музее Афросиаб</div>
<iframe style="margin-bottom:20px;" width="100%" height="550px" src="https://www.youtube.com/embed/61Mm3HmvMXY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin-bottom:20px;">Адрес музея Афросиаб на карте.</div>
<iframe style="margin-bottom:20px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1107.2390537836843!2d66.99229932566072!3d39.669193103266544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18a1fa7449c3%3A0xb56e2a63f11d12c0!2sSamarqand%20asos%20solingan%20tarix%20muzeyi!5e1!3m2!1suz!2s!4v1684844057398!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


 
   <br>
      <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; ">
   <br>

   <div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Фотографии о достопримечательностях</div>
   
   <div class="containerzed">

         <div class="box-containerzed">

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/Siyob-bozor/siyob4.jpg" alt="rasm topilmadi">
                     
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/Siyob-bozor/01.jpg" alt="rasm topilmadi">
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/Siyob-bozor/siyob2.jpg" alt="rasm topilmadi">
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/city/city5.jpeg" alt="rasm topilmadi">
               
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/city/city6.jpg" alt="rasm topilmadi">
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/city/city7.jpg" alt="rasm topilmadi">
                  </div>
               </div>
               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/city/city15.jpg" alt="rasm topilmadi">
               
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/city/city19.jpg" alt="rasm topilmadi">
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/city/city18.jpg" alt="rasm topilmadi">
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/city/city21.jpg" alt="rasm topilmadi">
               
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/city/city16.jpg" alt="rasm topilmadi">
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/city/city20.jpg" alt="rasm topilmadi">
                  </div>
               </div>


               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/afrosiyob-muzeyi/muzey1.jpeg" alt="rasm topilmadi">
                  </div>    
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/afrosiyob-muzeyi/muzey9.jpg" alt="rasm topilmadi">
                  </div>
               </div>

               <div class="boxzed">
                  <div class="imagezed">
                  <img src="images/Desktop/afrosiyob-muzeyi/muzey4.jpg" alt="rasm topilmadi">
                  </div>
               </div>


         </div>

      <div id="load-more"> Больше информации<i class="fa-solid fa-arrow-down fa-bounce"></i> </div>

</div>

<script>
let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
let boxes = [...document.querySelectorAll('.containerzed .box-containerzed .boxzed')];
for (var i = currentItem; i < currentItem + 3; i++){
   boxes[i].style.display = 'inline-block';
}
currentItem += 3;

if(currentItem >= boxes.length){
   loadMoreBtn.style.display = 'none';
}
}
</script>




   <a href="index.php" class="btn" style="margin-top:15px;">Вернуться на главную</a>

</section>

<br>
<br>



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