@extends('layouts.master')

@section('title', 'Clean Blog')

@section('content')

		<section id="content">
			<div class="map">
				<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2>Contact us <small>get in touch with us by filling form below</small></h2>
						<hr class="colorgraph">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md">Send Message</button></div>
						</form>
						<hr class="colorgraph">

					</div>
				</div>
			</div>
		</section>

	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/animate.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
	<script src="js/custom.js"></script>
	<script>
		jQuery(document).ready(function($) {

			//Google Map
			var get_latitude = $('#google-map').data('latitude');
			var get_longitude = $('#google-map').data('longitude');

			function initialize_google_map() {
				var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
				var mapOptions = {
					zoom: 14,
					scrollwheel: false,
					center: myLatlng
				};
				var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize_google_map);

		});
	</script>

	<script src="contactform/contactform.js"></script>

</body>

</html>
@endsection