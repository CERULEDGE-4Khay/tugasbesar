@extends('layouts.guest')

@section('title', 'Hasil Quiz')

@section('content')
  <div class="page-title dark-background" data-aos="fade" style="background-image: url(/img/guitar1.jpg);">
    <div class="container position-relative">
      <h1>Hasil Quiz</h1>
      <p>Berikut ini adalah hasil dari quiz yang telah kamu kerjakan.</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="/">Beranda</a></li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-body text-center">
        <h2 class="mb-3">Nilai Kamu: <span class="text-primary">{{ $score }}%</span></h2>

        <p class="lead">Dari total <strong>{{ $total }}</strong> soal, kamu menjawab benar sebanyak <strong>{{ $benar }}</strong> soal.</p>

        @if ($score >= 80)
          <div class="alert alert-success mt-4">Mantap! Kamu lulus dengan nilai tinggi 🎉</div>
        @elseif ($score >= 50)
          <div class="alert alert-warning mt-4">Kamu cukup baik, tapi masih bisa lebih baik lagi 💪</div>
        @else
          <div class="alert alert-danger mt-4">Wah, kamu perlu belajar lebih giat 😢</div>
        @endif

        <a href="{{ route('show.quiz') }}" class="btn btn-outline-primary mt-4">Kembali ke Daftar Quiz</a>
      </div>
    </div>
  </div>
@endsection
