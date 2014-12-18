<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShowCategories
 *
 * @author admin
 */

class ShowCategories {
    public function showCat()
    {
        $query="select * from category where parent=0";
        $result=mysql_query($query);
        $category=array();
        while($row=  mysql_fetch_array($result))
        {
           // echo $row['name'];
            $category[]=$row;
        }
        return $category;
    }


    public function showPaidIconset()
    {
        $query="select * from category where price<>'0' AND price<>'Free' LIMIT 1,9";
        $result=mysql_query($query);
        $category=array();
        while($row=  mysql_fetch_array($result))
        {
           // echo $row['name'];
            $category[]=$row['category_name'];
        }
        return $category;
    }

     public function showFreeIconset()
    {
        $query="select * from category where status='iconset' AND price<>'Free' LIMIT 1,9";
        $result=mysql_query($query);
        $category=array();
        while($row=  mysql_fetch_array($result))
        {
           // echo $row['name'];
            $category[]=$row['category_name'];
        }
        return $category;
    }
}


?>
