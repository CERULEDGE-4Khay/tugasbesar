@extends('layouts.admin')

@section('content')

<div class="col-md-12 mb-3">
  <h2>Tambah Chord</h2>
</div>

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('chords.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Nama Chord -->
        <div class="mb-3">
          <label for="name" class="form-label">Nama Chord</label>
          <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            placeholder="Contoh: C, G, Am"
            required
          >
        </div>

        <!-- Tipe Chord -->
        <div class="mb-3">
          <label for="type" class="form-label">Tipe Chord</label>
          <select class="form-select" name="type" id="type" required>
            <option value="major">Major</option>
            <option value="minor">Minor</option>
          </select>
        </div>

        <!-- Gambar Chord -->
        <div class="mb-3">
          <label for="image" class="form-label">Gambar Chord</label>
          <input
            type="file"
            class="form-control"
            name="image"
            id="image"
            accept="image/*"
            required
          >
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>

@endsection
