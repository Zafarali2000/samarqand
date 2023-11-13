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
   <title>Diqqatga sazavor joylar haqida ma'lumot</title>

   
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
         <h3 >Siyob bozor</h3>
         <p>Samarqandga kelib, Siyob bozoriga tashrif buyurmaslik, g‘oyat qiziq sarguzashtni qo‘ldan chiqarish demakdir. Sharq bozori — bu nihoyatda o‘ziga hos joy bo‘lib, qadimiy shahar muhitini his etish mumkin. Bundan bir necha yillar ilgari bozorlar Buyuk Ipak yo‘lidagi bosh strategik savdo ob'yektlar vazifasini o‘tagan. Samarqanddagi Siyob bozori har bir sayyoh ko‘rishi zarur bo‘lgan shaharning qadimiy nuqtalaridan biri hisoblanadi. <br><b>Bozor muhiti:</b> Siab bozori tor ko'chalar va gavjum do'konlardan iborat labirint bilan jonli va jonli muhitni taqdim etadi. Bozor o'zining jonli ranglari, xushbo'y hidlari va savdogarlar, mahalliy aholi va sayyohlarning baquvvat shovqini va shovqini bilan mashhur.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Siyob-bozor/siyob3.jpeg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
         <p>Siyob bozori nomi bilan ham tanilgan, Oʻzbekistonning Samarqand shahrida joylashgan gavjum bozor. 
         <b > Siab bozori haqida ba'zi ma'lumotlar:</b> 
        <b> Manzil: </b>  Siyob bozori Samarqandning qoq markazida, Bibixonim masjidi va Registon maydoni yaqinida joylashgan. Bu shaharning eng qadimiy va eng yirik bozorlaridan biri bo‘lib, tarix asrlarga borib taqaladi.
      </p>

         <p> <br>
         <b>Tovarlarning xilma-xilligi:</b>   Siab bozori mahalliy aholi va tashrif buyuruvchilar uchun keng turdagi tovarlarni topishi mumkin bo'lgan joy. Bozor turli xil mahsulotlarga ixtisoslashgan bo'limlarga bo'lingan. Siz yangi mevalar, sabzavotlar, o'tlar va ziravorlar, shuningdek, an'anaviy shirinliklar, quritilgan mevalar, yong'oqlar va mahalliy lazzatlanishlarning assortimentini topishingiz mumkin. Bozorning boshqa bo'limlarida kiyim-kechak, to'qimachilik, hunarmandchilik, kulolchilik va suvenirlar taklif etiladi.</p>
         <p><b>    Hozirgi foydalanish:</b> Anʼanaviy oʻzbek oshxonasi: Siyob bozori anʼanaviy oʻzbek oshxonasining taʼmini tatib koʻrish uchun ajoyib joy. Ko'plab oziq-ovqat do'konlari va kichik restoranlar mavjud bo'lib, ularda siz palov (palov), shashlik (grilda pishirilgan shish), somsa (go'sht yoki sabzavot bilan to'ldirilgan pishiriqlar) va turli xil nonlar, jumladan, mashhur o'zbek yassi nonini tatib ko'rishingiz mumkik.<br>
        </p>
        <p>   <b>Madaniy tajriba:</b> Siab bozori mahalliy madaniyatga sho'ng'ish va Samarqand aholisining kundalik hayotini kuzatish imkonini beradi. Bu do'stona sotuvchilar bilan muloqot qilish, an'anaviy o'zbek mahsulotlari bilan tanishish va mahalliy savdo urf-odatlari va an'analariga guvoh bo'lishingiz mumkin bo'lgan jonli faoliyat markazidir
        </p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Siyob-bozor/siyob2.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
            <p>Mahalliy aholini aytishicha, bu yerning quruq mevalari, shirinliklari va yong‘oqlari shunchalik mazaliki, hatto poytaxt aholisi ham ularning xaridi uchun Siyob bozoriga tashrif buyurishar ekan. Shu bilan birga sharq bozorida ziravorlarning xilma-xilini, hatto eng noyoblarini ham uchratish mumkin. Yeguliklardan tashqari, bu yerda mahalliy hunarmand va ustalarning yasagan buyumlari ham mavjud. Non qatori alohida e’tiborni tortadi, axir, Samarqand noni unning alohida navidan tayyorlanadi-da. Siyob bozorida 17 dan ortiq non turini uchratish mumkin.
            </p>
            
         </div>
         <div class="content">
            
            <p>   Siyob bozoriga tashrif buyurish Samarqandning an'anaviy bozor madaniyatini ko'rish imkonini beruvchi ajoyib va hissiyotlarga boy tajribadir. Bu hududni kashf qilish, mahalliy lazzatlarni tatib ko'rish va mintaqaning boy merosini aks ettiruvchi noyob mahsulotlar va hunarmandchilikni kashf qilish uchun joy.</p>
            <h3 style="margin-bottom:15px;">Siyob bozoriga oid video lavha </h3>
         </div>
       
   </div>
   
   <iframe style="margin-bottom:15px;" width="100%" height="550px" src="https://www.youtube.com/embed/fwYOWhz4_W8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Siyob bozorining xaritadagi manzili.</div>

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1104.2972297950396!2d66.97931217243011!3d39.66210829156856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18b95039584f%3A0x8663a8356a71c854!2sSiab%20Bazar!5e1!3m2!1suz!2s!4v1684844493887!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="margin-bottom:20px;"></iframe>
      
   <br>
      <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top 45px; margin-bottom:25px; margin-top:20px;">
   <br>


