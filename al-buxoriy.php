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
   <title>Imom al-Buxoriy maqbarasi haqida ma'lumotlar</title>

   
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
         <h3 >Tarixiy obida nomi: Imom al-Buxoriy maqbarasi</h3>
         <p>Buxoriy, Imom al-Buxoriy (asl ismi Abu Abdulloh Muhammad ibn Ismoil ibn Ibrohim al Buxoriy) (810.21.7, Buxoro — 870.31.8, Samarqand yaqinidagi Hartang qishlogʻi) — islom olamining yirik mutafakkiri. Muhaddislar imomi, hadis ilmining sultoni deb ham yuritiladi.Otasi Ismoil oʻz davrining yetuk muhaddislaridan, Malik ibn Alasning shogirdi va yaqinlaridan biri boʻlib, tijorat ishlari bilan shugʻullangan. Onasi taqvodor, diyonatli, oqila ayol edi.Taniqli muhaddislar — Doxiliy, Muhammad ibn Salom Poykandiy, Muhammad ibn Yusuf Poykandiy, Abdulloh ibn Muhammad Masnadiy va boshqalardan saboq olgan.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Al-Buxoriy/al-buxoriy4.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
         <p>Imom al-Buxoriy, Abu Abdulloh Muhammad ibn Ismoil al-Buxoriy nomi bilan ham tanilgan, mashhur islom olimi va hadis toʻplovchisi boʻlib, milodiy 810-yilda hozirgi Oʻzbekistonning Samarqand yaqinida joylashgan Buxoro shahrida tugʻilgan. Samarqand Imom al-Buxoriy hayoti bilan bevosita bog‘liq bo‘lmasa-da, uning tug‘ilib o‘sgan joyiga yaqin joylashganligi va uning ta’sirchan asarlarining keng tarqalishida katta rol o‘ynaganini ta’kidlash joiz.
         <br><b >Imom al-Buxoriy va uning mintaqa bilan aloqalari haqida ba'zi muhim fikrlar:</b><br>
        <b> Hayoti va tarbiyasi: </b>Imom al-Buxoriy o‘z davrida islom ilmining ko‘zga ko‘ringan markazi bo‘lgan Buxoroda voyaga yetgan. U yoshligida ilmga intilishni boshlagan, mashhur olimlarni izlash va hadis ilmini (Muhammad payg'ambarning so'zlari va xatti-harakatlarini) o'rganish uchun ko'p sayohatlar qilgan. U hadis ilmida eng buyuk hokimiyatlardan biri sanaladi
      </p>

         <p><b>Sahih al-Buxoriy: </b> Imom al-Buxoriyning eng mashhur va ahamiyatli asari uning “Sahih al-Buxoriy” nomi bilan mashhur boʻlgan hadislar toʻplamidir. Ushbu to'plam sunniy islomdagi hadislarning eng sahih va ishonchli to'plamlaridan biri hisoblanadi. Unda juda ko‘p manbalardan sinchkovlik bilan tanlab olingan 7000 dan ortiq hadislar jamlangan bo‘lib, butun dunyo olimlari va musulmonlari tomonidan yuksak e’tirof etilgan. <br>
         <b>Taʼlim va taʼsir: </b> Imom al-Buxoriy oʻqishni tugatgandan soʻng Buxoroga qaytib keldi va u yerda dars berib, oʻz bilimlari bilan oʻrtoqlasha boshladi. U hadis ilmidan o'rganishga intilayotgan ko'plab talabalarni o'ziga tortdi. Uning ta’limoti va uslubiyati hadis ilmi va islom ilmi rivojiga katta ta’sir ko‘rsatdi.</p>
         <p><b>  Samarqandga hijrat: </b> Imom al-Buxoriyning asosiy aloqasi Buxoro bilan boʻlsa-da, tarixiy maʼlumotlarda uning Samarqandda ham boʻlganligi qayd etilgan. U ma’lum muddat Samarqandga hijrat qilib, o‘sha yerda ilmiy faoliyatini davom ettirib, mintaqada hadis ilmining keng tarqalishiga yanada hissa qo‘shgani taxmin qilinadi.<br>
         <b> Meros: </b>Imom al-Buxoriyning hadis ilmi va payg‘ambarlik urf-odatlarini saqlashdagi xizmatlari beqiyosdir. Uning asarlari, xususan, “Sahih al-Buxoriy” asrlar davomida o‘rganilib, e’zozlanib kelinmoqda. Uning hadisning sahihligini baholashdagi metodologiyasi va qabul qilishda qo‘ygan qat’iy mezonlari kelajak avlod olimlari uchun mezon bo‘ldi.</p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Al-Buxoriy/buxoriy1.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
            <p>O‘zbekiston mustaqillikka erishganidan so‘ng, majmua qayta tiklandi. 1997- yilning 29-apelida o‘zbekiston Respublikasi hukumatining “Imom al-Buxoriy tug‘ilgan kuninining hijriy-oy taqvimi bo‘yicha 1225 yilligini nishonlash” to‘g‘risidagi qarori qabul qilindi. Shu yilning noyabr oyida, YUNESKO ning bosh konferensiyasi 1998-yilda muhim sana-olim Ismoil al -Buxoriy tavalludining 1225 yilligining nishonlanishida qatnashish to‘g‘risida qaror qabul qiladi. Shu munosabat bilan, Imom al-Buxoriyning maqbarasida O‘rta Osiyonong me’moriy an’analariga ko‘ra bajarilgan yodgorlik majmuasi barpo etilgan edi. Yodgorlik uchun ajratilgan yerning umumiy maydoni 10 gektarni tashkil etadi
            </p>
            
         </div>
      
      
         
         <div class="content">
         
            <p> Majmuaning qurilishi va undagi obodonlashtirish ishlari O‘zbekiston Respublikasi Prezidenti Islom Karimov boshchiligida amalga oshirilgan. Majmua qurilishida Samarqand, Buxoro, Xiva, Toshkent, Andijon, Qo‘qon va Shahrisabzning xalq hunarmandlari va ishbilarmonlari qatnashdilar. Maqbara, masjid, ma’muriy bino va boshqalar milliy me’morchilik an’analarida barpo etilgan.
            </p>
            <br>
         </div>

   </div>
   




   <div class="row">

   
      <div class="content">
         <p>Imom al-Buxoriy majmuasi yaqinida, O‘zbekiston Respublikasi Prezidenti Islom Karimovning 2008-yil, 23-maydagi qaroriga asosan barpo etilgan Imom al-Buxoriy Xalqaro markazi joylashgan. Imom al-Buxoriy majmuasi, yurtimizdagi oxirgi vaqtlarda barpo etilgan shu turdagi inshootlarning eng katta va noyoblaridan biri hisoblanadi. Islom Karimovning so‘zlariga ko‘ra, bu majmua faqatgina muqaddas ziyorat joyi bo‘lib qolmasdan, balki O‘zbekistondagi yurtimiz dovrug‘ini dunyoga yoyuvchi va o‘sib kelayotgan yosh avlod tarbiyasida muhim rol o‘ynovchi, har bir kishini hayot va mangulik to‘g‘risida o‘ylashga majbur qiluvchi joylardan biridir.
         </p>
        
      </div>
      <div class="image">
      <img src="images/Desktop/Al-Buxoriy/al-buxoriy5.jpeg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
     
         <p>Majmua ma’muriy binosi, janub tomonga qaragan. Majmuaga kirish, uchta yirik o‘yma arkasimon darvozalari orqali amalga oshiriladi. Darvoza-xona orqali asosiy kirishda, milliy uslubdagi katta ayvon qurilgan. Kirish darvozasining old qismida, majmuaning qurilish tarixi matni arab va o‘zbek tillarida yozilgan. Darvoza-xonaga kirishda, o‘ng tomonda ma’muriy va boshqa xonalar joylashgan. Majmuaning asosiy qismida, Imom al-Buxoriyning maqbarasi joylashgan. Kub shaklidagi bu inshootga o‘n yetti metrlik gumbaz o‘rnatilgan. Devorlar, och-yashil, havorang, oq qoplamali plitalar, marmar, onikslar bilan bezalgan. O‘ng tomonda, och-havorang oniksga ishlov berib yasalgan qabr toshi (sag‘ana) ostida al-Buxoriyning marmar bilan qoplangan qabri joylashgan. Ichki hovlining chap tomonida, maydoni 786 kv.m. bo‘lgan masjid joylashgan. Ayvonlarning umumiy maydoni 214 kv. m. Masjidda bir vaqtning o‘zida 1500 kishi namoz o‘qishi mumkin.
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
          <p>O'zbekiston Respublikasi Prezidenti Shavkat Miromonovich Mirziyoyev tashabbusi Imom al-Buxoriyni rekonstruksiya qilish ishlarini olib borilmoqda. Ma’lumki, prezident tashabbusi bilan 2019 yilda bu yerda Imom Buxoriy xalqaro ilmiy-tadqiqot markazi hamda Hadis ilmi maktabi ham tashkil etilgan edi. 
          Majmua loyihasiga ko‘ra, u yerda 8 ming o‘rinli  katta masjid, to‘rtta simmetrik minora, yo‘ldan kirib kelishda xiyobon bo‘lishi ko‘zda tutilgan. Bundan tashqari, ziyoratchilar uchun 7 ta mehmonxona, 3 ta avtoturargoh, avtobekat, supermarket, bozorcha barpo etiladi.
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

   <iframe width="100%" height="550px" src="https://www.youtube.com/embed/shi49NaA_fo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>



<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Imom al-Buxoriy maqbarasining xaritadagi manzili.</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.6985249944178!2d66.94198067522169!3d39.81520129203197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d143612040fbf%3A0xde621b0b4dbdd2e3!2sMemorial%20Komplex%20of%20Imam%20Bukhariy!5e1!3m2!1suz!2s!4v1684574071028!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


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