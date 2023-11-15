<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Petil - Compras</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #D66483;">

 <!-- ======= Header ======= -->
 <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <a href="index.html"><h1><img src="assets/img/Petil Logo.png" alt=""></h1></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto active" href="{{ route ('index') }}"><img src="assets/img/homeclaro.png" alt=""></a></li>
                    <li><a class="nav-link scrollto" href="{{ route ('compras') }}"><img src="assets/img/carrinhoescuro.png" alt=""></a></li>
                    <li>
                        <a class="nav-link scrollto" href="{{ route ('agendamento') }}"><img src="assets/img/cruzclara.png" alt=""></a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="{{ route ('pets') }}"><img src="assets/img/petclaro.png" alt=""></a>
                    </li>
                <li><a data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;"><i class="bi bi-person-circle"></i></a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->
  <main id="portfolio" class="portfolio" style="padding-top: 70px; padding-bottom:70px;">
      <div class="container">

          <div class="section-title">
              <h2 style="font-family: Blogger;">Compras</h2>
              <p>Tudo de melhor qualidade para seu bichinho!</p>
          </div>

          <div class="row">
              <div class="col-lg-12">
                  <ul id="portfolio-flters">
                      <li data-filter="*" class="filter-active">Tudo</li>
                      <li data-filter=".filter-app">Acessórios</li>
                      <li data-filter=".filter-card">Brinquedos</li>
                      <li data-filter=".filter-web">Comidas</li>
                  </ul>
              </div>
          </div>

          <div class="row portfolio-container">

              <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                  <div class="portfolio-wrap">
                      <figure>
                          <img src="assets/img/img1.png" class="img-fluid" alt="">
                          <a href="assets/img/img1.png" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox"><i class="bx bx-plus"></i></a>
                          <a href="" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
                      </figure>

                      <div class="portfolio-info">
                          <h4><a href="">Coleira preta</a></h4>
                          <p style="color: black;">R$ 15,52</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                      <figure>
                          <img src="assets/img/img2.png" class="img-fluid" alt="">
                          <a href="assets/img/img2.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" ><i class="bx bx-plus"></i></a>
                          <a href="" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
                      </figure>

                      <div class="portfolio-info">
                          <h4><a href="">Bolinha</a></h4>
                          <p style="color: black;">R$ 90,99</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.2s">
                  <div class="portfolio-wrap">
                      <figure>
                          <img src="assets/img/img3.jpg" class="img-fluid" alt="">
                          <a href="assets/img/img3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" ><i class="bx bx-plus"></i></a>
                          <a href="" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
                      </figure>

                      <div class="portfolio-info">
                          <h4><a href="">Caminha</a></h4>
                          <p style="color: black;">R$ 105,99</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp">
                  <div class="portfolio-wrap">
                      <figure>
                          <img src="assets/img/img4.png" class="img-fluid" alt="">
                          <a href="assets/img/img4.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" ><i class="bx bx-plus"></i></a>
                          <a href="" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
                      </figure>

                      <div class="portfolio-info">
                          <h4><a href="">Ração DuPet</a></h4>
                          <p style="color: black;">R$22,22</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                      <figure>
                          <img src="assets/img/img5.png" class="img-fluid" alt="">
                          <a href="assets/img/img5.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" ><i class="bx bx-plus"></i></a>
                          <a href="" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
                      </figure>

                      <div class="portfolio-info">
                          <h4><a href="">Ração Dog Chow</a></h4>
                          <p style="color: black;">R$32,22</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                  <div class="portfolio-wrap">
                      <figure>
                          <img src="assets/img/img6.png" class="img-fluid" alt="">
                          <a href="assets/img/img6.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" ><i class="bx bx-plus"></i></a>
                          <a href="" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
                      </figure>

                      <div class="portfolio-info">
                          <h4><a href="">Sachê Whiskas</a></h4>
                          <p style="color: black;">R$25,69</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                  <div class="portfolio-wrap">
                      <figure>
                          <img src="assets/img/img7.png" class="img-fluid" alt="">
                          <a href="assets/img/img7.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" ><i class="bx bx-plus"></i></a>
                          <a href="" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
                      </figure>

                      <div class="portfolio-info">
                          <h4><a href="">Bola túnel</a></h4>
                          <p style="color: black;">R$ 35,99</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                      <figure>
                          <img src="assets/img/img8.png" class="img-fluid" alt="">
                          <a href="assets/img/img8.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" ><i class="bx bx-plus"></i></a>
                          <a href="" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
                      </figure>

                      <div class="portfolio-info">
                          <h4><a href="">Sanduíche</a></h4>
                          <p style="color: black;">R$ 10,99</p>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.2s">
                  <div class="portfolio-wrap">
                      <figure>
                          <img src="assets/img/img9.png" class="img-fluid" alt="">
                          <a href="assets/img/img9.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" ><i class="bx bx-plus"></i></a>
                          <a href="" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
                      </figure>

                      <div class="portfolio-info">
                          <h4><a href="">Mordedor</a></h4>
                          <p style="color: black;">R$ 15,80</p>
                      </div>
                  </div>
              </div>

          </div>

      </div>
    </main>
   <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius: 50px;">
        <div class="modal-body">
            <div class="row">
                <div class="col text-center">
                    <h1 style="font-family: Blogger; color: #D66483;">Login</h1>
                    <input class="custom-input" type="text" placeholder="E-mail:">
                    <input class="custom-input" type="password" placeholder="Senha:">
                    <button class="custom-button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
                </div>
                <div class="col text-center">
                    <h1 style="font-family: Blogger; color: #D66483;">Cadastro</h1>
                    <input class="custom-input" type="text" placeholder="E-mail:">
                    <input class="custom-input" type="text" placeholder="Confirme seu e-mail:">
                    <input class="custom-input" type="password" placeholder="Senha:">
                    <input class="custom-input" type="password" placeholder="Confirme sua senha:">
                    <button class="custom-button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cadastrar</button>
                </div>
            </div>
        
        </div>
      </div>
    </div>
  </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <p><i class="bi bi-geo-alt"></i>     Av. Dr. Carlindo de S Dantas, 101, Caicó - RN, 59300-000</p>
                <p><a href="https://www.instagram.com/"><i class="bbi bi-instagram" style="color: #fff;"></a></i>     petil.care@hotmail.com</p>
                <p><i class="bi bi-envelope"></i>     @petil</p>
                <p><i class="bi bi-telephone"></i>     3434-3434</p>
                <div class="copyright">
                    &copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>