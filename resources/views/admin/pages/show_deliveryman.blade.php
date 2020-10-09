@extends('admin.layout.app')
@section('content')
    
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Deliveryman</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Deliveryman</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_shop.html" class="add-btn hover-btn">Add New Deliveryman</a>
							</div>
							<div class="col-lg-5 col-md-6">
								<div class="bulk-section mt-30">
									<div class="search-by-name-input">
										<input class="form-control" placeholder="Search">
									</div>
									<div class="input-group">
										<select id="categeory" name="categeory" class="form-control">
											<option selected>Active</option>
											<option value="1">Inactive</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Search Product</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>Deliverymen</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px"><input type="checkbox" class="check-all"></th>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Deliveryman Code</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Profile Pic</th>
                            <th>Phone Number</th>
                            <th>Users</th>
                            <th>Current Designation</th>
                            <th>Joining Designation</th>
                            <th>Delivery Completed</th>
                            <th>Return Completed</th>
                            <th>Failed Request</th>
                            <th>Date of Joining</th>
                            <th>Date of Leaving</th>
                            <th>Active Start</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>001</td>
                            <td>14565</td>
														<td>Name</td>
														<td> Singh</td>
														<td>ABC</td>
													  <td>1234567778</td>
														<td class="action-btns">
															<a href="shop_view.html" class="view-shop-btn"><i class="fas fa-users"></i></a>
                            </td>
                            <td>Jabalpur</td>
                            <td>Delhi</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>3 Aug</td>
                            <td>3 Aug</td>
                            <td>Yes</td>
													</tr>
														<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>001</td>
                            <td>14565</td>
														<td>Name</td>
														<td> Singh</td>
														<td>ABC</td>
													  <td>1234567778</td>
														<td class="action-btns">
															<a href="shop_view.html" class="view-shop-btn"><i class="fas fa-users"></i></a>
                            </td>
                            <td>Jabalpur</td>
                            <td>Delhi</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>3 Aug</td>
                            <td>3 Aug</td>
                            <td>Yes</td>
													</tr>
														<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>001</td>
                            <td>14565</td>
														<td>Name</td>
														<td> Singh</td>
														<td>ABC</td>
													  <td>1234567778</td>
														<td class="action-btns">
															<a href="shop_view.html" class="view-shop-btn"><i class="fas fa-users"></i></a>
                            </td>
                            <td>Jabalpur</td>
                            <td>Delhi</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>3 Aug</td>
                            <td>3 Aug</td>
                            <td>Yes</td>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>001</td>
                            <td>14565</td>
														<td>Name</td>
														<td> Singh</td>
														<td>ABC</td>
													  <td>1234567778</td>
														<td class="action-btns">
															<a href="shop_view.html" class="view-shop-btn"><i class="fas fa-users"></i></a>
                            </td>
                            <td>Jabalpur</td>
                            <td>Delhi</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>3 Aug</td>
                            <td>3 Aug</td>
                            <td>Yes</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>1</td>
                            <td>001</td>
                            <td>14565</td>
														<td>Name</td>
														<td> Singh</td>
														<td>ABC</td>
													  <td>1234567778</td>
														<td class="action-btns">
															<a href="shop_view.html" class="view-shop-btn"><i class="fas fa-users"></i></a>
                            </td>
                            <td>Jabalpur</td>
                            <td>Delhi</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>3 Aug</td>
                            <td>3 Aug</td>
                            <td>Yes</td>
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