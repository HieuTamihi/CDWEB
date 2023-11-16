<x-header-admin></x-header-admin>
@section('content')
    <div class="container-fluid">
        <div class="card" style="margin:20px;">
            <div class="card-header">
                <h2>Thêm nhà tuyển dụng</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    {{ csrf_field() }}
                    <label for="">Tên công ty</label><br>
                    <input value="{{$employer->name_company}}" type="text" name="name" id="" class="form-control">
                    <label for="">Số điện thoại</label><br>
                    <input value="{{$employer->phone_number}}" type="text" name="phone" class="form-control">
                    <label for="">Địa chỉ</label><br>
                    <input value="{{$employer->address}}" type="text" name="address" id="" class="form-control">
                    <label for="">Tình trạng</label><br>
                    <input value="{{$employer->name_company}}" type="text" name="status" class="form-control">
                    <label for="formFileLg" class="form-label">Upload ảnh công ty</label>
                    <input required class="form-control form-control-lg" id="photo"name="photo" type="file">
                    <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
                </form>
            </div>
        </div>
    @endsection
    <x-footer-admin></x-footer-admin>
