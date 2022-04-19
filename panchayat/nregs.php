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
if(isset($_POST['sub']))
{    
    $nn=$_POST['nn'];
    $rnum=$_POST['rnum'];
    $nad=$_POST['nad'];    
    $ins=mysqli_query($dbcon,"INSERT INTO `nregs`(`sid`, `did`, `pid`, `n_nme`, `n_reg`, `n_add`, `st`) VALUES ('$sid','$did','$pid','$nn','$rnum','$nad','1')");
    if($ins>0)
    {
        if($ins>0)
        {
            header("location:nregs.php?suc=1");
        }
    }
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
    if(move_uploaded_file($_FILES['up']['tmp_name'], getcwd()."\\mpic\\$nfn"))
    {
    $ins=mysqli_query($dbcon,"INSERT INTO `nregs_member`(`sid`, `did`, `pid`, `nid`, `nme`, `uid`, `addr`, `con`, `aadr`, `gndr`, `pic`, `st`) VALUES ('$sid','$did','$pid','".$_GET['nid']."','$cn','$uid','$addr','$con','$anum','$g','$nfn','1')");
    if($ins>0)
    {
        $ins1=mysqli_query($dbcon,"INSERT INTO `user_log`(`uid`, `pas`, `typ`, `st`) VALUES ('$uid','$pas','mem','1')");
        if($ins1>0)
        {
            header("location:nregs.php?suc=1");
        }
    }
    }
}

if(isset($_GET['dwn']))
{
    $muid=$_GET['muid'];
    $up=mysqli_query($dbcon,"update nregs_member set st='2' where id='".$_GET['dwn']."'");
    $up=mysqli_query($dbcon,"update user_log set st='2' where uid='$muid'");
    echo mysqli_error($dbcon);
    if($up>0)
    {
        header("location:nregs.php");
    }
}
if(isset($_GET['up']))
{
    $muid=$_GET['muid'];
    $up=mysqli_query($dbcon,"update nregs_member set st='1' where id='".$_GET['up']."'");
    $up=mysqli_query($dbcon,"update user_log set st='1' where uid='$muid'");
    echo mysqli_error($dbcon);
    if($up>0)
    {
        header("location:nregs.php");
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
								<li class="active"><a href="nregs.php">NREGS</a></li>
                                                                <li><a href="mreq.php">Member Request</a></li>
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
                        if(isset($_GET['nid']))
                        {
                            $t=$_GET['t'];
                            if($t==1)
                            {
                            ?>
                        <form method="post" enctype="multipart/form-data">
                        <table style="width: 100%">  
                            <tr>
                                <td>
                                    <b>Convener Name</b>
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
                        <?php
                            }
                            if($t==2)
                            {
                               $selm=mysqli_query($dbcon,"select * from nregs_member where nid='".$_GET['nid']."'");
                               if(mysqli_num_rows($selm)>0)
                               {
                                   ?>
                        <table style="width: 100%" class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Contact</td>
                                <td>Designation</td>
                                <td></td>
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
                                    echo "Members";
                                }
                                ?></td>
                                <td>
                                    <?php
                                    if($rm[12]=="1")
                                    {
                                        ?>
                                    <a href="nregs.php?nid=<?php echo $_GET['nid'] ?>&t=2&dwn=<?php echo $rm[0] ?>&muid=<?php echo $rm[6] ?>"><span class="fa fa-arrow-down" style="color: red;" title="Remove Convenor"></span></a>
                                    <?php
                                    }
                                    else if($rm[12]=="2"){
                                        ?>
                                    <a href="nregs.php?nid=<?php echo $_GET['nid'] ?>&t=2&up=<?php echo $rm[0] ?>&muid=<?php echo $rm[6] ?>"><span class="fa fa-arrow-up" style="color: green;" title="Make Convenor"></span></a>
                                    <?php
                                    }
                                    else{
                                        echo"Waiting...";
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
                            }
                        }
                        else
                        {
                        ?>
                        <form method="post" enctype="multipart/form-data">
                            <table style="width: 100%">  
                            <tr>
                                <td>
                                    <b>NREGS Name</b>
                                    <input type="text" name="nn" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Registration Number</b>
                                    <input type="text" name="rnum" class="form-control" required=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Register Address</b>
                                    <textarea name="nad" class="form-control" required=""></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                            <center><br />
                                <input type="submit" name="sub" value="Add Now" class="btn btn-sm btn-success" />
                            </center>
                                </td>
                            </tr>
                            </table>
                        </form>
                        <?php
                        }
                        ?>
                        
                    </div>
                    <div class="col-lg-6">
                        <?php
                        $selst=mysqli_query($dbcon,"select * from nregs where sid='$sid' and did='$did' and pid='$pid'");
                        if(mysqli_num_rows($selst)>0)
                        {
                            ?>
                        <h4>AVAILABLE DATA</h4><hr />
                        <table style="width: 100%" class="table table-bordered">
                            <td>#</td>
                            <td>NREGS</td>
                            <td>Reg No</td>
                            <td>Address</td>
                            <td></td>
                            <?php
                            $i=0;
                            while($rst=mysqli_fetch_row($selst))
                            {
                                $i++;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $rst[4] ?></td>
                                <td><?php echo $rst[5] ?></td>
                                <td><?php echo $rst[6] ?></td>
                                <td>
                                    <?php
                                    $chk=mysqli_query($dbcon,"select * from nregs_member where nid='$rst[0]' and st='1'");
                                    if(mysqli_num_rows($chk)>0)
                                    {
                                        
                                    }
                                    else
                                    {
                                    ?>
                                    <a href="nregs.php?nid=<?php echo $rst[0] ?>&t=1"><span class="fa fa-plus"></span></a> | 
                                    <?php
                                    }
                                    ?>
                                    <a href="nregs.php?nid=<?php echo $rst[0] ?>&t=2"><span class="fa fa-eye"></span></a>
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