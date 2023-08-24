<!-- 
    sub_id // cat_title // sub_cat_title // cat_id(same)
 -->

<?php
include "header.php";
include "db.php";
if (isset($_POST['submit'])) {
   
    $cat_title = $_POST['cat_title'];
    $sub_cat_title = $_POST['sub_cat_title'];
    $ins = "INSERT INTO `sub_cat`(`cat_id`,`sub_cat_title`) VALUES ('$cat_title','$sub_cat_title')";
    $q = mysqli_query($con, $ins);
   
 
    
    
}
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-7 alert alert-success  p-5 border">
            <form action="" method="post">
                <input type="text" class="form-control my-3" name="sub_cat_title" placeholder="Add SUB-Category">

                <label for="">Select Category</label>
                <select class="form-select" name="cat_title" id="">
                    <option value="">---select---</option>

                    <?php
                    $select = "select * from `cat`";
                    $query = mysqli_query($con, $select);
                    
                    while ($row = mysqli_fetch_array($query)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                    ?>
                        <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_title'] ?></option>

                    <?php } ?>
                </select>

                <input type="submit" name="submit" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>