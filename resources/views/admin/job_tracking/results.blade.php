<x-header-admin></x-header-admin>

<form action="{{ route('searchJob_trackingAdmin') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>

@if (is_string($keyword))
    @if (empty($keyword))
        <p>Không để chuỗi rỗng</p>
    @else
        @if ($jobTrackings->isEmpty())
            <p>No results found.</p>
        @else
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
                                @foreach ($jobTrackings as $item)
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
        @endif
    @endif
@else
    <p>No results found.</p>
@endif

<x-footer-admin></x-footer-admin>
