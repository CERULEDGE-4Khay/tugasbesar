@extends('layouts.guest') @section('content')
<section id="hero" class="hero section dark-background">
    <img src="{{ asset('img/guitar-testimoni.jpg')}}" alt="" data-aos="fade-in" />

    <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Materi Belajar Gitar - Pickitup</h2>
    </div>
</section>

<div class="container text-center mt-5 bold">
    <br />
    <h2>PILIH MATERI YANG COCOK DENGANMU</h2>
</div>
<div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-5 mt-3">
        <div class="col-xl-4 col-md-6" data-aos="fade-left" data-aos-delay="200">
            <div>
                <h2 class="title text-center text-success"><strong>Level Beginner</strong></h2>
                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Pengenalan Gitar</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Jenis-jenis gitar (akustik, elektrik, klasik)</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Gitar Akustik:</strong> Menggunakan senar baja, punya lubang suara, suara jernih. Cocok untuk pop, folk, dan lagu akustik.</p>
                                    <p><strong>Gitar Klasik:</strong> Menggunakan senar nilon, suara lebih lembut dan hangat. Ideal untuk musik klasik, latin.</p>
                                    <p><strong>Gitar Elektrik:</strong> Tidak memiliki lubang suara, memerlukan amplifier. Cocok untuk genre seperti rock, jazz, metal.</p>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Bagian-bagian gitar dan fungsinya</summary>
                                <div class="ml-4 mt-2">
                                    <ul class="list-disc ml-5">
                                        <li><strong>Headstock:</strong> Tempat tuners/penyetel senar.</li>
                                        <li><strong>Tuning Pegs:</strong> Menyetel tinggi nada senar.</li>
                                        <li><strong>Nut:</strong> Penyangga awal senar.</li>
                                        <li><strong>Fretboard:</strong> Tempat jari menekan senar untuk membentuk nada.</li>
                                        <li><strong>Frets:</strong> Garis logam untuk membagi nada.</li>
                                        <li><strong>Neck:</strong> Leher gitar, menyambung head ke body.</li>
                                        <li><strong>Body:</strong> Bagian besar gitar yang menghasilkan resonansi (akustik) atau tempat pickup (elektrik).</li>
                                        <li><strong>Bridge:</strong> Penahan ujung senar di body.</li>
                                        <li><strong>Pickups:</strong> (Gitar elektrik) Mengubah getaran menjadi sinyal listrik.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Cara memegang gitar yang benar</summary>
                                <div class="ml-4 mt-2">
                                    <ol class="list-decimal ml-5">
                                        <li>Duduk di kursi tanpa sandaran tangan.</li>
                                        <li>Letakkan body gitar di paha kanan (jika kamu kidal, paha kiri).</li>
                                        <li>Leher gitar sedikit miring ke atas (sekitar 45°).</li>
                                        <li>Tangan kiri menyangga neck, ibu jari di belakang fretboard.</li>
                                        <li>Tangan kanan berada di atas lubang suara atau pickup (untuk memetik).</li>
                                    </ol>
                                    <p class="text-sm text-gray-600 mt-1">Tips: Jaga posisi duduk agar tetap tegak, jangan membungkuk.</p>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Cara menyetel senar</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Standard Tuning:</strong> E - A - D - G - B - e (dari senar 6 sampai 1)</p>
                                    <ul class="list-disc ml-5">
                                        <li>Gunakan tuner digital/aplikasi HP.</li>
                                        <li>Putar tuning peg searah jarum jam untuk menurunkan nada, sebaliknya untuk menaikkan.</li>
                                        <li>Pastikan suara setiap senar sesuai dengan tuning standar.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Cara membaca chord diagram</summary>
                                <div class="ml-4 mt-2">
                                    <pre class="bg-gray-100 p-3 rounded">
Contoh Chord C:
e|---0---
B|---1---
G|---0---
D|---2---
A|---3---
E|---X---

                                    </pre>
                                    <ul class="list-disc ml-5">
                                        <li><strong>Garis vertikal:</strong> Senar gitar (E-A-D-G-B-e).</li>
                                        <li><strong>Garis horizontal:</strong> Fret gitar.</li>
                                        <li><strong>Angka:</strong> Jari yang digunakan (1=telunjuk, 2=tengah, dst).</li>
                                        <li><strong>X:</strong> Senar tidak dimainkan.</li>
                                        <li><strong>0:</strong> Senar dimainkan tanpa ditekan.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Dasar Bermain Gitar</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Mengenal senar dan fret</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Senar gitar:</strong> Gitar standar memiliki 6 senar:</p>
                                    <ol class="list-decimal ml-5 mb-2">
                                        <li>Senar 1 (E tinggi) – paling bawah, nada paling tinggi</li>
                                        <li>Senar 2 (B)</li>
                                        <li>Senar 3 (G)</li>
                                        <li>Senar 4 (D)</li>
                                        <li>Senar 5 (A)</li>
                                        <li>Senar 6 (E rendah) – paling atas, nada paling rendah</li>
                                    </ol>
                                    <p><strong>Fret:</strong> Garis-garis logam horizontal di neck gitar. Fret menentukan posisi nada. Semakin ke kanan (ke body), nadanya makin tinggi.</p>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Latihan posisi jari</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Penomoran jari tangan kiri:</strong></p>
                                    <ul class="list-disc ml-5">
                                        <li>Jari 1 = Telunjuk</li>
                                        <li>Jari 2 = Tengah</li>
                                        <li>Jari 3 = Manis</li>
                                        <li>Jari 4 = Kelingking</li>
                                    </ul>
                                    <p class="mt-2">Latih posisi jari di fretboard mulai dari fret 1 sampai 4. Contoh latihan:</p>
                                    <pre class="bg-gray-100 p-3 rounded">
