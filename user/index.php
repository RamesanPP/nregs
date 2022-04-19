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
    $jt=$_POST['jt'];
    $jd=$_POST['jd'];
    $sid=$_POST['stat'];
    $did=$_POST['dist'];
    $pid=$_POST['pan'];
    $loc=$_POST['loc'];
    $lat=$_POST['lat'];
    $lng=$_POST['lng'];
    $ins=mysqli_query($dbcon,"INSERT INTO `job_data`(`uid`, `jt`, `jd`, `sid`, `did`, `pid`, `loc`, `lat`, `lng`, `dt`, `st`) VALUES ('$uid','$jt','$jd','$sid','$did','$pid','$loc','$lat','$lng','".date('Y-m-d')."','0')");
    if($ins>0)
    {
        header("location:index.php?suc=1");
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
                                                            <li class="active"><a href="index.php">Home</a></li>								
								<li><a href="jobs.php">My Jobs</a></li>  
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
    <div class="col-md-7">
        <form method="post" enctype="multipart/form-data">
            <table style="width: 100%"> 
                <tr>
                    <td><center><b>POST YOUR JOB HERE</b></center></td>
                </tr>
                <tr>
                    <td>
                        <b>Job Title</b>
                        <input type="text" name="jt" class="form-control" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Job Description</b>
                        <textarea name="jd" class="form-control" required=""></textarea>
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
                        <b>Job Location</b>
                        <input id="pac-input" name="loc" type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><p><b>Double click on the map to get more accuracy</b></p></center>
            <div id="map" style="width: 100%; height: 300px"></div>
            <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.490001, lng: 76.95397},
          zoom: 18,
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("lat").value=e.latLng.lat();
                document.getElementById("lng").value=e.latLng.lng();
            });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&libraries=places&callback=initAutocomplete"
         async defer></script>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="lat" id="lat" class="form-control" style="width: 50%; float: left;">
                        <input type="text" name="lng" id="lng" class="form-control" style="width: 50%; float: left;">
                    </td>
                </tr>
                <tr>
                    <td><center><br />
                        <input type="submit" name="sub" value="POST JOB NOW" class="btn btn-sm btn-danger" />
                </center></td>
                </tr>
            </table>            
        </form>
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