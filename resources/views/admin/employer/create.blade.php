<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
        <div class="card-header">
            <h2>Thêm nhà tuyển dụng</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.employer.index') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên công ty</label><br>
                    <input value="" type="text" name="name_company" id="name_company" class="form-control">
                    @error('name_company')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label><br>
                    <input value="" type="text" name="phone_number" id="phone_number" class="form-control">
                    @error('phone_number')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label><br>
                    <input value="" type="text" name="address" id="address" class="form-control">
                    @error('address')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="featured">Trạng thái</label>
                    <select name="featured" id="featured" class="form-control">
                        <option value="1">Nổi bật</option>
                        <option value="2">không nổi bật</option>
                    </select>
                    @error('status')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <label for="formFileLg" class="form-label">Upload ảnh công ty</label>
                <input required class="form-control form-control-lg" id="image"name="image" type="file">
                @error('image')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
            </form>
        </div>
    </div>


    <x-footer-admin></x-footer-admin>
