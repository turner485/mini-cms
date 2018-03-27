<?php 
@session_start(); 

if(!isset($_SESSION['user_name'])){
	echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";
} ?>

<div class="view-post-section">
    <h1>All Posts</h1>
    <table>
        <tr>
            <th>Post ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    <?php include("database.php");
        $get_posts = "select * from posts";
        $run_posts = mysqli_query($con,$get_posts);
        $i=1;

        while ($row_posts = mysqli_fetch_array($run_posts)) {
            $post_id = $row_posts['post_id'];
            $post_title = $row_posts['post_title'];
            $post_author = $row_posts['post_author'];
            $post_image = $row_posts['post_image']; ?>

            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $post_title; ?></td>
                <td><?php echo $post_author; ?></td>
                <td><img src="uploaded_images/<?php echo $post_image; ?>" width="40" height="40"></td>
                <td><a href="index.php?edit_post=<?php echo $post_id; ?>">Edit</a></td>
                <td><a href="functions/delete_post.php?delete_post=<?php echo $post_id; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</div>


