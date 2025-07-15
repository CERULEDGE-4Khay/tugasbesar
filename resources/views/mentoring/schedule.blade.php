@extends('layouts.guest')

@section('title', 'Jadwal Sesi Mentoring')

@section('content')
<div class="container max-w-lg mb-3 mt-5 py-5 justify-content-center">
  <h2 class="text-2xl font-semibold mb-4 text-center">Jadwalkan Sesi dengan {{ $mentor->name }}</h2>
  <form method="POST" action="{{ route('mentoring.storeSchedule', $mentor->id) }}">
    @csrf
    <div class="mb-4 justify-content-center">
      <label for="scheduled_at" class="block font-medium mb-1">Pilih Tanggal & Waktu</label>
      <input type="datetime-local" name="scheduled_at" id="scheduled_at" class="w-full rounded border px-3 py-2" required>
    </div>
    <div class="mb-4">
      <label for="notes" class="block font-medium d-flex mb-1">Catatan (opsional)</label>
      <textarea name="notes" id="notes" rows="3" class="w-full rounded border px-3 py-2"></textarea>
    </div>
    <button type="submit" class="bg-success text-white px-4 py-2 rounded hover:bg-blue-800">Simpan</button>
  </form>
  

</div>
@endsection
