<x-header></x-header>
<div class="container">
    <div class="py-3">
        <h3>Thông tin cá nhân</h3>
        <div class="bg-secondary p-5 rounded">
            <form action="" method="">
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Họ và tên:</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Vị trí ứng tuyển:</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Email:</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Điện thoại:</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex"> 
                            <label class="form-label w-50 font-weight-bold required-input">Giới tính:</label>
                            <select name="" id="" class="form-control" required>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                                <option value="2">Khác</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Kinh nghiệm làm việc:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Kỹ năng lập trình:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Thông tin khác:</label>
                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="" alt="">
                        <input type="file" accept="image/*">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <button type="submit" class="btn btn-primary">Cập nhật CV</button>
                </div>
            </form>
        </div>
    </div>
</div>
<x-footer></x-footer>
