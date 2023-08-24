<?php

include "header.php";

?>



<h4>sub category</h4>
<div class="container">

    <div class="row">
        <?php
        include "db.php";
        // $sel = "SELECT * from `sub_cat`   ";
 
           
        
        $cat_id= $_GET['cat_id'];
        $sql = "SELECT * FROM `sub_cat` WHERE `cat_id` = '$cat_id'";

        $q = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($q)) {
        ?>
            <a href="sub.php?pro_id=<?php echo $row['sub_id']  ?>">
            <div class="col-12">
                <div class="content text-capitalize   ">
                    <h4 class="btn btn-success w-25 text-start"><?php echo $row['sub_cat_title']  ?></h4>
                </div>
            </div>
            </a>
        <?php } ?>
    </div>
</div>