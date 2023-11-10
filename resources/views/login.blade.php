<x-header></x-header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEv+1xVi0=" crossorigin="anonymous"></script>


<main class="main-content">
    <div class="auth-container" id="auth-container">
        <div class="auth-grid">
            <div class="auth-form">
                <div class="auth-form-container">
                    <img src="https://accounts.topdev.vn/asset/images/logo.png" alt="" class="img-fluid"
                        id="img-logo">
                    <h1 class="slogan">Chào mừng bạn đến với TopDev</h1>
                    <div id="main-form">
                        <ul class="d-flex align-items-center tabs-list" id="auth-tab">
                            <li class="tab-item">
                                <a href="#" class="tab-link active" tab-root="tab-user">
                                    <span class="line-clamp-1">Ứng viên</span>
                                </a>
                            </li>
                            <li class="tab-item">
                                <a href="#tab-employer" class="tab-link" tab-root="tab-employer">
                                    <span class="line-clamp-1">Nhà tuyển dụng</span>
                                </a>
                            </li>
                        </ul>
                        <div id="tab-form" class="tab-content">
                            <div id="tab-user" class="tab-item tab-user active" tab-target="tab-user">
                                <h2 class="title">
                                    <strong class="strong-text">Đăng ký/Đăng nhập
                                    </strong>
                                    để tiếp tục sử dụng dịch vụ của TopDev
                                </h2>
                                <div>
                                    <a href="https://accounts.topdev.vn/login/google" class="btn btn-default btn-auth">
                                        <img src="https://accounts.topdev.vn/asset/images/google.svg" alt="Google"
                                            class="img-fluid img-service">
                                        <span>Tiếp tục với Google</span>
                                    </a>
                                    <a href="https://accounts.topdev.vn/login/github"
                                        class="btn btn-default btn-auth-fill">
                                        <img src="https://accounts.topdev.vn/asset/images/github.svg" alt="Github"
                                            class="img-fluid img-service">
                                        <span>Tiếp tục với Github</span>
                                    </a>
                                </div>
                                <p class="term-text">Bằng việc tiếp tục, bạn đồng ý với <a
                                        href="https://topdev.vn/term-of-services" target="_blank" class="term-link">Điều
                                        Khoản Sử Dụng</a>
                                    và <a href="https://topdev.vn/privacy-policy" target="_blank" class="term-link">
                                        Chính Sách Bảo Mật
                                    </a> của TopDev.</p>
                            </div>
                            <div class="tab-item tab-employer" tab-target="tab-employer">
                                <h2 class="title">
                                    Vui lòng <strong>Đăng nhập</strong> để tiếp tục sử dụng dịch vụ của TopDev
                                </h2>
                                <form method="POST" action="https://accounts.topdev.vn/login" autocomplete="off">
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
                                    <p class="term-text">Bằng việc đăng nhập, bạn đồng ý với <a
                                            href="https://topdev.vn/term-of-services" target="_blank"
                                            class="term-link">Điều Khoản Sử Dụng</a>
                                        và <a href="https://topdev.vn/privacy-policy" target="_blank"
                                            class="term-link">
                                            Chính Sách Bảo Mật
                                        </a> của TopDev.</p>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-danger">Đăng Nhập</button>
                                    </div>
                                    <div class="text-right">
                                        <a href="https://accounts.topdev.vn/reset-password"
                                            class="underline forget-password" id="#btn-reset">Quên mật khẩu ?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative auth-content-container">
                <img src="https://accounts.topdev.vn/asset/images/tech-ball.svg" alt="TopDev Technology"
                    class="ball-top">
                <div id="auth-content" class="tab-content">
                    <div id="tab-user" class="tab-item tab-user active" tab-target="tab-user">
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
                                                hội tiếp cận công việc IT hot nhất</h2>
                                            <ul class="content-list">
                                                <li class="content-item">
                                                    Tạo CV chuẩn Developer</li>
                                                <li class="content-item">Ứng tuyển nhanh chóng hơn với hồ sơ đã được
                                                    lưu
                                                </li>
                                                <li class="content-item">Quản lý hồ sơ ứng tuyển và theo dõi cập nhật
                                                    trạng thái ứng tuyển
                                                </li>
                                                <li class="content-item">
                                                    Xem được mức lương cho mỗi vị trí
                                                </li>
                                                <li class="content-item">Lưu lại công việc yêu thích để ứng tuyển sau
                                                </li>
                                                <li class="content-item">
                                                    Thực hiện bài trắc nghiệm đánh giá tính cách làm việc</li>

                                            </ul>
                                            <p class="small-text">Nếu bạn gặp khó khăn trong việc đăng nhập / tạo tài
                                                khoản, vui lòng liên hệ với TopDev qua email contact@topdev.vn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-employer" class="tab-item tab-employer" tab-target="tab-employer">
                        <div class="register-form" id="register-form">
                            <h3 class="form-title">Đăng ký Tài khoản Nhà tuyển dụng</h3>
                            <p class="form-description">Tạo ngay tài khoản để tuyển dụng các Lập Trình Viên Hàng Đầu
                                trên TopDev
                            </p>
                            <form method="POST" action="https://accounts.topdev.vn/register" autocomplete="off">
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
                                    <label class="field-label" for="industry">Lĩnh vực</label>
                                    <select id="industry"
                                        class="form-control field-industry select2-hidden-accessible"
                                        name="industry[]" multiple="" placeholder="Chọn lĩnh vực công ty"
                                        style="width: 100%" data-select2-id="industry" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="Product" selected="">Product</option>
                                        <option value="Kế Toán - Kiểm Toán" selected="">Kế Toán - Kiểm Toán
                                        </option>
                                        <option value="Artificial Intelligence" selected="">Artificial Intelligence
                                        </option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="2" style="width: 100%;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--multiple" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                                <ul class="select2-selection__rendered">
                                                    <li class="select2-search select2-search--inline"><input
                                                            class="select2-search__field" type="search"
                                                            tabindex="0" autocomplete="off" autocorrect="off"
                                                            autocapitalize="none" spellcheck="false" role="textbox"
                                                            aria-autocomplete="list"
                                                            placeholder="Chọn lĩnh vực công ty" style="width: 0px;">
                                                    </li>
                                                </ul>
                                            </span></span><span class="dropdown-wrapper"
                                            aria-hidden="true"></span></span>
                                    <p class="invalid-feedback error-industry" role="alert">
                                    </p>
                                </div>

                                <div class="form-group ">
                                    <label class="field-label" for="skills">Kỹ năng công ty</label>
                                    <select id="skills" class="form-control field-skills select2-hidden-accessible"
                                        name="skills[]" multiple="" placeholder="Chọn kỹ năng công ty"
                                        style="width: 100%" data-select2-id="skills" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="PHP" selected="">PHP</option>
                                        <option value="WCF" selected="">WCF</option>
                                        <option value="SQL Server" selected="">SQL Server</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="1" style="width: 100%;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--multiple"
                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                tabindex="-1">
                                                <ul class="select2-selection__rendered">
                                                    <li class="select2-search select2-search--inline"><input
                                                            class="select2-search__field" type="search"
                                                            tabindex="0" autocomplete="off" autocorrect="off"
                                                            autocapitalize="none" spellcheck="false"
                                                            role="textbox" aria-autocomplete="list"
                                                            placeholder="Chọn kỹ năng công ty" style="width: 0px;">
                                                    </li>
                                                </ul>
                                            </span></span><span class="dropdown-wrapper"
                                            aria-hidden="true"></span></span>
                                    <p class="invalid-feedback error-skills" role="alert">
                                    </p>
                                </div>

                                <div class="form-group ">
                                    <label class="field-label" for="province">Trụ sở công ty</label>
                                    <select id="province"
                                        class="form-control field-province select2-hidden-accessible" name="state"
                                        style="width: 100%" placeholder="Chọn trụ sở công ty"
                                        data-select2-id="province" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="4"></option>
                                        <option value="058" selected="">Thành Phố Bắc Kạn</option>
                                        <option value="06" selected="">Tỉnh Bắc Kạn</option>
                                        <option value="9999999" selected="">Oversea</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="3" style="width: 100%;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-province-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-province-container" role="textbox"
                                                    aria-readonly="true"><span
                                                        class="select2-selection__placeholder">Chọn trụ sở công
                                                        ty</span></span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>

                                <div class="form-group mt-4">
                                    <p class="d-inline mr-2">
                                        Công ty bạn đang có nhu cầu tuyển dụng không?</p>
                                    <div class="custom-control td_radio custom-radio custom-control-inline">
                                        <input checked="checked" type="radio" id="customRadioInline1"
                                            name="seeking_candidate" value="1"
                                            class="custom-control-input register">
                                        <label class="custom-control-label" for="customRadioInline1">Có</label>
                                    </div>
                                    <div class="custom-control td_radio custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="seeking_candidate"
                                            value="0" class="custom-control-input register">
                                        <label class="custom-control-label" for="customRadioInline2">Không</label>
                                    </div>
                                </div>

                                <div class="form-group mt-3 custom-control custom-checkbox pl-4">
                                    <input type="checkbox" class="custom-control-input td_checkbox"
                                        id="checkbox-1">
                                    <label class="custom-control-label" for="checkbox-1">
                                        Tôi đã đọc và chấp nhận
                                        <a href="https://topdev.vn/term-of-services" target="_blank"
                                            class="copyright-link">
                                            Điều Khoản Sử Dụng
                                        </a>
                                        và <a href="https://topdev.vn/privacy-policy" target="_blank"
                                            class="copyright-link">
                                            Chính Sách Bảo Mật
                                        </a>
                                        của TopDev
                                    </label>
                                </div>
                                <button disabled="disabled" type="submit"
                                    class="btn btn-block btn-danger btn-register">Đăng Ký</button>
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
    <script>
        // JavaScript code to switch between the tab-user and tab-employer elements
        document.addEventListener("DOMContentLoaded", () => {
    // Authentication tabs
    const dataRoots = [...document.querySelectorAll("[tab-root]")];
    const targetData = [...document.querySelectorAll("[tab-target]")];

    const updateTabLayout = (rootContent = null) => {
        dataRoots.forEach((item) => {
            if (item.getAttribute("tab-root") === rootContent) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        });
        targetData.forEach((targetItem) => {
            if (targetItem.getAttribute("tab-target") === rootContent) {
                targetItem.classList.add("active");
            } else {
                targetItem.classList.remove("active");
            }
        });
    };

    dataRoots.forEach((rootItem) => {
        rootItem.addEventListener("click", (e) => {
            e.preventDefault();
            const rootContent = rootItem.getAttribute("tab-root");
            updateTabLayout(rootContent);
        });
    });
    const hash = document.location.hash;
    if (hash && hash.includes("#tab-employer")) {
        const tabRoot = document.querySelector('[tab-root="tab-employer"]');
        if (tabRoot) {
            const rootContent = tabRoot.getAttribute("tab-root");
            updateTabLayout(rootContent);
        }
    }});

      </script>
    <x-footer></x-footer>
