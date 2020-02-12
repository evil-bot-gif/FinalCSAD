<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
$id=$_GET["id"];
$img="";
$res=mysqli_query($connect,"SELECT * FROM tbl_images where id=$id");
while ($row=mysqli_fetch_array($res)){
$img=$row['image'];
}


mysqli_query($connect,"DELETE FROM tbl_images where id=$id");
?>
<script>
    window.location="upload.php";
</script>
