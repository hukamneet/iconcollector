<?php
require_once 'Model/ParticularCategory.php';
$response= new ParticularCategory();
$row=$response->showParticularCat($_GET['category']);

foreach ($row as $val)
{
    //$counter++;

    echo "<div id='particularCat'><a href='#'>".$val['category_name']."</a></div>";
    

}
?>
