

<?php
session_start();
session_destroy();

header('location:index.php');//direct user to login page after logout
//not neccessary for a successful logout as when user logout , automatically wont be inside the webpage
?>