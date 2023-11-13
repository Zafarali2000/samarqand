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

      <a href="../admin/dashboard.php" class="logo">
      <img src="../images/Desktop/logo1.png" alt="logotip topilmadi" style="width:100px; height:60px; border-radius:7px">
   </a>

      <nav class="navbar">
         <a href="../admin/dashboard.php">Asosiy panel</a>
         <a href="../admin/products.php">Tarixiy obidalar</a>
         <a href="../admin/admin_accounts.php">Adminlar</a>
         <a href="../admin/users_accounts.php">Foydalanuvchilar</a>
         <a href="../admin/messages.php">Xabarlar</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fa-solid fa-user-secret fa-fade"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../admin/update_profile.php" class="btn">Yangi profil</a>
         <div class="flex-btn">
            <a href="../admin/register_admin.php" class="option-btn">Register</a>
            <a href="../admin/admin_login.php" class="option-btn">Login</a>
         </div>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('Saytdan chiqishni xohlaysimi?');">Chiqish </a> 
      </div>

   </section>

</header>