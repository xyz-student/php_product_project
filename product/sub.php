<?php

include "header.php";

?>



<h4>product</h4>
<div class="container">
 
    <div class="row">
        <?php
        include "db.php";
        $pro_id = $_GET['pro_id'];
        $sel = "SELECT * from `pro` WHERE `sub_cat_title`='$pro_id'  ";
        $q = mysqli_query($con, $sel);
        while ($row = mysqli_fetch_array($q)) {
        ?>
            <a href=" ">
            <div class="col-12"> 
                <div class="content text-capitalize   ">
                    <h4 class="btn btn-success w-25 text-start"><?php echo $row['pro_name']  ?></h4>
                </div>
            </div>
            </a>
        <?php } ?>
    </div>
</div>