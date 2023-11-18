<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
      <div class="card-header">
        <h2>Edit Blog Post</h2>
      </div>
      <div class="card-body">
        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <input type="hidden" name="id" value="{{ $blog->id }}">

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}">
          </div>

          <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
              <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>đã duyệt</option>
              <option value="2" {{ $blog->status == 2 ? 'selected' : '' }}>Chưa duyệt</option>
            </select>
          </div>

          <label for="formFileLg" class="form-label">Upload photo</label>
          <input class="form-control form-control-lg" id="image" name="image" type="file">

          <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control">{{ $blog->content }}</textarea>
          </div>

          <button type="submit" class="btn btn-primary m-3 float-right">Update</button>
        </form>
      </div>
    </div>

    <x-footer-admin></x-footer-admin>
