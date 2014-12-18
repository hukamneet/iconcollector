<?php
require_once '../Model/SignupModel.php';

if($_POST)
{
    
    $obj=new SignupModel();
    $obj->signUp($_POST['fname'], $_POST['uname'], $_POST['email'], $_POST['pass']);
}


?>
