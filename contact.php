<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'Bu xabar yuborilgan!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'Xabar muvaffaqiyatli yuborildi!';

   }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kontakt</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/registon.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="contact">
<h1 class="heading">Sizda biror taklif, savol va e'tiroz bo'lsa bizga xabar yuborishingiz mumkin! Biz har doim hamkorlikka tayyormiz!</h1>
<b style="color:#FFFFFF; font-size:5px">Zafarali Daminov</b>
   <form action="" method="post">
      <h3>XABAR YUBORISH</h3>
      <input type="text" name="name" placeholder="Ismingizni kiriting" required maxlength="50" class="box">
      <input type="email" name="email" placeholder="Emailingizni kiriting" required maxlength="70" class="box">
      <input type="number" name="number" min="0" max="99999999999999999" placeholder="Raqamingizni kiriting" required onkeypress="if(this.value.length == 12) return false;" class="box">
      <textarea name="msg" class="box" placeholder="Xabarni kiriting" cols="30" rows="10"></textarea>
      <b style="color:#fff; font-size:5px">Zafarali Daminov</b>
      <input type="submit" value="Yuborish" name="send" class="btn">
   </form>

</section>




<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>