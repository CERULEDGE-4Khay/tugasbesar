@extends('layouts.guest')

@section('title', 'Semua Quiz')

@section('content')

    <div class="page-title dark-background" data-aos="fade" style="background-image: url(/img/guitar1.jpg);">
      <div class="container position-relative">
        <h1>QUIZ PickItUp</h1>
        <p>Selamat Datang di Quiz, silahkan isi jawaban yang sesuai tapi sesuai pengetahuanmu ya!
        </p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Beranda</a></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    
    <div class="container">
        <form action="{{ route('user.quiz.submit.all') }}" method="POST">
            @csrf
        
            @foreach($quizzes as $quiz)
                <div class="card mb-4 mt-5 shadow">
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
            <div class="d-grid gap-2 d-flex justify-content-between">
            <a href="{{ route('show.quiz') }}" class="btn btn-primary mb-4 justify-content-start"><i class="bi bi-arrow-left-square-fill">  Kembali</i></a>
            <button type="submit" class="btn btn-success mb-4">Kirim Semua Jawaban</button>
            </div>
            
        </form>
            @if(session('success'))
            <div id="popup-alert" class="custom-popup alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            
            @if(session('error'))
            <div id="popup-alert" class="custom-popup alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            
            <style>
            .custom-popup {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 9999;
                padding: 20px 30px;
                font-size: 18px;
                border-radius: 8px;
                text-align: center;
                animation: fadeIn 0.3s ease-in-out;
            }
            
            @keyframes fadeIn {
                from { opacity: 0; transform: translate(-50%, -60%); }
                to { opacity: 1; transform: translate(-50%, -50%); }
            }
            </style>
            
            <script>
            // Auto-hide popup after 3.5 seconds
            setTimeout(() => {
                const popup = document.getElementById('popup-alert');
                if (popup) popup.style.display = 'none';
            }, 3500);
            </script>
    </div>
@endsection
