<x-header></x-header>
<div class="container">
@if($blogdetail)
        <article>
        <h2 class="detail-title" >{{$blogdetail->title}}</h2>
        <img class="detail-image" src="{{ asset('images/blog/' . $blogdetail->Image) }}" alt="Ảnh bài viết">
        <p>{{$blogdetail->content}}</p>
        </article>

    @else
        <p>Khong tim thay</p>
    @endif  
</div>
  </main>
<x-footer></x-footer>
