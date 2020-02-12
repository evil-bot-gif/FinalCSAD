

<?php
session_start();
session_destroy();

header('location:index2.php');//direct user to active health page after successfully login and welcomed

?>