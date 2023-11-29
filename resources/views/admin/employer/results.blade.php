<x-header-admin></x-header-admin>

<form action="{{ route('searchEmployerAdmin') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>

@if (is_string($keyword))
    @if (empty($keyword))
        <p>Không để chuỗi rỗng</p>
    @else
        @if ($employers->isEmpty())
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
                                        @foreach ($employers as $employer)
                                        <tr>
                                            <td>{{ $employer->id }}</td>
                                            <td>{{ $employer->name_company }}</td>
                                            <td style= "width: 25%"><img src="images/company/{{ $employer->image }}" alt=""
                                                    style="width : 100%; height : 100%"></td>
                                            <td>{{ $employer->phone_number }}</td>
                                            <td>{{ $employer->address }}</td>
                                            <td>
                                                <div class="d-flex justify-content-between">
                                                    <a href="admin.employer.create">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </a>
                                                    <a href="admin.employer.edit/{{ $employer->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <a href="admin.employer.delete/{{ $employer->id }}" data-method="delete"
                                                        data-id="{{ $employer->id}"
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
