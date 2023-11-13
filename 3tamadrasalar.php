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
   <title>3 ta madrasa haqida ma'lumotlar</title>

   
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
         <h3 >Tarixiy obida nomi: Tillakori madrasasi</h3>
         <p>Tillakori madrasasi - Samarqanddagi meʼmoriy yodgorlik. Registon ansamblitsa Ulugʻbek davrida bunyod etilgan Mirzoyi karvonsaroyi (15-a.) oʻrnida Samarqand hokimi Yalangtoʻshbiy Bahodir Madrasa va jome masjid qurdirgan (1641—46). Karvonsaroy asosi ustiga Madrasa (shim. sharqiy qismida), hujralar oʻrnida peshtoq gumbazli masjid (gʻarbida) joylashgan.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Tillakori-madrasasi/tillakori4.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
         <p>Tillakori madrasasi Samarqand shahrida joylashgan muhim tarixiy inshootlardan biridir.
         <b > Tillakori madrasasi haqida ma’lumotlar:</b> 
        <b> Arxitektura: </b> Tillakori madrasasi 17-asrda temuriylar hukmdori va astronom Ulugʻbek davrida qurilgan. U Registon maydoni deb ataladigan kattaroq majmuaning bir qismi boʻlib, uchta madrasadan iborat. Tillakori madrasasining meʼmoriy uslubi anʼanaviy temuriylar dizayniga toʻgʻri keladi, u murakkab koshinlar, naqshinkor naqshlar va koʻk gumbazlar bilan ajralib turadi.
      </p>

         <p><b>Xususiyatlari: </b> Madrasaning asosiy jabhasi Registon maydoniga qaragan boʻlib, unda bezakli koshinlar va xattotlik bilan bezatilgan ulkan kirish portali mavjud. Tashqi devorlari rangli sirlangan plitkalar va geometrik naqshlar bilan bezatilgan. Madrasaning ichki qismida talabalar hujralari, darsxonalar va namozxonlar bilan o‘ralgan katta hovli mavjud. Tillakori madrasasining asosiy diqqatga sazovor joyi baland gumbazli va mehrobli nafis masjiddir. <br>
         <b>Dekorativ elementlar: </b>  Tillakori madrasasining ichki devorlari zarhal bargdan yasalgan murakkab naqshlar va bezakli rasmlar bilan qoplangan. Moviy, oltin va firuza ranglardagi murakkab naqshlar va xattotlik ajoyib vizual effekt yaratadi. Madrasa, ayniqsa, zargarlik va tilla yaproqlardan mohirona foydalanilgani, unga o‘ziga xos va yorqin ko‘rinish bergani bilan mashhur.</p>
         <p><b>    Hozirgi foydalanish:</b> Tillakori madrasasi dastlab islomshunoslik taʼlim muassasasi sifatida qurilgan boʻlsa-da, endi u faol madrasa emas. Bugungi kunda majmua birinchi navbatda sayyohlik maskani va madaniy tadbirlar, ko'rgazmalar va hunarmandchilik bozorlari uchun joy sifatida xizmat qiladi. Tillakori madrasasini ziyorat qilish ushbu tarixiy maskanning murakkab hunarmandchiligi va me’moriy go‘zalligini qadrlash imkonini beradi. Bu Samarqand madaniy merosining muhim qismi bo‘lib, shaharning YuNESKOning Butunjahon merosi ob’ekti sifatidagi obro‘siga hissa qo‘shadi.<br>
        </p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Tillakori-madrasasi/tillakori3.jpg" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
            <p>Dastlab "Yalangtoʻshbiy kichik madrasasi" deb nomlangan. Keyinchalik masjid bezagida boshqa bir obida qurilishiga yetadigan miqdorda oltin sarflangani uchun "tillakori" (tilladan ishlov berilgan) deb yuritila boshlagan. T.m.dan shahar jome masjvdi va Madrasa sifatida foydalanilgan. Shuning uchun masjidi (63x22 m) katta va serhashamligi bilan boshqa madrasalardan ajralib turadi. Madrasa (70x70 m) ga gʻarbiy peshtoq orqali kiriladi. Peshtoq chuqur ravoqli, 2 qanotining oldi ravoqli, 2 qavatli hujralar, burchaklarini teng hajmdagi guldasta mezanalar egallagan. 
            </p>
            
         </div>
      
      
         
         <div class="content">
         
            <p> Masjid xonaqohi (10,8x10,8 m)ning poygumbazi baland, uzoqdan koʻzga tashlanib turadi. Uning gumbazi nihoyasiga yetkazilmagan. Xonaqoh toʻriga marmardan mehrob va zinapoyali minbar ishlangan. Oʻz davrida zarhal naqshlar bilan jozibador bezatilgan xonaqohning 2 yonini oldi ravoqli, gumbaz tomli ayvon (yoʻlak)lar egallagan. Peshtoq ravogʻidagi marmar taxtachada bezak ishlari 1659—60 y.larda bajarilganligi yozilgan.Haydar buyrugʻi bilan zilziladan zarar koʻrgan peshtogʻi qayta tiklanishi jarayonida shakli buzilgan. 1885 y.dagi taʼmir vaqtida zarhal naqshlar oddiy boʻyoqlar bilan almashtirilgan. T.m.da Samarqand taʼmirlash ustaxonasi tashkil etilib (1930), koshinlarning qad. rangini topish yoʻlida tadqiqot ishlari olib borilgan. T.m.dagi yoʻqolib ketayozgan noyob zarhal naqshlarni ustalar ilmiy oʻrganib, qayta tikladi (1970). Binokorlar madrasaning Registonga qaragan peshtogʻini Sherdor Madrasa va Ulugʻbek madrasasi bilan moslashtirib qayta qurdi. Peshtoq ravogʻi va ravoq ichidagi qalqonsimon bagʻali, guldastasi hamda xonaqoh gumbazi, ichidagi tilla halli boʻrtma naqshlari qayta jilolandi (1974). Baland gumbazi ustiga feruza rang koshin bilan qoplangan gumbaz oʻrnatildi. 
            </p>
            <br>
         </div>

   </div>
   




   <div class="row">

   
      <div class="content">
         <p> Bosh tarzidagi bezak mavzularining boyligi, ichki va tashqi naqshlarning serhashamligi, peshtoq qanoti va tokchasidagi iroqi kashtani eslatuvchi bezaklar, boʻrtma yozuvlar oʻziga xosdir. Ravoq burchaklari, bezakli toqilarni toʻldirishda koshinpaz ustalar turli usullarni qoʻllashgan (gʻishtlarning mayda naqshlari koshinlarning handasiy va islimiy naqshlari bilan moslashtirilgan). Koshinkori ravoqlarda yashil tangachalar, sargʻish yaproqlar va feruza poyalar aks ettirilgan.
         </p>
        
      </div>
      <div class="image">
      <img src="images/Desktop/Tillakori-madrasasi/tillakori6.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
     
         <p> Xonaqoh izorasi koshin namoyon, devori, gumbazi va bagʻali kundal uslubidagi serhasham naqshlarga boy. Mehrob ravogʻi va bagʻali muqarnas kosachalar bilan toʻldirilib, zarhal berilgan hamda Qurʼon oyatlaridan olingan boʻrtma yozuvlar bilan hoshiyalangan. Eshiklar murakkab naqsh va yozuvlar bilan yogʻoch oʻymakorligida pardozlangan. Hovli sahni (50x50 m)ga marmar yotqizilgan. Atrofidagi hujralarga eshik, tobadoniga panjaralar ishlangan. Hujralar yoz kunlari ham salqin boʻladi. T.m.da muzey tashkil etilgan boʻlib, unda madrasani taʼmirlashga oid narsalar saqlangan.
         </p>
 
         <h3 style="margin-bottom:15px;">Tillakori madrasasiga oid video lavha </h3>
      </div>

   </div>
   <iframe width="100%" height="550px" src="https://www.youtube.com/embed/gQ1vIxL_e1E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

   <br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:15px; margin-bottom:15px;">
   <br>


