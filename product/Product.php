<!-- 
    pro_id // pro_name // sub_cat_name // cat_title 
 -->


 

<?php
include "header.php";
include "db.php";
if (isset($_POST['submit'])) {
   
    $cat_title = $_POST['cat_title'];
    $sub_cat_title = $_POST['sub_cat_title'];
    $sub_cat_title_name = $_POST['sub_cat_title_name'];
    $pro_name = $_POST['pro_name'];
    // $cat_id = $_POST['cat_id'];
    $ins = "INSERT INTO `pro`( `sub_cat_title`,`pro_name`,`cat_title`,`sub_cat_title_name`) VALUES ( '$sub_cat_title','$pro_name','$cat_title','$sub_cat_title_name')";
    $q = mysqli_query($con, $ins);
   
 
    
    
}
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-7 alert alert-danger  p-5 border">
            <form action="" method="post">
                <h4>Add Products</h4>
                <input type="text" class="form-control my-3" name="pro_name" placeholder="Products Name ">
                <input type="text" class="form-control my-3" name="sub_cat_title_name" placeholder="sub category name ">

                <label for="">Select Category</label>
                <select class="form-select mb-3" name="cat_title" id="">
                    <option value="">---Category---</option>

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

                <label for="">Select Sub-Category</label>

                <select class="form-select " name="sub_cat_title" id="">
                    <option value="">--- Sub-Category---</option>

                    <?php
                    $select = "select * from `sub_cat`";
                    $query = mysqli_query($con, $select);
                    
                    while ($row = mysqli_fetch_array($query)) {
                        $sub_id = $row['sub_id'];
                        $sub_cat_title = $row['sub_cat_title'];
                    ?>
                        <option value="<?php echo $row['sub_id'] ?>"><?php echo $row['sub_cat_title'] ?></option>

                    <?php } ?>
                </select>

                <input type="submit" name="submit" class="btn btn-danger mt-3">
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
                    <th>sub_cat_title</th>
                    <th>Sub Cat Title</th>
                </tr>
                <?php
                $sel = "SELECT * from `pro` ";
                $q = mysqli_query($con,$sel);
                while($row= mysqli_fetch_array($q)){

               
                ?>
                <tr>
                    <td><?php echo $row['pro_id']  ?></td>
                    <td><?php echo $row['pro_name']  ?></td>
                    <td><?php echo $row['sub_cat_title']  ?></td>
                    <td><?php echo $row['sub_cat_title_name']  ?></td>
                   </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>