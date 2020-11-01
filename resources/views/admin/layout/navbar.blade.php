<nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
    <a class="navbar-brand logo-brand" href="index.html">
        <img src="/favicon-32x32.png" alt="">
        {{config('app.name')}}
    </a>
      <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
      <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/index.html" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
      <ul class="navbar-nav ml-auto mr-md-0">
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item admin-dropdown-item" href="edit_profile.html">Edit Profile</a>
  				    <a class="dropdown-item admin-dropdown-item" href="change_password.html">Change Password</a>
              <a class="dropdown-item admin-dropdown-item" href="login.html">Logout</a>
            </div>
        </li> --}}
        <li class="ui dropdown"> 
						<a href="#" class="opts_account">
							@auth
							{{-- <img src="src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"> --}}

							@if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
							<button class="user-avatar-ui">
								<img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
									alt="{{ Auth::user()->name }}" />
							</button>
							@else
							<button class="user-avatar-ui">
								<div>{{ Auth::user()->name }}</div>

								<div class="ml-1">
									<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
										<path fill-rule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
											clip-rule="evenodd" />
									</svg>
								</div>
							</button>
							@endif

							{{ Auth::user()->name}}
							<i class="uil uil-angle-down"></i>
							@else
							Login / signup
							<i class="uil uil-angle-down"></i>
							@endif
						</a>
						<div class="menu dropdown_account">
							<div class="night_mode_switch__btn">
								<a href="#" id="night-mode" class="btn-night-mode">
									<i class="uil uil-moon"></i> Dark Mode
									<span class="btn-night-mode-switch">
										<span class="uk-switch-button"></span>
									</span>
								</a>
							</div>
							{{-- <a href="dashboard_overview" class="item channel_item"><i class="uil uil-apps icon__1"></i>Dashbaord</a> --}}
							<a href="dashboard_my_orders" class="item channel_item"><i class="uil uil-box icon__1"></i>My Orders</a>
							{{-- <a href="dashboard_my_wishlist" class="item channel_item"><i class="uil uil-heart icon__1"></i>My
								Wishlist</a>
							<a href="dashboard_my_wallet" class="item channel_item"><i class="uil uil-usd-circle icon__1"></i>My
								Wallet</a> --}}
							<a href="dashboard_my_addresses" class="item channel_item"><i
									class="uil uil-location-point icon__1"></i>My Address</a>
							<a href="offers" class="item channel_item"><i class="uil uil-gift icon__1"></i>Offers</a>
							{{-- <a href="faq" class="item channel_item"><i class="uil uil-info-circle icon__1"></i>Faq</a> --}}
							@auth
							<a href="/logout" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>
							@else
							<a href="/login" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Login</a>
							<a href="/register" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Signup</a>

							@endif
						</div>
					</li>
      </ul>
  </nav>