<!-- *********************************************************************************************************************************************************************************************************************************** -->

<div class="row">

   
<div class="content">
         <h3> Boqiy shahar (Silk road)</h3>
         <p>Albatta, bugungi asosiy tashrif manzili Samarqand tumani hududida joylashgan Xalqaro turizm markazining «Boqiy shahar majmuasi» bo‘ladi. Umumiy maydoni 7 gektarga teng . Buning barchasi sayyohlar uchun qulaylik yaratish va Samarqandda sayyohlar oqimini oshirish uchun qilingan ishlar hisoblanadi. Buning barchasi xususiy «Samarkand Touristic Centre» MChJ buyurtmasi asosida bunyod etilgan.
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
            
   <p>
         <b>Qabul qilish quvvati: 1 000 kishi.</b> <br>
         <b>Hududida: 1 ta galereya va qadimiy sharqona bozor bor. <br>
         Hunarmandchilik ustaxonalari: 14 ta, ulardagi rastalar soni — 36 ta. <br>
         Milliy taomlar restorani: 2 ta.
      </b>
   </p>

         <p><b>Shundan:  kulolchilik ustaxonasi — 3 ta; 
            <br>
            - temirchilik ustaxonasi — 2 ta;
            <br>
            - Samarqand qog‘ozi tayyorlash ustaxonasi — 1 ta;
            <br>
            - ipak gilamlari to‘qish sexi — 3 ta;
            <br>
            - zargarlik ustaxonasi — 3 ta;
            <br>
            - yog‘och o‘ymakorligi ustaxonasi — 2 ta.

         </b>
      </p>
   </p>
   </div>
</div>


<!-- 6666 -->
<div class="row">
<div class="content">

   <p>Samarqandda yangi ochilgan “Buyuk ipak yo‘li” xalqaro turizm markazi yiliga 2 mln turistga xizmat ko‘rsatishi mumkin. Majmua qurilishi 2019-yili Samarqand tumanidagi eshkak eshish kanali bo‘yida, 212 gektar maydonda boshlandi.Markaz ichida “Congress Hall”, “Boqiy shahar” majmuasi, amfiteatr va ko‘plab boshqa inshootlar bor.Shu jumladan, dunyoning yetakchi mehmonxonalari ro‘yxatiga kiritilgan 22 qavatli “Samarqand Regency Amir Temur” va yana yettita mehmonxona kiradi.

   </p>
</div>

</div>
<!-- 666 -->
<div class="row">
<div class="content">
   <p>«Boqiy shahar» tarixiy majmuasida rassomlik, amaliy san’at, zardo‘zlik yo‘nalishlarida milliy hunarmandchilik ustaxonalari, milliy uslubdagi choyxonalar, shirinliklar savdo shoxobchalari, Chorsu sharq bozori, milliy kiyimlar galereyasi, savdo, kutubxona, qo‘g‘irchoq teatri va shaxmat maktabi joylashgan.“Boqiy shahar dostoni” musiqali hikoyasi yangi markazning obrazli ifodasi boʻldi. Xalqimiz va dunyo sanʼati uygʻunlashgan shou marosimga oʻzgacha shukuh bagʻishladi
   </p>
  
