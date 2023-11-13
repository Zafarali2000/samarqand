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
   <title>Mirzo Ulug'bek rasadxonasi haqida ma'lumotlar</title>

   
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
         <h3 >Tarixiy obida nomi: Mirzo Ulug'bek rasadxonasi</h3>
         <p>XV asrning buyuk olimi, Amir Temurning nabirasi Ulug‘bek (1394-1449) ko‘p asrlar davomida ko‘plab asarlari va tadqiqotlari jahon ilm-fani rivojiga sezilarli ta’sir ko‘rsatishini taxmin qilish mumkinmidi? Ulug‘bek astronomiya maktabining erishgan yutuqlari G‘arb va Sharq, Hindiston va Xitoyning aniq fanlari rivojiga katta ta’sir ko‘rsatdi.1428-1429-yillarda Samarqandda Ulug‘bek dunyodagi eng ulkan o‘rta asr rasadxonalaridan birini qurdirdi. Rasadxona sxemasiga ko‘ra, chuqurligi g'orga o'xshash dumaloq uch qavatli bino bo'lib, diametri 46,4 m va balandligi kamida 30 m bo'lgan marmar kvadrantni o'z ichiga oladi. Ulug‘bek rasadxonasida yirik astronomlar, Ulug‘bek, Ali-Qushchi va Qozizoda ar-Rumiyning shogirdlari ishlagan.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Rasadxona/rasadxonasi8.webp" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
         <p>Mirzo Ulugʻbek rasadxonasi, shuningdek, Ulugʻbek rasadxonasi nomi bilan ham tanilgan, Oʻzbekistonning Samarqand shahrida joylashgan muhim tarixiy obidadir. U 15-asrda Oʻrta Osiyo bosqinchisi Temur (Tamerlan)ning nabirasi boʻlgan astronom va hukmdor Mirzo Ulugʻbek tomonidan qurilgan.
         <br><b >Quyida Mirzo Ulugʻbek rasadxonasi haqida baʼzi muhim maʼlumotlar:</b> 
        <b> Joylashuvi:  </b>Observatoriya oʻzining meʼmoriy va madaniy merosi bilan mashhur boʻlgan Samarqandning tarixiy markazidan 3 kilometr shimoli-sharqda, Kuhak deb nomlanuvchi tepalikda joylashgan.
      </p>

         <p><b>Qurilish:</b> Rasadxona 1424-1429 yillarda qurilgan va o'z davrining eng ilg'or rasadxonalaridan biri bo'lgan. U astronomik kuzatishlar uchun ishlatiladigan sextant deb nomlangan yirik silindrsimon asbobdan iborat edi. <br>
         <b>  Maqsad: </b> Mirzo Ulug‘bekning rasadxonani qurishdagi asosiy maqsadi aniq astronomik jadvallar tuzish edi. U va uning jamoasi samoviy jismlarni keng qamrovli kuzatishlar olib bordi, natijada mingdan ortiq yulduzlarning joylashuvini o‘z ichiga olgan keng qamrovli astronomik katalog – “Zij-i-Sultoniy” tuzildi.</p>
         <p><b>   Arxitektura:  </b> Rasadxonaning sekstanti uzunligi taxminan 30 metr (98 fut) bo'lgan ta'sirchan inshoot edi. Unda radiusi 40,4 metr (133 fut) bo'lgan nozik ishlangan marmar yoy bor edi, bu samoviy jismlarni aniq o'lchash imkonini berdi.<br>
         <b>Tanaffuz va qayta kashfiyot:</b>  1449 yilda Mirzo Ulug‘bek vafotidan so‘ng rasadxona qarovsiz qoldi. Tuzilish 17-asrda katta darajada vayron boʻlgan va faqat 20-asrning boshlarida olib borilgan keng koʻlamli arxeologik qazishmalar natijasida uning qoldiqlari aniqlangan. <br>Bugungi kunda Mirzo Ulug‘bek rasadxonasi YuNESKOning Butunjahon merosi ro‘yxatiga kiritilgan bo‘lib, astronomiya tarixi va temuriylar davri me’morchiligi yutuqlariga qiziquvchilarni o‘ziga jalb etmoqda. Saytda asarlar, eksponatlar va Mirzo Ulug‘bekning astronomiyaga qo‘shgan hissasi haqidagi ma’lumotlar saqlanadigan muzey mavjud.</p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Rasadxona/rasadxonasi4.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
            <p>Ulug‘bekning ushbu rasadxonada olib borilgan ko‘plab astronomik tadqiqotlari orasida 1018 ta yulduz tavsifidan iborat “Ziji Ko‘ragoniy – Yulduzlar jadvali” nomli bebaho asari katta qiziqish uyg‘otadi. Yulduzli yilning uzunligini Ulug‘bek tomonidan 365 kun, 6 soat, 10 daqiqa, 8 soniya deb aniqlangan. Ajablanarlisi shundaki, samarqandlik astronomlarning kuzatuvlari optik asboblarsiz, faqat oddiy ko‘z bilan olib borilgan. Olimlarning tadqiqotlariga ko‘ra, rasadxonada boshqa asboblar ham bo‘lgan, ular afsuski saqlanib qolmagan.
            </p>
            
         </div>
      
      
         
         <div class="content">
         
            <p> Astronomiya tarixidagi birinchi yulduzlar jadvali miloddan avvalgi II asrda yashagan qadimgi buyuk astronom Gipparx tomonidan tuzilgan. Ushbu olimning jadvalida mingga yaqin yulduzlarning koordinatalari mavjud; u mashhur qadimgi yunon olimi Ptolemeyning “Almagest” asarida (bu risolaning to‘liq nomi “13 ta kitobda astronomiyaning buyuk matematik qurilishi”) taxminan eramizning 140-yillarga to‘g‘ri keladi. Gipparx yulduzlar jadvali Gipparx-Ptolemey katalogi deb ham ataladi.Ulug‘bek rasadxonasida olib borilgan tadqiqotlar – bu Gipparx-Ptolemey katalogi yaratilganidan keyin 16 asr o‘tganidan keyin yulduzlarni to‘liq qayta kuzatishning birinchisi hisoblanadi. Ulug‘bek jadvalida Ptolemey yulduzlari bilan deyarli bir xil yulduzlar mavjud, ammo uning koordinatalari yuqori aniqlik bilan berilgan. Darhaqiqat, Ulug‘bek yulduzlarning asosiy (o‘z kuzatishlari asosida) jadvalini tuzgan ikkinchi (Gipparxdan keyin) astronom bo‘ldi.
            </p>
            <br>
         </div>

   </div>
   




   <div class="row">

   
      <div class="content">
         <p> Yulduzlar jadvalini yaratish uchun katta kuch va ko‘p yillik mashaqqatli mehnat kerak. Yulduzlar jadvali fan uchun juda qimmatlidir. Ular turli davrlarda osmonda yorug‘lik nurlarining tarqalishi haqida tushuncha beradi. Ular samoviy jismlarning harakatlarini o‘rganish uchun materialdir.Ulug‘bekning yulduzlar jadvali Yevropa astronomlariga 1648-yilda nashr etilganidan keyin ma’lum bo‘ldi – bu yilda Ulug‘bekning Samarqand rasadxonasida yaratilgan asosiy asar birinchi marta qisman chop etilgan. Asar nashrga tayyorlangan va Oksford universiteti astronomiya professori Jon Grivs (1602-1652) tomonidan sharhlangan. Keyinchalik, jadvalning qismlari Angliyada bir necha marta nashr etilgan.
         </p>
        
      </div>
      <div class="image">
      <img src="images/Desktop/Rasadxona/rasadxonasi3.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
     
         <p>Birinchi oksford nashridan 17 yil o‘tgach, Oksforddagi Bodlian kutubxonasining bilimdon qo‘riqchisi, ingliz sharqshunosi va tarjimoni Tomas Xayd (1636-1703) «Tabulae Long, ас Lat. Stellarum Fixarum, ex observatione Ulugh Beighi», Oxonii, 1665, deb nomlangan Samarqand katalogining fors va lotin tillarida yangi nashrini tayyorladi va chop etdi. Buyuk Britaniya kutubxonalarida saqlanayotgan 8 ta qoʻlyozmani oʻrganishga asoslangan Ulugʻbek yulduzlar katalogining eng batafsil tahlili 1917-yilda AQShda E. B. Knobl tomonidan “Ulugh Beg’s Catalogue of Stars. Revised from all Persian Manuscripts Existing in Great Britain” nomi bilan nashr etilgan.Samarqand rasadxonasining asosiy asbobi marmar devor kvadranti bo‘lib, uning yoy radiusi 40,2 m, yoy uzunligi 63 m ni tashkil etadi.Ushbu ulkan burchakli asbobning aksariyati yer ostida, rasadxona tagida - 10 metrdan ortiq chuqurlikda joylashgan. Kvadrantning ikkinchi yarmi yerdan 28 metr balandlikda ko‘tarilgan va bugungi kungacha saqlanib qolmagan to‘rtburchak minorada joylashgan.
         </p>
         <p>
         </p>

      </div>

   </div>

   



   <div class="row">

         <div class="image">
         <img src="images/Desktop/Rasadxona/rasadxonasi1.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
          <p>Janubdan shimolga yo‘nalishda, ya’ni meridian tekisligida joylashgan ushbu kvadrant Quyosh, Oy va sayyoralarning osmon meridianidan o‘tish vaqtidagi ufqdan balandliklarini aniqlash hamda yulduzlar orasidagi burchak masofasini o‘lchash va yorqin yulduzlarni kuzatish uchun ishlatilgan.Shkalaning katta oʻlchami juda yuqori aniqlik bilan kuzatishlarni amalga oshirish imkonini berdi, xususan Quyosh koordinatalarini faqat 1 burchak soniyasida xatolik bilan aniqlash mumkin edi. Yoyning daqiqalari va soniyalari yordamchi shkalada hisoblangan. Shkaladagi marmar to‘siqlar bo‘ylab tepalikning chuqurligiga olib boradigan g‘ishtli zinapoyalar qurilgan.
            </p>  
            
         </div>
      
      
         
         <div class="content">
         
            <p>Vaqt ilm-fanning noyob yodgorligiga nisbatan shafqatsiz edi. Ulug‘bek rasadxonasi asta-sekin vayron bo‘lib, XVII asr oxirida g‘ishtlarga ajratilgan.1908 va 1914-yillarda rus va samarqandlik olim V.L. Vyatkin rahbarligida Samarqand viloyatida olib borilgan qazishmalarda rasadxona joylashgan joy va asosiy asbobning bir qismi aniqlangan. Ammo bu qazishmalar kutilgan natijalarni bermadi. Topilma ulkan uch qavatli binoning tashqi devori qoldiqlari bo‘lib chiqdi.Rasadxonaning tadqiqotlari 1941-yilda akademik M.E. Masson, 1948-yilda V.A. Shishkin tomonidan muvaffaqiyatli davom ettirildi.</p>
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
      <img src="images/Desktop/Rasadxona/rasadxonasi7.jpg" alt="rasm topilmadi">
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Rasadxona/rasadxonasi5.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Mirzo-U/mirzo-u7.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Rasadxona/rasadxonasi6.jpg" alt="rasm topilmadi">
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Rasadxona/rasadxonasi3.webp" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Mirzo-U/mirzo-u1.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Mirzo-U/mirzo-u2.jpg" alt="rasm topilmadi">
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Mirzo-U/mirzo-u4.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Mirzo-U/mirzo-u6.jpg" alt="rasm topilmadi">
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
<iframe width="100%" height="550px" src="https://www.youtube.com/embed/h2j6Yl_apC8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Mirzo Ulug'bek rasadxonasining xaritadagi manzili.</div>

         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d547.215039845991!2d67.00493403192124!3d39.67495460868197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d2273770f4189%3A0x6cfc09ae9d0b2352!2sUlughbek&#39;s%20Observatory!5e1!3m2!1suz!2s!4v1684777550906!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            
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