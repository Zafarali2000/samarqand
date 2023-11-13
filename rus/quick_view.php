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
   <title>Краткая информация</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="quick-view">

   <h1 class="heading">Краткая информация об историческом памятнике</h1>

   <?php
     $pid = $_GET['pid'];
     $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?"); 
     $select_products->execute([$pid]);
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">

      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <div class="row">
         <div class="image-container">
            <div class="main-image">
               <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
            </div>
            <div class="sub-image">
               <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
               <img src="uploaded_img/<?= $fetch_product['image_02']; ?>" alt="">
               <img src="uploaded_img/<?= $fetch_product['image_03']; ?>" alt="">
            </div>
         </div>
         <div class="content">
            <b><div class="name"><?= $fetch_product['name']; ?></div></b>
           
            <div class="details"><?= $fetch_product['details']; ?></div>
            <div class="flex-btn">
               <input type="submit" value="Для путешествия" class="btn" name="add_to_cart">
               <input class="option-btn" type="submit" name="add_to_wishlist" value="Добавить в избранное">
               
            </div>
         </div>
      </div>
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">Hozircha malumot qushilmagan!</p>';
   }
   ?>

</section>

<div class="container">
   <span class="buttonlarspan"><a href="orders.php">площадь Регистан <i class="fa-solid fa-arrow-right fa-beat-fade"></i> </a></span>
   <span class="buttonlarspan"><a href="orders.php">Медресе Тиллакори <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span>
   <span class="buttonlarspan"><a href="orders.php">Медресе Шердар <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span>
   <span class="buttonlarspan"> <a href="orders.php">Медресе Улугбека <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span> 
    
   <span class="buttonlarspan"><a href="orders.php">Бибиханим мавзолей <i class="fa-solid fa-arrow-right fa-beat-fade"></i> </a></span>
   <span class="buttonlarspan"> <a href="orders.php">Боқий Шахар  <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span> 
   <span class="buttonlarspan"><a href="orders.php">Shohizinda <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span>
   <span class="buttonlarspan"><a href="#">Отец Даниил<i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span>
   
   <span class="buttonlarspan"><a href="orders.php">Афросиаб музей <i class="fa-solid fa-arrow-right fa-beat-fade"></i> </a></span>
   <span class="buttonlarspan"><a href="orders.php">Аль-Бухари <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span>
   <span class="buttonlarspan"> <a href="orders.php">Аль-Мотруди <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span> 
   <span class="buttonlarspan"><a href="orders.php">Гори Амир <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span>

   <span class="buttonlarspan"> <a href="orders.php">Хазрат Хизр <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span>
   <span class="buttonlarspan"> <a href="orders.php"> Афросиаб<i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span>  
   <span class="buttonlarspan"><a href="orders.php">Обсерватория Улугбека <i class="fa-solid fa-arrow-right fa-beat-fade"></i> </a></span>
   <span class="buttonlarspan"><a href="orders.php">Сиабский базар <i class="fa-solid fa-arrow-right fa-beat-fade"></i></a></span>
   
</div>





<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>