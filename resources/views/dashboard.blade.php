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
