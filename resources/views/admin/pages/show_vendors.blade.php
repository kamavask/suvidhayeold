@extends('admin.layout.app')
@section('content')
     <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Vendors</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Vendors</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_shop.html" class="add-btn hover-btn">Add New Vendor</a>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>Vendors</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
                            <th style="width:60px"><input type="checkbox" class="check-all"></th>
                            <th>User ID</th>
														<th>Vendor Code</th>
														<th>Shop Name</th>
														<th>Owner Name</th>
														<th>Shop Address</th>
														<th>Address Proof 1</th>
                            <th>Address proof 2</th>
                            <th>Phone Number 1</th>
                            <th>Phone Number 2</th>
                            <th>Phone Number 3</th>
                            <th>Order Completed</th>
                            <th>Date of Joining</th>
                            <th>Date of Leaving</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ASD</td>
                            <td>Ajds</td>
                            <td>ASDdvg</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>YUP</td>
                            <td>10 October</td>
                            <td>10 October</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ASD</td>
                            <td>Ajds</td>
                            <td>ASDdvg</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>YUP</td>
                            <td>10 October</td>
                            <td>10 October</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ASD</td>
                            <td>Ajds</td>
                            <td>ASDdvg</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>YUP</td>
                            <td>10 October</td>
                            <td>10 October</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ASD</td>
                            <td>Ajds</td>
                            <td>ASDdvg</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>YUP</td>
                            <td>10 October</td>
                            <td>10 October</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ASD</td>
                            <td>Ajds</td>
                            <td>ASDdvg</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>123456789</td>
                            <td>YUP</td>
                            <td>10 October</td>
                            <td>10 October</td>
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