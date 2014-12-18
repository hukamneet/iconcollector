<?php


require_once 'Model/ShowCategories.php';

$resp= new ShowCategories();
//$showParti=new ShowParticularCategory();
//$rows=array();
$rows=$resp->showCat();
$padicon=$resp->showPaidIconset();
$freeicon=$resp->showFreeIconset();
$counter=0;

echo "<div id='catTitle'>Featured Premium Icon Set</div>";
foreach ($padicon as $val)
{
    
    $counter++;
    echo "<div id='catpaid'><a href='#'>".$val."</a></div>";
    if($counter==3)
    {
        echo "<div style='clear:both'></div>";
        $counter=0;
    }
    

}

echo "<div id='catTitle'>Featured Free Icon Set</div>";
foreach ($freeicon as $val)
{

    $counter++;
    echo "<a id='ancr' class='ancr' href='#'><div id='catfree'>".$val."</div></a>";
    if($counter==3)
    {
        echo "<div style='clear:both'></div>";
        $counter=0;
    }
    

}
echo "<div id='catTitle'>Categories</div>";
foreach ($rows as $val)
{
    $counter++;
    echo "<div id='cat'><a href='?category=".$val['id']."'>".$val['category_name']."</a></div>";
    if($counter==4)
    {
        echo "<div style='clear:both'></div>";
        $counter=0;
    }
    
}
?>
