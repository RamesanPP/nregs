<?php
include './dbconnect.php';
if(isset($_POST['sub']))
{
    $nme=$_POST['nme'];
    $uid=$_POST['uid'];
    $pas=$_POST['pas'];
    $addr=$_POST['addr'];
    $con=$_POST['con'];
    $aadr=$_POST['aadr'];
    $stat=$_POST['stat'];
    $dist=$_POST['dist'];
    $pan=$_POST['pan'];
    $up=$_FILES['up']['name'];
    $nfn=$uid."".substr($up,strrpos($up,"."));
    if(move_uploaded_file($_FILES['up']['tmp_name'], getcwd()."\\userpic\\$nfn"))
    {
    $ins=mysqli_query($dbcon,"INSERT INTO `user_data`(`nme`, `uid`, `addr`, `con`, `aadr`, `sid`, `did`, `pid`, `pic`, `st`) VALUES ('$nme','$uid','$addr','$con','$aadr','$stat','$dist','$pan','$nfn','1')");
    echo mysqli_error($dbcon);
    if($ins>0)
    {
        $ins1=mysqli_query($dbcon,"INSERT INTO `user_log`(`uid`, `pas`, `typ`, `st`) VALUES ('$uid','$pas','usr','1')");
        if($ins1>0)
        {
            header("location:ureg.php?suc=1");
        }
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
		<link href="tmplate/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="tmplate/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!-- js -->
		<script src="tmplate/js/jquery.min.js"></script>
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
		<script type="text/javascript" src="tmplate/js/move-top.js"></script>
		<script type="text/javascript" src="tmplate/js/easing.js"></script>
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
<div id="home" class="" style="background-image:url(tmplate/images/banner2.jpg); background-repeat: no-repeat;background-size: cover; height: 350px;">
	<div class="container">
            
		<div class="navi">
				<div class="head-logo">
                                    <a href="index.php" style="color: white;"><font size="+4"><b>NREGS</b></font></a>
				</div>
				<div class="banner-nav">
					<span class="menu"><img src="tmplate/images/menu.png" alt=" "/></span>
						<nav class="cl-effect-3">
							<ul class="nav1">
                                                            <li class="active"><a href="index.php">Home</a></li>								
								<li><a href="login.php">Login</a></li>
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
		
			<link rel="stylesheet" href="tmplate/css/swipebox.css">
				<script src="tmplate/js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
				<!-- Portfolio Ends Here -->
				<script type="text/javascript" src="tmplate/js/jquery.mixitup.min.js"></script>
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
	
<!-- //banner-bottom -->
<!-- about -->
	<div id="" class="">
	<div class="container">
		<h3>User Registration</h3>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <form method="post" enctype="multipart/form-data">
                        <table style="width: 100%">
                            <tr>
                                <td>
                                    <b>Name</b>
                                    <input type="text" name="nme" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>User ID</b>
                                    <input type="text" name="uid" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Password</b>
                                    <input type="password" name="pas" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Address</b>
                                    <textarea name="addr" class="form-control" required=""></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Contact No</b>
                                    <input type="text" name="con" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Aadhar No</b>
                                    <input type="text" name="aadr" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>State</b>
                                    <select name="stat" id="stat" class="form-control" required="required" onchange="loaddistrict(this.value)">
                                        <option value="">Choose One</option>
                                        <?php
                                        $sel_state=mysqli_query($dbcon,"select * from state");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <script type="text/javascript">
                            function loaddistrict(x)
                            {
                                var xmlhttp = new XMLHttpRequest();
                                 xmlhttp.onreadystatechange = function() {
                                     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                         document.getElementById("dis").innerHTML = xmlhttp.responseText;
                                     }
                                 };
                                 xmlhttp.open("GET", "load_district1.php?x=" + x, true);
                                 xmlhttp.send();
                            }  
                            function loadpanch(d)
                            {
                                var st=document.getElementById("stat").value;
                                var xmlhttp = new XMLHttpRequest();
                                 xmlhttp.onreadystatechange = function() {
                                     if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                         document.getElementById("pan").innerHTML = xmlhttp.responseText;
                                     }
                                 };
                                 xmlhttp.open("GET", "load_pan.php?s=" + st+"&d="+d, true);
                                 xmlhttp.send();
                            }
                         </script>
                         <tr>
                             <td>
                                 <b>District</b>
                                <span id="dis">
                                    <select name="dist" class="form-control" required="required">
                                    <option value="">Choose One</option>
                                    </select>
                                </span>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <b>Panchayat</b>
                                <span id="pan">
                                    <select name="pan" class="form-control" required="required">
                                    <option value="">Choose One</option>
                                    </select>
                                </span>
                             </td>
                         </tr>
                         <tr>
                                <td>
                                    <b>Photo</b>
                                    <input type="file" name="up" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center><br />
                                <input type="submit" name="sub" value="Register Here" class="btn btn-sm btn-success" />
                            </center>
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                    <div class="col-lg-2"></div>
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
        include './footer.php';
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