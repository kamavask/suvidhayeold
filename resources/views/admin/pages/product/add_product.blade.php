@extends('admin.layout.app')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h2 class="mt-30 page-title">Products</h2>
                <ol class="breadcrumb mb-30">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="products.html">Products</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card card-static-2 mb-30">
                            <div class="card-title-1">
                                <h4>Add New Product</h4>
                            </div>
                            <form action="{{route('admin.pagesproduct.store')}}" method="POST">
                            <div class="card-body-table">
                                <div class="news-content-right pd-20">
                                    <h3 style="text-decoration: underline;">Product Basic Details</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Product Name</b></label>
                                                    <input type="text" class="form-control" placeholder="Add Product Name" name="prod_name">
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <!-- Default checked -->
                                                <div class="custom-control custom-switch" style="margin-top: 35px;">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" name="virtual">
                                                    <label class="custom-control-label" for="customSwitch1">Virtuals</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <!-- Default switch -->
                                                <div class="custom-control custom-switch" style="margin-top:35px">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitches" name="downloadable">
                                                    <label class="custom-control-label" for="customSwitches">Downloadable</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1" class="form-label"><b>Image ID</b></label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_id">
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Highlights</b></label>
                                                    <textarea class="form-control " rows="2 " placeholder="Enter Highlights " name="highlight " id="highlights "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Short Discription</b></label>
                                                    <textarea class="form-control " rows="3 " placeholder="Enter Description " name="short_desc " id="s_desc "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Specifications</b></label>
                                                    <textarea class="form-control " rows="4 " placeholder="Enter Specifications " name="specification " id="speci "></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-12">
                                                <div class="form-group ">
                                                    <label class="form-label"><b>Brand</b></label>
                                                    <input type="text " class="form-control " placeholder="Enter Provider Code " name="brand " id="pro ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Weights</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Weight (e.g.:30 Kg)" name="weight" id="weight">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Sizes</b></label>
                                                    <select class="form-control" name="size">
                                                        <option>XS (Extra Small)</option>
                                                        <option>S (Small)</option>
                                                        <option>M (Medium)</option>
                                                        <option>L (Large)</option>
                                                        <option>XL (Extra Large)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Dimensions</b></label>
                                                    <input type="text" class="form-control" placeholder="Length-Bregth-height (e.g.:12cm-4cm-7cm)" name="dimensions" id="dimension">
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Category ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter ID" name="cat_id" id="Category_ID">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Varient ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter ID" name="variant_id" id="v_id">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3 style="text-decoration: underline;">Pricing and Tax</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Regular Price</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Price" name="r_price">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Sales Price</b></label>
                                                    <div class="input-group mb-6">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Price" name="s_price">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Tax ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Text ID" name="tax_id" id="tax_id">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Shipping ID</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Shipping ID" name="shipping_id" id="shipping_id">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3 style="text-decoration: underline;">Vendor And Stock Details</h3>
                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>SKU</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter SKU" name="sku" id="sku">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Stock</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter stock" name="stock" id="stock">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Stock Alert</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Stock Alert" name="stock_alert" id="s_alert">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-bottom:1%">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="form-label"><b>Back-Order Options</b></label>
                                                    <select class="form-control" name="backorder">
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                        <option>option 3</option>
                                                        <option>option 4</option>
                                                        <option>option 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Max Number of order in bulk</b></label>
                                                    <input type="number" class="form-control" placeholder="Enter Number of Orders" name="bulk_no" id="bulk">
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h3 style="text-decoration: underline">SEO</h3>
                                        <div class="row" style="margin-bottom:1%">

                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label class="form-label"><b>Tags</b></label>
                                                    <input type="text" class="form-control" placeholder="Enter Tags" name="tags" id="tag">
                                                </div>
                                            </div>

                                        </div>
                                    <button class="save-btn hover-btn " type="submit ">Next Page</button>
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


{{-- @extends('admin.layout.app')
@section('content')
<div class="row ">
    <div class="col-lg-6 col-md-6">
        <div class="card card-static-2 mb-30">
            <div class="card-title-2">
                <h4>Add New Product</h4>
            </div>
            <div class="card-body-table">
                <div class="news-content-right pd-20">
                    <div class="form-group">
                        <label class="form-label">Name*</label>
                        <input type="text" class="form-control" placeholder="Category Name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category*</label>
                        <select id="categtory" name="categtory" class="form-control">
                            <option selected>--Select Category--</option>
                            <option value="1">Fruits & Vegetables</option>
                            <option value="2">Grocery & Staples</option>
                            <option value="3">Dairy & Eggs</option>
                            <option value="4">Beverages</option>
                            <option value="5">Snacks</option>
                            <option value="6">Home Care</option>
                            <option value="7">Noodles & Sauces</option>
                            <option value="8">Personal Care</option>
                            <option value="9">Pet Care</option>
                            <option value="10">Meat & Seafood</option>
                            <option value="11">Electronics</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">MRP*</label>
                        <input type="text" class="form-control" placeholder="$0">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Discount MRP*</label>
                        <input type="text" class="form-control" placeholder="$0">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status*</label>
                        <select id="status" name="status" class="form-control">
                            <option selected>Active</option>
                            <option value="1">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description*</label>
                        <div class="card card-editor">
                            <div class="content-editor">
                                <div id='edit'></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category Image*</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
                            </div>
                        </div>
                        <div class="add-cate-img-1">
                            <img src="{{asset('admin/images/product/img-11.css')}}" alt="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">More Image*</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile05" aria-describedby="inputGroupFileAddon05">
                                <label class="custom-file-label" for="inputGroupFile05">Choose Image</label>
                            </div>
                        </div>
                        <ul class="add-produc-imgs">
                            <li>
                                <div class="add-cate-img-1">
                                    <img src="{{asset('admin/images/product/big-1.css')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="add-cate-img-1">
                                    <img src="{{asset('admin/images/product/big-2.css')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="add-cate-img-1">
                                    <img src="{{asset('admin/images/product/big-3.css')}}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="add-cate-img-1">
                                    <img src="{{asset('admin/images/product/big-4.css')}}" alt="">
                                </div>
                            </li>
	                    </ul>
                    </div>
                    <button class="save-btn hover-btn" type="submit">Add New Product</button>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection --}}