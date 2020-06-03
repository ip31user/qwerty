<html>
<head>
</head>
<body>
<?php
$link = mysqli_connect('localhost', 'root', '', 'university');
$sql = mysqli_query($link, 'SELECT `id`, `name`, `description` FROM `courses`');
while ($result = mysqli_fetch_array($sql)) {
  echo "{$result['name']}: {$result['description']}<br>";
}
if(isset($_POST["submitButton"])){
    require_once("config.php");
    $coursename = $_POST["coursename"];
    $description = $_POST["description"];
    $sql = mysqli_query($link, "INSERT INTO `courses` (`name`, `description`) VALUES ('{$_POST['coursename']}', '{$_POST['description']}')");
    echo "$coursename: $description <br>";
}
?>
  <form method="POST">
    <input type="text" name="coursename" placeholder="coursename" required><br>
    <input type="text" name="description" size="50" placeholder="description" required><br>
    <input type="submit" name="submitButton" value="Add">
  </form> 
</body>
</html>