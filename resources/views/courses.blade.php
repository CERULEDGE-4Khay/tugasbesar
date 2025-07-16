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
        <div class="d-flex justify-content-between align-items-center mt-5">
            <a href="/index" class="btn btn-primary">
            <i class="bi bi-arrow-left-square-fill me-2"></i> Kembali Ke Kursus
            </a>
            <button onclick="markTextAsRead()" class="btn btn-success"> Selesai
            </button>
        </div>
    </div>
    <script>
//          function markTextAsRead() {
//     fetch('/progress/save', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         },
//         body: JSON.stringify({
//             course_id: {{ $courses->id }},
//             progress_percentage: 100,
//             is_completed: true
//         })
//     })
//     .then(async (response) => {
//         const data = await response.json().catch(() => ({}));
//         console.log('STATUS:', response.status);
//         console.log('OK:', response.ok);
//         console.log('DATA:', data);

//         if (response.ok) {
//             alert('Progres berhasil diperbarui. Selamat! Kamu telah menyelesaikan course ini.');
//             window.location.href = '/index';
//         } else {
//             alert(`Terjadi kesalahan saat memperbarui progres. Status: ${response.status}`);
//         }
//     })
//     .catch(error => {
//         console.error('FETCH ERROR:', error);
//         alert('Gagal mengirim data. Periksa koneksi atau coba lagi.');
//     });
// }
function markTextAsRead() {
    fetch('/progress/save', {
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
    })
    .then(response => {
        if (response.ok) {
            Swal.fire({
                icon: 'success',
                title: 'Progres Tersimpan!',
                text: 'Selamat! Kamu telah menyelesaikan course ini 🎉',
                confirmButtonText: 'Lanjut Belajar'
            }).then(() => {
                window.location.href = '/index';
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Gagal Menyimpan!',
                text: `Terjadi kesalahan saat menyimpan progres. Status: ${response.status}`
            });
        }
    })
    .catch(error => {
        console.error('FETCH ERROR:', error);
        Swal.fire({
            icon: 'warning',
            title: 'Koneksi Bermasalah',
            text: 'Gagal mengirim data. Coba periksa koneksi internet kamu.'
        });
    });
}

    </script>
@endsection