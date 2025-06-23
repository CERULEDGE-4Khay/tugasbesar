@extends('layouts.guest')

@section('title', 'Daftar Kelas')

@section('content')
    <h2>📚 Daftar Kursus Belajar Gitar</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
        @foreach ($courses as $course)
            <div class="card">
                <h3 class="text-xl font-bold">{{ $course->title }}</h3>
                <p class="text-gray-600">{{ $course->description }}</p>
                <p class="mt-1 text-sm text-blue-600">Level: {{ ucfirst($course->level) }}</p>
                <a href="{{ route('courses.detail', $course->id) }}" class="btn btn-primary mt-3">Lihat Detail</a>
            </div>
        @endforeach
    </div>
@endsection
