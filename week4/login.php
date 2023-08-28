<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        username<input type="text" name="username" size = 16> <br>
        password<input type="text" name="password" size = 16> <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
<?php 
    require 'database.php';
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST["password"];
        $sql = "SELECT * FROM user WHERE username = '$username' && password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
           echo("failed");
          } else {
            echo "login";
            $_SESSION['user'] = $username;
            $_SESSION['login'] = true;
          }
    }
?>