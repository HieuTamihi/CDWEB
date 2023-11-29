<x-header-admin></x-header-admin>

<form action="{{ route('searchRecruitmentAdmin') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>

@if (is_string($keyword))
    @if (empty($keyword))
        <p>Không để chuỗi rỗng</p>
    @else
        @if ($listCrui->isEmpty())
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
        @endif
    @endif
@else
    <p>No results found.</p>
@endif

<x-footer-admin></x-footer-admin>
