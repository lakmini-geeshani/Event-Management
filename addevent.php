
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
    <script type="text/javascript">
var password;
password=prompt("what is admin password?"," ");
if(password==12345 || password==4567 || password==6789){alert("welcome");}else{alert("You have not permission");
window.location.href="home.php";
};

</script>
    
    
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
        
        
        
         <a class="btn btn-blue-grey" href="new.php"><i class="fa fa-pencil"></i> Add event</a>
           <!-- <a class="btn btn-blue-grey" href="updatebook.php">Update <i class="fa fa-pencil"></i></a>-->
            <a class="btn btn-blue-grey" href="deletebook.php"><i class="fa fa-times"></i> Delete</a>
        

        
        
    
 
    
    <br>
    
		   
<table class="table table-striped table-inverse">
    <thead>
        <tr>
            <th>id</th>
            <th>category</th>
            <th>leader</th>
            <th>customer</th>
            <th>venue</th>
            <th>date</th>
        </tr>
         </thead>
    
</table>


         <?php
		 

        $con=mysqli_connect("localhost","root","") or die("couldn't connect!");
		   mysqli_select_db($con,"eventdb") or die ("couldn't find db");
		   $sql="select id,category,leader,customer,venue,date from event";
		   $query=mysqli_query($con,$sql);?>
		   
       <?php   if($query){
		   while($row=mysqli_fetch_assoc($query)){
			   echo '<div class="table-responsive">';
			 echo '<table border="1" width="100%" align="center" class="table table-striped">';
			 echo '<center>';
			 echo '<tbody>';
			 echo '<tr align="center">';
			 echo '<td width="10%">';
	 echo "<font size='+2' color='#0000'>".$row['id']."</font>";echo '</td>';
	 echo '<td width="18%" align="center">';
			   echo "<font size='+2' color='#0000'>".$row['category']."</font>";
			   echo '</td>';
			   echo '<td width="18%" align="center">';
			   echo "<font size='+2' color='#0000'>".$row['leader']."</font>";
			   echo '</td>';
			   echo '<td width="18%" align="center">';
			   echo "<font size='+2' color='#0000'>"."".$row['customer']."</font>";
			   echo '</td>';
			   echo '<td width="18%" align="center">';
			     echo "<font size='+2' color='#0000'>"."".$row['venue']."</font>";
				 echo '</td>';
				 echo '<td width="18%" align="center">';
			    echo "<font size='+2' color='#0000'>"."".$row['description']."</font>"."<br>";
				echo '</td>';
				  echo '</tr>';
				  echo '</tbody>';
				  echo '</center>';
                 echo'</table>';
				 echo'</div>';
			  }
			   
			   }
			  
		
		
		?>
		 
   
   

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