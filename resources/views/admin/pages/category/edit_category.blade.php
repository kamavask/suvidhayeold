@extends('admin.layout.app')
@section('content')

   
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Categories</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Categories</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Edit Category</h4>
                                </div>
                            <form method="post" action="{{action('CategoryController@update' , $id)}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PATCH" />
                                    <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category Name</b></label>
                                                <input type="text" class="form-control" placeholder="Category Name" name="cat_name" value="{{$cat -> cat_name}}">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category Type</b></label>
                                                    <select class="form-control" name="cat_type" value="{{$cat -> cat_type}}">
                        					 				<option>Product</option>
                        					 				<option>Service</option>
                        					 			</select>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Parent Category ID</b></label>
                                                    <br>
                                                    <input list="browsers" class="form-control" name="pent_cat_id" id="browser" value="{{$cat -> pent_cat_id}}">
                                                    <datalist id="browsers">
                        					 				<option value="Edge">
                        					 				<option value="Firefox">
                        					 				<option value="Chrome">
                        					 				<option value="Opera">
                        					 				<option value="Safari">
                        					 			</datalist>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Category Description</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Description " name="cat_desc " id="cat _desc " value="{{$cat -> cat_desc}}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Slug</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Description " name="slug " id="slug " value="{{$cat -> slug}}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1" class="form-label"><b>Icons</b></label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="icon" value="{{$cat -> icon}}">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="save-btn hover-btn " type="submit ">Edit</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
  

@endsection