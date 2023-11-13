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
   <title>Registon maydoni haqida ma'lumotlar</title>

   
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
         <h3 >Tarixiy obida nomi: Registon maydoni</h3>
         <p>Registon - qadimiy ilm, taʼlim muassasalari joylashgan joy boʻlib, sharqdagi shahar qurilishi sanʼatining eng koʻzga koʻrinarli namunalaridan biri hisoblanadi. U haqda Temuriylar faxr bilan: „Kim bizning kuch- qudratimizga shubha qilsa, kelib biz qurgan binolarni koʻrsin“, deganlar. 2001- yilda bu uch madrasa UNESCOning butun dunyo yodgorliklari roʻyxatiga kiritilgan. Registon maydoni- tarixda shaharning ilm-fan, siyosat va diniy markazi bo’lgan. “Registon ” so’zi “qumloq joy” degan ma’noni anglatadi. 
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Registon/registon0.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
         <p>Registon nomi bilan ham tanilgan, O'zbekistonning Samarqand shahrida joylashgan mashhur tarixiy joy. Bu Markaziy Osiyoning eng diqqatga sazovor joylaridan biri bo'lib, tarix, me'morchilik va madaniy meros nuqtai nazaridan katta ahamiyatga ega. 
         <br><b >Registon hududi haqida ba'zi ma'lumotlar:</b> 
        <b> Manzil:  </b> Registon maydoni Markaziy Osiyodagi eng qadimiy aholi yashaydigan shaharlardan biri bo'lgan Samarqandning qoq markazida joylashgan. Samarqandning oʻzi Oʻzbekistonning janubi-sharqida, qadimgi Ipak yoʻli savdo yoʻli boʻyida joylashgan.
      </p>

         <p><b>Tarixiy ahamiyati:</b>  Registon maydoni asrlar davomida Samarqandning jonli markazi bo‘lib xizmat qilgan. Bu shaharning asosiy jamoat maydoni bo'lib, u erda muhim tadbirlar, qirol e'lonlari va ommaviy yig'ilishlar bo'lib o'tdi. <br>
         <b>  Arxitektura mo'jizalari: </b>  Maydon uchta ajoyib madrasa (islom ta'lim muassasalari) bilan o'ralgan bo'lib, ular ajoyib islom me'morchiligini namoyish etadi:
<br>
<b>Ulug‘bek madrasasi:</b> Hukmdor va astronom Mirzo Ulug‘bek tomonidan 15-asr boshlarida qurilgan bo‘lib, u katta kirish portali va chiroyli bezatilgan darsxonalarga ega.

<b> Sherdor madrasasi: </b> 17-asrda qurilgan bo'lib, u o'zining murakkab koshinlari, xususan, uning jabhasida ikki bo'kirgan sher tasviri bilan mashhur.

