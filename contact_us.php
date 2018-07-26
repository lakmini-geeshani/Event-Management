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
        
        
        
<!--Section: Contact v.1-->
<section class="section m-b-4">

    <!--Section heading-->
    <h1 class="section-heading">Contact us</h1>
    <!--Section sescription-->
    <p class="section-description m-b-5">For information about our event organizations, please use the form below to contact us or any of the numbers listed below.
If you have an urgent matter or require an immediate response, please call us</p>

    <div class="row">

        <!--First column-->
        <div class="col-md-5">

            <!--Form with header-->
            <div class="card">

                <div class="card-block">
                    <!--Header-->
                    <div class="active">
                        <h3><i class="fa fa-envelope"></i> We are waiting for you .....</h3>
                    </div>

                    <p> DROP US A LINE</p>
                    <br>

                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="form3" class="form-control">
                        <label for="form3">Your name</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control" placeholder="@gmail.com">
                        <label for="form2">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-tag prefix"></i>
                        <input type="text" id="form32" class="form-control">
                        <label for="form32">subject</label>
                    </div>

                    

                    <div class="text-xs-center">
                        <button class="btn-primary">Submit</button>
                    </div>

                </div>

            </div>
            <!--/Form with header-->

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-7">

            <!--Google map-->
            <div id="map-container" class="z-depth-1-half map-container" style="height: 350px"></div>
            
            <script src="http://maps.google.com/maps/api/js"></script>
            
            
           
            <br>
            <!--Buttons-->
            <div class="row text-xs-center">
                <div class="col-md-4">
                    <a class="btn-floating btn-small mdb-color"><i class="fa fa-map-marker"></i></a>
                    <p>Rathnapura</p>
                    <p>Sri Lanka</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating btn-small mdb-color"><i class="fa fa-phone"></i></a>
                    <p>+ 057 2356789</p>
                    <p>Mon - Fri, 8:00-21:00</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating btn-small mdb-color"><i class="fa fa-envelope"></i></a>
                    <p>info@gmail.com</p>
                    <p>sale@gmail.com</p>
                </div>
            </div>

        </div>
        <!--/Second column-->

    </div>

</section>
<!--/Section: Contact v.1-->

        

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