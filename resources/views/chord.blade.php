@extends('layouts.guest')

@section('content')
<style>
    .chord-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr); /* fix 6 kolom */
    gap: 20px;
    margin-top: 30px;
    }

    .chord-card {
        background: #fff;
        border-radius: 12px;
        padding: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        text-align: center;
        transition: transform 0.2s;
    }
    .chord-card:hover {
        transform: translateY(-5px);
    }
    .chord-card img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 10px;
    }
    .chord-card h5 {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 4px;
    }
    .chord-card .type {
        font-size: 0.9rem;
        color: #666;
    }

    .zoom-modal {
    display: none;
    position: fixed;
    z-index: 999;
    padding-top: 60px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.8);
    }

    .zoom-content {
        margin: auto;
        display: block;
        max-width: 90%;
        max-height: 80vh;
        border-radius: 8px;
    }

    .zoom-modal .close {
        position: absolute;
        top: 30px;
        right: 45px;
        color: white;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }

     @media (max-width: 1024px) {
        .chord-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .chord-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .chord-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="page-title dark-background" data-aos="fade" style="background-image: url(/img/guitar2.jpg);">
    <div class="container position-relative">
        <h1>Katalog Chord 🎶</h1>
        <p>Pelajari berbagai bentuk chord gitar dari dasar hingga mahir.</p>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/">Home</a></li>
                <li>Katalog Chord</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container my-5">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 flex items-center">
            <span class="mr-2">🔍</span> Pilih Chord yang Ingin Kamu Pelajari
        </h2>
        <input
            type="text"
            id="searchInput"
            placeholder="Cari chord..."
            class="border border-gray-300 rounded-md px-3 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-blue-400" >
    </div>

    @if($chords->count())
        <div class="chord-grid grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4" id="chordGrid">

            
            <div id="zoomModal" class="zoom-modal" onclick="closeZoom()">
                <span class="close">&times;</span>
                <img class="zoom-content" id="zoomedImage">
            </div>

            @foreach($chords as $chord)
                <div class="chord-card bg-white rounded-lg shadow-md p-4 text-center" data-name="{{ strtolower($chord->name) }}">
                    <img src="{{ asset('storage/' . $chord->image) }}" alt="Chord {{ $chord->name }}"
                        onclick="openZoom(this.src)" class="mb-2 cursor-zoom-in mx-auto">
                    <h5 class="text-lg font-semibold">{{ $chord->name }}</h5>
                    <div class="type text-gray-600">{{ ucfirst($chord->type) }} chord</div>
                </div>
            @endforeach

        </div>
    @else
        <div class="alert alert-info text-center mt-4">
            Belum ada data chord yang tersedia.
        </div>
    @endif
</div>

<script>
    document.getElementById('searchInput').addEventListener('input', function () {
        const keyword = this.value.toLowerCase();
        const cards = document.querySelectorAll('.chord-card');

        cards.forEach(card => {
            const name = card.getAttribute('data-name');
            if (name.includes(keyword)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>
@endsection

<script>
    function openZoom(imageSrc) {
        const modal = document.getElementById("zoomModal");
        const zoomedImage = document.getElementById("zoomedImage");
        zoomedImage.src = imageSrc;
        modal.style.display = "block";
    }

    function closeZoom() {
        document.getElementById("zoomModal").style.display = "none";
    }
</script>
