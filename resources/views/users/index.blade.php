<x-header></x-header>
<div class="container">
    <section class="border d-flex p-3 my-3">
        <div class="w-100">
            <h3>Thông tin cá nhân</h3>
            <div class="">
                <img alt="Avatar" loading="lazy" width="160" height="160" decoding="async" data-nimg="1"
                    class="h-40 w-40 rounded-full"
                    srcset="https://cdn.topdev.vn/v4/_next/static/media/no-avatar.6db79731.svg 1x, https://cdn.topdev.vn/v4/_next/static/media/no-avatar.6db79731.svg 2x"
                    src="https://cdn.topdev.vn/v4/_next/static/media/no-avatar.6db79731.svg"
                    style="color: transparent;">
            </div>
            <div class="px-2">
                <h3>Thái Minh Hiếu</h3>
                <div class="">
                    <span class="mx-1">{{ $user->email }}</span>
                    <span class="mx-1">{{ $user->phone }}</span>
                    <span class="mx-1">{{ $user->date }}</span>
                </div>
            </div>
        </div>
        <div class="w-100">
            <form id="updateForm" action="{{ route('user.update', Auth::user()->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <h3>Cập nhật thông tin cá nhân</h3>
                    <label for="">Họ và tên:</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="">Ngày sinh:</label>
                    <input type="date" class="form-control" name="date" value="{{ $user->date }}" required>
                    @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="">Số điện thoại:</label>
                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required>
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </section>
</div>
<x-footer></x-footer>
