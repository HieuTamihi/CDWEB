<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
        <div class="card-header">
            <h2>Thêm hồ sơ ứng tuyển</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('recruitment.store') }}" method="POST">
                @csrf
                <label for="">Họ và tên</label><br>
                <input value="" type="text" name="title" id="" class="form-control" required>
                <label for="">Vị trí ứng tuyển</label><br>
                <select name="job_posting_id" class="form-control" required>
                    @foreach ($listType as $item)
                        <option value="{{ $item->id }}">
                            <span>{{ $item->title }}</span>
                            <span>({{ $item->type }})</span>
                        </option>
                    @endforeach
                </select>
                <label for="">Email</label><br>
                <input value="" type="email" name="title" id="" class="form-control" required>
                <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
            </form>
        </div>
    </div>


    <x-footer-admin></x-footer-admin>
