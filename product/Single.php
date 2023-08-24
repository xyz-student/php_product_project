<?php

include "header.php";
?>

<h4>category</h4>
<div class="container">

    <div class="row">
        <?php
        include "db.php";
       $cat_id = $_GET['cat_id'];
        $sel = "SELECT * from `cat` WHERE `cat_id` ='$cat_id'";
        $q = mysqli_query($con, $sel);
        while ($row = mysqli_fetch_array($q)) {
        ?>
            <a href="sub_cat_view.php?cat_id=<?php echo $row['cat_id']  ?>">
            <div class="col-12">
                <div class="content text-capitalize   ">
                    <h4 class="btn btn-success w-25 text-start"><?php echo $row['cat_title']  ?></h4>
                </div>
            </div>
            </a>
        <?php } ?>
    </div>
</div>