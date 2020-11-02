@extends('admin.layout.app')
@section('content')
    <div class="container-fluid">
                    <h2 class="mt-30 page-title">Categories</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Categories</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Category</h4>
                                </div>
                              <form action="" method="POST">
                                    <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Category Name" name="cat_name">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category Type</b></label>
                                                    <select class="form-control" name="cat_type">
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
                                                    <input list="browsers" class="form-control" name="pent_cat_id" id="browser">
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
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Description " name="cat_desc" id="cat _desc "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Slug</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Description " name="slug" id="slug "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1" class="form-label"><b>Icons</b></label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="icon">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="save-btn hover-btn " type="submit ">Submit</button>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
    </div>
@endsection
            

