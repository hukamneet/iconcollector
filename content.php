
<div  class="main-body" style="height:auto; overflow:hidden; width:100%; padding-bottom:50px;">

<?php
   
      
      
           if(isset($_GET['category']))
            {
                include_once 'ShowParticularCategory.php';
            }
            if(isset($_GET['account']))
            {
                include_once 'account.php';
            }
            else
            {
            include_once 'categories.php';
            }
      
       
        
    ?>
</div>
