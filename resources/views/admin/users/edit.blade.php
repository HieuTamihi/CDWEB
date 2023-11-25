<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
        <div class="card-header">
            <h2>Sửa người dùng</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.users.sua', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label>Họ và tên</label><br>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                <label>Email</label><br>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                <label>password</label><br>
                <input type="password" name="password" value="{{ $user->password }}" class="form-control">
                <label>Số điện thoại</label><br>
                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                <label>Ngày sinh</label><br>
                <input type="date" name="date" value="{{ $user->date }}" id="date" class="form-control">
                <label>Phân quyền</label><br>
                <select name="role" class="form-control">
                    <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Customer</option>
                    <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Employer</option>
                </select>
                <label>Tình trạng</label><br>
                <select name="status" class="form-control">
                    <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Hoạt động</option>
                    <option value="2" {{ $user->status == 2 ? 'selected' : '' }}>Khóa</option>
                </select>
                <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
            </form>
        </div>
    </div>


    <x-footer-admin></x-footer-admin>
