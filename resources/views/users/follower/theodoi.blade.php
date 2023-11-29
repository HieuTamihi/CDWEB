<x-header></x-header>
<div class="py-2">
    <div class="container">
        <h2>Công Ty đang  theo dõi</h2>
        <div class="py-3">
            <div class="row">
                @foreach ($follower as $item)
                    <div class="col-4 my-3 py-2">
                        <div class="product">
                            <div class="info-job p-1 border">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="w-100">
                                                <img src="{{ asset('images/company/' . $item->image) }}" alt=""
                                                    class="w-100">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <p class="m-0 font-weight-bold">{{ $item->title }}</p>
                                            <p class="address m-0 font-italic cut-content">{{ $item->address }}</p>
                                            <div class=" thuongluong d-flex align-items-center justify-content-between">
                                                <form action="{{ route('follower.destroy', $item->idfollower) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" value="{{ $item->idfollower }}">
                                                    <button type="submit"
                                                        class="text-warning border-0 bg-white p-0 m-0">
                                                        <i class="bi bi-bookmark-fill float-right"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<x-footer></x-footer>
