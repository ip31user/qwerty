<html>
<head>
</head>
<body>
<?php
     $host = 'localhost';  
     $user = 'root';   
     $pass = ''; 
     $db_name = 'university';  
     $link = mysqli_connect($host, $user, $pass, $db_name);
     if(isset($_POST["submitButton"])){
	require_once("config.php");
     $username = $_POST["username"];
	$password = $_POST["password"];
     $sql = mysqli_query($link, 'SELECT `username`, `password` FROM `users`');
     while ($result = mysqli_fetch_array($sql)) {
		if (($result['username'] == $username) and ($result['password'] == $password)){
               header ('Location: forma3.php');
               exit();}}
     echo "Wrong login or password";
     }
?>
  <form method="POST">

      <input type="text" name="username" placeholder="username" required>

      <input type="password" name="password" placeholder="password" required>
 
      <input type="submit" name="submitButton" value="SUBMIT"> 
  
  </form> 
  <a href="http://localhost:8080/university/forma.php">Do you need an account? Sign up here!</a>
</body>
</html>