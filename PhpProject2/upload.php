<?php
 
// $connect = mysqli_connect("localhost", "root", "", "testing");  
// if(isset($_POST["insert"]))  
// {  
// 	 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
// 	 $query = "INSERT INTO sql_image(name) VALUES ('$file')";  
// 	 if(mysqli_query($connect, $query))  
// 	 {  
// 		  echo '<script>alert("Image Inserted into Database")</script>';  
// 	 }  
// 	 header("location:index.php");
// }  

$connect = mysqli_connect("localhost", "root", "", "testing");  
 if(isset($_POST['insert']))  
 {  
	
	$text='';
	$text=$_POST['message'];
	$file = $_FILES['image']['name'];
	 $target="img/".basename($file);
        
	  $query = "INSERT INTO tbl_images(image,text) VALUES ('$file','$text')";  
	  mysqli_query($connect, $query);
	  if(move_uploaded_file($_FILES['image']['tmp_name'],$target))  
      {  
		   $msg="Image uploaded successfully";  
		   echo'<script>alert('.$msg.')</script>';
	  }  else{
		  $msg="There was a problem uploading image.";
	  }
	  header("location:upload.php");
	 
 }  
 
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Medical</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">

			<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header  pt-0 pb-0" >
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="index2.php"><img src="img/logo2.png" alt=""></a>
								
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="#home">Home</a>
									<a href="#service">Services</a>
									<a href="#appoinment">Appoinment</a>
									<a href="#consultant">About Us</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
            <!-- End Header Area -->

            <!--Start Forum Table -->
            <forum class="about-area section-gap">
            <div class="container">
            <table class="table table-bordered mt-20" style="border-bottom: 10px solid aquamarine;border-collapse:separate;border-radius:20px 20px 5px 5px;overflow:hidden;box-shadow:0 0 20px rgba(0,0,0,0.15);">
								<col width="50%">
								<col width="50%">
									<tr><th style="background-color:aquamarine;font-size:large;" colspan="3">Share Forum</th></tr>

									
                    <?php

                                $db= mysqli_connect("localhost","root","","testing");
                        $sql="SELECT * FROM tbl_images";
                        $result = mysqli_query($db,$sql);
                        while($row= mysqli_fetch_array($result)){
                             echo '  
    
             <tr>
            <td> <img  class="mt-5 mb-5" src="img/'.$row['image'].'" height="300" width="300" " /> </td>
            <td style="font-size:small;font-weight:bold;">'.$row['text'].'</td>
			<td><a href="delete.php?id='.$row['id'].'">Delete</a></td>
             </tr>
      
                    ';     
            }
                    ?>
		</table>
            </div>
            </forum>
            <!-- End Forum Table -->

            <!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6">
							<div class="single-footer-widget">
								<h6>Navigate</h6>
								<ul class="footer-nav">
									<li><a href="#">Forum</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Our Team</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4  col-md-6">
							<div class="single-footer-widget mail-chimp">
                                     <h6 class='mb-20'>Contact us</h6>
							 	<ul class="footer-nav">
									<li>Singapore Polytechnic</li>
									<li>500 Dover Road</li>
									<li>Singapore 139651</li>
								</ul>
								<h3>67751133</h3> 
								<h3><a href='mailto:contactus@sp.edu.sg'>contactus@sp.edu.sg</a></h3>  
							</div>                
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div>

											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div>
										</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="https://www.facebook.com/singaporepolytechnic/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/SingaporePoly"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</footer>
            <!-- End footer Area -->
            <script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/main.js"></script>
</html>
<!-- <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>   -->