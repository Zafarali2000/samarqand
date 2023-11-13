<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>



<header class="header">

   <section class="flex">

      <a href="index.php" class="logo"><img src="images/Desktop/logo1.png" alt="logotip topilmadi" ></a>

      <nav class="navbar">
         <a href="index.php">Самарканд</a>
         <a href="shop.php">Фотографи</a> 
         <a href="orders.php">Информация</a>
         <a href="about.php">Владелец сайта</a>
         <a href="contact.php">Kонтакт</a>
      </nav>

      <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars" style="color:#2980B9;"></div>
         <!-- <a href="search_page.php"><i class="fas fa-search" style="color:#2980B9;"></i></a> -->
         <a href="shop.php"><i class="fa-solid fa-heart fa-beat-fade" style="color:red;"></i><span style="color:#000000;"></span></a>
         <a href="orders.php"><i class="fa-solid fa-plane-departure" style="color:#2980B9;"></i><span style="color:#000000;"></span></a>
         <div id="user-btn" class="fa-solid fa-user-secret" style="color:#2980B9;"></div>
         
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn">Новый профиль</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Регистр</a>
            <a href="user_login.php" class="option-btn">Входить</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('Veb saytdan chiqishni xohlaysizmi?');">Выход</a> 
         <?php
            }else{
         ?>
         <p>Авторизоваться! </p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Регистр</a>
            <a href="user_login.php" class="option-btn">Входить</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section>

</header>