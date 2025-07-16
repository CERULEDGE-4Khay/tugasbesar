@extends('layouts.admin')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="col-12 col-lg-9">
    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                            <div class="stats-icon purple mb-2">
                                <i class="iconly-boldShow"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah<br> Pengunjung</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalVisitors }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                            <div class="stats-icon blue mb-2">
                                <i class="iconly-boldProfile"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah<br>
                                User</h6>
                            <h6 class="font-extrabold mb-0">{{ $userCount }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                            <div class="stats-icon green mb-2">
                                <i class="bi bi-person-workspace mb-4 px-(1)"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah<br>Qourse</h6>
                            <h6 class="font-extrabold mb-0">{{ $missionCount }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                            <div class="stats-icon green mb-2">
                                <i class="bi bi-card-text mb-4 px-(1)"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah <br>Quiz</h6>
                            <h6 class="font-extrabold mb-0">{{ $quizCount }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Pengunjung Bulanan</h4>
                </div>
                <div class="card-body">
                    <div id="chart-profile-visit"></div>
                </div>
            </div>
        </div>
    </div> --}}

<form method="GET" action="{{ route('admin.dashboard') }}" class="mb-3">
    <div class="form-group">
        <label for="year" class="mb-3">Pilih Tahun:</label>
        <select name="year" id="year" class="form-control" onchange="this.form.submit()">
            @foreach ($availableYears as $year)
                <option value="{{ $year }}" {{ $selectedYear == $year ? 'selected' : '' }}>
                    {{ $year }}
                </option>
            @endforeach
        </select>
    </div>
</form>

<canvas id="visitorLineChart" height="100"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const lineCtx = document.getElementById('visitorLineChart').getContext('2d');

  const lineChart = new Chart(lineCtx, {
    type: 'line',
    data: {
      labels: @json($labels), // Jan, Feb, dst
      datasets: [{
        label: 'Jumlah Pengunjung Bulanan',
        data: @json($data),    // 0, 2, 5, dst
        borderColor: '#007bff',
        backgroundColor: 'rgba(0, 123, 255, 0.2)',
        tension: 0.3,
        fill: true,
        pointBackgroundColor: '#007bff',
        pointRadius: 5
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top'
        },
        title: {
          display: true,
          text: 'Statistik Pengunjung Bulanan'
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 1
          }
        }
      }
    }
  });
</script>


    <div class="row mt-3">        
    <div class="col-12 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4>Komen Terakhir</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Komen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentComments as $comment)
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="https://i.pravatar.cc/40?u={{ $comment->user->id }}" />
                                            </div>
                                            <p class="font-bold ms-3 mb-0">{{ $comment->user->name }}</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class="mb-0">{{ $comment->comment }}</p>
                                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($recentComments->isEmpty())
                        <div class="text-center text-muted mt-3">
                            Belum ada komentar.
                        </div>
                    @endif

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
