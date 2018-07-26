

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
                    <a class = "navbar-brand" href="Home.php"><b> evenTakers</b></a>
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
        
        
<!--Form with header-->
<form action="action.php" method="post">
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="active">
            <h3><i class="fa fa-user"></i> Register:</h3>
        </div>

        <!--Body-->
        <div class="col-md-8">
            <p><i class="fa fa-user prefix"></i>            
              <label for="form3">Your name</label>
            </p>
            <p>
              <input type="text" id="form3" class="form-control" name="name"/>
            </p>
        </div>
        <div class="col-md-8">
            <i class="fa fa-envelope prefix"></i>
			<label for="form2">Your email</label>
            <input type="text" id="form2" class="form-control" name="email" placeholder="@gmail.com"/>
            
        </div>

        <div class="col-md-8">
            <i class="fa fa-lock prefix"></i>
			<label for="form4">Your password</label>
            <input type="password" id="form4" class="form-control" name="password"/>
            
        </div>
		<div class="col-md-8">
            <i class="fa fa-lock prefix"></i>
			 <label for="form4">Confirm Your password</label>
            <input type="password" id="form4" class="form-control" name="repassword"/>
           
        </div>
        <div class="col-md-8">
            <input type="submit"  name="signup" value="Sign Up"/>
            <hr>
       
    </div>
</div>
</form>
<?php 
     //connect to database
	$con=mysqli_connect("localhost","root","");
	 mysqli_select_db($con,"eventdb");
?>
<?php



if(isset($_POST['signup'])){
$name=strip_tags($_POST['name']);
$email=strip_tags($_POST['email']);;
$password=strip_tags($_POST['password']);
$repassword=strip_tags($_POST['repassword']);
//check for existance
if($name && $email && $password && $repassword){
    if($password==$repassword){//check char length of username and fullname
	    if(strlen($name)>25){
		echo "Length of user name or full name is too long!";
		}
		else
		{//check password
		   if(strlen($password)>25 || strlen($password)<3){
		   echo "Password must be between 3 and 25 characters";
		   } 
		  
		   else{
		   // encrypt password
		   $password=md5($password);
		   $repassword=md5($repassword);
		   //open database ,connection open
		   
		   $queryreg=mysql_query("insert into register values('','$name','$email','$password','$repassword')");
		   //die( header("location:home.php"));
		  
		   }}}
		   else echo "your password not match!";}
		   else
		      echo "<script type='text/javascript'>
alert('Please fill all fields');
</script>";}
		   
?>




<!--/Form with header-->



         <!--Footer-->
        
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="title"> evenTakers</h5>
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

