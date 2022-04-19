<?php
include '../dbconnect.php';
session_start();
if(isset($_SESSION['adm']))
{
    
}
 else {
header("location:../index.php");    
}
if(isset($_POST['sub']))
{
    $sid=$_POST['stat'];
    $did=$_POST['dist'];
    $dn=$_POST['dn'];
    $uid=$_POST['uid'];
    $pas=$_POST['pas'];
    $con=$_POST['con'];
    $ins=mysqli_query($dbcon,"INSERT INTO `dadmin_data`(`sid`, `did`, `dnme`, `uid`, `con`, `st`) VALUES ('$sid','$did','$dn','$uid','$con','1')");
    if($ins>0)
    {
        $ins1=mysqli_query($dbcon,"INSERT INTO `user_log`(`uid`, `pas`, `typ`, `st`) VALUES ('$uid','$pas','dadmin','1')");
        if($ins1>0)
        {
            header("location:district.php?suc=1");
        }
    }
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
                                                            <li><a href="district.php">District</a></li>
                                                                <li><a href="account.php">Account</a></li>
                                                                <li class="active"><a href="cmp.php">Complaints</a></li>
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
		<h3>Manage Complaint</h3>
                <div class="row">
                    <div class="col-lg-6">
                    <?php
        $selcmo=mysqli_query($dbcon,"select * from cmp_data order by id desc");
        if(mysqli_num_rows($selcmo)>0)
        {
            ?>
        <table style="width: 100%" class="table table-bordered">
            <tr>
                <td></td>
                <td>Complaint</td>
                <td></td>
            </tr>
            <?php
            $i=0;
            while($rc=mysqli_fetch_row($selcmo))
            {
                $i++;
                ?>
            <tr>
                <td><?php echo $i ?></td>
                <td>
                    <div style="float: right;">Posted on : <?php echo date("d-M-Y",  strtotime($rc[3])) ?></div><br />
                    <b><?php echo $rc[3] ?></b>                   
                </td>
                <td><a href="cmp.php?mid=<?php echo $rc[0] ?>">
                    <?php
                    if($rc[5]=="0")
                    {
                        echo"Not Readed";
                    }
                    else{
                        echo"Readed";
                    }
                    ?></a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
        }
        ?>    
                    </div>
                    <div class="col-lg-6">
                        <?php
                        if(isset($_GET['mid']))
                        {
                            $mid=$_GET['mid'];
                            $selm=mysqli_query($dbcon,"select * from cmp_data where id='$mid'");
                            $rm=mysqli_fetch_row($selm);
                            $up=mysqli_query($dbcon,"update cmp_data set st='1' where id='$mid'");
                            $u=mysqli_query($dbcon,"select * from user_data where uid='$rm[1]'");
                            $ru=mysqli_fetch_row($u);
                            echo "<span style='float:right'>Posted By:$ru[1]</span><br /><b>$rm[3]</b><br />$rm[4]";
                        }
                        ?>
                    </div>
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