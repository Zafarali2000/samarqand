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
   <title>Samarqand</title>

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
         <a href="index.php" class="tillartwo">O'zbekcha</a>
         <a href="../samarqand/english/index.php" class="tillartwo">English</a>
         <a href="../samarqand/rus/index.php" class="tillartwo">Русский</a>
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

   <h1 class="heading">Samarqandning tarixiy obidalari</h1>
   <b style="color:#FFFFFF; font-size:5px">Zafarali Daminov</b>
   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=Registon" class="swiper-slide slide">
      <img src="images/icon15-15.png" alt="">
      <h3>Registon</h3>
   </a>

   <a href="category.php?category=Shohizinda" class="swiper-slide slide">
      <img src="images/icon13-13.png" alt="">
      <h3>Shohizinda</h3>
   </a>

   <a href="category.php?category=Bibixonim" class="swiper-slide slide">
      <img src="images/icon11-11.png" alt="">
      <h3>Bibixonim</h3>
   </a>

   <a href="category.php?category=Al-Buxoriy" class="swiper-slide slide">
      <img src="images/icon12-12.png" alt="">
      <h3>Al-Buxoriy</h3>
   </a>

   <a href="category.php?category=Al-Motrudiy" class="swiper-slide slide">
      <img src="images/icon2-2.png" alt="">
      <h3>Al-Motrudiy</h3>
   </a>

   <a href="category.php?category=Doniyor ota" class="swiper-slide slide">
      <img src="images/icon3-3.png" alt="">
      <h3>Doniyor ota</h3>
   </a>

 
   <a href="category.php?category=Amir Temur" class="swiper-slide slide">
      <img src="images/icon4-4.png" alt="">
      <h3>Amir Temur</h3>
   </a>

   <a href="category.php?category=Afrosiyob" class="swiper-slide slide">
      <img src="images/icon14-14.png" alt="">
      <h3>Afrosiyob</h3>
   </a>

   <a href="shop.php" class="swiper-slide slide">
      <img src="images/icon9-9.png" alt="">
      <h3>Barchasi</h3>
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
                            <h2>Registon maydoni</h2>
                            <p>Registon maydoni o'zi ham bir necha qismga bo'linadi.Bular quydagilar:Tillakori, Sherdor va Ulug'bek madrasalaridir. </p>
                            <div class="effect-btn">
                                <a href="registonmaydoni.php" class="btncon"><i class="fa fa-eye"></i> Ko'proq ma'lumot</a>
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
                            <h2>Tillakori madrasasi</h2>
                            <p>Dastlab „Yalangtoʻshbiy kichik madrasasi“ deb nomlangan. Keyinchalik masjid bezagida boshqa bir obida qurilishiga yetadigan miqdorda oltin sarflangani uchun „tillakori“ (tilladan ishlov berilgan) deb yuritila boshlagan.</p>
                            <div class="effect-btn">
                                <a href="3tamadrasalar.php" class="btncon"><i class="fa fa-eye"></i> Ko'proq malumot</a>
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
                            <h2>Sherdor madrasasi</h2>
                            <p>Sherdor madrasa - Samarqanddagi meʼmoriy yodgorlik. Registon ansambli tarkibida. Mirzo Ulugʻbek xonaqohi oʻrniga Yalangtoʻsh Bahodir qurdirgan. Ulugʻbek madrasasining roʻparasida joylashgan.</p>
                            <div class="effect-btn">
                                <a href="3tamadrasalar.php" class="btncon"><i class="fa fa-eye"></i> Ko'proq malumot </a>
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
                            <h2>Bibixonim madrasasi</h2>
                            <p>Bibixonim jome masjidi (Amir Temur jome masjidi) — Samarqanddagi meʼmoriy yodgorlik . Amir Temurning katta xotini Bibixonim (asli Saroymulk xonim) nomi bilan bogʻliq.</p>
                            <div class="effect-btn">
                                <a href="bibixonim.php" class="btncon"><i class="fa fa-eye"></i> Ko'proq malumot </a>
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
                            <h2> Shohizinda </h2>
                            <p>Shohizinda meʼmoriy majmuasi Qoraxoniylar sulolasi tomonidan asos solingan.Ularning eng qadimiysi Qusam ibn Abbos maqbarasi boʻlib, xalq orasida Shohizinda (shohlar qabri) nomi bilan mashhur.</p>
                            <div class="effect-btn">
                                <a href="shohizinda.php" class="btncon"><i class="fa fa-eye"></i>Ko'proq malumot </a>
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
                            <h2>Goʻri Amir</h2>
                            <p>Goʻri Amir yoki Amir Temur maqbarasi  — Samarqanddagi meʼmoriy yodgorlik. Xalq orasida Goʻri Amir yoki Goʼri Mir (Mir Sayyid Baraka) deb nomlanib kelinadi.</p>
                            <div class="effect-btn">
                                <a href="amir-temur.php" class="btncon"><i class="fa fa-eye"></i> Ko'proq malumot </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!-- Effectli rasmdstur kodi tugadi -->