<!-- *********************************************************************************************************************************************************************************************************************************** -->

<div class="row">

   
<div class="content">
   <h3 >Tarixiy obida nomi: Sherdor  madrasasi</h3>
   <p>Samarqanddagi XVII asrning mashhur binolardan biri – Sherdor madrasasi Registon me’moriy ansambli tarkibiy qismiga kiradi. Bir necha asrlar davomida madrasa mashhur islomiy ta’lim muassasasi bo‘lib, uning hujralarida taniqli faylasuflar va ilohiyotshunoslar tahsil olgan.Madrasa 1619-1636 yillarda Ulug‘bekning demontaj qilingan xonaqohi o‘rnida Ashtarxoniy Yalanto‘shbiy Bahodirning buyrug‘i bilan qurilgan. Qurilishga Samarqand me’mori Abduljabbor jalb qilingan, bezak berish ishlarini usta Muhammad Abbos bajargan
   </p>
  
</div>
<div class="image">
<img src="images/Desktop/Sherdor-madrasasi/sher4.jpg" alt="rasm topilmadi">

</div>


<div class="content">
   <p>Oʻzbekistonning Samarqand shahrida joylashgan koʻzga koʻringan tarixiy yodgorlikdir. 
   <b >Sherdor madrasasi haqida bir qancha ma’lumotlar:</b> 
  <b> Arxitektura:  </b> Sherdor madrasasi 17-asr boshlarida, Shayboniylar sulolasi hukmronligi davrida qurilgan. Bu Registon maydonini tashkil etuvchi uchta madrasadan biridir. Sherdor madrasasining arxitektura uslubida islom va Markaziy Osiyo taʼsiri uygʻunlashgan boʻlib, murakkab koshinlar, jonli ranglar va geometrik naqshlar uygʻunlashgan.
