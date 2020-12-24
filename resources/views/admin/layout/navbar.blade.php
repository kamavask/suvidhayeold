<nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
    <a class="navbar-brand logo-brand" href="index.html">
        <img style="width: 200px; margin-top: -40px; margin-left: -20px;" src="/store/images/logo/white.png" alt="">
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>
    <a href="/admin/pages/admin-dashboard" class="frnt-link">
        <h3><i class="fas fa-external-link-alt"></i>Home</h3>
    </a>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            @if(session()->has('success_message'))
        	    <div class="alert alert-success">
        	        <h1>{{session()->get('success_message')}}</h1>
        	    </div>
        	@endif
        	@if(count($errors) >0)
        	    <div class="alert alert-danger" style="margin-bottom: 0px !important;">
        	        <ul>
        	            @foreach($errors->all() as $error)
        	            <li>
                            <h2>{{ $error }}</h2>
                        </li>
        	            @endforeach
        	        </ul>
        	    </div>
        	@endif
        </li>
	</ol>
    <ul class="navbar-nav ml-auto mr-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item admin-dropdown-item" href="edit_profile.html">
                    Edit Profile
                </a>
			    <a class="dropdown-item admin-dropdown-item" href="change_password.html">
                    Change Password
                </a>
                <a class="dropdown-item admin-dropdown-item" href="login.html">
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>