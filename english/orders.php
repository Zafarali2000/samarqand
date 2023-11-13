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
   <title>Information</title>
   
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

   <h1 class="heading">Information about all historical monuments in Samarkand region</h1>
   <b style="color:#FFFFFF; font-size:5px">Zafarali Daminov</b>

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
         <h3>Registon area</h3>
         <p>In 2001, the Tillakori, Sherdor and Ulug'bek madrasas on Registan square were included in the list of UNESCO world monuments.</p>
         <a href="registonmaydoni.php" class="btnzed">Read more</a>
         <div class="iconszed">
            <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 6-aprel, 2022 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="shohizinda.php"><img src="images/Desktop/Shohizinda/shoxizinda8.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Shahizinda</h3>
         <p>Shahizind is included in the UNESCO World Heritage List under the name "Samarkand - Crossroads of Cultures".</p>
         <a href="shohizinda.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 10-aprel, 2022 </span>
         <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali  </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
        <a href="3tamadrasalar.php"> <img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Tillakori  Mausoleum</h3>
         <p>The Tillakori madrasa was built in the 17th century during the reign of Timurid ruler and astronomer Ulugbek. It is part of the Registan Square.</p>
         <a href="3tamadrasalar.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 21-aprel, 2022 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
        <a href="3tamadrasalar.php"> <img src="images/Desktop/Sherdor-madrasasi/sher5.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Sherdor Mausoleum</h3>
         <p>One of the famous buildings of the 17th century in Samarkand - the Sherdar madrasa is part of the Registan architectural ensemble.</p>
         <a href="3tamadrasalar.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 9-iyul, 2022 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali  </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
       <a href="3tamadrasalar.php">  <img src="images/Desktop/ulugbek-madrasasi/u-rasadxona2.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Ulugbek Mausoleum</h3>
         <p> Later, the mosque was called "tillakori" because the amount of gold used in the decoration of the mosque was enough to build another monument.</p>
         <a href="3tamadrasalar.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 25-avgust, 2022 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="afrosiyob.php"><img src="images/Desktop/Afrosiyob/afrosiyob2.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Afrosiyob castle</h3>
         <p>Until the 1930s, archaeological excavations in Afrosiyab yielded very little material on the history of ancient Samarkand..</p>
         <a href="afrosiyob.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 22-yanvar, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali  </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/al-buxoriy2.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Imom al-Buxoriy Mausoleum</h3>
         <p>Imam al-Bukhari, also known as Abu Abdullah Muhammad ibn Ismail al-Bukhari, was an Islamic scholar and hadith collector.</p>
         <a href="al-buxoriy.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 10-fevral, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-motrudiy.php"><img src="images/Desktop/Al-Motrudiy/motrudiy.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Imom al-Moturudiy Mausoleum</h3>
         <p>Their name is Muhammad, they got the nickname "Moturidi" because they were born in the village of Moturid in Samarkand.</p>
         <a href="al-motrudiy.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 9-mart, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali  </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="amir-temur.php"><img src="images/Desktop/A-Temur/7A-Temur.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Go'ri Amir Mausoleum</h3>
         <p>Amir Temur Mausoleum or Gori Amir Mausoleum is an architectural monument in Samarkand. People call him Gori Amir or Gori Mir.</p>
         <a href="amir-temur.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 15-mart, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="arab-ota.php"><img src="images/Desktop/Arab-ota/ota1.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Arab ota Mausoleum</h3>
         <p>The Mausoleum of the Arab Father is an architectural monument in the village of Tim, Samarkand region, which was built in 976-977 AD.</p>
         <a href="arab-ota.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 20-mart, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
        <a href="bibixonim.php"> <img src="images/Desktop/Bibixonim/4bibi400.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Bibixonim Mausoleum </h3>
         <p>Bibikhanim's mausoleum was luxurious at the time it was built, the walls were decorated with patterns and verses from the Qur'an.</p>
         <a href="bibixonim.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 7-aprel, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota6.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Father Daniel Mausoleum</h3>
         <p>According to the interpretation of the Bible, Daniel, translated from the Hebrew language, means "God is the judge". Father Daniel was born in 603 BC.</p>
         <a href="doniyor-ota.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 10-aprel, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="hazrati-dovud.php"><img src="images/Desktop/city/city2.webp" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Boqiy Shahar (Silk road) </h3>
         <p>In the historical complex "Boqiy Shahar" there are goldsmithing national craft workshops, a gallery of national clothes, and a puppet theater.</p>
         <a href="diqqatsj.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 5-may, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
         <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir6.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3> Hazrat Khizr Mosque </h3>
         <p>Hazrat Khizr Mosque is an architectural monument in Samarkand (mid-19th century); associated with the name of the legendary immortal person Hazrat Khizr.</p>
         <a href="hazrati-xizr.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 10-may, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>



   <div class="boxzed">
      <div class="imagezed">
         <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi3.jpg" alt=""></a>
      </div>
      <div class="contentzed">
         <h3>Mirzo Ulugbek Observatory </h3>
         <p>Major astronomers, students of Ulugbek, Ali-Kushchi and Qazizada ar-Rumi worked in the Ulugbek observatory.</p>
         <a href="m-rasadxonasi.php" class="btnzed">Read more</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 15-iyun, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>


   


</div>

<div id="load-more"> More information <i class="fa-solid fa-arrow-down fa-bounce"></i></div>

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


<br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;">
   <br>
   <!-- orders sahifasidagi load more dastur kodi tugashi -->


   <div class="videosamarqand">
      <div class="lavha">Video about Samarkand</div>
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