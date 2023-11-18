<x-header-admin></x-header-admin>
<div class="container-fluid">
    <div class="card" style="margin:20px;">
      <div class="card-header">
        <h2>Sửa công việc</h2>
      </div>
      <div class="card-body">
        <form action="{{ route('admin.job.index', $job->id) }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="id">ID</label>
            <input type="number" name="id" id="id" class="form-control" value="{{ $job->id }}" readonly>
          </div>
          <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $job->title }}">
            @error('title')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="name_company">Tên công ty</label>
            <select name="name_company" id="name_company" class="form-control">
              @foreach ($employers as $employer)
                <option value="{{ $employer->id }}" {{ $employer->id == $job->employer_id ? 'selected' : '' }}>{{ $employer->name_company }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="experience">Kinh nghiệm</label>
            <input type="text" name="experience" id="experience" class="form-control @error('experience') is-invalid @enderror" value="{{ $job->experience }}">
            @error('experience')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="type">type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" value="{{ $job->type }}">
            @error('type')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="skills">Kỹ năng</label>
            <input type="text" name="skills" id="skills" class="form-control @error('skills') is-invalid @enderror" value="{{ $job->skills }}">
            @error('skills')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="required">Yêu cầu</label>
            <textarea name="required" id="required" class="form-control @error('required') is-invalid @enderror">{{ $job->required }}</textarea>
            @error('required')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="salary">Lương</label>
            <input type="text" name="salary" id="salary" class="form-control @error('salary') is-invalid @enderror" value="{{ $job->salary }}">
            @error('salary')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="status">Trạng thái</label>
            <select name="status" id="status" class="form-control">
                @if($job->status == 'active')

                @endif
                    <option value="1">Đã duyệt</option>
                    <option value="2">Chưa duyệt</option>
            </select>
        </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>


    <x-footer-admin></x-footer-admin>
