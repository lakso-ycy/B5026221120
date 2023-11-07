<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lakso's Personal-Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
          <a class="navbar-brand fw-bold" href="https://www.instagram.com/laksa_ra/" target="_blank">Laksono</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#header">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portofolio">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skills">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#timeline">Timelilne</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Header -->
    <section class="header-section" id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col md-6">
                    <p class="text-blue fw-semibold">Muhammad Shalahuddin Arif Laksono</p>
                    <h1 class="section header-tittle text-uppercase fw-bold">Creative designed <br class="d-none d-md-block">based in Indonesia
                    </h1>
                    <a href="https://www.dicoding.com/learningpaths/22" target="_blank" class="header-skill d-inline-flex align-items-center gap-2">Web Development
                        <i class='bx bx-right-arrow-alt fs-4'></i>
                    </a><br>
                    <a href="https://www.binaracademy.com/blog/pengertian-mobile-developer" target="_blank" class="header-skill d-inline-flex align-items-center gap-2">Mobile Development
                        <i class='bx bx-right-arrow-alt fs-4'></i>
                    </a><br>
                    <a href="https://www.itcilo.org/stories/graphic-design-development" target="_blank" class="header-skill d-inline-flex align-items-center gap-2">Graphic Development
                        <i class='bx bx-right-arrow-alt fs-4'></i>
                    </a><br>
                    <div class="d-flex align-items-center gap-4 mt-5">
                        <div class="d-flex align-items-center gap-2">
                           <h2 class="header-skill fw-bold mb-0">5+</h2>
                           <p class="text-secondary fs-7 mb-0">Year of<br/>Experience</p>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                           <h2 class="header-skill fw-bold mb-0">1k+</h2>
                           <p class="text-secondary fs-7 mb-0">Happy<br/>Customers</p>
                    </div>
                </div>

            </div>
            <div class="col md-5">
                <img src="img/WhatsApp Image 2023-10-16 at 20.28.48_bb90557a.jpg" class="header-img rounded img-thumbnail" alt="">
            </div>
        </div>
    </section>

    <!-- Portofolio -->
    <section class="portofolio-section" id="portofolio">
        <div class="container">
            <p class="text-blue fw-semibold">Portofolio</p>
            <h2 class="section-title mb-5">Selected Works</h2>

            <div class="swiper portofolio-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/WhatsApp Image 2023-10-21 at 04.27.51_80ab65fd.jpg" alt="" class="card-img-top rounded mb-3">
                                <h6 class="fw-semibold">ISE Login UI</h6>
                                <a href="https://ise-its.com/login" target="_blank" class="text-blue">Detail Portofolio</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/WhatsApp Image 2023-10-21 at 04.36.57_70dd78cb.jpg" alt="" class="card-img-top rounded mb-3">
                                <h6 class="fw-semibold">Ruang Sains Login UI</h6>
                                <a href="https://ruangsains.id/my-account/" target="_blank" class="text-blue">Detail Portofolio</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/WhatsApp Image 2023-10-21 at 04.44.00_12c2a923.jpg" alt="" class="card-img-top rounded mb-3">
                                <h6 class="fw-semibold">Direktorat Jenderal Pajak Login UI</h6>
                                <a href="https://djponline.pajak.go.id/account/login" target="_blank" class="text-blue">Detail Portofolio</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/WhatsApp Image 2023-10-21 at 04.48.00_ddc7aeea.jpg" alt="" class="card-img-top rounded mb-3">
                                <h6 class="fw-semibold">Netflix Homepage UI</h6>
                                <a href="https://www.netflix.com/id/" target="_blank" class="text-blue">Detail Portofolio</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-end gap-3 mt-3">
                    <button class="btn btn-light d-flex align-items-center justify-content-center btn-next">
                        <i class="bx bx-left-arrow-alt fs-5"></i>
                    </button>
                    <button class="btn btn-light d-flex align-items-center justify-content-center btn-prev">
                        <i class="bx bx-right-arrow-alt fs-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section class="skills-section" id="skills">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6">
            <p class="text-blue fw-semibold">
              Skills
            </p>
            <h2 class="section-title mb-5 text-white">Programming Skills</h2>
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <p class="text-white text-uppercase fw-semibold mb-0">HTML</p>
                <p class="text-white text-uppercase  mb-0">85%</p>
              </div>
              <div class="progress-bar">
                <span class="progress" style="width: 85%;"></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <p class="text-white text-uppercase fw-semibold mb-0">Javascript</p>
                <p class="text-white text-uppercase  mb-0">80%</p>
              </div>
              <div class="progress-bar">
                <span class="progress" style="width: 80%;"></span>
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <p class="text-white text-uppercase fw-semibold mb-0">CSS</p>
                <p class="text-white text-uppercase  mb-0">83%</p>
              </div>
              <div class="progress-bar">
                <span class="progress" style="width: 83%;"></span>
              </div>
            </div>
          </div>
          <div class="col md-5">
            <img src="img/berkarir-sebagai-programmer.jpg" class="skills-img rounded img-thumbnail" alt="">
        </div>
        </div>
      </div>
    </section>

    <!-- Timeline -->
    <section class="timeline-section" id="timeline">
      <div class="container">
          <p class="text-blue fw-semibold">Timeline</p>
          <h2 class="section-title mb-5">Working Period</h2>
          <div class="row py-3 border-bottom working-period-item">
            <div class="col-md-4">April 2021 - Juni 2021</div>
            <div class="col-md-4">Junior programmer</div>
            <div class="col-md-4">ISE 2023</div>
          </div>
          <div class="row py-3 border-bottom working-period-item">
            <div class="col-md-4">Januari 2022 - Maret 2022</div>
            <div class="col-md-4">Senior programmer</div>
            <div class="col-md-4">Ruang Sains</div>
          </div>
          <div class="row py-3 border-bottom working-period-item">
            <div class="col-md-4">Juli 2022 - Februari 2023</div>
            <div class="col-md-4">Senior programmer</div>
            <div class="col-md-4">Web dev Direktorat Jenderal Pajak</div>
          </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="portofolio-section" id="contact">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6">
            <p class="text-blue fw-semibold">Contact</p>
            <h2 class="section-title mb-5">Get in touch</h2>
            <p class="text-secondary mb-3">Please fill out the form on this section to contact with me. Or call between 9:00 a.m and 08:00 p.m. ET, Monday through Friday.</p>

            <div class="d-flex align-items-center gap-2 mb-3">
              <i class="bx bx-map-pin text-blue fs-5"></i>
              <div class="mb-0">Cerme, Gresik, Jawa Timur</div>
            </div>
            <div class="d-flex align-items-center gap-2 mb-3">
              <i class="bx bx-phone-call text-blue fs-5"></i>
              <div class="mb-0">+62 877-5347-7508</div>
            </div>
            <div class="d-flex align-items-center gap-2 mb-3">
              <i class="bx bx-envelope text-blue fs-5"></i>
              <div class="mb-0">ariflaksaa@gmail.com</div>
            </div>
            <div class="d-flex align-items-center gap-2 mb-3">
              <i class="bx bx-globe text-blue fs-5"></i>
              <div class="mb-0">ariflaksono.com</div>
            </div>
          </div>
          <div class="col-md-5">
            <form action="https://www.instagram.com/laksa_ra/" target="_blank" name="contact" onsubmit="return validateForm()">
              <div class="form-group">
                <label for="Name">Nama lengkap</label>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control rounded-0 mb-2"
                required minlength="5" autocomplete="off"/>
              </div>
              <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" class="form-control rounded-0 mb-2" required
                />
              </div>
              <textarea name="body" id="body" placeholder="Message" cols="30" rows="3" class="form-control round mb-3" required></textarea>

              <button class="btn-blue w-100 rounded-0">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>



    <!-- Footer -->
    <footer class="py-3">
      <div class="container">
        <p class="text-white fs-7 mb-0">Copyright &copy; 2023 Muhammad Shalahuddin Arif Laksono. All Right Reserved
        <span><a href="{{ url('/tugas1') }}" target="a_blank" ttext-decoration: none >| Tugas 1 Linkree </a></span>
        <span><a href="{{ url('/tugas2') }}" target="a_blank" ttext-decoration: none >| Tugas 2 Replika layout </a></span>
        <span><a href="https://drive.google.com/drive/folders/1JeM2vtlCxkI4s0nESNm13v_nMMVx06y4?usp=sharing" target="a_blank" ttext-decoration: none >| Tugas 3 Bootstrap Collapse </a></span>
        <span><a href="{{ url('/materi1week1') }}" target="a_blank" ttext-decoration: none >| Materi Hello world </a></span>
        <span><a href="{{ url('/materi2week1') }}" target="a_blank" ttext-decoration: none >| Materi Pembagian Paragraf </a></span>
        <span><a href="{{ url('/materi3week1') }}" target="a_blank" ttext-decoration: none >| Materi Pindah halaman </a></span>
        <span><a href="{{ url('/materi4week1') }}" target="a_blank" ttext-decoration: none >| Materi mengenai penggunaan gambar melalui link </a></span>
        <span><a href="{{ url('/materi5week1') }}" target="a_blank" ttext-decoration: none >| Materi HTML dan CSS </a></span>
        <span><a href="{{ url('/materi1week2') }}" target="a_blank" ttext-decoration: none >| Materi Responsive </a></span>
        <span><a href="{{ url('/materi2week2') }}" target="a_blank" ttext-decoration: none >| Materi Validasi </a></span>
        <span><a href="{{ url('/materijs') }}" target="a_blank" ttext-decoration: none >| Materi Validasi dengan Javascript</a></span>
    </p>
      </div>
    </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
   <script>
    var swiper = new Swiper(".portofolio-swiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      navigation:{
        nextEl: ".btn-prev",
        prevEl: ".btn-next",
      },
      breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 3,
      spaceBetween: 30
    },
},
});
  </script>
  <script>
    function validateForm() {
    var nameField = document.getElementById('name');
    var nameValue = nameField.value;

    var letters = /^[A-Za-z\s]+$/; // Pola regex untuk memeriksa huruf dan spasi

    if (!nameValue.match(letters)) {
        alert("Nama harus berisi huruf saja!");
        return false;
    }

    return true;
}

</script>
</body>
</html>
