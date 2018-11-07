<?php include_once('header.php'); ?>

<body>
    
<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" action="">
                            <div class="form-group">
                                <br>
                                <h3>Login Form</h3>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-success btn-md" value="Login">
                                <input type="submit" name="submit" class="btn btn-secondary btn-md" value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include_once('footer.php'); ?>