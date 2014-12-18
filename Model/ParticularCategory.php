<?php
class ParticularCategory {
    public function showParticularCat($value){
        $query="select * from category where parent='".$value."'";
        $result=mysql_query($query);
        $category=array();
        while($row=  mysql_fetch_array($result))
        {
           // echo $row['name'];
            $category[]=$row;
        }
        return $category;
    }
}
?>
