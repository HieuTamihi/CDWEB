<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
        <div class="card-header">
            <h2>Thêm người dùng</h2>
        </div>
        <div class="card-body">
            <form action="{{route('user.create')}}" method="POST">
                <label for="" class="required-input">Email</label><br>
                <input type="email" name="email" class="form-control">
                <label for="" class="required-input">Mật khẩu</label><br>
                <input type="password" name="password" class="form-control">
                <label for="" class="required-input">Họ và tên</label><br>
                <input type="text" name="name" class="form-control">
                <label for="">Số điện thoại</label><br>
                <input type="text" name="phone" class="form-control">
                <label for="">Ngày sinh</label><br>
                <input type="date" name="date" class="form-control">
                <label for="">Địa chỉ</label><br>
                <input type="text" name="address" class="form-control">
                <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
            </form>
        </div>
    </div>
    <x-footer-admin></x-footer-admin>
