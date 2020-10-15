@extends('admin.layout.app')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-30 page-title">Categories</h2>
                    <ol class="breadcrumb mb-30">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Categories</a></li>
                        <li class="breadcrumb-item active">Bulk Add Category</li>
                    </ol>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-static-2 mb-30">
                                <div class="card-title-1">
                                    <h4>Add Categorys</h4>
                                </div>
                                <div class="card-body-table">
                                    <div class="news-content-right pd-20">
                                        <div class="row" style="margin-bottom:1%">
                                          <div class="col-sm-4">
                                            <form action="">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Category Name" name="cat_name">
                                                </div>
                                            </form>
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
            

