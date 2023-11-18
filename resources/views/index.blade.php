<x-header></x-header>
<x-search></x-search>
<div class="container">
    <div class="py-2">
        <h3>Công Ty Nổi Bật</h3>
        <div class="bg-secondary-index px-2 py-4 rounded">
            <div class="row">
                <div class="col-md-5 py-2">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($employerFeatured as $item_feature)
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-6 bg-white rounded-lg">
                                            <div class="info-job p-1">
                                                <div class="w-50">
                                                    <img src="{{ asset('images/company/' . $item_feature->image) }}"
                                                        alt="" class="w-100">
                                                </div>
                                                <p class="m-0 text-xs">{{ $item_feature->name_company }}</p>
                                                <a href="{{ asset('login') }}" class="text-danger text-xs">Đăng nhập để
                                                    xem mức
                                                    lương</a>
                                                <p class="m-0">{{$item_feature->formattedUpdateTime}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="name-company">
                                                <h5 class="cut-content">{{ $item_feature->Infor }}</h5>
                                                <p class="m-0">{{ $item_feature->name_company }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-2">
                    <div class="swiper1">
                        <div class="swiper-wrapper">
                            @foreach ($employerFeatured as $image_feature)
                                <div class="swiper-slide border bg-white rounded-lg">
                                    <a href="#">
                                        <img src="{{ asset('images/company/' . $image_feature->image) }}" alt=""
                                            class="d-block m-auto" style="width:150px;">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-2">
                    <h5>Công việc mới nhất</h5>
                    <div class="swiper2">
                        <div class="swiper-wrapper">
                            @foreach ($jobNew as $item_job)
                                <div class="swiper-slide">
                                    <div class="mt-2">
                                        <div class="border p-1 bg-white">
                                            <h5>{{ $item_job->name_company }}</h5>
                                            <p class="m-0 p-0">{{ $item_job->title }}</p>
                                            <a href="#" class="text-danger">Thương lượng</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <h3>Nhà Tuyển Dụng Nổi Bật</h3>
        <div class="swiper3 bg-secondary-index p-3">
            <div class="swiper-wrapper">
                @foreach ($employerFeatured as $image_feature)
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="{{ asset('images/company/' . $image_feature->image) }}" alt=""
                                class="d-block m-auto w-100" style="height: 150px;">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev1">
                <img src="{{ asset('images/icon/left.png') }}" alt="">
            </div>
            <div class="swiper-button-next1">
                <img src="{{ asset('images/icon/right.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="py-2">
        <h3>Các công ty mới nhất</h3>
        <div class="p-3">
            <div class="row">
                @foreach ($employerNew as $employ_new)
                    <div class="col-md-3">
                        <div class="info-job p-1">
                            <div class="w-50">
                                <img src="{{ asset('images/company/' . $employ_new->image) }}" alt=""
                                    class="w-100">
                            </div>
                            <p class="m-0 text-xs">{{ $employ_new->title }}</p>
                            <a href="{{ asset('login') }}" class="text-danger text-xs">Đăng nhập để xem mức lương</a>
                            <p class="m-0">{{$item_feature->formattedUpdateTime}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                {{ $employerNew->appends(request()->except('page'))->links() }}
            </div>
        </div>
    </div>
</div>
<x-footer></x-footer>
