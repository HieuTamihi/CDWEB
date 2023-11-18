<x-header></x-header>
<div class="container">
    <div class="py-3">
        <h3>Thông tin cá nhân</h3>
        <div class="bg-secondary p-5 rounded">
            <form action="{{ route('cv.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Tên CV:</label>
                            <input type="text" name="Name_CV" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Họ và tên:</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Vị trí ứng tuyển:</label>
                            <input type="text" name="apply_position" class="form-control">
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Điện thoại:</label>
                            <input type="text" name="phone_number" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Ngày sinh:</label>
                            <input type="date" name="Date" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Giới tính:</label>
                            <select name="gender" class="form-control" required>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                                <option value="2">Khác</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Kinh nghiệm làm việc:</label>
                            <input type="text" class="form-control" name="exp_work">
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Kỹ năng lập trình:</label>
                            <input type="text" class="form-control" name="Majors">
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Tên trường:</label>
                            <input type="text" class="form-control" name="School_name">
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Thời gian bắt đầu học:</label>
                            <input type="date" class="form-control" name="Learn_time">
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Thông tin khác:</label>
                            <textarea name="infor_order" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-50 font-weight-bold required-input">Avatar:</label>
                        <input type="file" name="avatar" accept="image/*" required>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary">Lưu CV</button>
                </div>
            </form>
        </div>
    </div>
</div>
<x-footer></x-footer>