</p>

   <p><b>Xususiyatlari: </b> Sherdor madrasasining eng diqqatga sazovor jihati uning ajoyib fasadi bo‘lib, unda arslonlarning katta mozaikasi aks etgan. Bu sherlar islom sanʼatida kam uchraydi, chunki koʻpincha tirik mavjudotlarni tasvirlashdan qochiladi. Quyosh ortidan quvayotgan ikki sher obrazi ezgulik va yovuzlik o‘rtasidagi kurash haqidagi afsonaviy hikoyaning ramzi ekanligi aytiladi <br>
   <b> Dekorativ elementlar: </b>  Madrasaning tashqi devorlari jonli ko‘k, firuza va oq sirli koshinlar bilan bezatilgan bo‘lib, murakkab naqsh va geometrik naqshlar hosil qiladi. Asosiy kirish portali xattotlik va keramik plitkalar bilan bezatilgan. Madrasaning gumbaz va minoralari ham ajoyib tarzda bezatilgan.</p>
   <p><b>  Ichki makon:  </b> Sherdor madrasasining ichki qismi talabalar hujralari, darsxonalar va masjid bilan o‘ralgan markaziy hovlidan iborat. Namoz zalida murakkab bezak elementlari, jumladan, murakkab o'yilgan yog'och ustunlar, bezakli shiftlar va rang-barang kafel ishlari namoyish etilgan<br>
   <b> Hozirgi foydalanish:</b>  Registon maydonidagi boshqa madrasalar singari Sherdor madrasasi ham faol ta’lim muassasasi emas. Endi u birinchi navbatda sayyohlik diqqatga sazovor joyi bo'lib, tashrif buyuruvchilarga uning ajoyib arxitekturasini o'rganish, tarixiy ahamiyati haqida bilish va murakkab hunarmandchilikni qadrlash imkoniyatini beradi.Sherdor madrasasi Samarqand meʼmoriy merosining muhim qismi boʻlib, dunyoning turli burchaklaridan sayyohlarni oʻziga tortadi. Uning noyob dizayni va ramziy elementlari Registon maydoni majmuasida diqqatga sazovor joy yaratadi.</p>
</div>

</div>




<div class="row">

   <div class="image">
   <img src="images/Desktop/Sherdor-madrasasi/sher12.jpg" alt="rasm topilmadi">
      
