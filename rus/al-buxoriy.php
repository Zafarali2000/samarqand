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
   <title>Информация о мавзолее Имама аль-Бухари</title>

   
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
      <h3>Название исторического памятника:Усыпальница имама аль-Бухари</h3>
          <p>Бухари, Имам аль-Бухари (настоящее имя Абу Абдулла Мухаммад ибн Исмаил ибн Ибрагим аль Бухари) (810.21.7, Бухара - 870.31.8, село Хартанг близ Самарканда) - великий мыслитель исламского мира. Он также известен как имам мухаддисов, султан хадисоведения.Его отец, Исмаил, был одним из самых совершенных мухаддисов своего времени, учеником и близким другом Малика ибн Аласа, занимался коммерческими делами. Его мать была набожной, набожной, интеллигентной женщиной.Он учился у известных мухаддисов - Дахили, Мухаммада ибн Салама Пойканди, Мухаммада ибн Юсуфа Пойканди, Абдуллаха ибн Мухаммада Маснади и других.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Al-Buxoriy/al-buxoriy4.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
      <p>Имам аль-Бухари, также известный как Абу Абдулла Мухаммад ибн Исмаил аль-Бухари, был известным исламским ученым и собирателем хадисов, родившимся в 810 году нашей эры в Бухаре, недалеко от Самарканда, Узбекистан. Хотя Самарканд не имеет прямого отношения к жизни имама ал-Бухари, следует отметить, что он расположен недалеко от места, где он родился и вырос, и сыграл большую роль в широком распространении его впечатляющих произведений.
          <br><b>Некоторые важные моменты об имаме аль-Бухари и его связях с регионом:</b><br>
         <b> Жизнь и воспитание: </b> Имам аль-Бухари вырос в Бухаре, которая в его время была выдающимся центром исламской науки. Он начал искать знания в молодом возрасте, много путешествуя, чтобы найти известных ученых и изучить науку о хадисах (высказываниях и деяниях Пророка Мухаммеда). Он считается одним из величайших авторитетов в науке о хадисах.
       </p>

          <p><b>Сахих аль-Бухари: </b> Самая известная и важная работа имама аль-Бухари — это его сборник хадисов, известный как «Сахих аль-Бухари». Этот сборник считается одним из самых достоверных и надежных сборников хадисов в суннитском исламе. Он содержит более 7000 хадисов, тщательно отобранных из многих источников и высоко оценен учеными и мусульманами всего мира. <br>
          <b>Образование и влияние:</b> После завершения учебы имам аль-Бухари вернулся в Бухару, где преподавал и делился своими знаниями. Он привлек многих учеников, которые стремились учиться науке хадисов. Его учение и методология сильно повлияли на развитие хадисоведения и исламской науки.</p>
          <p><b> Переселение в Самарканд: </b> Хотя основная связь имама аль-Бухари связана с Бухарой, в исторических записях упоминается, что он также был в Самарканде. Предполагается, что он на некоторое время переселился в Самарканд, продолжил там свою научную деятельность и в дальнейшем способствовал широкому распространению хадисоведения в регионе.<br>
          <b> Наследие: </b> услуги имама аль-Бухари в сохранении науки о хадисах и пророческих традициях несравнимы. Его труды, в частности «Сахих аль-Бухари», веками изучались и почитались. Его методология оценки достоверности хадисов и строгие критерии, которые он установил для принятия, стали эталоном для ученых следующего поколения.</p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Al-Buxoriy/buxoriy1.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
         <p>После обретения Узбекистаном независимости комплекс был восстановлен. 29 апреля 1997 года правительством Республики Узбекистан принято решение о праздновании 1225-летия со дня рождения имама аль-Бухари по лунному календарю хиджры. В ноябре этого года Генеральная конференция ЮНЕСКО примет решение об участии в праздновании 1225-летия со дня рождения Исмаила аль-Бухари в 1998 году. В связи с этим в мавзолее Имама аль-Бухари был построен мемориальный комплекс, построенный по архитектурным традициям Средней Азии. Общая площадь земель, выделенных под памятник, составляет 10 га.
             </p>
         </div>
      
      
         
         <div class="content">
         
         <p> Строительство комплекса и его благоустройство проводились под руководством Президента Республики Узбекистан Ислама Каримова. В строительстве комплекса принимали участие народные мастера и предприниматели Самарканда, Бухары, Хивы, Ташкента, Андижана, Кокана и Шахрисабза. Мавзолей, мечеть, административное здание и др. построены в традициях национального зодчества.
             </p>
             <br>
         </div>

   </div>
   




   <div class="row">

   
      <div class="content">
      <p>Рядом с комплексом Имама аль-Бухари находится Международный центр Имама аль-Бухари, созданный на основании постановления Президента Республики Узбекистан Ислама Каримова от 23 мая 2008 года. Комплекс Имама аль-Бухари является одним из крупнейших и уникальных сооружений такого типа, построенных за последнее время в нашей стране. По словам Ислама Каримова, этот комплекс является не только святым местом паломничества, но и играет важную роль в воспитании молодого поколения, которое несет в мир образ нашей страны в Узбекистане, дарит каждому жизнь и вечность. , это одно из мест, которое заставляет задуматься.
          </p>
      </div>
      <div class="image">
      <img src="images/Desktop/Al-Buxoriy/al-buxoriy5.jpeg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
     
         <p>Административное здание комплекса выходит на юг. Вход в комплекс осуществляется через трое больших резных арочных ворот. У главного входа через сторожку устроено большое крыльцо в национальном стиле. Перед входными воротами написан текст истории строительства комплекса на арабском и узбекском языках. При входе в сторожку, с правой стороны административные и другие помещения. В основной части комплекса находится мавзолей имама аль-Бухари. Это кубическое сооружение имеет семнадцатиметровый купол. Стены отделаны светло-зеленой, бежевой, беленой плиткой, мрамором, ониксом. С правой стороны, под надгробием (сагана) из оникса светлого цвета, находится гробница аль-Бухари, облицованная мрамором. С левой стороны двора, площадь 786 кв.м. есть мечеть. Общая площадь веранд 214 кв. м. Одновременно в мечети могут молиться 1500 человек.
         </p>
         <p>
         </p>

      </div>

   </div>

   



   <div class="row">

         <div class="image">
         <img src="images/Desktop/Al-Buxoriy/al-buxoriy.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
         <p>По инициативе Президента Республики Узбекистан Шавката Миромоновича Мирзиёева проводится реконструкция имама аль-Бухари. Известно, что в 2019 году по инициативе президента здесь были созданы Международный исследовательский центр имама Бухари и Школа хадисоведения.
           По проекту комплекса будет большая мечеть на 8000 мест, четыре симметричных минарета, аллея при въезде с дороги. Кроме того, для паломников будут построены 7 гостиниц, 3 автостоянки, автовокзал, супермаркет, рынок.
             </p>
            
         </div>
      
      
         
         <div class="content">
         
            <p></p>
            <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;"><br>
            <h3>Фото и видео исторического памятника.</h3>
            <br>
         </div>

   </div>
   



   <br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;">
   <br>
   <div class="containerzed">

<div class="box-containerzed">

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Al-Buxoriy/buxoriy0.jpg" alt="">
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Al-Buxoriy/buxoriy2.jpg" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Al-Buxoriy/buxoriy6.webp" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Al-Buxoriy/al-buxoriy3.jpg" alt="">
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Al-Buxoriy/buxoriy8.jpg" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Al-Buxoriy/buxoriy3.webp" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Al-Buxoriy/buxoriy7.jpg" alt="">
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Al-Buxoriy/al-buxoriy.jpg" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Al-Buxoriy/buxoriy1.jpg" alt="">
      </div>
   </div>

</div>

<div id="load-more"> Узнать больше<i class="fa-solid fa-arrow-down fa-bounce"></i> </div>

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

   <iframe width="100%" height="550px" src="https://www.youtube.com/embed/shi49NaA_fo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>



<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Расположение мавзолея Имама аль-Бухари на карте.</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.6985249944178!2d66.94198067522169!3d39.81520129203197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d143612040fbf%3A0xde621b0b4dbdd2e3!2sMemorial%20Komplex%20of%20Imam%20Bukhariy!5e1!3m2!1suz!2s!4v1684574071028!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


   <a href="index.php" class="btn" style="margin-top:15px;">Вернуться на главную стр</a>

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