Senar 1: 1 - 2 - 3 - 4
Senar 2: 1 - 2 - 3 - 4
...

                                    </pre>
                                    <p>Latihan ini akan memperkuat otot jari dan koordinasi tangan.</p>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Cara memetik senar</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Teknik petikan dasar (fingerstyle):</strong></p>
                                    <ul class="list-disc ml-5">
                                        <li>Ibu jari (P) untuk senar 6, 5, 4</li>
                                        <li>Telunjuk (I) untuk senar 3</li>
                                        <li>Tengah (M) untuk senar 2</li>
                                        <li>Manis (A) untuk senar 1</li>
                                    </ul>
                                    <p class="mt-2"><strong>Teknik strumming (mengayun):</strong> Gunakan jari atau pick (plektrum) untuk mengayun naik turun pada senar.</p>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Cara menekan chord</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Tips menekan chord:</strong></p>
                                    <ul class="list-disc ml-5">
                                        <li>Tekan senar tepat di belakang fret, jangan di atas fret.</li>
                                        <li>Gunakan ujung jari, bukan bagian datar jari.</li>
                                        <li>Pastikan setiap senar berbunyi jelas (tidak buzzing).</li>
                                        <li>Latihan chord dasar seperti C, G, Am, D, Em.</li>
                                    </ul>
                                    <pre class="bg-gray-100 p-3 rounded">
Contoh chord G:
e|---3---
B|---3---
G|---0---
D|---0---
A|---2---
E|---3---

                                    </pre>
                                </div>
                            </details>
                        </li>
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Latihan pola jari</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Latihan pola jari (chromatic exercise):</strong></p>
                                    <pre class="bg-gray-100 p-3 rounded">
Senar 6: 1 - 2 - 3 - 4
Senar 5: 1 - 2 - 3 - 4
...

                                    </pre>
                                    <p>Gunakan metronome, mulai dari tempo lambat (misal 60 BPM), lalu tingkatkan secara bertahap. Fokus pada presisi, posisi jari, dan konsistensi suara.</p>
                                    <p>Tujuannya adalah meningkatkan kekuatan, kecepatan, dan koordinasi tangan kiri dan kanan.</p>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Chord Dasar</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">C, G, D, A, E, Am, Em, Dm</summary>
                                <div class="ml-4 mt-2">
                                    <p>Berikut adalah bentuk-bentuk chord dasar yang umum dipelajari oleh pemula:</p>

                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm mt-3">
                                        <div>
                                            <pre class="bg-gray-100 p-2 rounded">
Chord C:
e|---0---
B|---1---
G|---0---
D|---2---
A|---3---
E|---X---

                                            </pre>
                                        </div>
                                        <div>
                                            <pre class="bg-gray-100 p-2 rounded">
Chord G:
e|---3---
B|---3---
G|---0---
D|---0---
A|---2---
E|---3---

                                            </pre>
                                        </div>
                                        <div>
                                            <pre class="bg-gray-100 p-2 rounded">
Chord D:
e|---2---
B|---3---
G|---2---
D|---0---
A|---X---
E|---X---

                                            </pre>
                                        </div>
                                        <div>
                                            <pre class="bg-gray-100 p-2 rounded">
Chord A:
e|---0---
B|---2---
G|---2---
D|---2---
A|---0---
E|---X---

                                            </pre>
                                        </div>
                                        <div>
                                            <pre class="bg-gray-100 p-2 rounded">
Chord E:
e|---0---
B|---0---
G|---1---
D|---2---
A|---2---
E|---0---

                                            </pre>
                                        </div>
                                        <div>
                                            <pre class="bg-gray-100 p-2 rounded">
Chord Am:
e|---0---
B|---1---
G|---2---
D|---2---
A|---0---
E|---X---

                                            </pre>
                                        </div>
                                        <div>
                                            <pre class="bg-gray-100 p-2 rounded">
Chord Em:
e|---0---
B|---0---
G|---0---
D|---2---
A|---2---
E|---0---

                                            </pre>
                                        </div>
                                        <div>
                                            <pre class="bg-gray-100 p-2 rounded">