</div>
   
   <div class="content">
      <p>Dizayn Markaziy Osiyo an’anaviy uslubida amalga oshirilgan va asosiy tashqi ko‘rinishi uchli yakunga ega bo‘lgan arkali kirish eshigi bilan hayratga soladi.Avvaliga binoni hokim Yalangto‘sh Bahodir sharafiga nomlash rejalashtirilgan edi. Biroq, odamlar “Sherdor” ya’ni “Sherlar makoni” deya atashgan.Madrasa o‘zining zamonaviy nomini old qismidagi timpanumidagi o‘ziga xos bezak tufayli oldi, chiqayotgan quyosh nurlari ostida, qor qoplonining oq jayronga ov sahnasi hayoliy hayvonlar qiyofasi negizida tasvirlangan.
      </p>
      
   </div>


   
   <div class="content">
   
      <p> Garchi musulmonlarning urf-odatlariga ko‘ra, muqaddas joylarda hayvonlar yoki odamlarni tasvirlab bo‘lmaydi, lekin ushbu madrasa bundan mustasno.Kiyik ovlayotgan yirtqichlarning tasviri, ilmu toliblar bilimga intilishlari zarurligini va, sherlar o‘ljasini quvib ularni yeganlaridek, donolikni o‘zlashtirishlari zarurligi lozim. Insonning yuzi xudoni ramziy timsol ko‘rinishini tasvirlagan holda ogohlantiradi: “Hatto siz yirtqich bo‘lsangiz ham, boqiy emasligingizni unutmasligingiz kerak”. Qariyb uch asr davomida Sherdor musulmonlar orasida eng mashhur ta’lim muassasasi hisoblangan
      </p>
      <br>
   </div>

</div>





<div class="row">


<div class="content">
   <p>Madrasa peshtoqida tasvirlangan jarayon vaqt o‘tishi bilan O‘zbekistonning milliy ramzlaridan biriga aylandi.Sherdor madrasasi va unga qarama-qarshi joylashgan Ulug‘bek madrasasining o‘lchamlari amalda bir xil. Me’morning fikriga ko‘ra, binolar bir-birining ko‘zgu tasvirlari bo‘lishi kerak edi va bu yerda o‘ziga xos “kosh” texnikasi ishlatilgan.
   </p>
  
</div>
<div class="image">
<img src="images/Desktop/Sherdor-madrasasi/sher9.jpg" alt="rasm topilmadi">

</div>


<div class="content">

   <p>Ammo vaqt o‘tishi bilan bu joy relyefi biroz o‘zgargan, shuning uchun Sherdor Ulug‘bek madrasasidan biroz pastroqda joylashgan. Binoning bezagi kufiy yozuvlari, Muhammad (s.a.v) payg‘ambar so‘zlari va Qur’oni Karimdan muqaddas so‘zlar bilan bezatilgan.
   </p>

   <h3 style="margin-bottom:15px; ">Sherdor madrasasiga oid video lavha </h3>
</div>

</div>


<iframe style="margin-bottom:15px; margin-bottom:15px;" width="100%" height="550px" src="https://www.youtube.com/embed/_597uLY76Yw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


<br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; ">
   <br>

<!-- *********************************************************************************************************************************************************************************************************************************
 -->

 <div class="row">

   
<div class="content">
   <h3 >Tarixiy obida nomi:  Ulug'bek  madrasasi</h3>
   <p>XV asr o‘rtalarida Samarqandda Amir Temurnning nabirasi Mirzo Ulug‘bek (1409-1449) hokimiyat tepasiga keldi, u nafaqat Temuriylar sulolasining vakili, balki yirik olim va astronom sifatida ham dunyoga tanildi. Buxoro, Samarqand, Shahrisabz va G‘ijduvonda o‘quv muassasalarini faol qurishga aynan Ulug‘bek bosh bo‘lgan . Samarqand shahridagi Ulug‘bek madrasasi sharqning islom oliy o‘quv yurtlarining mumtoz namunasidir.
   </p>
  
</div>
<div class="image">
<img src="images/Desktop/ulugbek-madrasasi/u-rasadxona4.jpg" alt="rasm topilmadi">

</div>


