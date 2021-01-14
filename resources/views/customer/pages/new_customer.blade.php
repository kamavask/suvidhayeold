<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=9">
  <meta name="description" content="Suvidhaye">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <title>Welcome - Suvidhaye</title>

  <!-- Favicon Icon -->
  <link rel="icon" type="image/png" href="customer/main_images/logo/suvidhaye_logo.png">

  <!-- Stylesheets -->
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/night-mode.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
  <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">
  <script src="https://kit.fontawesome.com/d25269cf83.js" crossorigin="anonymous"></script>

</head>

<body>
<!-- Header Start -->
<header class="header clearfix">
	<div class="top-header-group">
		<div class="top-header">
			<div class="res_main_logo">
				<a href="/"><img src="\store\images\logo\white.png" alt=""></a>
			</div>
			<div class="main_logo" id="logo">
				<a href="/"><img src="\store\images\logo\white.png" alt=""></a></a>
				<a href="/"><img class="logo-inverse" src="\store\images\logo\black.png" alt=""></a>
			</div>
			<div class="header_right">
				<ul>
					<li>
						<a href="tel:7024027407" class="offer-link"><i class="fa fa-phone-square" aria-hidden="true"></i> 7024027407</a>
					</li>
					<li class="ui dropdown">
						<a href="#" class="opts_account" style="display: table">
							@auth
									@if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
										<button class="user-avatar-ui">
											<img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->username }}" />
										</button>
										<p class="title_name" style="vertical-align: middle; display: table-cell; padding-left: 5px;">{{ Auth::user()->username}}</p>
										<i class="uil uil-angle-down"></i>
										@else
										<button class="user-avatar-ui">
											<div>{{ Auth::user()->username }}</div>
											<div class="ml-1">
												<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
													<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
												</svg>
											</div>
										</button>
										<p class="title_name" style="vertical-align: middle; display: table-cell; padding-left: 5px;">{{ Auth::user()->username}}</p>
										<i class="uil uil-angle-down"></i>
									@endif
									
								@else
									<p class="title_name" style="vertical-align: middle; display: table-cell; padding-left: 5px;">Login / signup</p>
									<i class="uil uil-angle-down"></i>
							@endauth
						</a>
						<div class="menu dropdown_account">
						 <div class="night_mode_switch__btn">
                <a href="#" id="night-mode" class="btn-night-mode">
									<i class="uil uil-moon"></i> 
									Night mode 
									<span class="btn-night-mode-switch">
                    <span class="uk-switch-button"></span>
                  </span>
                </a>
              </div>
							@auth
								<a href="/logout" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>
							@else
								<a href="/login" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Login</a>
								<a href="/register" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Signup</a>
							@endif
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="sub-header-group">
		<div class="sub-header">
			<div class="ui dropdown">
				
			</div>
			<nav class="navbar navbar-expand-lg navbar-light py-3">
				<div class="container-fluid">
					<button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i
							class="uil uil-bars"></i></button>
					<div
						class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu"
						id="navbarSupportedContent">
						<ul class="navbar-nav main_nav align-self-stretch">
							<li class="nav-item">
								<a href="/" class="nav-link active" title="Home">
									Welcome To <strong>Suvidhaye</strong>
								</a>
							</li>
							<li class="nav-item">
								<div>
                	@if(session()->has('success_message'))
                	<div class="alert alert-success">
                	    {{session()->get('success_message')}}
                	</div>
                	@endif
                	@if(count($errors) >0)
                	<div class="alert alert-danger">
                	    <ul>
                	        @foreach($errors->all() as $error)
                	        <li>{{ $error }}</li>
                	        @endforeach
                	    </ul>
                	</div>
                	@endif
            		</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</header>
