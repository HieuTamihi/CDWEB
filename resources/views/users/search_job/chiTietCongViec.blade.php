<x-header></x-header>
<x-search></x-search>
<div class="job-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="d-flex">
                    <div class="">
                        @if ($detailJob->image !== null)
                            <img src="{{ asset('images/company/' . $detailJob->image) }}" alt="" class="w-100">
                        @endif
                    </div>
                    <div class="info">
                        <h5 class="text-lg font-bold">{{ $detailJob->name_company }}</h5>
                        <form action="{{ route('follower.store') }}" method="POST">
                            @csrf
                            <button type="submit">
                                <input hidden value="{{ $detailJob->id }}" name="id">
                                <div class="d-flex align-items-center">
                                    <svg class="mr-2" stroke="currentColor" fill="none" stroke-width="1.5"
                                        viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                        </path>
                                    </svg>
                                    <span>Theo dõi</span>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="py-3 border">
                    <p class="font-weight-bold">Phúc lợi</p>
                    <p>
                        {{ $detailJob->Welfare }}
                    </p>
                </div>
                {{-- <div class="py-3">
                    <h5 class="">Vị trí tuyển dụng</h5>
                    <div class="border d-flex justify-content-between aligh-item-center">
                        <div class="pt-2">
                            <a class="nav-link p-0 font-weight-bold text-dark" href="#">Technical
                                Support Engineer - Azure Kubernetes Service
                            </a>
                            <div class="mt-1 text-danger">
                                <p>Thương lượng</p>
                            </div>
                            <div class="d-flex position-relative">
                                <span class="rounded border px-1 mr-2">111</span>
                            </div>
                        </div>
                        <span class="pt-2">
                            <svg style="width: 25px;height:25px;" stroke="currentColor" fill="none"
                                stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z">
                                </path>
                            </svg>
                        </span>
                    </div>
                </div> --}}
            </div>
            <div class="col-md-5">
                <div class="">
                    <h5 class="text-base font-bold lg:text-lg">Thông tin công ty</h5>
                    <div class="">
                        {{ $detailJob->Infor }}
                    </div>
                </div>
                <div class="">
                    <h5 class="text-base font-bold lg:text-lg">Thông tin liên hệ</h5>
                    <div class="">
                        <p>website:</p>
                        <p>{{ $detailJob->Website }}</p>
                    </div>
                    <div class="">
                        <p>Địa chỉ công ty:</p>
                        <p>{{ $detailJob->address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer></x-footer>
