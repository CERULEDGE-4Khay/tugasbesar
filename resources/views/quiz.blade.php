@extends('layouts.guest') 

@section('title', 'Semua Quiz')

@section('content')
<div class="container py-4">
  <h2 class="mb-4 mt-5">Semua Mission</h2>

  <div class="row">
        @foreach ($missions as $mission)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $mission->mission_title }}</h2>
                        <p class="text-muted">{{ $mission->description }}</p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('user.quiz.show', ['id' => $mission->id]) }}" class="btn btn-primary">
                                Lihat Quiz Misi Ini
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
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
@endsection
