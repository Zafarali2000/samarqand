<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email,]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'Эта электронная почта доступна! Пожалуйста, используйте другой адрес электронной почты';
   }else{
      if($pass != $cpass){
         $message[] = 'Пароль совпадает. Пожалуйста, введите пароль еще раз!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
         $insert_user->execute([$name, $email, $cpass]);
         $message[] = 'Сделано успешно, вы можете получить доступ к своему профилю на сайте!';
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
   <title>Регистрация</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/registon.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<div class="full-landing-image">
         <section class="form-container">

            <form action="" method="post">
               <h3>Зарегистрироваться</h3>
               <hr style="width: 100%; height: 2px; background-color: white;  margin: 10px 0px 30px 0px;"><hr>
               <input type="text" name="name" required placeholder="Введите имя пользователя" maxlength="20"  class="box">
               <input type="email" name="email" required placeholder="Введите адрес электронной почты" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
               <input type="password" name="pass" required placeholder="Введите ваш пароль" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
               <input type="password" name="cpass" required placeholder="Повторите пароль" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
               <input type="submit" value="Проверить данные" class="btn" name="submit">
               <p>Вы регистрировались раньше?</p>
               <a href="user_login.php" class="option-btn">Войти</a>
            </form>

         </section>

</div>
  <script>
         $(".full-landing-image").ripples({
         resolution: 256,
         perturbance: 0.04,
         });
      </script>










<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>