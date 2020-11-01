@extends('admin.layout.app')
@section('content')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Taxes</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Taxes</a></li>
                        <li class="breadcrumb-item active">Add Taxes</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Taxes</h4>
                                </div>
                               <form action="" method="POST">
                                    <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                                </div>
                                            </div>
                                         </div>
                                         <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b> Description</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Description " name="description " id="desc "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Tax Rate</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Tax Rate " name="tax_rate" id="tax_rate "></textarea>
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
            </main>
        </div>
     
@endsection