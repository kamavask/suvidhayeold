@extends('admin.layout.app')
@section('content')

<div class="container-fluid">
	<h2 class="mt-30 page-title">Products</h2>
  <ol class="breadcrumb mb-30">
  	<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
  	<li class="breadcrumb-item active">Products</li>
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
									<th style="width:70px">ID</th>
  	              <th style="width:330px">Product Name</th>
  	              <th style="width:630px">Short Description</th>
									<th style="width:125px">MRP</th>
									<th style="width:125px">Sale Price</th>
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
									   <a href="/admin/pages/product/{{$item->id}}/edit" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
									  </td>
								  </tr>    
  	            @endforeach
							</tbody>
						</table>
					</div>
        </div>
      	<div class="table-paginate">
					{{$show_prod->links()}}
				</div>
			</div>
  	</div>
	</div>
</div>
                

@endsection