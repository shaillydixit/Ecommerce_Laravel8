@extends('admin.admin_master');
@section('content');

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit SubCategory</div>
                    <div class="card-body">
                        <form class="cont-frm" action="{{route('subcategory.update', $editdata->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mrg20">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Select Category</label>
                                    <select name="category_id" class="form-control">
                                        <option value="" selected="" disabled="">--select category--</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{$category->id == $editdata->category_id ? 'selected' : ''}}>
                                            {{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <br><br><br>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">SubCategory Name</label>
                                    <input type="text" name="subcategory_name" value="{{$editdata->subcategory_name}}">
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button type="submit"><i class="fa fa-paper-plane"></i>Update SubCategory</button>
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
