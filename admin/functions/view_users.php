<?php
@session_start();

if(!isset($_SESSION['user_name'])){
    echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";
} ?>

<div class="view-users-section">
    <h1>View All Users</h1>
    <table>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php include("database.php");
        $get_users = "select * from users";
        $run_users = mysqli_query($con,$get_users);

        while ($row_users = mysqli_fetch_array($run_users)) {
            $user_id = $row_users['user_id'];
            $user_name = $row_users['user_name'];
            $user_password = $row_users['user_password']; ?>

            <tr>
                <td><?php echo $user_id ?></td>
                <td><?php echo $user_name ?></td>
                <td><?php echo '*******' ?></td>
                <td><a href="index.php?edit_users=<?php echo $user_id; ?>">Edit</a></td>
                <td><a href="index.php?delete_user=<?php echo $user_id; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
