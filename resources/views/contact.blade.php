@extends('layouts.guest')
@section('content')

{{-- <section id="contact" class="contact section mt-2 bg-dark">

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
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="name">
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="email">
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

</section> --}}

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

<div class="page-title dark-background" data-aos="fade" style="background-image: url(/assets/img/about.jpg);">
  <div class="container position-relative">
        <h1>Hai, {{ auth()->user()->name }}!</h1>
        <p>Udah melihat semua fitur kami? sekarang kamu bebas berkomentar disini.</p>
  </div>      
</div>
<form method="POST" action="{{ route('comment.store') }}" class="mt-5 mb-3 justify-content-center py-8 px-4" data-aos="fade-up" data-aos-delay="500">
  @csrf
  <div class="container section-title" data-aos="fade-up">
      <h2 class="text-center">Kontak</h2><br>
      <p class="text-center">Apa pendapatmu tentang kami?</p>
  </div><!-- End Section Title -->

    <div class="container shadow" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 ">
          <div class="row gy-4">

            <div class="col-lg-12">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Alamat</h3>
                <p>Jl. Babakan Ciparay, Kota Bandung, BDG 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Hubungi Kami</h3>
                <p>+62878-7263-4316</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Kami</h3>
                <p>pickitup@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <div class="col-lg-6">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Nama Kamu.." required="">
              </div>

              <div class="col-md-12">
                 <textarea class="form-control" name="comment" rows="4" placeholder="Tulis komentar tentang website..." required></textarea>
              </div>

              <div class="col-md-12 text-center d-flex justify-content-end py-5">
              <button type="submit" class="btn btn-success">Kirim Komentar</button>
              </div>

            </div>
        </div>

      </div>
    </div>  


</form>

@endsection