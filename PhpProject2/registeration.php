<?php

session_start();
//header('location:index.php');//remains at login page after register
//if header is removed ^ message will be shown such as registeraton successful/username Taken

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'userregisteration');

$name=$_POST['user'];
$pass=$_POST['password'];

$s=" select * from usertable where name= '$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
    echo " <style> body { background-image: url(\"img/background_image.jpg\");} </style>Username Already Taken, please enter a different one!";
   
}else{
    
    $reg="insert into usertable(name,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
echo"<style> body { background-image: url(\"img/background_image.jpg\");} </style>  Registeration Successful! Please go back to login page for login!";





}



?>
