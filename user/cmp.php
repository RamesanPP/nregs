<?php
include '../dbconnect.php';
session_start();
if(isset($_SESSION['usr']))
{
    $uid=$_SESSION['usr'];
    $seld=mysqli_query($dbcon,"select * from user_data  where uid='$uid'");
    $rd=mysqli_fetch_row($seld);
    $sid=$rd[6];
    $did=$rd[7];
    $pid=$rd[8];
    $selsn=mysqli_query($dbcon,"select * from state where StCode='$sid'");
    $rsn=mysqli_fetch_row($selsn);
    $seldis=mysqli_query($dbcon,"select * from district where DistCode='$did'");
    $rdis=mysqli_fetch_row($seldis);    
    $selp=mysqli_query($dbcon,"select * from padmin_data where id='$pid'");
    $rp=mysqli_fetch_row($selp);
}
 else {
header("location:../index.php");    
}
if(isset($_POST['sub']))
{
    $ct=$_POST['ct'];
    $cmt=$_POST['cmt'];
    $insc=mysqli_query($dbcon,"INSERT INTO `cmp_data`(`uid`, `dt`, `ct`, `cmp`, `st`) VALUES ('$uid','".date('Y-m-d')."','$ct','$cmt','0')");
    if($insc>0)
    {
        header("location:cmp.php?suc=1");
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
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                                            <li><a href="index.php">Home</a></li>								
								<li><a href="jobs.php">My Jobs</a></li> 
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
<div style="background-color: #0080f6; color: white;">
<div class="container" style="padding: 10px;">
    <div class="col-lg-4">
        <b>Welcome <?php echo $rd[1] ?></b>
    </div>
    <div class="col-lg-4">
        <b><?php echo $rsn[1] ?>,<?php echo $rdis[2] ?>,<?php echo $rp[3] ?></b>
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
<div class="container">
    <div class="col-md-2"><center>
        <img src="../userpic/<?php echo $rd[9] ?>" class="img img-responsive" />
        <b><?php echo $rd[1] ?></b></center><br />
    </div>
    <div class="col-md-9">
        <form method="post">
            <table style="width: 100%">
                <tr>
                    <td><b>Complaint Title</b>
                        <input type="text" name="ct" class="form-control" />
                    </td>
                </tr>
                <tr>
                    <td><b>Complaint</b>
                        <textarea name="cmt" class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><center><br />
                        <input type="submit" name="sub" value="ADD NOW" class="btn btn-danger brn-b" />
                </center></td>
                </tr>
            </table>
        </form><br />
        <?php
        $selcmo=mysqli_query($dbcon,"select * from cmp_data where uid='$uid' order by id desc");
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
                    <div style="float: right;">Posted on : <?php echo date("d-M-Y",  strtotime($rc[3])) ?></div>
                    <b><?php echo $rc[3] ?></b>
                    <div style="text-align: justify;">
                        <?php echo $rc[4] ?>
                    </div>
                </td>
                <td>
                    <?php
                    if($rc[5]=="0")
                    {
                        echo"Not Readed";
                    }
                    else{
                        echo"Readed";
                    }
                    ?>
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
    <div class="col-md-3">
        
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