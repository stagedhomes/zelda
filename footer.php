<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zelda
 */

?>

<footer id="footer" class="clearfix ">
	<!-- .subfooter start -->
    <!-- ================ -->
    <div class="subfooter">
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-lg-6 subfooter-left text-black">
                        <p>
                            <div class="text-bold">© 1999 - <?php echo date("Y") ?> StagedHomes.com. All rights reserved.</div>
                            <div class="text-12">
                                Stage®, ASP®, ASPM®, StagedHomes.com®, IAHSP®, Accredited Staging Professional®
                                are <a href="http://www.iahsp.com/history.php#trademarks">Federally
                                Registered Trademarks</a> of StagedHomes.com®
                            </div>
                            <div class="text-10">
                                By using this site, you are agreeing to our <a href="/terms-of-use">Terms of Use</a>, Federal CAN-SPAM Act
                            </div>
                            <div class="text-10">
                                The StagedHomes.com website is designed by <a href="/mediacenter/barbschwarzbio.php">Barb Schwarz</a> and <a href="https://www.stagedhomes.com/asps/asplist.php?zip=&state=Choose+State&text=Duane+Leem&groups=none&x=0&y=0">Duane Leem</a>.
                            </div>
                        </p>
                    </div><!-- //col-md-6 -->
                    <div class="col-lg-6 subfooter-right">
                        <ul class="list-inline subfooter-list-inline">
                            <li><img src="<?php echo $GLOBALS["global_s3Assets"]; ?>/images/the-project/subfooter-logo-stager.png" class="subfooter-icons" alt="ASP Stagers" /></li>
                            <li><img src="<?php echo $GLOBALS["global_s3Assets"]; ?>/images/the-project/subfooter-logo-re.png" class="subfooter-icons" alt="ASP Real Estate Agents" /></li>
                            <li><img src="<?php echo $GLOBALS["global_s3Assets"]; ?>/images/the-project/subfooter-logo-aspm.png" class="subfooter-icons" alt="ASPM Masters" /></li>
                            <li><a href="http://www.iahsp.com"><img src="<?php echo $GLOBALS["global_s3Assets"]; ?>/images/the-project/logo-iahsp-footer.png" class="subfooter-icons" alt="International Association of Home Staging Professionals" /></a></li>
                            <li><a href="http://www.iahsp.com/foundation.php"><img src="<?php echo $GLOBALS["global_s3Assets"]; ?>/images/the-project/iahsp-transparent.png" class="subfooter-icons" /></a></li>
                            <li><a href="http://www.bbb.org/western-washington/business-reviews/home-staging/stagedhomescom-in-greenbank-wa-13027270#bbbseal" target="_blank"><img src="<?php echo $GLOBALS["global_s3Assets"]; ?>/images/the-project/subfooter-logo-bbb.png" class="subfooter-icons" alt="Better Business Bureau" /></a></li>
                        </ul>
                    </div><!-- //col-md-6 -->
                </div><!-- //row -->
            </div><!-- //subfooter-inner -->
        </div><!-- //container -->
    </div><!-- //subfooter -->
    <!-- .subfooter end -->
</footer>

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- Modernizr javascript -->
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/modernizr.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Appear javascript -->
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/waypoints/jquery.waypoints.min.js"></script>
<!-- Count To javascript -->
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/jquery.countTo.js"></script>
<!-- Parallax javascript -->
<script src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/jquery.parallax-1.1.3.js"></script>
<!-- Contact form -->
<script src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/jquery.validate.js"></script>
<!-- Owl carousel javascript -->
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/owlcarousel2/owl.carousel.min.js"></script>
<!-- SmoothScroll javascript -->
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/plugins/SmoothScroll.js"></script>
<!-- Initialization of Plugins -->
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/js/template.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript" src="<?php echo $GLOBALS['global_webTemplate']; ?>/js/custom.js"></script>

<!-- StagedHomes.com Development -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/stagedhomes.js"></script>

<?php wp_footer(); ?>

</body>
</html>
