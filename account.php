<?php
    if(isset ($_SESSION['userName']))
    {

?>
<table id="acnttbl">

            <tr>
                <td id="tblsidebar"><?php

                        include_once 'SideBar.php';
                    ?></td>
                <td id="tblcontent">
                    <h1>Welcome</h1>
                    <?php echo $_SESSION['userName']; ?>
                </td>

            </tr>

        </table>

<?php
    }
    else
    {
        header('Location: http://localhost/iconcollect/index.php');
    }
?>


       





