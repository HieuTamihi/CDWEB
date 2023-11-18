<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
        <div class="card-header">
            <h2>Sửa hồ sơ ứng tuyển</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('recruitment.update', $recruitment->idRecruit) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Họ và tên</label><br>
                <input value="{{ $recruitment->name }}" type="text" name="name" required class="form-control">
                <label for="">Vị trí ứng tuyển</label><br>
                <select name="job_posting_id" class="form-control" required>
                    @foreach ($listType as $item)
                        <option value="{{ $item->id }}" <?php
                        if ($item->id == $recruitment->job_posting_id) {
                            echo 'selected';
                        } ?>>
                            <span>{{ $item->title }}</span>
                            <span>({{ $item->type }})</span>
                        </option>
                    @endforeach
                </select>
                <label for="">Email</label><br>
                <input value="{{ $recruitment->email }}" required type="email" name="email" class="form-control">
                <button type="submit" class="btn btn-primary m-3 float-right">Save</button>
            </form>
        </div>
    </div>


    <x-footer-admin></x-footer-admin>
