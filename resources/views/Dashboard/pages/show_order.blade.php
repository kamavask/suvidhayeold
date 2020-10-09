@extends('Dashboard.layout.app')
@section('content')
      <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Order</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_shop.html" class="add-btn hover-btn">Add New Order</a>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>All Orders</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
                            <th style="width:60px"><input type="checkbox" class="check-all"></th>
                            <th>Order Code</th>
                            <th>User ID</th>
                            <th>Product ID</th>
														<th>Quality</th>
														<th>Total Price</th>
														<th>Billing Price</th>
														<th>Order Status</th>
                            <th>Deliverymen Code</th>
                            <th>Coupon Code</th>
                            <th>Payment Mode</th>
                            <th>Due Amount</th>
                            <th>Reviews</th>
                            <th>Ratings</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>123</td>
														<td>7655</td>
                            <td>good</td>
                            <td>450</td>
                            <td>460</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td>3456</td>
														<td>098</td>
														<td>Cash</td>
                            <td>322</td>
                            <td>scgfbggfg</td>
                            <td>jkgklk</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>123</td>
														<td>7655</td>
                            <td>good</td>
                            <td>450</td>
                            <td>460</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td>3456</td>
														<td>098</td>
														<td>Cash</td>
                            <td>322</td>
                            <td>scgfbggfg</td>
                            <td>jkgklk</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>123</td>
														<td>7655</td>
                            <td>good</td>
                            <td>450</td>
                            <td>460</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td>3456</td>
														<td>098</td>
														<td>Cash</td>
                            <td>322</td>
                            <td>scgfbggfg</td>
                            <td>jkgklk</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>123</td>
														<td>7655</td>
                            <td>good</td>
                            <td>450</td>
                            <td>460</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td>3456</td>
														<td>098</td>
														<td>Cash</td>
                            <td>322</td>
                            <td>scgfbggfg</td>
                            <td>jkgklk</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>123</td>
														<td>7655</td>
                            <td>good</td>
                            <td>450</td>
                            <td>460</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td>3456</td>
														<td>098</td>
														<td>Cash</td>
                            <td>322</td>
                            <td>scgfbggfg</td>
                            <td>jkgklk</td>
													</tr>
												</tbody>
											</table>
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