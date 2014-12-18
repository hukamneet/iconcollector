<?php
                session_start();
            
        ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>iconcollection</title>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="js/mail.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
        
	
        <style>
            body,div
            {
                margin: 0;
                padding: 0;
}
.menu{}
.menu ul{list-style:none;}
.menu ul li{float:left; padding:0 20px;}
.menu ul li a{color:#FFF; font-size:16px; font-family:Arial, Helvetica, sans-serif; text-decoration:none;}
.sign-menus{width:20%; float:right; height:60px; background-color:#000;}
.sign-menus ul li{float:left; padding:0 20px;}
.sign-menus ul li a{color:#FFF; font-size:18px; font-family:Arial, Helvetica, sans-serif; text-decoration:none;}
.new-footer {
color: #fff;
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
line-height: 24px;
padding: 15px;
background-color: #000;
text-align: center;
-webkit-box-shadow: 1px 1px 8px #C7C7C7;
box-shadow: 1px 1px 8px #C7C7C7;}
.center-wrap {
margin: 0 auto;
width: 960px;
}
#footer-menu {
line-height: 35px;
padding: 0;
margin: 0 0 10px;
text-transform: uppercase;
}
#footer-menu li {
display: inline-block;
vertical-align: top;
}
#footer-menu li a {
padding: 0 15px;
line-height: 35px;
color: #fff;
text-decoration: none;
font-size: 16px;
}
#cat{
    width: 250px;
    margin-left: 60px;
    margin-top: 20px;
    font-size: 16px;
    float: left;
}
 a{
    text-decoration: none;
    color:black;
}
 a:hover
{
    
}
#catTitle
{
    margin-left: 60px;
    font-weight: bold;
    font-size: 22px;
    margin-top: 40px;
}
#search h1{
    font-size: 50px;
    color: white;
    margin-left: 388px;
}
#search input
{
    height: 55px;
    margin-left: 330px;
    width: 584px;
    font-size: 20px;
}
#catpaid, #catfree, #particularCat
{
    height: 120px; width: 300px;
    float: left;
    margin-left: 100px;
    text-align: center;
    border: 1px solid black;
    margin-top: 50px;
    margin-bottom: 50px;
}

#acnttbl
{
    width: 100%;
}

#tblsidebar{
    width: 30%;
}

#tblcontent
{
    vertical-align: top;
}
</style>
    </head>
    <body>

<?php include_once 'DbConnect/DbConnection.php'; ?>

        <?php
            include_once 'header.php';
        ?>

         <?php
            include_once 'content.php';
        ?>
         <?php
            include_once 'footer.php';
        ?>
  
    </body>
</html>
