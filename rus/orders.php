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
   <title>Информация</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/registon.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="orders">

   <h1 class="heading">Информация обо всех исторических памятниках Самаркандской области</h1>
   <b style="color:#FFFFFF; font-size:5px">Зафарали Daminov</b>

   <br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;">
   <br>
   
<div class="containerzed">

<div class="box-containerzed">

   <div class="boxzed">
      <div class="imagezed">
         <a href="registonmaydoni.php"><img src="images/Desktop/Registon/registon02.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Район Регистон</h3>
          <p>Площадь Регистон В 2001 году эти три медресе были включены в список памятников мира ЮНЕСКО.</p>
         <a href="registonmaydoni.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
            <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 6-апрель, 2022 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="shohizinda.php"><img src="images/Desktop/Shohizinda/shoxizinda8.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>В Шахизине</h3>
          <p>Шахизин включен в Список всемирного наследия ЮНЕСКО под названием «Самарканд – перекресток культур».</p>
         <a href="shohizinda.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 10-апрель, 2022 </span>
         <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали  </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
        <a href="3tamadrasalar.php"> <img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Медресе Тилакори</h3>
          <p>Медресе Тилакори было построено в 17 веке во время правления тимуридского правителя и астронома Улугбека. </p>
         <a href="3tamadrasalar.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 21-апрель, 2022 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
        <a href="3tamadrasalar.php"> <img src="images/Desktop/Sherdor-madrasasi/sher5.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Медресе Шердар</h3>
          <p>Одно из известных зданий XVII века в Самарканде - медресе Шердар входит в состав архитектурного ансамбля Регистан.</p>
         <a href="3tamadrasalar.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 9-июль, 2022 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали  </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
       <a href="3tamadrasalar.php">  <img src="images/Desktop/ulugbek-madrasasi/u-rasadxona2.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Медресе Улугбека</h3>
          <p> Позже, поскольку количества золота, использованного при отделке мечети, хватило на постройку еще одного памятника, ее стали называть «ювелирной».</p>
         <a href="3tamadrasalar.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 25-август, 2022 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="afrosiyob.php"><img src="images/Desktop/Afrosiyob/afrosiyob2.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3> Афросиаб</h3>
          <p>Археологические раскопки, проводившиеся в Афросиабе до 1930-х годов, дали очень мало материала по истории древнего Самарканда.</p>
         <a href="afrosiyob.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 22-январь, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали  </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/al-buxoriy2.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Мавзолей имама аль-Бухари</h3>
          <p>Имам аль-Бухари, также известный как Абу Абдулла Мухаммад ибн Исмаил аль-Бухари, был исламским ученым и собирателем хадисов.</p>
         <a href="al-buxoriy.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 10-февраль, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-motrudiy.php"><img src="images/Desktop/Al-Motrudiy/motrudiy.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Мавзолей имама аль-Мотуруди</h3>
          <p>Их зовут Мухаммад по прозвищу Мотуриди, потому что они родились в селе Мотурид в Самарканде. </p>
         <a href="al-motrudiy.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 9-март, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали  </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="amir-temur.php"><img src="images/Desktop/A-Temur/7A-Temur.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Мавзолей Амира Гори</h3>
          <p>Мавзолей Амира Темура или Горийский мавзолей Амира — памятник архитектуры в Самарканде. В народе его называют Гори Амир или Гори Мир. </p>
         <a href="amir-temur.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 15-март, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="arab-ota.php"><img src="images/Desktop/Arab-ota/ota1.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Арабский храм отца</h3>
          <p>Мавзолей отца араба — памятник архитектуры в селе Тим Самаркандской области, построенный в 976-977 гг. н.э.</p>
         <a href="arab-ota.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 20-март, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
        <a href="bibixonim.php"> <img src="images/Desktop/Bibixonim/4bibi400.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Бибиханим мавзолей</h3>
          <p>Мавзолей Бибиханим во время постройки был роскошен, стены были украшены узорами и стихами из Корана.</p>
         <a href="bibixonim.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 7-апрель, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota6.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Святилище отца Даниила</h3>
          <p>Согласно толкованию Библии, Даниил означает "Бог Судья" на иврите. Отец Даниил родился в 603 г. до н.э.</p>
         <a href="doniyor-ota.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 10-апрель, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="hazrati-dovud.php"><img src="images/Desktop/city/city2.webp" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Вечный город (Шелковый путь) </h3>
          <p>В историческом комплексе «Баки Шахар» расположены ювелирные мастерские народных промыслов, галерея национальной одежды, кукольный театр.</p>
         <a href="diqqatsj.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 5-may, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
         <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir6.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3> Мечеть Хазрат Хизр </h3>
          <p>Мечеть Хазрати Хизр — памятник архитектуры в Самарканде (середина 19 века); связано с именем легендарного бессмертного человека Хазрата Хизра.</p>
         <a href="hazrati-xizr.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 10-май, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали </a></span>
         </div>
      </div>
   </div>



   <div class="boxzed">
      <div class="imagezed">
         <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi3.jpg" alt=""></a>
      </div>
      <div class="contentzed">
      <h3>Обсерватория Мирзо Улугбека </h3>
          <p>В обсерватории Улугбека работали великие астрономы, ученики Улугбека, Али-Кушчи и Казизаде ар-Руми.</p>
         <a href="m-rasadxonasi.php" class="btnzed">Узнать больше</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 15-июнь, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Зафарали  </a></span>
         </div>
      </div>
   </div>


   


</div>

<div id="load-morezed"> Узнать больше <i class="fa-solid fa-arrow-down fa-bounce"></i></div>

</div>

<script>
let loadMoreBtn = document.querySelector('#load-morezed');
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


<br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;">
   <br>
   <!-- orders sahifasidagi load more dastur kodi tugashi -->


   <div class="videosamarqand">
      <div class="lavha">Видео о Самарканде</div>
         <iframe width="100%" height="560" style="" src="https://www.youtube.com/embed/n_7CTQSutwY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>


   <br>
   <hr style="width:100%; height:1.5px;  background-color:black; opacity:0.3; margin-top:10px; border-radius:5px;">
   <br>

</section>




<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>