<b> Tilya-Qori madrasasi: </b> 17-asr oʻrtalarida qurilgan boʻlib, u oʻzining ajoyib oltin qoplamali gumbazi va murakkab ichki bezaklari bilan mashhur.</p>
         <p><b>   Madaniyat markazi:</b> Registon maydoni o‘z tarixi davomida intellektual, badiiy va madaniy tadbirlar markazi bo‘lib kelgan. Madrasalar ilm markazlari boʻlib xizmat qilgan va islom olamining turli burchaklaridan kelgan olimlar, ilohiyotchilar va talabalarni oʻziga jalb qilgan.<br>
         <b>Qayta tiklash va turizm:</b>  Registon maydonida so‘nggi yillarda me’moriy merosni asrab-avaylash maqsadida keng ko‘lamli restavratsiya ishlari amalga oshirildi. Bu saytning tarixiy ahamiyati va hayratlanarli go'zalligi bilan hayratga tushgan tashrif buyuruvchilarni jalb qiluvchi mashhur sayyohlik maskaniga aylandi. <br>Bugungi kunda Registon maydoni Samarqand o‘tmishining ulug‘vorligidan dalolat beradi va O‘zbekistonning boy madaniy merosi ramzi hisoblanadi. Markaziy Osiyoning meʼmoriy moʻjizalari va tarixiy merosi bilan tanishish imkonini beruvchi bu hududni oʻrganayotgan har bir kishi uchun tashrif buyurishi shart.</p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Registon/registon10.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
            <p>Registon maydoni oʻzining rang-barang koshinkori bezaklari; naqshinkori peshtoqlari, ulkan gumbazlari bilan Oʻrta Osiyo meʼmorchligining noyob yodgorligi hisoblanadi. Qadimiy Samarqand shahrining rasmiy markazi Registon maydoni boʻlib, bu erda uchta madrasa qad koʻtargan: Ulugʻbek madrasasi (1417-1420), Sherdor madrasasi (1619-1636), Tillakori madrasasi (1647-1660). 
            </p>
            
         </div>
      
      
         
         <div class="content">
         
            <p> O’rta asrlarda hamma katta shaharlarda markazlar “Registon” deb atalar edi. Shu nomdagi maydonlar Buxoro, Shahrisabz va Toshkentda ham bo’lgan. Samarqanddagi maydon esa O’rta Osiyodagi eng mahobatli va tahsinga sazovor maydonlardan biri edi. Bu maydonda bir necha ming yillik tarix mujassam. Amir Temur podshohligi davrida Registon Samarqandning markaziga aylantirildi. Ulug’bek davri (1409-1447)da esa maydon bundan ham muhimroq ahamiyatga ega bo’ldi. 
            </p>
            <br>
         </div>

   </div>
   




   <div class="row">

   
      <div class="content">
         <p>Zamonaviy Registon ansambli o’zida Ulug’bek madrasasi (1417-1420), Sherdor madrasasi(1619-1636) va Tillakori masjid-madrasasini (1647-1660) mujassam etadi.Registonning janubiy tomonida xalq orasida “Childuxtaron” deb atalmish xonaqoh va maqbaralar joylashgan edi. Ularni Ko’chkunjihon (1527-1530) qurdirgan edi va Tillakori madrasasiga qo’sh qilib bunyod etilgan edi. U 1904-yilgi zilziladan so’ng xarobaga aylanib, 1910-yili butunlay buzilgan va o’rni maydon bo’lib qolgan. 100 yil orasida oxirgi ko’rinishini olgan bu Registonni ko’rish ishtiyoqida butun dunyo sayyohlari tashrif buyurishadi.
         </p>
        
      </div>
      <div class="image">
      <img src="images/Desktop/Registon/registon13.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
     
         <p>Birinchi oksford nashridan 17 yil o‘tgach, Oksforddagi Bodlian kutubxonasining bilimdon qo‘riqchisi, ingliz sharqshunosi va tarjimoni Tomas Xayd (1636-1703) «Tabulae Long, ас Lat. Stellarum Fixarum, ex observatione Ulugh Beighi», Oxonii, 1665, deb nomlangan Samarqand katalogining fors va lotin tillarida yangi nashrini tayyorladi va chop etdi. Buyuk Britaniya kutubxonalarida saqlanayotgan 8 ta qoʻlyozmani oʻrganishga asoslangan Ulugʻbek yulduzlar katalogining eng batafsil tahlili 1917-yilda AQShda E. B. Knobl tomonidan “Ulugh Beg’s Catalogue of Stars. Revised from all Persian Manuscripts Existing in Great Britain” nomi bilan nashr etilgan.Samarqand rasadxonasining asosiy asbobi marmar devor kvadranti bo‘lib, uning yoy radiusi 40,2 m, yoy uzunligi 63 m ni tashkil etadi.Ushbu ulkan burchakli asbobning aksariyati yer ostida, rasadxona tagida - 10 metrdan ortiq chuqurlikda joylashgan. Kvadrantning ikkinchi yarmi yerdan 28 metr balandlikda ko‘tarilgan va bugungi kungacha saqlanib qolmagan to‘rtburchak minorada joylashgan.
         </p>
         <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;"><br>
            <h3>Tarixiy obidaga oid rasmlar va video lavhalar. </h3>
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
      <img src="images/Desktop/Registon/registon11.jpg" alt="rasm topilmadi">
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Registon/registon7.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher5.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher4.jpg" alt="rasm topilmadi">
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher13.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Tillakori-madrasasi/tillakori7.jpg" alt="rasm topilmadi">
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Registon/registon400x400.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher8.jpg" alt="rasm topilmadi">
      </div>
   </div>

</div>

<div id="load-more"> Ko'proq malumot <i class="fa-solid fa-arrow-down fa-bounce"></i> </div>

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


   <iframe width="100%" height="550px" src="https://www.youtube.com/embed/VuRol8-pwD0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Registon maydonining xaritadagi manzili.</div>

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d215.38112611754332!2d66.97566294463411!3d39.65312338897119!2m3!1f347.08638360175706!2f39.23858122392988!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x3f4d18b7c2e59337%3A0x532c8e039ecc92af!2sRegiston%20maydoni!5e1!3m2!1suz!2s!4v1684780331498!5m2!1suz!2s"  width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
   <a href="index.php" class="btn" style="margin-top:15px;">Asosiy sahifaga qaytish</a>

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