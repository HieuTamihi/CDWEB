<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
        <div class="card-header">
            <h2>Thêm người dùng</h2>
        </div>
        <div class="card-body">
            <form action="{{route('admin.users.index')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required-input" for="">Email</label><br>
                    <input value="" type="text" name="email" id="email" class="form-control">
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="required-input" for="">Mật khẩu</label><br>
                    <input value="" type="text" name="password" id="password" class="form-control">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="required-input" for="">Họ và tên</label><br>
                    <input value="" type="text" name="name" id="name" class="form-control">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label><br>
                    <input value="" type="text" name="phone" id="phone" class="form-control">
                    @error('phone')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Ngày sinh</label><br>
                    <input value="" type="date" name="date" id="date" class="form-control">
                    @error('date')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
            </form>
        </div>
    </div>
    <x-footer-admin></x-footer-admin>
