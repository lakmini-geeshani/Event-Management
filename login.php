
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Event Management System</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>


    <!-- Start your project here-->

    <!--Navbar-->
        <nav class = "navbar navbar-dark bg-primary">

            <!--Collapse button-->
            <button class = "navbar-toggler hidden-sm-up" type = "button" data-toggle = "collapse" data-target = "#collapseEx2">
                <i class = "fa fa-bars"></i>
            </button>

            <div class = "container">

                <!--Collapse content-->
                <div class = "collapse navbar-toggleable-xs" id = "collapseEx2">
                    <!--Navbar Brand-->
                     <a class = "navbar-brand" href="Home.php"><b>evenTakers</b></a>
                    <!--Links-->
                    <ul class = "nav navbar-nav">
                        <li class = "nav-item active">
                            <a class = "nav-link" href="Home.php">Home <span class = "sr-only">(current)</span></a>
                        </li>
                        
                        
                        
                        <li class = "nav-item btn-group">
                            <a class = "nav-link dropdown-toggle" id = "dropdownMenu1" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">Category</a>
                            <div class = "dropdown-menu" aria-labelledby = "dropdownMenu1">
                                <a class = "dropdown-item" href="weddings.php">Weddings</a>
                                <a class = "dropdown-item" href="parties.php">Parties</a>
                                <a class = "dropdown-item" href="conferences.php">Conferences</a>
                             

                            </div>
                        </li>
                        <li class = "nav-item">
                            <a class = "nav-link" href="about_us.php">About Us</a>
                        </li>      
                        <li class = "nav-item">
                            <a class = "nav-link" href="contact_us.php">Contact Us</a>
                        </li>
                        <li class = "nav-item btn-group">
                            <a class = "nav-link dropdown-toggle" id = "dropdownMenu1" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">More</a>
                            <div class = "dropdown-menu" aria-labelledby = "dropdownMenu1">
                                <a class = "dropdown-item" href="login.php">Login</a>
                                <a class = "dropdown-item" href="signup.php">Sign Up</a>

                            </div>
                        </li>
                    </ul>
                    <!--Search form-->
                    <form class = "form-inline">
                        <input class = "form-control" type = "text" placeholder = "Search">
                    </form>
                </div>
                <!--/.Collapse content-->

            </div>

        </nav>
        <!--/.Navbar-->
        
        
        
<!--Form without header-->

<div class="card">
    
    <form action="log.php" method="post">
    <div class="card-block">
<br><br>
        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-lock"></i> Login</h3>
            <hr class="m-t-2 m-b-2">
        </div>
<br><br>
        <!--Body-->
        <div class="col-md-6">
            <i class="fa fa-envelope prefix"></i>
            
			<label for="form2">Your email</label>
			<input type="text" id="form2" class="form-control" name="email" placeholder="@gmail.com">
            
        </div>

        <div class="col-md-6">
            <i class="fa fa-lock prefix"></i>
           
			<label for="form4">Your password</label>
		   <input type="password" id="form4" class="form-control" name="password">
            
        </div>
<br><br>
        <div class="text-xs-center">
            <button class="btn btn-deep-purple" name="login">Login</button>
        </div>

    </div>
    </form>
    <?php

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
if($email && $password){
	//connect to database
	$connect=mysql_connect("localhost","root","") or die ("couldn't connect");
	mysql_select_db("eventdb") or die ("couldn't find the database");
	//get data from table of user
	$query=mysql_query("select*from register where email='$email'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0){// code to login
		while($row=mysql_fetch_assoc($query)){
			$dbemail=$row['email'];
			$dbpassword=$row['password'];
			}
		// check to see if they match!
				if($email==$dbemail && $password==$dbpassword)
				{  echo "<script type='text/javascript'>
alert('you are signing in..');
window.location.href='home.php';
</script>";?>

<?php

				@$_SESSION['email']==$email;
				}
				else{ 
				echo "incorrect password!";
				die( header('location:sing_in.php'));}
	}else
		echo"<script type='text/javascript'>
alert('you are signing in..');
window.location.href='home.php';
</script>"
;


	}else
die("please enter username & password");

}

?>

<br><br><br><br>
    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <p>Not a member? <a href="signup.php">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>
    </div>

</div>
<!--/Form without header-->
<br><br>
    <!--Footer-->
        
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="title">evenTakers</h5>
                <p>For more details.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">online booking</a></li>
                    <li><a href="#!">Corporate</a></li>
                    <li><a href="#!">Privacy</a></li>
                    <li><a href="#!">Terms & Conditions</a></li>
                    <li><a href="login.php">Admin Login</a></li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2015 Copyright: <a href="http://www.MDBootstrap.com"> eventakers@.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

   
    <!-- /Start your project here-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>