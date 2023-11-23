<x-header></x-header>
<div class="container">
    <div class="py-3">
        <h3>Thông tin cá nhân</h3>
        <div class="bg-secondary p-5 rounded">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/company/acb.png') }}" alt="" class="avt-cv d-block m-auto">
                </div>
                <div class="col-md-8">
                    <div class="cv-name">
                        <h3>Thái Minh Hiếu</h3>
                    </div>
                    <div class="position-cv">
                        WEB DEVELOPER
                    </div>
                    <div class="info-personal">
                        <div class="gender-phone mt-2">
                            <span class="mr-5"><i class="fa-solid fa-user mr-2"></i>MALE</span>
                            <span><i class="fa-solid fa-phone mr-2"></i>0987712063</span>
                        </div>
                        <div class="date-email mt-2">
                            <span class="mr-5"><i class="fa-solid fa-calendar-days mr-2"></i>10/10/2002</span>
                            <span><i class="fa-solid fa-envelope mr-2"></i>Thaihieu243@gmail.com</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between pt-4">
                        <div class="d-block">
                            <h5 class="bg-primary p-3 mt-2 text-white rounded">Kinh nghiệm làm việc</h5>
                            <p>
                                - Có 2 năm kinh nghiệm với PHP.
                            </p>
                            <p>
                                - Có 1 năm kinh nghiệm với framework Laravel.
                            </p>
                        </div>
                        <div class="">
                            <h5 class="bg-primary p-3 mt-2 text-white rounded">Kỹ năng lập trình</h5>
                            <p>Programming Languages: HTML, CSS, JS, PHP</p>
                        </div>
                    </div>
                    <div class="">
                        <h5 class="bg-primary p-3 mt-2 text-white rounded">Thông tin khác</h5>
                        <p>I like Outdoor activities, listen to music and play sports.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <button class="btn btn-primary">Trở về</button>
            </div>
        </div>
    </div>
</div>
<x-footer></x-footer>
