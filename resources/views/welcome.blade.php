@extends('layouts.app')

@section('content')

  <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Visa Elektronik United Kingdom </h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div>
                <a href="" class="btn btn-primary btn-lg">Ajukan Visa</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-book-open m-auto text-primary"></i>
              </div>
              <h3>Mengisi Formulir</h3>
              <p class="lead mb-0">Calon pelamar visa diwajibkan mendaftarkan diri dan mengisi formulir.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Validasi Data</h3>
              <p class="lead mb-0">Sistem akan memvalidasi data yang anda berikan.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-printer m-auto text-primary"></i>
              </div>
              <h3>Cetak Formulir</h3>
              <p class="lead mb-0">Jika aplikasi disetujui, cetak receipt dan datang ke kantor perwakilan untuk wawancara.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpeg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Periksa apakah Anda memenuhi syarat<h2>
            <p class="lead mb-0">
                &#9679; Anda berusia 18 tahun atau lebih;<br>
                &#9679; Anda bermaksud untuk mengunjungi Inggris selama tidak lebih dari 6 bulan;<br>
                &#9679; Anda bermaksud untuk meninggalkan Inggris di akhir kunjungan Anda;<br>
                &#9679; Anda memiliki cukup uang untuk membiayai dan memenuhi kebutuhan diri sendiri ;<br>
                &#9679; Anda dapat menanggung biaya pulang atau perjalanan berikutnya;<br>
                &#9679; Anda tidak berada dalam transit ke negara di luar ‘Common Travel Area’ (Irlandia, Inggris, Isle of Man, dan Kepulauan Channel).<br>
            </p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpeg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Siapkan dokumen Anda</h2>
            <p class="lead mb-0">

                &#9679; Salinan formulir permohonan visa yang telah dilengkapi dan ditandatangani<br>
                &#9679; Dokumen perjalanan atau paspor yang terbaru dan masih berlaku<br>
                &#9679; Satu foto ukuran paspor berwarna yang memenuhi persyaratan pedoman foto kami. ;<br>
                &#9679; Bukti izin untuk berada di negara tempat Anda mengajukan permohonan jika Anda bukan warga negara tersebut.<br>
                &#9679; Bukti pekerjaan atau studi Anda saat ini.<br>
                 &#9679; Rencana perjalanan, jika Anda memilikinya.<br>
              </p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/uk-gb.png');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Pahami Lokasi Dimana Anda Berada</h2>
            <p class="lead mb-0">Kerajaan Bersatu Britania Raya dan Irlandia Utara atau secara umum dikenal sebagai Britania Raya, atau Inggris Raya, adalah sebuah negara berdaulat yang terletak di lepas pantai barat laut benua Eropa. Britania Raya adalah sebuah negara kepulauan yang terdiri dari Pulau Britania Raya, bagian timur laut Pulau Irlandia dan sejumlah pulau-pulau yang lebih kecil. </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    {{-- <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/uk-gb.png" alt="">
              <h5>Margaret E.</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
              <h5>Sarah	W.</h5>
              <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- Call to Action -->
    {{-- <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Ready to get started? Sign up now!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; UK Visas & Immigration 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
@endsection