<section class="home-products">

   <h1 class="heading">Tarixiy obidalar haqida ma'lumot</h1>

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
   ?>

   </div>

   <div class="swiper-pagination"></div>

</div>

</section>


<!-- Sariqli rasm content dastur kodi boshlandi -->

    <div class="wrappermalumot1">
       <div class="boxmalumot">
         <span><i class="fa fa-bars"></i></span>
         <div class="contentmalumot">
         <h2 style="font-size: 18px; color: white;">Imom al-Buxoriy maqbarasi</h2>
         <p>Imom al-Buxoriy maqbarasi 19583Musulmon olamining taniqli muhaddislaridan biri Imom al-Buxoriy 810 yil 21-iyulda Buxoroda tavallud topgan, 870 yilda Samarqanddan 25 km uzoqda joylashgan Xartang qishlog'ida (Samarqand viloyatining hozirgi Chelak tumani) vafot etgan va o sha yerda dafn etilgan. Imom al-Buxoriyning maqbarasida O‘rta Osiyonong me’moriy an’analariga ko‘ra bajarilgan yodgorlik majmuasi barpo etilgan. Yodgorlik uchun ajratilgan yerning umumiy maydoni 10 gektarni tashkil etadi.
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

              <h2 style="font-size: 18px; color: white;">Doniyor ota ziyorotgohi</h2>
          <p>Xoja doniyor maqbarasi — Samarqanddagi meʼmoriy yodgorlikdir.Xoʻja Doniyor maqbarasi Samarqanddagi eng moʻtabar va mashhur ziyoratgohlardir. Xoʻja Doniyor maqbarasini uch din — islom, xristianlik va iudaizm vakillari bir xil darajada aziz va tabarruk deb ziyorat qiladilar. Doniyor, Daniil, Daniel — bu musulmon, nasroniy va yahudiy adabiyotlaridagi bitta aziz avliyoning nomidir.Amir Temur tugʻilganidan toʻrt yuz yil oldin kelgan va hazrati Doniyor maqbarasi shaharda oʻsha davrda bo'lgan.
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

              <h2 style="font-size: 18px; color: white;">Amir Temur maqbarasi</h2>
          <p>Amir Temur maqbarasi, Go‘ri Amir (14-asr oxiri — 1405 y.) — Samarqanddagi me’moriy yodgorligi. Xalq orasida Go‘ri Amir yoki Go‘ri Mir (Mir Sayyid Baraka) deb nomlanib kelinadi. Maqbaraga temuriylar sulolasiga mansub kishilar (Amir Temur, uning piri Mir Sayyid Baraka, o‘g‘illari Umar-shayx, Mironshoh va Shohrux, nabiralari Muhammad Sulton, Ulugʻbek va b.) dafn etilgan.Asosan, peshtoqli darvozasi bor hovli va maqbara binosi saqlangan. Goʻri Amir Oʻrta Osiyo meʼmor-chiligining noyob asari sifatida eʼtirof etiladi.
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

              <h2 style="font-size: 18px; color: white;">Amir Temur haykali</h2>
          <p>Amir Temurning muhtasham haykallari mamlakatimizning Toshkent, Shahrisabz va Samarqand  shaharlarida joylashgan... Toshkent — 1994-yil 31-avgust mustaqillik arafasida ochilgan.Samarqand va Shahrisabz — 1996-yil 18-oktyabrda har ikki shaharda Amir Temur haykali tantanali ravishda ochilgan.1996 yilning 23-26 oktyabr kunlari xalqaro nufuzli tashkilot YUNESKO tomonidan «Amir Temur va uning jahon tarixidagi o‘rni» mavzuidagi xalqaro konferensiya tashkil qilingan edi. 
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
            
             <h2 style="font-size: 18px; color: white;">Mirzo Ulug'bek observatoryasi</h2>
         <p>Ulugʻbek rasadxonasi - Samarqanddagi 15-asr meʼmorchiligining nodir namunalaridan biri, koʻhna astronomik kuzatuv muassasasi. Unda oʻndan ortiq turli astronomik qurilma va asboblar bo'lgan.Ulardan eng asosiysi radiusi 40,2 m li qoʻshaloq yoydan iborat kvadrant  qurilma hisoblanadi. Rasadxonada kichik oʻlchamli asboblar: armillyar sfera, 2, 4 va 7 halqadan iborat oʻlchov asboblari, triangula, quyosh hamda yulduz soatlari, asturlob va boshqalar boʻlgan.
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
             <h2 style="font-size: 18px; color: white;">Siyob bozor</h2>
         <p>Bir tomonida Bibixonim, ikkinchi tomonida Hazrati Xizr masjidlari qad ko‘targan, Registon  va Shohizinda majmualari oralig‘ida joylashgan bu bozor sayyohlarning ham sevimli maskani.Salkam 2000 ga yaqin savdo rastalari yozning jaziramasi, qishning qahratonidan himoya qilish uchun shiypon bilan berkitilgan.Bozorga kirish uch tavaqali arkli darvoza orqali bo‘lib, asrlar davomida saqlanib kelayotgan hunarmandchilik uslubida ko‘k koshinlar bilan bezatilgan.
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
            <span class="bibi">Afrosiyob qal'asi</span>
              <div  class="bibi2">Afrosiyob — Samarqandning qadimgi xarobasi. Bu nom tarixiy manbalarda qadimgi Samarqandga nisbatan faqat 17-asrdan boshlab uchraydi. Qadimgi Samarqand sugʻd manbalarida Smarakanve deb atalgan. Mil. av. 4-asrda Samarqand Aleksandr Maqsuniy qoʻshinlari tomonidan istilo etilgach, yunon mualliflari kundaliklarida Maroqanda sifatida eslatiladi. Maroqanda Smarakanvening yunoncha tarjimasi. Movarounnahrda somoniylar hokimiyat tepasiga kelgach, qadimgi Smarakanve 9-asrdan boshlab Samarqand deb atala boshlandi.Afrosiyob hozirgi Samarqandning shimoliy chegarasiga tutashgan keng boʻsh tepaliklar boʻlib, uning maydoni 219 ga. Tepalikning shim. Siyob arigʻi bilan chegaralangan. Jan. tomondan „eski shahar“ deb atalgan Samarqandga qoʻshilib ketgan.Shaharning dastlabki tarixi haqida yozma manbalarda maʼlumotlar juda kam uchraydi. Koʻhna shaharda oʻtkazilgan arxeologik qazishlar esa bunday maʼlumotlarni koʻproq bermoqda.</div>
              <div class="bibi3">
               <span><img src="images/Desktop/Afrosiyob/afrosiyob5.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Afrosiyob/afrosiyob2.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Afrosiyob/afrosiyob8.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images/Desktop/Afrosiyob/afrosiyob2.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div class="bibi2">
              Arxeologik qazishmalar bir necha metr qalinlikdagi madaniy qatlamlar qanday boʻlganligini koʻrishga, boylar va kambagʻallarning uylarini, hunarmandlarning ustaxonalarini, savdogarlarning doʻkonlarini, ko'cha va maydonlarni, shohona saroylar va ibodatxona, masjid va madrasalarni, mudofaa inshootlarini, shaharning suv bilan taʼminlash tizimi va h.k.ni aniqlashga yordam beradi.Afrosiyobda topilgan arxeologik materiallar Samarqand miloddan avvalgi 8—5-alarda Sugʻdiyonaning markaziy shahri sifatida vujudga kelganligini koʻrsatadi. Milloddan avvalgi 329 yilda shahar Aleksandr Maqduniy qoʻshinlari tomonidan vayron etilgan, uning izlari hozirgacha shahar mudofaa inshootlarida yaxshi saqlangan. Milloddan avvalgi 3 — 1-asrlarda, Kushonlar saltanati davrida shahar hayotida yuksalishlar yuz bergan.
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
                                 Xarita joylashgan o'rni <i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
               
            </section>
                    
            <section class="panel_b">
            <span class="bibi">Go'ri Amir maqbarasi</span>
              <div  class="bibi2">Amir Temur maqbarasi, Go‘ri Amir (14-asr oxiri — 1405 y.) — Samarqanddagi me’moriy yodgorlik. Xalq orasida Go‘ri Amir yoki Go‘ri Mir (Mir Sayyid Baraka) deb nomlanib kelinadi. Maqbaraga temuriylar sulolasiga mansub kishilar (Amir Temur, uning piri Mir Sayyid Baraka, o‘g‘illari Umar-shayx, Mironshoh va Shohrux, nabiralari Muhammad Sulton, Ulugʻbek va b.) dafn etilgan. Boburning ta’kidlashicha, dastlab Temurning nabirasi Muhammad Sulton Mirzo Samarqand qal’asi jan.da Toshqo‘rg‘on — chaqarda Madrasa qurdirgan. Muhammad Sulton halok bo‘lgach (1403), Amir Temur uning xotirasiga maqbara qurish haqida farmon berdi. Maqbara Madrasa hovlisining to‘riga bunyod etilgan.</div>
              <div class="bibi3">
               <span><img src="images/Desktop/A-Temur/7A-Temur.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/A-Temur/2A-Temur.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/A-Temur/3A-Temur.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images/Desktop/A-Temur/4A-Temur.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div class="bibi2">
              Bizgacha, asosan, peshtoqli darvozasi bor hovli va maqbara binosi saqlangan. Arxeologik tadqiqotlar natijasida maqbara hovlisining ikki yonidan Muhammad Sulton qurdirgan Madrasa va xonaqoh qoddiqlari topilgan. Madrasa va xonaqoh chorsi hovlining sharqiy va g‘arbiy tomonlarini egalla-gan. Hovlining jan.da gumbazli maqbara joylashgan. Maqbaraga jan. dan, Ulug‘bek qurdirgan dalon (1424) orqali kiriladi. Maqbaraning chortoq tarhli ziyorat-xonasi baland toqi — ravoqli, tepa-si yozuv hoshiyalari va ichki gumbaz bilan qoplangan. Tashki gumbazi 64 qobirg‘ali, baland poygumbaz (diametri — 15 m, bal. 12,5 m)ga o‘rnatilgan.Ziyoratxona o‘rtasidagi marmar panjara bilan o‘ralgan murabba xazira sahniga qator qabrtoshlar qo‘yilgan. Yuqorisi (to‘ri)da Amir Temurning harbiy yurish-larida unga hamroh bo‘lgan va uning yuk-sak hurmatini qozongan Mir Sayyid Baraka sag‘anasi joylashgan. Sayyid Baraka qabrining oyoq tomoniga Amir Temurning o‘zi dafn qilingan. Uning uch tomonida Muhammad Sulton, Mironshoh, Umarshayx qabrlari bor. 
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
                                 Xarita joylashgan o'rni <i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
            </section>
                    
            <section class="panel_c">
                <span class="bibi">Bibixonim maqbarasi</span>
              <div  class="bibi2">Bibixonim madrasasi – Amir Temurning katta xotini Bibixonim (Saroymulk xonim) "oʻz onasi sharafi"ga (Klavixo) 14-asr oxirida Samarqandda qurdirgan Madrasa. Sayyoh, olim A. Vamberi taʼkidlashicha, bu madrasada 1000 ga yaqin talaba oʻqigan.Bibixonim madrasasi Bibixonim jome masjidining kirish peshtogʻi qarshisida joylashgan. Lekin jome masjididan oldin qurilgan. Saroy tarixchisi Gʻiyosiddin Alining "Amir Temur 1399-yil 10-mayda madrasada toʻxtab oʻtganligi" haqidagi maʼlumoti shundan dalolat beradi. Tarixnavis Fasih Havofiy (1375— 1442) taʼkidlashicha, Amir Temur jome masjidi qurilishini kelib koʻrarkan, meʼmoriy majmuada mutanosiblik buzilganligi—Madrasa peshtogʻi va ayvoni jome masjidga nisbatan balandroq va qiyaroq boʻlib qolganligi uchun dargʻazab boʻladi va meʼmorlar (Xoja Mahmud Dovud va Muhammad Jald)ni jazoladi. Arxeologik qazishlar ham shu nomutanosiblikni tasdiqlaydi. Bino peshtogʻi qanchalik mahobatli boʻlmasin, uning qarshisidagi binoga monand emasligi koʻzga tashlanib qolgan. Meʼmoriy uslub talabiga koʻra, nomaqbul tushgan Madrasa peshtogʻi buzib tashlashga mahkum boʻldi. Shuning uchun ham keyingi ayerlarda Madrasa qoldiqlari buzib tashlandi.</div>
              <div class="bibi3">
              <span><img src="images\Desktop\Bibixonim/bibixonim1.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images\Desktop\Bibixonim/bibixonim9.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images\Desktop\Bibixonim/bibixonim10.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images\Desktop\Bibixonim/bibixonim16.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div class="bibi2">
              Bibixonim madrasasi yonida unga "qoʻsh" uslubda Tuman ogo xonaqohi qurilgan. Tarixiy manbalar bu xonaqoh ham 1399 yildan oldin bunyod etilganligi haqida maʼlumot beradi. Chortokli keng xonaqoh, tepasi baland gumbaz bilan bogʻlangan. Devorlariga manzara naqshin gullar, serhasham bezaklar ishlangan. 4 tarafidagi keng derazalar—tobadonlar va eshiklar orqali xonaqoh juda yaxshi yoritilgan. Ostidagi tagxona—sardoba esa kichikroq boʻlib, devorlari yirik kulrang toshtaxtalar bilan bezatilgan. Tagxonada bir necha tosh tobutlar saqlangan. 1875-yil zilzilasi natijasida tagxona gumbazchasi oʻpirilib, pastda toshtobutlar borligi maʼlum boʻldi. Shu vaqgdan boshlab aholi orasida bu tobutlardan biri Bibixonimga tegishli degan ovoza tarkaldi. 1941-yilda oʻtkazilgan arxeologik tadqiqotlar goʻyo bu rivoyatni tasdiklagandek boʻldi. Shu sababli yaqingacha ushbu xonaqoh Bibixonim maqbarasi deb yuritilgan.Keyingi tadqiqotlar bu muammoga aniklik kiritdi. Bibixonim (Saroymulk xonim) Amir Temur vafotidan keyingi boʻhron yillarida zaharlab oʻldirilgan. Bu binodagi ayol jasadi esa moʻmiyolangan (demak, uzoq joydan keltirilgan) va antropolog aniqlashicha, oʻrta yoshlardagi, sochlari qora va jingalak qandaydir boshqa ayol ekan.Tuman ogʻo xonaqohi Amir Temur tavalludining 660 yilligi munosabati bilan 1996-yilda taʼmir etilgan.
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
                                 Xarita joylashgan o'rni <i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
            </section>
                    
            <section class="panel_d">
      
                <span class="bibi">Hazrati Xizir ziyorotgohi</span>
              <div  class="bibi2">Hazrati Xizr masjidi Samarqand sh ahrining muqaddas ziyoratgohlaridan biridir. U Samarqanddagi birinchi musulmon masjidi va me’moriy obidasi sifatida e’tirof etiladi. Masjid Qutayba ibn Muslim tomonidan qurilib, Hazrati Xizr nomi bilan atalgan. Ma’lumotlarga ko’ra, dastlab sajdagohi mavjud bo’lgan. VIII asrda arablar tomonidan otashparastlarning ibodatxonalari buzib tashlanadi. Shu tepalikdagi ibodatxona o’rniga Qutayba ibn Muslim tomonidan birinchi masjid binosi quriladi va Hazrati Xizr nomi bilan ataladi.  Fikrimizni xonaqoh mehrobidagi 1274 yil hijriy (1854 melodiy yil), 1302 hijriy yil (1884 melodiy yil) degan yozuvlar isbotlaydi.Mustaqillik yillarida hazrati Xizr masjidi mamlakat rahbariyati qo’llab-quvvatlashi bilan bir necha bor mukammal ta’mirlandi, masjid yonida joylashgan Arzis qudug’i qayta tozalanib, qadimiy holiga qaytarildi.</div>
              <div class="bibi3">
               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir2.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir5.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir1.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir4.jpg" alt="Rasm topilmadi" ></span>
              </div>
              
              <div class="xarita1">
                        <div class="xarita">
                              <a href="https://www.google.com/maps/place/Hazrati+Xizr+masjidi/@39.6634436,66.9806549,603m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3f4d18bc7a6409bb:0x57e481af408fac1a!8m2!3d39.6634395!4d66.9832298!16s%2Fg%2F11h1st3ym">
                                 Xarita joylashgan o'rni <i class="fa-sharp fa-solid fa-location-dot"></i>
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


   <p>
   Tarixiy yozma manbalarda Samarqand yoshi qadimiyligi haqida maʼlumotlar bor. Muhammad an-Nasafiy „al-Qand fiy zikri ulamoi , Haydar as-Samarqandiy (XII asr) „Qandiyai Xurd“, Abu Tohirxoja Samarqandiy „Samariya“, Xitoy tarixchisi Chjan Syan, yunon va rimlik tarixchilar Arrian, Kursiy Ruf va boshqa koʻplab mualliflarning asarlarida bu haqda yozib oʻtilgan. Samarqand va Rim insoniyat taqdiridagi buyuk xizmatlarini nazarda tutib „Boqiy shaharlar“ nomini olganlar. Xalq iborasi „Samarqand sayqali roʻyi zamin ast“ — Samarqand yer yuzining sayqali (jilosi) deb behuda aytilmagan. Amir Temur Samarqandni mehr bilan qadrlagan va dunyoning sayqaliga aylantirgan.</p>


