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
                                            <img src="{{ asset('images/company/' . $showJob->image) }}" alt=""
                                                class="w-100">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <p class="m-0 font-weight-bold">{{ $showJob->title }}</p>
                                        <p class="address font-italic ">{{ $showJob->Infor }}</p>
                                        <a style="text-decoration:none; color:black;     " href=""><i
                                                class="bi bi-geo-alt-fill"> {{ $showJob->address }}</i></a>
                                        <div class=" thuongluong d-flex align-items-center justify-content-between">
                                            <span class="text-danger"><i class="bi bi-cash">
                                                    {{ $showJob->salary }}</i></span>
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
                                                <li>{{ $showJob->required }}</li>
                                            </div>
                                            <hr>
                                            <div class="skills">
                                                <h6>Kĩ năng chuyên môn</h6>
                                                <li>{{ $showJob->skills }} </li>

                                            </div>
                                        </div>
                                        <div id="menu2" class="container tab-pane fade"><br>
                                            <h6>Công ty</h6>
                                            <p class="name-company font-italic ">{{ $showJob->Infor }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 my-3 py-2">
                    <div class="py-3">
                        <button type="button" class="btn btn-danger font-weight-bold col-md-12 my-3 py-2" data-toggle="modal"
                            data-target="#myModal">Ứng tuyển ngay</button>
                        <button type="button" class="btn btn-outline-danger col-md-12  py-2 text-dark">
                            <a style="text-decoration: none" class="text-danger font-weight-bold" href="{{ route('cv.create') }}">Tạo CV để ứng tuyển</a>
                        </button>
                    </div>
                    <div class="py-3">
                        <div class="info-job p-1 border">
                            <h6 class="name-company">Thông tin chung</h6>
                            <hr>
                            <h6>Năm kinh nghiệm</h6>
                            <p>{{ $showJob->experience }}</p>
                            <h6>Cấp bậc</h6>
                            <p>{{ $showJob->type }}</p>
                            <h6>Loại hình</h6>
                            <p>{{ $showJob->formality }}</p>
                            <h6>Loại hợp đồng</h6>
                            <p>{{ $showJob->Contract_type }}</p>
                            <h6> Công nghệ sử dụng</h6>
                            <button  type="button" class="btn btn-outline-primary">{{ $showJob->technology_used }}</button>

                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal  " id="myModal">
                    <div class="modal-dialog modal-lg ">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h6 class="modal-title">Bạn đang ứng tuyển <span class="text-danger">{{ $showJob->title }}</span> tại <span>{{ $showJob->Infor }}</span></h6>

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
                                        <input required class="form-control form-control-lg"
                                            id="image"name="image" type="file">
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
