@extends('layouts.admin')

@section('title', 'Pesan')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-6">Semua Pesan dari User ke Mentor</h1>

    {{-- CHAT MESSAGES --}}
    <div class="mb-10">
        <h2 class="text-xl font-semibold mb-3">Pesan Chat</h2>
        <div class="shadow rounded-xl p-4 divide-y">
            @forelse ($messages as $msg)
                <div class="py-3 text-sm">
                    <p>Dari : <strong>{{ $msg->sender->name }}</strong></p>
                    <p class="text-gray-700 mt-1">{{ $msg->message }}</p>
                    <p class="text-xs text-gray-500 mt-1">{{ $msg->created_at->format('d M Y H:i') }}</p>
                </div>
            @empty
                <p class="text-gray-500">Belum ada pesan chat dari user untuk mentor.</p>
            @endforelse
        </div>
    </div>

    {{-- JADWAL MENTORING --}}
    <div class="mb-10">
        <h2 class="text-xl font-semibold mb-3">Permintaan Jadwal Mentoring</h2>
        <div class="shadow rounded-xl p-4 divide-y">
            @forelse ($sessions as $session)
                <div class="py-3 text-sm">
                    <p><strong>{{ $session->user->name }}</strong> menjadwalkan sesi dengan <strong>{{ $session->mentor->name }}</strong></p>
                    <p class="text-gray-600">Tanggal & Waktu: {{ \Carbon\Carbon::parse($session->scheduled_at)->format('d M Y, H:i') }}</p>
                    <p class="text-gray-600">Catatan: {{ $session->notes ?? 'Tidak ada catatan' }}</p>
                    <p class="text-xs text-gray-500 mt-1">Dikirim pada: {{ $session->created_at->format('d M Y H:i') }}</p>
                </div>
            @empty
                <p class="text-gray-500">Belum ada jadwal mentoring yang dikirim user.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