Chord Dm:
e|---1---
B|---3---
G|---2---
D|---0---
A|---X---
E|---X---

                                            </pre>
                                        </div>
                                    </div>

                                    <p class="mt-4">Latih satu per satu hingga suara jernih di semua senar. Jangan buru-buru pindah chord jika masih belum bersih.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Perpindahan antar chord</summary>
                                <div class="ml-4 mt-2">
                                    <p>Setelah menguasai beberapa chord dasar, penting untuk belajar **pindah chord secara lancar**. Tips:</p>
                                    <ul class="list-disc ml-5">
                                        <li>Latih dua chord berulang-ulang, misalnya: C → G, G → D, Am → Em</li>
                                        <li>Gunakan metronome (contoh: 60 BPM) untuk menjaga tempo.</li>
                                        <li>Jaga posisi tangan tetap rileks saat berpindah chord.</li>
                                        <li>Ingat posisi jari setiap chord agar otot tangan terbiasa (muscle memory).</li>
                                    </ul>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Latihan progresi chord umum</summary>
                                <div class="ml-4 mt-2">
                                    <p>Progresi chord adalah urutan chord yang biasa digunakan dalam lagu. Berikut beberapa progresi dasar yang sering dipakai:</p>

                                    <ul class="list-disc ml-5">
                                        <li><strong>C - G - Am - F</strong> (banyak lagu pop)</li>
                                        <li><strong>G - D - Em - C</strong></li>
                                        <li><strong>D - A - Bm - G</strong></li>
                                        <li><strong>A - E - F#m - D</strong></li>
                                    </ul>

                                    <p class="mt-2">Mainkan masing-masing chord selama 4 ketukan, lalu pindah ke chord berikutnya. Latih secara perlahan dan bertahap naikkan kecepatannya.</p>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Strumming Dasar</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Pola down-down, down-up</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Strumming</strong> adalah teknik mengayunkan tangan kanan untuk menghasilkan irama. Dua pola dasar yang perlu dikuasai adalah:</p>
                                    <ul class="list-disc ml-5 mt-2">
                                        <li><strong>Down - Down:</strong> Semua petikan dilakukan ke bawah. Cocok untuk lagu lambat atau latihan awal.</li>
                                        <li><strong>Down - Up:</strong> Kombinasi petikan ke bawah dan ke atas. Membuat ritme terdengar lebih dinamis dan lengkap.</li>
                                    </ul>
                                    <p class="mt-2">Contoh pola sederhana dalam 4 ketukan:</p>
                                    <pre class="bg-gray-100 p-3 rounded">
| 1  &  2  &  3  &  4  & |
| D     D     D     D   | ← Down-down (tiap ketukan)

| 1  &  2  &  3  &  4  & |
| D  U  D  U  D  U  D  U | ← Down-up (kontinu)

                                    </pre>
                                    <p>Gunakan pick atau jari, dan usahakan ayunan tangan tetap stabil meskipun tidak semua pukulan mengenai senar.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Latihan tempo</summary>
                                <div class="ml-4 mt-2">
                                    <p>Tempo adalah kecepatan lagu. Latihan tempo penting untuk menjaga ritme saat bermain gitar.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Gunakan <strong>metronome</strong> (aplikasi atau online).</li>
                                        <li>Mulailah dengan tempo lambat seperti <strong>60 BPM</strong>.</li>
                                        <li>Latih pola strumming bersamaan dengan ketukan metronome.</li>
                                        <li>Tingkatkan tempo sedikit demi sedikit jika sudah lancar.</li>
                                    </ul>
                                    <p class="mt-2 text-sm text-gray-600">Tips: Tangan tetap bergerak meskipun tidak semua strum dimainkan. Ini membantu menjaga timing.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Strumming lagu sederhana</summary>
                                <div class="ml-4 mt-2">
                                    <p>Latihan strumming bisa langsung diterapkan ke lagu sederhana. Berikut beberapa contoh lagu dengan pola strumming dasar:</p>
                                    <ul class="list-disc ml-5">
                                        <li>
                                            <strong>Lagu: Let It Be (The Beatles)</strong> <br />
                                            Progressi chord: C - G - Am - F <br />
                                            Pola: Down - Down - Down - Down
                                        </li>
                                        <li class="mt-2">
                                            <strong>Lagu: Perfect (Ed Sheeran)</strong> <br />
                                            Progressi chord: G - Em - C - D <br />
                                            Pola: Down - Down - Up - Up - Down - Up
                                        </li>
                                        <li class="mt-2">
                                            <strong>Lagu: Cinta Luar Biasa (Andmesh)</strong> <br />
                                            Progressi chord: C - G - Am - F <br />
                                            Pola: Down - Up - Down - Up
                                        </li>
                                    </ul>
                                    <p class="mt-2">Cobalah mainkan perlahan, nyanyikan sambil bermain, lalu tingkatkan kecepatan sesuai tempo asli.</p>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div>
                <h2 class="title text-center text-primary"><strong> Intermediate</strong></h2>
                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Teknik Lanjutan</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Chord barre</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Chord barre</strong> adalah chord yang ditekan dengan satu jari (biasanya telunjuk) secara horizontal di beberapa senar sekaligus.</p>
                                    <p>Contoh umum: <strong>F major</strong></p>
                                    <pre class="bg-gray-100 p-3 rounded">
e|---1---
B|---1---
G|---2---
D|---3---
A|---3---
E|---1---

                                    </pre>
                                    <ul class="list-disc ml-5 mt-2">
                                        <li>Tekan semua senar di fret tertentu dengan telunjuk.</li>
                                        <li>Gunakan jari lainnya untuk membentuk chord seperti E atau A di belakangnya.</li>
                                        <li>Awalnya sulit, tapi akan lebih mudah dengan latihan otot jari dan posisi tangan yang benar.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Palm muting</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Palm muting</strong> adalah teknik membungkam senar dengan telapak tangan kanan saat memetik.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Letakkan sisi telapak tangan kanan (dekat pergelangan) sedikit menyentuh senar di dekat bridge.</li>
                                        <li>Petik senar sambil telapak tetap menempel ringan.</li>
                                        <li>Hasilnya suara terdengar lebih pendek dan “chunky”.</li>
                                    </ul>
                                    <p class="mt-2">Biasa digunakan dalam musik rock, punk, dan metal.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Hammer-on, pull-off</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Hammer-on:</strong> Menekan senar ke fret tanpa dipetik ulang, menghasilkan nada kedua tanpa petikan.</p>
                                    <p><strong>Pull-off:</strong> Menarik jari dari senar untuk menghasilkan nada sebelumnya setelah hammer-on.</p>
                                    <pre class="bg-gray-100 p-3 rounded">
