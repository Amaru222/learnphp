<?php
$rootLocation = "upload/";
$fileLocation = $rootLocation . $_FILES['fileInput']['name'];
$result = move_uploaded_file($_FILES['fileInput']['tmp_name'], $fileLocation);

if ($result == true) {
  header("Location: index.php");
} else {
  header("Location: index.php");
}
