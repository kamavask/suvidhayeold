@extends('Dashboard.layout.app')
@section('content')
     <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Shipping Class</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Shipping Class</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_shop.html" class="add-btn hover-btn">Add New Product</a>
              </div>
              	<div class="col-lg-3 col-md-4">
								<div class="bulk-section mt-30">
									<div class="input-group">
										<select id="action" name="action" class="form-control">
											<option selected>Bulk Actions</option>
											<option value="1">Active</option>
											<option value="2">Inactive</option>
											<option value="3">Delete</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Apply</button>
										</div>
									</div>
								</div>
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
										<h4>Shipping Class</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th><input type="checkbox" class="check-all"></th>
														<th>ID</th>
                            <th>Product Name</th>
                            <th>Category Id</th>
                            <th>Brand</th>
                            <th>Highlight</th>
                            <th>Short Descriptio</th>
                            <th>Specification</th>
                            <th>Image ID</th>
                            <th>Dimensions</th>
                            <th>Weight</th>
                            <th>Size</th>
                            <th>Virtual</th>
                            <th>Downloadable</th>
                            <th>Regular Price</th>
                            <th>Sales Price</th>
                            <th>Varient ID</th>
                            <th>SKU</th>
                            <th>Stock</th>
                            <th>Stock Alert</th>
                            <th>Backorder</th>
                            <th>Tax ID</th>
                            <th>Shipping ID</th>
                            <th>Bulk No</th>
                            <th>Tags</th>													
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
													  <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="4"></td>
														<td>2</td>
														<td>Shop Name</td>
														<td>Rock Smith</td>
														<td>New Delhi</td>
													  <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="3"></td>
														<td>3</td>
														<td>Shop Name</td>
														<td>Davinder Singh</td>
														<td>Chandigarh</td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="2"></td>
														<td>4</td>
														<td>Shop Name</td>
														<td>John Doe</td>
														<td>Bangluru</td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="1"></td>
														<td>5</td>
														<td>Shop Name</td>
														<td>Amritpal Singh</td>
														<td>Mumbai</td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
                            <td>Ludhiana</td>
                            <td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
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
</body>
@endsec
@endsection