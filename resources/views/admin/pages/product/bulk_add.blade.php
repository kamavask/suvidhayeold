@extends('admin.layout.app')
@section('content')
<body class="sb-nav-fixed">
  <div id="layoutSidenav">
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <h2 class="mt-30 page-title">Products</h2>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card card-static-2 mb-30">
                <div class="card-title-1">
                  <h4>Bulk Add Products</h4>
                </div>
                <div class="card-body-table">
                  <div class="news-content-right pd-20">
                    <form action="/bulk/product" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="row" style="margin-bottom:1%">
                        <div class="col-12">
                          <div class="form-group">
                            <h2>{{session('status')}}</h2>
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin-bottom:1%">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="exampleFormControlFile1" class="form-label"><b>Upload Data File</b></label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                          </div>
                        </div>
                      </div>
                      @if ($errors->has('file'))
                          <span>
                          <strong>{{$errors->first(file)}}</strong>
                          </span>
                      @endif
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


