<x-header-admin></x-header-admin>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách nhà tuyển dụng</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên công ty</th>
                            <th>Hình ảnh</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employers as $employer)
                        <tr>
                            <td>{{ $employer->id }}</td>
                            <td>{{ $employer->name_company }}</td>
                            <td style= "width: 25%"><img src="images/employer/{{$employer->Image}}" alt="" style="width : 100%; height : 100%"></td>
                            <td>{{ $employer->phone_number }}</td>
                            <td>{{ $employer->address }}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a href="admin.employer.create">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                    <a href="admin.employer.edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="#">
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
