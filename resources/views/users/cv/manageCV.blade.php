<x-header></x-header>
<div class="container">
    <div class="py-3">
        <div class="d-flex justify-content-between">
            <h3>Quản lý CV</h3>
            <a href="{{ route('cv.create') }}">
                <button class="btn-primary p-2 rounded my-2">
                    Tạo mới
                    <svg viewBox="64 64 896 896" focusable="false" data-icon="profile" width="1em" height="1em"
                        fill="currentColor" aria-hidden="true">
                        <path
                            d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-40 728H184V184h656v656zM492 400h184c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8H492c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8zm0 144h184c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8H492c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8zm0 144h184c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8H492c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8zM340 368a40 40 0 1080 0 40 40 0 10-80 0zm0 144a40 40 0 1080 0 40 40 0 10-80 0zm0 144a40 40 0 1080 0 40 40 0 10-80 0z">
                        </path>
                    </svg>
                </button>
            </a>
        </div>
        <table class="table">
            <thead class="bg-secondary">
                <tr>
                    <th scope="col" class="text-center">Tên CV</th>
                    <th scope="col" class="text-center">Trạng thái CV</th>
                    <th scope="col" class="text-center">Lần chỉnh sửa cuối</th>
                    <th scope="col" class="text-center">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cv_management as $item_cv)
                    <tr>
                        <td class="text-center font-weight-bold">{{ $item_cv->Name_CV }}</td>
                        <td class="text-center">
                            @if ($item_cv->Status == 1)
                                <span>Chưa dùng để ứng tuyển</span>
                            @elseif($item_cv->Status == 2)
                                <span class="text-success">Đã dùng để ứng tuyển</span>
                            @endif
                        </td>
                        <td class="text-center">{{ $item_cv->updated_at }}</td>
                        <td class="text-center">
                            <div class="option-cv">
                                <a href="{{ route('watchCV', $item_cv->id) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('cv.edit', $item_cv->id) }}" class="ml-2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{ route('cv.export_pdf')}}" class="ml-2">
                                    <i class="fa-solid fa-download"></i>
                                </a>
                                <a href="users.cv.delete/{{ $item_cv->id }}" data-method="delete"
                                    data-id="{{ $item_cv->id}" onclick="return confirm('Are you sure to delete?')">
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
<x-footer></x-footer>
