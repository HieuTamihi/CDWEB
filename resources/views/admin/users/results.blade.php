<x-header-admin></x-header-admin>

<form action="{{ route('searchUserAdmin') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>

@if (is_string($keyword))
    @if (empty($keyword))
        <p>Không để chuỗi rỗng</p>
    @else
        @if ($users->isEmpty())
            <p>No results found.</p>
        @else
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Ngày sinh</th>
                                    <th>Tình trạng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->date }}</td>
                                        <td>
                                            @if ($user->status == 1)
                                                <span class="text-success">Hoạt động</span>
                                            @elseif($user->status == 2)
                                                <span class="text-danger">Khóa</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="admin.users.edit/{{ $user->id }}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="admin.users.delete/{{ $user->id }}" data-method="delete"
                                                    data-id="{{ $user->id}}" onclick="return confirm('Are you sure to delete?')">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        @endif
    @endif
@else
    <p>No results found.</p>
@endif

<x-footer-admin></x-footer-admin>