</div>


<div class="load-more"> <a href="orders.php">Ko'proq ma'lumot <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a> </div>

<!-- carusel 1 malumot  boshlandi-->

<div class="container-allbox">
<div class="containerbox">
  <img src="images/Desktop/Hazrati-Xizr/hazratixizir6.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white; font-size:25px;">Hazrati Xizr masjidi</a></span>
</div>
<div class="containerbox">
  <img src=" images/Desktop/Mirzo-U/mirzo-u1.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Mirzo Ulug'bek observatoryasi</a></span>
   
</div>
<div class="containerbox">
  <img src="images/Desktop/Shohizinda/shoxizinda9.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Shohizinda ziyorotgohi</a></span>
   
</div>
<div class="containerbox">
  <img src="images/Desktop/Arab-ota/ota1.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Arab ota ziyorotgohi</a></span>
   
</div>
<div class="containerbox">
  <img src="images/Desktop/A-Temur-haykali/haykal5.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Amir Temur maqbarasi</a></span>
   
</div>
<div class="containerbox">
  <img src="images/Desktop/Afrosiyob/afrosiyob5.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Afrosiyob qal'asi</a></span>
   
</div>
</div>
<!-- carusel 1 malumot tugadi-->

<!--  BIRINCHI progresning boshlanish kodi  CIRCLE-->
<div class="samuzbar">
      <b>Samarqandga kelgan sayohatchilar haqida statistika</b>
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
        <li><div class="bar" data-percentage="74"></div><span>Mart 2020</span></li>
        <li><div class="bar" data-percentage="65"></div><span>Aprel 2020</span></li>
        <li><div class="bar" data-percentage="45"></div><span>Mart 2021</span></li>
        <li><div class="bar" data-percentage="50"></div><span>Aprel 2021</span></li>
        <li><div class="bar" data-percentage="72"></div><span>Mart 2022</span></li>
        <li><div class="bar" data-percentage="80"></div><span>Aprel 2022</span></li>
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
            <h1>Samarqanddagi diqqatga sazovor joylar</h1>
        </div>

        <div class="rowcon">

            <div class="columncon">
                
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Desktop/city/city04.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Samarqand: Silk road</h2>
                            <p>Boqiy shahar tarixiy joyga kirmasada hozirgi vatqi sayyohlar uchun juda mashhur joyga aylanmoqda. Bu shahardan turli xil hunarmandchiliklar ham joy olgan</p>
                            <div class="effect-btn">
                                <a href="diqqatsj.php" class="btncon"><i class="fa fa-eye"></i> Ko'proq ma'lumot</a>
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
                            <h2>Siyob bozor</h2>
                            <p>Bir tomonida Bibixonim, ikkinchi tomonida Hazrati Xizr masjidlari qad ko‘targan, Registon va Shohizinda majmualari oralig‘ida joylashgan bu bozor sayyohlarning ham sevimli maskani.</p>
                            <div class="effect-btn">
                                <a href="diqqatsj.php" class="btncon"><i class="fa fa-eye"></i>  Ko'proq ma'lumot</a>
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
                            <h2>«Afrosiyob» muzeyi</h2>
                            <p>Muzeyda Samarqandning moddiy madaniyatini yorituvchi sopol, shisha, tosh, metal, suyak, korapilastika va me’moriy naqshlardan iborat boy to’plamlar saqlanadi. Bular qariyb 20 mingdan ortiq osori-atiqalarni tashkil qiladi.</p>
                            <div class="effect-btn">
                                <a href="diqqatsj.php" class="btncon"><i class="fa fa-eye"></i> Ko'proq ma'lumot</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
           

          
        </div>
    </div>


