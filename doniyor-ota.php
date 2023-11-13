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
   <title>Doniyor ota ziyorotgohi haqida ma'lumotlar</title>

   
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
         <h3 >Tarixiy obida nomi: Doniyor ota ziyorotgohi</h3>
         <p>Xo‘ja Doniyor maqbarasi Samarqanddagi eng mo’tabar va mashhur ziyoratgohlardan hisoblanadi. Doniyor, Daniil, Daniel – musulmon, nasroniy va yahudiy adabiyotlaridagi aziz - avliyoning nomidir. Doniyor  ota Quddusda eramizdan avvalgi 603 yilda tug’ilgan bo’lib, shoh Dovud va Sulaymon (Solomon)larning avlodiga mansubdir.Rivoyatlarga ko’ra, Amir Temur o’zining (1397-1404 yillar ) Kichik Osiyoga yetti yillik yurishi vaqtida Suza shahridagi avliyo Doniyorning tabarruk qo’nimgohidan bir qism xokini o’rnatilgan tartib-qoidalar talabini amalga oshirib, Samarqandga olib kelgan.Maqbarada dunyodagi eng uzun - 18 metrlik qabr mavjud. Maqbara binosi XX asr boshlarida qurilgan. Shunga qadar bu yerda Xoja Doniyorning qabri va masjid bo’lganligi haqidagi ma’lumotlar bor.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Doniyor-ota/doniyor-ota0.png" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
         <p>Injilda talqin etilishicha, Daniil yahudiy tilidan tarjimasi „Olloh hakam“ maʼnosini bildiradi. Doniyor Iyerusalimda eramizdan avvalgi 603 yilda tugʻilgan boʻlib, shoh Dovud va Sulaymon (Solomon) larning avlodiga mansubdir. Er. avv. 586 yilda Isroil, Bobil shohi Novoxudonosor tomonidan bosib olinganidan soʻng, Doniyor, Bobil (Iroq) ga boshqa zodagonlarning bolalari bilan olib ketiladi. Ular turli xil fanlarni oʻrganishadi. Doniyor eng qobiliyatli yaxudiy yoshlardan hisoblangan.  U oʻzining diniy eʼtiqodlari mustahkamligini namoyon qilgan, sharob va may ichishdan, goʻshtli ovqatlardan voz kechib faqat sabzavotlarni isteʼmol qilgan holda diniy qoidalarga rioya qilgan. Shuning uchun uning donishmandligi, dinga taqvodorligi Injilda talqin etilishicha, Ollohning mukofoti deb bayon etiladi.
        
      </p>

         <p>Amir Temurning tarjimai holi tadqiqotchilraining yozuvlarida ham bu voqea toʻgʻrisida hech qanday maʼlumotlar yoʻq. Baʼzi tarixchilarning taʼkidlashicha, fors tarixchisi Istahriy Movarounnahrga, Temur tugʻilganidan toʻrt yuz yil oldin kelgan va hazrati Doniyor maqbarasi shaharda oʻsha davrda mavjud ekanligini yozadi.Baʼzi bir tadqiqodchilarning ishonchli asoslariga koʻra esa, Samarqandga hazrati Doniyorning tabarruk xokini islom dinigacha mavjud boʻlgan yahudiylar diniy jamiyati olib kelgan boʻlib, mahalliy otashparastlar bu dindorlarga hurmatda boʻlib, shahar chetida ibodatxona qurishga ruxsat etganlar. </p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Doniyor-ota/doniyor-ota02.png" alt="rasm topilmadi">           
      </div>
         
         <div class="content">
            <p>Buning tasdigʻi sifatida maqbaraning atrofidagi madaniy qoldiqlar arxeologlar tomonidan er.av. VII-VI asrlarga tegishli boʻlib, Injilda koʻrsatilganidan Doniyor paygʻambarning yashab oʻtgan davriga toʻgʻri keladi. Samarqandga paygʻambarning xokini nasroniylar ham olib kelishlari mumkin edi, chunki maʼlumki, Vizantiya hukmdori Zenon davrida, Doniyorning bir qism xoki Konstantinopolga (hozirgi Istambul) koʻchirilgan edi.
            </p>
            
         </div>
      
      
         
         <div class="content">
         
            <p> Va nihoyat, shunday mulohaza ham borki, maqbarada haqiqatdan ham Doniyorning — Muhammad Paygʻambarning amakisining oʻgʻli Qusam ibn Abbos safdoshining xoki koʻmilgan. Bu haqda Samarqandlik tarixchi Abu Tohirxoʻja „Samariya“ kitobida shunday yozadi: „Xoʻja Doniyorning qabri Samarqand shahrining chetida, Afrosiyob qoʻrgʻonining shimoliy devori pastida joylashgan. Maqbaraning yaqinidan Siyob daryosi oqadi. Avom bu qabrni Doniyor paygʻambarning qabri deb biladi, lekin uning qabri Mosul viloyatidadir. Aytishlaricha, bu qabr Qusam ibn Abbos safdoshlaridan birining qabridir. Olloh rahmat qilsin! Qabr Zarafshonning toshlari bilan qoplangan. Aytishlaricha, Xoʻja Doniyor juda taqvodor, xudojoʻy boʻlgan. Qabrning bosh tomonida, Siyob arigʻi yaqinidan Xoʻja Doniyor buloq-chashmasi ham bor. Xalq uni tabarruk bilib ichadilar va choʻmiladilar. Uni koʻp kasallar shifosiga sabab deb biladilar. U kishiga tangrining rahmati boʻlsin!.“
            </p>
            <br>
         </div>

   </div>
   




   <div class="row">

   
      <div class="content">
         <p>Yana bir Oʻrta Osiyo manbalari bizga Doniyor Paygʻambarning xizmatlari haqida maʼlumot beradi — bu Binoiyning „Tush taʼbiri“ kitobidir. Bunda koʻpgina hikmatli soʻzlar „Doniyor alayhissalom keltiradilarkim“- soʻzi bilan boshlanadi. Maqbaraning shimoliy tomonida 500 yoshlik pista daraxti hamon koʻkarib turibdi. Maqbara ichida dunyodagi eng uzun qabrni koʻramiz, u 18 metr uzunlikka ega. Qabrning balandligi janub tomonida 90 sm, shimol tomonida — 160 sm, shimol tarafi birmuncha kengroq — 2m chunki, bu tomondan toʻrtburchak sagʻona oʻrnatilgan. Sagʻona pishiq gʻisht bilan terilib, qumshuvoq qilingan va qur’oniy yozuvlarga ega boʻlgan marmar panellar bilan bezatilgan. 
         </p>
        
      </div>
      <div class="image">
      <img src="images/Desktop/Doniyor-ota/doniyor-ota7.webp" alt="rasm topilmadi">           
      </div>
      
      
      <div class="content">
     
         <p>Sagʻonaning qarama-qarshi tomonida, maqbaraning shimolga qaratilgan derazasining tokchasida, hajmi uncha katta boʻlmagan, mahalliy aholi „niyat-toshi“ deb atalgan, arabiy yozuvlarga ega boʻlgan tosh bor. Ziyoratchilar Hazrati Doniyor qabrini bir yoki uch marta niyat qilib aylanadilar va bu toshni koʻtarishga yoki hech boʻlmasa qimirlatishga xarakat qiladilar. Qabrning uzunligi toʻgʻrisida bir necha rivoyatlar bor. Ularning birida aytilishicha, olib kelingan turbat-muqaddas hisoblanganligi uchun, yomon niyatli kishilar qoldiqlarni kovlab olib ketishlari mumkin edi. Shuning uchun uzun qabr kovlanib, Paygʻambarning qoldiqlari uning qayerigadir koʻmilgan.
         </p>
         <p>
         </p>

      </div>

   </div>

   



   <div class="row">

         <div class="image">
         <img src="images/Desktop/Doniyor-ota/doniyor-ota4.jpg" alt="rasm topilmadi">           
            
      </div>
         
         <div class="content">
          <p>Maqbarada koʻpgina taʼmirlash ishlari amalga oshirilgan. Ziyoratgoh atrofi devor bilan oʻralib, ziyoratgohga chiqish uchun 3 qismli zinapoya qurildi. Shu bilan birgalikda qabr atrofi oniks va qora marmar bilan qoplandi. XX asrning boshlarida olingan bir fotosuratda maqbara olti gumbazli boʻlgan, hozirgi vaqtda esa gumbazlarining soni beshta boʻlib, ular keyinchalik buzilib, qaytatdan tiklangan boʻlishi mumkin. Maqbaraning shimol tomonida imoratning yuqori qismini ikki burchagidan pishiq gʻishtdan terilgan qubbalar bezatadi. Ular yevropacha uslubda qurilgan. Ichki qismida, oʻsha davrda qoʻllaniladigan, qalqonsimon langarlar hamda gumbazlarni koʻtarib turgan ravoqlar ishlatilgan.
            </p>  
            
         </div>
      
      
         
         <div class="content">
         
            <p></p>
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
      <img src="images/Desktop/Doniyor-ota/doniyor-ota8.jpg" alt="rasm topilmadi">        
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Doniyor-ota/doniyor-ota14.webp" alt="rasm topilmadi">        
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Doniyor-ota/doniyor-ota12.jpg" alt="rasm topilmadi">        
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Doniyor-ota/doniyor-ota13.jpg" alt="rasm topilmadi">        
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Doniyor-ota/doniyor-ota10.jpg" alt="rasm topilmadi">        
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Doniyor-ota/doniyor-ota9.webp" alt="rasm topilmadi">        
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Doniyor-ota/doniyor-ota4.jpg" alt="rasm topilmadi">        
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Doniyor-ota/doniyor-ota11.jpg" alt="rasm topilmadi">        
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Doniyor-ota/doniyor-ota2.jpg" alt="rasm topilmadi">        
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

<iframe  width="100%" height="550px" src="https://www.youtube.com/embed/HB-H9TAyDqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Doniyor ota ziyortogohining xaritadagi manzili.</div>


   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d403.48961891438626!2d66.99411052490092!3d39.673310999999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d189ee87f0c19%3A0x13cf0d2094a98df4!2sXoja%20Doniyor%20maqbarasi!5e1!3m2!1suz!2s!4v1684758288405!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


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