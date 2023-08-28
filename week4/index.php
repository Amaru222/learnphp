<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PM quan ly tai khoan</title>
</head>
<body>
    <?php 
    echo("<a href='./login.php '>login</a>")
    if(isset($_SESSION['user']) && isset($_SESSION['login'])){
        echo 'xin chao';
    }
    ?>
</body>
</html>
<?php echo "hihi"?>