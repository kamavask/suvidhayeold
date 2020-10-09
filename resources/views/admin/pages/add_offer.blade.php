@extends('admin.layout.app')
@section('content')
   
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Offers</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Offerss</a></li>
                        <li class="breadcrumb-item active">Add Offers</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>All Offers</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Offer Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Offer Name" name="category_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Offer Code</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Offer Code" name="user">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Offer Property</b></label>
                                                    <textarea class="form-control " rows="3" placeholder="Enter Offer Property" name="Product3 " id="category_desc "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Offer Description</b></label>
                                                    <textarea class="form-control " rows="2 " placeholder="Enter Offer Description " name="Product3 " id="category_desc "></textarea>
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

@endsection