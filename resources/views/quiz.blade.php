@extends('layouts.guest') {{-- gunakan layout umum untuk user --}}

@section('title', 'Semua Quiz')

@section('content')
<div class="container py-4">
  <h2 class="mb-4 mt-5">Semua Mission</h2>

  <div class="row">
        @foreach ($missions as $mission)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $mission->mission_title }}</h2>
                        <p class="text-muted">{{ $mission->description }}</p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('user.quiz.show', ['id' => $mission->id]) }}" class="btn btn-primary">
                                Lihat Quiz Misi Ini
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
