<?php @session_start(); 

if(!isset($_SESSION['user_name'])) {
	echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";
} ?>

    <script>tinymce.init({selector:'textarea'});</script>

    <?php

        include("database.php");

    	if(isset($_GET['edit_post'])){
    		$edit_id = $_GET['edit_post'];
    		$select_post = "select * from posts where post_id='$edit_id'";
    		$run_query = mysqli_query($con,$select_post); 
    		
    		while ($row_post=mysqli_fetch_array($run_query)) {
    			$post_id = $row_post['post_id']; 
    			$title = $row_post['post_title']; 
    			$post_cat = $row_post['category_id']; 
    			$author = $row_post['post_author']; 
    			$keywords = $row_post['post_keywords']; 
    			$image = $row_post['post_image']; 
    			$content = $row_post['post_content'];	

            }
        }
    ?>
    <div class="edit-post-section">
        <div class="container-fluid">
            <form action="" method="post" enctype="multipart/form-data">
                <h1>Update Post</h1>
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Post Title</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="post_title" value="<?php echo $title; ?>" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Post Category</label>
                        </div>
                        <div class="col-sm-10">
                            <select name="cat">

                            <?php
                                $get_cats = "select * from categories where cat_id='$post_cat'";
                                $run_cats = mysqli_query($con,$get_cats);

                                while ($cats_row=mysqli_fetch_array($run_cats)) {

                                    $cat_id=$cats_row['cat_id'];
                                    $cat_title=$cats_row['cat_title']; ?>

                                    <option value='<?php echo $cat_id ?>'><?php echo $cat_title ?></option>
                                    <?php

                                    $get_more_cats = "select * from categories";

                                    $run_more_cats = mysqli_query($con,$get_more_cats);

                                    while($row_more_cats=mysqli_fetch_array($run_more_cats)) {

                                        $cat_id=$row_more_cats['cat_id'];
                                        $cat_title=$row_more_cats['cat_title']; ?>

                                        <option value='<?php echo $cat_id ?>'><?php echo $cat_title ?></option>
                                    <?php } ?>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Post Author</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="post_author" value="<?php echo $author; ?>" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Post Content</label>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="post_content" value=""><?php echo $content; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group submit-btn">
                        <div class="col-sm-12">
                            <input type="submit" name="update" value="Update Post">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php 
        if(isset($_POST['update'])) {

             $update_id = $post_id;
             $post_title = $_POST['post_title'];
             $post_date = date('m-d-y');
             $post_cat1 = $_POST['cat'];
             $post_author = $_POST['post_author'];
             $post_content = addslashes($_POST['post_content']);

            if ($post_title=='' OR $post_cat=='null' OR $post_author=='' OR  $post_content=='') {


            } else {

                $update_posts = "update posts set category_id='$post_cat1',post_title='$post_title',post_date='$post_date',post_author='$post_author',post_content='$post_content' where post_id='$update_id'";
                $run_update = mysqli_query($con,$update_posts);

                echo "<script>alert('Post Has been Updated!')</script>";
                echo "<script>window.open('index.php?view_posts','_self')</script>";

            }
        }
