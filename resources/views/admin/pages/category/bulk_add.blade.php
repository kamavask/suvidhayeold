@extends('admin.layout.app')
@section('content')
<body class="sb-nav-fixed">
  <div id="layoutSidenav">
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <h2 class="mt-30 page-title">Categories</h2>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card card-static-2 mb-30">
                <div class="card-title-1">
                  <h4>Bulk Add Categorys</h4>
                </div>
                <div class="card-body-table">
                  <div class="news-content-right pd-20">
                    <form action="bulk/category" method="POST">
                      <div class="row" style="margin-bottom:1%">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="exampleFormControlFile1" class="form-label"><b>Upload Data File</b></label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="icon">
                          </div>
                        </div>
                      </div>
                      <button class="save-btn hover-btn " type="submit ">Submit</button>
                    </form>
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


