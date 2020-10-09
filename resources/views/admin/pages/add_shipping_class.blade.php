@extends('admin.layout.app')
@section('content')
<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Shipping Class</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Shipping Class</a></li>
                        <li class="breadcrumb-item active">Add Shipping Class</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Shipping Class</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Shipping Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Shipping Name" name="name">
                                                </div>
                                            </div>
                                         </div>
                                         <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Shipping Description</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Shipping Description " name="description " id="desc "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Shipping Alert Value</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Alert Value" name="alert_value">
                                                </div>
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