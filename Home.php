
<!DOCTYPE html>
<html lang = "en">

    <head>

        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv = "x-ua-compatible" content = "ie=edge">

        <title>Event Management System</title>

        <!--Font Awesome -->
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <!--Bootstrap core CSS -->
        <link href = "css/bootstrap.min.css" rel = "stylesheet">

        <!--Material Design Bootstrap -->
        <link href = "css/mdb.min.css" rel = "stylesheet">

        <!--Your custom styles (optional) -->
        <link href = "css/style.css" rel = "stylesheet">
        <style rel = "stylesheet">
            /* TEMPLATE STYLES */
            /* Necessary for full page carousel */

            html,
            body,
            .view {
                height: 100%;
            }
            /* Navigation */

            .navbar {
                background-color: transparent;
            }

            .scrolling-navbar {
                -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
                -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
                transition: background .5s ease-in-out, padding .5s ease-in-out;
            }

            .top-nav-collapse {
                background-color: #1C2331;
            }

            footer.page-footer {
                background-color: #1C2331;
                margin-top: 0;
            }

            @media only screen and (max-width: 768px) {
                .navbar {
                    background-color: #1C2331;
                }
            }
            /* Carousel */

            .carousel,
            .carousel-item,
            .active {
                height: 100%;
            }

            .carousel-inner {
                height: 100%;
            }

            .carousel-item:nth-child(1) {
                background-image: url("img/lightbox/image/3.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            .carousel-item:nth-child(2) {
                background-image: url("img/lightbox/image/c6.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            .carousel-item:nth-child(3) {
                background-image: url("img/lightbox/image/cc.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            /* Caption */

            .flex-center {
                color: #0074d9;
            }

            @media (min-width: 776px) {
                .carousel .view ul li {
                    display: inline;
                }
                .carousel .view .full-bg-img ul li .flex-item {
                    margin-bottom: 1.5rem;
                }
            }
        </style>


    </head>

    <body>



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
                    <a class = "navbar-brand"><b>evenTakers</b></a>
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
                      
                         <li class = "nav-item">
                            <a class = "nav-link" href="add_book.php"alt="admin only">ADD*</a>
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


        <!--Carousel Wrapper-->
        <div id = "carousel-example-2" class = "carousel slide carousel-fade" data-ride = "carousel">
            <!--Indicators-->
            <ol class = "carousel-indicators">
                <li data-target = "#carousel-example-2" data-slide-to = "0" class = "active"></li>
                <li data-target = "#carousel-example-2" data-slide-to = "1"></li>
                <li data-target = "#carousel-example-2" data-slide-to = "2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class = "carousel-inner" role = "listbox">
                <!--First slide-->
                <div class = "carousel-item active">
                    <!--Mask color-->
                    <div class = "view hm-black-light">
                        <img src = "img/lightbox/image/3.jpg" class = "img-fluid" alt = "">
                        <div class = "full-bg-img">
                        </div>
                    </div>
                    <!--Caption-->
                    <div class = "carousel-caption">
                        <div class = "animated fadeInDown">
                            <h3 class = "h3-responsive">A Happy marriage is the union of two good forgivers...</h3>
                            <p>Robert Quillen</p>
                        </div>
                    </div>
                    <!--Caption-->
                </div>
                <!--/First slide-->

                <!--Second slide-->
                <div class = "carousel-item">
                    <!--Mask color-->
                    <div class = "view hm-black-strong">
                        <img src = "img/lightbox/image/c6.jpg" class = "img-fluid" alt = "">
                        <div class = "full-bg-img">
                        </div>
                    </div>
                    <!--Caption-->
                    <div class = "carousel-caption">
                        <div class = "animated fadeInDown">
                            <h3 class = "h3-responsive">Dream big and have a wonderful day!!!</h3>
                            <br>
                        </div>
                    </div>
                    <!--Caption-->
                </div>
                <!--/Second slide-->

                <!--Third slide-->
                <div class = "carousel-item">
                    <!--Mask color-->
                    <div class = "view hm-black-slight">
                        <img src = "img/lightbox/image/cc.jpg" class = "img-fluid" alt = "">
                        <div class = "full-bg-img">
                        </div>
                    </div>
                    <!--Caption-->
                    <div class = "carousel-caption">
                        <div class = "animated fadeInDown">
                            <h3 class = "h3-responsive">If you wish to survive you need to cultivate a strong mental attitude...</h3>
                            <p>Avatar(2009)</p>
                        </div>
                    </div>
                    <!--Caption-->
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->

            <!--Controls-->
            <a class = "left carousel-control" href = "#carousel-example-2" role = "button" data-slide = "prev">
                <span class = "icon-prev" aria-hidden = "true"></span>
                <span class = "sr-only">Previous</span>
            </a>
            <a class = "right carousel-control" href = "#carousel-example-2" role = "button" data-slide = "next">
                <span class = "icon-next" aria-hidden = "true"></span>
                <span class = "sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
        
        <!--/.Main layout-->
        
      
        <!--Footer-->
        
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
	
        
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




       


        <!--Start your project here-->


        <!--/Start your project here-->


        <!--SCRIPTS -->

        <!--JQuery -->
        <script type = "text/javascript" src = "js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>


    </body>

</html>