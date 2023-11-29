<x-header-admin></x-header-admin>

<form action="{{ route('searchAdminBlog') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>

@if (is_string($keyword))
    @if (empty($keyword))
        <p>Không để chuỗi rỗng</p>
    @else
        @if ($blogs->isEmpty())
            <p>No results found.</p>
        @else
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên bài blog</th>
                                    <th>Hình ảnh</th>
                                    <th>Tình trạng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>


                                        @foreach ($blogs as $blog)
                                        <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td style="width: 25%"><img src="images/blog/{{ $blog->Image }}"
                                                        alt="" style="width: 100%; height: 100%"></td>

                                                @if ($blog->status == 1)
                                                    <td>Đã duyệt</td>
                                                @else
                                                    <td>Chưa duyệt</td>
                                                @endif

                                                <td>
                                                    <div class="d-flex justify-content-between">
                                                        <a href="admin.blog.create">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </a>
                                                        <a href="admin.blog.edit/{{ $blog->id }}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="admin.blog.delete/{{ $blog->id }}"
                                                            data-method="delete" data-id="{{ $blog->id }}"
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
