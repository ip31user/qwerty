<html>
<head>
</head>
<body>
<?php
    $host = 'localhost';  // Хост, у нас все локально
    $user = 'root';    // Имя созданного вами пользователя
    $pass = ''; // Установленный вами пароль пользователю
    $db_name = 'university';   // Имя базы данных
    $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
if(isset($_POST["submitButton"])){
    require_once("config.php");
    $email = $_POST["email"];
    $email_true = $_POST["email_true"];
    $password = $_POST["password"];
    $password_true = $_POST["password_true"];
    if ($email != $email_true) {
    echo "emails does not match!";}
    elseif ($password != $password_true) {
    echo "Passwords does not match!";}
    else { echo "Success!";
    $sql = mysqli_query($link, "INSERT INTO `users` (`firstname`, `lastname`, `username`, `email`, `password`) VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['username']}', '{$_POST['email']}', '{$_POST['password']}')");
    }
    }
?>
  <form method="POST">
      <input type="text" name="firstname" placeholder="firstname" required>

      <input type="text" name="lastname" placeholder="lastname" required>

      <input type="text" name="username" placeholder="username" required>
    
      <input type="email" name="email" placeholder="email" required>

      <input type="email" name="email_true" placeholder="confirm email" required>

      <input type="password" name="password" placeholder="password" required>

      <input type="password" name="password_true" placeholder="confirm password" required>
 
    <input type="submit" name="submitButton" value="SUBMIT"> 
  
  </form> 
  <a href="http://localhost:8080/university/sign.php">Already have an account? Sign in here!</a>
</body>
</html>