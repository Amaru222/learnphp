<html>
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
<?php 
    $username = $_POST['username'];
    $password = $_POST["password"];
    $conn = new mysqli('localhost', 'root', '', 'test');
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo($row["username"]);
        
       if($username == $row["username"]){
        echo('login');
       }
      }
    } else {
      echo "0 results";
    }
    $conn->close();   
?>
</body>
</html>