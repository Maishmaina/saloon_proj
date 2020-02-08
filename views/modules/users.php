
<!--Login modal-->
<div class="modal fade" id="login_modal">
    <div class="modal-dialog">
        <div class="modal-form login modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Login To Your Account</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="POST">

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div>
                    <input type="submit" name="login" class="btn btn-success btn-block" value="Login">

                    <div class="text-center mt-3">
                        <a href="#" data-toggle="modal" data-target="#register_modal" data-dismiss="modal">
                            Register
                        </a>
                        &nbsp;&nbsp; | &nbsp;&nbsp;
                        <a href="#" data-toggle="modal" data-target="#forgot_modal" data-dismiss="modal">
                            Forgot Password
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!--register modal-->
<div class="modal fade" id="register_modal">
    <div class="modal-dialog">
        <div class="modal-form register modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register Account</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Full Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label font-weight-bold">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <input type="submit" name="register" value="Register" class="btn btn-success btn-block">

                </form>
            </div>
        </div>
    </div>
</div>

<!--Logs in user-->
<?php
  $login = new UserController();
  $login->ctrUserLogin();
?>