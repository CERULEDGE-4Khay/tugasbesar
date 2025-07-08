@extends('layouts.admin')

@section('content')

<div class="col-md-12 mb-3">
  <h2>Detail Quiz</h2>
</div>

<div class="col-md-12 mb-3">
  <a href="{{ route('quiz.index') }}" class="btn btn-secondary btn-sm">← Kembali ke Daftar Quiz</a>
</div>

<div class="col-md-12">
  <div class="card mb-3">
    <div class="card-body">
      <h4 class="mb-2">{{ $quiz->quiz_title }}</h4>

      <p><strong>Tipe:</strong> 
        <span class="badge 
          {{ $quiz->tipe == 'beginner' ? 'text-bg-primary' : '' }}
          {{ $quiz->tipe == 'intermediate' ? 'text-bg-info' : '' }}
          {{ $quiz->tipe == 'pro' ? 'text-bg-danger' : '' }}">
          {{ ucfirst($quiz->tipe) }}
        </span>
      </p>

      <p><strong>Level:</strong> 
        <span class="badge 
          {{ $quiz->level == 1 ? 'text-bg-primary' : '' }}
          {{ $quiz->level == 2 ? 'text-bg-info' : '' }}
          {{ $quiz->level == 3 ? 'text-bg-success' : '' }}
          {{ $quiz->level == 4 ? 'text-bg-warning' : '' }}
          {{ $quiz->level == 5 ? 'text-bg-danger' : '' }}">
          {{ $quiz->level }}
        </span>
      </p>

      @if($quiz->quiz_description)
        <p><strong>Deskripsi:</strong> {{ $quiz->quiz_description }}</p>
      @endif

      @if($quiz->content)
        <p><strong>Konten:</strong><br>{{ $quiz->content }}</p>
      @endif
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <strong>Jawaban</strong>
    </div>
    <div class="card-body">
      @forelse ($quiz->quizAnswers as $answer)
        <div class="mb-2">
          <span class="badge {{ $answer->is_right ? 'bg-success' : 'bg-secondary' }}">
            {{ $answer->is_right ? 'Benar' : 'Salah' }}
          </span>
          {{ $answer->answer }}
        </div>
      @empty
        <p class="text-muted">Belum ada jawaban.</p>
      @endforelse
    </div>
  </div>
</div>

@endsection
