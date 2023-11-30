<x-header></x-header>
@if (Auth::check())
    @if (Auth::user()->role == 3)
        <div class="container">
            <h2 class="mt-2">Đăng bài tuyển dụng</h2>
            <div class="bg-secondary p-5 rounded my-4">
                <form action="{{ route('updateJob', encrypt($job->id)) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="col-md-12">
                            <div class="mb-3 d-flex">
                                <label class="form-label w-50 font-weight-bold required-input">Tiêu đề:</label>
                                <input type="text" value="{{ $job->title }}" class="form-control" required=""
                                    name="title">
                            </div>
                            <div class="mb-3 d-flex">
                                <label class="form-label w-50 font-weight-bold required-input">Kinh nghiệm làm
                                    việc:</label>
                                <input type="text" value="{{ $job->experience }}" class="form-control" required=""
                                    name="experience">
                            </div>
                            <div class="mb-3 d-flex">
                                <label class="form-label w-50 font-weight-bold required-input">Kỹ năng lập
                                    trình:</label>
                                <input type="text" value="{{ $job->skills }}" class="form-control" name="skills">
                            </div>
                            <div class="mb-3 d-flex">
                                <label class="form-label w-50 font-weight-bold required-input">Loại hình:</label>
                                <input type="text" value="{{ $job->type }}" class="form-control" name="type">
                            </div>
                            <div class="mb-3 d-flex">
                                <label class="form-label w-50 font-weight-bold required-input">Yêu cầu:</label>
                                <textarea name="required" id="" cols="30" rows="5" class="form-control">
                                    {{ $job->required }}
                                </textarea>
                            </div>
                            <div class="mb-3 d-flex">
                                <label class="form-label w-50 font-weight-bold required-input">Mức lương:</label>
                                <input type="text" class="form-control" name="salary" value="{{ $job->salary }}">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
@endif
<x-footer></x-footer>
