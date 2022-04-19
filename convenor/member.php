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
    $cn=$_POST['cn'];
    $uid=$_POST['uid'];
    $pas=$_POST['pas'];
    $addr=$_POST['addr'];
    $con=$_POST['con'];
    $anum=$_POST['anum'];
    $g=$_POST['g'];
    $up=$_FILES['up']['name'];
    $nfn=$uid."".substr($up,strrpos($up,"."));
    if(move_uploaded_file($_FILES['up']['tmp_name'], getcwd()."\\../panchayat\\mpic\\$nfn"))
    {
    $ins=mysqli_query($dbcon,"INSERT INTO `nregs_member`(`sid`, `did`, `pid`, `nid`, `nme`, `uid`, `addr`, `con`, `aadr`, `gndr`, `pic`, `st`) VALUES ('$sid','$did','$pid','$nid','$cn','$uid','$addr','$con','$anum','$g','$nfn','0')");
    if($ins>0)
    {
        $ins1=mysqli_query($dbcon,"INSERT INTO `user_log`(`uid`, `pas`, `typ`, `st`) VALUES ('$uid','$pas','mem','0')");
        if($ins1>0)
        {
            header("location:member.php?suc=1");
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
								<li class="active"><a href="member.php">Members</a></li>
                                                                <li><a href="mwrk.php">Works</a></li>
                                                                <li><a href="attndnce.php">Attendance</a></li>
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
		<h3>Manage Members</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" enctype="multipart/form-data">
                        <table style="width: 100%">  
                            <tr>
                                <td>
                                    <b>Member Name</b>
                                    <input type="text" name="cn" class="form-control" required=""/>
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
                                    <b>Contact Number</b>
                                    <input type="text" name="con" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Aadhar Number</b>
                                    <input type="text" name="anum" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Gender</b><br />
                                    <input type="radio" name="g" value="Male"/> Male 
                                    <input type="radio" name="g" value="Female"/> Female<br />
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
                                <input type="submit" name="sub1" value="Add Now" class="btn btn-sm btn-success" />
                            </center>
                                </td>
                            </tr>
                        </table>
                            <?php                            
                            if(isset($_GET['suc']))
                            {
                                echo"<b>Added Successfully</b>";
                            }
                            ?>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <?php
                         $selm=mysqli_query($dbcon,"select * from nregs_member where nid='$nid'");
                               if(mysqli_num_rows($selm)>0)
                               {
                                   ?>
                        <table style="width: 100%" class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Contact</td>
                                <td>Designation</td>
                                <td>Account Status</td>
                            </tr>
                            <?php
                            $i=0;
                            while($rm=mysqli_fetch_row($selm))
                            {
                                $i++;
                                ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $rm[5] ?></td>
                                <td><?php echo $rm[8] ?></td>
                                <td><?php
                                if($rm[12]=="1")
                                {
                                    echo"Convinor";
                                }
                                else{
                                    echo "Member";
                                }
                                ?></td>
                                <td>
                                    <?php
                                    if($rm[12]=="0")
                                    {
                                        ?>
                                    <span>Waiting...</span>
                                    <?php
                                    }
                                    if($rm[12]=="3")
                                    {
                                        ?>
                                    <span>Rejected..</span>
                                    <?php
                                    }
                                    else{
                                        ?>
                                        Active
                                        <?php
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