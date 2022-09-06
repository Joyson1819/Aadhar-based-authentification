<?php
session_start();
error_reporting(0);
include('connect.php');

date_default_timezone_set('Africa/Lagos');
$current_date = date('Y-m-d H:i:s');

if(isset($_POST['btnsubmit']))
{

$pin = $_POST['txtpin'];
$serial = $_POST['txtserial'];

 $sql = "SELECT * FROM scratchcard WHERE pin='" .$pin . "' and serial = '".$serial."' and status = '0'";
     $result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
 ($row = mysqli_fetch_assoc($result));
$_SESSION["serial"] = $row['serial'];
	
header("Location: apply/admission.php"); 
    }else { 
		header("Location: apply/admission.php"); 
?>

<?php 
         }
    
   }

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>NATIONAL ENGINEERING COLLEGE|Online Student Admission System</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/neclogo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/neclogo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
<!--
.style1 {color: #000000}
-->
    </style>
    </head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Start Admission Process here </h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Please Answer the following questions</a></li>
									<img src="images/neclogo.PNG" alt="" height="100" width="100"/>

				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
					<?php
			include('form.php');
					?>
					</div>
					
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/neclogo.PNG" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Apply</span></a></li>
                    </ul>
						<li class="nav-item"><a class="nav-link" href="user/index.php">Dashboard</a></li>
						
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider1.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>NATIONAL ENGINEERING COLLEGE </strong>(AUTONOMOUS)</h2>
	<p class="lead">K. R. Nagar, Kovilpatti, Thoothukudi (Dt) - 628503</p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider1.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">NATIONAL ENGINEERING COLLEGE <strong>(AUTONOMOUS)</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">K. R. Nagar, Kovilpatti, Thoothukudi (Dt) - 628503</p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider1.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>NATIONAL ENGINEERING COLLEGE </strong>(AUTONOMOUS)</h2>
										<p class="lead" data-animation="animated fadeInLeft">K. R. Nagar, Kovilpatti, Thoothukudi (Dt) - 628503</p>
											
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>About Us </h3>
                    <p align="justify" class="lead style1">National Engineering College, Kovilpatti, Tamil Nadu offers a wide variety of high-quality education and training opportunities for every student, awarding qualifications through the highly reputed Anna University. The college offers seven undergraduate and nine postgraduate programs in a wide range of disciplines. NEC is Sprawled in a lush green campus, with an alluring backdrop of an enchanting hillock, in NH7 between Madurai and Tirunelveli. The institute provides an excellent locale for academic pursuits in South Tamilnadu. NEC, the most prominent landmark of Kovilpatti, has been the crowning glory of this Matchless City of Matches. Its celebrated ‘Son of the Soil’ Thiru.K.Ramasamy transformed the entire social and cultural scenario in and around this small town by establishing the excellent educational institution popularly referred as “NEC”. By wielding the magical wand of social commitment and munificence this foresighted philanthropist transformed a strip of barren land into a magnificent academic complex that has been consistently producing infallible engineers of high competence right from the day of its inception in 1984. This much-acclaimed temple of erudition was established under the self-financing scheme sanctioned by the Government of Tamilnadu G.O. No. 939 dated 20.07.1984 by the National Educational and Charitable Trust, Kovilpatti, Thoothukudi district.</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>NATIONAL ENGINEERING COLLEGE (AUTONOMOUS)</h4>
                        <h2>Welcome to Online Student Admission System </h2>
                        <p>&nbsp;</p>

                        <a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Apply Now!</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/blog_6.jpg" alt="" width="530" height="420" class="img-fluid img-rounded">                    </div>
                    <!-- end media -->
                </div><!-- end col -->
			</div>
		  <div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn"></div>
                    <!-- end media -->
                </div><!-- end col -->
              <!-- end col -->
            </div>
			<!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <!-- end section -->
    <!-- end section -->
    <!-- end section -->
    <!-- end section -->
<footer class="footer">
        <div class="container">
            <div class="row">
              <!-- end col -->
              <!-- end col -->
              <!-- end col -->
</div>
            <!-- end row -->
        </div><!-- end container -->
</footer><!-- end footer -->

    <?php
	
	include('footer.php');
	?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>