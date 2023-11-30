<x-header></x-header>
@if (Auth::check())
    @if (Auth::user()->role == 3)
        <div class="container">
            <h2 class="mt-2">Đăng bài tuyển dụng</h2>
            <div class="bg-secondary p-5 rounded my-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3 d-flex">
                            <label class="mx-2 form-label font-weight-bold">Tiêu đề:</label>
                            <p>{{ $job->title }}</p>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="mx-2 form-label font-weight-bold">Kinh nghiệm làm
                                việc:</label>
                            <span>{{ $job->experience }}</span>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="mx-2 form-label font-weight-bold">Kỹ năng lập
                                trình:</label>
                            <span>{{ $job->skills }}</span>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="mx-2 form-label font-weight-bold">Loại hình:</label>
                            <span>{{ $job->type }}</span>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="mx-2 form-label font-weight-bold">Yêu cầu:</label>
                            <span>{{ $job->required }}</span>
                        </div>
                        <div class="mb-3 d-flex">
                            <label class="mx-2 form-label font-weight-bold">Mức lương:</label>
                            <span>{{ $job->salary }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endif
<x-footer></x-footer>
