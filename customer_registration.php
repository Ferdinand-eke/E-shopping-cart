
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ferazi Store</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script  src=""></script>



</head>
<body>
<div class="navbar navbar-inverse navbar-fixed">
    <div class="container-fluid">
        <div class="navbar navbar-header">
            <a href="#" class="navbar-brand">Ferazi Store</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href=""><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href=""><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
             </ul>

        </div>
    </div>
    </div>
    <p><br/><p/>
    <p><br/><p/>
    <p><br/><p/>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="signup_msg">
                <!--                                Alert from signup -->
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Customer SignUp Form</div>
                    <div class="panel-body">

                        <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="f_name">First Name</label>
                                <input type="text" id="f_name" name="f_name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="f_name">Last Name</label>
                                <input type="text" id="l_name" name="l_name" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="repassword">Re-enter Password</label>
                                <input type="password" id="repassword" name="repassword" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="mobile">Mobile</label>
                                <input type="text" id="mobile" name="mobile" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="address1">Address Line 1</label>
                                <input type="text" id="address1" name="address1" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="address1">Address Line 2</label>
                                <input type="text" id="address2" name="address2" class="form-control">
                            </div>
                        </div>
                        <p><br/></p>
                        <div class="row">
                            <div class="col-md-12">

                                <input style="float:right;" value="Sign Up" type="button" id="signup_button" name="signup_button" class="btn btn-success">
                            </div>
                        </div>

                    </div>
                    </form>
                    <div class="panel-footer">this is footer</div>

                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>




<!--Js Scripts-->
<script src="js/jquery1.11.3.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/main.js"></script>
    </body>
</html>