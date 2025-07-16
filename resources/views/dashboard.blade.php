@extends('layouts.guest')

{{-- @section('title', 'Dashboard') --}}

@section('content')
    <style>
        body { font-family: sans-serif; background-color: #f8fafc; margin: 0; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        .card { background: white; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: all 0.3s ease-in-out;}
        .progress-bar { background-color: #ddd; border-radius: 10px; overflow: hidden; }
        .progress { background-color: #3b82f6; height: 20px; }
    </style>

      <div class="page-title dark-background" data-aos="fade" style="background-image: url(/img/guitar2.jpg);">
      <div class="container position-relative">
        <h1>Halo, {{ auth()->user()->name }}! 🎸</h1>
        <p>Siap belajar gitar hari ini?</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
          </ol>
        </nav>
      </div>
    </div>


    <div class="card card-quiz mt-3">
     <h3 class="mt-5 mb-3">📘 Quiz Yang Sudah Diselesaikan</h3>
        <div class="row">    
        @php
                $hasAnySubmission = false;
            @endphp

            @foreach($missions as $mission)
                @php
                    $totalQuestions = 0;
                    $totalCorrect = 0;
                    $hasSubmission = false;

                    foreach ($mission->quizzes as $quiz) {
                        $submission = $quiz->quizSubmissions->first(); // hanya satu per user
                        if ($submission) {
                            $hasSubmission = true;
                            $totalQuestions++;
                            if ($submission->quizAnswer && $submission->quizAnswer->is_right) {
                                $totalCorrect++;
                            }
                        }
                    }

                    if ($hasSubmission) {
                        $hasAnySubmission = true;
                        $score = $totalQuestions > 0 ? round(($totalCorrect / $totalQuestions) * 100) : 0;
                    }
                @endphp

                @if ($hasSubmission)
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $mission->mission_title }}</h5>
                                <p class="card-text text-muted">{{ $mission->description }}</p>

                                <div class="mb-2">
                                    <span class="badge bg-primary">Skor: {{ $score }}%</span>
                                    <span class="badge bg-secondary">Benar: {{ $totalCorrect }}/{{ $totalQuestions }}</span>
                                </div>

                                @if ($score >= 80)
                                    <div class="alert alert-success p-2 mt-2">👍 Nilai bagus!</div>
                                @elseif ($score >= 50)
                                    <div class="alert alert-warning p-2 mt-2">🙂 Cukup, bisa lebih baik</div>
                                @else
                                    <div class="alert alert-danger p-2 mt-2">😢 Perlu belajar lagi</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            @if (!$hasAnySubmission)
                <div class="col-12">
                    <div class="alert alert-info">Belum ada quiz yang kamu selesaikan.</div>
                </div>
            @endif
        </div>        


        <h3 class="mt-5 mb-3">🎓 Kursus yang Telah Diselesaikan</h3>
        <div class="row">
        @forelse ($completedCourses as $progress)
            <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                <h5 class="card-title">{{ $progress->course->name }}</h5>
                <p class="card-text text-muted">
                    {{ Str::limit($progress->course->description, 80) }}
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="badge bg-success">Selesai ✅</span>
                    <small class="text-muted">
                    Progress: {{ $progress->progress_percentage }}%
                    </small>
                </div>
                </div>
            </div>
            </div>
        @empty
            <div class="col-12">
            <div class="alert alert-info">Belum ada kursus yang kamu selesaikan.</div>
            </div>
        @endforelse
        </div>
        <a href="/index" class="btn btn-primary mt-3">Lanjut Belajar</a>

    </div>


    <div class="card p-4 shadow-sm border border-gray-200 rounded">
        <h3 class="text-xl font-bold mb-4 text-center">🏆 Achievement Saya</h3>

        @if(auth()->user()->achievements->count())
            <ul class="space-y-3">
                @foreach(auth()->user()->achievements as $achievement)
                    <li class="bg-white border-l-4 border-green-500 p-4 shadow-sm rounded-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-lg font-semibold text-green-700">{{ $achievement->title }}</div>
                                <div class="text-sm text-gray-700">{{ $achievement->description }}</div>
                            </div>
                            @if ($achievement->file_path)
                                <a href="{{ asset('storage/' . $achievement->file_path) }}" target="_blank" class="text-blue-600 hover:underline text-sm">📄 Lihat Sertifikat</a>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="text-center text-gray-600 italic">
                Belum ada achievement yang diraih.<br>Yuk, selesaikan kursus dan quiz untuk mendapatkannya!
            </div>
        @endif
    </div>

@endsection
