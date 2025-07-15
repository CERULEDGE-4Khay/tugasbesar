@extends('layouts.guest')

@section('content')

    <section id="hero" class="hero section dark-background">
        <img src="{{ asset('img/guitar-testimoni.jpg')}}" alt="" data-aos="fade-in" />

        <div class="container d-flex flex-column align-items-center">
            <h2 data-aos="fade-up" data-aos-delay="100">Mentoring - Pickitup</h2>
        </div>
    </section>    

 
    <div class="container py-5">
    <h1 class="text-3xl font-bold mb-4 text-center">Layanan Mentoring</h1>
    <p class="text-center text-gray-600 mb-8">
        Butuh bimbingan langsung? Kamu bisa terhubung dengan mentor kami untuk berdiskusi, bertanya, atau mendapatkan arahan langsung dalam belajar gitar. Silahkan pilih mentor yang cocok untuk kamu!
    </p>

    {{-- Daftar Mentor --}}
    <div class="grid md:grid-cols-3 gap-6">
        @foreach ($mentors as $mentor)
        <div class="bg-white shadow-xl rounded-2xl p-5 text-center">
        <img src="{{ $mentor->photo }}" alt="{{ $mentor->name }}" class="rounded-full w-24 h-24 mx-auto mb-4 object-cover">
        <h3 class="text-xl font-semibold">{{ $mentor->name }}</h3>
        <p class="text-gray-500">{{ $mentor->specialty }}</p>
        <p class="text-sm mt-2">{{ $mentor->bio }}</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('mentoring.schedule', $mentor->id) }}" class="btn btn-primary mt-4 inline-block bg-blue-700 text-white px-4 py-2 rounded-full hover:bg-blue-800 transition">
                Jadwalkan Sesi
            </a>
            <a href="{{ route('chat.index', $mentor->id) }}" class="btn btn-info mt-4 inline-block text-blue-700 underline hover:text-blue-900"> Chat dengan Mentor
            </a>
        </div>

        </div>
        @endforeach
    </div>
    </div>


@endsection