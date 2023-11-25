<x-header-admin></x-header-admin>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách users</h1>
    <!-- DataTales Example -->
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
                                        <a href="admin.users.create">
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                        <a href="admin.users.edit/{{ $user->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="admin.users.delete/{{ $user->id }}" data-method="delete"
                                            data-id="{{ $user->id}"
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
