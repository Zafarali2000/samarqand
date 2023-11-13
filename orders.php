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
   <title>Ma'lumotlar</title>
   
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

   <h1 class="heading">Samarqand viloyatidagi barcha tarixiy obidalar haqida ma'lumotlar</h1>
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
         <h3>Registon maydoni</h3>
         <p>Registon maydoni 2001- yilda bu uch madrasa UNESCOning butun dunyo yodgorliklari roʻyxatiga kiritilgan.</p>
         <a href="registonmaydoni.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Shohizinda</h3>
         <p>Shohizinda YUNESKOning Butunjahon merosi roʻyxatiga “Samarqand – madaniyatlar chorrahasi” nomi bilan kiritilgan.</p>
         <a href="shohizinda.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Tillakori madrasasi</h3>
         <p>Tillakori madrasasi 17-asrda temuriylar hukmdori va astronom Ulugʻbek davrida qurilgan. Registon maydonining bir qismidir.</p>
         <a href="3tamadrasalar.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Sherdor madrasasi</h3>
         <p>Samarqanddagi XVII asrning mashhur binolardan biri – Sherdor madrasasi Registon me’moriy ansambli tarkibiy qismiga kiradi.</p>
         <a href="3tamadrasalar.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Ulug'bek madrasasi</h3>
         <p> Keyinchalik masjid bezagida boshqa bir obida qurilishiga yetadigan miqdorda oltin sarflangani uchun "tillakori" deb yuritila boshlagan.</p>
         <a href="3tamadrasalar.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Afrosiyob qal'asi</h3>
         <p>1930 yillarga qadar Afrosiyobda olib borilgan arxeologik qazishmalar qadimgi Samarqand tarixiga doir juda kam materiallar bergan.</p>
         <a href="afrosiyob.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Imom al-Buxoriy maqbarasi</h3>
         <p>Imom al-Buxoriy, Abu Abdulloh Muhammad ibn Ismoil al-Buxoriy nomi bilan ham tanilgan, islom olimi va hadis toʻplovchisi boʻlgan.</p>
         <a href="al-buxoriy.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Imom al-Moturudiy maqbarasi</h3>
         <p>Ismlari Muhammad, "Moturidiy" taxallusini Samarqandning Moturid qishlog'ida tavallud topganliklari uchun olganlar. </p>
         <a href="al-motrudiy.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Go'ri Amir maqbarasi</h3>
         <p>Amir Temur maqbarasi yoki Go‘ri Amir maqbarasi — Samarqanddagi me’moriy yodgorlikir. Xalq orasida Go‘ri Amir yoki Go‘ri Mir deb nomlanib kelinadi.   </p>
         <a href="amir-temur.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Arab ota ziyorotgohi</h3>
         <p>Arab ota maqbarasi — Samarqand viloyati Tim qishlogʻidagi meʼmoriy yodgorlik hisoblanim , milodiy 976-977-yillarda qurilganligi aniqlangan.</p>
         <a href="arab-ota.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Bibixonim maqbarasi </h3>
         <p>Bibixonim maqbarasi qurilgan davrda hashamatli  bo’lgan, devorlari naqshlar hamda Qur’ondan keltirilgan oyatlar bitilgan yozuvlar bilan bezatilgan.</p>
         <a href="bibixonim.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Doniyor ota ziyorotgohi</h3>
         <p>Injilda talqin etilishicha, Daniil yahudiy tilidan tarjimasi „Olloh hakam“ maʼnosini bildiradi. Doniyor ota eramizdan avvalgi 603-yilda tugʻilgan.</p>
         <a href="doniyor-ota.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Boqiy shahar (Silk road) </h3>
         <p>«Boqiy shahar» tarixiy majmuasida zardo‘zlik yo‘nalishlarida milliy hunarmandchilik ustaxonalari, milliy kiyimlar galereyasi, qo‘g‘irchoq teatri joylashgan</p>
         <a href="diqqatsj.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3> Hazrati Xizr masjidi </h3>
         <p>Hazrati xizr masjidi — Samarqanddagi meʼmoriy yodgorlik (19-asr oʻrtalari); afsonaviy oʻlmas shaxs Hazrati Xizr nomi bilan bogʻliq.</p>
         <a href="hazrati-xizr.php" class="btnzed">Ko'proq ma'lumot</a>
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
         <h3>Mirzo Ulug'bek rasadxonasi </h3>
         <p>Ulug‘bek rasadxonasida yirik astronomlar, Ulug‘bek, Ali-Qushchi va Qozizoda ar-Rumiyning shogirdlari ishlagan.</p>
         <a href="m-rasadxonasi.php" class="btnzed">Ko'proq ma'lumot</a>
         <div class="iconszed">
         <span> <i class="fa-solid fa-calendar-days fa-beat-fade"></i> 15-iyun, 2023 </span>
            <span><a href="#"> <i class="fa-solid fa-user fa-fade"></i> by Zafarali </a></span>
         </div>
      </div>
   </div>


   


</div>

<div id="load-more"> Ko'proq ma'lumot <i class="fa-solid fa-arrow-down fa-bounce"></i></div>

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
      <div class="lavha">Samarqand haqida video lavha</div>
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