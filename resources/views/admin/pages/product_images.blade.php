{{-- @extends('admin.layout.app')
@section('content')
<form method="POST" action="/upload_prod_image" enctype="multipart/form-data">
	@csrf
	<div id="layoutSidenav">
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid">
					<h2 class="mt-30 page-title">Product Images</h2>
					<ol class="breadcrumb mb-30">
						<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="products.html">Product Images</a></li>
						<li class="breadcrumb-item active">Add Product Images</li>
					</ol>
					@if ($product==NULL)
					<div class="col-sm-4">
						<!-- text input -->
						<div class="form-group">
							<label class="form-label"><b>Product ID{{$product->id}}</b></label>
<input type="text" class="form-control" placeholder="prod_id" name="prod_id" value="{{$product->id}}">
</div>
</div>
<div class="col-sm-4">
	<!-- text input -->
	<div class="form-group">
		<label class="form-label"><b>Product Name{{$product->prod_name}}</b></label>
		<input type="text" class="form-control" placeholder="prod_name" name="prod_name" value="{{$product->prod_name}}">
	</div>
</div>
@else
<div class="col-sm-4">
	<!-- text input -->
	<div class="form-group">
		<label class="form-label"><b>Product ID</b></label>
		<input type="text" class="form-control" placeholder="prod_id" name="prod_id">
	</div>
</div>
<div class="col-sm-4">
	<!-- text input -->
	<div class="form-group">
		<label class="form-label"><b>Product name</b></label>
		<input type="text" class="form-control" placeholder="prod_name" name="prod_name">
	</div>
</div>
@endif

<div class="row">
	<div class="col-lg-5 col-md-5">
		<div class="card card-static-2 mb-30">
			<div class="card-title-2">
				<h4 style="text-align: center">Default Image</h4>
			</div>
			<div class="card-body-table">
				<div class="news-content-right pd-20 text-center">
					<div class="fea-img">
						<img src="admin/images/featured-img.jpg" alt="">
						<div class="img-add">
							<input type="file" id="file" name="def_img">
							<label for="file">Upload Image</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-7 col-md-7">
		<div class="card card-static-2 mb-30">
			<div class="card-title-2">
				<h4>Add New Product</h4>
			</div>
			<div class="card-body-table">
				<div class="news-content-right pd-20">
					<div class="form-group">
						<label class="form-label">Multi-Image 1</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile04"
									aria-describedby="inputGroupFileAddon04" name="multi1">
								<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
							</div>
						</div>
						<div class="add-cate-img-1">
							<img src="admin/images/product/img-11.jpg" alt="">
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Multi-Image 2</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile04"
									aria-describedby="inputGroupFileAddon04" name="multi2">
								<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
							</div>
						</div>
						<div class="add-cate-img-1">
							<img src="admin/images/product/img-11.jpg" alt="">
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Multi-Image 3</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile04"
									aria-describedby="inputGroupFileAddon04" name="multi3">
								<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
							</div>
						</div>
						<div class="add-cate-img-1">
							<img src="admin/images/product/img-11.jpg" alt="">
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Multi-Image 4</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile04"
									aria-describedby="inputGroupFileAddon04" name="multi4">
								<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
							</div>
						</div>
						<div class="add-cate-img-1">
							<img src="admin/images/product/img-11.jpg" alt="">
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Multi-Image 5</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile04"
									aria-describedby="inputGroupFileAddon04" name="multi5">
								<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
							</div>
						</div>
						<div class="add-cate-img-1">
							<img src="admin/images/product/img-11.jpg" alt="">
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Multi-Image 6</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile04"
									aria-describedby="inputGroupFileAddon04" name="multi6">
								<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
							</div>
						</div>
						<div class="add-cate-img-1">
							<img src="admin/images/product/img-11.jpg" alt="">
						</div>
					</div>
					<button class="save-btn hover-btn" type="submit">Add New Product</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</main>
</div>
</div>
</form>
@endsection --}}


@php
dd($product->id);
@endphp