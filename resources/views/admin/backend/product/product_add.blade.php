@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Category</div>
                    <div class="card-body">
                        <form class="cont-frm" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mrg20">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Product Name</label>
                                    <input type="text" name="product_name" placeholder="Product Name*">
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <select name="brand_id" class="form-control">
                                        <option value="" selected="" disabled="">Select Brand</option>
                                        @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select> <br><br>
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <select name="category_id" class="form-control">
                                        <option value="" selected="" disabled="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    <br><br>
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <select name="subcategory_id" class="form-control">
                                        <option value="" selected="" disabled="">Select SubCategory</option>

                                    </select>
                                    <br><br>
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Product Quantity</label>
                                    <input type="text" name="product_qty" placeholder="Product Quantity*">
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Product Code</label>
                                    <input type="text" name="product_code" placeholder="Product Code*">
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Product Selling Price</label>
                                    <input type="text" name="selling_price" placeholder="Product Selling Price*">
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Product Discount Price</label>
                                    <input type="text" name="discount_price" placeholder="Product Discount Price*">
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="file-upload-box">
                                        <strong>Product Thumbnail:</strong>
                                        <input type="file" name="product_thumbnail" required=""
                                            onchange="mainImgUrl(this)">
                                        <img src="" id="mainImg">
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Short Description</label>
                                    <input type="text" name="short_desc" placeholder="Short Description*">
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Long Description</label>
                                    <div class="content-inner remove-ext5">
                                        <div class="row mrg20">
                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                <div class="wdgt-box txt-edtr-wrp">
                                                    <div class="text-editor" name="long_desc" id="text-editor"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button type="submit"><i class="fa fa-paper-plane"></i>Add Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function mainImgUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#mainImg').attr('src', e.target.result).width(80).height(80);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@endsection
