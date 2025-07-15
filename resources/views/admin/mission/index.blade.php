@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>List Mission</h1>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-12">
        <a href="{{ route('mission.create')}}" class="btn btn-success">
            Add Mission
        </a>
    </div>
</div>
<div class="row">
    @forelse ($missions as $mission)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2>{{ $mission->mission_title }}</h2>
                    <p class="text-muted">{{ $mission->description }}</p>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('quiz.index', ['mission_id' => $mission->id]) }}" class="btn btn-primary">
                            Lihat Quiz Misi Ini
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="row">
            <div class="col-md-12 shadow border bg-danger px-3">
                <p class="text-white mb-3 mt-3 d-flex justify-content-center">Belum ada Missons yang ditambahkan.</p>
            </div>
        </div>
    @endforelse
</div>

@endsection