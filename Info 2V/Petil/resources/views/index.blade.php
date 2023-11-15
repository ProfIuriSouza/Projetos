<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Petil</title>
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

<body>

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
                    <li><a class="nav-link scrollto active" href="{{ route ('index') }}"><img src="assets/img/homeescuro.png" alt=""></a></li>
                    <li><a class="nav-link scrollto" href="{{ route ('compras') }}"><img src="assets/img/carrinhoclaro.png" alt=""></a></li>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="row" style="width: 100%;">
            <div class="col-md-6" style="display: flex;
            justify-content: center;
            align-items: center; text-align: center;">
                <img src="assets/img/cachorra.png" alt="" style="height: 400px; ">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center" style="text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <h1 class="home_cuide le" style="font-size: 70px;" id="cuides">CUIDE BEM DO SEU PET!</h1> 
                    <a href="{{ route ('agendamento')}}" style="width: 100%;"><button id="iniciar">INICIAR ATENDIMENTO</button></a>
                </div>
                
            </div>
        </div>
    </section>
    
  
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
    
  <!-- Button trigger modal -->

    
    
    <!-- End Hero -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg" style="background-color: #FFC2BB;">
            <div class="container-fluid">

                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center" style="padding: 0;">
                            <img src="assets/img/meiabola.png" alt="" class="img-fluid bola">
                        </div>
                    </div>
                </div>
                

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100" style="background-color: #D66483;">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <a href="https://api.whatsapp.com/send?phone=5584998158858" style="cursor: pointer;"><img src="assets/img/1.png" alt="" class="img-fluid"></a>
                                
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <a href="https://api.whatsapp.com/send?phone=5584998158858" style="cursor: pointer;"><img src="assets/img/2.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <a href="https://api.whatsapp.com/send?phone=5584998158858" style="cursor: pointer;"><img src="assets/img/3.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <a href="https://api.whatsapp.com/send?phone=5584998158858" style="cursor: pointer;"><img src="assets/img/4.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <a href="https://api.whatsapp.com/send?phone=5584998158858" style="cursor: pointer;"><img src="assets/img/5.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section --> <!-- Modal -->
  <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="formModalLabel">Avaliações</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
<!-- Em resources/views/seuformulario.blade.php -->
<form action="{{ route('avaliacao') }}" method="POST">
    @csrf

    <label for="usabilidade">Usabilidade:</label>
    <div>
        <input type="text" id="usabilidade" name="usabilidade" placeholder="Digite sua avaliação de usabilidade">
    </div>

    <label for="interface">Interface:</label>
    <div>
        <input type="text" id="interface" name="interface" placeholder="Digite sua avaliação da interface">
    </div>

    <label for="facilidade_de_uso">Facilidade de Uso:</label>
    <div>
        <input type="text" id="facilidade" name="facilidade" placeholder="Digite sua avaliação da facilidade de uso">
    </div>

    <label for="comentario">Comentários:</label>
    <div>
        <input type="text" id="comentario" name="comentario" placeholder="Deixe um comentário">
    </div>

    <button type="submit">Enviar Avaliação</button>
</form>

        </div>
      </div>
    </div>
  </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container py-4">

            <div class="me-md-auto text-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal" style="background-color: white;   width: 30%;
                text-align: center;
                background-color: #fff;
                color: #A34C63;
                height: 40px;
                border: 3px solid #A34C63;
                border-radius: 50px;
                font-weight: bolder;">
                    Avalie-nos
                  </button>
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