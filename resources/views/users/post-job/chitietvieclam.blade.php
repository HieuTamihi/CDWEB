<x-header></x-header>
<div class="py-2">
    <div class="container ">
        <div class="py-3">
            <div class="row">
                <div class="col-9 my-3 py-2">
                    <div class="company">
                        <div class="info-job p-1 border">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="w-100">
                                            <img src="" alt="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="m-0 font-weight-bold">Tên công việc</p>
                                        <p class="address font-italic ">Tên công ty</p>
                                        <a style="text-decoration:none; color:black;     " href=""><i
                                                class="bi bi-geo-alt-fill"> Võ Văn Ngân</i></a>
                                        <div class=" thuongluong d-flex align-items-center justify-content-between">
                                            <a href="#" class="text-danger"><i class="bi bi-cash"></i>Lương</a>
                                            <form action="" <input type="hidden" value="">
                                                <button type="submit" class=" border-0 bg-white p-0 m-0 ">
                                                    <i class="bi bi-bookmark-fill "></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="detailed-description">
                        <div class="py-3">
                            <div class="info-job p-1 border">
                                <div class="container">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu1">Mô tả công việc</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu2">Giới thiệu công ty</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="menu1" class="container tab-pane active"><br>
                                            <div class="work-responsibility">
                                                <h6>Trách nhiệm công việc</h6>
                                                <li>Phát triển các Apps cho các nền tảng thương mại điện tử Shopify /
                                                    WooCommerce</li>
                                                <li>Phát triển các Apps cho các nền tảng thương mại điện tử Shopify /
                                                    WooCommerce</li>
                                                <li>Phát triển các Apps cho các nền tảng thương mại điện tử Shopify /
                                                    WooCommerce</li>
                                            </div>
                                            <hr>
                                            <div class="skills">
                                                <h6>Kĩ năng chuyên môn</h6>
                                                <li>FE: Thành thạo Reactjs </li>
                                                <li>BE: Thành thạo PHP - Laravel </li>
                                                <li>Ít nhất 2 năm kinh nghiệm dự án thực tế với công nghệ trên.</li>
                                                <li>Có kiến thức tốt về database như MySQL, Jobs, Queue, Cron,...</li>
                                            </div>
                                        </div>
                                        <div id="menu2" class="container tab-pane fade"><br>
                                            <h6>Công ty</h6>
                                            <p class="name-company font-italic ">XIPAT FLEXIBLE SOLUTIONS COMPANY
                                                LIMITED</p>
                                            <h6>Công ty</h6>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 my-3 py-2">
                    <div class="py-3">
                        <button type="button" class="btn btn-danger col-md-12 my-3 py-2" data-toggle="modal"
                            data-target="#myModal">Ứng tuyển ngay</button>
                        <button type="button" class="btn btn-outline-danger col-md-12  py-2">Tạo CV để ứng
                            tuyển</button>
                    </div>
                    <div class="py-3">
                        <div class="info-job p-1 border">
                            <h6 class="name-company">Thông tin chung</h6>
                            <hr>
                            <h6>Năm kinh nghiệm</h6>
                            <p>2 năm</p>
                            <h6>Cấp bậc</h6>
                            <p>Junior, Middle</p>
                            <h6>Loại hình</h6>
                            <p>In Office</p>
                            <h6>Loại hợp đồng</h6>
                            <p>Fulltime</p>
                            <h6>Quy trình phỏng vấn</h6>
                            <li>ád</li>
                            <li>adas</li>

                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal  " id="myModal">
                    <div class="modal-dialog modal-lg ">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h6 class="modal-title">Bạn đang ứng tuyển <span class="text-danger">FULL STACK
                                        DEVELOPER (PHP/REACTJS) </span> tại <span>XIPAT FLEXIBLE SOLUTIONS COMPANY
                                        LIMITED</span></h6>
                                {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="/action_page.php" class="needs-validation" novalidate>
                                    <div class="form-group">
                                        <label for="uname">Họ và tên</label>
                                        <input type="text" class="form-control" id="uname"
                                            placeholder="Nguyen Van A" name="uname" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="abc@gmail.com" name="email" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Vui lòng nhập email</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="0123456789" name="phone" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="formFileLg" class="form-label">Upload CV</label>
                                        <input required class="form-control form-control-lg" id="image"name="image" type="file">
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Bạn cần phải tải CV để ứng tuyển!</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="introduce">Đoạn giới thiệu bản thân hoặc link portfolio</label>
                                        <textarea class="form-control" rows="5" id="introduce"></textarea>
                                      </div>

                                    <button type="submit" class="btn btn-danger float-right">Submit</button>
                                    <button type="submit" class="btn float-right" data-dismiss="modal">Hủy</button>

                                </form>

                                <script>
                                    // Disable form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Get the forms we want to add validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <x-footer></x-footer>
