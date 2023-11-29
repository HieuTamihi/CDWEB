<x-header-admin></x-header-admin>
<!-- Begin Page Content -->
<div class="container-fluid">
    <form action="{{ route('searchAdminBlog') }}" method="GET">
        <input type="text" name="keyword" placeholder="Enter keyword">
        <button type="submit">Search</button>
    </form>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách bài blog</h1>
    <!-- DataTales Example -->
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
                        <tr>
                            @foreach ($blogs as $blog)
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->title }}</td>
                                <td style= "width: 25%"><img src="images/blog/{{ $blog->Image }}" alt=""
                                        style="width : 100%; height : 100%"></td>

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
                                        <a href="admin.blog.delete/{{ $blog->id }}" data-method="delete"
                                            data-id="{{ $blog->id}" onclick="return confirm('Are you sure to delete?')">
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
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
<x-footer-admin></x-footer-admin>
