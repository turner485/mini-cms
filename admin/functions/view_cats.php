<?php 
@session_start(); 

if(!isset($_SESSION['user_name'])){
    echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";
}
?>

<div class="view-categories-section">
    <h1>All Categories</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php

        include("database.php");

        $get_cats = "select * from categories";
        $run_cats = mysqli_query($con,$get_cats);
        $i=1;

        while ($row_cats = mysqli_fetch_array($run_cats)) {

                $cat_id = $row_cats['cat_id'];
                $cat_title = $row_cats['cat_title']; ?>

                <tr align="center">
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $cat_title; ?></td>
                    <td><a href="index.php?edit_cat=<?php echo $cat_id; ?>">Edit</a></td>
                    <td><a href="index.php?delete_cat=<?php echo $cat_id; ?>">Delete</a></td>
                </tr>
        <?php } ?>
    </table>
</div>

