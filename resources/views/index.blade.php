@extends('layouts.guest')

@section('title', 'Daftar Kelas')

@section('content')
    <div class="container my-5"> {{-- Bootstrap container for proper spacing and centering --}}
        <h2 class="text-center mb-4 fw-bold">📚 Daftar Kursus Belajar Gitar</h2>

        <div class="row justify-content-center"> {{-- Centering the content column --}}
            <div class="col-lg-8"> {{-- Limiting width for better readability on larger screens --}}
                <a href="" class="d-flex justify-content-center">
                    <img src="{{ asset('img/guitar-services.png')}}" alt="Level 1" width="500px">
                <a>
                @foreach ($courses as $course)
                    <div class="card mb-3 mt-3 shadow-sm"> {{-- Bootstrap card for each course, with bottom margin and subtle shadow --}}
                        <div class="card-body d-flex align-items-center justify-content-between"> {{-- Flexbox for content and button alignment --}}
                            <div class="bi bi-1-circle">
                                <h5 class="card-title fw-semibold text-dark">{{ $course->title }}</h5>
                                <p class="card-text text-muted">{{ $course->description }}</p>
                                <p class="small text-primary mt-2">Level: <span class="fw-medium">{{ ucfirst($course->level) }}</span></p>
                            </div>
                            <div class="ms-4 flex-shrink-0"> {{-- Margin-start and prevent shrinking --}}
                                <a href="{{ route('courses.detail', $course->id) }}" class="btn btn-primary btn-sm">Lihat Detail</a> {{-- Bootstrap primary button, small size --}}
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($courses->isEmpty())
                    <div class="alert alert-info text-center" role="alert">
                        Belum ada kursus yang tersedia saat ini.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection