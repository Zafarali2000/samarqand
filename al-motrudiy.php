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
   <title>Imom al-Moturudiy haqida ma'lumotlar</title>

   
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
         <h3 >Tarixiy obida nomi: Imom al-Moturudiy maqbarasi</h3>
         <p>Kalom ilmida moturidiya oqimining asoschisi, Islom olamida Imom-ul-Hudo (Hidoyat imomi) deb tanilgan buuk ilohiyot olimi, faqih, shayx Muhammad ibn Mahmud al-Xanafiy al-Moturidiy 870 yilda Samarqandning Moturid mavzesida tug‘ilgan. Dastlab maktabda savod chiqarib, keyin madrasa ta’limini olgan.Imom al-Moturidiy Imom Ash’ariy, Rudakiy, Abul Hasan Balxiy, Farobiy kabi olimlar bilan bir zamonda yashab, imom Muhammad al-Buxoriyni o‘zining ma’naviy ustozi, deb bilgan. Alisher Navoiy Imom al-Moturidiyning sha’nini ulug‘lab, u kishiga “Buyuk ulamolar sultoni” dea yuksak baho bergan.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Al-Motrudiy/motrudiy6.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
         <p>IX-X asrlarda Islom dinini noto‘g‘ri targ‘ib va talqin qiluvchilar ko‘payganligi sababli Imom al-Moturidiy o‘zining asarlari bilan ularga qarshi kurashadi. Uning “Kitob al-Tavhid” asari alohida o‘rin tutadi. Imom al-Moturidiy 944 yilda Samarqandda vafot etadi va shahardagi Chokardiza qabristoniga dafn etiladi.Yurtboshimiz rahnamoligida 2000 yilda allomaning 1130 yilligi mamlakatimizda keng nishonlandi, imom qabri ustida yangi maqbara barpo etildi.
        
      </p>

         
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Al-Motrudiy/motrudiy9.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
         <p>O'zbekistonning birinchi prezidenti Islom Karimov tashabbusi bilan maqbara 2000 yilda Samarqandning Chokardiza qabristonida bunyod etilgan. Buyuk vatandoshimiz Abu Mansur al-Moturidiy ilmiy-diniy merosining xalqimiz ma'naviy-ruhiy hayotidagi o'rni beqiyosdir. U Islom olamida "Imom al-huda" (Hidoyatga boshlovchi imom) va "Imom al-mutakallimin" (Kalom olimlarining imomi) degan sharafli unvonlar bilan mashhur bo'lgan.</p>
            
         </div>
      
      
         
         <div class="content">
            <p>Ismlari Muhammad, "Moturidiy" taxallusini Samarqandning Moturid qishlog'ida tavallud topganliklari uchun olganlar. Manbalarning dalolat berishicha, Al-Moturidiy fiqh va kalom ilmi bilan yoshlikdanoq qiziqib, hanafiy mazhabi olimlaridan tahsil olgan. Ko'plab mashhur faqih va muhaddislar bilan muloqotda bo'lgan, butun umri davomida shu sohaga oid ko'plab asarlar yozib qoldirgan. "Kitob at-tavhid", Kitob maqomat", "Tavilot ahl as-sunna" asarlari shular jumlasidandir.</p>
         </div>

   </div>
   




   <div class="row">

   
      <div class="content">
         <p>Maqbara maydoni 12x12, balandligi 17,5 metrni tashkil qiladi. Gumbazi ikki qavat. Tashqi gumbazi qovurg‘asimon bo‘lib, havo rang ko‘shk bilan bezalgan. Tom gumbazi 24 ark hamda oyna alebastr panjaralar bilan bezalgan. Ichki va tashqi qoplamalarda koshin, ko‘shk va ganchdan foydalanilgan. Qabr toshi oq marmardan yasalib, Imom al Moturudiy yozuvi o‘yilgan.Maqbaraning g‘arbrog‘ida pastqom gumbaz inshoot — Amir Temur tomonidan Hirot va Mashhatdan olib kelingan sayidlar dahmasi (Muhammad payg‘ambar avlodi) joy olgan.Maqbaraning shimoliy qismida so‘fa (tepalik) hamda IX-XVIII asrlarga tegishli qabr tosh joylashgan.
         </p>
        
      </div>
      <div class="image">
      <img src="images/Desktop/Al-Motrudiy/motrudiy.jpg" alt="rasm topilmadi">
      
   </div>

   </div>

   
   <div class="row">    
         <div class="content">
            <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;"><br>
            <h3>Tarixiy obidaga oid rasmlar </h3><br>
         </div>
   </div>

   <br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3;"> <br>
   <div class="containerzed">

      <div class="box-containerzed">

         <div class="boxzed">
            <div class="imagezed">
            <img src="images/Desktop/Al-Motrudiy/motrudiy2.jpg" alt="rasm topilmadi">
               
            </div>
         </div>

         <div class="boxzed">
            <div class="imagezed">
            <img src="images/Desktop/Al-Motrudiy/motrudiy7.jpg" alt="rasm topilmadi">
            </div>
         </div>

         <div class="boxzed">
            <div class="imagezed">
            <img src="images/Desktop/Al-Motrudiy/motrudiy13.jpg" alt="rasm topilmadi">
            </div>
         </div>

         <div class="boxzed">
            <div class="imagezed">
            <img src="images/Desktop/Al-Motrudiy/motrudiy11.jpg" alt="rasm topilmadi">
            
         
            </div>
         </div>

         <div class="boxzed">
            <div class="imagezed">
            <img src="images/Desktop/Al-Motrudiy/motrudiy8.jpg" alt="rasm topilmadi">
            </div>
         </div>

         <div class="boxzed">
            <div class="imagezed">
            <img src="images/Desktop/Al-Motrudiy/motrudiy12.jpg" alt="rasm topilmadi">
            </div>
         </div>

         <div class="boxzed">
            <div class="imagezed">
            <img src="images/Desktop/Al-Motrudiy/motrudiy5.webp" alt="rasm topilmadi">
            </div>    
         </div>

         <div class="boxzed">
            <div class="imagezed">
            <img src="images/Desktop/Al-Motrudiy/motrudiy10.jpg" alt="rasm topilmadi">
         
            </div>
         </div>

         <div class="boxzed">
            <div class="imagezed">
            <img src="images/Desktop/Al-Motrudiy/motrudiy4.webp" alt="rasm topilmadi">
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

<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Imom al-Motrudiy maqbarasining xaritadagi manzili.</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d888.9238627804555!2d66.98581071554932!3d39.65424028483976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d19b57ed8d1b7%3A0x1f05794e7f2088a1!2sAbu%20Mansura%20Maturidi&#39;s%20Mausoleum!5e1!3m2!1suz!2s!4v1684582950486!5m2!1suz!2s"  width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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