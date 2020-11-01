@extends('admin.layout.app')
@section('content')
   
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Orders</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="products.html">Orders</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add New Order</h4>
                                </div>
                                <form action="" method="POST">
                                    <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <h3 style="text-decoration: underline;">Order Basic Details</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>User ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter User ID" name="user_id" id="user_id">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Product ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Product ID" name="product_id" id="product_id">
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Quantity</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Product Quantity" name="quantity" id="quantity">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Subtotal</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Amount" name="subtotal" id="subtotal">
                                                </div>
                                            </div>
                                             <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Grand Total</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Amount" name="grand_total" id="grand_total">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Order Status</b></label>
                                                    <select class="form-control" name="ord_status">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                </div>
                                            </div>
                                             <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Payment Mode</b></label>
                                                    <select class="form-control" name="pay_mode">
                                                        <option>Online Payment</option>
                                                        <option>Cash on Delivery (COD)</option>
                                                </div>
                                            </div>
                                             <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Due Amount</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Amount" name="due_amount" id="due_amount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6"
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Deliverymen ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Deliverymen ID" name="deliverymen_id" id="deliverymen_id">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Cupon ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Product ID" name="cupon_id" id="cupon_id">
                                                </div>
                                            </div>
                                          </div>
                                          <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Reviews</b></label>
                                                    <textarea class="form-control " rows="1 " placeholder="Enter Reviews... " name="reviews" id="reviews "></textarea>
                                                </div>
                                            </div>
                                           {{--  <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Ratings</b></label>
                                                    <select class="form-control" name="pay_mode">
                                                        <option></option>
                                                        <option></option>
                                                        <option></option>
                                                        <option></option>
                                                        <option></option>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <button class="save-btn hover-btn " type="submit ">Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
     

@endsection