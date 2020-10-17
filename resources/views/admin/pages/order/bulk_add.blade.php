@extends('admin.layout.app')
@section('content')
<body class="sb-nav-fixed">
  <div id="layoutSidenav">
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <h2 class="mt-30 page-title">Orders</h2>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card card-static-2 mb-30">
                <div class="card-title-1">
                  <h4>Bulk Add Orders</h4>
                </div>
                <div class="card-body-table">
                  <div class="news-content-right pd-20">
                    <form action="">
                      <div class="row" style="margin-bottom:1%">
                        <div class="col-12">
                          <div class="content">
                            <div class="box">
                              <input type="file" name="category_bulk" id="upload_bulf_btn" class="save-btn hover-btn" {{-- data-multiple-caption="{count} files selected" multiple  --}}/>
                              <label for="upload_bulf_btn"><span>Choose a file</span></label>
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
