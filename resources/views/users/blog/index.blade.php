<x-header></x-header>
<form action="{{ route('searchBlog') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>
<div class="container">

    <div class="py-2">
        <h3>Mới nhất</h3>
        <div class="container">
            <div class="row">
                @foreach ($blogNew as $blog_value)
                    <div class="col-md-3">
                        <a href="{{ route('detail_blog', $blog_value->id) }}">
                            <div class="info-job p-1">
                                <div class="w-50">
                                    <img src="{{ asset('images/blog/' . $blog_value->Image) }}" alt=""
                                        class="w-100">
                                </div>
                                <p class="m-0 text-xs cut-contentblog text-dark">{{ $blog_value->title }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-end">
            {{ $blogNew->appends(request()->except('page'))->links() }}
        </div>
    </div>
    {{-- <div class="container">
        <div class="py-2">
            <div class="swiper4 p-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-4">
                                <h3>Lập trình 1</h3>

                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}" alt=""
                                                            class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}" alt=""
                                                            class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}" alt=""
                                                            class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}" alt=""
                                                            class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-4">
                                <h3>Lập trình 2</h3>

                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}" alt=""
                                                            class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}" alt=""
                                                            class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}" alt=""
                                                            class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}"
                                                            alt="" class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-4">
                                <h3>Lập trình 3</h3>

                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}"
                                                            alt="" class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}"
                                                            alt="" class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}"
                                                            alt="" class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="info-job p-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="w-25">
                                                        <img src="{{ asset('images/company/acb.png') }}"
                                                            alt="" class="w-100">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <p class="m-0 text-xs">Giãi mã bí mật quản lý nhân viên IT mới nhất
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div> --}}
</div>
</div>

<x-footer></x-footer>
