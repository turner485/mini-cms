
    <?php

    include("includes/database.php");

    $get_cats = "select * from categories";

    $run_cats = mysqli_query($con, $get_cats);

    while ($cats_row=mysqli_fetch_array($run_cats)){
        $cat_id=$cats_row['cat_id'];
        $cat_title=$cats_row['cat_title'];
    }


    ?>

    <nav class="navigation-bar navbar navbar-toggleable-md">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="navigation-bar-section clearfix">
                <ul class="navbar-nav ul-navigation">
                    <li class="nav-item active">
                        <a href="blog_posts.php" class="nav-link">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a href="channel-1.php"class="nav-link">Channel 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="channel-1.php" class="nav-link">Channel 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="channel-1.php" class="nav-link">Channel 3</a>
                    </li>
                    <li class="nav-item">
                        <a href="channel-1.php" class="nav-link">Channel 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

