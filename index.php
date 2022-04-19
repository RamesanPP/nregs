<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<title>NREGS</title>
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
	<div id="home" class="banner">
	<div class="container">
		<div class="navi">
				<div class="head-logo">
                                    <a href="index.php" style=""><font size="+4"><b>NREGS</b></font></a>
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
		<div class="banner-info">
			<div class="banner-info-left">
				<h3>OUR MISSION IS TO MAKE YOUR <span> BUSINESS GROW</span></h3>
				<p>Donec rutrum congue leo eget malesuada<span>Curabitur non nulla sit amet.</span></p>
				<div class="start">
					
				</div>
			</div>
			<div class="banner-info-right">
				<div class="banner-info-fig">
					<a href="tmplate/images/4.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
						<img class="img-responsive" src="tmplate/images/4-.jpg" />
					</a>
				</div>
				<div class="banner-info-fig">
					<a href="tmplate/images/5.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
						<img class="img-responsive" src="tmplate/images/5-.jpg" />
					</a>
				</div>
				<div class="clearfix"> </div>
				<div class="banner-info-fig">
					<a href="tmplate/images/6.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
						<img class="img-responsive" src="tmplate/images/6-.jpg" />
					</a>
				</div>
				<div class="banner-info-fig">
					<a href="tmplate/images/7.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
						<img class="img-responsive" src="tmplate/images/7-.jpg" />
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
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
	<div class="banner-bottom">
	<div class="container">
<!-- Slider-starts-Here -->
				<script src="tmplate/js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: true,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-bottom-info">
							<h3>NREGA</h3>
							<p>A majority of India’s population live below the poverty line and such individuals do not have sufficient funds to provide for the basic necessities of their life. The Government, therefore, introduces different types of social welfare schemes for the benefit of the low income group individuals. One such social security measure, introduced in the year 2005, was the National Rural Employment Guarantee Act (NREGA). The Act was passed in 2005 and the scheme was launched in 2006 when it was renamed to Mahatma Gandhi NREGA or the Mahatma Gandhi National Rural Employment Guarantee Act. Ever since its inception, the MGNREGA scheme has become the largest social security scheme in the world.</p>
						</div>
					</li>
					<li>
						<div class="banner-bottom-info">
							<h3>WORKS</h3>
							<p>Under MGNREGA, every rural household can register itself to avail of a NREGA Job Card. The NREGA Job Card is issued to all the adult members of a rural household who are willing to provide unskilled labour for earning a living. Once individuals have a NREGA card, they can show the card and demand work from the Government under the MGNREGA scheme. The Government would ensure a minimum of 100 work days in a year and pay the NREGA card holders with the minimum wages for their labour.</p>
						</div>
					</li>
					<li>
						<div class="banner-bottom-info">
							<h3>CURRUPTION</h3>
							<p>NREGA has been criticized for leakages and corruption in its implementation. It has been alleged that individuals have received benefits and work payments for work that they have not done, or have done only on paper. In some situations, beneficiaries were allegedly not sufficiently poor to enroll in the program to begin with.</p>
						</div>
					</li>
				</ul>
			</div>
			
	</div>
	</div>
<!-- //banner-bottom -->
<!-- about -->
	<div id="about" class="about">
	<div class="container">
		<h3>ABOUT US</h3>
		<p class="para">The Mahatma Gandhi National Rural Employment Guarantee Act, 2005 (MGNREGA) was notified on September 7, 2005. The mandate of the Act is to provide at least 100 days of guaranteed wage employment in a financial year to every rural household whose adult members volunteer to do unskilled manual work.</p>
		<div class="about-grids">
