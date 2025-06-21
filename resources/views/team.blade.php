@extends('layouts.guest')
@section('content')
<section id="hero" class="hero section dark-background">

    <img src="{{ asset('img/logopickitup.png')}}" alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center">
      <h2 data-aos="fade-up" data-aos-delay="100">OUR TEAM</h2>
      <p data-aos="fade-up" data-aos-delay="200">Tidak akan terbentuk website ini jika bukan karena mereka</p>
    </div>

  </section>

  <!-- Team Section -->
  <section id="team" class="team section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Hallo!</h2>
      <p>PICKITUP TEAM</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
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
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>M. Rizky Hakim</h4>
              <span>Frontend Support</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Jajang Nurjaman</h4>
              <span>Mentor</span>
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

  </section><!-- /Team Section -->

@endsection