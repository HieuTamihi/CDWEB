<x-header-admin></x-header-admin>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách công việc theo dõi</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên công việc</th>
                            <th>Địa chỉ</th>
                            <th>Người theo dõi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 1;
                        @endphp
                        @foreach ($jobTracking as $item)
                            <tr>
                                <td>{{ $stt++ }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a href="">
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn p-0 m-0">
                                                <i class="fa-solid fa-trash text-primary"></i>
                                            </button>
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
