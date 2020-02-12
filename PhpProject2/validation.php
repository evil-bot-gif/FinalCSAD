<?php

session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'userregisteration');

$name=$_POST['user'];
$pass=$_POST['password'];

$s=" select * from usertable where name= '$name' && password ='$pass'";//match password from user and database

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$name;
   header('location:home.php');
    echo "<style> body { background-image: url(\"img/background_image.jpg\");} </style> <h6>Username Already Taken, please enter a different one!</h6>";
   
}else{

   echo"<style> body { background-image: url(\"img/background_image.jpg\");} </style> No such user, please register first!";

}


?>
