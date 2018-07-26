<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 
   //connect to database
	$con=mysqli_connect('localhost','root','');
	 mysqli_select_db($con,'eventdb');
?>
<?php
if(isset($_POST['addbook'])){
$description="";
	
$category=$_POST['category'];
$leader=$_POST['leader'];
$customer=$_POST['customer'];
$venue=$_POST['venue'];
$description=$_POST['description'];
	 //insert data to table of submitform
					 if($leader==""){
		echo "<script type='text/javascript'>
window.alert('Fill all blanks');
window.location.href='new.php';
</script>";}
	
	 
	 else{
$qry="insert into event(category,leader,customer,venue,description) values('$category','$leader','$customer','$venue','$description')";
	 $result=!mysqli_query($con,$qry);
	

	  if($result){echo 
	  "<script type='text/javascript'>
window.alert('data was submitted');
window.location.href='new.php';
</script>";
	 }
	 	else{ 		
				echo"<script type='text/javascript'>
				alert('successfuly data added!');
				window.location.href='home.php';</script>"
				;
				
				
				}}
	
	
	
	?>
    <!--<?php
if(isset($_POST['update']))
	{
$category=strip_tags($_POST['category']);
$bookname=strip_tags($_POST['bookname']);
$author=strip_tags($_POST['author']);
$username=strip_tags($_POST['username']);
$action=strip_tags($_POST['action']);
$sql2="update books set category='$category',author='$author',username='$username',action='$action' where bookname='$bookname'";
if(!mysqli_query($con,$sql2)){
			die('error Processing:'.mysqli_error());
			 "<script type='text/javascript'>
window.alert('data was submitted');
window.location.href='home.php';
</script>";
		}
			elseif($bookname=""){echo 
	  "<script type='text/javascript'>
window.alert('fill all blanks');
window.location.href='updatebook.php';
</script>";}
		
		
		
		else{ 			
				echo "successfuly updted!";
			header("location:home.php");
				
	}			
	}
 ?> 
 
 <?php
if(isset($_POST['deletebook']))
	{
$customer=$_POST['customer'];


$sql3="delete  from event where customer='$customer'";
if(!mysqli_query($con,$sql3)){
			die('error Processing:'.mysqli_error());
		}
		
		
		elseif($customer==""){echo 
	  "<script type='text/javascript'>
window.alert('fill all blanks');
window.location.href='deletebook.php';
</script>";}
		
		
		
		
		
			else{ 		
				echo"<script type='text/javascript'>
				alert('successfuly deleted!');
				window.location.href='home.php';</script>"
				;
				
				
				}
			
			
				} 
				
}
				
				
				 ?>


    
</body>
</html>