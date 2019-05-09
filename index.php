<?php 
	include "action.php";
//include "login.php";
?>

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
				<li style="width: 300px; left: 10px; top: 10px;"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top: 10px; left: 20px;"><button  class="btn btn-primary" id="search_btn" >Search</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span> </a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">SL.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $</div>
								</div>
							</div>
							<div class=" panel-body"></div>
							<div class="panel-footer"></div>
						</div>	
					</div>
				</li>
				<li><a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
					<ul class="dropdown-menu">
						<div style="width: 300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">
                                    <form method="post" action="">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="pass" name="">
									<p><br></p>
									<a href="" style="color: white; list-style: none;">Forgot Password</a><input type="submit" class="btn btn-success" style="float: right;" id="login" value="Login" name="">
                                    </form>
                                </div>
							</div>
						</div>
					</ul>
				</li>
				<li><a href=""><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
			</ul>
		</div>	
	</div>	
</div>
<p><br></p>
<p><br></p>
<p><br></p>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">fff</div>
		<div class="col-md-2">
			<div id="get_category">
			</div>
			 <!--<div class="nav nav-pills nav-stacked">
				<li class="active"><a href="#"><h4>Categories</h4></a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
			</div>-->

			<div id="get_brand">
			</div>
				<!--<div class="nav nav-pills nav-stacked">
				<li class="active"><a href="#"><h4>Brand</h4></a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
			</div>-->
		</div>
		<div class="col-md-8">
			<div class="panel panel-info">
				<div class="panel-heading">Products</div>
				<div class="panel-body">
					<div id="get_product">

					</div> 
					
					<!-- start of product display-->

					<!--<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading">iPhone</div>
							<div class="panel-body" style="width: 250px; height: 250px;" >
								<img src="products/iphone.jpg" width="169" height="225" />
							</div>
							<div class="panel-heading">$500.00
								<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
							</div>
						</div>
					</div>-->
					<!--/end of product display-->

				</div>
				<div class="panel-footer">&copy; 2018</div>
			</div>
		</div>
		<div class="col-md-1">gggg</div>
	</div>
</div>







<!-- 
	<script  src="js/jquery.min.js"></script>
-->

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
-->

    <script src="js/jquery1.11.3.js"></script> 
	<script  src="js/bootstrap.min.js"></script>
	<script  src="js/main.js"></script> 

</body>
</html>