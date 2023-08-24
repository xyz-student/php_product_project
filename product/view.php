<?php

include "header.php";

?>


<h4>category</h4>
<div class="container">

    <div class="row">
        <?php
        include "db.php";
        $sel = "SELECT * from `cat`";
        $q = mysqli_query($con, $sel);
        while ($row = mysqli_fetch_array($q)) {
        ?>
            <a href="Single.php?cat_id=<?php echo $row['cat_id']  ?>">
            <div class="col-12">
                <div class="content text-capitalize   ">
                    <h4 class="btn btn-success w-25 text-start"><?php echo $row['cat_title']  ?></h4>
                </div>
            </div>
            </a>
        <?php } ?>
    </div>
</div>