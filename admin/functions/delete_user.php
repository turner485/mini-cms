<?php

include("database.php");

if(isset($_GET['delete_user'])) {

    $delete_id = $_GET['delete_user'];
    $delete_user = "delete from users where user_id='$delete_id'";
    $run_delete = mysqli_query($con,$delete_user);

    echo "<script>alert('User deleted')</script>";
    echo "<script>window.open('index.php?view_users','_self')</script>";

}
