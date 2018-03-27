<?php 
@session_start(); 

if(!isset($_SESSION['user_name'])){
	echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";
}
?>
    <script>tinymce.init({ selector:'textarea' });</script>

    <div class="insert-post-section">
        <h1>Insert</h1>
        <div class="container-fluid">
            <form action="index.php?insert_post" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Post Title</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="post_title" placeholder="Post Title..." class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Post Category</label>
                        </div>
                        <div class="col-sm-10">
                            <select name="cat"><option value="null">Select a Category</option>

                                <?php include("database.php");

                                $get_cats = "select * from categories";
                                $run_cats = mysqli_query($con,$get_cats);

                                while ($cats_row = mysqli_fetch_array($run_cats)) {

                                    $cat_id=$cats_row['cat_id'];
                                    $cat_title=$cats_row['cat_title']; ?>

                                    <option value="<?php echo $cat_id ?>"><?php echo $cat_title ?></option>";
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
                            <input type="text" name="post_author" placeholder="Post Author..." class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Post Image</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="file" name="post_image" size="60"/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Post Content</label>
                        </div>
                        <div class="col-sm-10">
                            <textarea name="post_content" placeholder="Enter Content Here..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group submit-btn">
                        <div class="col-sm-12">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


<?php

    if(isset($_POST['submit'])){

         $post_title = $_POST['post_title'];
         $post_date = date('m-d-y');
         $post_cat = $_POST['cat'];
         $post_author = $_POST['post_author'];
         $post_image = $_FILES['post_image']['name'];
         $post_image_tmp = $_FILES['post_image']['tmp_name'];
         $post_content = addslashes($_POST['post_content']);

        if($post_title=='' OR $post_cat=='null' OR $post_author=='' OR $post_image=='' OR $post_content=='') {

            echo "<script>alert('Please fill in all the fields')</script>";
            exit();

        } else {
            move_uploaded_file($post_image_tmp,"uploaded_images/$post_image");
            $insert_posts = "insert into posts (category_id,post_title,post_date,post_author,post_image,post_content) values ('$post_cat','$post_title','$post_date','$post_author','$post_image','$post_content')";
            $run_posts = mysqli_query($con,$insert_posts);

                echo "<script>alert('Post Has been Published!')</script>";
                echo "<script>window.open('index.php?view_posts','_self')</script>";

            }
        }
    ?>

