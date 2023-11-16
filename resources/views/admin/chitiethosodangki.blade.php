<x-header-admin></x-header-admin>
<link href="{{ asset('css/stylesthongtin.css') }}" rel="stylesheet" type="text/css">
<form action="submit.php" method="post">
    <h1>Chi tiết hồ sơ đăng ký</h1>
    <div class="form-group">
        <label for="fullname">Họ và tên</label>
        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập họ và tên">
    </div>
    <div class="form-group">
        <label for="position">Apply posistion</label>
        <input type="text" class="form-control" id="position" name="position" placeholder="Nhập vị trí ứng tuyển">
    </div>
    <div class="form-group">
        <label for="avatar">Ảnh 3x4</label>
        <input type="file" class="form-control-file" id="avatar" name="avatar">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender">
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exp_work">Exp work</label>
        <input type="text" class="form-control" id="exp_work" name="exp_work" placeholder="Nhập kinh nghiệm làm việc">
    </div>
    <div class="form-group">
        <label for="programming_skills">Programming skills</label>
        <input type="text" class="form-control" id="programming_skills" name="programming_skills"
            placeholder="Nhập kỹ năng lập trình">
    </div>
    <button type="submit" class="btn btn-primary">Thoát</button>
</form>
<x-footer-admin></x-footer-admin>

