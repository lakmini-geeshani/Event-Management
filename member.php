



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Library Management System</title>

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
    
    
    <nav class = "navbar navbar-dark bg-primary">

            <!--Collapse button-->
            <button class = "navbar-toggler hidden-sm-up" type = "button" data-toggle = "collapse" data-target = "#collapseEx2">
                <i class = "fa fa-bars"></i>
            </button>

            <div class = "container">

                <!--Collapse content-->
                <div class = "collapse navbar-toggleable-xs" id = "collapseEx2">
                    <!--Navbar Brand-->
                    <a class = "navbar-brand">Library Management System</a>
                    <!--Links-->
                    <ul class = "nav navbar-nav">
                        <li class = "nav-item active">
                            <a class = "nav-link" href="Home.php">Home <span class = "sr-only">(current)</span></a>
                        </li>
                        
                        
                        
                        <li class = "nav-item btn-group">
                            <a class = "nav-link dropdown-toggle" id = "dropdownMenu1" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">Category</a>
                            <div class = "dropdown-menu" aria-labelledby = "dropdownMenu1">
                                <a class = "dropdown-item" href="books.php">Action &  Adventure</a>
                                <a class = "dropdown-item" href="books.php">Drama</a>
                                <a class = "dropdown-item" href="books.php">Romance</a>
                                <a class = "dropdown-item" href="books.php">Children's</a>
                                <a class = "dropdown-item" href="books.php">Science</a>
                                <a class = "dropdown-item" href="books.php">History</a>
                                <a class = "dropdown-item" href="books.php">Poetry</a>
                                <a class = "dropdown-item" href="books.php">Health</a>
                                <a class = "dropdown-item" href="books.php">Business & Economics</a>
                                <a class = "dropdown-item" href="books.php">Music</a>

                            </div>
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
    
    
    
            <a class="btn btn-blue-grey"><i class="fa fa-user"></i> Add member</a>
            <a class="btn btn-blue-grey">Update <i class="fa fa-pencil"></i></a>
            <a class="btn btn-blue-grey"><i class="fa fa-times"></i> Delete</a>
    
    
    <table class="table">
    <thead>
        <tr>
            <th>Member ID</th>
            <th>Name</th>
            <th>email</th>
            <th>Password</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Abby</td>
            <td>Barrett</td>
            <td>@abbeme</td>
            
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Danny</td>
            <td>Collins</td>
            <td>@dennis</td>
            
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Clara</td>
            <td>Ericson</td>
            <td>@claris</td>
            
        </tr>

    </tbody>
</table>

    

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

