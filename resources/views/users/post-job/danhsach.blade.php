<x-header></x-header>
<div class="py-2">
    <div class="container">
        <h2>Danh sách công việc đã đăng</h2>
        <div class="py-3">
            <div class="row">
                <table class="table">
                    <thead class="bg-secondary">
                        <tr>
                            <th scope="col" class="text-center">Tiêu đề</th>
                            <th scope="col" class="text-center">Kinh nghiệm</th>
                            <th scope="col" class="text-center">Kỹ năng</th>
                            <th scope="col" class="text-center">Mức lương</th>
                            <th scope="col" class="text-center">Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listPost as $item)
                            <tr>
                                <td class="text-center font-weight-bold">{{ $item->title }}</td>
                                <td class="text-center">
                                    {{ $item->experience }}
                                </td>
                                <td class="text-center">{{ $item->type }}</td>
                                <td class="text-center">{{ $item->salary }}</td>
                                <td class="text-center">
                                    <div class="option-cv">
                                        <a href="#">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="{{ route('editJob', encrypt($item->id)) }}" class="ml-2">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ route('deleteJob', encrypt($item->id)) }}" class="ml-2" onclick="return confirm('Bạn có chắc chắn muốn xóa bài đăng này?');">
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
<x-footer></x-footer>
