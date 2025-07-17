@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Edit Chord: {{ $chord->name }}</h2>

    <form action="{{ route('chords.update', $chord->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Chord</label>
            <input type="text" name="name" id="name" value="{{ old('name', $chord->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Jenis</label>
            <select name="type" id="type" class="form-select">
                <option value="major" {{ $chord->type === 'major' ? 'selected' : '' }}>Mayor</option>
                <option value="minor" {{ $chord->type === 'minor' ? 'selected' : '' }}>Minor</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Chord (Opsional)</label><br>
            @if($chord->image)
                <img src="{{ asset('storage/' . $chord->image) }}" width="120" class="mb-2"><br>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-success w-100">Simpan Perubahan</button>
    </form>
</div>
@endsection
