<x-header-admin>
</x-header-admin>
<form action="{{ route('searchCVAdmin') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-flex justify-content-between">
        <h1 class="h3 mb-2 text-gray-800">Danh sách CV</h1>
        <a href="{{route('createCV')}}" class="btn btn-primary my-2 px-4">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
    <!-- DataTales Example -->
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
                                        <a href="">
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
