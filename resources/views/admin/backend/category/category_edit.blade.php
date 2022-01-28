@extends('admin.admin_master');
@section('content');

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Category</div>
                    <div class="card-body">
                        <form class="cont-frm" action="{{route('category.update', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{$editdata->category_image}}">
                        <div class="row mrg20">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" name="category_name" value="{{$editdata->category_name}}">
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="file-upload-box">
                                        <strong>Category Image:</strong>
                                        <div class="file-box">
                                                <input type="file" name="category_image">
                                                <div>
                                                    <img src="{{asset($editdata->category_image)}}" alt="category" style="width: 80px; height: 80px;">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button type="submit"><i class="fa fa-paper-plane"></i>Update Category</button>
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
