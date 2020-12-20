@extends('admin.layout.app')
@section('content')
<div class="container-fluid">
	<h2 class="mt-30 page-title">Pages</h2>
  <ol class="breadcrumb mb-30">
  	<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="pages.html">Pages</a></li>
    <li class="breadcrumb-item active">Add Page</li>
  </ol>
  <div class="row">
  	<form action="/admin/pages/productImage/create" method="POST" enctype="multipart/form-data">
    	@csrf
    	<input type="hidden" name="id" value="{{$product->id}}"/>
    	<div class="col-lg-9 col-md-8">
    		<div class="card card-static-2 mb-30">
    			<div class="card-title-2">
    				<h4>Default Image</h4>
    			</div>
    			<div class="card-body-table">
    				<div class="news-content-right pd-20 text-center">	
    					<div class="fea-img">
    						<img src="/admin/images/featured-img.jpg" alt=""style="border: 2px solid; border-color: white; border-radius: 8px;">
    						<div class="img-add d-flex justify-content-center">													
									<div class="input-group mb-3" style=" width: 80%; "> 
      							<div class="form-group">
    									<label for="Default_Image">Default Image</label>
    									<input name="def_img" type="file" accept="image/*" class="form-control-file" id="Default_Image">
  									</div>
      						</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	  <div class="card card-static-2 mb-30">
    	  	<div class="card-title-2">
    	  		<h4>multipasle Image</h4>
    	  	</div>
          <div class="card-body-table">
    	  	  <div class="news-content-right pd-20 text-center" style="display: flex;">	
    	  	    <div class="fea-img">
    						<img src="/admin/images/featured-img.jpg" alt=""style="border: 2px solid; border-color: white; border-radius: 8px;">
    						<div class="img-add d-flex justify-content-center">													
									<div class="input-group mb-3" style=" width: 80%; "> 
      							<div class="form-group">
    									<label for="Multi_File1">Multipal Image 1</label>
    									<input name="Multi_File1" type="file" accept="image/*" class="form-control-file" id="Multi_File1">
  									</div>
      						</div>
    						</div>
    					</div>
              <div class="fea-img">
    						<img src="/admin/images/featured-img.jpg" alt="" style="border: 2px solid; border-color: white; border-radius: 8px;">
    						<div class="img-add d-flex justify-content-center">													
									<div class="input-group mb-3" style=" width: 80%; "> 
      							<div class="form-group">
    									<label for="Multi_File2">Multipal Image 2</label>
    									<input name="Multi_File2" type="file" accept="image/*" class="form-control-file" id="Multi_File2">
  									</div>
      						</div>
    						</div>
    					</div>
              <div class="fea-img">
    						<img src="/admin/images/featured-img.jpg" alt=""style="border: 2px solid; border-color: white; border-radius: 8px;">
    						<div class="img-add d-flex justify-content-center">													
									<div class="input-group mb-3" style=" width: 80%; "> 
      							<div class="form-group">
    									<label for="Multi_File3">Multipal Image 3</label>
    									<input name="Multi_File3" type="file" accept="image/*" class="form-control-file" id="Multi_File3">
  									</div>
      						</div>
    						</div>
    					</div>
    	  	  </div>
					</div>
					<div class="card-body-table">
    	  	  <div class="news-content-right pd-20 text-center" style="display: flex;">	
    	  	    <div class="fea-img">
    						<img src="/admin/images/featured-img.jpg" alt=""style="border: 2px solid; border-color: white; border-radius: 8px;">
    						<div class="img-add d-flex justify-content-center">													
									<div class="input-group mb-3" style=" width: 80%; "> 
      							<div class="form-group">
    									<label for="Multi_File4">Multipal Image 4</label>
    									<input name="Multi_File4" type="file" accept="image/*" class="form-control-file" id="Multi_File1">
  									</div>
      						</div>
    						</div>
    					</div>
              <div class="fea-img">
    						<img src="/admin/images/featured-img.jpg" alt="" style="border: 2px solid; border-color: white; border-radius: 8px;">
    						<div class="img-add d-flex justify-content-center">													
									<div class="input-group mb-3" style=" width: 80%; "> 
      							<div class="form-group">
    									<label for="Multi_File5">Multipal Image 5</label>
    									<input name="Multi_File5" type="file" accept="image/*" class="form-control-file" id="Multi_File2">
  									</div>
      						</div>
    						</div>
    					</div>
              <div class="fea-img">
    						<img src="/admin/images/featured-img.jpg" alt=""style="border: 2px solid; border-color: white; border-radius: 8px;">
    						<div class="img-add d-flex justify-content-center">													
									<div class="input-group mb-3" style=" width: 80%; "> 
      							<div class="form-group">
    									<label for="Multi_File6">Multipal Image </label>
    									<input name="Multi_File6" type="file" accept="image/*" class="form-control-file" id="Multi_File6">
  									</div>
      						</div>
    						</div>
    					</div>
    	  	  </div>
          </div>
    	  </div>
      </div>
      <div class="col-lg-3 col-md-4">
				<div class="card card-static-2 mb-30">
					<div class="card-title-2">
						<h4>Product Details</h4>
					</div>
					<div class="card-body-table">
						<div class="item ">
            	<div class="product-item ">
              	<img src="/admin/images/featured-img.jpg" alt=" " style="padding:20px;">
                <div class="card-title-2">
                	<h4 class="title_name" style="color:black; font-size: 25px; line-height: 24px; font-weight: 700; text-align:center;">{{$product->prod_name}}</h4>
                </div>
              </div>
            </div>
					</div>
					<div class="card card-static-2 mb-30" style=" margin: 0 !important;">
						<div class="card-title-2">
            	<div class="product-price" style="font-size: 18px; font-weight: 600; line-height: 24px; color: #f55d2c; padding-left: 10px;  ">
              	{{$product->s_price}}     <span style="text-decoration: line-through; padding-left:40px;">₹ {{$product->r_price}}</span>
              </div>
            </div>
          </div>
        	<div class="card card-static-2 mb-30" style=" margin: 0 !important;">
						<div class="card-body-table" style="padding-left: 10px; padding-right: 10px;">
							<p class="pp-descp" style="line-height: 31px; margin-top: 20px; margin-bottom: 30px; color: #3e3f5e; font-weight: 400; font-size: 15px; text-align:left;">
              	{{$product->short_description}}
							</p>
						</div>
					</div>
					<div class="card card-static-2 mb-30" style=" margin: 0 !important;">
						<div class="card-title-2">
              {{-- <button style="background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Save</button> --}}
							
							<div class="img-add d-flex justify-content-center" style="margin: 0">													
    				    <input style="margin: 0;background: #f55d2c;color: #fff;height: 40px;border-radius: 3px;border: 0;font-size: 14px;font-weight: 500;padding: 10px 20px;" type="submit" id="file">
              </div>
            </div>
          </div>
				</div>
			</div>
		</form>
	</div>  
@endsection 

