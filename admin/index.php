<?php
session_start(); 

if(!isset($_SESSION['user_name'])){
	echo "<script>window.open('login.php?not_authorize=You are not Authorize to access!','_self')</script>";
}

?>
<!DOCTYPE HTML>

<?php include_once __DIR__ . '/includes/head.php'; ?>

<html>
    <body class="administration-area">
        <section class="admin-section">
            <div class="container-fluid">
                <div class="admin-section-wrapper">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="left-block clearfix">
                                <h3>Manage Content</h3>
                                <ul class="crud-list">
                                    <li>
                                        <a href="index.php?insert_post">Insert New Post</a>
                                    </li>

                                    <li>
                                        <a href="index.php?view_posts">View all Posts</a>
                                    </li>

                                    <li>
                                        <a href="index.php?insert_cat">Insert New Category</a>
                                    </li>

                                    <li>
                                        <a href="index.php?view_cats">View all Categories</a>
                                    </li>

                                    <li>
                                        <a href="index.php?view_users">View All Users</a>
                                    </li>

                                    <li>
                                        <a href="index.php?insert_user">Insert User</a>
                                    </li>

                                    <li>
                                        <a href="logout.php">Admin Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="right-block">
                                <h2><?php echo @$_GET['logged']; ?></h2>
                                <h4> User Logged In (<?php echo $_SESSION['user_name']; ?>)</h4>

                                <?php if(isset($_GET['insert_post'])){

                                    include("functions/insert_post.php");

                                }

                                if(isset($_GET['view_posts'])){

                                    include("functions/view_posts.php");

                                }

                                if(isset($_GET['edit_post'])){

                                    include("functions/edit_post.php");

                                }

                                if(isset($_GET['insert_cat'])){

                                    include("functions/insert_cat.php");

                                }

                                if(isset($_GET['view_cats'])){

                                    include("functions/view_cats.php");

                                }

                                if(isset($_GET['delete_cat'])){

                                    include("functions/delete_cat.php");

                                }

                                if(isset($_GET['edit_cat'])){

                                    include("functions/edit_cat.php");

                                }

                                if(isset($_GET['edit_users'])){

                                    include("functions/edit_users.php");

                                }

                                if(isset($_GET['delete_user'])){

                                    include("functions/delete_user.php");

                                }

                                if(isset($_GET['view_users'])){

                                include("functions/view_users.php");

                                }

                                if(isset($_GET['insert_user'])){

                                include("functions/insert_user.php");

                                } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>


