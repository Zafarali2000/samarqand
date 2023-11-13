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
   <title>Afrosiyob haqida ma'lumotlar</title>

   
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
         <h3>Tarixiy obida nomi: Afrosiyob qal'asi</h3>
         <p>Afrosiyob — Samarqandning qadimgi xarobasi. Bu nom tarixiy manbalarda qadimgi Samarqandga nisbatan faqat 17-asrdan boshlab uchraydi. Qadimgi Samarqand sugʻd manbalarida Smarakanve deb atalgan. Mil. av. 4-asrda Samarqand Aleksandr Maqsuniy qoʻshinlari tomonidan istilo etilgach, yunon mualliflari kundaliklarida Maroqanda sifatida eslatiladi. Maroqanda Smarakanvening yunoncha tarjimasi. Movarounnahrda somoniylar hokimiyat tepasiga kelgach, qadimgi Smarakanve 9-asrdan boshlab Samarqand deb atala boshlandi.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Afrosiyob/afrosiyob5.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
         <p>Afrosiyob qal'asi, shuningdek, Afrasiyob yoki Afrasyab nomi bilan ham tanilgan, O'zbekistonning Samarqand shahrida joylashgan qadimiy arxeologik yodgorlikdir. Bu katta tarixiy va madaniy ahamiyatga ega, chunki u bir vaqtlar So'g'd imperiyasining poytaxti bo'lgan qadimiy Samarqand shahri bo'lgan. <br><b>Afrosiyob qal'asi haqida ba'zi muhim fikrlar:</b>
        <b> Tarixi:</b> Afrosiyob eramizdan avvalgi VI asrga to‘g‘ri keladi, u muhim So‘g‘d shahri sifatida tashkil topgan. U Buyuk Ipak yoʻli boʻylab yirik madaniy va savdo markazi sifatida gullab-yashnagan. Biroq shahar miloddan avvalgi 329-yilda Makedonskiy Aleksandr qoʻshinlari tomonidan vayron qilingan. Keyinchalik u qayta qurildi va 13-asrda tashlab ketilgunga qadar va vayronalarga aylanmaguncha rivojlanishda davom etdi.
      </p>

         <p><b>Arxeologik qazishmalar:</b> 19-asrdan beri keng qamrovli arxeologik qazishmalar olib borilgan. Bu qazishmalar natijasida ko‘plab ashyolar, jumladan, kulolchilik, tangalar, zargarlik buyumlari va freskalar topilib, qadimgi So‘g‘d sivilizatsiyasi haqida qimmatli ma’lumotlar berilgan. <br>
         <b>Tartibi va tuzilmalari:</b> Qadimgi shahar 1,5 kvadrat kilometr atrofida bo'lgan keng maydonni egallagan. U mudofaa devorlari bilan oʻralgan boʻlib, bir qancha monumental inshootlar, jumladan, saroylar, maʼmuriy binolar, ibodatxonalar va turar joylarga ega edi. Bu joy oʻz nomini olgan Afrasiyob saroyining qoldiqlari qisman rekonstruksiya qilingan. </p>
         <p><b>  Devor rasmlari: </b> Afrosiyobdagi eng diqqatga sazovor kashfiyotlardan biri qadimiy binolar xarobalaridan topilgan devor rasmlari seriyasidir. Bu jonli freskalarda kundalik hayot manzaralari, shuningdek, mifologik va diniy motivlar tasvirlangan. Omon qolgan ba'zi freskalarni yaqin atrofda joylashgan Afrosiyob muzeyida ko'rish mumkin. <br>
         <b>  Afrosiyob muzeyi: </b> Arxeologik maydonga tutash joylashgan Afrosiyob muzeyida mintaqaning boy tarixini aks ettiruvchi eksponatlar va eksponatlar to'plami mavjud. Muzey So‘g‘d madaniyatini chuqurroq tushunish imkonini beradi va Afrosiyobdagi qazishmalardan olingan arxeologik topilmalarni namoyish etadi.</p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Afrosiyob/afrosiyob.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
            <p>Afrosiyob va uning topilmalariga qiziqish 1868 yilda Chor Rossiyasi tomonidan Samarqand bosib olingandan keyin boshlandi. Afrosiyobda dastlabki qazish ishlari bilan mayor Borzenkov (1874), podpolkovnik V. V. Krestovskiy (1883), sharqshunos olimlar N. I. Veselovskiy (1884-85, 1895), V. V. Bartold (1904) va V. L. Vyatkin (1905; 1912— 13)lar shugʻullanishdi. 1919 yilda M. YE. Masson, V. L. Vyatkin tadqiqot boshlagan joylarda qazish ishlarini davom ettirib, somoniylar saroyi (9-asr) xarobalarini ochdi. 1925, 1929—30 ylarda V. L. Vyatkin Afrosiyobda qazish ishlarini davom ettiradi va uning turli davrdagi tarixiga oid koʻplab materiallar toʻplaydi.
            </p>
            
         </div>
      
      
         
         <div class="content">
         
            <p> Ammo 1930 yillarga qadar Afrosiyobda olib borilgan arxeologik qazishmalar qadimgi Samarqand tarixiga doir juda kam materiallar bergan. Urushdan keyin Oʻzbekiston FAning Tarix va arxeologiya instituti olimlaridan Afrosiyob I. Terenojkin tomonidan Afrosiyobda jiddiy dala tadqiqotlari oʻtkazildi. Natijada uning eng pastki qatlamidan miloddan avvalgi 6—5-asrlarga taalluqli buyumlar, uy-joy xarobalari topildi. V. Afrosiyob Shishkin (1958-66) va Ya. F. Gʻulomov (1967—70)lar rahbarligida olib borilgan keng koʻlamli arxeologik qazishlar natijasida qadimgi madaniy qatlam materiallari Afrosiyobning boshqa joylaridan ham topildi. 1966 yil 13 iyulda Afrosiyobni arxeologik jihatdan kompleks oʻrganishni tashkil etish maqsadida Respublika hukumatining maxsus qarori qabul qilindi. Unga koʻra, Afrosiyob „arxeologik qoʻriqxona“ deb eʼlon qilinib, uni oʻrganish ishiga Toshkent va Samarqand davlat universitetlari hamda Madaniyat vazirligining Sanʼatshunoslik instituti ham safarbar etildi. Aniq ilmiy rejalar asosida boshlangan arxeologik tadqiqotlar tufayli nafaqat shaharning koʻp asrlik yoshi, balki uning har xil davrlardagi tarixiy topografiyasi, shahar tarkibi, shahar hayotining rivojlanish bosqichlari, bosqinlar tufayli yuz bergan bo'hronlar davri aniqlandi. 
            </p>
            <br>

         </div>

   </div>
   




   <div class="row">

   
      <div class="content">
         <p>Afrosiyobda topilgan arxeologik materiallar Samarqand miloddan avvalgi 8—5-alarda Sugʻdiyonaning markaziy shahri sifatida vujudga kelganligini koʻrsatadi. Mil. av. 329 yilda shahar Aleksandr Maqduniy qoʻshinlari tomonidan vayron etilgan, uning izlari hozirgacha shahar mudofaa inshootlarida yaxshi saqlangan. Mil. av. 3 — 1-asrlarda, Kushonlar saltanati davrida shahar hayotida yuksalishlar yuz bergan. Mil. av. 3-asrda shahar qoʻshaloq mudofaa devori bilan oʻrab olingan.  Arxeologik materiallar va yozma manbalarda taʼkidlanishicha, bu zamonda Samarqand orqali Buyuk ipak Yoʻli oʻtgan, ichki va tashqi savdo, hunarmandchilik rivoj topgan.
         </p>
        
      </div>
      <div class="image">
      <img src="images/Desktop/Afrosiyob/afrosiyob1.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
     
         <p>9-asrning ikkinchi choragidan Movarounnahrda hokimiyat somoniylar qoʻliga oʻtdi. Buxoro ularning markaziga aylandi. Shu davrda Samarqand iqtisodiy va madaniy jihatdan tez rivojlandi. Afrosiyobda somoniylar davrida oʻymakor ganch naqshlar bilan bezatilgan saroylar, badavlat dehqon xonadonlari, masjid va madrasalar, hammom va kanalizasiyalar, tosh koʻchalar topilmoqda. Shaharni suv bilan taʼminlash ogʻirligidan aholining ehtiyojini qondirish uchun shahar hayotining dastlabki yillaridayoq Dargʻom tomonidan kanal qazib, suv keltirilgan. Ana shu kanal izlari hozirgi shahar xiyobonining jan.da, Alisher Navoiy haykali qad koʻtarib turgan maskanda ochib oʻrganildi. Bu kanal Registon maydoni orqali Hazrati Xizr masjidi tomon yoʻl olgan. Tarixiy manbalarga koʻra Afrosiyobga jan.dan kiraverishda shahar xandaqi ustiga pishiq gʻishtlardan ravoqli suvay-irgʻich qurilib, uning tepasidan katta ariq oʻtkazilgan. Bu ariqni „Juyi arziz“ („Qo`rg`oshin ariq“) deb ataganlar. Ariq shu erda uchga boʻlingan va shahar oralab Siyob arigʻi boʻyiga borgan. 
         </p>
         <p>10-asrning oxirida Movarounnahrda hokimiyat qoraxoniylar qoʻliga oʻtganida xam Samarqanda savdo, hunarmandchilik, shahar obodonchilik ishlari davom etadi. Shaharning hunarmandchilik qiyofasi kuchayib, zodagon dehqon qasrlari endi shahar tashqarisida, ularning dala hovlilarida markazlashadi. 1220 yilda Chingizxon qoʻshinlari „Juyi arziz“ toʻgʻonini buzib, shaharni suvsiz qoldirdi. Shahar mudofaachilari tengsiz jangda taslim boʻldilar. Bosqinchilar shaharning devor va darvozalarini vayron qilib saroy, masjid va madrasalarga, aholi xonadonlariga oʻt qoʻydilar. Aholining katta qismi jangda qirildi, hunarmandlar Moʻgʻulistonga haydab ketildi. Shaharni soʻnggi mudofaachilari Jome masjidiga yashirinib, qarshilikni davom ettirdilar. Ularning olovda yongan tanalari jang kiyimida bizgacha yetib kelib, arxeologik qazish vaqtida topildi. „Qoʻrgʻoshin ariq“ qayta tiklanmadi. Afrosiyobda suvsiz qolgan aholi Siyobdan charxpalakda suv chiqarib, kun ko'rgan, soʻng aholi bora-bora Ani butunlay tashlab ketgan. Kimsasiz xarobaga aylangan qadimgi Samarqand avvallari „Hisori koʻhna“, „Qal`ai Hisor“ atalib, 17-asrdan boshlab aholi orasida „Qal`ai Afrosiyob“ yoki „Afrosiyob“ deb atala boshlangan.
         </p>
      </div>

   </div>







   <div class="row">

         <div class="image">
         <img src="images/Desktop/Afrosiyob/afrosiyob3.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
            <p>Afrosiyobda qazishma ishlari ayniqsa Samarqandda Oʻzbekiston Fanlar Akademiyasi Arxeologiya instituti tashkil topgach, keng koʻlamda kuchaydi. Ya. Gʻ. Gʻulomovdan soʻng Afrosiyobdagi arxeologik qazishmalarga G. V. Shishkina, Sh. Toshxoʻjaevlar rahbarlik qildi. Keyingi yillarda (1989 yildan) Afrosiyobni arxeologik jihatdan tadqiq etish ishiga fransuz arxeologlari — Pol Bernar, Frans Grene va b. jalb etilgan.
            </p>
            
         </div>
      
      
         
         <div class="content">
         
            <p> Fransuz arxeologik missiyasi Oʻzbekiston arxeologlari bilan (M. Isomiddinov va b.) hamkorlikda Afrosiyobni oʻrganishda qatnashmoqsa. Oʻzbek va fransuz olimlarining hamkorlikda olib borgan tadqiqot natijalari qadimgi Samarqand tarixiga oid qator masalalarga aniqlik kiritdi, yaʼni miloddan avvalgi 6—5-asrlarga taalluqli shahar mudofaa devorlari ostidan guvalaqdan qurilgan yanada qadimgi devor qoldiqlari ochilib, Samarqandning yoshi miloddan avvalgi 8-asr oʻrtalariga oid ekanligi isbotlaydi,shaharning arki aʼlo qismidan milodiy 8-asrga oid murabba (70x70) shaklidagi Samarqand  mahobatli saroyi qoldiqlari ochildi. Afrosiyobda arxeologik tadqiqot ishlari davom etmoqda.
            </p>
            <p> Afrosiyob qal’asi — Oʻzbekistondagi madaniy meros obyekti. Arxeologiya yodgorligi. Obyekt davri: Mil.avv. VII—XIII asrlar. Samarqand viloyatining Samarqand shaharda joylashgan. Obyekt manzili: Samarqand shahar atrofida “Imom Vose” MFY “Kircha” MFY, Shohi-Zinda koʻchasilari, hamda Siyob va obi-Mashxad ariqlari oralarida (Toshkent koʻchasi). Koʻchmas mulkka boʻlgan huquq: Davlat mulki. “Samarqand” davlat muzey-qoʻriqxonasi operativ boshqaruv huquqi asosida. Oʻzbekiston Respublikasi Vazirlar Mahkamasining qarori bilan 2019-yil 4-oktabrda Moddiy madaniy merosning koʻchmas mulk obyektlari milliy roʻyxatiga kiritilgan va davlat muhofazasiga olingan.
            </p>
            <br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;">
   <br>
            <h3>Tarixiy obidaga oid rasmlar va video lavhalar. </h3>
         </div>

   </div>
   




   <br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;">
   <br>
   <div class="containerzed">

<div class="box-containerzed">

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Afrosiyob/afrosiyob13.webp" alt="">
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Afrosiyob/afrosiyob8.jpg" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Afrosiyob/afrosiyob9.jpg" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Afrosiyob/afrosiyob10.jpg" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Afrosiyob/afrosiyob11.webp" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Afrosiyob/afrosiyob12.webp" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Afrosiyob/afrosiyob6.jpg" alt="">
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Afrosiyob/afrosiyob14.webp" alt="">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Afrosiyob/afrosiyob15.webp" alt="">
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

<iframe width="100%" height="550px" src="https://www.youtube.com/embed/fTf-T6pVCwc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   <div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Afrosiyob qal'asining xaritadagi manzili.</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2606.596927117998!2d66.98798236811813!3d39.66870987036114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d191e2249aef1%3A0xe473036600ac435f!2sAfrasiyob%20shaxri%20qoldiqlari!5e1!3m2!1suz!2s!4v1684573817859!5m2!1suz!2s"width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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