Contoh:
Petik senar 5 fret 5 → tekan langsung fret 7 tanpa memetik (hammer-on)
Tekan fret 7 → tarik ke fret 5 (pull-off)

                                    </pre>
                                    <p class="mt-2">Latihan ini melatih kekuatan jari dan kelancaran bermain solo.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Slide, bending</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Slide:</strong> Menggeser jari dari satu fret ke fret lain tanpa melepaskan senar.</p>
                                    <pre class="bg-gray-100 p-3 rounded">
Contoh: Mainkan nada di fret 5 lalu geser ke fret 7 sambil tetap menekan senar.

                                    </pre>
                                    <p><strong>Bending:</strong> Menarik atau mendorong senar ke atas/bawah setelah ditekan untuk menaikkan nada.</p>
                                    <pre class="bg-gray-100 p-3 rounded">
Contoh: Tekan senar 3 fret 7, lalu dorong senar ke atas hingga nada terdengar seperti fret 9.

                                    </pre>
                                    <p class="mt-2">Digunakan dalam teknik lead guitar, blues, dan rock solo.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Arpeggio dasar</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Arpeggio</strong> adalah teknik memainkan nada-nada dari sebuah chord satu per satu, bukan sekaligus.</p>
                                    <p>Contoh arpeggio C major:</p>
                                    <pre class="bg-gray-100 p-3 rounded">
e|-------0-------
B|-----1---1-----
G|---0-------0---
D|---------------
A|-3-------------
E|---------------

                                    </pre>
                                    <ul class="list-disc ml-5 mt-2">
                                        <li>Latih perlahan dengan metronome.</li>
                                        <li>Pastikan setiap nada terdengar jernih.</li>
                                        <li>Gunakan teknik fingerpicking untuk hasil terbaik.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Scale</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Major & minor scale</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Major Scale</strong> memiliki suasana ceria dan terang. Rumus intervalnya adalah:</p>
                                    <pre class="bg-gray-100 p-2 rounded">
W - W - H - W - W - W - H
(W = Whole step, H = Half step)

                                    </pre>
                                    <p>Contoh <strong>C Major Scale</strong>:</p>
                                    <pre class="bg-gray-100 p-2 rounded">
C - D - E - F - G - A - B - C

                                    </pre>
                                    <p><strong>Minor Scale</strong> memiliki nuansa sedih dan dalam. Rumusnya:</p>
                                    <pre class="bg-gray-100 p-2 rounded">
W - H - W - W - H - W - W

                                    </pre>
                                    <p>Contoh <strong>A Minor Scale</strong>:</p>
                                    <pre class="bg-gray-100 p-2 rounded">
A - B - C - D - E - F - G - A

                                    </pre>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Pentatonic scale</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Pentatonic Scale</strong> adalah versi sederhana dari scale biasa, hanya terdiri dari 5 nada. Cocok untuk improvisasi dan solo gitar.</p>
                                    <p><strong>A Minor Pentatonic (5th fret):</strong></p>
                                    <pre class="bg-gray-100 p-2 rounded">
e|-------------------5--8--
B|---------------5--8-----
G|----------5--7-----------
D|-----5--7----------------
A|--5--7-------------------
E|--5--8-------------------

                                    </pre>
                                    <p class="mt-2">Scale ini sangat populer dalam rock, blues, dan pop.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Latihan box position</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Box position</strong> adalah posisi jari dalam satu bentuk/shape di fretboard.</p>
                                    <p>Latihan box pentatonic shape pertama (A minor):</p>
                                    <pre class="bg-gray-100 p-2 rounded">
e|-------------------5--8--
B|---------------5--8-----
G|----------5--7-----------
D|-----5--7----------------
A|--5--7-------------------
E|--5--8-------------------

                                    </pre>
                                    <ul class="list-disc ml-5 mt-2">
                                        <li>Latih naik dan turun secara perlahan.</li>
                                        <li>Gunakan jari yang tepat: 1 (telunjuk), 2 (tengah), 3 (manis), 4 (kelingking).</li>
                                        <li>Gunakan metronome agar konsisten dan presisi.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Improvisasi sederhana</summary>
                                <div class="ml-4 mt-2">
                                    <p>Improvisasi adalah menciptakan melodi spontan menggunakan scale.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Gunakan backing track (contoh: Am - Dm - E) dan mainkan pentatonic di atasnya.</li>
                                        <li>Eksplor posisi fret 5–8 (A minor pentatonic).</li>
                                        <li>Fokus pada feeling, bukan kecepatan.</li>
                                        <li>Gunakan teknik hammer-on, pull-off, slide untuk membuat improvisasi lebih hidup.</li>
                                    </ul>
                                    <p class="mt-2 text-sm text-gray-600">Tips: Dengarkan gitaris seperti Jimi Hendrix, Slash, atau John Mayer untuk inspirasi improvisasi.</p>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Teori Musik Praktis</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Membaca tablature</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Tablature (tab)</strong> adalah bentuk notasi khusus gitar yang menunjukkan posisi jari di fretboard.</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Contoh:
