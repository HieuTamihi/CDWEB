<x-header-admin>
</x-header-admin>
@if (Auth::check())
    @if (Auth::user()->role == 1)
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-flex justify-content-between">
                <h1 class="h3 mb-2 text-gray-800">Danh sách Báo cáo</h1>
            </div>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Công việc</th>
                                    <th>Người gửi yêu cầu</th>
                                    <th>Tình trạng</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $stt = 1;
                                @endphp
                                @foreach ($report as $item)
                                    <tr>
                                        <td>{{ $stt++ }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @if ($item->tinhTrang == 1)
                                                <span>Đang đợi xác nhận</span>
                                            @endif
                                            @if ($item->tinhTrang == 2)
                                                <span>Đã xác nhận</span>
                                            @endif
                                            @if ($item->tinhTrang == 3)
                                                <span>Đã hủy</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <form action="{{ route('capNhatBaoCao', encrypt($item->idRP)) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" name="action" value="1"
                                                        class="btn btn-success">
                                                        Xác nhận
                                                    </button>
                                                    <button type="submit" name="action" value="2"
                                                        class="btn btn-danger">
                                                        Hủy
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
    @endif
@endif
<x-footer-admin></x-footer-admin>
