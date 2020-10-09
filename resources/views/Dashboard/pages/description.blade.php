@extends('Dashboard.layout.app')
@section('content')
		<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Description</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Add Products</a></li>
                        <li class="breadcrumb-item active">Long Description</li>
                    </ol>
										<div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Description</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
																				<div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Product ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Product ID" name="category_name">
                                                </div>
																						</div>
																						<div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Product Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Product Name" name="category_name">
                                                </div>
                                            </div>
                                        </div>
																				<div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-7">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Content 1</b></label>
                                                    <input type="text" class="form-control" placeholder="Content 1" name="content1">
                                                </div>
																						</div>
																						<div class="col-sm-2"></div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1" class="form-label"><b>Image 1</b></label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image1">
                                                </div>
                                            </div>
																				</div>
																				<div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-7">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Content 2</b></label>
                                                    <input type="text" class="form-control" placeholder="Content 2" name="content2">
                                                </div>
																						</div>
																						<div class="col-sm-2"></div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1" class="form-label"><b>Image 2</b></label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image2">
                                                </div>
																						</div>
																				</div>
																				<div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-7">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Content 3</b></label>
                                                    <input type="text" class="form-control" placeholder="Content 3" name="content3">
                                                </div>
																						</div>
																						<div class="col-sm-2"></div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1" class="form-label"><b>Image 3</b></label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image3">
                                                </div>
                                            </div>
                                        </div>
																			
                                        <button class="save-btn hover-btn " type="submit ">Submit</button>
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

