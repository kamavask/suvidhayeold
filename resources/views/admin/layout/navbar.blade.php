<nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
    <a class="navbar-brand logo-brand" href="index.html">
        <img src="/favicon-32x32.png" alt="">
        {{config('app.name')}}
    </a>
      <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
      <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/index.html" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
      <ul class="navbar-nav ml-auto mr-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item admin-dropdown-item" href="edit_profile.html">Edit Profile</a>
  				    <a class="dropdown-item admin-dropdown-item" href="change_password.html">Change Password</a>
              <a class="dropdown-item admin-dropdown-item" href="login.html">Logout</a>
            </div> --}}
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
        </li>
      </ul>
  </nav>