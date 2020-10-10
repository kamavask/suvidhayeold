@extends('admin.layout.app')
@section('content')
    
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Coupons</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Coupons</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_shop.html" class="add-btn hover-btn">Add New Coupon</a>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>All Coupons</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px"><input type="checkbox" class="check-all"></th>
														<th>Coupon Code</th>
														<th>Product ID</th>
														<th>Content</th>
														<th>Price Range</th>
														<th>User Code</th>
                            <th>Description</th>
                            <th>Usage Limit</th>
                            <th>Property</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>098</td>
                            <td>Shop Name</td>
                            <td>200-300</td>
                            <td>1234</td>
                            <td>Joginder Singh</td>
                            <td>2 Hour</td>
														<td>Ludhiana</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>098</td>
                            <td>Shop Name</td>
                            <td>200-300</td>
                            <td>1234</td>
                            <td>Joginder Singh</td>
                            <td>2 Hour</td>
														<td>Ludhiana</td>
													</tr>
												  <tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>098</td>
                            <td>Shop Name</td>
                            <td>200-300</td>
                            <td>1234</td>
                            <td>Joginder Singh</td>
                            <td>2 Hour</td>
														<td>Ludhiana</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>098</td>
                            <td>Shop Name</td>
                            <td>200-300</td>
                            <td>1234</td>
                            <td>Joginder Singh</td>
                            <td>2 Hour</td>
														<td>Ludhiana</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>098</td>
                            <td>Shop Name</td>
                            <td>200-300</td>
                            <td>1234</td>
                            <td>Joginder Singh</td>
                            <td>2 Hour</td>
														<td>Ludhiana</td>
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

@endsection