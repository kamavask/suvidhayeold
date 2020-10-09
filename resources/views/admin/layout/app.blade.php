<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>test</title>
	<link href="admin/css/styles.css" rel="stylesheet">
	<link href="admin/css/admin-style.css" rel="stylesheet">
	
	<!-- Vendor Stylesheets -->
	<link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	
	<!-- froala Editor Stylesheets -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/froala_editor.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/froala_style.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/code_view.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/colors.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/emoticons.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/image_manager.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/image.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/line_breaker.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/table.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/char_counter.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/video.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/fullscreen.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/vendor/froala_editor_3.1.1/css/plugins/file.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css') }}">
	
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
        <a class="navbar-brand logo-brand" href="index.html">Gambo Supermarket</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/index.html" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
        <ul class="navbar-nav ml-auto mr-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item admin-dropdown-item" href="edit_profile.html">Edit Profile</a>
                    <a class="dropdown-item admin-dropdown-item" href="change_password.html">Change Password</a>
                    <a class="dropdown-item admin-dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            Posts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link sub_nav_link" href="posts.html">All Posts</a>
                                <a class="nav-link sub_nav_link" href="add_post.html">Add New</a>
                                <a class="nav-link sub_nav_link" href="post_categories.html">Categories</a>
                                <a class="nav-link sub_nav_link" href="post_tags.html">Tags</a>
                            </nav>
                        </div>		
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocations" aria-expanded="false" aria-controls="collapseLocations">
                            <div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></div>
                            Locations
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLocations" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link sub_nav_link" href="locations.html">All Locations</a>
                                <a class="nav-link sub_nav_link" href="add_location.html">Add Location</a>
                            </nav>
                        </div>		
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAreas" aria-expanded="false" aria-controls="collapseAreas">
                            <div class="sb-nav-link-icon"><i class="fas fa-map-marked-alt"></i></div>
                            Areas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseAreas" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link sub_nav_link" href="areas.html">All Areas</a>
                                <a class="nav-link sub_nav_link" href="add_area.html">Add Area</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            Categories
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseCategories" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link sub_nav_link" href="category.html">All Categories</a>
                                <a class="nav-link sub_nav_link" href="add_category.html">Add Category</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseShops" aria-expanded="false" aria-controls="collapseShops">
                            <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                            Shops
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseShops" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link sub_nav_link" href="shops.html">All Shops</a>
                                <a class="nav-link sub_nav_link" href="add_shop.html">Add Shop</a>
                            </nav>
                        </div>
                        <a class="nav-link active collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                            <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                            Products
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseProducts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link sub_nav_link" href="products.html">All Products</a>
                                <a class="nav-link sub_nav_link active" href="add_product.html">Add Product</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="orders.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div>
                            Orders
                        </a>
                        <a class="nav-link" href="customers.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Customers
                        </a>
                        <a class="nav-link" href="offers.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-gift"></i></div>
                            Offers
                        </a>
                        <a class="nav-link" href="pages.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                        </a>
                        <a class="nav-link" href="menu.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                            Menu
                        </a>
                        <a class="nav-link" href="updater.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            Updater
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                            <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                            Setting
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseSettings" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link sub_nav_link" href="general_setting.html">General Settings</a>
                                <a class="nav-link sub_nav_link" href="payment_setting.html">Payment Settings</a>
                                <a class="nav-link sub_nav_link" href="email_setting.html">Email Settings</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="reports.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                            Reports
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content"> 
             @yield('content')
            <footer class="py-4 bg-footer mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted-1">© 2020 <b>Gambo Supermarket</b>. by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a></div>
                        <div class="footer-links">
                            <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/privacy_policy.html">Privacy Policy</a>
                            <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

<!-- Javascripts -->
<script src="{{ asset('admin/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>

<!-- froala Editor Javascripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/froala_editor.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/align.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/code_beautifier.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/code_view.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/colors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/emoticons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/draggable.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/font_size.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/font_family.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/image.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/file.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/image_manager.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/line_breaker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/link.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/lists.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/paragraph_format.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/paragraph_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/table.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/url.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/entities.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/char_counter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/inline_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/save.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/fullscreen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/vendor/froala_editor_3.1.1/js/plugins/quote.min.js') }}"></script>
<script>
	(function () {
	  new FroalaEditor("#edit", {
		zIndex: 10
	  })
	})()
</script>

  </body>
</html>
