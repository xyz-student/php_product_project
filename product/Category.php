<!-- 
  cat_id //  cat_title
 -->

<?php
include "header.php";
include "db.php";
if (isset($_POST['submit'])) {
    $cat_title = $_POST['cat_title'];
    $ins = "INSERT INTO `cat`(`cat_title`) VALUES ('$cat_title')";
    $q = mysqli_query($con, $ins);
}
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-7 alert alert-success  p-5 border">
            <form action="" method="post">
                <input type="text" class="form-control my-3" name="cat_title" placeholder="Add Category">
                <input type="submit" name="submit" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Table</h3>
            <table class="table table-hover table-info table-bordered ">
                <tr>
                    <th>sr no</th>
                    <th>category title</th>
                </tr>
                <?php
                $sel = "SELECT * from `cat`";
                $q = mysqli_query($con,$sel);
                while($row= mysqli_fetch_array($q)){

               
                ?>
                <tr>
                    <td><?php echo $row['cat_id']  ?></td>
                    <td><?php echo $row['cat_title']  ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>