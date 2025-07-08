@extends('layouts.guest') {{-- gunakan layout umum untuk user --}}

@section('title', 'Semua Quiz')

@section('content')

    <div class="page-title dark-background" data-aos="fade" style="background-image: url(/img/guitar1.jpg);">
      <div class="container position-relative">
        <h1>QUIZ PickItUp</h1>
        <p>Selamat Datang di Quiz, sudah siap?
        </p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Beranda</a></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    
    <div class="container">
        <form action="" method="POST">
            @csrf
        
            @foreach($quizzes as $quiz)
                <div class="card mb-4 mt-5 ">
                    <div class="card-body">
                        <h5 class="mb-2">Soal {{ $loop->iteration }}: {{ $quiz->quiz_title }}</h5>
                        <p class="text-muted">{{ $quiz->quiz_description }}</p>
        
                        @foreach($quiz->quizAnswers as $answer)
                            <div class="form-check">
                                <input
                                    type="radio"
                                    name="answers[{{ $quiz->id }}]"
                                    value="{{ $answer->id }}"
                                    class="form-check-input"
                                    id="quiz-{{ $quiz->id }}-answer-{{ $answer->id }}"
                                    required
                                >
                                <label class="form-check-label" for="quiz-{{ $quiz->id }}-answer-{{ $answer->id }}">
                                    {{ $answer->answer }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        
            <button type="submit" class="btn btn-success mb-4">Kirim Semua Jawaban</button>
        </form>
    </div>
@endsection
