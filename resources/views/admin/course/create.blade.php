@extends('layouts.admin')

@section('content')

<div class="col-md-12 mb-3">
  <h2>Add Course</h2>
</div>

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('course.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Course Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" required placeholder="Course Name" value="{{ old('name') }}" name="name">
          @error('name')
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="video" class="form-label">Video</label>
          <input type="file" class="form-control @error('video') is-invalid @enderror" id="video" placeholder="Course video" name="video">
          @error('video')
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="tipe" class="form-label">Type</label>
          <select class="form-select @error('tipe') is-invalid @enderror" aria-label="Default select example" name="tipe" id="tipe">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="pro">Pro</option>
          </select>
          @error('tipe')
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="level" class="form-label">Level</label>
          <select class="form-select @error('level') is-invalid @enderror" aria-label="Default select example" name="level" id="level">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          @error('level')
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <div class="form-floating">
            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Description" id="floatingTextarea2" style="height: 100px" name="description" id="description">{{ old('name') }}</textarea>
            <label for="floatingTextarea2">Description</label>
          </div>
          @error('description')
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
          @enderror
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <div class="form-floating">
            <textarea class="form-control @error('content') is-invalid @enderror" placeholder="Content" id="floatingTextarea2" style="height: 100px" name="content" id="content">{{ old('name') }}</textarea>
            <label for="floatingTextarea2">content</label>
          </div>
          @error('content')
            <span class="text-danger mt-2 d-block">{{ $message }}</span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>

@endsection