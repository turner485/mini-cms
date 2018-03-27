<?php
@session_start();

if(!isset($_SESSION['user_name'])){

    echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";

}

include("database.php");

    if (isset($_GET['edit_users'])) {

        $edit_id = $_GET['edit_users'];

        $get_users = "select * from users where user_id='$edit_id'";

        $run_users = mysqli_query($con,$get_users);

        while($row_users = mysqli_fetch_array($run_users)) {

            $user_id = $row_users['user_id'];
            $user_name = $row_users['user_name'];
            $user_password = $row_users['user_password'];

        }

    }
?>

<div class="edit-users-section">
    <form action="" method="post">
        <h1>Change User Password</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label class="control-label">User Name</label>
                    </div>
                    <div class="col-sm-8">
                        <p><?php echo $user_name ?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label class="control-label">Password</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="Password" name="update_password" placeholder="*******"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group submit-btn">
                <div class="col-sm-12">
                    <input type="submit" name="edit_users" value="Insert User"/>
                </div>
            </div>
        </div>
    </form>
</div>

<?php

    if(isset($_POST['edit_users'])) {
        $update_id = $user_id;
        $user_name = $user_name;
        $user_password = $_POST['update_password'];

        if($user_password == '') {

            echo "<script>alert('Please fill in new user credentials')</script>";
            exit();

        } else {

            $update_user = "update users set user_name = '$user_name', user_password = '$user_password' where user_id ='$user_id'";
            $run_update = mysqli_query($con,$update_user);

            echo "<script>alert('User Updated!')</script>";
            echo "<script>window.open('index.php?view_users','_self')</script>";

        }
    }
