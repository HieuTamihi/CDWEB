<x-header></x-header>
<x-search></x-search>
<div class="" style="background: #F5F5F5;">
    <div class="container py-2">
        <div class="row">
            <div class="col-md-8">
                <div class="count-jobs">
                    <span class="text-danger font-weight-bold" style="font-size: 25px;">{{count($job)}}</span>
                    <span class="font-weight-bold" style="font-size: 25px;">Việc làm IT</span>
                </div>
                @foreach ($job as $item_job)
                    <div class="item-job bg-white py-2 my-2">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/company/' . $item_job->image) }}" alt=""
                                    class="d-block m-auto w-100">
                            </div>
                            <div class="col-md-8">
                                <div class="title-job text-danger font-weight-bold">
                                    {{ $item_job->title }}
                                </div>
                                <div class="name-company-job">
                                    {{ $item_job->name_company }}
                                </div>
                                <div class="salary-job text-danger">
                                    @if (Auth::check())
                                        {{ $item_job->salary }}
                                    @else
                                        <a href="{{ asset('login') }}" class="text-danger text-xs">Đăng nhập để xem mức
                                            lương</a>
                                    @endif
                                </div>
                                <div class="address-company">
                                    {{ $item_job->address }}
                                </div>
                                <hr>
                                <div class="d-flex position-relative">
                                    <span class="rounded border px-1 mr-2">{{ $item_job->type }}</span>
                                    <div class="time-post-job position-absolute" style="right: 0;">
                                        Đăng {{ $item_job->formattedUpdateTime }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <i class="fa-regular fa-bookmark" style="font-size: 25px;"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="col-md-4">
                <div class="job-feature border px-3">
                    <h5 class="font-weight-bold" style="font-size: 25px;">Việc làm nổi bật</h5>
                </div>
                <div class="item-job bg-white py-2 border">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('images/company/acb.png') }}" alt=""
                                class="d-block m-auto w-100">
                        </div>
                        <div class="col-md-9">
                            <div class="title-job-fea text-danger font-weight-bold">
                                Web Developer (ReactJS, JavaScript) ~ Up to 10M
                            </div>
                            <div class="name-company-job">
                                BMD Solution
                            </div>
                            <div class="d-flex position-relative">
                                <span class="rounded border px-1 mr-2">JavaScript</span>
                                <span class="rounded border px-1 mr-2">Frontend</span>
                                <span class="rounded border px-1 mr-2">ReactJS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-job bg-white py-2 border">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('images/company/acb.png') }}" alt=""
                                class="d-block m-auto w-100">
                        </div>
                        <div class="col-md-9">
                            <div class="title-job-fea text-danger font-weight-bold">
                                Web Developer (ReactJS, JavaScript) ~ Up to 10M
                            </div>
                            <div class="name-company-job">
                                BMD Solution
                            </div>
                            <div class="d-flex position-relative">
                                <span class="rounded border px-1 mr-2">JavaScript</span>
                                <span class="rounded border px-1 mr-2">Frontend</span>
                                <span class="rounded border px-1 mr-2">ReactJS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-job bg-white py-2 border">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('images/company/acb.png') }}" alt=""
                                class="d-block m-auto w-100">
                        </div>
                        <div class="col-md-9">
                            <div class="title-job-fea text-danger font-weight-bold">
                                Web Developer (ReactJS, JavaScript) ~ Up to 10M
                            </div>
                            <div class="name-company-job">
                                BMD Solution
                            </div>
                            <div class="d-flex position-relative">
                                <span class="rounded border px-1 mr-2">JavaScript</span>
                                <span class="rounded border px-1 mr-2">Frontend</span>
                                <span class="rounded border px-1 mr-2">ReactJS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<x-footer></x-footer>
