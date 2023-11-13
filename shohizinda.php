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
   <title>Shohizinda ziyorotgohi haqida ma'lumotlar</title>

   
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
      <h3 >Tarixiy obida nomi: Shohizinda ziyorotgohi</h3>
         <p>Samarqandning qadimgi o‘rni Afrosiyobni tomosha qilgan sayyohlar uning janub tomoniga yursalar, qiyalikda joylashgan, moviy gumbazlari quyosh nurida yarqirab turgan Shohizinda ansanbmliga duch keladilar. Samarqandliklar uchun muqaddas ziyoratgohga aylangan bu ulug‘ yodgorlik uzoq-yaqindan kelgan sayyohlar uchun doimo suyukli ziyoratgohdir.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Shohizinda/shoxizinda3.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
      <p>Shohizinda majmuasi Oʻzbekistonning Samarqand shahrida joylashgan tarixiy nekropol va ziyoratgohdir. Bu Markaziy Osiyodagi eng muhim ziyoratgohlardan biri boʻlib, katta madaniy va meʼmoriy ahamiyatga ega. 
         <br><b>Shohizinda ziyoratgohi haqida ba'zi ma'lumotlar:</b> 
        <b> Joylashuvi: </b>  Shoh-i-Zinda majmuasi Samarqand shahridagi Registon maydonining shimoli-sharqidagi tog‘ yonbag‘rida joylashgan. U YuNESKOning Butunjahon merosi roʻyxatiga “Samarqand – madaniyatlar chorrahasi” nomi bilan kiritilgan.
      </p>

         <p><b>Tarixiy ahamiyati: </b> Shoh-i-Zinda “Tirik podshoh” deb tarjima qilingan. Majmua taxminan 11-asrda tashkil etilgan va asrlar davomida kengaytirilgan va rivojlangan deb ishoniladi. Unda koʻplab maqbaralar, maqbaralar va boshqa muqaddas inshootlar mavjud. <br>
         <b>  Ma’naviy ahamiyati: </b>   Ziyoratgoh muqaddas joy hisoblanib, Muhammad payg‘ambarning amakivachchasi Kusam ibn Abbos dafn etilgan joy ekanligiga ishoniladi. U musulmonlar uchun ziyoratgoh va ziyoratgoh sifatida qaralib, dunyoning turli burchaklaridan tashrif buyuruvchilarni jalb qiladi.
      <p><b>Arxitektura go'zalligi:</b> Shohizinda majmuasi o'zining ajoyib me'morchiligi va dekorativ plitkalari bilan mashhur. Tuzilmalarda murakkab geometrik va gul naqshlari, yorqin ranglar va xattot yozuvlari o‘sha davr hunarmandlarining badiiy mahoratini namoyish etadi.</p>
      </p>
      <p><b>Maqbaralar va maqbaralar: </b>Majmua bir nechta maqbara va qabrlardan iborat bo‘lib, ularning har biri o‘ziga xos dizayni va tarixiy ahamiyatiga ega. Kusam ibn Abbos maqbarasi, Shodi Mulk aka maqbarasi, Moviy gumbaz va Xoja Ahmad Yasaviy masjidi kabi diqqatga sazovor inshootlardandir.</p>
      </p>
      <p><b>Qayta tiklash va saqlash:</b>  Majmuada tarixiy va meʼmoriy merosni saqlab qolish uchun restavratsiya ishlari amalga oshirildi. Davom etilayotgan tabiat muhofazasi bo‘yicha olib borilayotgan ishlar ziyoratchilarning ziyoratgohning go‘zalligi va ahamiyatini kelgusi avlodlar uchun qadrlashini ta’minlaydi.</p>
      <p>Shohizinda majmuasini ziyorat qilish Samarqandning boy tarixi, ma’naviyati va me’moriy mo‘jizalarini  
         o‘rganish imkonini beradi. U Oʻzbekistonning madaniy merosi bilan tanishish va ushbu moʻtabar maskan atrofida davom etayotgan diniy ehtirosning guvohi boʻlish uchun noyob imkoniyatni taqdim etadi.</p>
      </p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Shohizinda/shoxizinda9.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
         <p>“Samarqand marvaridi” degan nomga sazovor bo‘lgan Shohizinda ansambli nafaqat tarixiy-me’morchilik yodgorligi, balki, mashhur allomalar, avliyolar malikalar, lashkarboshilarning abadiy oromgohi hamdir. Bu yerdagi har bir maqbara faqat o‘zigagina xos bezaklar bilan qoplangan bo‘lishiga qaramay ularning barchasi yaxlit bir kompozisiyani, tugal bir me’morchilik asarini tashkil etadi. Shohizindaning yana bir qimmatli tomoni shundaki, bu yerda Samarqandning qariyib uch ming yillik tarixi mujassamdir. Negaki, Shohizinda ansambli joylashgan maydon Afrosiyobning janubiy hududlariga kiradi, agarda bu yer qazib ko‘rilsa eramizdan oldingi VI-I asrga oid arxeologik materiallar topiladi. 
            </p>
         </div>
      
      
         
         <div class="content">
         
         <p> Tarixchilarning aniqlashlaricha, Shohizinda ansamblining shakllanishi eramizning XI asrlaridan boshlangandir. Shohizinda so‘zining ma’nosi “tirik shoh” bo‘lib, qariyib ming yildan buyon bu nom xalq o‘rtasida yashab kelmoqda. Musulmon tarixchilarining yozishlaricha, tirik shoh-Muhammad payg‘ambarimizning amakivachchasi Qusam ibn Abbosga berilgan unvondir. Samarqandlik tarixchi Abul Hakimiyning yozishicha, Qusam ibn Abbos payg‘ambarimizning muborak yuzlarini ko‘rgan oxirgi kishidir. Musulmon tarixchilarining yozishlaricha, Qusam ibn Abbos VIII asrlarda arab lashkarlari tarkibida Samarqandga kelgan va bu yerda dini islomni targ‘ib qilish bilan mashg‘ul bo‘lgan. Bir kuni Qusam ibn Abbos namoz ibodati bilan mashg‘ul bo‘lib turganida kofirlar hujumiga uchragan va uzilgan boshini qo‘liga olib g‘or orqali yerning tagiga tushib ketgan.
            </p>
            <br>
         </div>

   </div>
   



   <div class="row">

   
      <div class="content">
            <p>Samarqand taxtiga Amir Temur o‘tirgach Shohizinda ansamblining hayotida ham katta o‘zgarishlar ruy berdi. Amir Temur bu yerdagi ko‘pgina, xarobaga aylangan inshootlarning o‘rniga yangisini qurdi, ko‘plarini qayta ta’mirladi, Qusam ibn Abbos qabri ustiga hashamatli qabrtosh o‘rnattirdi. Shuningdek, sohibqironning buyrug‘i bilan bu yerda yangi masjid ham barpo qilindi. Bu o‘rinda shuni aytishimiz lozimki, Shohizinda me’morchilik ansambli turli davrlarda har xil hukmdorlar va amaldorlar tomonidan barpo qilingan maqbaralar, masjid va madrasalardan iborat murakkab yodgorlikdir.
               </p>
        
      </div>

      <div class="image">
      <img src="images/Desktop/Shohizinda/shoxizinda5.jpg" alt="rasm topilmadi">
      </div>
      
      
      <div class="content">
     
            <p>Shu sababli bu yerga tashrif buyurgan sayyohlar ham osonlik bilan uni anglashlari, tushunishlari mushkuldir. Biz sayyohlarga oson bo‘lishi uchun, Shohizinda ansamblining darvozasidan boshlab, tartib bilan qurilgan inshootlar va maqbaralar haqda so‘z yuritishga qaror qildik. Siyob dehqon bozorining sharq tomonga yo‘l olgan sayyohlarning ko‘zi Afrosiyob qiyaliklari o‘zra buy cho‘zib turgan moviy gumbazlarga tushadi. Shohizindani ziyorat qilmoqchi bo‘lgan sayyohlar zinapoyalarga oyoq qo‘yib darvoza orqali ichkariga kiradilar. Bu darvozaning peshtog‘ida: “Bu ulug‘vor inshoot Abdulaziz Bahodir ibn Ulug‘bek Kuragon, ibn Shohruh, ibn Amir Temur Kuragon tomonidan 838 (1434-35) yilida bunyod qilingan - degan yozuv saqlangandir.  Tarixchilarning fikrlaricha, bu darvoza va peshtoqni Mirzo Ulug‘bekning o‘zi bunyod qildirgan, ammo, uni o‘z nomiga emas, kichik o‘g‘li Abdulaziz nomiga yozdirgandir. Darvozadan kirgan sayyohlar chap tomonga burilsa XIX asrda qurilgan masjidga, o‘ng tomonga burilsa 1813 yili Davlat qushbegi tomonidan qurilgan kichik madrasaga kiradi. Madrasaning qarama-qarshi tomonida esa 1910 yili usta Sodiq tomonidan qurilgan yozgi masjid joylashgan. Bu inshootlardan o‘tgan sayyohlar g‘ishtlardan terilgan zinopoyalar orqali yuqori tomonga yo‘l oladilar.
               </p>
               

      </div>

   </div>

   



   <div class="row">
   <div class="image">
   <img src="images/Desktop/Shohizinda/shoxizinda6.jpg" alt="rasm topilmadi">
      </div>
   
      <div class="content">
            <p>Ajoyib va nafis bezaklar bilan qoplangan bu xilxona o‘z salobati bilan diqqatingizni tortadi. Shirinbeka og‘a maqbarasining qarama-qarshi tomonida esa barvaqt vafot etgan Shodimulk og‘a va uning onasi qabrlarini o‘z ichiga olgan maqbara joylashgandir. Bu maqbarani samarqandlik me’morlar usta Bahriddin va usto Shamsiddinlar hamda buxorolik usta Zayniddinlar barpo qilganliklari yozib qo‘ yilgandir. Tarixiy manbalardan anglashilicha, Shodimulk og‘a 1371 yili, uning onasi Turkon og‘a 1383 yili qazo qilganlar. Bu maqbaralardan o‘tgan sayyohlar yo‘lakning chap tomonda yonma-yon qad rostalagan ikki no‘malum maqbaraga duch keladilar. Faqat ularning bittasida uni yaratgan ustaning, ya’ni, Ali Nasafiyning nomi saqlangandir. 
               </p>
        
      </div>

      
      
      
      <div class="content">
     
            <p> Shohizinda ansamblining o‘rtasidagi koridordan sekin-asta qadam tashlab borayotgan sayyohlar endi eng baland no‘qtaga yaqinlashadilar. Bu yerda ansamblning eng qadimiy qismi joylashgandir. Amir Temurning eng jasur lashkarboshisi amir Burunduq bu yerda abadiy uyquda yotibdi. Uning maqbarasi taxminan 1380 yillarda barpo qilingandir. Amir Burunduq qabrini ziyorat qilib o‘tgan sayyohlar, endi koridorning o‘ng tomoniga burilib Qusam ibn Abbos maqbarasiga kirib boradilar. Qusam ibn Abbosning qabrtoshi juda hashamatli bo‘lib ustma-ust qo‘yilgan uchala tosh ham nafis mayolika bilan qoplangan va ularga Qur’ondan keltirilgan oyatlar yozilgandir. Shuningdek, bu yerda ziyoratxona, chillaxona va XV asrda qurilgan masjid ham yaxshi saqlangan. Shohizinda ansanblidagi koridorning eng turida bir necha maqbaralar, masjid va chortoq barpo qilingan. Tarixchilarning fikrlaricha, bu yerdagi masjid, chortoq va maqbarani Amir Temurning xotini Tuman og‘a barpo qildirgan va bu pokdomon malikaning o‘zi ham shu yerda abadiy uyquda yotibdi. Tuman og‘a maqbarasining qarshi tomonida, shaxsiyati no‘malum, ammo yoshligida qazo qilgan malikaning qabri saqlangandir. Koridorning eng to‘rida esa ulamo Xoja Ahmadning maqbarasi joylashgan bo‘lib, bu eng oxirgi inshootdir. Albatta, bu yerda Shohizinda ansambli haqida to‘liq ma’lumot berishning imkoni yo‘qdir. Shu narsa ma’lumki, bu ansambl qoraxoniylar davrida qurilishi boshlangan, Amir Temur va temuriylar davrida rivojlangan, mang‘itlar davrida qurilishi yakunlangan.Markaziy Osiyo me’morchiligi tarixida alohida e’tiborga sazovor bo‘lgan Shohizinda haqida yuz marta eshitgandan ko‘ra bir marta ko‘rgan ma’qulroq deb o‘ylaymiz. Qadrli sayyoh, Shohizinda zinapoyalariga ohista qadam qo‘yib bu yerdagi sukunatga quloq tuting. Bu muqaddas tuproqda Buyuk Turonning ne-ne ulug‘lari abadiy o‘yquda yotibdilar.
               </p>
               <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; "><br>
                  <h3>Tarixiy obidaga oid rasmlar va video lavhalar. </h3>
                  <br>

      </div>

   </div>


   
   <br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; ">
   <br>
   <div class="containerzed">

<div class="box-containerzed">

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Shohizinda/shoxizinda14.jpg" alt="rasm topilmadi">
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Shohizinda/shoxizinda11.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Shohizinda/shoxizinda16.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Shohizinda/shoxizinda15.jpg" alt="rasm topilmadi">
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Shohizinda/shoxizinda4.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Shohizinda/shoxizinda3.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Shohizinda/shoxizinda1.jpg" alt="rasm topilmadi">
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Shohizinda/shoxizinda.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Shohizinda/shoxizinda2.jpg" alt="rasm topilmadi">
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

<iframe  width="100%" height="550px" src="https://www.youtube.com/embed/3YiNotxnOls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Shozinda ziyorotgohining xaritadagi manzili.</div>



   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d665.1729654843032!2d66.98745180778805!3d39.66263337985519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18a4c6c66ab5%3A0x607614aaff7009ee!2sShohi-Zinda!5e1!3m2!1suz!2s!4v1684784677141!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
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