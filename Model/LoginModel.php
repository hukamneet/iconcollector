<?php
session_start();
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginModel
 *
 * @author admin
 */
class LoginModel {
    public function login($email,$pass)
   {
      $con=mysql_connect("localhost","root","") or die (mysql_error());
        $res=mysql_select_db("iconcollector",$con) or die (mysql_error());
       //$fname=$this->fname;
       //$uname=$this->uname;
       //$pass=$this->pass;
       //$email=$this->email;
        $query = mysql_query("SELECT *  FROM user where email = '$email' AND pass = '$pass'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['email']) AND !empty($row['pass']))
	{
		$_SESSION['email'] = $row['email'];
                $_SESSION['userName'] = $row['uname'];
		echo "success";
	}
	
   }
}
?>
