<?php
@session_start();

if(!isset($_SESSION['user_name'])){
    echo "<script>window.open('../login.php?not_authorize=You are not Authorize to access!','_self')</script>";
}
?>

<div class="insert-users-section">
    <form action="index.php?insert_user" method="post">
        <h1>Insert New User</h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label class="control-label">User Name</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="new_user"/>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label class="control-label">Password</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="Password" name="new_password"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group submit-btn">
                <div class="col-sm-12">
                    <input type="submit" name="insert_user" value="Insert User"/>
                </div>
            </div>
        </div>
    </form>
</div>

<?php

include("database.php");

    if(isset($_POST['insert_user'])) {

        $new_user = $_POST['new_user'];
        $new_password = $_POST['new_password'];

        if ($new_user=='') {
            echo "<script>alert('Please fill in new user credentials')</script>";
            exit();
        } else {

            $insert_user = "insert into users (user_name, user_password) values ('$new_user', '$new_password')";

            $run_user = mysqli_query($con,$insert_user);

            echo "<script>alert('User Successfully Added!')</script>";
            echo "<script>window.open('index.php?view_users','_self')</script>";
        }

    }
