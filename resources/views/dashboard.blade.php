@extends('layouts.guest')

{{-- @section('title', 'Dashboard') --}}

@section('content')
 <style>
        body { font-family: sans-serif; background-color: #f8fafc; margin: 0; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        .card { background: white; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
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
            <li><a href="#">Achievement Saya</a></li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="card">
        <h3>Modul Terakhir</h3>
        <p>Chord Dasar: G, C, D</p>
        <a href="/index" class="btn btn-primary">Lanjut Belajar</a>
    </div>

    <div class="card">
        <h3>Video Terbaru</h3>
        <ul>
            <li>🎬 <strong>Belajar Strumming Dasar</strong> <a href="#">[Tonton]</a></li>
            <li>🎬 <strong>Chord Minor dan Cara Menghafalnya</strong> <a href="#">[Tonton]</a></li>
        </ul>
    </div>

    <div class="card">
          <h3 class="text-xl font-bold mb-2">Achievement Saya</h3>

    @if(auth()->user()->achievements->count())
        <ul class="space-y-2">
            @foreach(auth()->user()->achievements as $achievement)
                <li class="bg-green-100 p-3 rounded">
                    <strong>{{ $achievement->name }}</strong>
                    <strong>{{ $achievement->title }}</strong>
                    <br>
                    <small>{{ $achievement->description }}</small>
                    @if ($achievement->file_path)
                        <br>
                        <a href="{{ asset('storage/' . $achievement->file_path) }}" target="_blank" class="text-blue-500 underline">Lihat Sertifikat</a>
                    @endif
                </li>
            @endforeach
        </ul>
    @else
        <p class="text-gray-600 italic">Belum ada achievement yang diraih. Yuk selesaikan course!</p>
    @endif

    </div>
@endsection
