<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ?");
   $select_admin->execute([$name]);

   if($select_admin->rowCount() > 0){
      $message[] = 'Foydalanuvchi nomi mavjud! Iltimos foydalanuvhi nomini boshqasiga almashtiring!';
   }else{
      if($pass != $cpass){
         $message[] = 'Parol mos kelmadi. Iltimos qaytadan parolni kiriting!';
      }else{
         $insert_admin = $conn->prepare("INSERT INTO `admins`(name, password) VALUES(?,?)");
         $insert_admin->execute([$name, $cpass]);
         $message[] = 'Yangi admin muvaffaqqiyatli qushildi!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ro'yxatdan o'tgan admin</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">
   <link rel="stylesheet" href="../css/registon.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<div class="full-landing-image">
         <section class="form-container">

            <form action="" method="post">
               <h3>Ro'yxatdan o'tish</h3>
               <hr style="width: 100%; height: 2px; background-color: white;  margin: 10px 0px 30px 0px;"><hr>
               <input type="text" name="name" required placeholder="Ismingizni kiriting" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
               <input type="password" name="pass" required placeholder="Parolni kiriting" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
               <input type="password" name="cpass" required placeholder="Parolni takrorlang" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
               <input type="submit" value="Tasdiqlash" class="btn" name="submit">
            </form>

         </section>

</div>

   <script>
      $(".full-landing-image").ripples({
      resolution: 256,
      perturbance: 0.04,
      });
   </script>










<script src="../js/admin_script.js"></script>
   
</body>
</html>