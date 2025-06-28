@extends('layouts.guest')

@section('content')

<section id="hero" class="hero section dark-background">

    <img src="{{ asset('img/guitar-testimoni.jpg')}}" alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center">
      <h2 data-aos="fade-up" data-aos-delay="100">LATIHAN INTERAKTIF</h2>
      <p data-aos="fade-up" data-aos-delay="200">Keren udah siap untuk latihan? sekarang tinggal pilih apa yang kamu mau?</p>
    </div>

</section>
 <div class="container section-title m-5" data-aos="fade-up">
      <h2>Pickitup</h2>
      <p>Latihan Interaktif<br></p>
    </div>

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
              <a href="{{ route('quiz') }}" class="stretched-link">
                <h3>QUIZ VISUAL</h3>
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
                <h3>QUIZ MATERI</h3>
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

@endsection