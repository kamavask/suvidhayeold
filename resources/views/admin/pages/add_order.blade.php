@extends('admin.layout.app')
@section('content')
    <body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Order</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Order</a></li>
                        <li class="breadcrumb-item active">Add Order</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Orders</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Order Code</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Order Code" name="category_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>User ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter User ID" name="category_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Product ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Product ID" name="category_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Quality</b></label>
                                                    <select class="form-control" name="category_type">
                        					 				<option>Good</option>
                        					 				<option>Bad</option>
                        					 			</select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Order Status</b></label>
                                                    <select class="form-control" name="category_type">
                        					 				<option>Active</option>
                        					 				<option>Inactive</option>
                        					 			</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 1%">
                                             <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Due Amount</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Due Amount" name="category_name">
                                                </div>
                                            </div>
                                             <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Payment Mode</b></label>
                                                    <select class="form-control" name="category_type">
                        					 				<option>Cash on Delivery</option>
                        					 				<option>Online Payment</option>
                        					 			</select>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Coupon Code</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Cuopon Code" name="category_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Deliverymen Code</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Deliverymen Code" name="category_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Ratings</b></label>
                                                    <select class="form-control" name="category_type">
                        					 				<option>5</option>
                                                             <option>4</option>
                                                             <option>3</option>
                                                             <option>2</option>
                                                             <option>1</option>
                        					 			</select>
                                                </div>
                                            </div>
                                           <div class="col-sm-6">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Reviews</b></label>
                                                    <textarea class="form-control " rows="1 " placeholder="Enter Reviews " name="Product4 " id="l_desc "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="save-btn hover-btn " type="submit ">Submit</button>
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
@endsection