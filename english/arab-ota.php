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
   <title>Information about the shrine of Arab father</title>

   
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
          <h3>Name of the historical monument: Shrine of the Arab father</h3>
          <p>The tomb of the Arab father is an architectural monument in the village of Tim, Samarkand region, mil. 977/8 (367 AH). The architect is unknown. The foundation is made of stone, and the walls are made of brick (23X23X4 cm) with ganchkhok. The general meaning of bi-no is murabba. It is covered with a dome. 4 kunjak between the wall and the dome are in the form of large muqarnas bowls. The columns are patterned. These elegant pillars give the room a cozy and majestic look. The beauty of the mausoleum is its majestic facade.
          </p>
        
       </div>
       <div class="image">
          <img src="images/Desktop/Arab-ota/ota3.jpg" alt="image not found">
      
       </div>
      
      
       <div class="content">
          <p>Bricks are made in pairs in different order, hanchkori patterns are included in the rows of seams. There are Kufic inscriptions on the peshtok stems. There are Kufic inscriptions on the peshtok stems. Three niches above the porch are decorated with small patterns. The Arabota mausoleum is one of the oldest surviving Muslim mausoleums in Mowarounnahr. The mausoleum is of great importance in terms of its architectural structure. Its gable is the first mature example of this type of buildings created in that period and influenced the development of the architecture of the 11th and 12th centuries.
       </p>
       </div>

    </div>




    <div class="row">

          <div class="image">
          <img src="images/Desktop/Arab-ota/ota2.png" alt="image not found">
            
       </div>
         
          <div class="content">
             <p>Thanks to the hard work of a number of archaeologists and orientalists, it was possible to read the remains of the inscription on the facade of the mausoleum, and as a result, it was determined that the mausoleum was built in 976-977. According to the instructions of medieval historians, the village of Tim was then So It was considered one of the largest settlements of the city. Caravan routes from Samarkand south to Kashkadarya and from there to India passed here. Near the mausoleum, small residential ruins and a high rectangular fortress with steep slopes were found.
             </p>
         </div>
      
      
         
         <div class="content">
         
         <p></p>
            <hr style="width:100%; height:1px;  background-color:black; opacity:0.3; margin-top:10px;"><br>
            <h3>Pictures of historical monuments </h3>
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

<div id="load-more"> More information <i class="fa-solid fa-arrow-down fa-bounce"></i> </div>

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

<div style="width:100%; text-align:center; font-size:25px; font-weight:bold; margin:10px;">Address of the Arab father shrine on the map.</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d438.0469407171564!2d65.79270558734892!3d39.69550366304986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4e0bdb2e7f5c4b%3A0xe9c29ef862e883cd!2sArab-Ata%20Mausoleum!5e1!3m2!1suz!2s!4v1684836438422!5m2!1suz!2s"  width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



   <a href="index.php" class="btn" style="margin-top:15px;">Return to main page</a>
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