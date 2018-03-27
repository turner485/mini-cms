        <?php

        if(!isset($_GET['cat'])) {

            $get_posts = "select * from posts order by post_id ASC LIMIT 0,6";

            $run_posts = mysqli_query($con, $get_posts);

                while ($row_posts = mysqli_fetch_array($run_posts)) {
                    $post_id = $row_posts['post_id'];
                    $post_title = $row_posts['post_title'];
                    $post_date = $row_posts['post_date'];
                    $post_author = $row_posts['post_author'];
                    $post_image = $row_posts['post_image'];
                    $post_content = substr($row_posts['post_content'], 0, 220);

                    $url = "details.php?post=" . $post_id;

                    ?>

                    <div class="row">
                        <div class="single-block-wrapper clearfix">
                            <div class="col-sm-12">
                                <div class="block">
                                    <div class="col-sm-7">
                                        <h2><?php echo $post_title ?></h2>
                                        <span>Posted by <?php echo $post_author ?> - <?php echo $post_date ?></span>
                                        <p><?php echo $post_content ?></p>
                                        <b><a href="<?php echo $url ?>">Read More</a></b>
                                    </div>

                                    <div class="col-sm-5">
                                        <img src="admin/uploaded_images/<?php echo $post_image ?>" class="img-responsive"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

        <?php } else if (isset($_GET['cat'])) {

            $cat_id = $_GET['cat'];

            $get_posts = "select * from posts where category_id='$cat_id'";

            $run_posts = mysqli_query($con, $get_posts);

            while ($row_posts = mysqli_fetch_array($run_posts)) {
                $post_id = $row_posts['post_id'];
                $post_title = $row_posts['post_title'];
                $post_date = $row_posts['post_date'];
                $post_author = $row_posts['post_author'];
                $post_image = $row_posts['post_image'];
                $post_content = substr($row_posts['post_content'], 0, 220);

                ?>

                <div class="row">
                    <div class="single-block-wrapper">
                        <div class="col-sm-12">
                            <div class="block">
                                <h2><a href="<?php echo $url ?>"><?php echo $post_title ?></a></h2>
                                <span><b> Posted by <?php echo $post_author?> - <?php echo $post_date ?></b></span>
                                <img src="admin/news_images/<?php echo $post_image?>" width="100" height="100"/>
                                <p><?php echo $post_content ?><a href="<?php echo $url ?>">Read More</a></p><br />
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>