e|--------0--------
B|------1---1------
G|----0-------0----
D|--2-----------2--
A|-----------------
E|-----------------

                                    </pre>
                                    <ul class="list-disc ml-5 mt-2">
                                        <li>6 baris mewakili 6 senar (dari bawah = senar 1 / e tinggi).</li>
                                        <li>Angka menunjukkan fret yang ditekan pada senar tersebut.</li>
                                        <li>“0” berarti senar dimainkan terbuka (tanpa ditekan).</li>
                                    </ul>
                                    <p class="mt-2 text-sm text-gray-600">Tips: Cocok untuk belajar lagu cepat tanpa harus bisa baca not balok.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Struktur chord dasar</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Chord</strong> adalah gabungan dari tiga atau lebih nada yang dimainkan bersama.</p>
                                    <ul class="list-disc ml-5">
                                        <li><strong>Major chord:</strong> terdiri dari 1 (root), 3 (mayor), dan 5.</li>
                                        <li><strong>Minor chord:</strong> terdiri dari 1 (root), ♭3 (minor), dan 5.</li>
                                    </ul>
                                    <p>Contoh:</p>
                                    <pre class="bg-gray-100 p-2 rounded">
C major = C - E - G  
A minor = A - C - E

                                    </pre>
                                    <p class="mt-2">Struktur ini bisa diaplikasikan ke banyak chord lain di seluruh fretboard.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Circle of fifths</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Circle of Fifths</strong> adalah diagram untuk menunjukkan hubungan antar kunci dan jumlah tanda kres/mol (♯/♭).</p>
                                    <ul class="list-disc ml-5">
                                        <li>Membantu memahami progresi chord, transposisi, dan harmoni.</li>
                                        <li>Bergerak searah jarum jam = naik 5 (C → G → D → A ...)</li>
                                        <li>Bergerak berlawanan = turun 5 / naik 4 (C → F → B♭ ...)</li>
                                    </ul>
                                    <p>Contoh pemakaian:</p>
                                    <ul class="list-disc ml-5">
                                        <li>Lagu berpindah kunci (modulasi).</li>
                                        <li>Mencari chord yang cocok dalam satu nada dasar.</li>
                                    </ul>
                                    <pre class="bg-gray-100 p-2 rounded">
C - G - D - A - E - B - F# - Db - Ab - Eb - Bb - F - (kembali ke C)

                                    </pre>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Progresi chord umum</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Progresi chord</strong> adalah urutan perpindahan chord dalam lagu. Beberapa progresi sangat umum digunakan di musik populer.</p>
                                    <ul class="list-disc ml-5">
                                        <li><strong>I - V - vi - IV:</strong> (C - G - Am - F)</li>
                                        <li><strong>I - IV - V:</strong> (C - F - G)</li>
                                        <li><strong>vi - IV - I - V:</strong> (Am - F - C - G)</li>
                                    </ul>
                                    <p class="mt-2">Gunakan pola ini untuk membuat lagu sendiri atau mengiringi lagu yang sudah ada.</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Contoh lagu:  
"C - G - Am - F" digunakan di lagu seperti "Let It Be", "With or Without You", dan banyak lagu pop.

                                    </pre>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Fingerstyle Dasar</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Alternating thumb</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Alternating thumb</strong> adalah teknik di mana ibu jari (thumb) memainkan bass secara bergantian antara dua atau lebih senar.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Ibu jari memainkan senar bass (E, A, D).</li>
                                        <li>Polanya bergantian: misalnya senar 6 → 4 → 5 → 4.</li>
                                        <li>Sambil jari lain memainkan melodi di senar atas.</li>
                                    </ul>
                                    <p class="mt-2">Teknik ini umum dipakai dalam gaya country, folk, dan blues fingerstyle.</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Contoh pola alternating thumb (C chord):
Bass: A (senar 5) → D (senar 4) → A → D...
Melodi: senar 3, 2, dan 1

                                    </pre>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Latihan picking 3 jari</summary>
                                <div class="ml-4 mt-2">
                                    <p>Gunakan 3 jari utama:</p>
                                    <ul class="list-disc ml-5">
                                        <li><strong>P (thumb):</strong> senar 6, 5, 4</li>
                                        <li><strong>I (index):</strong> senar 3</li>
                                        <li><strong>M (middle):</strong> senar 2</li>
                                        <li><strong>A (ring):</strong> senar 1</li>
                                    </ul>
                                    <p>Latihan pola dasar:</p>
                                    <pre class="bg-gray-100 p-2 rounded">
| P  I  M  I | P  I  M  A |
| 5  3  2  3 | 5  3  2  1 |

                                    </pre>
                                    <p>Latih perlahan dengan metronome untuk membentuk konsistensi dan kontrol jari.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Fingerstyle lagu sederhana</summary>
                                <div class="ml-4 mt-2">
                                    <p>Berikut contoh lagu sederhana untuk latihan fingerstyle:</p>
                                    <ul class="list-disc ml-5">
                                        <li><strong>Lagu: Twinkle Twinkle Little Star</strong></li>
                                        <li><strong>Chord: C - G - Am - F</strong></li>
                                        <li>Pola: P - I - M - A (bass + melodi)</li>
                                    </ul>
                                    <pre class="bg-gray-100 p-2 rounded">
