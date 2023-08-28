<?php 
include ('../Model/Student.php');
if(isset($_POST) && isset($_POST['btnSubmit']))
{
    $name = $_Post['nameStudent'];
    $model = new Student();
    $model -> getInfoStudent($name);
}
include ('../View/StudentDetail.php');
?>