@extends('admin.admin_master');
@section('content');
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="wdgt-box wrkng-ordr">
                        <div class="ordr-tbl-wrp">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>SubCategory Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$row['category']['category_name']}}</td>
                                        <td>{{$row->subcategory_name}}</td>
                                        <td>
                                            <a class="act-btn" href="{{route('subcategory.edit', $row->id)}}"
                                                title="">Edit</a>
                                            <a class="rej-btn" id="delete"
                                                href="{{route('subcategory.delete', $row->id)}}" title="">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add SubCategory</div>
                    <div class="card-body">
                        <form class="cont-frm" action="{{route('subcategory.add')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mrg20">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">Select Category</label>
                                    <select name="category_id" class="form-control">
                                        <option value="" selected="" disabled="">--select category--</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <br><br><br>
                                </div>
                                
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="category_name">SubCategory Name</label>
                                    <input type="text" name="subcategory_name" placeholder="SubCategory Name*">
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button type="submit"><i class="fa fa-paper-plane"></i>Add SubCategory</button>
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
