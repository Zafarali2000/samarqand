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
   <title>Fotosuratlar</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/registon.css">
   <script src="js/registon.js"></script>
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products">

<!-- gallariya -->
<div class="containeruzsam">
        <div class="full-view"></div>
        <div class="preview-list">
            <ul>
                <li>
                    <input type="radio" id="tab-1" name="gallery-group">
                    <label for="tab-1">
                        <div class="tab">
                            <img src="images/Desktop/city/city9.jpeg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/A-Temur/5A-Temur.jpg" alt="Rasm topilamdi" />
                       
                    </div>
                </li>
                
                <li>
                    <input type="radio" id="tab-2" name="gallery-group">
                    <label for="tab-2">
                        <div class="tab">
                        <img src="images/Desktop/Shohizinda/shoxizinda8.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Shohizinda/shoxizinda3.jpg" alt="Rasm topilamdi" />
                    </div>
                </li>

                <li>
                    <input type="radio" id="tab-3" name="gallery-group">
                    <label for="tab-3">
                        <div class="tab">
                        <img src="images/Desktop/Al-Buxoriy/buxoriy4.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Al-Buxoriy/al-buxoriy.jpg" alt="Rasm topilamdi" />
                    </div>
                </li>

                <li>
                    <input type="radio" id="tab-4" name="gallery-group" checked>
                    <label for="tab-4">
                        <div class="tab">
                        <img src="images/Desktop/A-Temur/2A-Temur.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/city/city4.png" alt="Rasm topilamdi" />
                    
                    </div>
                </li>
                
                <li>
                    <input type="radio" id="tab-5" name="gallery-group">
                    <label for="tab-5">
                        <div class="tab">
                        <img src="images/Desktop/Siyob-bozor/siyob1.jpeg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Siyob-bozor/siyob4.jpg" alt="Rasm topilamdi" />
                        </div>
                </li>

                <li>
                    <input type="radio" id="tab-6" name="gallery-group">
                    <label for="tab-6">
                        <div class="tab">
                        <img src="images/Desktop/Mirzo-U/mirzo-u3.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Mirzo-U/mirzo-u5.jpg" alt="Rasm topilamdi" />
                        </div>
                </li>

                <li>
                    <input type="radio" id="tab-7" name="gallery-group">
                    <label for="tab-7">
                        <div class="tab">
                        <img src="images/Desktop/Registon/registon6.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Registon/registon7.jpg" alt="Rasm topilamdi" />
                        </div>
                </li>

            </ul>
        </div>
    </div>
<!-- gallariya -->


   <h2 class="heading">Samarqanddagi tarixiy obidalar</h2>
   <b style="color:#FFFFFF; font-size:5px">Zafarali Daminov</b>
   <div class="box-container">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products`"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
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
      echo '<p class="empty">Hozircha tarixiy obidalar haqida malumotlar yuklanmagan!</p>';
   }
   ?>

   </div>


   
   <div class="containerzed">
   <div class="section-title">
            <h1>Tarixiy obidalar haqida rasmlar to'plami</h1>
        </div>

<div class="box-containerzed">

   <div class="boxzed">
      <div class="imagezed">
         <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi8.webp" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="bibixonim.php"><img src="images/Desktop/Bibixonim/3bibi400.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
     <a href="m-rasadxonasi.php"> <img src="images/Desktop/Mirzo-U/mirzo-u5.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="bibixonim.php"><img src="images/Desktop/Bibixonim/1bibi800.webp" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/al-buxoriy5.jpeg" alt=""></a>
      </div>
   </div>
 
   <div class="boxzed">
      <div class="imagezed">
    <a href="3tamadrasalar.php">  <img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="diqqatsj.php"><img src="images/Desktop/city/city7.jpg" alt=""></a>
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota6.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="amir-temur.php"><img src="images/Desktop/A-Temur/18A-Temur.jpg" alt=""></a>
      </div>
   </div>
<!-- *******************1 -->
<div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Tillakori-madrasasi/tillakori7.jpg" alt="rasm topilmadi"></a>
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Tillakori-madrasasi/tillakori1.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher3.jpg" alt="rasm topilmadi"></a>
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher7.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher10.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/ulugbek-madrasasi/u-rasadxona5.jpg" alt="rasm topilmadi"></a>
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/ulugbek-madrasasi/u-rasadxona6.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
     <a href="3tamadrasalar.php"> <img src="images/Desktop/Sherdor-madrasasi/sher13.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
     <a href="3tamadrasalar.php"> <img src="images/Desktop/Tillakori-madrasasi/tillakori6.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>
   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/ulugbek-madrasasi/u-rasadxona3.webp" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="shohizinda.php"><img src="images/Desktop/Shohizinda/shoxizinda14.jpg" alt="rasm topilmadi"></a>
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="shohizinda.php"><img src="images/Desktop/Shohizinda/shoxizinda11.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

  
    <div class="boxzed">
         <div class="imagezed">
           <a href="diqqatsj.php"><img src="images/Desktop/city/city21.jpg" alt="rasm topilmadi"></a>
          </div>
   </div>             

   <div class="boxzed">
      <div class="imagezed">
         <a href="shohizinda.php"> <img src="images/Desktop/Shohizinda/shoxizinda16.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="shohizinda.php"> <img src="images/Desktop/Shohizinda/shoxizinda15.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="3tamadrasalar.php"><img src="images/Desktop/ulugbek-madrasasi/u-rasadxona2.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>


<!-- ************* -->
   <div class="boxzed">
      <div class="imagezed">
      <a href=""><img src="images/Desktop/Sherdor-madrasasi/sher5.jpg" alt="rasm topilmadi"></a>     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher11.jpg" alt="rasm topilmadi"></a>
     
      </div>
   </div>



<!-- *********************2 -->


<div class="boxzed">
      <div class="imagezed">
      <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/al-buxoriy3.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/buxoriy8.jpg" alt="">  </a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/buxoriy3.webp" alt=""></a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/buxoriy7.jpg" alt="">  </a>   
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
     <a href="al-buxoriy.php"> <img src="images/Desktop/Al-Buxoriy/al-buxoriy.jpg" alt=""></a>
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
         <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota14.webp" alt="rasm topilmadi"></a>        
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota12.jpg" alt="rasm topilmadi"> </a>       
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota13.jpg" alt="rasm topilmadi"> </a>       
     
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
          <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir13.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir7.jpg" alt="rasm topilmadi"></a>   
       </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir10.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

 

   
   <div class="boxzed">
      <div class="imagezed">
      <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi5.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
      <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi6.jpg" alt="rasm topilmadi"></a>
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="m-rasadxonasi.php"><img src="images/Desktop/Mirzo-U/mirzo-u7.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="registonmaydoni.php"> <img src="images/Desktop/Registon/registon7.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher5.jpg" alt="rasm topilmadi"> </a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher4.jpg" alt="rasm topilmadi"> </a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher13.jpg" alt="rasm topilmadi"></a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
       <a href="diqqatsj.php"><img src="images/Desktop/city/city18.jpg" alt="rasm topilmadi"></a>
      </div>
    </div>








</div>

<div id="load-more"> Ko'proq ma'lumot <i class="fa-solid fa-arrow-down fa-bounce"></i> </div>

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
</section>



<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>


</body>
</html>