<!-- Body Start -->
	<div class="wrapper">
		<div class="dashboard-group">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="user-dt">
							<div class="user-img">
								<img src="images/avatar/img-5.jpg" alt="">
								<div class="img-add">													
									<input type="file" id="file">
									<label for="file"><i class="uil uil-camera-plus"></i></label>
								</div>
              </div>
              @auth
                <h4>{{ Auth::user()->username}}</h4>
              @endauth
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-8">
						<div class="dashboard-right">
							<div class="row">
								<div class="col-md-12">
									<div class="main-title-tab">
                    
                      <h4><i class="uil uil-location-point"></i>We Welcome You @auth {{ Auth::user()->username}}@else . @endauth Just One Last Step Remaining.</h4>
                    
									</div>
                </div>
								<div class="col-lg-12 col-md-12">
                  <form method="POST" action="/add-new-customer-details"> 
                    @csrf 
									  <div class="pdpt-bg">
									  	<div class="address-body">
									  		<div class="address-item">
                          <div class="row" style="width:100%;">
                            <div class="col-lg-4 col-md-12">
													    <div class="form-group">
													    	<label class="control-label">First Name</label>
													    	<input id="flat" name="fname" type="text" placeholder="First Name" class="form-control input-md">
													    </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
													    <div class="form-group">
													    	<label class="control-label">Middle Name</label>
													    	<input id="flat" name="mname" type="text" placeholder="Middle Name (Optional)" class="form-control input-md" >
													    </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
													    <div class="form-group">
													    	<label class="control-label">Second Name</label>
													    	<input id="flat" name="lname" type="text" placeholder="Last Name" class="form-control input-md" >
													    </div>
                            </div>
                          </div>
                        </div>
									  		<div class="address-item">
									  			<div class="row" style="width:100%;">
                            <div class="col-lg-4 col-md-12">
													    <div class="form-group">
													    	<label class="control-label">Date Of Birth</label>
													    	<input id="flat" name="dob" type="date" class="form-control input-md" >
													    </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
													    <div class="form-group">
													    	<label class="control-label">Gender</label>
													    	<select class="form-control input-md" name="gender" id="flat">
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                                </select>
													    </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
													    <div class="form-group">
													    	<label class="control-label">Phone number</label>
													    	<input id="flat" name="Phoneno" type="number" placeholder="Phone no" class="form-control input-md" >
													    </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
												    	<div class="form-group mb-0">
												    		<div class="address-btns">
												    			<button class="save-btn14 hover-btn">Save</button>
												    		</div>
												    	</div>
												    </div>
                          </div>
									  		</div>
									  	</div>
                    </div>
                    {{-- <div class="pdpt-bg" style="margin-top:0px;">
                      <div class="pdpt-title">
									  		<h4>Address (Optional)</h4>
									  	</div>
									  	<div class="address-body">
									  		<div class="address-item">
									  			<div class="row" style="width:100%;">
												    <div class="col-lg-12 col-md-12">
												    	<div class="form-group">
												    		<label class="control-label">Flat / House / Office No.*</label>
												    		<input id="flat" name="flat" type="text" placeholder="Address" class="form-control input-md" >
												    	</div>
												    </div>
												    <div class="col-lg-12 col-md-12">
												    	<div class="form-group">
												    		<label class="control-label">Street / Society / Office Name*</label>
												    		<input id="street" name="street" type="text" placeholder="Street Address" class="form-control input-md">
												    	</div>
												    </div>
												    <div class="col-lg-6 col-md-12">
												    	<div class="form-group">
												    		<label class="control-label">Pincode*</label>
												    		<input id="pincode" name="pincode" type="text" placeholder="Pincode" class="form-control input-md" >
												    	</div>
												    </div>
												    <div class="col-lg-6 col-md-12">
												    	<div class="form-group">
												    		<label class="control-label">Locality*</label>
												    		<input id="Locality" name="city" type="text" placeholder="Enter City" class="form-control input-md" >
												    	</div>
												    </div>
												    <div class="col-lg-12 col-md-12">
												    	<div class="form-group mb-0">
												    		<div class="address-btns">
												    			<button class="save-btn14 hover-btn">Save</button>
												    		</div>
												    	</div>
												    </div>
											    </div>
									  		</div>
									  	</div>
									  </div> --}}
                  </form>
                </div>
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>
	<!-- Body End -->
	<!-- Footer Start -->
	<footer class="footer">
		<div class="footer-first-row">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<ul class="call-email-alt">
							<li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>1800-000-000</a></li>
							<li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i>info@gambosupermarket.com</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="social-links-footer">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="footer-second-row">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							<h4>Categories</h4>
							<ul>
								<li><a href="#">Fruits and Vegetables</a></li>
								<li><a href="#">Grocery & Staples</a></li>
								<li><a href="#">Dairy & Eggs</a></li>
								<li><a href="#">Beverages</a></li>
								<li><a href="#">Snacks</a></li>
								<li><a href="#">Home Care</a></li>
								<li><a href="#">Noodles & Sauces</a></li>
								<li><a href="#">Personal Care</a></li>
								<li><a href="#">Pet Care</a></li>
								<li><a href="#">Meat & Seafood</a></li>
								<li><a href="#">Electronics</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							<h4>Useful Links</h4>
							<ul>
								<li><a href="about_us.html">About US</a></li>
								<li><a href="shop_grid.html">Featured Products</a></li>
								<li><a href="offers.html">Offers</a></li>
								<li><a href="our_blog.html">Blog</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="career.html">Careers</a></li>
								<li><a href="contact_us.html">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							<h4>Top Cities</h4>
							<ul>
								<li><a href="#">Gurugram</a></li>
								<li><a href="#">New Delhi</a></li>
								<li><a href="#">Bangaluru</a></li>
								<li><a href="#">Mumbai</a></li>
								<li><a href="#">Hyderabad</a></li>
								<li><a href="#">Kolkata</a></li>
								<li><a href="#">Ludhiana</a></li>
								<li><a href="#">Chandigrah</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item-app">
							<h4>Download App</h4>
							<ul>
								<li><a href="#"><img class="download-btn" src="images/download-1.svg" alt=""></a></li>
								<li><a href="#"><img class="download-btn" src="images/download-2.svg" alt=""></a></li>
							</ul>
						</div>
						<div class="second-row-item-payment">
							<h4>Payment Method</h4>
							<div class="footer-payments">
								<ul id="paypal-gateway" class="financial-institutes">
									<li class="financial-institutes__logo">
									  <img alt="Visa" title="Visa" src="images/footer-icons/pyicon-6.svg">
									</li>
									<li class="financial-institutes__logo">
									  <img alt="Visa" title="Visa" src="images/footer-icons/pyicon-1.svg">
									</li>
									<li class="financial-institutes__logo">
									  <img alt="MasterCard" title="MasterCard" src="images/footer-icons/pyicon-2.svg">
									</li>
									<li class="financial-institutes__logo">
									  <img alt="American Express" title="American Express" src="images/footer-icons/pyicon-3.svg">
									</li>
									<li class="financial-institutes__logo">
									  <img alt="Discover" title="Discover" src="images/footer-icons/pyicon-4.svg">
									</li>
								</ul>
							</div>
						</div>
						<div class="second-row-item-payment">
							<h4>Newsletter</h4>
							<div class="newsletter-input">
								<input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md" >
								<button class="newsletter-btn hover-btn" type="submit"><i class="uil uil-telegram-alt"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-last-row">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-bottom-links">
							<ul>
								<li><a href="about_us.html">About</a></li>
								<li><a href="contact_us.html">Contact</a></li>
								<li><a href="privacy_policy.html">Privacy Policy</a></li>
								<li><a href="term_and_conditions.html">Term & Conditions</a></li>
								<li><a href="refund_and_return_policy.html">Refund & Return Policy</a></li>
							</ul>
						</div>
						<div class="copyright-text">
							<i class="uil uil-copyright"></i>Copyright 2020 <b>Gambolthemes</b> . All rights reserved
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<!-- Javascripts -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/product.thumbnail.slider.js"></script>
	<script src="js/offset_overlay.js"></script>
	<script src="js/night-mode.js"></script>
	
	
</body>
</html>