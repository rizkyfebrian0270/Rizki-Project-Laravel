<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link 
    rel="stylesheet" 
    href="assets/style/style.css" />
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <title>Rizki Profile</title>
  </head>
  <body>
    <ul class="nav justify-content-center bg-light fixed-top">
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"> -->
        <a
          class="buttonToggle"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasWithBothOptions"
          aria-controls="offcanvasWithBothOptions"
          ><i class="fas fa-bars toggleSlide"></i
        ></a>

        <div
          class="offcanvas offcanvas-start"
          data-bs-scroll="true"
          tabindex="-1"
          id="offcanvasWithBothOptions"
          aria-labelledby="offcanvasWithBothOptionsLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
              Please select a menu :
            </h5>
            <button
              type="button"
              class="btn-close text-reset"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul>
              <li>
                <a class="nav-link" href="#Biodata">Biodata</a>
              </li>
              <li>
                <a class="nav-link" href="#Kelebihan">Kelebihan</a>
              </li>
              <li>
                <a class="nav-link" href="#Kekurangan">Kekurangan</a>
              </li>
              <li>
                <a class="nav-link" href="#Skill">Skill</a>
              </li>
              <li>
                <a class="nav-link" href="#Contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- </a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link initial" href="#" aria-current="page">Rizki</a>
      </li>

      <li class="nav-item-item">
        <a class="nav-link" href="#Biodata">Biodata</a>
      </li>
      <li class="nav-item-item">
        <a class="nav-link" href="#Kelebihan">Kelebihan</a>
      </li>
      <li class="nav-item-item">
        <a class="nav-link" href="#Kekurangan">Kekurangan</a>
      </li>
      <li class="nav-item-item">
        <a class="nav-link" href="#Skill">Skill</a>
      </li>
      <li class="nav-item-item">
        <a class="nav-link" href="#Contact">Contact</a>
      </li>
    </ul>
      <div class="all-body-cover">
        <img
          width="200px"
          src="assets/image/Rizki2.jpg"
          class="img-thumbnail rounded-circle mx-auto d-block"
          alt="..."
        />
        <div class="nama">
          <h4 class="text-center fw-bold">Rizki Febrian Putra Hertantyo</h4>
          <h5 class="text-center">Pelajar SMK Telkom Purwokerto</h5>
        </div>
      <svg
        class="waves"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,160L48,149.3C96,139,192,117,288,144C384,171,480,245,576,272C672,299,768,277,864,250.7C960,224,1056,192,1152,186.7C1248,181,1344,203,1392,213.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
      <div class="firstContainer">
        <div class="content">
          <h2
            data-aos="fade-up"
            data-aos-duration="800"
            id="Biodata"
            class="nameHeading fw-bold"
          >
              BIODATA
            </h2>
              <div class="container text-center">
                <div class="row">
                  <div
                    data-aos="fade-up"
                    data-aos-duration="800"
                    class="col-sm-4 mb-2"
                  >
                  Hallo... nama saya Rizki Febrian Putra Hertantyo biasa dipanggil Rizki. Saya lahir di Banyumas pada tanggal 24 Februari 2008. Saya merupakan anak kedua dari dua bersaudara, saya mempunyai kakak perempuan yang bernama Tariska yang biasanya saya panggil Mba Riska. Alamat rumah saya di Perum Puri Banyumas No. 60 Rt 01 Rw 04 Kedunguter, Banyumas.
                  </div>
                  <div
                data-aos="fade-up"
                data-aos-duration="800"
                class="col-sm-4 mb-2"
              >
                <h4 class="subNameHeading fw-bold">EDUCATION</h4>
                <div class="education">
                  <!-- Button trigger modal -->
                  <p class="startEnd">Started on Jul 2012</p>
                  <button
                    type="button"
                    class="btn btn-primary itemEdu"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal1"
                  >
                    TK Aisyah Sudagaran
                  </button>

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="exampleModal1"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Pengalaman
                          </h5>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          Saya pertama kali masuk TK itu sekitar tahun 2012. Saya sekolah di TK Aisyah Sudagaran Banyumas sekitar 2 tahun, di TK saya mengalami beberapa pengalaman tetapi hanya 1 pengalaman yang masih saya ingat sampai saat ini. Pengalaman yang masih saya ingat itu saya kena bullying oleh teman saya sendiri yang kalau tidak salah ingat itu namanya Daus, saya selalu dijahili sama dia sampai saya nangis, pada saat itu teman-teman saya yang lainnya hanya melihat saya tanpa mencoba membantu saya ataupun melerai. Setelah saya dibully dan orang tua saya melaporkannya ke guru, dia pun langsung dikelurkan atau keluar dari TK itu. Semenjak Daus keluar, kehidupan saya di TK menjadi sangat aman dan tenang dan tidak ada orang yang ngejahilin saya lagi.
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                          >
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="startEnd">Finished on Jun 2014</p>
                  <i class="fas fa-arrow-circle-down itemEdu"></i>
                  <!-- <i class="fas fa-arrow-circle-down itemEdu"></i> -->
                  <p class="startEnd">Started on Jul 2014</p>
                  <button
                    type="button"
                    class="btn btn-primary itemEdu"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal2"
                  >
                    SDN 01 Sudagaran
                  </button>

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="exampleModal2"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Pengalaman
                          </h5>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          Saya mulai masuk SD itu sekitar tahun 2014, SD saya SD Negeri 1 Sudagaran, untuk pengalaman di SD tidak terlalu banyak karena banyak pengalaman yang sudah saya lupakan. Tetapi, saat kelas 2 SD saya pernah berantem dengan teman saya karena hal sepele seperti berebut tempat duduk, selain itu pengalaman saya yang lainnya di SD mungkin sisanya yang baik dan membahagiakan seperti saya pernah mengikuti karnaval. Tetapi, semua hal yang membahagikan ini harus hilang karena pandemi yang melanda pada tahun 2020 yang dimana pada saat itu saya kelas 6 SD yang pada umumnya akan melaksanakan Ujian Nasional untuk melanjutkan ke jenjang berikutnya, tetapi terpaksa ditunda karena penyebaran Covid-19 yang semakin parah.
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                          >
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="startEnd">Finished on Jun 2020</p>
                  <i class="fas fa-arrow-circle-down itemEdu"></i>
                  <!-- <i class="fas fa-arrow-circle-down itemEdu"></i> -->
                  <p class="startEnd">Started on Jul 2020</p>
                  <button
                    type="button"
                    class="btn btn-primary itemEdu"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal3"
                  >
                    SMPN 01 Banyumas
                  </button>

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="exampleModal3"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Pengalaman
                          </h5>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          Saya masuk SMP itu pada tahun 2020, saya memilih SMP Negeri 1 Banyumas karena dekat dengan rumah. Pada tahun yang sama seluruh dunia di gemparkan dengan adanya pandemi Covid-19, yang mengakibatkan seluruh kegiatan belajar mengajar di sekolah menjadi belajar mengajar di rumah. Jadi pengalaman saya waktu SMP terbilang cukup sedikit karena kita baru mulai masuk sekolah secara full time itu kelas 9 dimana 1 tahun lagi kita sudah lulus dari SMP dan melanjutkan ke jenjang berikutnya. Selama 1 tahun di kelas 9 saya hanya mendapatkan beberapa pengalaman saja seperti kita semua bisa bekerja-sama dalam membuat pameran.
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                          >
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="startEnd">Finished on Jun 2023</p>
                  <i class="fas fa-arrow-circle-down itemEdu"></i>
                  <!-- <i class="fas fa-arrow-circle-down itemEdu"></i> -->
                  <p class="startEnd">Started on Jul 2023</p>
                  <button
                    type="button"
                    class="btn btn-primary itemEdu"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal4"
                  >
                    SMK Telkom Purwokerto
                  </button>

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="exampleModal4"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Pengalaman
                          </h5>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          On Going
                        </div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                          >
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  <div data-aos="fade-up" data-aos-duration="800" class="col-sm-4">
                    Hobi saya terbilang cukup banyak seperti bermain game, Mendengarkan musik (Genre Pop), Nonton JKT48, Jalan-jalan, Modif motor, Mendesign apapun, Menabung, Mengoleksi barang, Dan masih banyak lagi.
                  </div>
                </div>
              </div>
                <div class="secondContainer">
                  <h2
                    data-aos="fade-up"
                    data-aos-duration="800"
                    id="Kelebihan"
                    class="kelebihan fw-bold"
                  >
                    KELEBIHAN
                  </h2>
                  <div class="container text-center">
                    <div class="row">
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            Kelebihan
                          </div>
                          <div class="card-body">
                            <p class="card-text">Tulisan Bagus dan Rapih</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            Kelebihan
                          </div>
                          <div class="card-body">
                            <p class="card-text">Tidak Gaptek Teknologi/Selalu Mengikuti Perkembangan Teknologi</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            Kelebihan
                          </div>
                          <div class="card-body">
                            <p class="card-text">Mudah Bergaul</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            Kelebihan
                          </div>
                          <div class="card-body">
                            <p class="card-text">Mudah Mengingat Jalan/Alamat</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <svg
                  class="wavesss"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 1440 320"
                >
                  <path
                    fill="#ffffff"
                    fill-opacity="1"
                    d="M0,0L48,53.3C96,107,192,213,288,234.7C384,256,480,192,576,181.3C672,171,768,213,864,245.3C960,277,1056,299,1152,298.7C1248,299,1344,277,1392,266.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                  ></path>
                </svg>
                <div class="thirdContainer">
                  <h2
                    data-aos="fade-up"
                    data-aos-duration="800"
                    id="Kekurangan"
                    class="kekurangan fw-bold"
                  >
                    KEKURANGAN
                  </h2>
                  <div class="container text-center">
                    <div class="row">
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            Kekurangan
                          </div>
                          <div class="card-body">
                            <p class="card-text">Mata Saya Mines (5,75)</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            Kekurangan
                          </div>
                          <div class="card-body">
                            <p class="card-text">Belibet Saat Berbicara</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            Kekurangan
                          </div>
                          <div class="card-body">
                            <p class="card-text">Suka Menunda Tugas</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            Kekurangan
                          </div>
                          <div class="card-body">
                            <p class="card-text">Orangnya Introvert</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <svg
                  class="botWaves"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 1440 320"
                >
                  <path
                    fill="#ffffff"
                    fill-opacity="1"
                    d="M0,64L48,101.3C96,139,192,213,288,224C384,235,480,181,576,181.3C672,181,768,235,864,229.3C960,224,1056,160,1152,138.7C1248,117,1344,139,1392,149.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
                  ></path>
                </svg>
                <div class="fourthContainer">
                  <h2
                    data-aos="fade-up"
                    data-aos-duration="800"
                    id="Skill"
                    class="skill fw-bold"
                  >
                    SKILL
                  </h2>
                  <div class="container text-center">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="card" style="width: 18rem;">
                          <img src="assets/image/Gamer.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Bermain Game FPS</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card" style="width: 18rem;">
                          <img src="assets/image/Motor.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Mengendarai Motor Kopling</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card" style="width: 18rem;">
                          <img src="assets/image/Mengcoding.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <p class="card-text">Coding</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <svg
                  class="wavesContact"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 1440 320"
                >
                  <path
                    fill="#ffffff"
                    fill-opacity="1"
                    d="M0,32L60,58.7C120,85,240,139,360,133.3C480,128,600,64,720,69.3C840,75,960,149,1080,154.7C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                  ></path>
                </svg>
                <div class="fivethContainer">
                  <h2 id="Contact" class="contactMe fw-bold">CONTACT</h2>
                  <div class="container">
                    <div class="linkSosmed">
                      <a class="itemSosmed" href="https://www.instagram.com/rizkifebrian_27?utm_source=qr&r=nametag"
                        ><i class="fab fa-instagram"></i
                      ></a>
                      <a class="itemSosmed" href="https://www.tiktok.com/@rizki_febrian_?_t=8hNcLrTYinK&_r=1"
                        ><i class="fab fa-tiktok"></i
                      ></a>
                      <a class="itemSosmed" href="https://youtube.com/@rizkygamer2402?si=t57vxgqTQZjrMujF"
                        ><i class="fab fa-youtube"></i
                      ></a>
                      <a class="itemSosmed" href="https://x.com/RizkyGamer27?t=Mlj4PhaW4DAn4mDxpne_VQ&s=09"
                        ><i class="fa-brands fa-twitter"></i>
                      </a>
                    </div>
                    <p class="text-center">Created by <a href="#">Rizki Febrian</a></p>
                  </div>
                </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>