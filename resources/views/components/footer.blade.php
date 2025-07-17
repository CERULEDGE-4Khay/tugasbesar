<footer id="footer" class="footer dark-background">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="/" class="logo d-flex align-items-center">
          <span class="sitename">PickItUp</span>
        </a>
        <div class="footer-contact pt-3">
          <p>Jl. Babakan Ciparay</p>
          <p>Kota Bandung, BDG 20255</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+62878-7786-9856</span></p>
          <p><strong>Email:</strong> <span>pickitup@gmail.com</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Link Kami</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="/">Beranda</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="/about">Tentang Kami</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Pelayanan Kami</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="/katalog-chord">Katalog Chord</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="/mentoring">Mentoring</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="/materi">Materi</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="/latihaninteraktif">Latihan Interaktif</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12 footer-newsletter">
        <h4>Buletin Kami</h4>
        <p>Berlangganan buletin kami dan terima berita terbaru tentang produk dan layanan kami!</p>
        <form action="/subscribe" method="post">
          @csrf
          <div class="newsletter-form">
            <input type="email" name="email" placeholder="Masukin Email Kamu" required>
            <input type="submit" value="Subscribe">
          </div>
          <div class="loading" style="display:none;">Loading</div>
          <div class="error-message" style="display:none;color:red;"></div>
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif
    
          @if(session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
          @endif
          
        </form>
      </div>


    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">PickItUp</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      Designed by <a href="https://bootstrapmade.com/">M.Khairan A.S</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
    </div>
  </div>

</footer>