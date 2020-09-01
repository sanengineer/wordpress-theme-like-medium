<?php
/**
 * The sidebar fullwidth containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SAN_WP_Bootstrap
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

// $adsense = "1"; // 0 - For unactivate , 1 - For activate
// $ads_client_id = " "; // Publisher ID
// $ads_slot_id   = " "; // Slot ID
// $ads_format    = "auto";// ADS format - auto (This ad unit can automatically adjust the size of space available on the page.)
// $ads_responsive="true";

?>

<aside id="secondary-asidefullwidth" class="asidefullwidth widget-area col-sm-12 col-lg-8" role="complementary">

<div id="stickyScrll" class="sticky-scroll">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

		<div class="single-ads" id="singleAds">

			<div class="single-ads-title">advertisement</div>
			
            <div class="single-ads-script">

				<div class="example-ads" style="background:#cecece; height:200px"></div> <!-- delete this line after fiil adsense code -->
                    <!-- <?php if($adsense == 1){
                    echo "<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
                            <ins class=\"adsbygoogle\"
                            style=\"display:block\"
                            data-ad-client=\"{$ads_client_id}\"
                            data-ad-slot=\"{$ads_slot_id}\"
                            data-ad-format=\"{$ads_format}\"
                            data-full-width-responsive=\"{$ads_responsive}\"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>";
                            }
                            ?> -->
			</div><!--end single ads script-->
					
		</div><!--end single ads custom-->

		<div class="info-web">
			<div class="about">
				<nav class="nav-about">
					<ul class="underlist-link">
						<li class="list-link">
							<a class="link-about" href="/about" target="_blank">About us</a>
						</li>
						<li class="list-link">
							<a class="link-contact" href="/contact">Contact</a>
						</li>
						<li class="list-link">
							<a class="link-privacy-policy" href="/privacy-policy">Privacy Policy</a>
						</li>
						<li class="list-link">
							<a class="link-terms" href="/terms-and-conditions">Terms</a>
						</li>
						<li class="list-link">
							<a class="link-archive" href="#">Archive</a>
						</li>
						<li class="list-link">
							<a class="link-category" href="#">Category</a>
						</li>
						<li class="list-link">
							<a class="link-tags" href="#">Hastags</a>
						</li>
					</ul>
				</nav>
				<span class="copyright">© 2019 <a href="/">monochroomlab</a></span>   
			</div>
		</div>

</aside><!-- #secondary -->
