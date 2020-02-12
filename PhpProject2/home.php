
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}//cannot enter home page without login
?>



<html>
    <head>
        <title> Home Page</title>
        
        <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>

         
    
<body style="background-image:url('img/background_image.jpg');">
    <div class="container" >
        <a class="float-right" href="logout.php" style="color:black;font-weight:bold;text-decoration:underline;" >LOGOUT</a>
        <a class="float-left" href="back_page.php"  style="color:black;font-weight:bold;text-decoration:underline;" >Back to Active Health Website</a>
        <h1 style="color:crimson;text-align:center;"  class="mt-150"> Welcome <?php
            echo $_SESSION['username']
            ;
            ?>
            
        </h1>
            
        

            </body>
</html>





