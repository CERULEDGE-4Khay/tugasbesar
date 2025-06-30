@extends('layouts.guest')

@section('title', $courses->title) {{-- Assuming you pass a single $courses object --}}

@section('content')
    <div class="container my-5"> {{-- Bootstrap container for proper spacing --}}
        <div class="card shadow-sm"> {{-- A card to contain the courses details --}}
            <div class="card-body">
                <h2 class="card-title fw-bold mb-3">{{ $courses->title }}</h2> {{-- Bootstrap heading with bold and bottom margin --}}
                <p class="card-text text-muted mb-3">{{ $courses->description }}</p> {{-- Bootstrap text muted for description --}}
                <p class="small text-primary mb-0">Level: <span class="fw-medium">{{ ucfirst($courses->level) }}</span></p> {{-- Bootstrap small text, primary color --}}
            </div>
        </div>

        <a href="/dashboard" class="btn btn-link text-secondary mt-4 p-0">← Kembali ke Kursus</a>
    </div>
@endsection