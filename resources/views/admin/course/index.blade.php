@extends('layouts.admin')

@section('content')

<div class="col-md-12 mb-3">
  <h2>List Courses</h2>
</div>

<div class="col-md-12 d-flex justify-content-end mb-3">
  <a href="{{ route('course.create') }}" class="btn btn-primary">Add Course</a>
</div>

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <table class="table table-stripped">
        <thead>
          <tr>
            <th>No</th>
            <th>Course Name</th>
            <th>Type</th>
            <th>Level</th>
            <th style="width: 150px">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($courses as $course)
            <tr>
              <th>{{ $loop->iteration }}</th>
              <td>{{ $course->name }}</td>
              <td>
                <span class="badge
                  {{ ($course->tipe == 'beginner') ? 'text-bg-primary' : '' }}
                  {{ ($course->tipe == 'intermediate') ? 'text-bg-info' : '' }}
                  {{ ($course->tipe == 'pro') ? 'text-bg-danger' : '' }}
                ">{{ $course->tipe }}</span>
              </td>
              <td>
                <span class="badge
                  {{ ($course->level == 1) ? 'text-bg-primary' : '' }}
                  {{ ($course->level == 2) ? 'text-bg-info' : '' }}
                  {{ ($course->level == 3) ? 'text-bg-success' : '' }}
                  {{ ($course->level == 4) ? 'text-bg-warning' : '' }}
                  {{ ($course->level == 5) ? 'text-bg-danger' : '' }}
                ">{{ $course->level }}</span>
              </td>
              <td>
                <a href="" class="btn btn-sm btn-info">Detail</a>
                <form action="{{ route('course.destroy', $course->id) }}" 
                  method="POST" 
                  class="border d-inline"
                  onsubmit="return confirm('Apakah kamu yakin ingin menghapus course ini?');"
                >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection