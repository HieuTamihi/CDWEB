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
                                        <option value="Quảng Cáo Truyền Thông" selected="">Quảng Cáo Truyền Thông
                                        </option>
                                        <option value="Kiến trúc/ Xây dựng" selected="">Kiến trúc/ Xây dựng
                                        </option>
                                        <option value="Nông nghiệp" selected="">Nông nghiệp</option>
                                        <option value="Công nghiệp ô tô" selected="">Công nghiệp ô tô</option>
                                        <option value="Hàng không vũ trụ" selected="">Hàng không vũ trụ</option>
                                        <option value="Ngân Hàng" selected="">Ngân Hàng</option>
                                        <option value="Dịch vụ doanh nghiệp" selected="">Dịch vụ doanh nghiệp
                                        </option>
                                        <option value="Hóa dược" selected="">Hóa dược</option>
                                        <option value="Phần cứng" selected="">Phần cứng</option>
                                        <option value="Phần Mềm" selected="">Phần Mềm</option>
                                        <option value="Thương mại điện tử/ Bán lẻ" selected="">Thương mại điện tử/
                                            Bán lẻ</option>
                                        <option value="Giáo dục" selected="">Giáo dục</option>
                                        <option value="Năng lượng" selected="">Năng lượng</option>
                                        <option value="Giải trí/ Game" selected="">Giải trí/ Game</option>
                                        <option value="Fintech" selected="">Fintech</option>
                                        <option value="Thực phẩm" selected="">Thực phẩm</option>
                                        <option value="Sức khỏe/ Làm đẹp" selected="">Sức khỏe/ Làm đẹp</option>
                                        <option value="Nhân sự" selected="">Nhân sự</option>
                                        <option value="Dịch vụ IT" selected="">Dịch vụ IT</option>
                                        <option value="Internet" selected="">Internet</option>
                                        <option value="Thi hành pháp luật" selected="">Thi hành pháp luật</option>
                                        <option value="Du lịch/ Nghỉ dưỡng" selected="">Du lịch/ Nghỉ dưỡng
                                        </option>
                                        <option value="Vận tải" selected="">Vận tải</option>
                                        <option value="Sản xuất" selected="">Sản xuất</option>
                                        <option value="Gia công phần mềm" selected="">Gia công phần mềm</option>
                                        <option value="Bất động sản" selected="">Bất động sản</option>
                                        <option value="Viễn Thông" selected="">Viễn Thông</option>
                                        <option value="Khác" selected="">Khác</option>
                                        <option value="Outsourcing" selected="">Outsourcing</option>
                                        <option value="Dịch vụ" selected="">Dịch vụ</option>
                                        <option value="Logistics" selected="">Logistics</option>
                                        <option value="Bán lẻ" selected="">Bán lẻ</option>
                                        <option value="Consumer Electronics" selected="">Consumer Electronics
                                        </option>
                                        <option value="Tư vấn và Đào  tạo Internet Marketing" selected="">Tư vấn và
                                            Đào tạo Internet Marketing</option>
                                        <option value="Thiết Kế" selected="">Thiết Kế</option>
                                        <option value="Creative Production" selected="">Creative Production
                                        </option>
                                        <option value="Finance" selected="">Finance</option>
                                        <option value="Chứng khoán" selected="">Chứng khoán</option>
                                        <option value="Insurtech" selected="">Insurtech</option>
                                        <option value="Manufacturing" selected="">Manufacturing</option>
                                        <option value="Kinh doanh trang sức" selected="">Kinh doanh trang sức
                                        </option>
                                        <option value="Bảo Hiểm" selected="">Bảo Hiểm</option>
                                        <option value="Tài Chính" selected="">Tài Chính</option>
                                        <option value="Kinh Doanh" selected="">Kinh Doanh</option>
                                        <option value="E-commerce Platforms" selected="">E-commerce Platforms
                                        </option>
                                        <option value="Human Resource" selected="">Human Resource</option>
                                        <option value="Thương mai dịch vụ" selected="">Thương mai dịch vụ</option>
                                        <option value="Security" selected="">Security</option>
                                        <option value="B2B Services" selected="">B2B Services</option>
                                        <option value="Sale &amp; Marketing Services" selected="">Sale &amp;
                                            Marketing Services</option>
                                        <option value="Công nghiệp nặng" selected="">Công nghiệp nặng</option>
                                        <option value="Sản phẩm dịch vụ" selected="">Sản phẩm dịch vụ</option>
                                        <option value="Management &amp; digital consulting" selected="">Management
                                            &amp; digital consulting</option>
                                        <option value="Công nghệ thông tin" selected="">Công nghệ thông tin
                                        </option>
                                        <option value="Software" selected="">Software</option>
                                        <option value="Construction" selected="">Construction</option>
                                        <option value="Technology and Computer Sciences" selected="">Technology and
                                            Computer Sciences</option>
                                        <option value="Mạng xã hội thời trang" selected="">Mạng xã hội thời trang
                                        </option>
                                        <option value="MarTech" selected="">MarTech</option>
                                        <option value="Thiết kế chế tạo" selected="">Thiết kế chế tạo</option>
                                        <option value="Triển Khai Phần Mềm" selected="">Triển Khai Phần Mềm
                                        </option>
                                        <option value="Thiết bị công nghệ điện tử" selected="">Thiết bị công nghệ
                                            điện tử</option>
                                        <option value="IT Consultant" selected="">IT Consultant</option>
                                        <option value="Bưu chính - Chuyển phát" selected="">Bưu chính - Chuyển phát
                                        </option>
                                        <option value="Non-governmental Organizations" selected="">Non-governmental
                                            Organizations</option>
                                        <option value="EdTech" selected="">EdTech</option>
                                        <option value="Information Technology" selected="">Information Technology
                                        </option>
                                        <option value="SUPPLY CHAIN CONSULTING" selected="">SUPPLY CHAIN CONSULTING
                                        </option>
                                        <option value="Tuyển Dụng" selected="">Tuyển Dụng</option>
                                        <option value="Tư vấn giám sát &amp; Quản lý dự án" selected="">Tư vấn giám
                                            sát &amp; Quản lý dự án</option>
                                        <option value="HR-Tech and AI Training Data Solutions" selected="">HR-Tech
                                            and AI Training Data Solutions</option>
                                        <option value="Thương mại" selected="">Thương mại</option>
                                        <option value="Đầu tư" selected="">Đầu tư</option>
                                        <option value="SocialTech" selected="">SocialTech</option>
                                        <option value="" selected=""></option>
                                        <option value="" selected=""></option>
                                        <option value="Báo chí , truyền hình" selected="">Báo chí , truyền hình
                                        </option>
                                        <option value="" selected=""></option>
                                        <option value="" selected=""></option>
                                        <option value="Artificial Intelligence" selected="">Artificial Intelligence
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
                                        <option value="Magento" selected="">Magento</option>
                                        <option value="SEM" selected="">SEM</option>
                                        <option value="SEO" selected="">SEO</option>
                                        <option value="MVC5" selected="">MVC5</option>
                                        <option value="WPF" selected="">WPF</option>
                                        <option value="Signal R" selected="">Signal R</option>
                                        <option value="ABAP" selected="">ABAP</option>
                                        <option value="Knockout JS" selected="">Knockout JS</option>
                                        <option value="REST API" selected="">REST API</option>
                                        <option value="Video Game Producer" selected="">Video Game Producer
                                        </option>
                                        <option value="UML" selected="">UML</option>
                                        <option value="Laravel" selected="">Laravel</option>
                                        <option value="FuelPHP" selected="">FuelPHP</option>
                                        <option value="Business Intelligence" selected="">Business Intelligence
                                        </option>
                                        <option value="OOP" selected="">OOP</option>
                                        <option value="FlightPHP" selected="">FlightPHP</option>
                                        <option value="Lifecycle (sdlc)" selected="">Lifecycle (sdlc)</option>
                                        <option value="Symfony" selected="">Symfony</option>
                                        <option value="CRM (sap" selected="">CRM (sap</option>
                                        <option value="CodeIgniter" selected="">CodeIgniter</option>
                                        <option value="PhalconPHP" selected="">PhalconPHP</option>
                                        <option value="PopPHP" selected="">PopPHP</option>
                                        <option value="PHPixie" selected="">PHPixie</option>
                                        <option value="Nette" selected="">Nette</option>
                                        <option value="Ajax" selected="">Ajax</option>
                                        <option value="Gulp" selected="">Gulp</option>
                                        <option value="LESS" selected="">LESS</option>
                                        <option value="Unity" selected="">Unity</option>
                                        <option value="ActionScript" selected="">ActionScript</option>
                                        <option value="Photoshop" selected="">Photoshop</option>
                                        <option value="Illustrator" selected="">Illustrator</option>
                                        <option value="Sketch" selected="">Sketch</option>
                                        <option value="Microsoft Access" selected="">Microsoft Access</option>
                                        <option value="3D Artist" selected="">3D Artist</option>
                                        <option value="Objective-C" selected="">Objective-C</option>
                                        <option value="MariaDB" selected="">MariaDB</option>
                                        <option value="Data Science" selected="">Data Science</option>
                                        <option value="MeteorJS" selected="">MeteorJS</option>
                                        <option value="VueJS" selected="">VueJS</option>
                                        <option value="Cloud" selected="">Cloud</option>
                                        <option value="Sitecore" selected="">Sitecore</option>
                                        <option value="AngularJS" selected="">AngularJS</option>
                                        <option value=" PostgreSQL" selected=""> PostgreSQL</option>
                                        <option value="Redux" selected="">Redux</option>
                                        <option value="Struts" selected="">Struts</option>
                                        <option value="Ansible" selected="">Ansible</option>
                                        <option value="SDN" selected="">SDN</option>
                                        <option value="SVN" selected="">SVN</option>
                                        <option value="Unit Testing" selected="">Unit Testing</option>
                                        <option value="Git" selected="">Git</option>
                                        <option value="NoSQL" selected="">NoSQL</option>
                                        <option value="Performance Testing" selected="">Performance Testing
                                        </option>
                                        <option value="Nginx" selected="">Nginx</option>
                                        <option value=" Squid" selected=""> Squid</option>
                                        <option value=" Memcached" selected=""> Memcached</option>
                                        <option value="Nagios" selected="">Nagios</option>
                                        <option value="Manager" selected="">Manager</option>
                                        <option value="GlusterFS" selected="">GlusterFS</option>
                                        <option value="PMO" selected="">PMO</option>
                                        <option value="French" selected="">French</option>
                                        <option value="Technical Support" selected="">Technical Support</option>
                                        <option value="API" selected="">API</option>
                                        <option value="NLP" selected="">NLP</option>
                                        <option value="Blockchain" selected="">Blockchain</option>
                                        <option value="JUnit" selected="">JUnit</option>
                                        <option value="Angular 2" selected="">Angular 2</option>
                                        <option value="Perl" selected="">Perl</option>
                                        <option value="Indesign" selected="">Indesign</option>
                                        <option value="Product Owner" selected="">Product Owner</option>
                                        <option value="Business Analyst" selected="">Business Analyst</option>
                                        <option value="Kotlin" selected="">Kotlin</option>
                                        <option value="PL/SQL" selected="">PL/SQL</option>
                                        <option value="Data Engineer" selected="">Data Engineer</option>
                                        <option value="Database Administrator" selected="">Database Administrator
                                        </option>
                                        <option value="Network" selected="">Network</option>
                                        <option value="Windows" selected="">Windows</option>
                                        <option value="R" selected="">R</option>
                                        <option value="C" selected="">C</option>
                                        <option value="Automation Tester" selected="">Automation Tester</option>
                                        <option value="R&amp;D" selected="">R&amp;D</option>
                                        <option value="Magento2" selected="">Magento2</option>
                                        <option value="Salesforce" selected="">Salesforce</option>
                                        <option value="Data Mining" selected="">Data Mining</option>
                                        <option value="Angular" selected="">Angular</option>
                                        <option value="Laravel 5" selected="">Laravel 5</option>
                                        <option value="Angular 5" selected="">Angular 5</option>
                                        <option value="Angular 4" selected="">Angular 4</option>
                                        <option value="Azure" selected="">Azure</option>
                                        <option value="WebForm" selected="">WebForm</option>
                                        <option value="SASS" selected="">SASS</option>
                                        <option value="Angular 6" selected="">Angular 6</option>
                                        <option value="Oracle" selected="">Oracle</option>
                                        <option value="Software Architect" selected="">Software Architect</option>
                                        <option value="System Engineer" selected="">System Engineer</option>
                                        <option value="Hybrid App" selected="">Hybrid App</option>
                                        <option value="2D Artist" selected="">2D Artist</option>
                                        <option value="NOC" selected="">NOC</option>
                                        <option value=".NET Core" selected="">.NET Core</option>
                                        <option value="MyBatis" selected="">MyBatis</option>
                                        <option value="C Language" selected="">C Language</option>
                                        <option value="Technical Architect" selected="">Technical Architect
                                        </option>
                                        <option value="Oracle Database" selected="">Oracle Database</option>
                                        <option value="Yii2" selected="">Yii2</option>
                                        <option value="Flutter" selected="">Flutter</option>
                                        <option value="Waterfall" selected="">Waterfall</option>
                                        <option value="Web/ Mobile" selected="">Web/ Mobile</option>
                                        <option value="Java Core" selected="">Java Core</option>
                                        <option value="IT Manager" selected="">IT Manager</option>
                                        <option value="AI" selected="">AI</option>
                                        <option value="IT Comtor" selected="">IT Comtor</option>
                                        <option value="SOAP" selected="">SOAP</option>
                                        <option value="UX Design" selected="">UX Design</option>
                                        <option value="Technical Writer" selected="">Technical Writer</option>
                                        <option value="DMS" selected="">DMS</option>
                                        <option value="Shopify" selected="">Shopify</option>
                                        <option value="Automation QA" selected="">Automation QA</option>
                                        <option value="Selenium" selected="">Selenium</option>
                                        <option value="Video Stream" selected="">Video Stream</option>
                                        <option value="TypeScript" selected="">TypeScript</option>
                                        <option value="FX" selected="">FX</option>
                                        <option value="Core Banking" selected="">Core Banking</option>
                                        <option value="CI/CD" selected="">CI/CD</option>
                                        <option value="MAC" selected="">MAC</option>
                                        <option value="Product Design" selected="">Product Design</option>
                                        <option value="ASP.NET" selected="">ASP.NET</option>
                                        <option value="Django" selected="">Django</option>
                                        <option value="C++" selected="">C++</option>
                                        <option value="3D Max" selected="">3D Max</option>
                                        <option value="Maya" selected="">Maya</option>
                                        <option value="CorelDRAW" selected="">CorelDRAW</option>
                                        <option value="AutoCAD" selected="">AutoCAD</option>
                                        <option value="Game Design" selected="">Game Design</option>
                                        <option value="Agile" selected="">Agile</option>
                                        <option value="J2EE" selected="">J2EE</option>
                                        <option value="Graphic Design" selected="">Graphic Design</option>
                                        <option value="Game Master" selected="">Game Master</option>
                                        <option value="Data Analytics" selected="">Data Analytics</option>
                                        <option value="Golang" selected="">Golang</option>
                                        <option value="UI Design" selected="">UI Design</option>
                                        <option value="Retouch" selected="">Retouch</option>
                                        <option value="Ruby" selected="">Ruby</option>
                                        <option value="Mobile" selected="">Mobile</option>
                                        <option value="MEAN" selected="">MEAN</option>
                                        <option value="Front-End" selected="">Front-End</option>
                                        <option value="Java" selected="">Java</option>
                                        <option value="Back-End" selected="">Back-End</option>
                                        <option value="Full-Stack" selected="">Full-Stack</option>
                                        <option value="DevOps" selected="">DevOps</option>
                                        <option value="ReactJS" selected="">ReactJS</option>
                                        <option value="xCode" selected="">xCode</option>
                                        <option value="CSS3" selected="">CSS3</option>
                                        <option value="Visual Studio" selected="">Visual Studio</option>
                                        <option value="Product" selected="">Product</option>
                                        <option value="JavaScript" selected="">JavaScript</option>
                                        <option value="Cocoa" selected="">Cocoa</option>
                                        <option value="Cocos2D-x" selected="">Cocos2D-x</option>
                                        <option value="ExpressJS" selected="">ExpressJS</option>
                                        <option value="Web" selected="">Web</option>
                                        <option value="Server" selected="">Server</option>
                                        <option value="Scala" selected="">Scala</option>
                                        <option value="VB.NET" selected="">VB.NET</option>
                                        <option value="Big Data" selected="">Big Data</option>
                                        <option value="Design Patterns" selected="">Design Patterns</option>
                                        <option value="Visual Basic" selected="">Visual Basic</option>
                                        <option value="Docker" selected="">Docker</option>
                                        <option value="React Native" selected="">React Native</option>
                                        <option value="WebRTC" selected="">WebRTC</option>
                                        <option value="Ionic" selected="">Ionic</option>
                                        <option value="Web Design" selected="">Web Design</option>
                                        <option value="Motion Graphic Design" selected="">Motion Graphic Design
                                        </option>
                                        <option value="C#" selected="">C#</option>
                                        <option value="Winform" selected="">Winform</option>
                                        <option value="BackboneJS" selected="">BackboneJS</option>
                                        <option value="KnockOut" selected="">KnockOut</option>
                                        <option value="After Effect" selected="">After Effect</option>
                                        <option value="Hibernate" selected="">Hibernate</option>
                                        <option value="Spring" selected="">Spring</option>
                                        <option value="Japanese - N5" selected="">Japanese - N5</option>
                                        <option value="Japanese - N4" selected="">Japanese - N4</option>
                                        <option value="Japanese - N3" selected="">Japanese - N3</option>
                                        <option value="Japanese - N2" selected="">Japanese - N2</option>
                                        <option value="Ruby on Rails" selected="">Ruby on Rails</option>
                                        <option value="Japanese" selected="">Japanese</option>
                                        <option value="Database" selected="">Database</option>
                                        <option value="Japanese - N1" selected="">Japanese - N1</option>
                                        <option value="MVC" selected="">MVC</option>
                                        <option value="Bridge SE" selected="">Bridge SE</option>
                                        <option value="BSE Leader" selected="">BSE Leader</option>
                                        <option value="Fintech" selected="">Fintech</option>
                                        <option value="SQL" selected="">SQL</option>
                                        <option value="Programming Experience" selected="">Programming Experience
                                        </option>
                                        <option value="Openstack Development" selected="">Openstack Development
                                        </option>
                                        <option value="Japanese ( N1 Or N2)" selected="">Japanese ( N1 Or N2)
                                        </option>
                                        <option value="MySQL" selected="">MySQL</option>
                                        <option value="CSS" selected="">CSS</option>
                                        <option value="Product Manager" selected="">Product Manager</option>
                                        <option value="Premier" selected="">Premier</option>
                                        <option value="Autodesk" selected="">Autodesk</option>
                                        <option value="System Admin" selected="">System Admin</option>
                                        <option value="Lightroom" selected="">Lightroom</option>
                                        <option value="Photography" selected="">Photography</option>
                                        <option value="Animation 2D" selected="">Animation 2D</option>
                                        <option value="Animation 3D" selected="">Animation 3D</option>
                                        <option value="Embedded System" selected="">Embedded System</option>
                                        <option value="Machine Learning" selected="">Machine Learning</option>
                                        <option value="IT Communicator" selected="">IT Communicator</option>
                                        <option value="Project Manager" selected="">Project Manager</option>
                                        <option value="Project Leader" selected="">Project Leader</option>
                                        <option value="Web Developer" selected="">Web Developer</option>
                                        <option value="JQuery" selected="">JQuery</option>
                                        <option value="Python" selected="">Python</option>
                                        <option value="IT Support" selected="">IT Support</option>
                                        <option value="Technical Leader" selected="">Technical Leader</option>
                                        <option value="AWS" selected="">AWS</option>
                                        <option value="JSON" selected="">JSON</option>
                                        <option value="HTML &amp; CSS" selected="">HTML &amp; CSS</option>
                                        <option value="NodeJS" selected="">NodeJS</option>
                                        <option value="Scrum" selected="">Scrum</option>
                                        <option value="Problem Solving Skill" selected="">Problem Solving Skill
                                        </option>
                                        <option value="Game" selected="">Game</option>
                                        <option value="Software Developer" selected="">Software Developer</option>
                                        <option value="Flash" selected="">Flash</option>
                                        <option value="My SQL" selected="">My SQL</option>
                                        <option value="Game Artist" selected="">Game Artist</option>
                                        <option value="Agile &amp; Scrum" selected="">Agile &amp; Scrum</option>
                                        <option value="C#/ Oop/ Net Framwork" selected="">C#/ Oop/ Net Framwork
                                        </option>
                                        <option value="HTML5" selected="">HTML5</option>
                                        <option value="C/C++" selected="">C/C++</option>
                                        <option value="Cisco" selected="">Cisco</option>
                                        <option value="Construct 2" selected="">Construct 2</option>
                                        <option value="PC Devices" selected="">PC Devices</option>
                                        <option value="SAP" selected="">SAP</option>
                                        <option value="IT Service" selected="">IT Service</option>
                                        <option value="IT Security" selected="">IT Security</option>
                                        <option value="Motivate Staffs" selected="">Motivate Staffs</option>
                                        <option value="COBOL" selected="">COBOL</option>
                                        <option value="ASP.NET Core" selected="">ASP.NET Core</option>
                                        <option value="Entity" selected="">Entity</option>
                                        <option value="Web Application" selected="">Web Application</option>
                                        <option value="Spring Boot" selected="">Spring Boot</option>
                                        <option value="S3" selected="">S3</option>
                                        <option value="Iot" selected="">Iot</option>
                                        <option value="SSIS" selected="">SSIS</option>
                                        <option value="NextJS" selected="">NextJS</option>
                                        <option value="flask" selected="">flask</option>
                                        <option value="Json/xml" selected="">Json/xml</option>
                                        <option value="OSP" selected="">OSP</option>
                                        <option value="Test Design" selected="">Test Design</option>
                                        <option value="Programming Language" selected="">Programming Language
                                        </option>
                                        <option value="Data Structure &amp; Algorithm" selected="">Data Structure
                                            &amp; Algorithm</option>
                                        <option value="Gideros" selected="">Gideros</option>
                                        <option value="English - Good" selected="">English - Good</option>
                                        <option value="LiveCode" selected="">LiveCode</option>
                                        <option value="VR/AR" selected="">VR/AR</option>
                                        <option value="Keras" selected="">Keras</option>
                                        <option value="PyTorch" selected="">PyTorch</option>
                                        <option value="Kubernetes" selected="">Kubernetes</option>
                                        <option value="Game Editor" selected="">Game Editor</option>
                                        <option value="Angular 7" selected="">Angular 7</option>
                                        <option value="Angular 2+" selected="">Angular 2+</option>
                                        <option value="Edgelib" selected="">Edgelib</option>
                                        <option value="Angular 8+" selected="">Angular 8+</option>
                                        <option value="Angular 8" selected="">Angular 8</option>
                                        <option value="Deep Learning" selected="">Deep Learning</option>
                                        <option value="Struct" selected="">Struct</option>
                                        <option value="MacOS" selected="">MacOS</option>
                                        <option value="NuxtJS" selected="">NuxtJS</option>
                                        <option value="Swift" selected="">Swift</option>
                                        <option value="OWASP" selected="">OWASP</option>
                                        <option value="Web Master" selected="">Web Master</option>
                                        <option value="LAN" selected="">LAN</option>
                                        <option value="WAN" selected="">WAN</option>
                                        <option value="QA/QC" selected="">QA/QC</option>
                                        <option value="NestJS" selected="">NestJS</option>
                                        <option value="Hybrid" selected="">Hybrid</option>
                                        <option value="CSDL Oracle" selected="">CSDL Oracle</option>
                                        <option value="MS Dynamic" selected="">MS Dynamic</option>
                                        <option value="CRM" selected="">CRM</option>
                                        <option value="Spss" selected="">Spss</option>
                                        <option value="Algorithm" selected="">Algorithm</option>
                                        <option value="LEAN" selected="">LEAN</option>
                                        <option value="IT Operations" selected="">IT Operations</option>
                                        <option value="Visual Effects" selected="">Visual Effects</option>
                                        <option value="Mobile Video Games" selected="">Mobile Video Games
                                        </option>
                                        <option value="IoT Development" selected="">IoT Development</option>
                                        <option value="Technical Director" selected="">Technical Director
                                        </option>
                                        <option value="Solution Architect" selected="">Solution Architect
                                        </option>
                                        <option value="Spark" selected="">Spark</option>
                                        <option value="Hadoop" selected="">Hadoop</option>
                                        <option value="DNS" selected="">DNS</option>
                                        <option value="IOT Integration" selected="">IOT Integration</option>
                                        <option value="MCSA" selected="">MCSA</option>
                                        <option value="German" selected="">German</option>
                                        <option value="Automotive" selected="">Automotive</option>
                                        <option value="Product Planning" selected="">Product Planning</option>
                                        <option value="PMP" selected="">PMP</option>
                                        <option value="Data Warehouse" selected="">Data Warehouse</option>
                                        <option value="Esenthel Engine" selected="">Esenthel Engine</option>
                                        <option value="3D Modelling" selected="">3D Modelling</option>
                                        <option value="Firebase" selected="">Firebase</option>
                                        <option value="Opencv" selected="">Opencv</option>
                                        <option value="SSRS" selected="">SSRS</option>
                                        <option value="Product Operation" selected="">Product Operation</option>
                                        <option value="MCSE" selected="">MCSE</option>
                                        <option value="Chinese" selected="">Chinese</option>
                                        <option value="Oracle Ebs" selected="">Oracle Ebs</option>
                                        <option value="Verilog" selected="">Verilog</option>
                                        <option value="HMI Application" selected="">HMI Application</option>
                                        <option value="HMI Frameworks" selected="">HMI Frameworks</option>
                                        <option value="Corona" selected="">Corona</option>
                                        <option value="Microsoft Dynamics" selected="">Microsoft Dynamics
                                        </option>
                                        <option value="Oracle EBS R12" selected="">Oracle EBS R12</option>
                                        <option value="Oracle ERP" selected="">Oracle ERP</option>
                                        <option value="QT Framework" selected="">QT Framework</option>
                                        <option value="MonoGame " selected="">MonoGame </option>
                                        <option value="Supporting End Users" selected="">Supporting End Users
                                        </option>
                                        <option value="Jenkins Ci" selected="">Jenkins Ci</option>
                                        <option value="Ott" selected="">Ott</option>
                                        <option value="Microsoft" selected="">Microsoft</option>
                                        <option value="Virtualization" selected="">Virtualization</option>
                                        <option value="IT Presales" selected="">IT Presales</option>
                                        <option value="Integration Test" selected="">Integration Test</option>
                                        <option value="Matlab" selected="">Matlab</option>
                                        <option value="Oracle Middleware" selected="">Oracle Middleware</option>
                                        <option value="Oracle And/or Postgresql" selected="">Oracle And/or
                                            Postgresql</option>
                                        <option value="Visual Foxpro" selected="">Visual Foxpro</option>
                                        <option value="Soc Design" selected="">Soc Design</option>
                                        <option value="RTL Verification" selected="">RTL Verification</option>
                                        <option value="Data Visualization" selected="">Data Visualization
                                        </option>
                                        <option value="IOT Engineering" selected="">IOT Engineering</option>
                                        <option value="Videos Editor" selected="">Videos Editor</option>
                                        <option value="Oracle ERP Cloud" selected="">Oracle ERP Cloud</option>
                                        <option value="Kernel" selected="">Kernel</option>
                                        <option value="Oracle SQL" selected="">Oracle SQL</option>
                                        <option value="Linux" selected="">Linux</option>
                                        <option value="Ceh-V5" selected="">Ceh-V5</option>
                                        <option value="VoIP" selected="">VoIP</option>
                                        <option value="Oracle Storage" selected="">Oracle Storage</option>
                                        <option value="Oracle &amp; Plsql" selected="">Oracle &amp; Plsql
                                        </option>
                                        <option value="Internet of Things" selected="">Internet of Things
                                        </option>
                                        <option value="MS Visio" selected="">MS Visio</option>
                                        <option value="Axure Rp" selected="">Axure Rp</option>
                                        <option value="Plc" selected="">Plc</option>
                                        <option value="Jsp/servlet" selected="">Jsp/servlet</option>
                                        <option value="Project Coordinator" selected="">Project Coordinator
                                        </option>
                                        <option value="NUnit" selected="">NUnit</option>
                                        <option value="Cocos2D" selected="">Cocos2D</option>
                                        <option value="Unix" selected="">Unix</option>
                                        <option value="ETL" selected="">ETL</option>
                                        <option value="Microsoft Dynamics AX" selected="">Microsoft Dynamics AX
                                        </option>
                                        <option value="Game Tester" selected="">Game Tester</option>
                                        <option value="CRM Integration" selected="">CRM Integration</option>
                                        <option value="Monitor Card Transactions" selected="">Monitor Card
                                            Transactions</option>
                                        <option value="UX/UI Design" selected="">UX/UI Design</option>
                                        <option value="Lua" selected="">Lua</option>
                                        <option value="Game Operator" selected="">Game Operator</option>
                                        <option value="BSI" selected="">BSI</option>
                                        <option value="Sharepoint" selected="">Sharepoint</option>
                                        <option value="SRE" selected="">SRE</option>
                                        <option value="Erlang" selected="">Erlang</option>
                                        <option value="BabylonJS" selected="">BabylonJS</option>
                                        <option value="Coffeescript" selected="">Coffeescript</option>
                                        <option value="Dart" selected="">Dart</option>
                                        <option value="Operator" selected="">Operator</option>
                                        <option value="Security Engineer" selected="">Security Engineer</option>
                                        <option value=".NET" selected="">.NET</option>
                                        <option value="Financial" selected="">Financial</option>
                                        <option value="SwiftUI" selected="">SwiftUI</option>
                                        <option value="UIkit" selected="">UIkit</option>
                                        <option value="Manual" selected="">Manual</option>
                                        <option value="Core Java 8" selected="">Core Java 8</option>
                                        <option value="Java 8" selected="">Java 8</option>
                                        <option value="Embedded" selected="">Embedded</option>
                                        <option value="VFX" selected="">VFX</option>
                                        <option value="FastAPI" selected="">FastAPI</option>
                                        <option value="RxJS" selected="">RxJS</option>
                                        <option value="Korean" selected="">Korean</option>
                                        <option value="Marketing" selected="">Marketing</option>
                                        <option value="CCNA" selected="">CCNA</option>
                                        <option value="Moodle" selected="">Moodle</option>
                                        <option value="Quality Analyst" selected="">Quality Analyst</option>
                                        <option value="BrSE" selected="">BrSE</option>
                                        <option value="CRM Consultant" selected="">CRM Consultant</option>
                                        <option value="Tableau" selected="">Tableau</option>
                                        <option value="Penetration Test" selected="">Penetration Test</option>
                                        <option value="React" selected="">React</option>
                                        <option value="ERP" selected="">ERP</option>
                                        <option value="System" selected="">System</option>
                                        <option value="Dagger" selected="">Dagger</option>
                                        <option value="MVVM" selected="">MVVM</option>
                                        <option value="Oracle PL/SQL" selected="">Oracle PL/SQL</option>
                                        <option value="Designer" selected="">Designer</option>
                                        <option value="Consultant" selected="">Consultant</option>
                                        <option value="Appium" selected="">Appium</option>
                                        <option value="Serenity BDD" selected="">Serenity BDD</option>
                                        <option value="Jmeter" selected="">Jmeter</option>
                                        <option value="Manual Tester" selected="">Manual Tester</option>
                                        <option value="Embedded Engineer" selected="">Embedded Engineer</option>
                                        <option value="HTML" selected="">HTML</option>
                                        <option value="QA" selected="">QA</option>
                                        <option value="QC" selected="">QC</option>
                                        <option value="Tester" selected="">Tester</option>
                                        <option value="MS SQL" selected="">MS SQL</option>
                                        <option value="Vmware" selected="">Vmware</option>
                                        <option value="RxSwift" selected="">RxSwift</option>
                                        <option value="Combine" selected="">Combine</option>
                                        <option value="POD" selected="">POD</option>
                                        <option value="Java Spring Boot" selected="">Java Spring Boot</option>
                                        <option value="Triển Khai Phần Mềm" selected="">Triển Khai Phần Mềm
                                        </option>
                                        <option value="Tailwind" selected="">Tailwind</option>
                                        <option value="IT Operation" selected="">IT Operation</option>
                                        <option value="CAD" selected="">CAD</option>
                                        <option value="Unity3d" selected="">Unity3d</option>
                                        <option value="Lumen" selected="">Lumen</option>
                                        <option value="Video Edit" selected="">Video Edit</option>
                                        <option value="Data Analyst" selected="">Data Analyst</option>
                                        <option value="R&amp;D Engineer" selected="">R&amp;D Engineer</option>
                                        <option value="Scrum Master" selected="">Scrum Master</option>
                                        <option value="FI" selected="">FI</option>
                                        <option value="Java EE" selected="">Java EE</option>
                                        <option value="Angular 4+" selected="">Angular 4+</option>
                                        <option value="Adobe XD" selected="">Adobe XD</option>
                                        <option value="Data Reporting Analyst" selected="">Data Reporting Analyst
                                        </option>
                                        <option value="Android" selected="">Android</option>
                                        <option value="CakePHP" selected="">CakePHP</option>
                                        <option value="Unity2D" selected="">Unity2D</option>
                                        <option value="English" selected="">English</option>
                                        <option value="Functional Safety" selected="">Functional Safety</option>
                                        <option value="INTEGRATION ENGINEER" selected="">INTEGRATION ENGINEER
                                        </option>
                                        <option value="Integration" selected="">Integration</option>
                                        <option value="Prisma2" selected="">Prisma2</option>
                                        <option value="audit" selected="">audit</option>
                                        <option value="Software" selected="">Software</option>
                                        <option value="Commucation" selected="">Commucation</option>
                                        <option value="Zeplin" selected="">Zeplin</option>
                                        <option value=".NET MVC" selected="">.NET MVC</option>
                                        <option value="Angular 10" selected="">Angular 10</option>
                                        <option value="Digital Design" selected="">Digital Design</option>
                                        <option value="Art Director" selected="">Art Director</option>
                                        <option value="AX" selected="">AX</option>
                                        <option value="X++" selected="">X++</option>
                                        <option value="Project Assistant" selected="">Project Assistant</option>
                                        <option value="ASP" selected="">ASP</option>
                                        <option value="CMS" selected="">CMS</option>
                                        <option value="GIS" selected="">GIS</option>
                                        <option value="Cybersecurity" selected="">Cybersecurity</option>
                                        <option value="Mobile Tester" selected="">Mobile Tester</option>
                                        <option value="Web Tester" selected="">Web Tester</option>
                                        <option value="Angular 5+" selected="">Angular 5+</option>
                                        <option value="JPA" selected="">JPA</option>
                                        <option value="Microsoft 365" selected="">Microsoft 365</option>
                                        <option value="Crawling" selected="">Crawling</option>
                                        <option value="hub" selected="">hub</option>
                                        <option value="Corecard" selected="">Corecard</option>
                                        <option value="Yii" selected="">Yii</option>
                                        <option value="Infrastructure" selected="">Infrastructure</option>
                                        <option value="CSDL" selected="">CSDL</option>
                                        <option value="ESB" selected="">ESB</option>
                                        <option value="IT Coordinator" selected="">IT Coordinator</option>
                                        <option value="MSA" selected="">MSA</option>
                                        <option value="SSR" selected="">SSR</option>
                                        <option value="oss" selected="">oss</option>
                                        <option value="Laravel 6" selected="">Laravel 6</option>
                                        <option value="Woocommerce" selected="">Woocommerce</option>
                                        <option value="backlog" selected="">backlog</option>
                                        <option value="Invision" selected="">Invision</option>
                                        <option value="Kanban" selected="">Kanban</option>
                                        <option value="mcv" selected="">mcv</option>
                                        <option value="NAS" selected="">NAS</option>
                                        <option value="Rust" selected="">Rust</option>
                                        <option value="Site Reliability" selected="">Site Reliability</option>
                                        <option value="DOM" selected="">DOM</option>
                                        <option value="IT Staff" selected="">IT Staff</option>
                                        <option value="CRM System" selected="">CRM System</option>
                                        <option value="ASP.NET MVC" selected="">ASP.NET MVC</option>
                                        <option value="MDM design" selected="">MDM design</option>
                                        <option value="Test" selected="">Test</option>
                                        <option value="Game Programmer" selected="">Game Programmer</option>
                                        <option value="Solid" selected="">Solid</option>
                                        <option value="framework" selected="">framework</option>
                                        <option value="SCSS" selected="">SCSS</option>
                                        <option value="Technical Consultant" selected="">Technical Consultant
                                        </option>
                                        <option value="Android Unit Test" selected="">Android Unit Test</option>
                                        <option value="Apache" selected="">Apache</option>
                                        <option value="PQA" selected="">PQA</option>
                                        <option value="Process Quality Assurance" selected="">Process Quality
                                            Assurance</option>
                                        <option value="Elastic Path" selected="">Elastic Path</option>
                                        <option value="Quantitative Researcher" selected="">Quantitative
                                            Researcher</option>
                                        <option value="Firmware" selected="">Firmware</option>
                                        <option value="AVR" selected="">AVR</option>
                                        <option value="Arduino" selected="">Arduino</option>
                                        <option value="Beaglebone" selected="">Beaglebone</option>
                                        <option value="Native" selected="">Native</option>
                                        <option value="Zend" selected="">Zend</option>
                                        <option value="RTOS" selected="">RTOS</option>
                                        <option value="GraphQL" selected="">GraphQL</option>
                                        <option value="Prisma" selected="">Prisma</option>
                                        <option value="Lambda" selected="">Lambda</option>
                                        <option value="IPS/IDS" selected="">IPS/IDS</option>
                                        <option value="System Security" selected="">System Security</option>
                                        <option value="RabbitMQ" selected="">RabbitMQ</option>
                                        <option value="Tensorflow" selected="">Tensorflow</option>
                                        <option value="Game Asset" selected="">Game Asset</option>
                                        <option value="Arabic" selected="">Arabic</option>
                                        <option value="REP" selected="">REP</option>
                                        <option value="MVC 4" selected="">MVC 4</option>
                                        <option value="MVC 5" selected="">MVC 5</option>
                                        <option value="Entity framework 6" selected="">Entity framework 6
                                        </option>
                                        <option value="Solidity" selected="">Solidity</option>
                                        <option value="GSM" selected="">GSM</option>
                                        <option value="3G" selected="">3G</option>
                                        <option value="4G LTE" selected="">4G LTE</option>
                                        <option value="MQTT" selected="">MQTT</option>
                                        <option value="LoRa" selected="">LoRa</option>
                                        <option value="TCP/IP" selected="">TCP/IP</option>
                                        <option value="SSl" selected="">SSl</option>
                                        <option value="Centos 7" selected="">Centos 7</option>
                                        <option value="MS Office" selected="">MS Office</option>
                                        <option value="PySpark" selected="">PySpark</option>
                                        <option value="Emtuty Famework 6" selected="">Emtuty Famework 6</option>
                                        <option value="Slim" selected="">Slim</option>
                                        <option value="Oauth" selected="">Oauth</option>
                                        <option value="ActiveMQ" selected="">ActiveMQ</option>
                                        <option value="elasticsearch" selected="">elasticsearch</option>
                                        <option value="Adobe Creative Suite" selected="">Adobe Creative Suite
                                        </option>
                                        <option value="Test Engineer" selected="">Test Engineer</option>
                                        <option value="Angular 11" selected="">Angular 11</option>
                                        <option value="English Skills" selected="">English Skills</option>
                                        <option value="GitFlow" selected="">GitFlow</option>
                                        <option value="Cocoa Touch" selected="">Cocoa Touch</option>
                                        <option value="Visual Designer" selected="">Visual Designer</option>
                                        <option value="ASP.NET MVC 5" selected="">ASP.NET MVC 5</option>
                                        <option value="Entity Framework" selected="">Entity Framework</option>
                                        <option value="Drupal" selected="">Drupal</option>
                                        <option value="Application Security" selected="">Application Security
                                        </option>
                                        <option value="Phần Mềm Dịch Vụ" selected="">Phần Mềm Dịch Vụ</option>
                                        <option value="Entity Framework Core" selected="">Entity Framework Core
                                        </option>
                                        <option value="SQA" selected="">SQA</option>
                                        <option value="UE4" selected="">UE4</option>
                                        <option value="Zbrush" selected="">Zbrush</option>
                                        <option value="React/Typescript" selected="">React/Typescript</option>
                                        <option value="control system" selected="">control system</option>
                                        <option value="IT Administrator" selected="">IT Administrator</option>
                                        <option value="NativeScript" selected="">NativeScript</option>
                                        <option value="Robot" selected="">Robot</option>
                                        <option value="TDD" selected="">TDD</option>
                                        <option value="JavaEE" selected="">JavaEE</option>
                                        <option value="Microsoft Dynamics 365" selected="">Microsoft Dynamics 365
                                        </option>
                                        <option value="LS Central" selected="">LS Central</option>
                                        <option value="Jet Global" selected="">Jet Global</option>
                                        <option value="IT Specialist" selected="">IT Specialist</option>
                                        <option value="Design" selected="">Design</option>
                                        <option value="React JS" selected="">React JS</option>
                                        <option value="De-fi" selected="">De-fi</option>
                                        <option value="SQS" selected="">SQS</option>
                                        <option value="Memcache" selected="">Memcache</option>
                                        <option value="Balsamiq" selected="">Balsamiq</option>
                                        <option value="Manual Test" selected="">Manual Test</option>
                                        <option value="Angular 7+" selected="">Angular 7+</option>
                                        <option value="Game Mobile" selected="">Game Mobile</option>
                                        <option value="Document Analyst" selected="">Document Analyst</option>
                                        <option value="Kafka" selected="">Kafka</option>
                                        <option value="LiveOps" selected="">LiveOps</option>
                                        <option value="3D Designer" selected="">3D Designer</option>
                                        <option value="Angular 10+" selected="">Angular 10+</option>
                                        <option value="Functional Consultant" selected="">Functional Consultant
                                        </option>
                                        <option value="" selected=""></option>
                                        <option value="WordPress" selected="">WordPress</option>
                                        <option value="VHDL" selected="">VHDL</option>
                                        <option value="EDA" selected="">EDA</option>
                                        <option value="Power BI Specialist" selected="">Power BI Specialist
                                        </option>
                                        <option value="Digital Operation Specialist" selected="">Digital
                                            Operation Specialist</option>
                                        <option value="Data Operation" selected="">Data Operation</option>
                                        <option value="gRPC" selected="">gRPC</option>
                                        <option value="Firestore" selected="">Firestore</option>
                                        <option value="Elixir - Rails" selected="">Elixir - Rails</option>
                                        <option value="Google Cloud Platform - Rollbar" selected="">Google Cloud
                                            Platform - Rollbar</option>
                                        <option value="NewRelic" selected="">NewRelic</option>
                                        <option value="Slack" selected="">Slack</option>
                                        <option value="Trello" selected="">Trello</option>
                                        <option value="Technical Engineer" selected="">Technical Engineer
                                        </option>
                                        <option value="Memcached" selected="">Memcached</option>
                                        <option value="Jee" selected="">Jee</option>
                                        <option value="3CX" selected="">3CX</option>
                                        <option value="Sharepoint framework" selected="">Sharepoint framework
                                        </option>
                                        <option value="NPM" selected="">NPM</option>
                                        <option value="LinQ" selected="">LinQ</option>
                                        <option value="IT Auditor" selected="">IT Auditor</option>
                                        <option value="MFC" selected="">MFC</option>
                                        <option value="Java Swing" selected="">Java Swing</option>
                                        <option value="SAP Consultant" selected="">SAP Consultant</option>
                                        <option value="ERP Consultant" selected="">ERP Consultant</option>
                                        <option value="ES" selected="">ES</option>
                                        <option value="CCNP" selected="">CCNP</option>
                                        <option value="Elixir" selected="">Elixir</option>
                                        <option value="SysOps" selected="">SysOps</option>
                                        <option value="AR" selected="">AR</option>
                                        <option value="IT Consultant" selected="">IT Consultant</option>
                                        <option value="Cucumber" selected="">Cucumber</option>
                                        <option value="Joomla" selected="">Joomla</option>
                                        <option value="IT Support Specialist" selected="">IT Support Specialist
                                        </option>
                                        <option value="SAP Consultant" selected="">SAP Consultant</option>
                                        <option value="Kubernete" selected="">Kubernete</option>
                                        <option value="Automation Developer" selected="">Automation Developer
                                        </option>
                                        <option value="5G" selected="">5G</option>
                                        <option value="Game NFT" selected="">Game NFT</option>
                                        <option value="Data Architecture" selected="">Data Architecture</option>
                                        <option value="Computer Science" selected="">Computer Science</option>
                                        <option value="Functional Analyst" selected="">Functional Analyst
                                        </option>
                                        <option value="Liquid" selected="">Liquid</option>
                                        <option value="Outsystem" selected="">Outsystem</option>
                                        <option value="Erpnext" selected="">Erpnext</option>
                                        <option value="BrightScript" selected="">BrightScript</option>
                                        <option value="ROKU" selected="">ROKU</option>
                                        <option value="BPO" selected="">BPO</option>
                                        <option value="IT System" selected="">IT System</option>
                                        <option value="Analyst" selected="">Analyst</option>
                                        <option value="Nuxt.js" selected="">Nuxt.js</option>
                                        <option value="dEPM" selected="">dEPM</option>
                                        <option value="Syteline" selected="">Syteline</option>
                                        <option value="Cloud Migration Service (AWS" selected="">Cloud Migration
                                            Service (AWS</option>
                                        <option value="Automation QC" selected="">Automation QC</option>
                                        <option value="Cosos" selected="">Cosos</option>
                                        <option value="Hardware Design" selected="">Hardware Design</option>
                                        <option value="IT Outsource" selected="">IT Outsource</option>
                                        <option value="ITIL/ITSM" selected="">ITIL/ITSM</option>
                                        <option value="ES6" selected="">ES6</option>
                                        <option value="XML" selected="">XML</option>
                                        <option value="Web Service" selected="">Web Service</option>
                                        <option value="Data Administrator" selected="">Data Administrator
                                        </option>
                                        <option value="Nest JS" selected="">Nest JS</option>
                                        <option value="Xamarin" selected="">Xamarin</option>
                                        <option value="2D Animator" selected="">2D Animator</option>
                                        <option value="Assistant" selected="">Assistant</option>
                                        <option value="RPA using UiPath" selected="">RPA using UiPath</option>
                                        <option value="Character Artist" selected="">Character Artist</option>
                                        <option value="Communicator" selected="">Communicator</option>
                                        <option value="System Test" selected="">System Test</option>
                                        <option value="Angular 6+" selected="">Angular 6+</option>
                                        <option value="UI/UX" selected="">UI/UX</option>
                                        <option value="RPA" selected="">RPA</option>
                                        <option value="Business Coordinator" selected="">Business Coordinator
                                        </option>
                                        <option value="Photon" selected="">Photon</option>
                                        <option value="Game Developer" selected="">Game Developer</option>
                                        <option value="AX2012 R2" selected="">AX2012 R2</option>
                                        <option value="Microsoft Dynamics AX 2009" selected="">Microsoft Dynamics
                                            AX 2009</option>
                                        <option value="D365 FO" selected="">D365 FO</option>
                                        <option value="Swing" selected="">Swing</option>
                                        <option value="System Architect" selected="">System Architect</option>
                                        <option value="Java Spring" selected="">Java Spring</option>
                                        <option value="Postgre" selected="">Postgre</option>
                                        <option value="IT Infrastructure" selected="">IT Infrastructure</option>
                                        <option value="VBA" selected="">VBA</option>
                                        <option value="no" selected="">no</option>
                                        <option value="PostgreSql" selected="">PostgreSql</option>
                                        <option value="Software Engineer" selected="">Software Engineer</option>
                                        <option value="" selected=""></option>
                                        <option value="" selected=""></option>
                                        <option value="" selected=""></option>
                                        <option value="Titanium" selected="">Titanium</option>
                                        <option value="Restful API" selected="">Restful API</option>
                                        <option value="" selected=""></option>
                                        <option value="" selected=""></option>
                                        <option value="CocoonJS" selected="">CocoonJS</option>
                                        <option value="Bootstrap" selected="">Bootstrap</option>
                                        <option value="iOS" selected="">iOS</option>
                                        <option value="MongoDB" selected="">MongoDB</option>
                                        <option value="Redis" selected="">Redis</option>
                                        <option value="Websocket" selected="">Websocket</option>
                                        <option value="Socket.io" selected="">Socket.io</option>
                                        <option value="IT Helpdesk" selected="">IT Helpdesk</option>
                                        <option value="Bitbucket/ Bamboo/ Jenkins" selected="">Bitbucket/ Bamboo/
                                            Jenkins</option>
                                        <option value="Odoo" selected="">Odoo</option>
                                        <option value="Oracle Rac/ SQL Server" selected="">Oracle Rac/ SQL Server
                                        </option>
                                        <option value="Github" selected="">Github</option>
                                        <option value="Oca/ Ocp" selected="">Oca/ Ocp</option>
                                        <option value="Ccna/ CCNP" selected="">Ccna/ CCNP</option>
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
                                        <option value="070" selected="">Thành phố Tuyên Quang</option>
                                        <option value="22" selected="">Tỉnh Quảng Ninh</option>
                                        <option value="227" selected="">Thành phố Việt Trì</option>
                                        <option value="24" selected="">Tỉnh Bắc Giang</option>
                                        <option value="094" selected="">Thành phố Điện Biên Phủ</option>
                                        <option value="10" selected="">Tỉnh Lào Cai</option>
                                        <option value="105" selected="">Thành phố Lai Châu</option>
                                        <option value="11" selected="">Tỉnh Điện Biên</option>
                                        <option value="19" selected="">Tỉnh Thái Nguyên</option>
                                        <option value="193" selected="">Thành phố Hạ Long</option>
                                        <option value="194" selected="">Thành phố Móng Cái</option>
                                        <option value="195" selected="">Thành phố Cẩm Phả</option>
                                        <option value="196" selected="">Thành phố Uông Bí</option>
                                        <option value="20" selected="">Tỉnh Lạng Sơn</option>
                                        <option value="213" selected="">Thành phố Bắc Giang</option>
                                        <option value="132" selected="">Thành phố Yên Bái</option>
                                        <option value="14" selected="">Tỉnh Sơn La</option>
                                        <option value="148" selected="">Thành phố Hòa Bình</option>
                                        <option value="15" selected="">Tỉnh Yên Bái</option>
                                        <option value="01" selected="">Thành phố Hà Nội</option>
                                        <option value="08" selected="">Tỉnh Tuyên Quang</option>
                                        <option value="080" selected="">Thành phố Lào Cai</option>
                                        <option value="116" selected="">Thành phố Sơn La</option>
                                        <option value="12" selected="">Tỉnh Lai Châu</option>
                                        <option value="164" selected="">Thành phố Thái Nguyên</option>
                                        <option value="165" selected="">Thành phố Sông Công</option>
                                        <option value="17" selected="">Tỉnh Hoà Bình</option>
                                        <option value="178" selected="">Thành phố Lạng Sơn</option>
                                        <option value="02" selected="">Tỉnh Hà Giang</option>
                                        <option value="024" selected="">Thành phố Hà Giang</option>
                                        <option value="04" selected="">Tỉnh Cao Bằng</option>
                                        <option value="040" selected="">Thành phố Cao Bằng</option>
                                        <option value="243" selected="">Thành phố Vĩnh Yên</option>
                                        <option value="25" selected="">Tỉnh Phú Thọ</option>
                                        <option value="256" selected="">Thành phố Bắc Ninh</option>
                                        <option value="26" selected="">Tỉnh Vĩnh Phúc</option>
                                        <option value="27" selected="">Tỉnh Bắc Ninh</option>
                                        <option value="288" selected="">Thành phố Hải Dương</option>
                                        <option value="30" selected="">Tỉnh Hải Dương</option>
                                        <option value="31" selected="">Thành phố Hải Phòng</option>
                                        <option value="323" selected="">Thành phố Hưng Yên</option>
                                        <option value="33" selected="">Tỉnh Hưng Yên</option>
                                        <option value="336" selected="">Thành phố Thái Bình</option>
                                        <option value="34" selected="">Tỉnh Thái Bình</option>
                                        <option value="347" selected="">Thành phố Phủ Lý</option>
                                        <option value="35" selected="">Tỉnh Hà Nam</option>
                                        <option value="356" selected="">Thành phố Nam Định</option>
                                        <option value="36" selected="">Tỉnh Nam Định</option>
                                        <option value="369" selected="">Thành phố Ninh Bình</option>
                                        <option value="37" selected="">Tỉnh Ninh Bình</option>
                                        <option value="370" selected="">Thành phố Tam Điệp</option>
                                        <option value="38" selected="">Tỉnh Thanh Hóa</option>
                                        <option value="380" selected="">Thành phố Thanh Hóa</option>
                                        <option value="382" selected="">Thành phố Sầm Sơn</option>
                                        <option value="40" selected="">Tỉnh Nghệ An</option>
                                        <option value="412" selected="">Thành phố Vinh</option>
                                        <option value="42" selected="">Tỉnh Hà Tĩnh</option>
                                        <option value="436" selected="">Thành phố Hà Tĩnh</option>
                                        <option value="44" selected="">Tỉnh Quảng Bình</option>
                                        <option value="45" selected="">Tỉnh Quảng Trị</option>
                                        <option value="450" selected="">Thành Phố Đồng Hới</option>
                                        <option value="46" selected="">Tỉnh Thừa Thiên Huế</option>
                                        <option value="461" selected="">Thành phố Đông Hà</option>
                                        <option value="474" selected="">Thành phố Huế</option>
                                        <option value="48" selected="">Thành phố Đà Nẵng</option>
                                        <option value="49" selected="">Tỉnh Quảng Nam</option>
                                        <option value="502" selected="">Thành phố Tam Kỳ</option>
                                        <option value="503" selected="">Thành phố Hội An</option>
                                        <option value="51" selected="">Tỉnh Quảng Ngãi</option>
                                        <option value="52" selected="">Tỉnh Bình Định</option>
                                        <option value="522" selected="">Thành phố Quảng Ngãi</option>
                                        <option value="54" selected="">Tỉnh Phú Yên</option>
                                        <option value="540" selected="">Thành phố Qui Nhơn</option>
                                        <option value="555" selected="">Thành phố Tuy Hoà</option>
                                        <option value="56" selected="">Tỉnh Khánh Hòa</option>
                                        <option value="568" selected="">Thành phố Nha Trang</option>
                                        <option value="569" selected="">Thành phố Cam Ranh</option>
                                        <option value="58" selected="">Tỉnh Ninh Thuận</option>
                                        <option value="582" selected="">Thành phố Phan Rang-Tháp Chàm</option>
                                        <option value="593" selected="">Thành phố Phan Thiết</option>
                                        <option value="60" selected="">Tỉnh Bình Thuận</option>
                                        <option value="608" selected="">Thành phố Kon Tum</option>
                                        <option value="62" selected="">Tỉnh Kon Tum</option>
                                        <option value="622" selected="">Thành phố Pleiku</option>
                                        <option value="64" selected="">Tỉnh Gia Lai</option>
                                        <option value="643" selected="">Thành phố Buôn Ma Thuột</option>
                                        <option value="66" selected="">Tỉnh Đắk Lắk</option>
                                        <option value="67" selected="">Tỉnh Đắk Nông</option>
                                        <option value="672" selected="">Thành phố Đà Lạt</option>
                                        <option value="673" selected="">Thành phố Bảo Lộc</option>
                                        <option value="68" selected="">Tỉnh Lâm Đồng</option>
                                        <option value="70" selected="">Tỉnh Bình Phước</option>
                                        <option value="703" selected="">Thành phố Tây Ninh</option>
                                        <option value="718" selected="">Thành phố Thủ Dầu Một</option>
                                        <option value="72" selected="">Tỉnh Tây Ninh</option>
                                        <option value="731" selected="">Thành phố Biên Hòa</option>
                                        <option value="74" selected="">Tỉnh Bình Dương</option>
                                        <option value="747" selected="">Thành phố Vũng Tàu</option>
                                        <option value="748" selected="">Thành phố Bà Rịa</option>
                                        <option value="75" selected="">Tỉnh Đồng Nai</option>
                                        <option value="77" selected="">Tỉnh Bà Rịa - Vũng Tàu</option>
                                        <option value="79" selected="">Thành phố Hồ Chí Minh</option>
                                        <option value="794" selected="">Thành phố Tân An</option>
                                        <option value="80" selected="">Tỉnh Long An</option>
                                        <option value="815" selected="">Thành phố Mỹ Tho</option>
                                        <option value="82" selected="">Tỉnh Tiền Giang</option>
                                        <option value="829" selected="">Thành phố Bến Tre</option>
                                        <option value="83" selected="">Tỉnh Bến Tre</option>
                                        <option value="84" selected="">Tỉnh Trà Vinh</option>
                                        <option value="842" selected="">Thành phố Trà Vinh</option>
                                        <option value="855" selected="">Thành phố Vĩnh Long</option>
                                        <option value="86" selected="">Tỉnh Vĩnh Long</option>
                                        <option value="866" selected="">Thành phố Cao Lãnh</option>
                                        <option value="867" selected="">Thành phố Sa Đéc</option>
                                        <option value="87" selected="">Tỉnh Đồng Tháp</option>
                                        <option value="883" selected="">Thành phố Long Xuyên</option>
                                        <option value="884" selected="">Thành phố Châu Đốc</option>
                                        <option value="89" selected="">Tỉnh An Giang</option>
                                        <option value="899" selected="">Thành phố Rạch Giá</option>
                                        <option value="91" selected="">Tỉnh Kiên Giang</option>
                                        <option value="92" selected="">Thành phố Cần Thơ</option>
                                        <option value="93" selected="">Tỉnh Hậu Giang</option>
                                        <option value="930" selected="">Thành phố Vị Thanh</option>
                                        <option value="94" selected="">Tỉnh Sóc Trăng</option>
                                        <option value="941" selected="">Thành phố Sóc Trăng</option>
                                        <option value="95" selected="">Tỉnh Bạc Liêu</option>
                                        <option value="954" selected="">Thành phố Bạc Liêu</option>
                                        <option value="96" selected="">Tỉnh Cà Mau</option>
                                        <option value="964" selected="">Thành phố Cà Mau</option>
                                        <option value="9999" selected="">Remote</option>
                                        <option value="9999999" selected="">Oversea</option>
                                    </select><span class="select2 select2-container select2-container--default"
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

    <x-footer></x-footer>
