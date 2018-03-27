<!DOCTYPE HTML>
<html>

<?php include_once __DIR__ . '/includes/head.php'; ?>

<body class="post-content-body">
<?php include_once __DIR__ . '/includes/header.php'; ?>
<?php include_once __DIR__ . '/includes/navbar.php'; ?>
<section class="post-content-section section">
    <div class="container-fluid">
        <div class="post-section-wrapper">
            <div class="row">
                <div class="col-sm-12">
                   <?php if (isset($_GET['post'])) {

                       $post_id = $_GET['post'];

                       $get_posts = "select * from posts where post_id='$post_id'";

                       $run_posts = mysqli_query($con, $get_posts);

                       while ($row_posts = mysqli_fetch_array($run_posts)) {

                           $post_title = $row_posts['post_title'];
                           $post_date = $row_posts['post_date'];
                           $post_author = $row_posts['post_author'];
                           $post_image = $row_posts['post_image'];
                           $post_content = $row_posts['post_content'];

                           $url = "details.php?post=" . $post_id; ?>
                           <div class="container-fluid">
                               <div class="row">
                                   <div class="post-content">
                                       <div class="col-sm-8">
                                           <h1><?php echo $post_title ?></h1>
                                           <span><b>Posted by <?php echo $post_author ?> - <?php echo $post_date ?></b></span>
                                           <p><?php echo $post_content ?></p>
                                       </div>

                                       <div class="col-sm-4">
                                           <img src="admin/uploaded_images/<?php echo $post_image ?>" class="img-responsive"/>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       <?php }
                   } ?>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<?php include_once __DIR__ . '/includes/footer.php'; ?>


