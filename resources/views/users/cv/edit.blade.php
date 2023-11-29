<x-header></x-header>
<div class="container">
    <div class="py-3">
        <h3>Thông tin cá nhân</h3>
        <div class="bg-secondary p-5 rounded">
            <form action="{{ route('cv.update', $cv1->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Tên CV:</label>
                            <input type="text" name="Name_CV" value="{{ $cv1->Name_CV }}" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Họ và tên:</label>
                            <input type="text" class="form-control" name="full_name" value="{{ $cv1->full_name }}" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Vị trí ứng tuyển:</label>
                            <input type="text" class="form-control" name="apply_position" value="{{ $cv1->apply_position }}" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Email:</label>
                            <input type="email" class="form-control" name="email" value="{{ $cv1->email }}" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Điện thoại:</label>
                            <input type="text" class="form-control" name="phone_number" value="{{ $cv1->phone_number }}"  required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Ngày sinh:</label>
                            <input type="date" value="{{ $cv1->Date }}" name="Date" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold required-input">Giới tính:</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="0" {{ $cv1->gender == 0 ? 'selected' : '' }}>Nam</option>
                                <option value="1" {{ $cv1->gender == 1 ? 'selected' : '' }}>Nữ</option>
                                <option value="2" {{ $cv1->gender == 2 ? 'selected' : '' }}>Khác</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Kinh nghiệm làm việc:</label>
                            <input type="text" name="exp_work" class="form-control" value="{{ $cv1->exp_work }}">
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Kỹ năng lập trình:</label>
                            <input type="text" name="Majors" class="form-control" value="{{ $cv1->Majors }}">
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="form-label w-50 font-weight-bold">Thông tin khác:</label>
                            <textarea name="infor_order" id="" cols="30" rows="5" class="form-control" value="{{ $cv1->infor_order }}"></textarea>
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
