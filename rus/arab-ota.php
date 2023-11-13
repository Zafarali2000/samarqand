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
   <title> Информация о святилище арабского отца</title>

   
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
      <h3>Название исторического памятника: Усыпальница арабского отца</h3>
          <p>Могила арабского отца — памятник архитектуры в селе Тим Самаркандской области, мил. 977/8 (367 г. хиджры). Архитектор неизвестен. Фундамент каменный, стены кирпичные (23х23х4 см) с ганчхоком. Общее значение би-но — мурабба. Он накрыт куполом. 4 кунджака между стеной и куполом выполнены в виде больших чаш-мукарнасов. Колонны имеют узор. Эти изящные колонны придают помещению уютный и величественный вид. Красота мавзолея заключается в его величественном фасаде.
         </p>
        
      </div>
      <div class="image">
         <img src="images/Desktop/Arab-ota/ota3.jpg" alt="rasm topilmadi">
      
      </div>
      
      
      <div class="content">
      <p>Кирпичики делают попарно в разном порядке, узоры ханчкори включаются в ряды швов. На стеблях пештока имеются куфические надписи. На стеблях пештока имеются куфические надписи. Три ниши над крыльцом украшены мелким узором. Мавзолей Аработа - один из старейших сохранившихся мусульманских мавзолеев в Мовароуннахре. Мавзолей имеет большое значение с точки зрения его архитектурной структуры. Его фронтон является первым зрелым образцом этого типа зданий, созданных в этот период и повлиявших на развитие архитектуры 11 и 12 веков.
       </p>
      </div>

   </div>




   <div class="row">

         <div class="image">
         <img src="images/Desktop/Arab-ota/ota2.png" alt="rasm topilmadi">
            
      </div>
         
         <div class="content">
         <p>Благодаря кропотливой работе ряда археологов и востоковедов удалось прочесть остатки надписи на фасаде мавзолея, и в результате было установлено, что мавзолей был построен в 976-977 гг. По указанию средневековых историков, деревня Тим была тогда Со' и считалась одним из крупнейших поселений города. Здесь проходили караванные пути из Самарканда на юг в Кашкадарью и оттуда в Индию. Рядом с мавзолеем были обнаружены небольшие жилые руины и высокая прямоугольная крепость с крутыми склонами.
             </p>
            
         </div>
      
      
         
         <div class="content">
         
         <p></p>
            <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;"><br>
            <h3>Фото исторических памятников</h3>
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
      <img src="images/Desktop/Arab-ota/ota1.jpg" alt="rasm topilmadi">
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Arab-ota/ota4.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Arab-ota/ota11.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Arab-ota/ota5.jpg" alt="rasm topilmadi">
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Arab-ota/ota9.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Arab-ota/ota7.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Arab-ota/ota6.jpg" alt="rasm topilmadi">
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Arab-ota/ota10.jpg" alt="rasm topilmadi">
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <img src="images/Desktop/Arab-ota/ota8.jpg" alt="rasm topilmadi">
      </div>
   </div>

</div>

<div id="load-more"> Больше информации<i class="fa-solid fa-arrow-down fa-bounce"></i> </div>

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


<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Расположение усыпальницы арабского отца на карте.</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d438.0469407171564!2d65.79270558734892!3d39.69550366304986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4e0bdb2e7f5c4b%3A0xe9c29ef862e883cd!2sArab-Ata%20Mausoleum!5e1!3m2!1suz!2s!4v1684836438422!5m2!1suz!2s"  width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




   <a href="index.php" class="btn" style="margin-top:15px;">Вернуться на главную стр</a>

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