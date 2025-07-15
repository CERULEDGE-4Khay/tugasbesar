@extends('layouts.guest')

@section('title', 'Chat dengan Mentor')

@section('content')
<div class="container max-w-7xl mx-auto py-10 px-4 mt-5">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

    {{-- KIRI: Chat Area --}}
    <div class="md:col-span-2 bg-white shadow-md rounded-xl flex flex-col h-[600px] p-6 py-5">
      <h2 class="text-2xl font-bold mb-4">Chat dengan {{ $mentor->name }}</h2>

      {{-- Chat Messages --}}
      <div class="flex-1 overflow-y-auto bg-gray-50 rounded-lg p-4 space-y-3 border shadow">
        @forelse ($messages as $msg)
          <div class="flex {{ $msg->sender_id === auth()->id() ? 'justify-end' : 'justify-start' }}">
            <div class="{{ $msg->sender_id === auth()->id() ? 'bg-blue-600 text-dark' : 'bg-gray-300 text-gray-900' }} px-4 py-2 rounded-2xl max-w-md text-sm">
              {{ $msg->message }}
            </div>
          </div>
        @empty
          <p class="text-center text-gray-400 text-dark">Belum ada pesan</p>
        @endforelse
      </div>

      {{-- Input Form --}}
      <form method="POST" action="{{ route('chat.send') }}" class="mt-4 flex items-center gap-3">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $mentor->id }}">
        <input type="text" name="message" placeholder="Tulis pesan..." required
               class="flex-1 px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring focus:ring-blue-500">
        <button type="submit"
                class="bg-success hover:bg-blue-800 text-white font-semibold px-6 py-2 rounded-full transition-all">
          Kirim
        </button>

      </form>
    </div>

    {{-- KANAN: Info Mentor --}}
    <div class="bg-white shadow-md rounded-xl p-6 text-center">
      <img src="{{ $mentor->photo }}"
           alt="{{ $mentor->name }}"
           referrerpolicy="no-referrer"
           class="w-28 h-28 rounded-full mx-auto object-cover shadow mb-4">
      <h3 class="text-xl font-bold">{{ $mentor->name }}</h3>
      <p class="text-blue-600">{{ $mentor->specialty }}</p>
      <p class="text-sm text-gray-600 mt-2">{{ $mentor->bio }}</p>

      <div class="mt-6 text-left text-sm text-gray-500 border-t pt-4 space-y-1">
        <p><strong>Durasi sesi:</strong> 30 menit</p>
        <p><strong>Status:</strong> Online</p>
      </div>
    </div>

  </div>
</div>
 @if(session('success'))
        <div id="popup-alert" class="custom-popup alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div id="popup-alert" class="custom-popup alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    
    <style>
        .custom-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            padding: 20px 30px;
            font-size: 18px;
            border-radius: 8px;
            text-align: center;
            animation: fadeIn 0.3s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translate(-50%, -60%); }
            to { opacity: 1; transform: translate(-50%, -50%); }
        }
    </style>
    
    <script>
        // Auto-hide popup after 3.5 seconds
        setTimeout(() => {
            const popup = document.getElementById('popup-alert');
            if (popup) popup.style.display = 'none';
        }, 3500);
    </script>
@endsection
