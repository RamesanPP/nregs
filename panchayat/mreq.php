<?php
include '../dbconnect.php';
session_start();
if(isset($_SESSION['padmin']))
{
    $uid=$_SESSION['padmin'];
    $seld=mysqli_query($dbcon,"select * from padmin_data where uid='$uid'");
    $rd=mysqli_fetch_row($seld);
    $sid=$rd[1];
    $did=$rd[2];
    $pid=$rd[0];
    $selsn=mysqli_query($dbcon,"select * from state where StCode='$sid'");
    $rsn=mysqli_fetch_row($selsn);
    $seldis=mysqli_query($dbcon,"select * from district where DistCode='$did'");
    $rdis=mysqli_fetch_row($seldis);    
}
 else {
header("location:../index.php");    
}
if(isset($_GET['t']))
{
    $t=$_GET['t'];
    $mid=$_GET['mid'];
    $muid=$_GET['muid'];
    if($t=="1")
    {
        $up=mysqli_query($dbcon,"update nregs_member set st='2' where id='$mid'");
        $up=mysqli_query($dbcon,"update user_log set st='2' where uid='$muid'");
        if($up>0)
        {
            header("location:mreq.php?mid=".$mid);
        }
    }
    if($t=="2")
    {
        $up=mysqli_query($dbcon,"update nregs_member set st='3' where id='$mid'");
        if($up>0)
        {
            header("location:mreq.php?mid=".$mid);
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
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                                            <li><a href="index.php">Home</a></li>								
								<li><a href="nregs.php">NREGS</a></li>
                                                                <li class="active"><a href="mreq.php">Member Request</a></li>
                                                                <li><a href="wrk.php">Works</a></li>
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
<div style="background-color: #0080f6; color: white;">
<div class="container" style="padding: 10px;">
    <div class="col-lg-4">
        <b>Welcome <?php echo $rd[4] ?></b>
    </div>
    <div class="col-lg-4">
        <b><?php echo $rsn[1] ?>,<?php echo $rdis[2] ?>,<?php echo $rd[3] ?></b>
    </div>
    <div class="col-lg-4" style="text-align: right;">
        <b>Date : <?php echo date("d-M-Y"); ?></b>
    </div>
</div>
</div>
<!-- banner-bottom -->
	<br />
<!-- //banner-bottom -->
<!-- about -->
	<div id="" class="">
	<div class="container">
		<h3>Manage NREGS</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        $seln=mysqli_query($dbcon,"select distinct(nid) from nregs_member where pid='$pid' and st='0'");
                        if(mysqli_num_rows($seln)>0)
                        {
                            ?>
                        <table style="width: 100%" class="table table-bordered">
                            <?php
                            while($rn=mysqli_fetch_row($seln))
                            {
                            ?>
                            <tr>                                
                                <td colspan="5"><?php 
                                $seld=mysqli_query($dbcon,"select * from nregs where id='$rn[0]'");
                                $rd=mysqli_fetch_row($seld);
                                echo $rd[4]
                                ?></td>
                            </tr>
                            <?php
                            $selm=mysqli_query($dbcon,"select * from nregs_member where nid='$rn[0]' and st=0");
                            if(mysqli_num_rows($selm)>0)
                            {
                                $i=0;
                                while($rm=mysqli_fetch_row($selm))
                                {
                                    $i++;
                                    ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $rm[5] ?></td>
                                <td><?php echo $rm[8] ?></td>
                                <td><a href="mreq.php?mid=<?php echo $rm[0] ?>"><span class="fa fa-eye"></span></a></td>
                            </tr>
                            <?php
                                }
                            }
                            }
                            ?>
                        </table>
                        <?php
                        }
                        else{
                            echo"<h3>No Waiting List</h3>";
                        }
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        if(isset($_GET['mid']))
                        {
                            $mid=$_GET['mid'];
                            $selm1=mysqli_query($dbcon,"select * from nregs_member where id='$mid' and pid='$pid' and st='0'");
                            if(mysqli_num_rows($selm1)>0)
                            {
                                $rm1=mysqli_fetch_row($selm1);
                                ?>
                        <table style="width: 100%" class="table table-bordered">
                            <tr>
                                <td style="width: 50%"><center>
                                    <img src="mpic/<?php echo $rm1[11] ?>" class="img img-responsive" />
                            </center>
                                </td>
                                <td>
                                    <div style="background-color: #0080f6; color: white; padding: 5px;"><b><?php echo strtoupper($rm1[5]) ?></b></div>
                                   <br /> <?php echo $rm1[7] ?><br />
                                    <h5> <span class="fa fa-phone"></span> <?php echo $rm1[8] ?></h5>
                                    <br />
                                    <div>
                                        Aadhar No : <?php echo $rm1[9] ?>
                                    </div>
                                    <br />
                                <center>
                                    <a href="mreq.php?mid=<?php echo $mid ?>&t=1&muid=<?php echo $rm1[6] ?>" style="text-decoration: none;"><div style="background-color: green; color: white; padding: 10px; width: 90%;">
                                        <span class="fa fa-thumbs-up"></span> APPROVE
                                        </div></a>
                                    <a href="mreq.php?mid=<?php echo $mid ?>&t=2"><div style="background-color: red; color: white; padding: 10px; width: 90%; margin-top: 2px;">
                                        <span class="fa fa-thumbs-down"></span> REJECT
                                        </div></a>
                                </center>
                                </td>
                            </tr>
                        </table>
                        <?php
                            }
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