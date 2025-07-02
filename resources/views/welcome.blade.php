@extends('layouts.guest')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <img src="{{ asset('img/electric-guitar-bg.jpg')}}" alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center">
      <h2 data-aos="fade-up" data-aos-delay="100">LEARN. PRACTICE. PRODUCE.</h2>
      <p data-aos="fade-up" data-aos-delay="200">Tempat belajar gitar mulai dari dasar sampai <span class="text-danger">JAGO</span></p>
      <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
        <a href="/login" class="btn btn-lg btn-success">Mulai</a>
        <a href="https://youtu.be/Yw74sDWPH7U?si=EPYZwD2HyA40g07z" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
      </div>
    </div>

  </section>
  <!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3>Belajar dasar gitar mulai dari bagian bagian pada gitar dan posisi jari yang baik</h3>
          <img src="{{ asset('img/bagian-gitar.jpg')}}" class="img-fluid rounded-4 mb-4" alt="bagian bagian gitar">
           <p>Untuk belajar gitar, penting banget mengenal nama dan fungsi setiap bagian dari gitar. Berikut adalah bagian-bagian utama gitar:</p>

            <ul>
              <li><strong>Headstock (Kepala Gitar):</strong> Bagian paling atas gitar. Di sini terdapat tuning peg untuk menyetel senar.</li>
              <li><strong>Tuning Peg (Penyetel Senar):</strong> Berfungsi untuk mengatur ketegangan senar agar menghasilkan nada yang pas.</li>
              <li><strong>Nut:</strong> Bagian kecil berbahan plastik atau tulang yang memisahkan headstock dan fretboard.</li>
              <li><strong>Neck (Leher Gitar):</strong> Bagian panjang tempat tangan kiri menekan senar. Di sini terdapat fretboard.</li>
              <li><strong>Fretboard (Papan Jari):</strong> Papan berisi garis-garis logam (fret). Setiap fret menghasilkan nada yang berbeda saat ditekan.</li>
              <li><strong>Frets:</strong> Garis logam melintang pada fretboard. Menekan senar di antara fret akan mengubah nada.</li>
              <li><strong>Body (Badan Gitar):</strong> Bagian terbesar gitar, tempat suara dihasilkan (terutama pada gitar akustik).</li>
              <li><strong>Sound Hole (Lubang Suara):</strong> Hanya ada pada gitar akustik. Berfungsi untuk memperkuat resonansi suara.</li>
              <li><strong>Bridge:</strong> Tempat senar diikat di badan gitar.</li>
              <li><strong>Pickguard:</strong> Pelindung agar body gitar tidak tergores saat menggunakan pick.</li>
            </ul>

        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
              selain kita harus tahu bagian bagian pada gitar kita juga perlu tahu posisi jari jari tangan kita yang paling bagus itu seperti apa
            </p>
             <h2>Posisi Jari yang Baik Saat Bermain Gitar</h2>
             <hr>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i><strong>Ibu Jari di Belakang Neck:</strong> Letakkan ibu jari di bagian belakang neck (tidak terlihat dari depan).</li>
              <li><i class="bi bi-check-circle-fill"></i><strong>Jari Melengkung:</strong> Jari-jari lainnya harus melengkung dan menekan senar dengan ujung jari.</li>
              <li><i class="bi bi-check-circle-fill"></i> <strong>Tekanan Cukup:</strong> Jangan terlalu keras menekan, tapi cukup agar suara terdengar jernih.</li>
              <li><i class="bi bi-check-circle-fill"></i> <strong>Posisi Tangan Fleksibel:</strong> Jangan terlalu tegang. Usahakan rileks agar bisa berpindah akor dengan cepat.</li>
            </ul>
             <p>kenapa itu penting? karena dengan memiliki posisi jari yang benar akan membuat permainan gitar lebih nyaman dan mengurangi risiko cedera pada jari dan pergelangan tangan kita, walaupun pada awalnya tetap akan terasa pegal dan sakit tapi jika caranya sudah benar pasti kedepannya pun akan lebih mudah. Dan dibawah ini ada video tutorialnya untuk kalian pelajari posisi jari yang baik untuk bermain gitar.</p>

            <div class="position-relative mt-4">
              <img src="{{ asset('/img/jari-gitar.jpg')}}" class="img-fluid rounded-4" alt="">
              <a href="https://youtu.be/LYUFX3oGCpI?si=zH4jQbDOFq84vhYg" class="glightbox pulsating-play-btn"></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Stats Section -->
  <section id="stats" class="stats section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-emoji-smile text-primary flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="112" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-journal-richtext text-primary flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Materi</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-headset text-primary flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Genre</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-people text-primary flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Mentor</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- /Stats Section -->

  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Pelayanan</h2>
      <p>Layanan PickItUp<br></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src="{{ asset('/img/guitar-photo1.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-book-half"></i>
              </div>
              <a href="/latihaninteraktif" class="stretched-link">
                <h3>Latihan Interaktif</h3>
              </a>
              <p>QUIZ adalah tempat untuk kamu mengukur sejauh mana pengetahuanmu tentang gitar.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="service-item">
            <div class="img">
              <img src="{{ asset('/img/guitar-photo.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-calendar2-event"></i>
              </div>
              <a href="mentoring.blade.php" class="stretched-link">
                <h3>Mentoring</h3>
              </a>
              <p>Mentoring adalah tempat atau layanan kami untuk membantu proses belajar kamu agar kamu bisa bertanya secara langsung.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="service-item">
            <div class="img">
              <img src="{{ asset('/img/guitar-materi.png')}}" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="materi.blade.php" class="stretched-link">
                <h3>Materi</h3>
              </a>
              <p>Disini kamu akan mendapatkan banyak informasi tentang gitar seperti chord dasar, cara strumming(genjreng), teknik petikan, dan lainnya.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->

  <!-- Clients Section -->
  {{-- <section id="clients" class="clients section light-background">

    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
        </div><!-- End Client Item -->

      </div>

    </div>

  </section><!-- /Clients Section --> --}}

  <!-- Features Section -->
  <section id="features" class="features section">

    <div class="container">

      <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
        <li class="nav-item col-3">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
            <i class="bi bi-music-note"></i>
            <h4 class="d-none d-lg-block">Bagaimana dengan gitar Akustik?</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
            <i class="bi bi-music-note-beamed"></i>
            <h4 class="d-none d-lg-block">Bagaimana dengan gitar Classic?</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
            <i class="bi bi-vinyl"></i>
            <h4 class="d-none d-lg-block">Bagaimana dengan gitar Elektrik?</h4>
          </a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
            <i class="bi bi-vinyl-fill"></i>
            <h4 class="d-none d-lg-block">Bagaimana dengan gitar Bass?</h4>
          </a>
        </li>
      </ul><!-- End Tab Nav -->

      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

        <div class="tab-pane fade active show" id="features-tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Gitar Akustik</h3>
              <p class="fst-italic">
                 Gitar akustik biasanya menggunakan <strong>senar baja (steel string)</strong> dan memiliki suara yang lebih terang dan nyaring. Cocok untuk musik pop, folk, reggae, dan ska.
              </p>
              <h4>Ciri ciri gitar Akustik :</h4>
              <ul>
                <li><i class="bi bi-check2-all color-primary"></i>
                  <span>Senar Baja (Steel String)</span>
                </li>
                <li><i class="bi bi-check2-all"></i> <span>Suara terang dan nyaring</span>.</li>
                <li><i class="bi bi-check2-all"></i> <span>Body besar dengan lubang suara (sound hole)</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Leher gitar akustik biasanya lebih ramping dan tipis, memudahkan pemain untuk memainkan akord dan solo.</span></li> 
              </ul>
              <p>
               Gitar akustik dapat dimainkan baik dengan jari secara langsung maupun menggunakan pick (plektrum), tergantung pada gaya musik dan kenyamanan pemain. Pemula sangat disarankan untuk melatih teknik dasar seperti <em>strumming</em> untuk mengiringi lagu, serta <em>fingerstyle</em> untuk menghasilkan permainan yang lebih melodius dan dinamis. Pada tahap awal, mungkin jari-jari akan terasa sakit atau perih saat menekan senar baja yang lebih keras dibanding senar nylon, namun ini merupakan hal yang wajar dan akan membaik seiring waktu. Konsistensi dalam latihan akan membantu membentuk kekuatan dan ketahanan jari, sekaligus meningkatkan koordinasi tangan kanan dan kiri dalam memainkan lagu-lagu favorit.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="{{ asset('/img/guitar-photo1.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->

        <div class="tab-pane fade" id="features-tab-2">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Gitar Klasik/Classic</h3>
              <p>
                Gitar klasik menggunakan <strong>senar nylon</strong> dan menghasilkan suara yang lembut. Cocok untuk musik klasik, flamenco, dan lagu akustik sederhana. Gitar Klasik/Classic biasanya juga direkomendasikan untuk kamu yg baru mau belajar gitar karena senarnya (Nylon) yg lembut dan tidak sakit.
              </p>
              <p class="fst-italic">
                Ciri ciri gitar Klasik/Classic :
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Senar nylon (lebih lembut untuk jari pemula)</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Neck lebih lebar daripada gitar akustik</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Suara lembut dan hangat</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Tanpa amplifier alias tidak bisa di masukkan dengan kabel jack</span></li>
              </ul>
              <p>Gitar klasik umumnya dimainkan dengan menggunakan jari-jari tangan kanan secara langsung tanpa bantuan pick, agar bisa menghasilkan dinamika suara yang lebih halus dan ekspresif. Pemain dianjurkan untuk duduk dalam posisi formal, yaitu dengan kaki kiri yang ditinggikan menggunakan penyangga atau footstool, sehingga posisi gitar lebih stabil dan leher gitar mengarah ke atas. Teknik bermain yang umum pada gitar klasik mencakup <em>arpeggio</em> (memetik senar satu per satu secara berurutan) dan <em>plucking</em> (memetik senar secara individu), yang keduanya penting untuk menghasilkan permainan yang bersih dan bernuansa. Disiplin dalam postur dan teknik dasar sangat penting dalam permainan gitar klasik karena berpengaruh langsung pada kenyamanan dan kualitas suara.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="{{ asset('/img/guitar-photo.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->

        <div class="tab-pane fade" id="features-tab-3">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Gitar Elektrik</h3>
              <p>
                Gitar elektrik membutuhkan <strong>amplifier</strong> untuk mengeluarkan suara. Gitar elektrik juga banyak digunakan dalam musik rock, jazz, blues, dan metal. Karena gitar elektrik bisa menggunakan berbagai macam efek agar menghasilkan suara tertentu yang di butuhkan atau di inginkan, contohnya seperti efek <em>Distorsi, Delay, Chorus, dan lain lain</em>
              </p>
              <p>Ciri ciri Gitar Elektrik :</p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Body solid (tidak berlubang)</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Harus disambung ke amplifier untuk mengeluarkan suaranya</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Suara bisa dimodifikasi dengan efek</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Lebih mudah ditekan (action lebih rendah) karena senar gitar elektrik lebih ringan dibanding gitar akustik</span></li>
              </ul>
              <p class="fst-italic">
                 Gitar elektrik biasanya dimainkan menggunakan pick untuk memberikan presisi dan kecepatan, terutama saat memainkan melodi atau riff yang kompleks. Pemula sebaiknya mulai mempelajari teknik dasar seperti <em>bending</em>, <em>vibrato</em>, dan <em>slide</em>, yang sangat penting dalam membentuk karakter suara saat bermain solo. Selain itu, pemain juga perlu memahami berbagai efek suara seperti <strong>distortion</strong>, <strong>reverb</strong>, dan <strong>delay</strong>, karena efek-efek ini membantu menciptakan warna dan nuansa yang khas dalam berbagai genre musik seperti rock, metal, blues, dan jazz. Latihan yang konsisten dan eksplorasi terhadap pedal efek akan sangat membantu dalam mengembangkan gaya bermain yang unik.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="{{ asset('/img/photo-guitar.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->

        <div class="tab-pane fade" id="features-tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Gitar Bass / Bass</h3>
              <p>
               <strong>Bass</strong> menghasilkan nada rendah dan berfungsi sebagai fondasi ritme. Meski bentuknya mirip gitar, bass berperan penting dalam menjaga groove dan tempo lagu.
              </p>
              <p class="fst-italic">
                Ciri ciri Gitar Bass atau Bass :
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> <span>Biasanya hanya memiliki 4 senar (tetapi ada juga yang 5 - 6 senar)</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Standar Tuningnya adalah nada E-A-D-G</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Senar lebih tebal dan suara lebih rendah</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Leher lebih panjang dari gitar biasa</span></li>
              </ul>
              <p>Dalam bermain bass, teknik dasar yang paling umum adalah memetik senar menggunakan jari telunjuk dan tengah secara bergantian, dikenal dengan teknik <em>fingerstyle</em>. Pemula sebaiknya fokus terlebih dahulu pada menjaga ritme dan stabilitas permainan, karena bass berperan penting sebagai penopang irama dalam sebuah lagu. Selain itu, latihan teknik dasar seperti <strong>plucking</strong> (memetik senar), <strong>muting</strong> (meredam senar agar tidak berbunyi berlebihan), dan <strong>slap-pop</strong> (memukul dan menarik senar untuk suara yang lebih tajam) akan membantu memperkaya karakter permainan bass. Kunci dari bermain bass adalah konsistensi dan rasa terhadap groove, sehingga latihan yang teratur sangat penting untuk mengembangkan kemampuan ini.
              </p>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="{{ asset('/img/gitar-bass1.jpg')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content Item -->

      </div>

    </div>

  </section><!-- /Features Section -->

  <!-- Services 2 Section -->
  <section id="services-2" class="services-2 section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Hi! Whats up?</h2>
      <p>SEKEDAR INFO</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-compass icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Sejarah Gitar</a></h4>
              <p class="description">Gitar sudah ada sejak ribuan tahun lalu, berevolusi dari instrumen petik kuno hingga menjadi alat musik modern yang digunakan dalam berbagai genre.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-music-player-fill icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Musisi Legendaris</a></h4>
              <p class="description">Nama-nama seperti Jimi Hendrix, Eric Clapton, dan Yuki Yamada menginspirasi banyak gitaris dengan gaya bermain yang unik dan pengaruh global.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-patch-question icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Tools para Musisi</a></h4>
              <p class="description">Gunakan tuner, capo, metronome, serta aplikasi rekaman digital untuk mendukung proses belajar dan memperluas kreativitas bermain musik.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-lightbulb icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Tips Latihan Gitar</a></h4>
              <p class="description">Luangkan waktu minimal 15 menit per hari, fokus pada konsistensi, dan gunakan metronome agar latihan jadi lebih efektif dan rapi.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-people-fill icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Gitaris Vs Vokalis?</a></h4>
              <p class="description">Siapa yang lebih penting? Ternyata, keduanya saling melengkapi. Tapi banyak gitaris sukses yang juga jadi vokalis utama, loh!</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item d-flex position-relative h-100">
            <i class="bi bi-info-circle-fill icon flex-shrink-0"></i>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Gear Wajib Gitaris Now</a></h4>
              <p class="description">Capo, loop pedal, audio interface — alat-alat ini bikin permainanmu makin kreatif dan bisa tampil layaknya profesional dari rumah.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services 2 Section -->

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section dark-background">

    <img src="/img/guitar-testimoni.jpg" class="testimonials-bg" alt="background testi">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="/img/guitar3.jpg" class="testimonial-img" alt="foto testimoni 1">
              <h3>M.Khairan Athallah S</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Menurut saya website ini bisa membantu orang orang yang ingin belajar gitar tapi bingung mulai darimana dan bisa memberikan feedback untuk mereka.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="foto testimoni 2">
              <h3>Helmi</h3>
              <h4>Pengunjung</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Mentor</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Mentor</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Client</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>List Barang</h2>
      <p>Rekomendasi dari kami</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Guitar Classic</li>
          <li data-filter=".filter-product">Guitar Accoustic</li>
          <li data-filter=".filter-branding">Guitar Electric</li>
          <li data-filter=".filter-books">Bass</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/guitar-classic-foto.jpg')}}" class="img-fluid" alt="gitar klasik 1">
              <div class="portfolio-info">
                <h4>Guitar Classic 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/guitar-classic-foto.jpg')}}" title="Guitar Classic 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/photo-guitar1.jpg')}}" class="img-fluid" alt="gitar akustik 1">
              <div class="portfolio-info">
                <h4>Guitar Accoustic 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/photo-guitar1.jpg')}}" title="Guitar Accoustic 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/guitar-electric-foto.jpg')}}" class="img-fluid" alt="gitar elektrik">
              <div class="portfolio-info">
                <h4>Guitar Electric 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/guitar-electric-foto.jpg')}}" title="Guitar Electric 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/gitar-bass1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bass 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/gitar-bass1.jpg')}}" title="Bass 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/guitar-classic-foto2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Guitar Classic 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/guitar-classic-foto2.jpg')}}" title="Guitar Classic 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/guitar-accoustic-foto.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Guitar Accoustic 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/guitar-accoustic-foto.jpg')}}" title="Guitar Accoustic 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/guitar-electric-foto1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Guitar Electric 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/guitar-electric-foto1.jpg')}}" title="Guitar Electric 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/gitar-bass2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bass 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/gitar-bass2.jpg')}}" title="Bass 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/guitar-classic-foto1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Guitar Classic 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/guitar-classic-foto1.jpg')}}" title="Guitar Classic 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/acoustic-guitar.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Guitar Accoustic 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/acoustic-guitar.jpg')}}" title="Guitar Accoustic 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/guitar-electric-foto2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Guitar Electric 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/guitar-electric-foto2.jpg')}}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
            <div class="portfolio-content h-100">
              <img src="{{ asset('/img/gitar-bass3.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bass 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="{{ asset('/img/gitar-bass3.png')}}" title="Bass 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->

  <!-- Team Section -->
  {{-- <section id="team" class="team section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Team</h2>
      <p>PICKITUP TEAM</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="pic"><img src="/img/foto-juara-band.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>M.Khairan Athallah.S</h4>
              <span>Founder PICKITUP</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="pic"><img src="/img/foto-juara-band.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Mochamad Khairan Athallah S</h4>
              <span>Founder PICKITUP</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/m.khairan22"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/khairan-mochamad-150117371"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>M. Rizky Hakim</h4>
              <span>Support IT</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section>--}}

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>What Do You Think About Us?</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 ">
          <div class="row gy-4">

            <div class="col-lg-12">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>Jl. Babakan Ciparay, Kota Bandung, BDG 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+62878-7263-4316</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>pickitup@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

  
    @if (session('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
        });
    </script>
    @endif
</main>
@endsection
