@extends('layouts.admin')

@section('content')
<div class="container mt-4">
  <h2>Tambah Misi</h2>

  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form action="{{ route('mission.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="mission_title" class="form-label">Judul Misi</label>
      <input 
        type="text" 
        name="mission_title" 
        class="form-control" 
        id="mission_title" 
        placeholder="Contoh: Selesaikan Quiz Pertama" 
        required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi</label>
      <textarea 
        name="description" 
        class="form-control" 
        id="description" 
        rows="4" 
        placeholder="Deskripsi misi..." 
        required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Misi</button>
  </form>
</div>
@endsection
