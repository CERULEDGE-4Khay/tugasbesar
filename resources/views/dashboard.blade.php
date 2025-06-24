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
            <li class="current">Service Details</li>
          </ol>
        </nav>
      </div>
    </div>
    

    <div class="card">
        <h3>Progres Belajar</h3>
        <div class="progress-bar">
            <div class="progress" style="width: 90%;"></div>
        </div>
        <p>Level: Pemula (90% selesai)</p>
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
        <h3>Jadwal Latihan Minggu Ini</h3>
        <ul>
            <li>✔️ Senin: Chord A & D</li>
            <li>🕓 Selasa: Strumming Pola 1</li>
        </ul>
    </div>

    <div class="card">
        <h3>Pencapaian</h3>
        <ul>
            <li>🏆 ✔️ Menguasai 10 Chord Dasar</li>
            <li>🔒 Teknik Palm Muting (belum terbuka)</li>
        </ul>
    </div>
@endsection