C chord:
P (senar 5) → I (senar 3) → M (senar 2) → A (senar 1)
→ Ulangi dengan pola sama untuk chord berikutnya

                                    </pre>
                                    <p class="mt-2">Cobalah lagu seperti “Stand By Me”, “Can’t Help Falling in Love”, atau “Lagu Anak” dengan fingerstyle pola sederhana.</p>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6" data-aos="fade-right" data-aos-delay="200">
            <div>
                <h2 class="title text-center text-danger"><strong>Level Pro</strong></h2>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Teknik Tingkat Tinggi</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Sweep picking</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Sweep picking</strong> adalah teknik memetik senar dengan satu arah gerakan tangan yang halus dan cepat, biasanya digunakan untuk memainkan arpeggio.</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Contoh arpeggio sweep (minor):
e|---------12-|
B|-------13---|
G|-----12-----|
D|---14-------|
A|-15---------|
E|------------|

                                    </pre>
                                    <ul class="list-disc ml-5 mt-2">
                                        <li>Petik senar satu per satu dengan gerakan turun atau naik yang terus menerus.</li>
                                        <li>Gunakan mute ringan agar suara tetap bersih.</li>
                                        <li>Latihan perlahan dulu, baru tingkatkan kecepatan.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Tapping</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Tapping</strong> adalah teknik memukul senar langsung ke fret dengan jari tangan kanan untuk menghasilkan nada, sering digunakan dalam solo gitar.</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Contoh:
e|-----------------------|
B|-----------------------|
G|-------------5h7h12t---|
D|-----------------------|
A|-----------------------|
E|-----------------------|

                                    </pre>
                                    <ul class="list-disc ml-5 mt-2">
                                        <li>Gunakan jari telunjuk/tengah tangan kanan untuk “mengetuk” senar di fret tertentu.</li>
                                        <li>Biasanya dikombinasikan dengan hammer-on & pull-off di tangan kiri.</li>
                                        <li>Pastikan nada terdengar jelas dan tidak kabur.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Hybrid picking</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Hybrid picking</strong> menggabungkan pick dan jari dalam satu waktu — pick digunakan untuk senar bawah, jari tengah/manis untuk senar atas.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Pick: senar 5/6 (bass)</li>
                                        <li>Jari tengah: senar 2</li>
                                        <li>Jari manis: senar 1</li>
                                    </ul>
                                    <p class="mt-2">Cocok untuk country, fusion, dan teknik petikan cepat berpola unik.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">String skipping</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>String skipping</strong> adalah teknik bermain melodi dengan melewati satu atau lebih senar, memberikan warna yang unik dan dinamis.</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Contoh:
G|--------5-------------
E|---3----------8-------

                                    </pre>
                                    <ul class="list-disc ml-5">
                                        <li>Latihan dengan pola melompat senar (misal dari senar 6 ke 4, atau 3 ke 1).</li>
                                        <li>Latih kombinasi alternate picking atau legato dengan string skipping.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Alternate picking cepat</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Alternate picking</strong> adalah teknik dasar memetik naik-turun secara bergantian. Untuk tingkat tinggi, fokus pada kecepatan dan akurasi.</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Latihan:
e|--1-2-3-4--1-2-3-4--|
B|--1-2-3-4--1-2-3-4--| dst.

                                    </pre>
                                    <ul class="list-disc ml-5 mt-2">
                                        <li>Gunakan metronome, mulai dari 60 BPM lalu naik bertahap.</li>
                                        <li>Fokus pada gerakan kecil dan konsisten dari pick.</li>
                                        <li>Latih pola skala (scale) dan arpeggio juga dengan alternate picking.</li>
                                    </ul>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Scale & Mode</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">7 mode mayor</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Mode</strong> adalah variasi dari major scale dengan titik awal berbeda. Ada 7 mode utama dalam musik modern:</p>
                                    <ol class="list-decimal ml-5 mt-2">
                                        <li><strong>Ionian</strong> (C - D - E - F - G - A - B) → Suasana cerah (Major scale)</li>
                                        <li><strong>Dorian</strong> (D - E - F - G - A - B - C) → Minor dengan rasa funky</li>
                                        <li><strong>Phrygian</strong> (E - F - G - A - B - C - D) → Minor gelap / eksotis</li>
                                        <li><strong>Lydian</strong> (F - G - A - B - C - D - E) → Major dengan rasa dreamy</li>
                                        <li><strong>Mixolydian</strong> (G - A - B - C - D - E - F) → Major dengan nuansa bluesy</li>
                                        <li><strong>Aeolian</strong> (A - B - C - D - E - F - G) → Natural minor (Minor scale)</li>
                                        <li><strong>Locrian</strong> (B - C - D - E - F - G - A) → Minor ekstrem, jarang dipakai</li>
                                    </ol>
                                    <p class="mt-2">Latihan: Mainkan semua mode ini di fretboard dari satu root note (misalnya dari C di fret ke-8 senar 6).</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Improvisasi pakai mode</summary>
                                <div class="ml-4 mt-2">
                                    <p>Improvisasi dengan mode memberi warna unik pada permainanmu. Contoh penerapannya:</p>
                                    <ul class="list-disc ml-5">
                                        <li><strong>Dorian mode:</strong> Cocok untuk backing chord minor 7 (misal: Dm7 - G7)</li>
                                        <li><strong>Mixolydian mode:</strong> Bagus untuk blues dan funk (misal: G7 vamp)</li>
                                        <li><strong>Lydian mode:</strong> Digunakan pada fusion/jazz (misal: Fmaj7 vamp)</li>
                                    </ul>
                                    <p class="mt-2">Coba gunakan backing track dan fokus pada satu mode selama beberapa menit untuk menyerap karakternya.</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Contoh backing: Dm7 → G7 → Cmaj7  