<div class="content">
   <p>O'zbekistonning Samarqand shahrida joylashgan mashhur tarixiy yodgorlikdir. 
   <b >Ulug‘bek madrasasi haqida ba’zi ma’lumotlar:</b> 
  <b> Qurilishi:  </b> Ulug‘bek madrasasi XV asrda (1417-1420) atoqli temuriylar hukmdori va astronomi Ulug‘bek tomonidan qurilgan. Ulug‘bek astronomiya va matematikaga qo‘shgan hissasi bilan tanilgan va u madrasani o‘quv muassasasi sifatida tashkil qilgan.
</p>

   <p><b>Arxitektura uslubi: </b> Madrasa anʼanaviy temuriylar meʼmoriy uslubiga ega. U markaziy hovli bilan to'rtburchaklar shaklga ega. Kirish portali chiroyli geometrik naqshlar, xattotlik va murakkab koshinlar bilan bezatilgan. Madrasaning jabhasida ko‘k va firuza koshinlar namoyish etilib, uning estetik jozibadorligini oshiradi. <br>
   <b>Astronomik ahamiyati:  </b> Ulug'bek taniqli astronom bo'lib, madrasa o'z binosida rasadxonani birlashtirgan. Ulug‘bek rasadxonasi nomi bilan mashhur bo‘lgan bu rasadxona o‘z davrining eng ilg‘or rasadxonalaridan biri edi. Unda Ulug‘bek aniq astronomik kuzatishlar olib borgan va “Zij-i Sultoniy” nomi bilan mashhur yulduzlar katalogini tuzgan katta kvadrant joylashgan edi.</p>
   <p><b> Foydalanish: </b>Ulug‘bek madrasasi o‘z ichiga ma’ruza xonalari, talabalar hujralari va masjiddan iborat. Markaziy hovlini o'rab turgan xonalar diniy ta'lim uchun sinf xonalari sifatida foydalanilgan. Madrasaning janubiy chekkasida joylashgan masjid talabalar va mahalliy aholining ziyoratgohi bo‘lib xizmat qilgan.<br>
   <b> Qayta tiklash:</b>  Vaqt o‘tishi bilan Ulug‘bek madrasasi yaroqsiz holga keldi. Biroq, 20-asrda uning me'moriy va tarixiy ahamiyatini saqlab qolish uchun keng qamrovli restavratsiya ishlari olib borildi. Qayta tiklash ishlari tuzilmaviy barqarorlikni ta'minlash bilan birga asl temuriylar uslubini saqlab qolishga qaratilgan.Bugungi kunda Ulug‘bek madrasasi Samarqanddagi mashhur sayyohlik maskani bo‘lib, o‘zining tarixiy ahamiyati va me’moriy ko‘rki bilan tashrif buyuruvchilarni o‘ziga tortadi. Madrasani o‘rganish temuriylar davrining boy madaniy-ma’rifiy merosi bilan tanishish imkonini beradi. Bundan tashqari, yaqin atrofdagi Ulug‘bek rasadxonasi Ulug‘bekning ilmiy yutuqlaridan dalolat beradi.so'nggi ma'lumotlar va har qanday aniq ko'rsatmalar yoki cheklovlarni tekshirish har doim yaxshi fikrdir.</p>
</div>

</div>




<div class="row">

   <div class="image">
   <img src="images/Desktop/ulugbek-madrasasi/u-rasadxona1.jpg" alt="rasm topilmadi">
      
