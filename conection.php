<?php

$con =  mysqli_connect("localhost", "root", "") or die("not connected database".mysqli_error());
$selected=mysqli_connect($con,"eventdb") or die("not connected");
if($con){
echo "connected successfully";
    
}else{
    echo " not connected to the database";
}
