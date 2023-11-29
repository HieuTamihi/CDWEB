<x-header-admin></x-header-admin>

<form action="{{ route('searchCVAdmin') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>

@if (is_string($keyword))
    @if (empty($keyword))
        <p>Không để chuỗi rỗng</p>
    @else
        @if ($cv_management->isEmpty())
            <p>No results found.</p>
        @else
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên CV</th>
                                    <th>Lần chỉnh sửa cuối</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cv_management as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->Name_CV }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                                <a href="{{route('editCV', $item->id)}}">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{ route('deleteCV', $item->id) }}" data-method="delete"
                                                    onclick="return confirm('Are you sure to delete?')">
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