Gunakan: D Dorian → G Mixolydian → C Ionian

                                    </pre>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Latihan phrasing</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Phrasing</strong> adalah cara menyusun dan memainkan not-not seperti "kalimat musik". Ini membuat improvisasi terdengar lebih musikal, bukan sekadar deretan nada cepat.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Gunakan teknik dinamika: kuat-pelan, panjang-pendek.</li>
                                        <li>Latih berhenti di nada target seperti chord tone (1, 3, 5).</li>
                                        <li>Ulangi motif melodi dengan variasi kecil.</li>
                                        <li>Gabungkan teknik seperti slide, bend, vibrato dalam frase.</li>
                                    </ul>
                                    <pre class="bg-gray-100 p-2 rounded">
Tips latihan:
- Mainkan 3-5 nada per frase, jangan terlalu panjang
- Bernyanyi di kepala lalu mainkan
- "Less is more"

                                    </pre>
                                    <p class="mt-2 text-sm text-gray-600">Dengarkan pemain seperti Joe Satriani, John Mayer, atau Guthrie Govan untuk inspirasi phrasing yang kuat.</p>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Chord Voicing & Progresi Kompleks</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Jazz chord (maj7, min7, dim7)</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Jazz chords</strong> menggunakan tambahan nada seperti 7th, 9th, 11th untuk memberi warna harmoni yang kaya dan modern.</p>
                                    <ul class="list-disc ml-5">
                                        <li><strong>Maj7:</strong> 1 - 3 - 5 - 7 (Cmaj7 = C - E - G - B)</li>
                                        <li><strong>Min7:</strong> 1 - ♭3 - 5 - ♭7 (Am7 = A - C - E - G)</li>
                                        <li><strong>Dim7:</strong> 1 - ♭3 - ♭5 - ♭♭7 (Bdim7 = B - D - F - Ab)</li>
                                    </ul>
                                    <p>Contoh Cmaj7 (voicing umum):</p>
                                    <pre class="bg-gray-100 p-2 rounded">
e|--0--
B|--0--
G|--0--
D|--2--
A|--3--
E|--x--

                                    </pre>
                                    <p>Chord ini banyak digunakan dalam jazz, bossa nova, dan ballad modern.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Voice leading</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Voice leading</strong> adalah teknik mengatur pergerakan nada antar chord agar transisi terdengar halus dan logis.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Fokus pada perpindahan antar nada yang sekecil mungkin (biasanya 1–2 fret).</li>
                                        <li>Sering digunakan dalam jazz, klasik, dan harmoni kontemporer.</li>
                                        <li>Contoh: G7 → Cmaj7 → gunakan inversi agar suara tetap “dekat”.</li>
                                    </ul>
                                    <p class="mt-2">Latihan: Mainkan progresi II-V-I (Dm7 - G7 - Cmaj7) dan coba jaga agar nada atas tidak banyak bergerak.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Modulasi antar kunci</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Modulasi</strong> adalah perpindahan dari satu kunci ke kunci lain dalam satu lagu.</p>
                                    <ul class="list-disc ml-5">
                                        <li><strong>Modulasi langsung:</strong> pindah tiba-tiba ke kunci baru.</li>
                                        <li><strong>Pakai pivot chord:</strong> gunakan chord yang ada di kedua kunci untuk transisi halus.</li>
                                        <li><strong>Chromatic modulation:</strong> naik setengah nada → dramatis.</li>
                                    </ul>
                                    <p>Contoh:</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Asli: C → F → G  
Modulasi: C → F → G → A (ubah ke kunci D mayor)

                                    </pre>
                                    <p>Modulasi sering digunakan untuk meningkatkan dinamika, terutama di bagian chorus atau bridge lagu.</p>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Latihan Ear Training</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Menebak chord</summary>
                                <div class="ml-4 mt-2">
                                    <p>Latihan ini membantu kamu mengenali jenis dan progresi chord hanya dengan mendengar.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Dengarkan dua atau tiga chord yang dimainkan secara berurutan.</li>
                                        <li>Coba tebak apakah itu major, minor, dominant 7, dll.</li>
                                        <li>Gunakan aplikasi atau website ear training seperti <em>tonedear.com</em> atau <em>musictheory.net</em>.</li>
                                    </ul>
                                    <p class="mt-2">Contoh latihan:</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Mainkan: C → F → G  
