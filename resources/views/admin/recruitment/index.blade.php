<x-header-admin></x-header-admin>
<!-- Begin Page Content -->
<form action="{{ route('searchRecruitmentAdmin') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách ứng tuyển</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ và tên</th>
                            <th>Vị trí ứng tuyển</th>
                            <th>Email</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listCrui as $item)
                            <tr>
                                <td>{{ $item->idRecruit }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @if ($item->Status == 1)
                                        <span>Đã duyệt</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        {{-- <a href="{{ route('recruitment.create') }}">
                                            <i class="fa-solid fa-plus"></i>
                                        </a> --}}
                                        <a href="{{ route('recruitment.show', $item->idRecruit) }}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <form action="{{ route('recruitment.destroy', $item->idRecruit) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn p-0 m-0"><i
                                                    class="fa-solid fa-trash text-primary"></i></button>
                                        </form>
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
