@extends('layouts.guest')

@section('content')
<section id="hero" class="hero section dark-background">
    <img src="{{ asset('img/guitar-testimoni.jpg')}}" alt="" data-aos="fade-in" />

    <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Materi Belajar Gitar - Pickitup</h2>
    </div>
</section>

     <div class="container text-center mt-5 bold">
        <br>
        <h2>PILIH MATERI YANG COCOK DENGANMU</h2>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-5 mt-3">
            <div class="col-xl-4 col-md-6" data-aos="fade-left" data-aos-delay="200">
                <div>
                    <h2 class="title text-center text-success"><strong>
                        Level Beginner</h2></strong>
                   <div class="mb-8">
                        <h3 class="font-semibold text-lg">Pengenalan Gitar</h3>
                        <ul class="list-disc ml-6 text-gray-700">
                            <li>Jenis-jenis gitar (akustik, elektrik, klasik)</li>
                            <li>Bagian-bagian gitar dan fungsinya</li>
                            <li>Cara memegang gitar yang benar</li>
                            <li>Cara menyetel senar</li>
                            <li>Cara membaca chord diagram</li>
                        </ul>
                    </div>   

                    <div class="mb-8">
                        <h3 class="font-semibold text-lg">Dasar Bermain Gitar</h3>
                        <ul class="list-disc ml-6 text-gray-700">
                            <li>Mengenal senar dan fret</li>
                            <li>Latihan posisi jari</li>
                            <li>Cara memetik senar</li>
                            <li>Cara menekan chord</li>
                            <li>Latihan pola jari</li>
                        </ul>
                    </div>
                    
                     <div class="mb-8">
                        <h3 class="font-semibold text-lg">Chord Dasar</h3>
                        <ul class="list-disc ml-6 text-gray-700">
                            <li>C, G, D, A, E, Am, Em, Dm</li>
                            <li>Perpindahan antar chord</li>
                            <li>Latihan progresi chord umum</li>
                        </ul>
                    </div>

                    <div class="mb-8">
                        <h3 class="font-semibold text-lg">Strumming Dasar</h3>
                        <ul class="list-disc ml-6 text-gray-700">
                            <li>Pola down-down, down-up</li>
                            <li>Latihan tempo</li>
                            <li>Strumming lagu sederhana</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div>
                    <h2 class="title text-center text-primary"><strong> Intermediate</strong></h2>
                <div class="mb-8">
                    <h3 class="font-semibold text-lg">Teknik Lanjutan</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>Chord barre</li>
                        <li>Palm muting</li>
                        <li>Hammer-on, pull-off</li>
                        <li>Slide, bending</li>
                        <li>Arpeggio dasar</li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg">Scale</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>Major & minor scale</li>
                        <li>Pentatonic scale</li>
                        <li>Latihan box position</li>
                        <li>Improvisasi sederhana</li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg">Teori Musik Praktis</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>Membaca tablature</li>
                        <li>Struktur chord dasar</li>
                        <li>Circle of fifths</li>
                        <li>Progresi chord umum</li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg">Fingerstyle Dasar</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>Alternating thumb</li>
                        <li>Latihan picking 3 jari</li>
                        <li>Fingerstyle lagu sederhana</li>
                    </ul>
                </div>

                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="fade-right" data-aos-delay="200">
                <div>
                    <h2 class="title text-center text-danger"><strong>Level Pro</strong></h2>

                    <div class="mb-8">
                        <h3 class="font-semibold text-lg">Teknik Tingkat Tinggi</h3>
                        <ul class="list-disc ml-6 text-gray-700">
                            <li>Sweep picking</li>
                            <li>Tapping</li>
                            <li>Hybrid picking</li>
                            <li>String skipping</li>
                            <li>Alternate picking cepat</li>
                        </ul>
                    </div>

                    <div class="mb-8">
                        <h3 class="font-semibold text-lg">Scale & Mode</h3>
                        <ul class="list-disc ml-6 text-gray-700">
                            <li>7 mode mayor</li>
                            <li>Improvisasi pakai mode</li>
                            <li>Latihan phrasing</li>
                        </ul>
                    </div>

                    <div class="mb-8">
                        <h3 class="font-semibold text-lg">Chord Voicing & Progresi Kompleks</h3>
                        <ul class="list-disc ml-6 text-gray-700">
                            <li>Jazz chord (maj7, min7, dim7)</li>
                            <li>Voice leading</li>
                            <li>Modulasi antar kunci</li>
                        </ul>
                    </div>

                    <div class="mb-8">
                        <h3 class="font-semibold text-lg">Latihan Ear Training</h3>
                        <ul class="list-disc ml-6 text-gray-700">
                            <li>Menebak chord</li>
                            <li>Menebak interval</li>
                            <li>Latihan dengan backing track</li>
                        </ul>
                    </div>

                    <div class="mb-8">
                        <h3 class="font-semibold text-lg">Genre</h3>
                        <ul class="list-disc ml-6 text-gray-700">
                            <li>Rock, Pop, Jazz, Blues, Metal, Reggae, Klasik</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div> 
    </div>

@endsection