Tebak urutan: I - IV - V (kunci C Mayor)

                                    </pre>
                                    <p class="text-sm text-gray-600">Tips: Dengarkan warna atau “rasa” dari tiap chord – major biasanya cerah, minor terasa lebih sedih.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Menebak interval</summary>
                                <div class="ml-4 mt-2">
                                    <p>Menebak jarak antara dua nada (interval) sangat penting dalam membangun melodi dan harmoni.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Dengarkan dua nada secara berurutan (melodik) atau bersamaan (harmonik).</li>
                                        <li>Tebak intervalnya: 2nd, 3rd, 4th, 5th, dll.</li>
                                        <li>Gunakan lagu sebagai referensi interval (misal: “Happy Birthday” untuk 2nd, “Here Comes the Bride” untuk 4th).</li>
                                    </ul>
                                    <p class="mt-2">Latih dari interval paling mudah: unison → octave, lalu naik ke 2nd, 3rd, dst.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Latihan dengan backing track</summary>
                                <div class="ml-4 mt-2">
                                    <p>Gunakan backing track untuk melatih telinga dan improvisasi secara bersamaan.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Mainkan track dalam satu kunci (misalnya: Am) lalu coba tebak progresi chord-nya.</li>
                                        <li>Improvisasi menggunakan skala yang sesuai, dan perhatikan apakah nadanya cocok atau tidak.</li>
                                        <li>Gunakan YouTube atau aplikasi seperti iReal Pro untuk mencari backing track.</li>
                                    </ul>
                                    <p class="mt-2">Contoh: Mainkan backing track Am - Dm - E7 dan tebak kapan pergantian chord terjadi.</p>
                                    <pre class="bg-gray-100 p-2 rounded">
Latihan improvisasi:
- Dengarkan chord
- Tebak nadanya
- Mainkan 3-5 nada dari scale yang cocok

                                    </pre>
                                    <p class="text-sm text-gray-600">Ear training dengan backing track sangat efektif untuk latihan nyata di konteks musik.</p>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="font-semibold text-lg mb-2">Genre</h3>
                    <ul class="list-disc ml-6 text-gray-700">
                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Rock</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Rock</strong> ditandai dengan riff gitar yang kuat, distorsi, dan ketukan drum yang energik.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Biasanya menggunakan power chord dan skala pentatonik minor.</li>
                                        <li>Contoh artis: Led Zeppelin, Nirvana, Foo Fighters.</li>
                                    </ul>
                                    <p class="text-sm text-gray-600">Subgenre: Classic Rock, Punk Rock, Alternative Rock.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Pop</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Pop</strong> fokus pada melodi yang mudah diingat dan struktur lagu yang simpel (verse-chorus).</p>
                                    <ul class="list-disc ml-5">
                                        <li>Sering menggunakan progresi chord umum seperti I–V–vi–IV.</li>
                                        <li>Contoh artis: Taylor Swift, Ed Sheeran, Billie Eilish.</li>
                                    </ul>
                                    <p class="text-sm text-gray-600">Mudah dipelajari dan cocok untuk pemula.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Jazz</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Jazz</strong> dikenal dengan harmoni kompleks, improvisasi, dan swing feel.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Chord: maj7, min7, dom7, dim7, dan alterasi lainnya.</li>
                                        <li>Skala: Mixolydian, Dorian, Bebop Scale.</li>
                                        <li>Contoh: Wes Montgomery, George Benson.</li>
                                    </ul>
                                    <p class="text-sm text-gray-600">Cocok untuk pemain lanjutan yang ingin mengeksplorasi harmoni.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Blues</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Blues</strong> adalah akar dari banyak genre modern, ditandai dengan ekspresi emosional dan pola 12-bar blues.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Gunakan skala blues dan minor pentatonik.</li>
                                        <li>Teknik umum: bending, vibrato, slide.</li>
                                        <li>Contoh artis: B.B. King, Stevie Ray Vaughan.</li>
                                    </ul>
                                    <p class="text-sm text-gray-600">Latihan yang bagus untuk phrasing dan feeling bermain.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Metal</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Metal</strong> memiliki suara agresif, tempo cepat, dan riff berat.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Banyak menggunakan palm muting, alternate picking, dan power chord cepat.</li>
                                        <li>Skala: Phrygian, harmonic minor.</li>
                                        <li>Contoh: Metallica, Megadeth, Dream Theater.</li>
                                    </ul>
                                    <p class="text-sm text-gray-600">Butuh teknik picking dan stamina tangan yang kuat.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Reggae</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Reggae</strong> memiliki ritme khas off-beat (chop) dan groove santai.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Strumming di ketukan 2 dan 4 (skank rhythm).</li>
                                        <li>Chord major/minor sederhana dengan groove bass yang kuat.</li>
                                        <li>Contoh: Bob Marley, Peter Tosh.</li>
                                    </ul>
                                    <p class="text-sm text-gray-600">Fokus pada ritme dan sinkronisasi antar instrumen.</p>
                                </div>
                            </details>
                        </li>

                        <li>
                            <details class="mb-2">
                                <summary class="cursor-pointer font-semibold">Klasik</summary>
                                <div class="ml-4 mt-2">
                                    <p><strong>Musik klasik</strong> dimainkan dengan gitar nylon-string (gitar klasik) dan partitur notasi standar.</p>
                                    <ul class="list-disc ml-5">
                                        <li>Fokus pada teknik fingerstyle, arpeggio, dan dinamika.</li>
                                        <li>Repertoar: Bach, Sor, Tarrega.</li>
                                        <li>Menggunakan notasi standar (bukan tablature).</li>
                                    </ul>
                                    <p class="text-sm text-gray-600">Melatih teknik, kedisiplinan, dan pemahaman musik secara mendalam.</p>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
