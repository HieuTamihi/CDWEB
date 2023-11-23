<x-header></x-header>
<div class="container">
    <div class="py-3">
        <h3>Thông tin cá nhân</h3>
        <div class="bg-secondary p-5 rounded">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/cv/' . $cv->avatar) }}" alt="" class="avt-cv d-block m-auto">
                </div>
                <div class="col-md-8">
                    <div class="cv-name">
                        <h3>{{ $cv->full_name }}</h3>
                    </div>
                    <div class="position-cv">
                        {{ $cv->apply_position }}
                    </div>
                    <div class="info-personal">
                        <div class="gender-phone mt-2">
                            <span class="mr-5"><i class="fa-solid fa-user mr-2"></i>
                                @if ($cv->gender == 0)
                                    <span>Nam</span>
                                @elseif($cv->gender == 1)
                                    <span>Nữ</span>
                                @else
                                    <span>Khác</span>
                                @endif
                            </span>
                            <span><i class="fa-solid fa-phone mr-2"></i> {{ $cv->phone_number }}</span>
                        </div>
                        <div class="date-email mt-2">
                            <span class="mr-5"><i
                                    class="fa-solid fa-calendar-days mr-2"></i>{{ $cv->Date }}</span>
                            <span><i class="fa-solid fa-envelope mr-2"></i>{{ $cv->email }}</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between pt-4">
                        <div class="d-block">
                            <h5 class="bg-primary p-3 mt-2 text-white rounded">Kinh nghiệm làm việc</h5>
                            <p>
                                {{ $cv->exp_work }}
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <h5 class="bg-primary p-3 mt-2 text-white rounded">Thông tin khác</h5>
                        <p>{{ $cv->infor_order }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer></x-footer>
