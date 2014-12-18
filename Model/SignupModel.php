

<?php

class SignupModel {
   public function signUp($fname,$uname,$email,$pass)
   {
      $con=mysql_connect("localhost","root","") or die (mysql_error());
$res=mysql_select_db("iconcollector",$con) or die (mysql_error());
       //$fname=$this->fname;
       //$uname=$this->uname;
       //$pass=$this->pass;
       //$email=$this->email;
       $query="insert into user (fname,uname,email,pass) VALUES ('$fname','$uname','$email','$pass')";
       $data=mysql_query ($query)or die(mysql_error());
       echo $data;

   }
}
?>
