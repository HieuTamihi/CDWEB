<x-header-admin></x-header-admin>

<form action="{{ route('searchJobAdmin') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>

@if (is_string($keyword))
    @if (empty($keyword))
        <p>Không để chuỗi rỗng</p>
    @else
        @if ($jobs->isEmpty())
            <p>No results found.</p>
        @else
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên công ty</th>
                                    <th>Tên công việc</th>
                                    <th>Kinh nghiệm</th>
                                    <th>Cấp bậc</th>
                                    <th>Kĩ năng</th>
                                    <th>Lương</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>


                                        @foreach ($jobs as $job)
                                        <tr>
                                            <td>{{ $job->stt }}</td>
                                            <td>{{ $job->name_company }}</td>
                                            <td>{{ $job->title }}</td>
                                            <td>{{ $job->experience }}</td>
                                            <td>{{ $job->type }}</td>
                                            <td>{{ $job->skills }}</td>
                                            <td>{{ $job->salary }}</td>
                                            <td>
                                                <div class="d-flex justify-content-between">
                                                    <a href="admin.job.create">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </a>
                                                    <a href="admin.job.edit/{{ $job->stt }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <a href="admin.job.delete/{{ $job->stt }}" data-method="delete"
                                                        data-id="{{ $job->stt }}"
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
