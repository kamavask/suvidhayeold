@extends('admin.layout.app')
@section('content')


                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Areas</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Areas</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_area.html" class="add-btn hover-btn">Add New</a>
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
										<input type="text" class="form-control" placeholder="Search">
									</div>
									<div class="input-group">
										<select id="categeory" name="categeory" class="form-control">
											<option selected>Active</option>
											<option value="1">Inactive</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Search Area</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>All Products</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px">ID</th>
                                                        <th style="width:160px">Product Name</th>
                                                        <th style="width:160px">Short Description</th>
														<th>MRP</th>
														<th>Sale Price</th>
														<th>Edit</th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach ($show_prod as $item)
                                                        <tr>
                                                        <td>{{$item->id}}</td>
														    <td>{{$item->prod_name}}</td>
														    <td>{{$item->short_description}}</td>
														    <td>{{$item->r_price}}</td>
														    <td>{{$item->s_price}}</td>
														    <td class="action-btns">
															    <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														    </td>
													    </tr>    
                                                    @endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                
{{-- 
<div class="col-lg-12 col-md-12">
    <div class="card card-static-2 mt-30 mb-30">
        <div class="card-title-2">
            <h4>Show Product</h4>
        </div>
        <div class="card-body-table">
            <div class="table-responsive">
                <table class="table ucp-table table-hover">
                    <thead>
                        <tr>
                            <th style="width:60px"><input type="checkbox" class="check-all"></th>
                            <th style="width:60px">ID</th>
                            <th>Product Name</th>
                            <th>Virtual</th>
                            <th>Downloadable</th>
                            <th>Image_ID</th>
                            <th>Hightlight</th>
                            <th>Short Description</th>
                            <th>Specification </th>
                            <th>Brand</th>
                            <th>Weight</th>
                            <th>Size</th>
                            <th>Dimensions</th>
                            <th>Category_ID</th>
                            <th>Variant_ID</th>
                            <th>R_Price</th>
                            <th>S_Price</th>
                            <th>Tax_ID</th>
                            <th>Shipping_ID</th>
                            <th>SKU</th>
                            <th>Stock</th>
                            <th>Stock_Alert</th>
                            <th>Back_Order</th>
                            <th>Bulk_No</th>
                            <th>Tags</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="7"></td>
                            <td>1</td>
                            <td>Area Name Here</td>
                            <td>Ludhiana</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="6"></td>
                            <td>2</td>
                            <td>Area Name Here</td>
                            <td>Chandigarh</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
                            <td>3</td>
                            <td>Area Name Here</td>
                            <td>New Delhi</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="4"></td>
                            <td>4</td>
                            <td>Area Name Here</td>
                            <td>Bangaluru</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="3"></td>
                            <td>5</td>
                            <td>Area Name Here</td>
                            <td>Mumbai</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="2"></td>
                            <td>6</td>
                            <td>Area Name Here</td>
                            <td>Hyderabad</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="check-item" name="ids[]" value="1"></td>
                            <td>7</td>
                            <td>Area Name Here</td>
                            <td>Kolkata</td>
                            <td><span class="badge-item badge-status">Active</span></td>
                            <td class="action-btns">
                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}

@endsection