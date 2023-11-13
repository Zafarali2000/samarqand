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
   <title>Go'ri Amir maqbarasi haqida ma'lumotlar</title>

   
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
         <h3 >Tarixiy obida nomi: Go'ri Amir maqbarasi</h3>
         <p>Amir Temur maqbarasi, Go‘ri Amir (14-asr oxiri — 1405 y.) — Samarqanddagi me’moriy yodgorlik. Xalq orasida Go‘ri Amir yoki Go‘ri Mir (Mir Sayyid Baraka) deb nomlanib kelinadi. Maqbaraga temuriylar sulolasiga mansub kishilar (Amir Temur, uning piri Mir Sayyid Baraka, o‘g‘illari Umar-shayx, Mironshoh va Shohrux, nabiralari Muhammad Sulton, Ulugʻbek va b.) dafn etilgan. Boburning ta’kidlashicha, dastlab Temurning nabirasi Muhammad Sulton Mirzo Samarqand qal’asi janubida Toshqo‘rg‘on — chaqarda Madrasa qurdirgan.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/A-Temur/7A-Temur.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
         <p>Amir Temur maqbarasi, Guri Amir nomi bilan ham tanilgan, Samarqand shahrida joylashgan muhim tarixiy joy. Bu Oʻrta Osiyoning mashhur bosqinchisi va davlat arbobi Amir Temurning soʻnggi dam olish maskani boʻlib, u Temurlan nomi bilan mashhur.Maqbara 15-asr boshlarida qurilgan boʻlib, Temuriylar sulolasining meʼmoriy durdonasi hisoblanadi. U fors, mo'g'ul va islom uslublari elementlarini uyg'unlashtirgan temuriylar me'morchiligining yorqin namunasi bo'lib xizmat qiladi.
         <br><b >Amir Temur maqbarasi haqidagi asosiy xususiyatlar va faktlar:</b><br>
        <b> Arxitektura: </b>Maqbara jozibali gumbazlar va murakkab koshinlar bilan bezatilgan mahobatli tashqi ko'rinishini namoyish etadi. Inshoot asosan g‘ishtdan qurilgan bo‘lib, uning fasadida Qur’ondan kalligrafik yozuvlar mavjud.
      </p>

         <p><b>Ichki makon:  </b>Maqbaraning ichki qismi ham xuddi shunday ta’sirchan. Asosiy palatada Amir Temurning kanotafi joylashgan bo'lib, o'yilgan marmar qabr tosh bilan qoplangan baland platforma. Makon dekorativ plitkalar, geometrik naqshlar va bezak naqshlari bilan bezatilgan. <br>
         <b>Atrofdagi inshootlar: </b>  Majmuada bosh maqbaradan tashqari, Temuriylar sulolasi vakillari, jumladan Temurning oʻgʻillari va nabiralariga bagʻishlangan kichikroq qabr va masjidlar ham bor.</p>
         <p><b>   Qayta tiklash: </b> Asrlar davomida maqbarada bir nechta ta'mirlash va restavratsiya loyihalari amalga oshirildi. Shunisi e'tiborga loyiqki, XX asrda sovet arxeologlari va arxitektorlari boshchiligida saytning tarixiy yaxlitligini saqlab qolish uchun muhim restavratsiya amalga oshirildi.<br>
         <b> YUNESKO: </b>Ahamiyati va YuNESKOning Jahon merosi: Amir Temur maqbarasi mintaqa uchun katta madaniy va tarixiy ahamiyatga ega. 2001 yilda u YUNESKOning Butunjahon merosi roʻyxatiga kiritilgan boʻlib, uning beqiyos umumbashariy qadriyati va islom arxitekturasi va sanʼatiga qoʻshgan hissasi eʼtirof etilgan. Amir Temur maqbarasini ziyorat qilish tashrif buyuruvchilarga Markaziy Osiyoning boy tarixi bilan tanishish va temuriylar me’morchiligining ulug‘vorligini qadrlash imkoniyatini beradi. Bu mintaqa tarixini shakllantirishda katta rol o‘ynagan Amir Temur merosidan dalolat beradi.</p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/A-Temur/9A-Temur.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
            <p>Bizgacha, asosan, peshtoqli darvozasi bor hovli va maqbara binosi saqlangan. Arxeologik tadqiqotlar natijasida maqbara hovlisining ikki yonidan Muhammad Sulton qurdirgan Madrasa va xonaqoh qoddiqlari topilgan. Madrasa va xonaqoh chorsi hovlining sharqiy va g‘arbiy tomonlarini egalla-gan. Hovlining jan.da gumbazli maqbara joylashgan. Maqbaraga jan. dan, Ulug‘bek qurdirgan dalon (1424) orqali kiriladi. Maqbaraning chortoq tarhli ziyorat-xonasi baland toqi — ravoqli, tepa-si yozuv hoshiyalari va ichki gumbaz bilan qoplangan. Tashki gumbazi 64 qobirg‘ali, baland poygumbaz (diametri — 15 m, bal. 12,5 m)ga o‘rnatilgan.
            </p>
            
         </div>
      
      
         
         <div class="content">
         
            <p> Ziyoratxona o‘rtasidagi marmar panjara bilan o‘ralgan murabba xazira sahniga qator qabrtoshlar qo‘yilgan. Yuqorisi (to‘ri)da Amir Temurning harbiy yurish-larida unga hamroh bo‘lgan va uning yuk-sak hurmatini qozongan Mir Sayyid Baraka sag‘anasi joylashgan. Sayyid Baraka qabrining oyoq tomoniga Amir Temurning o‘zi dafn qilingan. Uning uch tomonida Muhammad Sulton, Mironshoh, Umarshayx qabrlari bor. Keyinchalik bu yerga Temurning nabiralari va evara-larining qabr toshlari qat’iy tartib-da joylashtirilgan. Temur sag‘anasiga qo‘yilgan ko‘k nefrit qabrtoshini Ulug‘bek Mo‘g‘ulistonga qilgan yurishi vaqtida olib kelgan. Toshdagi lavhada Temurni ulug‘laydigan so‘zlar, uning shajarasi hamda marsiyalar o‘ymakori yozuvlarda bitilgan. Hamma sag‘analar Ulug‘bek tomonidan yaxlit o‘yma mar-mar panjara bilan o‘ralgan. Ziyoratxona-ning sharqiy qismidagi ravoqdan zina orqali ostki qavatidagi go‘rxonaga tu-shiladi. Go‘rxona sakkiz qirrali. Undagi sag‘analar yuqrri qavatda qanday joylash-gan bo‘lsa, bu yerda ham shu tartibda joy-lashgan. Ziyoratxonadagi qabrtoshlarning 431har biri yuksak san’at asaridir.
            </p>
            <br>
         </div>

   </div>
   




   <div class="row">

   
      <div class="content">
         <p> Ziyorat-xona serhasham bezaklarga boy. Bo‘rtma bezak kundallar zaminiga lojuvard rang gullar ishlangan. Izorasi yashil toshdan girih shaklida terilgan. To‘rtta chuqur ravoqlardagi darchalarga o‘sha vaqtda rangli oyna o‘rnatilgan. Oltin va kumush qandillardagi shamlar yonganda ziyoratgoh ichkarisi ulug‘vor va afsonaviy tus ol-gan. Tashqarisi sirkor g‘ishtchalar bilan bezatilgan. Gumbaz va uning poyidagi bezaklar, turli arabiy yozuvlar alohida ko‘zga tashlanadi. Maqbara darchalarida yog‘ochdan ishlangan nafis panjaralar, eshiklarida esa murakkab qo‘sh zaminli o‘ymakor bezaklar bo‘lgan. Maqbaraning g‘arbiy tomoniga baland peshtoq yon-dashgan. Taxminlarga ko‘ra bu peshtoq qoldiklari 17-a.ga mansub.
         </p>
        
      </div>
      <div class="image">
      <img src="images/Desktop/A-Temur/10A-Temur.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
     
         <p>Maqbaraning mutanosiblik nisba-ti, naqshlari, turli bezaklari katta mahorat bilan bajarilgan. Tashqi peshtoq darvozasining tepasida me’mor — usta "Muhammad binni Mahmud al-banno Is-faxoniy" nomi saqlangan. Keyinchalik maqbara bir necha bor ta’mirlandi, gum-bazi qayta tiklanib, xonaqoh va Madra-sa qoldiqlari kavlab topildi, ichki va tashqi bezaklar ta’mir etildi. 1941 y.da musulmon odatiga zid ravishda Amir Te-mur va Ulug‘bek qabrlari ochib tekshiri-lib, ular ruhlari bezovta etildi.
         </p>
         <p>
         </p>

      </div>

   </div>

   



   <div class="row">

         <div class="image">
         <img src="images/Desktop/A-Temur/qabr-A-Temur.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
          <p>Markaziy Osiyo meʼmorchiligining noyob asari sifatida eʼtirof etilgan Amir Temur maqbarasining qurilishi 1403-yilda boshlanib, 1424-yilda tugatilgan. Maqbara Amir Temurningtaxt vorisi, deb eʼlon qilingan nabirasi Muhammad Sulton uchun qurdirilgan. Muhammad Sulton 1403-yilda Kichik Osiyoga qilgan safari vaqtida, 29 yoshida bevaqt vafot etadi. Shahzoda Samarqandga keltirilib, dastlab masjidning xonaqosida dafn qilinadi.
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
      <img src="images/Desktop/A-Temur/1A-Temur.jpg" alt="rasm topilmadi">
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/A-Temur/8A-Temur.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/A-Temur/11A-Temur.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/A-Temur/10A-Temur.jpg" alt="rasm topilmadi">
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/A-Temur/17A-Temur.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/A-Temur/10A-Temur.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/A-Temur/4A-Temur.jpg" alt="rasm topilmadi">
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/A-Temur/16A-Temur.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/A-Temur/10A-Temur.jpg" alt="rasm topilmadi">
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
<iframe width="100%" height="550" src="https://www.youtube.com/embed/KL9i046KjMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Amir Temur maqbarasining xaritadagi manzili.</div>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1327.5984065424213!2d66.96827716402689!3d39.64868802005747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18cc761ff98f%3A0x8a218422bc21edfa!2sGo&#39;r%20Amir%20Maqbarasi!5e1!3m2!1suz!2s!4v1684584015404!5m2!1suz!2s"  width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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