<!-- Slider-starts-Here -->		
				<script src="tmplate/js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider2").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider2">
					<li>
						<div class="about-grids">
							<div class="about-grid">
								<a href="tmplate/#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img src="tmplate/images/2.jpg" class="img-responsive" />
									<h4>Tempus convallis quis lactus porttitor</h4>
								</a>
								
									<p>Sed porttitor lactus nibh.Proin
										eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
										porttitoraccumsan tincidunt.
										Curabitur aliquet quam id dui posuere blandit.
										Nulla Quis lorum nisl tempus convallis quis ac lactus porttitor accumsan tincidunt.</p>
							</div>
							<div class="about-grid">
								<a href="tmplate/#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img src="tmplate/images/1.jpg" class="img-responsive" />
									<h4>Tempus convallis quis lactus porttitor</h4>
								</a>
								
									<p>Sed porttitor lactus nibh.Proin
										eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
										porttitoraccumsan tincidunt.
										Curabitur aliquet quam id dui posuere blandit.
										Nulla Quis lorum nisl tempus convallis quis ac lactus porttitor accumsan tincidunt.</p>
							</div>
							<div class="about-grid">
								<a href="tmplate/#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img src="tmplate/images/3.jpg" class="img-responsive" />
									<h4>Tempus convallis quis lactus porttitor</h4>
								</a>
								
									<p>Sed porttitor lactus nibh.Proin
										eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
										porttitoraccumsan tincidunt.
										Curabitur aliquet quam id dui posuere blandit.
										Nulla Quis lorum nisl tempus convallis quis ac lactus porttitor accumsan tincidunt.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="about-grids">
							<div class="about-grid">
								<a href="tmplate/#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img src="tmplate/images/3.jpg" class="img-responsive" />
									<h4>Nulla convallis quis lactus porttitor</h4>
								</a>
								
									<p>Quam porttitor lactus nibh.Proin
										eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
										porttitoraccumsan tincidunt.
										Curabitur aliquet quam id dui posuere blandit.
										Nulla Quis lorum nisl tempus convallis quis ac lactus porttitor accumsan tincidunt.</p>
							</div>
							<div class="about-grid">
								<a href="tmplate/#small-dialog4" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img src="tmplate/images/2.jpg" class="img-responsive" />
									<h4>Aliquet convallis quis lactus porttitor</h4>
								</a>
								
									<p>Dui porttitor lactus nibh.Proin
										eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
										porttitoraccumsan tincidunt.
										Curabitur aliquet quam id dui posuere blandit.
										Nulla Quis lorum nisl tempus convallis quis ac lactus porttitor accumsan tincidunt.</p>
							</div>
							<div class="about-grid">
								<a href="tmplate/#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img src="tmplate/images/1.jpg" class="img-responsive" />
									<h4>Posuere convallis quis lactus porttitor</h4>
								</a>
								
									<p>Quis porttitor lactus nibh.Proin
										eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
										porttitoraccumsan tincidunt.
										Curabitur aliquet quam id dui posuere blandit.
										Nulla Quis lorum nisl tempus convallis quis ac lactus porttitor accumsan tincidunt.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="about-grids">
							<div class="about-grid">
								<a href="tmplate/#small-dialog6" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img src="tmplate/images/1.jpg" class="img-responsive" />
									<h4>Risus convallis quis lactus porttitor</h4>
								</a>
								
									<p>Sed porttitor lactus nibh.Proin
										eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
										porttitoraccumsan tincidunt.
										Curabitur aliquet quam id dui posuere blandit.
										Nulla Quis lorum nisl tempus convallis quis ac lactus porttitor accumsan tincidunt.</p>
							</div>
							<div class="about-grid">
								<a href="tmplate/#small-dialog7" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img src="tmplate/images/2.jpg" class="img-responsive" />
									<h4>Tortor convallis quis lactus porttitor</h4>
								</a>
								
									<p>Sed porttitor lactus nibh.Proin
										eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
										porttitoraccumsan tincidunt.
										Curabitur aliquet quam id dui posuere blandit.
										Nulla Quis lorum nisl tempus convallis quis ac lactus porttitor accumsan tincidunt.</p>
							</div>
							<div class="about-grid">
								<a href="tmplate/#small-dialog8" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
									<img src="tmplate/images/3.jpg" class="img-responsive" />
									<h4>Porttitor convallis quis lactus porttitor</h4>
								</a>
								
									<p>Sed porttitor lactus nibh.Proin
										eget tortor risus.Nulla porttitor accumsan tincidunt.Nulla
										porttitoraccumsan tincidunt.
										Curabitur aliquet quam id dui posuere blandit.
										Nulla Quis lorum nisl tempus convallis quis ac lactus porttitor accumsan tincidunt.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
				</ul>
			</div>
		<!-- pop-up-box -->
					<!-- script for pop-up-box -->
					<script type="text/javascript" src="tmplate/js/modernizr.custom.min.js"></script>    
					<link href="tmplate/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="tmplate/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!-- //script for pop-up-box -->
						<div id="small-dialog" class="mfp-hide">
							<div class="image-top">
								<img src="tmplate/images/2-.jpg" alt="" />
							</div>
						</div>
						<div id="small-dialog1" class="mfp-hide">
							<div class="image-top">
								<img src="tmplate/images/1-.jpg" alt="" />
							</div>
						</div>
						<div id="small-dialog2" class="mfp-hide">
							<div class="image-top">
								<img src="tmplate/images/3-.jpg" alt="" />
							</div>
						</div>
						<div id="small-dialog3" class="mfp-hide">
							<div class="image-top">
								<img src="tmplate/images/3-.jpg" alt="" />
							</div>
						</div>
						<div id="small-dialog4" class="mfp-hide">
							<div class="image-top">
								<img src="tmplate/images/2-.jpg" alt="" />
							</div>
						</div>
						<div id="small-dialog5" class="mfp-hide">
							<div class="image-top">
								<img src="tmplate/images/1-.jpg" alt="" />
							</div>
						</div>
						<div id="small-dialog6" class="mfp-hide">
							<div class="image-top">
								<img src="tmplate/images/1-.jpg" alt="" />
							</div>
						</div>
						<div id="small-dialog7" class="mfp-hide">
							<div class="image-top">
								<img src="tmplate/images/2-.jpg" alt="" />
							</div>
						</div>
						<div id="small-dialog8" class="mfp-hide">
							<div class="image-top">
								<img src="tmplate/images/3-.jpg" alt="" />
							</div>
						</div>
			<!-- pop-up-box -->
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
			</script>
		<!-- //pop-up-box -->
			<!---- Script Here --->
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
	</div>
