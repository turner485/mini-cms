<?php 
@session_start(); 

if(!isset($_SESSION['user_name'])){
    echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";
	}
?>
    <div class="insert-category-section">
        <form action="index.php?insert_cat" method="post">
            <h1>Insert Category</h1>
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label">Category Name</label>
                    <input type="text" name="new_cat"/>
                    <input type="submit" name="insert_cat" value="Insert Category"/>
                </div>
            </div>
        </form>
    </div>

<?php

include("database.php");

    if(isset($_POST['insert_cat'])) {

        $cat_title = $_POST['new_cat'];

        if($cat_title=='') {

            echo "<script>alert('Please insert Cateogry Name')</script>";
            exit();

        } else {

            $insert_cat = "insert into categories (cat_title) values ('$cat_title')";

            $run_cat = mysqli_query($con,$insert_cat);


            echo "<script>alert('Category Successfully Added!')</script>";
            echo "<script>window.open('index.php?view_cat','_self')</script>";

        }
    }
