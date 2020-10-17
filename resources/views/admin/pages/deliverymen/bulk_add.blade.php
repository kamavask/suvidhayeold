@extends('admin.layout.app')
@section('content')
<body class="sb-nav-fixed">
  <div id="layoutSidenav">
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <h2 class="mt-30 page-title">Deliverymen</h2>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card card-static-2 mb-30">
                <div class="card-title-1">
                  <h4>Bulk Add Deliverymen</h4>
                </div>
                <div class="card-body-table">
                  <div class="news-content-right pd-20">
                    <form action="">
                     	<label class="form-label">Upload File</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
														<label class="custom-file-label" for="inputGroupFile04">Choose Your File</label>
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
