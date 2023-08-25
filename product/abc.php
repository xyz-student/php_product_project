 
<?php
include "header.php";
?>

<h4>Single Product</h4>
<div class="container">

    <div class="row">
        <?php
        include "db.php";
     
        
        include "db.php";
            $pro_id = $_GET['pro_id'];
            $select = "SELECT * from `pro` where `pro_id`='$pro_id'";
            $qu =mysqli_query($con,$select);
            while($row = mysqli_fetch_array($qu)){
        ?>
             
            <div class="col-12">
                <div class="content text-capitalize   ">
                    <h4 class="btn btn-success w-25 text-start"><?php echo $row['pro_name'] ?></h4>
                </div>
            </div>
           
        <?php } ?>
    </div>
</div>