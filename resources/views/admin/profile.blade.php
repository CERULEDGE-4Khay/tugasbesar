@extends('layouts.admin')

@section('title', 'Profil Admin')

@section('content')
<div class="container mx-auto py-6 max-w-4xl">
    <h1 class="text-2xl font-bold mb-6">Profil Admin</h1>

    <div class="shadow-xl rounded-xl p-6 flex flex-col md:flex-row gap-6">
        <div class="card">
            <div class="card-body">
                <div class="flex-grow">
                    <div class="mb-4">
                        <label class="font-semibold text-gray-700">Nama</label>
                        <p class="text-lg">{{ Auth::user()->name }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="font-semibold text-gray-700">Email</label>
                        <p class="text-lg">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="font-semibold text-gray-700">Terdaftar Sejak</label>
                        <p class="text-lg">{{ Auth::user()->created_at->format('d M Y') }}</p>
                    </div>
        
                    <div class="mt-6 text-center">
                        <a href="#" class="btn btn-info text-white px-3">  
                            Edit Profil
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
