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
    @foreach ($missions as $mission)
        <div class="col-md-6">
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
    @endforeach
</div>

@endsection