</div>
<div class="image">
<img src="images/Desktop/city/city9.jpeg" alt="rasm topilmadi">

</div>


<div class="content">

   <p>Samarqandga tashrif buyurgan sayyohlar uchun ham qulayliklar yaratilgan. Sayyohlar uchun xizmat ko'rsatadigan mehmonxonalar ham mavjud.Yangi turizm markazi Samarqandga keladigan xorijiy sayyohlar sonini 1,5 mlndan oshirishda muhim o‘rin tutadi. Kelgusi besh yilda keladigan sayyohlar sonini hozirgi 2 mlndan 9 mlnga yetkazish maqsad qilingan. Eng muhimi, turizm sohasida mehnat qilayotganlar soni 500 mingdan oshadi.
   </p>
</div>

</div>
<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Boqiy shahar haqida video lavha</div>
<iframe  style="margin-bottom:20px;" width="100%" height="550px"" src="https://www.youtube.com/embed/mtJ4fsrwU3w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<iframe style="margin-bottom:20px;" width="100%" height="550px" src="https://www.youtube.com/embed/mz95LxPVpkU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


   <div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Boqiy shaharning  xaritadagi manzili.</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5567.523438153006!2d67.05862323822576!3d39.659381804472204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d215f218c9fa9%3A0x1b8eb01d6e562990!2sSilk%20Road%20Samarkand!5e1!3m2!1suz!2s!4v1684844374078!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-bottom:20px; margin-top:20px;">
   <br>

<!-- *********************************************************************************************************************************************************************************************************************************
 -->

 <div class="row">

   
<div class="content">
   <h3 >Afrosiyob muzeyi</h3>
   <p>Samarqand shahar tarixi muzeyi 1970 yilda tashkil etilgan. Muzey Afrosiyob shaharchasida – Samarqandning qadimiy, mo’g’illar istilosigacha bo’lgan qismida joylashgan.Muzey ekspozitsiya zallarida miloddan avvalgi birinchi ming yillikning o’rtalaridan XIII asrning boshlarigacha bo’lgan shahar tarixini yorituvchi eksponatlar namoyish etilgan.Samarqand ikki ming yil davomida (So’g’d yoki So’g’diyonaning) markaziy shahri bo’lib, muzeyda namoyish etilayotgan eksponatlar Samarqandning yuqori darajadagi madaniy, siyosiy, diniy va ishlab chiqarishdagi hayotini yaqqol yoritadi.
   </p>
  
</div>
<div class="image">
<img src="images/Desktop/afrosiyob-muzeyi/muzey2.jpg" alt="rasm topilmadi">

</div>


<div class="content">
   <p>Muzeyda Samarqandning moddiy madaniyatini yorituvchi sopol, shisha, tosh, metal, suyak, korapilastika va me’moriy naqshlardan iborat boy to’plamlar saqlanadi. Bular qariyb 20 mingdan ortiq osori-atiqalarni tashkil qiladi.Bu eksponatlarning asosiy qismi muzeyning 11 ta zalidan iborat ekspozitsiyalarida namoyish etilib, qolgan yordamchi materiallar muzey fondlarida saqlanmoqda.Afrosiyob qadimiy shahar manzilgohining sharqiy qismida joylashgan Samarqand shahar tarixi Afrosiyob muzeyi Sharof Rashidov tashabbusi bilan 1970-yil 24-oktabrda chilgan.
   
</p>

</div>

</div>




<div class="row">

   <div class="image">
   <img src="images/Desktop/afrosiyob-muzeyi/muzey8.jpg" alt="rasm topilmadi"> 
      
