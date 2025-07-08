@extends('layouts.guest') @section('content')

<section id="hero" class="hero section dark-background">
    <img src="{{ asset('img/guitar-testimoni.jpg')}}" alt="" data-aos="fade-in" />

    <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">LATIHAN INTERAKTIF</h2>
        <p data-aos="fade-up" data-aos-delay="200">Keren udah siap untuk latihan? sekarang tinggal pilih apa yang kamu mau?</p>
    </div>
</section>
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>PICKITUP</h2>
      <p>Latihan Interaktif<br></p>
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
              <a href="{{ route('show.quiz') }}" class="stretched-link">
                <h3>DAFTAR QUIZ</h3>
              </a>
              <p>Di quiz ini kamu bisa mengukur berapa banyak Chord yg sudah kamu ketahui.</p>
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
              <a href="/courses" class="stretched-link">
                <h3>Daftar Kursus</h3>
              </a>
              <p>Disini kamu dapat melihat kursus apa saja yang telah kamu ambil dan melihat progressnya.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->

@endsection
