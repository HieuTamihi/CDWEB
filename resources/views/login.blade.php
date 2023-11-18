<x-header></x-header>
<main class="main-content">
    <div class="auth-container" id="auth-container">
        <div class="auth-grid">
            <div class="auth-form">
                <div class="auth-form-container">
                    <img src="https://accounts.topdev.vn/asset/images/logo.png" alt="" class="img-fluid"
                        id="img-logo">
                    <h1 class="slogan">Chào mừng bạn đến với TopDev</h1>
                    <div id="main-form">
                        <ul class="nav nav-tabs d-flex align-items-center tabs-list" id="auth-tab">
                            <li class="tab-item" id="login-customer">
                                <a href="#tab-user" class="tab-link nav-link active" data-toggle="tab">
                                    <span class="line-clamp-1">Ứng viên</span>
                                </a>
                            </li>
                            <li class="tab-item" id="login-employer">
                                <a href="#tab-employer" class="tab-link nav-link" data-toggle="tab">
                                    <span class="line-clamp-1">Nhà tuyển dụng</span>
                                </a>
                            </li>
                        </ul>
                        <div id="tab-form" class="tab-content">
                            <div id="tab-user" class="tab-item tab-user active tab-pane">
                                <h2 class="title">
                                    <strong class="strong-text">Đăng ký/Đăng nhập
                                    </strong>
                                    để tiếp tục sử dụng dịch vụ của TopDev
                                </h2>
                                <div>
                                    <a href="{{ route('login.google') }}" class="btn btn-default btn-auth">
                                        <img src="https://accounts.topdev.vn/asset/images/google.svg" alt="Google"
                                            class="img-fluid img-service">
                                        <span>Tiếp tục với Google</span>
                                    </a>
                                </div>
                            </div>
                            <div id="tab-employer" class="tab-item tab-employer tab-pane">
                                <h2 class="title">
                                    Vui lòng <strong>Đăng nhập</strong> để tiếp tục sử dụng dịch vụ của TopDev
                                </h2>
                                <form method="POST" action="#" autocomplete="off">
                                    <input type="hidden" name="_token"
                                        value="iHch9NvYATjIIKzMZrYTJkQ8UPEUMrccFoxdDp7n">
                                    <div class="form-group">
                                        <label class="form-label" for="username">ID tài khoản</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control field-control-email"
                                                placeholder="Email | Username" aria-describedby="emailHelp"
                                                name="email" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Mật khẩu</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="password"
                                                class="form-control field-control-password" placeholder="Mật khẩu"
                                                aria-describedby="basic-addon2" required="">
                                            <span class="toggle-password" data-reference="field-control-password">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                <i class="fa fa-eye-slash" aria-hidden="true" style="display:none;"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-danger">Đăng Nhập</button>
                                    </div>
                                    <div class="text-right">
                                        <a href="#" class="underline forget-password" id="#btn-reset">Quên mật
                                            khẩu ?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative auth-content-container tab-content">
                <img src="https://accounts.topdev.vn/asset/images/tech-ball.svg" alt="" class="ball-top">
                <div id="auth-content" class="tab-content">
                    <div class="tab-customer-login">
                        <div id="monthly-reward">
                            <div class="section-content">
                                <div class="section-content-wrapper">
                                    <div class="default-content">
                                        <div class="img-content">
                                            <img src="https://accounts.topdev.vn/asset/images/img-person.svg"
                                                alt="Topdev person" width="291" height="243"
                                                class="img-fluid img-default">
                                            <img src="https://accounts.topdev.vn/asset/images/logo.png"
                                                alt="Topdev logo" class="img-fluid img-logo">
                                        </div>
                                        <div class="detail-content">
                                            <h2 class="default-slogan">Việc làm IT hàng đầu</h2>
                                            <h2 class="content-description">
                                                Đăng nhập ngay để tận dụng tối đa các công cụ của TopDev và gia tăng cơ
                                                hội tiếp cận công việc IT hot nhất
                                            </h2>
                                            <ul class="content-list">
                                                <li class="content-item">
                                                    Tạo CV chuẩn Developer
                                                </li>
                                                <li class="content-item">
                                                    Ứng tuyển nhanh chóng hơn với hồ sơ đã được lưu
                                                </li>
                                                <li class="content-item">Quản lý hồ sơ ứng tuyển và theo dõi cập nhật
                                                    trạng thái ứng tuyển
                                                </li>
                                                <li class="content-item">
                                                    Xem được mức lương cho mỗi vị trí
                                                </li>
                                                <li class="content-item">
                                                    Lưu lại công việc yêu thích để ứng tuyển sau
                                                </li>
                                                <li class="content-item">
                                                    Thực hiện bài trắc nghiệm đánh giá tính cách làm việc
                                                </li>
                                            </ul>
                                            <p class="small-text">Nếu bạn gặp khó khăn trong việc đăng nhập / tạo tài
                                                khoản, vui lòng liên hệ với TopDev qua email contact@topdev.vn
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-employer-login anDangNhap">
                        <div class="register-form" id="register-form">
                            <h3 class="form-title">Đăng ký Tài khoản Nhà tuyển dụng</h3>
                            <p class="form-description">
                                Tạo ngay tài khoản để tuyển dụng các Lập Trình Viên Hàng Đầu trên TopDev
                            </p>
                            <form method="POST" action="#" autocomplete="off">
                                <input type="hidden" name="_token"
                                    value="iHch9NvYATjIIKzMZrYTJkQ8UPEUMrccFoxdDp7n">
                                <p class="common-title">
                                    Thông Tin Đăng Nhập
                                </p>
                                <div class="form-group">
                                    <label class="field-label" for="email">Email</label>
                                    <input type="email" id="email" required="" name="email"
                                        class="form-control field-email" placeholder="Nhập email">
                                    <p class="invalid-feedback error-email" role="alert">
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label class="field-label" for="phone">Số điện thoại</label>
                                    <input name="phone" required="" id="phone" type="text"
                                        class="form-control field-phone" placeholder="Nhập số điện thoại liên hệ">
                                    <p class="invalid-feedback error-phone" role="alert">
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label class="field-label" for="password">Mật khẩu</label>
                                    <div class="position-relative">
                                        <input type="password" required="" id="password" name="password"
                                            class="form-control field-password" placeholder="Nhập mật khẩu">
                                        <span class="toggle-password" data-reference="field-password">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <i class="fa fa-eye-slash" aria-hidden="true" style="display:none;"></i>
                                        </span>
                                    </div>
                                    <p class="invalid-feedback error-password" role="alert">
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label class="field-label" for="confirm-password">Xác nhận mật khẩu</label>
                                    <div class="position-relative">
                                        <input type="password" required="" id="comfirm-password"
                                            class="form-control field-confirm-password"
                                            placeholder="Vui lòng xác nhận mật khẩu" name="password_confirmation">
                                        <span class="toggle-password" data-reference="field-confirm-password">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <i class="fa fa-eye-slash" aria-hidden="true" style="display:none;"></i>
                                        </span>
                                    </div>
                                    <p class="invalid-feedback error-confirm-password" role="alert">
                                    </p>
                                </div>
                                <p class="common-title">
                                    Thông Tin Công Ty
                                </p>
                                <div class="form-group">
                                    <label class="field-label" for="company-name">Công ty</label>
                                    <input type="text" class="form-control field-company-name" name="display_name"
                                        id="display_name" placeholder="Nhập công ty của bạn">
                                    <p class="invalid-feedback error-company-name" role="alert">
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label class="field-label" for="company-name">Giới thiệu về công ty</label>
                                    <textarea name="" cols="20" class="form-control field-company-name">

                                    </textarea>
                                    <p class="invalid-feedback error-company-name" role="alert">
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label class="field-label" for="company-name">Địa chỉ</label>
                                    <input type="text" class="form-control field-company-name" name="display_name"
                                        id="display_name" placeholder="Nhập địa chỉ của bạn">
                                    <p class="invalid-feedback error-company-name" role="alert">
                                    </p>
                                </div>
                                <button type="submit" class="btn btn-block btn-danger btn-register">Đăng Ký</button>
                            </form>
                        </div>
                    </div>
                </div>
                <img src="https://accounts.topdev.vn/asset/images/tech-ball-small.svg" alt="TopDev Technology"
                    class="ball-top-small">
            </div>
        </div>
    </div>
</main>

<x-footer></x-footer>