</div>
   
   <div class="content">
      <p>Muzeyning <b>birinchi zalida</b> Afrosiyob vayronalarini arxeologik oʻrganish tarixi boʻyicha XIX-asrning oʻrtalarigacha boʻlgan materiallar, shaharning arxeologik ob’ektlari va ma’muriy obidalari koʻrsatilgan relefli xarita joylashgan.
         <br>
         <b>Ikkinchi zalda</b> shahar hayotining ilk asrlari tarixi bilan bogʻliq buyumlar: kulolchilik xumdoni oʻchogʻining maketi, mil. avv. VI-IV asrlar sopol idishlari, tosh va metallardan yasalgan buyumlar joylashtirilgan.

      </p>
      
   </div>


   
   <div class="content">
   
      <p> <b>Uchinchi zalda</b> ellinizm davri bilan bogʻliq buyumlar oʻz oʻrnini topgan boʻlib, ular Samarqandning mil. avv. III-II asrlarda qurilgan mudofaa devorlarining maketlari, qurol-yarogʻ, tangalar, sopol idishlari, terrakota, tosh va yogʻoch buyumlari, shuningdek qal’a devoridan olingan yogʻoch sinchkorlik boʻlaklari joylashgan. <br>
      Samarqandliklarning milodiy I-IV asrlardagi ma’naviy hayoti va roʻzgʻorini yorituvchi ashyolar <b>toʻrtinchi zalda</b> oʻz oʻrnini egallagan boʻlib, ulardan milodiy IV asr mehrob-oʻchoq, terrakota haykalchalari, roʻzgʻor buyumlari, suyaklar solingan ostodon namoish etilgan.     <br><b> Beshinchi zalda</b> olov va ajdodlar ruhi e’tiqodi bilan bogʻliq buyumlar: ossuariylar, uyning ibodat qilish qismi, devoriy suratlar, raqqosa shaklidagi yogʻoch haykal-ustunlar, soʻgʻd yozuviga ega boʻlgan buyumlar – teri (konvert), xum, porsang. Shu bilan birga temir, suyak va sopoldan yasalgan roʻzgʻor buyumlar oʻz oʻrnini topganlar.
      </p>
      <br>
   </div>

</div>





<div class="row">


<div class="content">
   <p>Muzeyning eng nodir eksponatlari orasida markaziy zaldagi, muzey binosidan bir-necha yuz metr gʻarbda 1965-yilda topilgan VII asrga oid saroy qabulxonasi devorlarini bezab turgan devoriy suratlari alohida oʻrinni egallaydi. U VII asrning uchinchi choragida Samarqandda hukmronlik qilgan Varxuman oilasining qarorgohi boʻlgan. Toʻrt devorda toʻrt kompozitsiya syujetlari – Samarqand hukmdori tomonidan elchilarni qabul qilinishi, maqbaraga tantanali safar, ilvirs ovi va boshqalar tasvirlangan.
   </p>
  
</div>
<div class="image">
<img src="images/Desktop/afrosiyob-muzeyi/muzey3.jpg" alt="rasm topilmadi">

</div>


<div class="content">

   <p>Afrosiyob muzeyidagi markaziy zalda taqdim etilgan devoriy tasvirlar oʻz davrining nodir san’at asari hisoblanib, mehmon kutish xonalarini bezar edi. Ular tasodifan Toshkent yoʻlini qurish paytida yerga koʻmilib yotgan devorni ochib tashladi, keyinchalik bu devoriy suratlar maxsus usullar bilan muzeyning markaziy xonasiga koʻchirilib, 1985-yildan boshlab koʻrgazmaga qoʻyilgan. Arxeologik qazishma ishlaridan soʻng, ushbu joy yuqori tabaqali kishining mehmonxonasiga tegishliligi aniqlandi. Aniqrogʻi, bu shoh Varxumanning mehmonlar qabul qilish xonasi boʻlib, u VII asrning uchinchi yarmida hukmronlik qilgan.
   </p>
  
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;"><br><br>

</div>

</div>
<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Afrosiyob muzeyi haqida video lavha</div>

<iframe style="margin-bottom:20px;" width="100%" height="550px" src="https://www.youtube.com/embed/61Mm3HmvMXY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin-bottom:20px;">Afrosiyob muzeyining xaritadagi manzili.</div>
<iframe style="margin-bottom:20px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1107.2390537836843!2d66.99229932566072!3d39.669193103266544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18a1fa7449c3%3A0xb56e2a63f11d12c0!2sSamarqand%20asos%20solingan%20tarix%20muzeyi!5e1!3m2!1suz!2s!4v1684844057398!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


 
   <br>
      <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; ">
   <br>

   <div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Diqqatga sazavor joylar haqida rasmlari</div>
   
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