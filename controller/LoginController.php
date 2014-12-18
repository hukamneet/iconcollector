<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../Model/LoginModel.php';
if($_POST)
{

    $obj=new LoginModel();
    $obj->login($_POST['email'],$_POST['pass']);
}
?>
