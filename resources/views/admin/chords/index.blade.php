@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4"> Daftar Chord</h2>

    <a href="{{ route('chords.create') }}" class="btn btn-primary mb-3">+ Tambah Chord Baru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($chords->isEmpty())
        <p>Tidak ada chord yang tersedia.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Chord</th>
                    <th>Jenis</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($chords as $chord)
                    <tr>
                        <td>{{ $chord->name }}</td>
                        <td>{{ ucfirst($chord->type) }}</td>
                        <td><img src="{{ asset('storage/' . $chord->image) }}" width="100"></td>
                        <td>
                            <a href="{{ route('chords.edit', $chord->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('chords.destroy', $chord->id) }}" 
                                method="POST" 
                                class="d-inline"
                                onsubmit="return confirm('Apakah kamu yakin ingin menghapus chord ini?');"
                                >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>  
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada chord.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    @endif
</div>
@endsection
