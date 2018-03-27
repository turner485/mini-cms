<?php 
@session_start(); 

if(!isset($_SESSION['user_name'])){
	
echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";

}

include("database.php");
	
	if(isset($_GET['edit_cat'])) {

		$edit_id = $_GET['edit_cat']; 
		
		$get_cat = "select * from categories where cat_id='$edit_id'";
		
		$run_cat_new = mysqli_query($con,$get_cat); 
		
		while ($row_cat = mysqli_fetch_array($run_cat_new)) {

			$cat_id = $row_cat['cat_id'];
			$cat_title = $row_cat['cat_title'];
			
        }
    }
?>

    <div class="edit-category-section">
        <form action="index.php?insert_cat" method="post">
            <h1>Update Category</h1>
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label">Category Name</label>
                    <input type="text" name="new_cat" placeholder="<?php echo $cat_title; ?>"/>
                    <input type="submit" name="update_cat" value="Update Category"/>
                </div>
            </div>
        </form>
    </div>

<?php

    if(isset($_POST['update_cat'])) {

        $cat_title = $_POST['new_cat'];

        if($cat_title=='') {

            echo "<script>alert('Please insert Category Name')</script>";

        } else {

            $update_cat = "update categories set cat_title='$cat_title' where cat_id='$cat_id'";

            $run_update = mysqli_query($con,$update_cat);

            echo "<script>alert('Category Updated!')</script>";
            echo "<script>window.open('index.php?view_cats','_self')</script>";

        }
    }
