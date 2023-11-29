<x-header></x-header>

<form action="{{ route('searchBlog') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter keyword">
    <button type="submit">Search</button>
</form>

@if (is_string($keyword))
    @if (empty($keyword))
        <p>Không để chuỗi rỗng</p>
    @else
        @if ($blogNew->isEmpty())
            <p>No results found.</p>
        @else
        <div class="container">
            <div class="row">
                @foreach ($blogNew as $blog_value)
                    <div class="col-md-3">
                        <a href="{{ route('detail_blog', $blog_value->id) }}">
                            <div class="info-job p-1">
                                <div class="w-50">
                                    <img src="{{ asset('images/blog/' . $blog_value->Image) }}" alt=""
                                        class="w-100">
                                </div>
                                <p class="m-0 text-xs cut-contentblog text-dark">{{ $blog_value->title }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    @endif
@else
    <p>No results found.</p>
@endif

<x-footer></x-footer>
