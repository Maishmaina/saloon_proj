<?php

class UserController {

    /**
     * :: LOGIN USERS
     */

    public function ctrUserLogin() {

        if (isset($_POST['login'])) {

            $table = "customers";
            $item = "c_email";
            $value = $_POST['email'];
            $response = UserModel::mdlShowUsers($table, $item, $value);

            if ($response['c_email'] == $_POST['email']) {
                echo "<script>alert('logged in')</script>";
            } else {
                echo "<script>alert('failed')</script>";
            }
        }
    }

}