<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
        <div class="card-header">
            <h2>Chi tiết hồ sơ ứng tuyển</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Họ và tên</th>
                        <td>{{ $recruitment->name }}</td>
                    </tr>
                    <tr>
                        <th>Vị trí ứng tuyển</th>
                        <td>{{ $recruitment->position }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $recruitment->email }}</td>
                    </tr>
                    <tr>
                        <th>Tóm tắt</th>
                        <td>{{ $recruitment->Introduce }}</td>
                    </tr>
                </table>
            </div>
            <a href="{{ route('recruitment.edit', $recruitment->id) }}" class="btn btn-primary m-3 float-right">Sửa hồ sơ</a>
        </div>
    </div>

    <x-footer-admin></x-footer-admin>
