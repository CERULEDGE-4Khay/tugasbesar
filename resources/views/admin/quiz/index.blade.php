@extends('layouts.admin')

@section('content')

<div class="col-md-12 mb-3">
  <h2>List Quiz</h2>
</div>

<div class="col-md-12 d-flex justify-content-end mb-3">
  <a href="{{ route('quiz.create') }}" class="btn btn-primary">Add Quiz</a>
</div>

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Quiz Title</th>
            <th>Tipe</th>
            <th>Level</th>
            <th style="width: 150px">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($quizzes as $item)
            <tr>
              <th>{{ $loop->iteration }}</th>
              <td>{{ $item->quiz_description }}</td>
              <td>
                <span class="badge 
                  {{ $item->tipe == 'beginner' ? 'text-bg-primary' : '' }}
                  {{ $item->tipe == 'intermediate' ? 'text-bg-info' : '' }}
                  {{ $item->tipe == 'pro' ? 'text-bg-danger' : '' }}"
                >{{ ucfirst($item->tipe) }}</span>
              </td>
              <td>
                <span class="badge 
                  {{ $item->level == 1 ? 'text-bg-primary' : '' }}
                  {{ $item->level == 2 ? 'text-bg-info' : '' }}
                  {{ $item->level == 3 ? 'text-bg-success' : '' }}
                  {{ $item->level == 4 ? 'text-bg-warning' : '' }}
                  {{ $item->level == 5 ? 'text-bg-danger' : '' }}"
                >{{ $item->level }}</span>
              </td>
              <td>
                <a href="{{ route('quiz.show', $item->id) }}" class="btn btn-sm btn-info">Detail</a>
                <form action="{{ route('quiz.destroy', $item->id) }}" 
                  method="POST" 
                  class="d-inline"
                  onsubmit="return confirm('Apakah kamu yakin ingin menghapus quiz ini?');"
                >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center">Belum ada quiz yang ditambahkan.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
