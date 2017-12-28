<html>
<head>
	<title>Discussion forum</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body >
	<!-- Navigation style="background-image: url('images/accet.jpg');"-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">ACCET DISCUSSION FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<!--
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""><span class="glyphicon glyphicon-list"></span> Topics</a></li>
                </ul>
            -->
                <div>
					<form class="navbar-form navbar-right" method="POST"role="search" action="pages/login.php">
					<div class="form-group">
					<input type="text" class="form-control" name="username"placeholder="Username">
					<input type="password" class="form-control" name="password"placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success">Login</button>
					</form>
				</div>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
			<div class="container" style="margin:8% auto;">
			
				<div class="col-sm-4 col-lg-3">
					<h1>ACCET DISCUSSION FORUM</h1>
					<h2>Discuss with your friends</h2>
					<p>Feel free to discuss the related interesting subject related topics
					 or whatever u like related college. Feel free to contact the developer for 
					 queries.</p>
					 <p>Made with love of accet</p>
				</div>
				 <div class="col-sm-5 col-lg-4 pull-right">
                   <div class="row">
                   
						<form method="POST" class="form-signin" action="functions/register.php">
								<h3 class="text-center">Signup Here!</h3>
							<input type="text" name="fname"placeholder="First Name"class="form-control" required>
							<input type="text" name="lname"placeholder="Last Name"class="form-control" required>
							<select class="form-control" name="gender"required>
								<option>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							<input type="text" placeholder="Username" name="username"class="form-control" required>
							<input type="password" placeholder="Password" name="password" class="form-control" required>
							<input type="submit" value="Signup" class="btn btn-success" style="width:100%;">
						</form>
				</div>
			</div>
			</div>
		
<hr>
    <div class="footer">
		<nav align="center">
			<ul class="nav navbar-nav">
				<!--<li><a href="">About</a></li>-->
				<li><a href="about.html">Developers</a></li>
				<li><a href="">Terms and Conditions</a></li>
			</ul>
		</nav>
	</div></div>
<?php include 'footer.php'; ?>
</body>
</html>