<?php

class UserController {

    /**
     * :: LOGIN USERS
     */

    public function ctrUserLogin() {

        if (isset($_POST['login'])) {

            $table = "customers";
            $item = "c_email";
            $value = $_POST['c_email'];
            $response = UserModel::mdlShowUsers($table, $item, $value);

            if ($response['c_email'] == $_POST['c_email']) {
                $db_c_password  = $response["c_password"];

                if (password_verify($_POST['c_password'], $db_c_password)) {
                    $_SESSION["c_id"] = $response["c_id"];
                    $_SESSION["c_name"] = $response["c_name"];
                    $_SESSION["c_email"] = $response["c_email"];
                    $_SESSION["c_image"] = $response["c_image"];

                    echo "<script>alert('logged in Successful')</script>";
                    echo "<script>window.open('user_home.php', '_self')</script>";
                } else {
                    echo "<script>alert('logged in failed')</script>";
                }

            }
        }
    }

    /**
     * :: LOGIN USERS
     */

    public function ctrAddUser() {
        if (isset($_POST['register'])) {

            $c_name     = trim($_POST['c_name']);
            $c_email    = trim($_POST['c_email']);
            $c_gender   = trim($_POST['c_gender']);
            $c_location = trim($_POST['c_location']);
            $c_password = trim($_POST['c_password']);
            $c_password = password_hash($c_password, PASSWORD_BCRYPT, array('cost' => 05));

            $c_image     = $_FILES['c_image']['name'];
            $c_image_tmp = $_FILES['c_image']['tmp_name'];

            move_uploaded_file($c_image_tmp, "views/img/users/$c_image");


            $table = 'customers';
            $data = array("c_name" => $c_name,
                "c_email" => $c_email,
                "c_gender" => $c_gender ,
                "c_location"  => $c_location,
                "c_password"  => $c_password,
                "c_image"  => $c_image,
            );

            $response = UserModel::mdlAddUser($table, $data);

            if ($response == 'ok') {

                echo '
                  <script>alert("New Customer Added Successfully")</script>
                ';

                echo '
                  <script>window.open("user_home.php", "_self")</script>
                ';

            }

        }
    }


}