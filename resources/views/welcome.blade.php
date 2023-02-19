<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Surabaya</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
  </head>
  <body>
    <nav>
      <div class="layout">
        <div class="logo">
          <a href=""><img src="{{ asset('assets/logo-white.png') }}" class="putih" /></a>
          <a href=""><img src="{{ asset('assets/logo-black.png') }}" class="hitam" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul class="menuzord-menu menuzord-right">
            <li class="active"><a href="index.html">HOME</a></li>
            <li><a href="destinasi.html">DESTINASI</a></li>
            <li><a href="#">EVENT</a></li>
            <li><a href="#">AKOMODASI</a></li>
            <li><a href="#">INFORMASI</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="{{ asset('assets') }}/myVideo.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h2>WISATA SURABAYA HITS</h2>
          <h3>You will love every corner of it</h3>
          <span class="slidein"
            >Let's explore on of the biggest city in Indonesia with famous name
            called City of Heroes</span
          >
        </div>
      </header>
      <!-- section bagian icon -->
      <div>
        <section class="section-segment pt-3">
          <div class="container">
            <div class="col-10 mx-auto">
              <div class="row justify-content-center">
                <div class="col-3 text-center my-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100"
                    height="100"
                    fill="currentColor"
                    class="bi bi-calendar-event"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"
                    />
                    <path
                      d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"
                    />
                  </svg>
                  <h6 class="font-weight-bold my-2">Event</h6>
                </div>
                <div class="col-3 text-center my-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100"
                    height="100"
                    fill="currentColor"
                    class="bi bi-map"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"
                    />
                  </svg>
                  <h6 class="font-weight-bold my-2">Peta</h6>
                </div>
                <div class="col-3 text-center my-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100"
                    height="100"
                    fill="currentColor"
                    class="bi bi-egg-fried"
                    viewBox="0 0 16 16"
                  >
                    <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    <path
                      d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z"
                    />
                  </svg>
                  <h6 class="font-weight-bold my-2">Kuliner</h6>
                </div>
                <div class="col-3 text-center my-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100"
                    height="100"
                    fill="currentColor"
                    class="bi bi-cart4"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"
                    />
                  </svg>
                  <h6 class="font-weight-bold my-2">Shopping</h6>
                </div>
                <div class="col-3 text-center my-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100"
                    height="100"
                    fill="currentColor"
                    class="bi bi-cloud-sun"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M7 8a3.5 3.5 0 0 1 3.5 3.555.5.5 0 0 0 .624.492A1.503 1.503 0 0 1 13 13.5a1.5 1.5 0 0 1-1.5 1.5H3a2 2 0 1 1 .1-3.998.5.5 0 0 0 .51-.375A3.502 3.502 0 0 1 7 8zm4.473 3a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z"
                    />
                    <path
                      d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"
                    />
                  </svg>
                  <h6 class="font-weight-bold my-2">Outdoor</h6>
                </div>
                <div class="col-3 text-center my-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100"
                    height="100"
                    fill="currentColor"
                    class="bi bi-buildings"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z"
                    />
                    <path
                      d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z"
                    />
                  </svg>
                  <h6 class="font-weight-bold my-2">Hotel</h6>
                </div>
                <div class="col-3 text-center my-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100"
                    height="100"
                    fill="currentColor"
                    class="bi bi-bank"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"
                    />
                  </svg>
                  <h6 class="font-weight-bold my-2">Heritage</h6>
                </div>
                <div class="col-3 text-center my-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="100"
                    height="100"
                    fill="currentColor"
                    class="bi bi-chat-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                    />
                    <path
                      d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"
                    />
                  </svg>
                  <h6 class="font-weight-bold my-2">FAQ</h6>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- section bagian icon -->

      <!-- section bagian 360-->
      <div>
        <section class="section-explore360 py-3">
          <div class="py-4">
            <div class="container">
              <div class="row">
                <div class="col-8">
                  <h4 class="title-highlight">
                    <div style="color: #3161fde8">Explore 360</div>
                    <div style="color: #0d7530">Wisata Surabaya</div>
                  </h4>
                </div>
                <div class="col-4">
                  <div class="text-right">
                    <img
                      src="{{ asset('assets') }}/360icon.png"
                      class="img-fluid text-right img-icon"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <div class="container_video_overlay">
                    <video
                      class="w-100 video-front"
                      autoplay
                      muted
                      loop
                      id="myVideo"
                      class="w-100"
                      style="object-fit: cover"
                    >
                      <source src="{{ asset('assets') }}/Wisata.mp4" type="video/mp4" />
                    </video>
                    <div class="video_overlay">
                      <a
                        href="http://virtualtourism.surabaya.go.id"
                        class="btn btn-white btn-primary-shadow"
                        target="_blank"
                      >
                        <h6 class="font-weight-bold mb-0 video_text_explore360">
                          VISIT <br />
                          virtualtourism.surabaya.go.id
                        </h6>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- section bagian 360 -->
        <!-- section sub menu -->
        <section class="section-article py-3">
          <div class="py-6">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="text-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="150"
                      height="150"
                      fill="currentColor"
                      class="bi bi-signpost-split"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"
                      />
                    </svg>
                    <h3 class="title-highlight-dark text-primary">
                      Start Your Best <br />
                      Journey In Surabaya
                    </h3>
                  </div>
                </div>
              </div>
              <div class="row my-4">
                <div class="col-md-6 mb-2">
                  <div class="row">
                    <div class="col-md-12 my-4">
                      <a class="text-dark w-100">
                        <div
                          class="card card-img"
                          style="
                            box-shadow: none;
                            border: none;
                            border-radius: 20px;
                          "
                        >
                          <div class="img-hover">
                            <img
                              src="{{ asset('assets') }}/Gedung.jpg"
                              class="img-fluid card-img-top img-1"
                            />
                          </div>
                        </div>
                        <div class="text-dark py-3">
                          <div class="mb-2">
                            <span> History &amp; Heritage </span>
                          </div>
                          <h5 class="font-weight-bold">
                            GEDUNG ESCOMPTO (Bank Mandiri KCP Kembang Jepun)
                          </h5>
                          <div class="mb-2">Jl. Kembang Jepun No 180</div>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-12 my-4">
                      <div
                        class="card card-img"
                        style="
                          box-shadow: none;
                          border: none;
                          border-radius: 20px;
                        "
                      >
                        <div class="img-hover">
                          <img
                            src="{{ asset('assets') }}/Piala Walikota.png"
                            class="img-fluid card-img-top img-2"
                          />
                        </div>
                      </div>
                      <div class="text-dark py-3">
                        <div class="mb-2">
                          <span> Event </span>
                        </div>
                        <h5 class="font-weight-bold">
                          Piala Walikota Tournament Skateboard
                        </h5>
                        <div class="mb-2">
                          Skate &amp; BMX Park Ketabang (Parkir Timur Delta
                          Plaza) | Jl. Pemuda No. 31-37 (Jl. Plaza Boulevard)
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="row">
                    <div class="col-md-12 my-4">
                      <div
                        class="card card-img"
                        style="
                          box-shadow: none;
                          border: none;
                          border-radius: 20px;
                        "
                      >
                        <div class="img-hover">
                          <img
                            src="{{ asset('assets') }}/hotel.jpg"
                            class="img-fluid card-img-top img-3"
                          />
                        </div>
                      </div>
                      <div class="text-dark py-3">
                        <div class="mb-2">
                          <span> Hotel </span>
                        </div>
                        <h5 class="font-weight-bold">
                          Hotel JW Marriott Surabaya
                        </h5>
                        <div class="mb-2">Jl. Embong Malang No.85 - 89</div>
                      </div>
                    </div>
                    <div class="col-md-12 my-4">
                      <div
                        class="card card-img"
                        style="
                          box-shadow: none;
                          border: none;
                          border-radius: 20px;
                        "
                      >
                        <div class="img-hover">
                          <img
                            src="{{ asset('assets') }}/balai.jpg"
                            class="img-fluid card-img-top img-4"
                          />
                        </div>
                      </div>
                      <div class="text-dark py-3">
                        <div class="mb-2">
                          <span> History &amp; Heritage </span>
                        </div>
                        <h5 class="font-weight-bold">Balai Pemuda</h5>
                        <div class="mb-2">Jl. Gubernur Suryo No.15</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- section sub menu-->
      </div>

      <!-- footer -->
      <footer id="contact">
        <div class="layout">
          <div>
            <h5>FIND US</h5>
            Tourism Information Center Jl. Gubernur Suryo 15
            <a
              href="#"
              class="btn btn-primary active"
              role="button"
              data-bs-toggle="button"
              aria-pressed="true"
              >KONTAK KAMI</a
            >
          </div>
          <div>
            <h5>CONTACT US</h5>
            Dinas Kebudayaan, Kepemudaan dan Olahraga serta Pariwisata Kota
            Surabaya Kota Surabaya
          </div>
          <div>
            <h5>OUR OTHER SITES</h5>
            <div class="opsi">
              <a>Disbudporapar Surabaya</a>
              <a>360° Surabaya</a>
              <a>Tiket Wisata Surabaya</a>
              <a>Katalog Museum Surabaya</a>
              <a> Bangga Surabaya</a>
            </div>
          </div>
          <div>
            <h5>WISATA SURABAYA</h5>
          </div>
        </div>
      </footer>
    </div>
    <!-- source -->
    <script src="javascript.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
