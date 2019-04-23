@extends('layouts.frontend')

@section('content')

<!-- Breadcrumbs & Page Title Start -->
        <div class="breadcrumbs-title bg-img-4 parallax overlay dark-5 blank-space">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs-menu ptb-150">
                            <h1 class="l-height">Contact Us</h1>
                            <ul class="clearfix">
                                <li><a href="{{ asset('/') }}">Home</a> <i class="zmdi zmdi-chevron-right"></i></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- Breadcrumbs & Page Title End -->
        <!-- Contact Info Section Start -->
		<div class="contact-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-7 mobi-mb-50">
						<div class="section-title mb-45">
                            <h2 class="mb-5">Leave a Message</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity<br> ave suffered
                             aleration in some orm altime to share.</p>
                            <hr class="line">
                        </div>
						<form class="custom-input" id="contact_form" action="" method="post">
							<input type="text" name="name"  placeholder="Name" >
							<input type="email" name="email"  placeholder="Email" >
							<input type="text" name="phone"  placeholder="Phone Number" >
							<textarea name="msg"  rows="3" placeholder="Message"></textarea>
							<button class="btn" type="submit" name="submit"  data-complete-text="Well done!">Submit Now</button>
						</form>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5">
						<div class="section-title mb-45 ml-minus-15">
                            <h2 class="mb-5">Get in Touch</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                aleration in some orm altime to share.</p>
                            <hr class="line">
                        </div>
						<div class="contact-info ml-minus-15">
							<ul>
								<li>
									<h5><span>Phone :</span> <a href="tel:+9987587454752">+99 875 874 547 52</a></h5>
								</li>
								<li>
									<h5><span>Email :</span> <a href="mailto:company@gmail.com">company@gmail.com</a></h5>
								</li>
								<li>
									<h5><span>Address :</span> 17 Street Name Here, Office 80, New Work, US</h5>
								</li>
							</ul>
							<div class="social-icon style1 text-left">
								<ul class="clearfix d-inblock l-height">
									<li><a href="https://www.facebook.com/regaltheme/" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
									<li><a href="https://twitter.com/regaltheme" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
									<li><a href="https://instagram.com/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
									<li><a href="https://linkedin.com/" target="_blank"><i class="zmdi zmdi-linkedin"></i></a></li>
									<li><a href="https://www.pinterest.com/regaltheme/" target="_blank"><i class="zmdi zmdi-pinterest"></i></a></li>
								</ul>
							</div>
							<!-- Change your social media link -->
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Contact Info Section End -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	  
	<script>
	   $(document).ready(function() {
	      $("#contact_form").validate({
		      rules: {
						name: {
						required: true,
						minlength:3,
						maxlength:20
						},
						
						phone: {
						required: true,
						minlength:10,
						maxlength:10
						},
						
						msg: {
						required: true,
						minlength: 20,
						maxlength: 255,
						},
						
						email: {
						required: true,
						email: true,//add an email rule that will ensure the value entered is valid email id.
						maxlength: 255,
						},
						
						messages: {
						name: "Please enter your Name",
						phone: "Please enter your Phone Number",
						email: "Please enter a valid email address"
						},
		      		}

		   });
	   });
	</script>

@endsection