</div>
   
   <div class="content">
      <p>Madrasa 1417-1420 yillarda qurilgan. Badiiy jihatdan u Temur qurdirgan  binolardan kam emas edi va shu bilan birga mustahkamligi  jihatidan ulardan ancha ustun turardi.Dastlab madrasa 50 ta hujradan iborat bo‘lib, unda yiliga yuzdan ortiq talabalar tahsil olishgan. Tarixchilar aytishiga ko‘ra  Ulug‘bekning o‘zi madrasada dars bergan. Taniqli fors shoiri Jomiy bu yerda yashab, ijod qilgan. Jomiyning  tinglovchilari orasida eng mashhur Naqshbandiya tariqati namoyondalaridan shayx Xoja Ahror Vali va buyuk shoir Alisher Navoiy bor edi.
      </p>
      
   </div>


   
   <div class="content">
   
      <p> Bino 2 qavatli bo‘lgan, burchak darsxonalar ustida to‘rtta baland gumbaz, burchaklarda esa to‘rtta minoralar bo‘lgan. Asosiy fasadning uchdan ikki qismini egallagan bahaybat peshtoq ulkan va chuqur nayzasimon arkali bo‘lib maydonga qarab turadi.18-asrda ichki nizolar tufayli boshlangan urushlar ta’sirida madrasa juda kata talofot ko’radi.Ikkinchi qavatdagi xonalar va tashqi gumbazlar buzilib ketadi.20-asrning boshlarida o‘sha davrning  me’mor va rassomlari tomonidan madrasani qayta ta’mirlash ishlarining asosiy qismi amalga oshirildi. 1918-yilda M.F.Mauer tomonidan madrasaning bosh minorasi va yer osti qismlarini qayta ta’mirlash loyihasi ishlab chiqiladi.
      </p>
      <br>
   </div>

</div>





<div class="row">


<div class="content">
   <p>Yarim asr davomida binoning yuz qismi, shimoliy tomonining tashqi devorlari qayta g‘isht bilan terilib mustahkam qilindi. Hovli ayvonlari mustahkamlandi, mayolika mozayka va o‘yma naqshlar qayta restavratsiya qilindi.O‘tgan asr oxirida Ulug‘bekning yubileyi munosabati bilan madrasada ta’mirlash-restavratsiya ishlari boshlanib ketdi. Loyiha madrasaning 2-qavatini tiklab, me’moriy keramika va zamonaviy qurilish materiallarini ishlatgan holda janubiy-g‘arbiy devorlarini tiklanishini nazarda tutardi.
   </p>
  
</div>
<div class="image">
<img src="images/Desktop/ulugbek-madrasasi/u-rasadxona6.jpg" alt="rasm topilmadi">

</div>


<div class="content">

   <p>Bugungi kunda Ulug‘bek madrasasi Registonning noyob uchta gavharidan biri  bo‘lib, Samarqand tarixiy markazining bebaho bezagi hisoblanadi.Ulug‘bek madrasasi YUNESKOning Butunjahon madaniyati ro‘yxatiga kiritilgan.
   </p>
  
  
      <h3>Ulug'bek  madrasasiga oid video lavha </h3>
      <br>

</div>

</div>

<iframe style="margin-bottom:20px;" width="100%" height="550px" src="https://www.youtube.com/embed/03vXo_-G8hg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;"><br>
   
   <h1 style="width:100%; text-align:center; font-size:25px;">Tillakori, Sherdor va Ulug'bek  madrasalariga oid rasmlar to'plami </h1>

   <br>
   <hr style="width:100%; height:1px;  background-color:black; opacity:0.3;">
   <br>
   <div class="containerzed">

<div class="box-containerzed">

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Tillakori-madrasasi/tillakori7.jpg" alt="rasm topilmadi">
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Tillakori-madrasasi/tillakori1.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher3.jpg" alt="rasm topilmadi">
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher7.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher10.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/ulugbek-madrasasi/u-rasadxona5.jpg" alt="rasm topilmadi">
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/ulugbek-madrasasi/u-rasadxona3.webp" alt="rasm topilmadi">>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/ulugbek-madrasasi/u-rasadxona2.jpg" alt="rasm topilmadi">
      </div>
   </div>


<!-- ************* -->
   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher5.jpg" alt="rasm topilmadi">
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher11.jpg" alt="rasm topilmadi">
     
      </div>
   </div>



   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/ulugbek-madrasasi/u-rasadxona6.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Sherdor-madrasasi/sher13.jpg" alt="rasm topilmadi">
     
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Tillakori-madrasasi/tillakori6.jpg" alt="rasm topilmadi">
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

<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Yuqoridagi madrasalarning xaritadagi manzili.</div>
 

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1956.5040855598827!2d66.97416434027404!3d39.654296262258086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18b7c7b47d65%3A0xb8abf505828571b1!2sSherdor%20Madrasasi!5e1!3m2!1suz!2s!4v1684837409422!5m2!1suz!2s"  width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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