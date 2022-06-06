<!-- footer
			================================================== -->
		<footer>
			<div class="container">

				<div class="up-footer">
					<div class="row">

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget social-widget">
								<a href="index.html">
									<img src="{{asset('front/images/logo.png')}}" alt="">
								</a>
								<p>Donec nec justo eget felis facilisis fermentum.
									Aliquam porttitor mauris sit amet orci. Aenean dignissim pellente squefelis.</p>
								<ul class="social-list">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget newsletter-widget">
								<h3>Newsletter</h3>
								<p>Morbi in sem quis dui placerat ornare. Pellentesque odionisi euismod in pharetra</p>
								<form class="subscribe-form">
									<input type="text" name="email2" id="email2" placeholder="enter your email"/>
									<button type="submit" id="submit-subscribe-form">Subscribe</button>
								</form>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget contact-widget">
								<h3>How To Find Us</h3>
								<p><i class="fa fa-map-marker"></i>Avenue Marina 34568 NY (U.S)</p>
								<p><i class="fa fa-phone"></i>+0987 193-34-76</p>
								<p><i class="fa fa-envelope"></i>statumsupport@mail.com</p>
							</div>
						</div>

					</div>
				</div>

				<p class="copyright-line">Copyright &copy; 2020 Koad Bistro. All rights reserved.</p>
				<a href="#" class="go-top">Back To Top</a>

			</div>

		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<div class="preloader">
		<img alt="" src="{{asset('front/images/loader.gif')}}">
	</div>
	<script src="{{asset('front/js/koad-plugins.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('front/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('front/js/extensions/revolution.extension.parallax.min.js')}}"></script>

	<script src="{{asset('front/js/jquery.countTo.js')}}"></script>
	<script src="{{asset('front/js/popper.js')}}"></script>
	<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en"></script>
	<script src="{{asset('front/js/gmap3.min.js')}}"></script>
	<script src="{{asset('front/js/script.js')}}"></script>

	<script>
		var tpj=jQuery;
		var revapi202;
		tpj(document).ready(function() {
			if (tpj("#rev_slider_202_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_202_1");
			} else {
				revapi202 = tpj("#rev_slider_202_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "js/",
					sliderLayout:"fullscreen",
					dottedOverlay: "none",
					delay: 5000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						onHoverStop: "off",
						arrows: {
					        enable: true,
					        style: 'zeus',
					        tmp: '<div class="tp-title-wrap"><div class="tp-arr-imgholder"></div></div>',
					        left: {
					            container: 'slider',
					            h_align: 'left',
					            v_align: 'center',
					            h_offset: 20,
					            v_offset: 35
					        },

					        right: {
					            container: 'slider',
					            h_align: 'right',
					            v_align: 'center',
					            h_offset: 20,
					            v_offset: 35
					        }
					    },
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 50,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						bullets: {

					        enable: false,
					        style: 'persephone',
					        tmp: '',
					        direction: 'horizontal',
					        rtl: false,

					        container: 'slider',
					        h_align: 'center',
					        v_align: 'bottom',
					        h_offset: 0,
					        v_offset: 55,
					        space: 7,

					        hide_onleave: false,
					        hide_onmobile: false,
					        hide_under: 0,
					        hide_over: 9999,
					        hide_delay: 200,
					        hide_delay_mobile: 1200
 						}
					},
					responsiveLevels: [1140, 1024, 778, 480],
					visibilityLevels: [1140, 1024, 778, 480],
					gridwidth: [1140, 1024, 778, 480],
					gridheight: [700, 700, 600, 600],
					lazyType: "none",
					parallax: {
						type: "scroll",
						origo: "slidercenter",
						speed: 1000,
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
						type: "scroll",
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		}); /*ready*/
	</script>


</body>
</html>
