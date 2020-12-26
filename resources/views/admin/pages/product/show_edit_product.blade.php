@extends('admin.layout.app')
@section('content')
   <div class="container-fluid ">
        <h2 class="mt-30 page-title">Edit Selection Choice</h2>
        <ol class="breadcrumb mb-30">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="locations.html">Product</a></li>
            <li class="breadcrumb-item active">Edit Choice</li>
        </ol>
        <div class="row s007">
			<div class="col-lg-5 col-md-6">
				<div class="card card-static-2 mb-30">
					<div class="card-title-2">
						<h4>Edit Using Id of product</h4>
                    </div>
                    <form action="admin/pages/show/product/edit_by_id" method="post">
                        @csrf
					    <div class="card-body-table">
					    	<div class="news-content-right pd-20">
					    		<div class="form-group">
					    			<label class="form-label">Product Id</label>
					    			<input type="number" name="prod_id" class="form-control" placeholder="Product Id">
					    		</div>
					    		<button class="save-btn hover-btn" type="submit">Submit</button>
					    	</div>
                        </div>
                    </form>
				</div>
            </div>
        </div>
        <div class="row s007">
            <div class="col-lg-5 col-md-6">
				<div class="card card-static-2 mb-30">
					<div class="card-title-2">
						<h4>Edit Using List of products</h4>
					</div>
					<div class="card-body-table">
						<div class="news-content-right pd-20" style="  margin: auto; width: 25%;">
							<button href="/admin/pages/product" class="save-btn hover-btn" type="submit">View List</button>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>

@endsection