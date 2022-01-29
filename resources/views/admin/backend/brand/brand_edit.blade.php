@extends('admin.admin_master');
@section('content');

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Brand</div>
                    <div class="card-body">
                        <form class="cont-frm" action="{{route('brand.update', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{$editdata->brand_image}}">
                        <div class="row mrg20">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="Brand_name">Brand Name</label>
                                    <input type="text" name="brand_name" value="{{$editdata->brand_name}}">
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="file-upload-box">
                                        <strong>Brand Image:</strong>
                                        <div class="file-box">
                                                <input type="file" name="brand_image">
                                                <div>
                                                    <img src="{{asset($editdata->brand_image)}}" alt="Brand" style="width: 80px; height: 80px;">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button type="submit"><i class="fa fa-paper-plane"></i>Update Brand</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
