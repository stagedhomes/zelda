<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zelda
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="dns-prefetch" href="//d2itdnqewolu1g.cloudfront.net" />

	<!-- SEO Contents | Handled by Yoast -->
	<meta name="author" content="Barb Schwarz, StagedHomes.com" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo $GLOBALS["global_s3Assets"]; ?>/images/the-project/favicon.png" />

	<!-- Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Fontello CSS -->
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/fonts/fontello/css/fontello.css" rel="stylesheet">

	<!-- Plugins -->
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/css/animations.css" rel="stylesheet">
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/plugins/hover/hover-min.css" rel="stylesheet">	

	<!-- Template Requirements -->
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/css/style.css" rel="stylesheet" />
	<link href="<?php echo $GLOBALS["global_webTemplate"]; ?>/css/skins/gold.css" rel="stylesheet" />
	
	<!-- StagedHomes.com Development -->
	<link href="https://stagedhomes.com/assets/the-project/css/stagedhomes.css" rel="stylesheet" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/stagedhomes.css" rel="stylesheet" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- ========================================================
		Header
	======================================================== -->
	<div class="header-container">

		<!-- header-top start -->
		<!-- classes:  -->
		<!-- "dark": dark version of header top e.g. class="header-top dark" -->
		<!-- "colored": colored version of header top e.g. class="header-top colored" -->
		<!-- ================ -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-3 col-sm-6 col-md-9">
						<!-- header-top-first start -->
						<!-- ================ -->
						<div class="header-top-first clearfix">
							<ul class="social-links circle small clearfix hidden-xs">
								<li class="facebook"><a target="_blank" href="http://www.facebook.com/stagedhomes"><i class="fa fa-facebook"></i></a></li>
								<li class="googleplus"><a target="_blank" href="https://www.google.com/+StagedhomesEducation"><i class="fa fa-google-plus"></i></a></li>
								<li class="twitter"><a target="_blank" href="https://twitter.com/stagedhomescom"><i class="fa fa-twitter"></i></a></li>
								<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/in/barbschwarzstaging"><i class="fa fa-linkedin"></i></a></li>
								<li class="youtube"><a target="_blank" href="https://www.youtube.com/user/stagedhomesvideos"><i class="fa fa-youtube-play"></i></a></li>
								<li class="pinterest"><a target="_blank" href="https://www.pinterest.com/barbstagedhomes/"><i class="fa fa-pinterest"></i></a></li>
							</ul>
							<div class="social-links hidden-lg hidden-md hidden-sm circle small">
								<div class="btn-group dropdown">
									<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
									<ul class="dropdown-menu dropdown-animation">
										<li class="facebook"><a target="_blank" href="http://www.facebook.com/stagedhomes"><i class="fa fa-facebook"></i></a></li>
										<li class="googleplus"><a target="_blank" href="https://www.google.com/+StagedhomesEducation"><i class="fa fa-google-plus"></i></a></li>
										<li class="twitter"><a target="_blank" href="https://twitter.com/barbstagedhomes"><i class="fa fa-twitter"></i></a></li>
										<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/in/barbschwarzstaging"><i class="fa fa-linkedin"></i></a></li>
										<li class="youtube"><a target="_blank" href="https://www.youtube.com/user/stagedhomesvideos"><i class="fa fa-youtube-play"></i></a></li>
										<li class="pinterest"><a target="_blank" href="https://www.pinterest.com/barbstagedhomes/"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<ul class="list-inline hidden-sm hidden-xs">
								<li><i class="fa fa-phone pr-5 pl-10"></i><a class="text-bold text-14 text-black" href="tel:18003927161">+1 800 392 7161</a></li>
								<li><i class="fa fa-envelope-o pr-5 pl-10"></i> <a class="text-bold text-14 text-black" href="mailto:ASPCourses@StagedHomes.com">ASPCourses@StagedHomes.com</a></li>
							</ul>
						</div>
						<!-- header-top-first end -->
					</div>
					<div class="col-xs-9 col-sm-6 col-md-3">

						<!-- header-top-second start -->
						<!-- ================ -->
						<div id="header-top-second" class="clearfix">

							<!-- header top dropdowns start -->
							<!-- ================ -->
							<div class="text-right">
								<ul class="list-inline">
									<li class="btn-group">
										<a href="http://stagedhomes.com">
											<button type="button" class="btn dropdown-toggle btn-default btn-sm"><i class="fa fa-home pr-10"></i><span class="hidden-md hidden-sm hidden-xs"> Home</span></button>
										</a>
									</li>
									<li class="btn-group">
										<a href="https://stagedhomes.com/public/university.php">
											<button type="button" class="btn dropdown-toggle btn-default btn-sm">
												<?php echo "<i class=\"fa fa-lock pr-10\"></i> Member Login"; ?>
											</button>
										</a>
									</li>
								</ul>
							</div>
							<!--  header top dropdowns end -->
						</div>
						<!-- header-top-second end -->
					</div>
				</div>
			</div>
		</div>
		<!-- header-top end -->

		<!-- header start -->
		<!-- classes:  -->
		<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
		<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
		<!-- "full-width": mandatory class for the full-width menu layout -->
		<!-- "centered": mandatory class for the centered logo layout -->
		<!-- ================ -->
		<header class="header clearfix">

			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">
							<!-- logo -->
							<div id="logo" class="logo">
								<a href="https://stagedhomes.com">
									<img id="logo_img" src="<?php echo $GLOBALS["global_s3Assets"]; ?>/images/the-project/stagedhomes/Logo-StagedHomes.png" alt="StagedHomes.com">
								</a>
							</div>
						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-9">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- classes: -->
							<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
							<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
							<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
							<!-- ================ -->
							<div class="main-navigation  animated with-dropdown-buttons">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>

										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse" id="navbar-collapse-1">
											<!-- main-menu -->
											<ul class="nav navbar-nav text-bold">
												<li><a href="https://stagedhomes.com/aspcourseschmaps.php">Home Staging Training</a></li>
												<li><a href="https://stagedhomes.com/asps/asps.php">ASP Directory</a></li>
												<li><a href="https://stagedhomes.com/homes/homes.php">Staged Properties</a></li>
												<li><a href="https://stagedhomes.com/mediacenter/mediacenter.php">Media Center</a></li>

												<!-- If logged in -->
												<?php if(isset($_SESSION["valid_user"])) { ?>

												<!-- sub-menu on mobile end -->
													<li class="visible-xs"><a href="https://www.stagedhomes.com/asps/aspedit.php?asp=16320">ASP Edit Page</a></li>
													<li class="visible-xs"><a href="https://www.stagedhomes.com/renewal/renewal.php?type=asp">ASP Renewal</a></li>
													<li class="visible-xs"><a class=" border-bottom-0" href="https://www.stagedhomes.com/public/asphow.php">How to Stage</a></li>
														<ul class="visible-xs list-style-none sub-menu-mobile padding-bottom-10 border-bottom-1-gray">
															<li><a href="https://www.stagedhomes.com/public/criteria.php" class="padding-bottom-0 border-bottom-0">Staged Home Criteria</a></li>
															<ul class="list-style-none">
																<li><a href="https://www.stagedhomes.com/public/interior.php">Interior Staging Criteria</a></li>
																<li><a href="https://www.stagedhomes.com/public/exterior.php">Exterior Staging Criteria</a></li>
															</ul>
															<li><a href="https://www.stagedhomes.com/public/asptips.php">ASP Staging Plan</a></li>
															<li><a href="https://www.stagedhomes.com/public/13steps.php">13 Step Staging Plan</a></li>
															<li><a href="https://www.stagedhomes.com/public/stepbystep.php">Step by Step Staging</a></li>
															<li><a href="https://plus.google.com/+StagedhomesEducation">Staging Class Photo Galleries</a></li>
															<li><a href="https://www.stagedhomes.com/photos/aspphotos.php">ASP Before &amp; After Gallery</a></li>
															<li><a href="https://www.stagedhomes.com/public/logos.php">High Resolution Pictures</a></li>
															<li><a href="https://www.stagedhomes.com/public/book.php">Excerpts from Barb's RE Book</a></li>
															<li><a href="https://www.stagedhomes.com/public/showing.php">Showing Homes</a></li>
															<li><a href="http://www.stagedhomes.com/PDF/ASP%20Code%20of%20Ethics.pdf">ASP&copy; Code of Ethics</a></li>
															<li><a href="http://www.stagedhomes.com/downloads/ASP%20Green%20Staging%20To%20Sell%20Live%20and%20Work.doc">ASP&copy; Green Home Staging</a></li>
														</ul>                                                
													<li class="visible-xs"><a href="https://www.stagedhomes.com/ideas/ideas.php" class="border-bottom-0">Staging Ideas</a></li>
														<ul class="visible-xs list-style-none sub-menu-mobile padding-bottom-10 border-bottom-1-gray">
															<li><a href="https://www.stagedhomes.com/ideas/ideas.php">Staging Ideas Database</a></li>
															<li><a href="https://www.stagedhomes.com/blog/">StagedHomes Blog</a></li>
															<li><a href="https://www.stagedhomes.com/public/classgallery.php">Staging Class Photo Galleries</a></li>
															<li><a href="https://www.stagedhomes.com/photos/aspphotos.php">ASP Before &amp; After Gallery</a></li>
														</ul>
													<li class="visible-xs"><a href="https://www.stagedhomes.com/public/resources.php" class="border-bottom-0">ASP Resource Center</a></li>
														<ul class="visible-xs list-style-none sub-menu-mobile padding-bottom-10 border-bottom-1-gray">
															<li><a href="https://www.stagedhomes.com/public/download.php">Document Download Center</a></li>
															<li><a href="https://www.stagedhomes.com/public/ASP_PowerPoint_Presentations.php">Power Points for You to Use</a></li>
															<li><a href="https://www.stagedhomes.com/public/presskit.php">Pre-Approved Press Release</a></li>
															<li><a href="https://www.stagedhomes.com/public/getlink.php">Banners/Links StagedHomes.com</a></li>
															<li><a href="https://www.stagedhomes.com/public/logos.php">Staged Homes Logo Usage</a></li>
															<li><a href="https://www.stagedhomes.com/public/featsignup.php">Featured Page - Activation Request</a></li>
															<li><a href="https://www.stagedhomes.com/public/featrealtor.php">Featured Realtor ASP Signups</a></li>
															<li><a href="https://www.stagedhomes.com/public/stagingpartners.php">ASP Partners</a></li>
															<li><a href="https://www.stagedhomes.com/public/VideoTutorials.php">Video/Audio Tutorials</a></li>
															<li><a href="https://www.stagedhomes.com/blog/">StagedHomes.com Blog</a></li>
															<li><a href="http://help.stagedhomes.com/">ASP Support Center</a></li>
														</ul>
													<li class="visible-xs"><a class="border-bottom-0" href="https://www.stagedhomes.com/public/VideoTutorials.php">Video Tutorials</a></li>
														<ul class="visible-xs list-style-none sub-menu-mobile padding-bottom-10 border-bottom-1-gray">
															<li><a href="http://help.stagedhomes.com/" class="padding-bottom-0 border-bottom-0">ASP Support Center</a></li>
															<ul class="list-style-none">
																<li><a href="https://www.stagedhomes.com/training/tutorials/How%20to%20Create%20and%20Edit%20your%20Feature%20Page.htm">How to Create and Edit your Feature Page</a></li>
																<li><a href="http://dnserrorassist.att.net/search/?q=http%3A//stagedhomes.helpserve.com/Knowledgebase/Article/View/16/10/photo-resizing&r=&t=0">Photo Resizing Tutorial</a></li>
																<li><a href="http://dnserrorassist.att.net/search/?q=http%3A//stagedhomes.helpserve.com/Knowledgebase/Article/View/17/10/uploading-staged-properties-and-property-photos&r=&t=0">Uploading Staged Properties and Property Photos</a></li>
															</ul>
															<li><a href="https://www.stagedhomes.com/public/criteria.php" class="padding-bottom-0 border-bottom-0">IAHSP Support Center</a></li>
															<ul class="list-style-none">
																<li><a href="http://stagedhomes.helpserve.com/Knowledgebase/Article/View/32/10/iahsp-self-authoring">IAHSP Self Authoring</a></li>
																<li><a href="http://stagedhomes.helpserve.com/Knowledgebase/Article/View/33/10/iahsp-affiliate-logo-insertion">IAHSP Affiliate Logo Insertion</a></li>
																<li><a href="http://www.stagedhomes.com/public/IAHSPConferenceCalls.php">Chapter Point Goal Program Conference Call 9-2-08</a></li>
															</ul>
															<li><a href="https://www.stagedhomes.com/public/AudioVideoTools_LetMeTell.php?P=V">Let Me Tell You How I Work</a></li>
															<li><a href="https://www.stagedhomes.com/public/AudioVideoTools_WWSSW.php?P=V">World Wide Staging Service Week</a></li>
															<li><a href="https://www.stagedhomes.com/public/AudioVideoTools_CAREERbook.php?P=V">The CAREERbook by Barb Schwarz</a></li>
														</ul>
													<li class="visible-xs"><a href="https://www.stagedhomes.com/photos/aspphotos.php">ASP Before/After Gallery</a></li>

												<!-- sub-menu on mobile end -->

												<?php } else { ?>
													<!-- Do Nothing -->
												<?php } ?>
											</ul>
											<!-- main-menu end -->

											<!-- header dropdown buttons -->
											<div class="header-dropdown-buttons hidden-xs ">
												<div class="btn-group dropdown">
													<button id="btnSearchDropDown" type="button" role="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-search"></i></button>
													<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
														<li>
															<form role="search" class="search-box margin-clear">
																<div class="form-group has-feedback">
																	<input type="text" class="form-control" placeholder="Search">
																	<i class="icon-search form-control-feedback"></i>
																</div>
															</form>
														</li>
													</ul>
												</div>
											</div>
											<!-- header dropdown buttons end-->

										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->
						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>

		</header>
		<!-- header end -->

		<!-- If logged in -->
		<?php if(isset($_SESSION["valid_user"])) { ?>

		<!-- Sub-Header visible-sm+ -->
		<header id="header2" class="header clearfix hidden-xs">

			<div class="container">
				<div class="row">

								<!-- header-second start -->
								<!-- ================ -->
								<div class="header-second clearfix">

								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation animated">

										<!-- navbar start -->
										<!-- ================ -->
										<nav class="navbar navbar-default" role="navigation">
												<div class="container-fluid">

														<!-- Toggle get grouped for better mobile display -->
														<div class="navbar-header">
																<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
																		<span class="sr-only">Toggle navigation</span>
																		<span class="icon-bar"></span>
																		<span class="icon-bar"></span>
																		<span class="icon-bar"></span>
																</button>

														</div>

														<!-- Collect the nav links, forms, and other content for toggling -->
														<div class="collapse navbar-collapse" id="navbar-collapse-1">
																<!-- main-menu -->
																<ul class="nav navbar-nav ">

																		<li class="mega-menu">
																				<a href="https://www.stagedhomes.com/asps/aspedit.php?asp=16320">ASP Edit Page</a>
																		</li>

																		<li class="mega-menu">
																				<a href="https://www.stagedhomes.com/renewal/renewal.php?type=asp">ASP Renewal</a>
																		</li>

																		<li class="dropdown">
																				<a class="dropdown-toggle" data-toggle="dropdown" href="https://www.stagedhomes.com/public/asphow.php">How to Stage</a>
																				<ul class="dropdown-menu">
																						<li class="dropdown">
																								<a  class="dropdown-toggle" data-toggle="dropdown" href="https://www.stagedhomes.com/public/criteria.php">Staged Home Criteria</a>
																								<ul class="dropdown-menu">
																										<li ><a href="https://www.stagedhomes.com/public/interior.php">Interior Staging Criteria</a></li>
																										<li ><a href="https://www.stagedhomes.com/public/exterior.php">Exterior Staging Criteria</a></li>
																								</ul>
																						</li>                                                
																						<li><a href="https://www.stagedhomes.com/public/asptips.php">ASP Staging Plan</a></li>
																						<li><a href="https://www.stagedhomes.com/public/13steps.php">13 Step Staging Plan</a></li>
																						<li><a href="https://www.stagedhomes.com/public/stepbystep.php">Step by Step Staging</a></li>
																						<li><a href="https://plus.google.com/+StagedhomesEducation">Staging Class Photo Galleries</a></li>
																						<li><a href="https://www.stagedhomes.com/photos/aspphotos.php">ASP Before & After Gallery</a></li>
																						<li><a href="https://www.stagedhomes.com/public/logos.php">High Resolution Pictures</a></li>
																						<li><a href="https://www.stagedhomes.com/public/book.php">Excerpts from Barb's RE Book</a></li>
																						<li><a href="https://www.stagedhomes.com/public/showing.php">Showing Homes</a></li>
																						<li><a href="http://www.stagedhomes.com/PDF/ASP%20Code%20of%20Ethics.pdf">ASP&copy; Code of Ethics</a></li>
																						<li><a href="http://www.stagedhomes.com/downloads/ASP%20Green%20Staging%20To%20Sell%20Live%20and%20Work.doc">ASP&copy; Green Home Staging</a></li>
																				</ul>
																		</li>

																		<li class="dropdown">
																				<a class="dropdown-toggle" data-toggle="dropdown" href="https://www.stagedhomes.com/ideas/ideas.php">Staging Ideas</a>
																				<ul class="dropdown-menu">
																						<li><a href="https://www.stagedhomes.com/ideas/ideas.php">Staging Ideas Database</a></li>
																						<li><a href="https://www.stagedhomes.com/blog/">StagedHomes Blog</a></li>
																						<li><a href="https://www.stagedhomes.com/public/classgallery.php">Staging Class Photo Galleries</a></li>
																						<li><a href="https://www.stagedhomes.com/photos/aspphotos.php">ASP Before &amp; After Gallery</a></li>
																				</ul>
																		</li>

																		<li class="dropdown">
																				<a class="dropdown-toggle" data-toggle="dropdown" href="https://www.stagedhomes.com/public/resources.php">ASP Resource Center</a>
																				<ul class="dropdown-menu">
																						<li><a href="https://www.stagedhomes.com/public/download.php">Document Download Center</a></li>
																						<li><a href="https://www.stagedhomes.com/public/ASP_PowerPoint_Presentations.php">Power Points for You to Use</a></li>
																						<li><a href="https://www.stagedhomes.com/public/presskit.php">Pre-Approved Press Release</a></li>
																						<li><a href="https://www.stagedhomes.com/public/getlink.php">Banners/Links StagedHomes.com</a></li>
																						<li><a href="https://www.stagedhomes.com/public/logos.php">Staged Homes Logo Usage</a></li>
																						<li><a href="https://www.stagedhomes.com/public/featsignup.php">Featured Page - Activation Request</a></li>
																						<li><a href="https://www.stagedhomes.com/public/featrealtor.php">Featured Realtor ASP Signups</a></li>
																						<li><a href="https://www.stagedhomes.com/public/stagingpartners.php">ASP Partners</a></li>
																						<li><a href="https://www.stagedhomes.com/public/VideoTutorials.php">Video/Audio Tutorials</a></li>
																						<li><a href="https://www.stagedhomes.com/blog/">StagedHomes.com Blog</a></li>
																						<li><a href="http://help.stagedhomes.com/">ASP Support Center</a></li>
																				</ul>
																		</li>

																		<li class="dropdown">
																				<a class="dropdown-toggle" data-toggle="dropdown" href="https://www.stagedhomes.com/public/VideoTutorials.php">Video Tutorials</a>
																				<ul class="dropdown-menu">
																						<li class="dropdown">
																								<a  class="dropdown-toggle" data-toggle="dropdown" href="http://help.stagedhomes.com/">ASP Support Center</a>
																								<ul class="dropdown-menu to-left">
																										<li ><a href="https://www.stagedhomes.com/training/tutorials/How%20to%20Create%20and%20Edit%20your%20Feature%20Page.htm">How to Create and Edit your Feature Page</a></li>
																										<li ><a href="http://dnserrorassist.att.net/search/?q=http%3A//stagedhomes.helpserve.com/Knowledgebase/Article/View/16/10/photo-resizing&r=&t=0">Photo Resizing Tutorial</a></li>
																										<li ><a href="http://dnserrorassist.att.net/search/?q=http%3A//stagedhomes.helpserve.com/Knowledgebase/Article/View/17/10/uploading-staged-properties-and-property-photos&r=&t=0">Uploading Staged Properties and Property Photos</a></li>
																								</ul>
																						</li>
																						<li class="dropdown">
																								<a  class="dropdown-toggle" data-toggle="dropdown" href="https://www.stagedhomes.com/public/criteria.php">IAHSP Support Center</a>
																								<ul class="dropdown-menu to-left">
																										<li ><a href="http://stagedhomes.helpserve.com/Knowledgebase/Article/View/32/10/iahsp-self-authoring">IAHSP Self Authoring</a></li>
																										<li ><a href="http://stagedhomes.helpserve.com/Knowledgebase/Article/View/33/10/iahsp-affiliate-logo-insertion">IAHSP Affiliate Logo Insertion</a></li>
																										<li ><a href="http://www.stagedhomes.com/public/IAHSPConferenceCalls.php">Chapter Point Goal Program Conference Call 9-2-08</a></li>
																								</ul>
																						</li>                                              
																						<li><a href="https://www.stagedhomes.com/public/AudioVideoTools_LetMeTell.php?P=V">Let Me Tell You How I Work</a></li>
																						<li><a href="https://www.stagedhomes.com/public/AudioVideoTools_WWSSW.php?P=V">World Wide Staging Service Week</a></li>
																						<li><a href="https://www.stagedhomes.com/public/AudioVideoTools_CAREERbook.php?P=V">The CAREERbook by Barb Schwarz</a></li>
																				</ul>
																		</li>

																		<li class="mega-menu">
																				<a href="https://www.stagedhomes.com/photos/aspphotos.php">ASP Before/After Gallery</a>
																		</li>
																</ul>
																<!-- main-menu end -->

														</div>

												</div>
										</nav>
										<!-- navbar end -->

								</div>
								<!-- main-navigation end -->
								</div>
								<!-- header-second end -->

				</div>
			</div>

		</header>
		<!-- header end -->

		<?php } else { ?>
			<!-- Do Nothing -->
		<?php } ?>
	</div>
	<!-- header-container end -->
	
	<!-- ========================================================
		Body
	======================================================== -->
	<!-- N/A -->
				