<!-- //about -->
<!-- pricing -->
	
<!-- //pricing -->
<!-- gallery -->
	<div id="products" class="portfolio">
	<div class="container">
<!-- Portfolio Starts Here -->
	<div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="project">
			<div class="portfolio-info">
				<h3>GALLERY</h3>
				
				<div class="strip"> </div>
			</div>
					<ul id="filters" class="clearfix">
							<li><span class="filter active" data-filter="app card icon web">ALL</span></li>
							<li><span class="filter" data-filter="app">SEEDS</span></li>
							<li><span class="filter" data-filter="card">CROPING</span></li>
							<li><span class="filter" data-filter="icon">DEVELOPMENT</span></li>
					</ul>
		
					<div id="portfoliolist">
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="tmplate/images/s-1.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="tmplate/images/s-11.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									<img class="img-responsive" src="tmplate/images/plus.png" class="zoom" alt=""/>
								</h2>
								</div></a>
							</div>
						</div>				
						<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="tmplate/images/s-2.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="tmplate/images/s-22.jpg" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive" src="tmplate/images/plus.png" class="zoom" alt=""/>
									</h2>
								</div></a>
							</div>
						</div>		
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="tmplate/images/s-3.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="tmplate/images/s-33.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									<img class="img-responsive" src="tmplate/images/plus.png" class="zoom" alt=""/>
								</h2>
								</div></a>
							</div>
						</div>				
						<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="tmplate/images/s-4.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="tmplate/images/s-44.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									<img class="img-responsive" src="tmplate/images/plus.png" class="zoom" alt=""/>
								</h2>					
								</div></a>
							</div>
						</div>	
						<div class="portfolio web mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="tmplate/images/s-5.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="tmplate/images/s-55.jpg" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									<img class="img-responsive" src="tmplate/images/plus.png" class="zoom" alt=""/>
								</h2>						
								</div></a>
							</div>
						</div>			
						<div class="portfolio web mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="tmplate/images/s-6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
								<img class="img-responsive" src="tmplate/images/s-66.jpg" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive" src="tmplate/images/plus.png" class="zoom" alt=""/>
									</h2>					
								</div></a>							
							</div>
						</div>
					<div class="clearfix"></div>
					</div>
		
	</div>
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
<!-- //gallery -->
<!-- contact -->
	<div id="contact" class="contact">
	
	</div>
<!-- //contact -->
<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="temp">
			<p>Design by <a href="tmplate/http://w3layouts.com/">w3layouts</a></p>
		</div>
		<div class="footer-icons">
			<ul>
				<li><a href="tmplate/#" class="facebook"> </a></li>
				<li><a href="tmplate/#" class="twitter"> </a></li>
				<li><a href="tmplate/#" class="dribble"> </a></li>
				<li><a href="tmplate/#" class="g-plus"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
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
<?php
include './admin/config.php';

?>