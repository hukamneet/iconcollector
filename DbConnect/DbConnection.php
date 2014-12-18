<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$con=mysql_connect("localhost","root","") or die (mysql_error());
$res=mysql_select_db("iconcollector",$con) or die (mysql_error());

?>
