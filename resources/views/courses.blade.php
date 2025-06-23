@extends('layouts.guest')

@section('title', 'Detail Kursus')

@section('content')
    <h2 class="text-2xl font-bold">{{ $course->title }}</h2>
    <p class="text-gray-700">{{ $course->description }}</p>
    <p class="text-sm text-blue-500 mt-1">Level: {{ ucfirst($course->level) }}</p>

    <h3 class="mt-6 text-xl font-semibold">🎬 Video Materi</h3>
    <ul class="mt-2">
        @foreach ($course->videos as $video)
            <li class="mb-2">
                <strong>{{ $video->title }}</strong>
                <a href="{{ route('videos.watch', $video->id) }}" class="text-blue-600 ml-2">[Tonton]</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('courses.index') }}" class="mt-4 inline-block text-gray-500 hover:text-black">← Kembali ke Kursus</a>
@endsection