<!-- tez tez so'raladigan savollar dastur kodi boshlanishi -->
<div class="oftenqs">
    <h1>Tez - tez so'raladigan savollar</h1>
    
</div>
<!-- tez tez so'raladigan savollar dastur kodi tugadi -->

<!-- According to ya'ni tez tez beriladigan savollar dastur kodi boshlanishi -->
<div>
<ul class="accordion-menu">
<li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-bounce"></i>
               
                    O'zbekiston Respublikasining qaysi viloyatlarida qadimiy tarixiy obidalar mashhur hisoblanadi ? 
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                <li><a href="#">O'zbekiton Respublikasidagi viloyatlarning barchasida mashhur tarixiy obidalar bor bo'lib biz ba'zilarini sanab o'tamiz! </a></li>
                    <li><a href="#">Samarqand viloyati: Registon maydoni, Shohizinda ziyorotgohi, Bibixonim masjidi, Goʻri Amir maqbarasi, Doniyor ota ziyorotgohi, Imom al-Buxoriy Maqbarasi, Imom al-Moturudiy Maqbarasi va Ulugʻbek rasadxonasi.</a></li>
                    <li><a href="#">Buxoro viloyati:  Ismoil Somoniy maqbarasi, Chor Bakr, Bahouddin Naqshband majmualari, Mag‘oki Attor masjidi, Poi-Kalon ansambli, Qadimgi Poykent shahri qoldiqlari va Toshsaroy madrasalari. <b>Bu tarixiy obidalar ICYeSCOning Islom Olami Merosi ro‘yxatiga kiritildi.</b> </a></li>

                    <li><a href="#">Xorazm viloyati: Xiva shahri, Ichon-Qal’a Tuproq Qal'a, Ayoz Qal'a, Qo'y Qirilgan Qal'a, Guldursun Qal'asi, Pil Qal'a, Anqa Qal'a, Qo'rg'oshin Qal'a, Janbas Qal'adan iborat.</a></li>
                    <li><a href="#">Surxondaryo viloyati:  Qirqqiz qal’asi, Hakim at-Termiziy majmuasi, Kokildor ota xonaqohi, Sulton Saodat majmuasi, Said Vaqqos maqbarasi, Sayrob chinori, Teshiktosh g‘ori, Xo‘ja Gur Gur ota mavzesi, Sangardak sharsharasi, Dalvarzintepa yodgorligi, Kampirtepa qal'asi, Jarqo‘rg‘on minorasi</a></li>
                    <li><a href="#">Qashqadaryo viloyati: Abu Ubayd ibn al-Jarroh yodgorlik majmuasi, Qarshi ko‘prigi,  Ko‘k-Gumbaz masjidi, Qilichboy madrasasi, Xo‘ja Abdulaziz madrasasi, </a></li>
                    <li><a href="#"> Farg'ona viloyati: XUDOYORXON O'RDASI (SAROYI), MODARIXON MAQBARASI, SHOHIMARDON</a></li>
                    <li><a href="#"> Andijon viloyati: Qutayba  ibn Muslim maqbarasi, Mingtepa, Ahmadbekhoji mehmonxonasi, Ark ichi</a></li>
                    <li><a href="#">Namangan viloyati: Chustdagi Bibiona yodgorligi, Chortoqdagi Sulton Uvays Qaroniy ziyoratgohi, Xo'ja Amin maqbarasi</a></li>
                </ul>
            </li>



            <li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-beat-fade"></i>
                    Samarqand viloyatida hozircha nechta tarixiy obidalar mavjud ?<b> <i class="fa-solid fa-question fa-beat-fade"></i></b> 
                    
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                    <li><a href="#">Samarqand jahonning eng qadimgi shaharlaridan biri — 2700-yildan ortiq tarixga ega. Samarqand shahrida hozirda tarixiy ahamiyatga ega binolar 600dan ortiq. Tarixiy yozma manbalarda Samarqand yoshi qadimiyligi haqida maʼlumotlar bor. Muhammad an-Nasafiy „al-Qand fiy zikri ulamoi , Haydar as-Samarqandiy (XII asr) „Qandiyai Xurd“, Abu Tohirxoja Samarqandiy „Samariya“, Xitoy tarixchisi Chjan Syan, yunon va rimlik tarixchilar Arrian, Kursiy Ruf va boshqa koʻplab mualliflarning asarlarida bu haqda yozib oʻtilgan. </a></li>
                    <li><a href="#">Samarqand — jahonning eng qadimiy shaharlaridan biri, Rim, Afina, Vavilonlarning tengdoshidir. O’tmishning shoirlari va tarixchilari uni chinakam «Sharq jannatmakon bog’i», «Yer yuzi», «Sharq olamining bebaho durdonasi», «Jahon mamlakatlarning bezagi», «Sharqning Rim kabi shahri»… va hokazolar kabi go’zal o’xshatishlarni bejiz bag’ishlamagan edilar. Samarqand  insoniyat taqdiridagi buyuk xizmatlarini nazarda tutib „Boqiy shaharlar“ nomini olganlar. Xalq iborasi „ Samarqand sayqali roʻyi zamin ast “ — Samarqand yer yuzining sayqali (jilosi) deb behuda aytilmagan. Amir Temur Samarqandni mehr bilan qadrlagan, dunyoning sayqaliga aylantirgan. </a></li>
                </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-beat-fade"></i>
                «Samarqand sayqali roʻyi zamin ast» haqida umumiy ma'lumot bormi ?
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                    <li><a href="#">Samarqand 6-asrda Turk xokonligi tarkibiga kirgan va mahalliy hokimlar tomonidan boshqarilgan. Bu davrda Samarqand Hindiston, Eron, Misr va Vizantiya davlatlari bilan savdo qilgan. Oʻz davrida „10 Oʻq xoqonligi“ deb yuritilgan.</a></li>
                    <li><a href="#">Arablarga qarshi koʻtarilgan isyonlarni bostirishga faol qatnashgan mahalliy zamindor aholi vakillari IX asr 20 yillaridan Movarounnahr va viloyatlarini boshqarishga tortildi, masalan, Samarqandni boshqarish Somoniylar qoʻliga oʻtdi. Oʻsha vaqtdan Samarqand — Somoniylar davlatining poytaxti boʻldi. 887-yildan birinchi marta somoniylar kumush tangalari Samarqandda zarb qilina boshladi. Somoniylar poytaxti Buxoroga koʻchirilgandan (889) soʻng ham Samarqand Movarounnahrning eng katta hunarmandchilik va savdo markazlaridan biri boʻlib qoldi. XI asrdan Samarqand Qoraxoniylar davlati tarkibiga kirgan.Qoraxoniylar davrida turli oʻlkalarning birlashishi fan va madaniyat rivojiga ham imkon berdi. Bu davrda Samarqand ham maʼmuriy, ham madaniy markaz sifatida ahamiyati oshib, yanada kengayib, rivojlanib borgan.</a></li>
                    <li><a href="#"> 1220-yil Chingizxon qoʻshinlari Samarqandga bostirib kirib, shaharga oʻt qoʻygan va aholining koʻp qismini qirgan, qolganlari shaharni tark etib omon qolgan. Bir necha yildan soʻng Samarqand qayta tiklana boshlagan. XIII asr 2-yarmida Samarqandga kelgan venetsiyalik sayyoh Marko Polo „Sonmarkon kapa va mashhur shahar“ deb yozgan. Moʻgʻullar hukmronligi davrida Samarqand Chigʻatoy ulusi tarkibida boʻlgan.</a></li>
                    <li><a href="#">XIV asr oʻrtalarida Movarounnahrda moʻgullarga qarshi xalq harakatlari boʻlib oʻtdi. Sarbadorlar isyoni natijasida shaharda bir necha oy xalq hokimiyati oʻrnatildi. XIV asr oxiri va XV asrda Samarqand iqtisodiy-siyosiy va madaniy hayoti ancha yuksaldi. Amir Temur saltanati poytaxti sifatida Samarqand jahonga mashhur boʻldi. Saltanat poytaxti Samarqand Amir Temur davrida ayniqsa gullab yashnadi. Shaharda Isfahon, Sheroz, Halab, Xorazm, Buxoro, Qarshi va Kesh shaharlarining meʼmor va binokorlari qoʻli bilan saroylar, masjidlar, madrasalar, maqbaralar quriladi. </a></li>
                    <li><a href="#"> Xususan, Shohi Zinda meʼmoriy majmuasiga mansub Shodimulk ogʻo maqbarasi, Shirinbeka ogʻo maqbarasi va boshqa quriladi. Shaharda Bibixonim jome masjidi, Amir Temurning qarorgohi Koʻksaroy va Boʻstonsaroylar qad koʻtaradi. Umuman olganda Samarqand shahri Amir Temur davrida butunlay yangidan qurildi. Shahar tevaragi mustahkam qalʼa devori bilan oʻralib, Ohanin, Shayxzoda, Chorsu, Korizgoh, Soʻzangaron va Feruza kabi nomlar bilan ataluvchi 6 ta darvoza oʻrnatildi. Movarounnahrning dehqonchilik vohalarida, xususan Zarafshon vodiysida oʻnlab sugʻorish tarmoqlari chiqarilib, dehqonchilik maydonlari kengaytirildi.</a></li>
                    <li><a href="#"> 1925-yil 17-fevralda Buxoro shahrida bo‘lib o‘tgan Butuno‘zbek Sovetlarining birinchi taʼsis qurultoyida „O‘zbekiston Sovet Sotsialistik Respublikasining tashkil topishi to‘g‘risida Deklaratsiya“ qabul qilingan. Respublikaning birinchi poytaxti etib Buxoro shahri tanlangan. 2012-yilda „O‘zbekiston“ nashriyoti tomonidan chop etilgan „O‘zbekiston tarixining muhim sanalari“ nomli kitobdagi maʼlumotlarga koʻra, 1925-yil aprel oyida mamlakat poytaxti Buxoro shahridan Samarqand shahriga ko‘chirilgan. 1930-yilda esa poytaxt Toshkent shahriga koʻchiriladi va 1991-yil 31-avgustga qadar O‘zSSRning, undan soʻng esa O‘zbekiston Respublikasining bosh shahri bo‘lib kelmoqda.</a></li>
                    <li><a href="#"> Samarqand qadimiy tarixi va meʼmoriy yodgorliklari tufayli butun dunyo tan olgan haqiqiy muzey shahriga aylandi. Shu bois respublika hukumati qarori bilan 1982-yilda Samarqandning Afrosiyob shahristoni, oʻrta asrlarda bunyod etilgan meʼmoriy yodgorliklar va XIX—XX-asrlarda qurilgan „Yangi shahar“dagi binolar, tarix va oʻlkashunoslik muzeylari asosida „Samarqand davlat birlashgan tarixiymeʼmoriy muzeyqoʻriqxonasi“ tuzildi. Oʻsha yilda shaharning tarixiy kismini muhofazalash chegaralari belgilandi.</a></li>
                    <li><a href="#"> Samarqand meʼmoriy-tarixiy yodgorliklari 2001-yilda UNESCOning Finlandiyada oʻtkazilgan 25-sessiyasida Jahon merosi roʻyxatiga kiritildi.</a></li>
                    <li><a href="#">Samarqand dunyo taraqqiyotining eng qadimgi va markaziy shaharlaridan biri boʻlib, jahon madaniyati va fani xazinasiga katta hissa qoʻshgan shahardir. Oʻzbekiston Respublikasi Prezidenti va hukumati rahbarligida mustaqillik yillari Samarqand shahridagi arxitektura yodgorliklarini tiklash va taʼmirlash, ayniqsa, eski shahar qismini qayta qurish va taʼmirlash, obodonlashtirish boʻyicha katta ishlar amalga oshirildi. Temuriylar sulolasi yaratgan arxitektura yodgorliklari Misr, Xitoy, Hindiston, Gretsiya, Italiya kabi davlatlarda yaratilgan arxitektura obidalaridan aslo qolishmaydi. </a></li>
                    <li><a href="#">Hozirda esa dunyo bo'ylab mashhur shaharlar toifasiga kiradi. Tarixiy obidalar holatini yaxshilash va ularni saqlash bo'yicha keng ishlar olib borilmoqda. Samarqand sayohlar uchun qulay shaharga aylanmoqda va dunyoning turli burchaklaridan buyuk tarixiy obidalarni tomosha qilish uchun sayyohlar kelishi ortmoqda</a></li>
                </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-beat-fade"></i>
                    Samarqannda eng mashhur tarixiy obidalar qaysilar va sayyohlar qaysi tarixiy obidalarga tashrif buyurishadi ?
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                    <li><a href="#"> Samarqandda mashhur tarixiy obidalar juda ko'p va hamasini ziyorot qilish uchun  sharoitlar yaratilgan. Shular orasida sayyohlar tashrifi ko'p bo'lgan tarixiy obidalar quydagilar: </a></li>
                    <li><a href="registonmaydoni.php">Registon maydoni </a></li>
                    <li><a href="shohizinda.php">Shohizinda ziyorotgohi</a></li>
                    <li><a href="bibixonim.php">Bibixonim masjidi (1399-1404)</a></li>                  
                    <li><a href="3tamadrasalar.php">Tillakori madrasasi (1647-1659/6</a></li>
                    <li><a href="3tamadrasalar.php">Sherdor madrasasi (1619-1635/36)</a></li>
                    <li><a href="3tamadrasalar.php">Ulugʻbek madrasasi (1417-1420)</a></li>
                    <li><a href="amir-temur.php">Goʻri Amir maqbarasi (1404)</a></li>
                    <li><a href="doniyor-ota.php">Doniyor ota ziyorotgohi</a></li>
                    <li><a href="al-buxoriy.php">Imom al-Buxoriy Maqbarasi</a></li>
                    <li><a href="al-motrudiy.php">Imom al-Moturudiy Maqbarasi</a></li>
                    <li><a href="m-rasadxonasi.php">Ulugʻbek rasadxonasi (1428-1429)</a></li>
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

<div class="lavha1">Samarqandning xaritada joylashgan o'rni</div>

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