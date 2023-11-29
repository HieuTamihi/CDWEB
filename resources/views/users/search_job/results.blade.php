<x-header></x-header>

<div class="py-2 container search-job-container">
    <form action="{{ route('searchJob') }}" method="GET">
        <div class="d-flex">
            <div class="search-job position-relative my-2">
                <input type="text" name="keyword" class="form-control w-100" placeholder="Nhập từ khóa tìm kiếm">
                <i class="fa-solid fa-magnifying-glass position-absolute ml-2" style="top: 30%;"></i>
            </div>
            <button type="submit" class="btn btn-search-job px-5 my-2">
                <span class="text-white">Tìm</span>
            </button>
        </div>
    </form>
</div>

@if (is_string($keyword))
    @if (empty($keyword))
        <p>Không để chuỗi rỗng</p>
    @else
        @if ($job->isEmpty())
            <p>No results found.</p>
        @else
            <div class="" style="background: #F5F5F5;">
                <div class="container py-2">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="count-jobs">
                                <span class="text-danger font-weight-bold"
                                    style="font-size: 25px;">{{ count($job) }}</span>
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
                                            <a style="text-decoration: none"
                                                href="{{ route('showjob', $item_job->id) }}">
                                                <div class="title-job text-danger font-weight-bold">
                                                    {{ $item_job->title }}
                                                </div>
                                            </a>
                                            <div class="name-company-job">
                                                {{ $item_job->name_company }}
                                            </div>
                                            <div class="salary-job text-danger">
                                                @if (Auth::check())
                                                    {{ $item_job->salary }}
                                                @else
                                                    <a href="{{ asset('login') }}" class="text-danger text-xs">Đăng nhập
                                                        để xem
                                                        mức
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
                                            <form action="{{ route('jobTracking.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item_job->idJob }}" name="job_id">
                                                <button type="submit" class="border-0 bg-white">
                                                    <i class="fa-regular fa-bookmark" style="font-size: 25px;"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
@else
    <p>No results found.</p>
@endif

<x-footer></x-footer>
