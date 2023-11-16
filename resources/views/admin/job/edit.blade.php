<x-header-admin></x-header-admin>
@section('content')
    <div class="container-fluid">
        <div class="card" style="margin:20px;">
            <div class="card-header">
                <h2>Sửa công việc</h2>
            </div>
            <div class="card-body">
                {{ csrf_field() }}
                <form action="" method="POST">
                    <label for="">Tiêu đề</label><br>
                    <input value="{{$job->title}}" type="text" name="title" id="" class="form-control">
                    <label for="">Tên công việc</label><br>
                    <input value="{{$employer->title}}" type="text" name="name" class="form-control">
                    <label for="">Kinh nghiệm</label><br>
                    <input value="{{$employer->experience}}" type="text" name="exp" id="" class="form-control">
                    <label for="">Cấp bậc</label><br>
                    <input value="{{$employer->type}}" type="text" name="level" class="form-control">
                    <label for="">Kĩ năng</label><br>
                    <input value="{{$employer->skills}}" type="text" name="skills" id="" class="form-control">
                    <label for="">Lương</label><br>
                    <input value="{{$employer->salary}}" type="text" name="content" class="form-control">
                    <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
                </form>
            </div>
        </div>

        @endsection
        <x-footer-admin></x-footer-admin>
