@extends('layouts.guest')

@section('title', $courses->title) {{-- Assuming you pass a single $courses object --}}

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="width: fit-content">
                    <div class="card-body">
                        @foreach ($videos as $video)
                            <iframe width="320" height="240" 
                                    src="{{ $video->video_url }}" 
                                    frameborder="0" allowfullscreen>
                            </iframe>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5"> {{-- Bootstrap container for proper spacing --}}
        <div class="card shadow-sm"> {{-- A card to contain the courses details --}}
            <div class="card-body">
                <h2 class="card-title fw-bold mb-3">{{ $courses->name }}</h2> {{-- Bootstrap heading with bold and bottom margin --}}
                <p class="card-text text-muted mb-3">{{ $courses->description }}</p> {{-- Bootstrap text muted for description --}}
                <p class="small text-primary mb-0">Level: <span class="fw-medium">{{ ucfirst($courses->level) }}</span></p> {{-- Bootstrap small text, primary color --}}
            </div>
        </div>
        <div class="justify-content-space-around mt-5">
            <a href="/index" class="btn btn-primary"><i class="bi bi-arrow-left-square-fill">Kembali Ke Kursus</i></a>
        </div>
        <div class="d-flex justify-content-end">
            <button onclick="markTextAsRead()" class="btn btn-primary">Selesai</button>
        </div>
    </div>
    <script>
        function markTextAsRead() {
            fetch('/api/update-progress', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    video_id: null,
                    course_id: {{ $courses->id }},
                    progress_percentage: 100,
                    is_completed: true
                })
            });
        }
    </script>
@endsection