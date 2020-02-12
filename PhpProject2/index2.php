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
        <link rel="stylesheet" href="css/linearicons.css">=
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
     
   
<body>

       
    </head>
    <body>

        <!-- Start Header Area -->
        <header class="default-header">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="#home"><img src="img/logo2.png" alt=""></a>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav class="hide">
                                <a href="#home">Home</a>
                                <a href="index.php">Register/Login Page</a>
                                <a href="#forum">Forum</a>
                                <a href="#editors">Editors</a>
                                 <a href="#blog">Blog</a>

                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-center">
						
							<div class="banner-content col-lg-6 col-md-12">
								<h1 class="text-uppercase">
									We are the team help you being active
								</h1>
                                    <iframe width="420" height="315"
									src="https://www.youtube.com/embed/X6jIrXkcZ8Y?autoplay=1">
									</iframe>
									<button class="primary-btn2 mt-20 text-uppercase ">Get Started<span class="lnr lnr-arrow-right"></span></button>
									
							</div>
							 <div class="col-lg-6 d-flex align-self-end img-right">
								<img class=" img-fluid mt-20 mb-100" src="img/head.jpg" alt="" >
							</div> 
						</div>
				</div>
			</section>
        <!-- End banner Area -->

      
   

        <!-- Start forum Area -->
        <section class="about-area" id="forum">
            <div class="container-fluid">
                <div class="row d-flex justify-content-end align-items-center">
                    <div class="col-lg-6 col-md-12 about-left no-padding">
                        <img class="img-fluid" src="img/about-img.jpg" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 about-right no-padding">
                        <h1>Share with Us</h1>
                        <!-- Start Form section -->
                        

                        <form class="booking-form" method="post" action="upload.php" enctype="multipart/form-data">
                            <input type="hidden" name="size" value="1000000">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 about-right no-padding">
                                    <img class="img-fluid" id="imageholder" name="imageholder" src="img/placeholder.png" alt="your image" />
                                </div>
                                <div class="col-lg-12 flex-column">
                                    <textarea class="form-control mt-20" name="message" placeholder="Enter text here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
                                <div class="col-lg-12 d-flex flex-column">
                                    <input class="mt-20" onchange="readURL(this);" type='file' id="image" name="image"/>
                                    <!-- onchange="readURL(this);" -->
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end send-btn">
                                    <button id='insert' onclick="submit()" name='insert' value="insert" class="submit-btn primary-btn mt-10 text-uppercase ">Upload<span class="lnr lnr-arrow-right"></span></button>
                                    <!-- <input type="submit" name="insert" id="insert" value="Upload" class="submit-btn primary-btn mt-20 text-uppercase" />  -->
                                </div>
                               
                                <div class="alert-msg"></div>
                                
                            </div>
                            
                        </form>
                        <!--   <div class="col-md-6" login-right  -->
                        <div class="col-lg-18 d-flex justify-content-end" >
                            <a href="index.php"><button  class="nw-btn primary-btn mt-10">Logout<span class="lnr lnr-arrow-right"></span></button></a>
                        <br>
                    
                        </div>
                        
                        <script>
                            //   $(document).ready(function(){
                            // 	$('#insert').click(function(){
                            // 		var image_name=$('#image').val();
                            // 		if(image_name = '')
                            // 		{
                            // 			alert('Please Select Image');
                            // 			return false;
                            // 		}
                            // 		else
                            // 		{
                            // 			var extension = $('#image').val().split('.').pop().toLowerCase;
                            // 			if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1 )
                            // 			{
                            // 				alert('Invalid Image File');
                            // 				$('#image').val('');
                            // 				return false;
                            // 			}
                            // 		}
                            // 	});
                            //   });
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#imageholder')
                                                .attr('src', e.target.result);
                                    };

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                        <!-- End form script -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End forum Area -->

    <!-- Start consultans Area -->
    <section class="consultans-area section-gap" id="editors">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-80 header-text">
                    <h1>About Us</h1>
                    <p>
                        A group of SP students came up with this amazing idea in hope to serve people of all ages in leading a healthy lifestyle.
                        <br>
                        Singapore Polytechnic is an institution of higher learning in Singapore. It provides studies, training and research in technology, science, commerce and the arts.
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.103504695046!2d103.7775495!3d1.3097757!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9545dd23993859e!2sSingapore%20Polytechnic!5e0!3m2!1sen!2ssg!4v1580350526745!5m2!1sen!2ssg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        <br>
                    </p>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-3 col-md-3 vol-wrap">
                    <div class="single-con">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" src="img/terence.jpg" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h4>Terence Lee</h4>
                                    <p>
                                        Editor of Webpage
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 vol-wrap" >
                    <div class="single-con">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" src="img/chengkit.jpg" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h4>Cheng Kit</h4>
                                    <p>
                                        Editor of Webpage
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 vol-wrap">
                    <div class="single-con">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" src="img/ruixuan.jpg" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h4>Rui Xuan</h4>
                                    <p>
                                        Editor of Webpage
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 vol-wrap">
                    <div class="single-con">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" src="img/jinhong.jpg" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h4>Jin Hong</h4>
                                    <p>
                                        Editor of Webpage
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End consultans Area -->



    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 pb-30 header-text">
                    <h1>Blog</h1>
                    <p>
                        Updates on the latest news in the health and fitness world.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="single-blog col-lg-4 col-md-4">
                    <a href="web1.php">
                        <img class="f-img img-fluid mx-auto" src="img/stayfit.jpg" alt="">
                    </a>

                    <h4>
                        <a href="web1.php">THE EVERY-PERSON’S GUIDE TO IMMUNE SYSTEM SUPPORT</a>
                    </h4>
                    <p>
                        Teaching you the quickest and easiest way to stay fit and healthy.
                    </p>

                </div>
                <div class="single-blog col-lg-4 col-md-4">
                <a href="web2.php">
                    <img class="f-img img-fluid mx-auto" src="img/loseweight.jpg" alt="">
                </a>
                    <h4>
                        <a href="web2.php">4 EASY WAYS TO LOSE WEIGHT</a>
                    </h4>
                    <p>
                        Find out the 4 easy ways to lose weight.
                    </p>

                </div>
                <div class="single-blog col-lg-4 col-md-4">
                    <a href="web3.php">
                    <img class="f-img img-fluid mx-auto" src="img/mealtiming.jpg" alt="">
                    </a>
                    <h4>
                        <a href="web3.php">THE MEAL TIMING MYTH?</a>
                    </h4>
                    <p>
                        Most people assume meal timing after your workout is essential. But new research shows that nutrient timing might now be as important as we once thought.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- end blog Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-6">
                    <div class="single-footer-widget">
                        <h6>Navigate</h6>
                        <ul class="footer-nav">
                            <li><a href="upload.php">Forum</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#editors">Our Team</a></li>
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
                        <h3><a href='mailto:ActiveHealthWebsite@gmail.com'>ActiveHealth@gmail.com</a></h3>
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
</body>
</html>
