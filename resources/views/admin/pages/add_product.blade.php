{{-- @extends('admin.layout.app')
@section('content')

<body class="sb-nav-fixed"> 
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Products</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="products.html">Products</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add New Product</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <h3 style="text-decoration: underline;">Product Basic Details</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Product Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Add Product Name" name="prod_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <!-- Default checked -->
                                                <div class="custom-control custom-switch" style="margin-top: 35px;">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="virtual">
                                                    <label class="custom-control-label" for="customSwitch1">Virtuals</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <!-- Default switch -->
                                                <div class="custom-control custom-switch" style="margin-top:35px">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitches" name="downloadable">
                                                    <label class="custom-control-label" for="customSwitches">Downloadable</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1" class="form-label"><b>Image ID</b></label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_id">
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Highlights</b></label>
                                                    <textarea class="form-control " rows="2 " placeholder="Enter Highlights " name="highlight " id="highlights "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Short Discription</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Description " name="short_desc " id="s_desc "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Specifications</b></label>
                                                    <textarea class="form-control " rows="4 " placeholder="Enter Specifications " name="specification " id="speci "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Brand</b></label>
                                                    <input type="text " class="form-control " placeholder="Enter Provider Code " name="brand " id="pro ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Weights</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Weight (e.g.:30 Kg)" name="weight" id="weight">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Sizes</b></label>
                                                    <select class="form-control" name="size">
                                                        <option>XS (Extra Small)</option>
                                                        <option>S (Small)</option>
                                                        <option>M (Medium)</option>
                                                        <option>L (Large)</option>
                                                        <option>XL (Extra Large)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Dimensions</b></label>
                                                    <input type="text" class="form-control" placeholder="Length-Bregth-height (e.g.:12cm-4cm-7cm)" name="dimensions" id="dimension">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter ID" name="cat_id" id="Category_ID">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Varient ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter ID" name="variend_id" id="v_id">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3 style="text-decoration: underline;">Pricing and Tax</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Regular Price</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Price" name="r_price">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Sales Price</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Price" name="s_price">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Tax ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Text ID" name="tax_id" id="tax_id">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Shipping ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Shipping ID" name="shipping_id" id="shipping_id">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3 style="text-decoration: underline;">Vendor And Stock Details</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>SKU</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter SKU" name="sku" id="sku">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Stock</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter stock" name="stock" id="stock">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Stock Alert</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Stock Alert" name="stock_alert" id="s_alert">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Back-Order Options</b></label>
                                                    <select class="form-control" name="backorder">
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                        <option>option 3</option>
                                                        <option>option 4</option>
                                                        <option>option 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Max Number of order in bulk</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Number of Orders" name="bulk_no" id="bulk">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3 style="text-decoration: underline">SEO</h3>
                                        <div class="row" style="margin-bottom:1%">

                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Tags</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Tags" name="tags" id="tag">
                                                </div>
                                            </div>

                                        </div>
                                        <button class="save-btn hover-btn " type="submit ">Next Page</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>   
</body>

@endsection --}}


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Gambo Supermarket Admin</title>
	<link href="{{asset('admin/css/styles.css')}}" rel="stylesheet">
	<link href="{{asset('admin/css/admin-style.css')}}" rel="stylesheet">
	
	<!-- Vendor Stylesheets -->
	<link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
	
	<!-- froala Editor Stylesheets -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/froala_editor.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/froala_style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/code_view.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/colors.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/emoticons.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/image_manager.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/image.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/line_breaker.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/table.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/char_counter.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/video.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/fullscreen.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/froala_editor_3.1.1/css/plugins/file.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css')}}">
	
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
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Products</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="products.html">Products</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Add New Product</h4>
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
											<div class="form-group">
												<label class="form-label">Name*</label>
												<input type="text" class="form-control" placeholder="Category Name">
											</div>
											<div class="form-group">
												<label class="form-label">Category*</label>
												<select id="categtory" name="categtory" class="form-control">
													<option selected>--Select Category--</option>
													<option value="1">Fruits & Vegetables</option>
													<option value="2">Grocery & Staples</option>
													<option value="3">Dairy & Eggs</option>
													<option value="4">Beverages</option>
													<option value="5">Snacks</option>
													<option value="6">Home Care</option>
													<option value="7">Noodles & Sauces</option>
													<option value="8">Personal Care</option>
													<option value="9">Pet Care</option>
													<option value="10">Meat & Seafood</option>
													<option value="11">Electronics</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">MRP*</label>
												<input type="text" class="form-control" placeholder="$0">
											</div>
											<div class="form-group">
												<label class="form-label">Discount MRP*</label>
												<input type="text" class="form-control" placeholder="$0">
											</div>
											<div class="form-group">
												<label class="form-label">Status*</label>
												<select id="status" name="status" class="form-control">
													<option selected>Active</option>
													<option value="1">Inactive</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Description*</label>
												<div class="card card-editor">
													<div class="content-editor">
														 <div id='edit'></div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="form-label">Category Image*</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
														<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
													</div>
												</div>
												<div class="add-cate-img-1">
													<img src="{{asset('admin/images/product/img-11.css')}}" alt="">
												</div>
											</div>
											<div class="form-group">
												<label class="form-label">More Image*</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="inputGroupFile05" aria-describedby="inputGroupFileAddon05">
														<label class="custom-file-label" for="inputGroupFile05">Choose Image</label>
													</div>
												</div>
												<ul class="add-produc-imgs">
													<li>
														<div class="add-cate-img-1">
															<img src="{{asset('admin/images/product/big-1.css')}}" alt="">
														</div>
													</li>
													<li>
														<div class="add-cate-img-1">
															<img src="{{asset('admin/images/product/big-2.css')}}" alt="">
														</div>
													</li>
													<li>
														<div class="add-cate-img-1">
															<img src="{{asset('admin/images/product/big-3.css')}}" alt="">
														</div>
													</li>
													<li>
														<div class="add-cate-img-1">
															<img src="{{asset('admin/images/product/big-4.css')}}" alt="">
														</div>
													</li>
												</ul>
											</div>
											<button class="save-btn hover-btn" type="submit">Add New Product</button>
										</div> 
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </main>
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
        <script src="{{asset('admin/js/jquery-3.4.1.min.css')}}"></script>
        <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.css')}}"></script>
        <script src="{{asset('admin/js/scripts.css')}}"></script>
		
		<!-- froala Editor Javascripts -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css')}}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/froala_editor.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/align.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/code_beautifier.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/code_view.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/colors.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/emoticons.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/draggable.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/font_size.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/font_family.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/image.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/file.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/image_manager.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/line_breaker.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/link.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/lists.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/paragraph_format.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/paragraph_style.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/video.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/table.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/url.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/entities.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/char_counter.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/inline_style.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/save.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/fullscreen.min.css')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/froala_editor_3.1.1/js/plugins/quote.min.css')}}"></script>
		<script>
			(function () {
			  new FroalaEditor("#edit", {
				zIndex: 10
			  })
			})()
		</script>
		
    </body>
</html>
