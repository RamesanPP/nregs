<?php
include '../dbconnect.php';
session_start();
if(isset($_SESSION['adm']))
{
    
}
 else {
header("location:../index.php");    
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<title><?php echo $titl ?></title>
		<link href="../tmplate/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../tmplate/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!-- js -->
		<script src="../tmplate/js/jquery.min.js"></script>
		<!-- //js -->
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Agriculture_firm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="../tmplate/js/move-top.js"></script>
		<script type="text/javascript" src="../tmplate/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- banner -->
<div id="home" class="" style="background-image:url(../tmplate/images/banner2.jpg); background-repeat: no-repeat;background-size: cover; height: 350px;">
	<div class="container">
            
		<div class="navi">
				<div class="head-logo">
                                    <a href="index.php" style="color: white;"><font size="+4"><b>NREGS</b></font></a>
				</div>
				<div class="banner-nav">
					<span class="menu"><img src="../tmplate/images/menu.png" alt=" "/></span>
						<nav class="cl-effect-3">
							<ul class="nav1">
                                                            <li class=""><a href="index.php">Home</a></li>								
                                                            <li class="active"><a href="district.php">District</a></li>
                                                                <li><a href="account.php">Account</a></li>
                                                                <li><a href="cmp.php">Complaints</a></li>
                                                                <li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>
				<div class="clearfix"> </div>
		</div>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
		
			<link rel="stylesheet" href="../tmplate/css/swipebox.css">
				<script src="../tmplate/js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
				<!-- Portfolio Ends Here -->
				<script type="text/javascript" src="../tmplate/js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						var filterList = {
							init: function () {
								// MixItUp plugin
							// http://mixitup.io
							$('#portfoliolist').mixitup({
								targetSelector: '.portfolio',
								filterSelector: '.filter',
								effects: ['fade'],
								easing: 'snap',
								// call the hover effect
								onMixEnd: filterList.hoverEffect()
							});	
						},
						hoverEffect: function () {
							// Simple parallax effect
							$('#portfoliolist .portfolio').hover(
								function () {
									$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
									$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
								},
								function () {
									$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
									$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
								}		
							);				
						}
					};
					// Run the show!
						filterList.init();
					});	
					</script>
	</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<br />
<!-- //banner-bottom -->
<!-- about -->
	<div id="" class="">
	<div class="container">
		<h3>District Data</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $did=$_GET['did'];
                        $selp=mysqli_query($dbcon,"select * from padmin_data where did='$did'");
                        if(mysqli_num_rows($selp)>0)
                        {
                            ?>
                        <table class="table table-bordered table-condensed table-hover">
                            <?php
                            while($rp=mysqli_fetch_row($selp))
                            {
                                ?>
                            <tr>
                                <td style="background-color:  #0080f6; color: white; padding: 15px;"><b>Panchayat: <?php echo $rp[3] ?></b></td>
                            </tr>
                            <?php
                            $seln=mysqli_query($dbcon,"select * from nregs where pid='$rp[0]'");
                        if(mysqli_num_rows($seln)>0)
                        {
                            ?>
                        <tr>
                        <?php
                            while($rn=mysqli_fetch_row($seln))
                            {
                                ?>
                            <tr>
                                <td style="background-color: #009900; color: white; padding: 10px;"><?php echo $rn[4] ?></td>
                            </tr>
                            <?php
                            $selm=mysqli_query($dbcon,"select * from nregs_member where nid='$rn[0]'");
                            if(mysqli_num_rows($selm)>0)
                            {
                                ?>
                            <tr>
                                <td>
                                    <?php
                                    while($rm=mysqli_fetch_row($selm))
                                    {
                                        ?>
                                    <div class="col-md-2">
                                        <center> 
                                            <img src="../panchayat/mpic/<?php echo $rm[11] ?>" style="height: 180px;" class="img img-responsive" /><br />
                                <b><?php echo $rm[5] ?></b>
                                        </center>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            }
                            else
                            {
                                echo"<tr><td>No Members Found</td></tr>";
                            }
                            }
                            ?>
                        </tr>
                            <?php
                        }
                        else{
                            echo"<tr><td>No data Found</td></tr>";
                        }
                            }
                            ?>
                        </table>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
		
	</div>
	</div>
<!-- //about -->
<!-- pricing -->
	
<!-- //pricing -->
<!-- gallery -->
	
<!-- //gallery -->
<!-- contact -->
	
<!-- //contact -->
<!-- footer -->
<div class="footer" style="margin-top: 100px;">
	<?php 
        include '../footer.php';
        ?>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>