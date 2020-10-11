@extends('admin.layout.app')
@section('content')
     
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Service</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Service</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_shop.html" class="add-btn hover-btn">Add New Service</a>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>All Services</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px"><input type="checkbox" class="check-all"></th>
														<th>Service Code</th>
														<th>Service Name</th>
														<th>Providers</th>
                            <th>Category ID</th>
                            <th>Highlights</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Specifications</th>
                            <th>Availability</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ABS</td>
                            <td>asdfg</td>
                            <td>wertyug</td>
                            <td>qtrfgvug</td>
                            <td>Yes</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ABS</td>
                            <td>asdfg</td>
                            <td>wertyug</td>
                            <td>qtrfgvug</td>
                            <td>Yes</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ABS</td>
                            <td>asdfg</td>
                            <td>wertyug</td>
                            <td>qtrfgvug</td>
                            <td>Yes</td>
													</tr>
												<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ABS</td>
                            <td>asdfg</td>
                            <td>wertyug</td>
                            <td>qtrfgvug</td>
                            <td>Yes</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>1</td>
														<td>Shop Name</td>
														<td>Joginder Singh</td>
														<td>Ludhiana</td>
                            <td>ABS</td>
                            <td>asdfg</td>
                            <td>wertyug</td>
                            <td>qtrfgvug</td>
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