@extends('admin.admin_master');
@section('content');
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                        <th>Brand Name</th>
                                        <th>Brand Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i = 1)
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$row->brand_name}}</td>
                                        <td>
                                            <img src="{{asset($row->brand_image)}}" alt="">
                                        </td>
                                        <td>
                                            <a class="act-btn" href="{{route('brand.edit', $row->id)}}" title="">Edit</a>
                                            <a class="rej-btn" id="delete" href="{{route('brand.delete', $row->id)}}" title="">Delete</a>
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
                    <div class="card-header">Add Brand </div>
                    <div class="card-body">
                        <form class="cont-frm" action="{{route('brand.add')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row mrg20">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <label for="brand_name">Brand  Name</label>
                                    <input type="text" name="brand_name" placeholder="Brand Name*">
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="file-upload-box">
                                        <strong>Brand  Image:</strong>
                                                <input type="file" name="brand_image" required="" onchange="mainImgUrl(this)">
                                                <img src="" id="mainImg">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button type="submit"><i class="fa fa-paper-plane"></i>Add Brand </button>
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
            reader.onload = function(e) {
                $('#mainImg').attr('src', e.target.result).width(80).height(80);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
