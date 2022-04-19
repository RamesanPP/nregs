<?php
include '../dbconnect.php';
session_start();
if(isset($_SESSION['cnvr']))
{
    $uid=$_SESSION['cnvr'];
    $seld=mysqli_query($dbcon,"select * from nregs_member where uid='$uid'");
    $rd=mysqli_fetch_row($seld);
    $sid=$rd[1];
    $did=$rd[2];
    $pid=$rd[3];
    $nid=$rd[4];
    $selsn=mysqli_query($dbcon,"select * from state where StCode='$sid'");
    $rsn=mysqli_fetch_row($selsn);
    $seldis=mysqli_query($dbcon,"select * from district where DistCode='$did'");
    $rdis=mysqli_fetch_row($seldis);  
    $selp=mysqli_query($dbcon,"select * from padmin_data where id='$pid'");
    $rp=mysqli_fetch_row($selp);
    $selnrg=mysqli_query($dbcon,"select * from nregs where pid='$pid'");
    $rnrg=mysqli_fetch_row($selnrg);
}
 else {
header("location:../index.php");    
}
if(isset($_POST['sub1']))
{
    $ch=$_POST['ch'];
    $wid=$_GET['wid'];
    $amt=mysqli_query($dbcon,"select * from mem_amount");
    $ramt=mysqli_fetch_row($amt);
    $selm=mysqli_query($dbcon,"select * from nregs_member where nid='$nid'");
    while($rm=mysqli_fetch_row($selm))
    {
        if(in_array($rm[6], $ch))
        {
            $insat=mysqli_query($dbcon,"INSERT INTO `wrk_attnd`(`sid`, `did`, `pid`, `nid`, `wid`, `mid`, `dt`, `att`, `amt`, `st`) VALUES ('$sid','$did','$pid','$nid','$wid','$rm[6]','".date('Y-m-d')."','1','$ramt[1]','1')");
            
        }
        else{
            $insat=mysqli_query($dbcon,"INSERT INTO `wrk_attnd`(`sid`, `did`, `pid`, `nid`, `wid`, `mid`, `dt`, `att`, `amt`, `st`) VALUES ('$sid','$did','$pid','$nid','$wid','$rm[6]','".date('Y-m-d')."','0','0','1')");
        }
    }
    if($insat>0)
    {
        header("location:attndnce.php?wid=$wid");
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
                                                            <li><a href="index.php">Home</a></li>								
								<li><a href="member.php">Members</a></li>
                                                                <li><a href="mwrk.php">Works</a></li>
                                                                <li class="active"><a href="attndnce.php">Attendance</a></li>
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
        <b>Welcome <?php echo $rd[5] ?></b>
    </div>
    <div class="col-lg-4">
        <b><?php echo $rsn[1] ?>,<?php echo $rdis[2] ?>,<?php echo $rp[3] ?>,<?php echo $rnrg[4] ?></b>
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
		<h3>Our Assigned Work</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        $selw=mysqli_query($dbcon,"select * from job_assign,job_data where job_data.id=job_assign.jid and job_assign.nid='$nid' and job_assign.st='0'");
                        if(mysqli_num_rows($selw)>0)
                        {
                            ?>
                        <table style="width: 100%" class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>Work Info</td>
                                <td></td>
                            </tr>
                            <?php
                            $i=0;
                            while($rw=mysqli_fetch_row($selw))
                            {
                                $i++;
                                ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><b><?php echo $rw[11] ?></b><div style="text-align: justify;"><?php echo $rw[12] ?></div>
                                <B>Location: </B><?php echo $rw[16] ?>
                                </td>
                                <td><a href="attndnce.php?wid=<?php echo $rw[0] ?>" class="label label-danger">ADD Attendance</a></td>
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
                        if(isset($_GET['wid']))
                        {
                            $wid=$_GET['wid'];
                            $selw=mysqli_query($dbcon,"select * from job_data,user_data,job_assign where job_assign.jid=job_data.id and user_data.uid=job_data.uid and job_assign.id='$wid'");
                            $rw=mysqli_fetch_row($selw);
                            ?>
                        <table style="width: 100%" class="table table-bordered">
                            <tr>
                                <td colspan="2">
                            <img src="../userpic/<?php echo $rw[21] ?>" class="img img-responsive img-circle pull-right" style="height: 70px;" />
                            <center>
                                    <font size="+1"><b><?php echo strtoupper($rw[13]) ?></b></font><br />
                                    <?php echo $rw[15] ?><br />
                                    <span class="fa fa-phone"></span> <?php echo $rw[16] ?>
                            </center>
                            
                        </td>
                            </tr>
                            <tr>
                                <td style="width: 50%">
                                    <iframe src="location.php?lat=<?php echo $rw[8] ?>&lng=<?php echo $rw[9] ?>" style="width: 100%; height: 200px;" ></iframe>
                                </td>
                                <td>
                                    <b><?php echo$rw[2] ?></b>
                                    <div style="text-align: justify; padding: 5px;">
                                        <?php echo $rw[3] ?>
                                    </div>
                                    <b>Location:</b> <?php echo $rw[7] ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><b>MANAGE ATTENDANCE</b></center></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php
                            $selm=mysqli_query($dbcon,"select * from nregs_member where nid='$nid'");
                               if(mysqli_num_rows($selm)>0)
                               {
                                   ?>
                                    <form method="post">
                                    <table style="width: 100%" class="table table-bordered">
                                        <?php
                                        $i=0;
                                        while($rm=mysqli_fetch_row($selm))
                                        {
                                            $i++;
                                            ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $rm[5] ?></td>
                                            <td>
                                                <?php
                                                $chk=mysqli_query($dbcon,"select * from wrk_attnd where dt='".date('Y-m-d')."' and mid='$rm[6]'");
                                                if(mysqli_num_rows($chk)>0)
                                                {
                                                 $rc=mysqli_fetch_row($chk);
                                                 if($rc[8]==1)
                                                 {
                                                     echo"<font color='green'>Present</font>";
                                                 }
                                                 else{
                                                     echo"<font color='red'>Absent</font>";
                                                 }
                                                }
                                                else
                                                {
                                                ?>
                                                <input type="checkbox" name="ch[]" value="<?php echo $rm[6] ?>" />
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="4">
                                        <center>
                                            <?php
                                            if(mysqli_num_rows($chk)>0)
                                                {
                                                
                                            }
                                            else{
                                            ?>
                                            <input type="submit" name="sub1" value="ADD ATTENDANCE" />
                                            <?php
                                            }
                                            ?>
                                        </center>
                                            </td>
                                        </tr>
                                    </table>    
                                    </form>
                                    <?php
                               }
                            ?>
                                </td>
                            </tr>                            
                        </table>
                            <?php
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