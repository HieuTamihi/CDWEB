<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
        <div class="card-header">
            <h2>Sửa người dùng</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Họ và tên</label><br>
                <input value="" type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
                <label for="">Email</label><br>
                <input value="" type="text" name="email " id="email" value="{{ $user->email }}" class="form-control">
                <label for="">password</label><br>
                <input value="" type="password" name="password" id="password" value="{{ $user->password }}" class="form-control">
                <label for="">Số điện thoại</label><br>
                <input value="" type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                <label for="">Ngày sinh</label><br>
                <input value="" type="date" name="date" value="{{ $user->date }}" id="date" class="form-control">
                <label for="">role</label><br>
                <select name="role" id="role" class="form-control">
                    <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Nổi bật</option>
                    <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>không nổi bật</option>
                </select>
                <label for="">status</label><br>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Nổi bật</option>
                    <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>không nổi bật</option>
                </select>
                <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
            </form>
        </div>
    </div>


    <x-footer-admin></x-footer-admin>
