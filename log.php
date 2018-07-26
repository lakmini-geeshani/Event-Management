
<?php
$con=mysqliiiii_connect('localhost','root','');
$select= mysqliiiii_select_db($con,'eventdb');?>
<?php
//include_once './conection.php';

if(isset($_POST['login'])){
    
 
    $email = strip_tags($_POST['email']);
    $email=  stripslashes($email);
    $email = mysqliiiii_escape_string($con, $email);
    
    
    $password = strip_tags($_POST['password']);
    $password =stripslashes($password);
    $password = mysqliiiii_escape_string($con, $password);
    
    $sql ="SELECT * FROM register WHERE email ='$email'";
    $qu = mysqliiiii_query($con, $sql);
    $row = mysqliiiii_fetch_array($qu);
    
    $id=$row['email'];
    $dbpassword = $row['password'];
    
    if($password == $dbpassword){
       $_SESSION['email']=$id;
        header("Location:Home.php");
		/*echo '<script language="javascript">';
		echo 'alert("message successfully sent")';
echo '</script>';*/
        
    }
 else {
        echo "unsuccess";    
    }
    
}
?>

