<?php 
include_once('../model/CalcModel.php');
if(isset($_POST) && isset($_POST['btnSubmit'])){
    $var1 = $_POST['number1'];
    $var2 = $_POST['number2'];
    $method = $_POST['method'];

    $calc = new CalcModel();
    $calc -> $a = $var1;
    $clac -> $b = $var2;
    $clac -> method_calc($method);
}
include('../view/CalcView.php');
?>