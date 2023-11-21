<?php
function database()
{
  return new SQLite3("db.sqlite");
}

$conn = database();

$conn->exec(
  "CREATE TABLE IF NOT EXISTS respostas (
      id INTEGER PRIMARY KEY NOT NULL,
      bloco_1_q1 LONGTEXT,

      bloco_2_q1 LONGTEXT,
      bloco_2_q2 LONGTEXT,

      bloco_3_q1 LONGTEXT,
      bloco_3_q2 LONGTEXT,

      bloco_4_q1 LONGTEXT 
    )
  "
);

$conn->exec(
  "INSERT INTO respostas(bloco_1_q1,bloco_2_q1,bloco_2_q2,bloco_3_q1,bloco_3_q2,bloco_4_q1) VALUES(
    '{$_POST['bloco_1_q1']}',
    '{$_POST['bloco_2_q1']}',
    '{$_POST['bloco_2_q2']}',
    '{$_POST['bloco_3_q1']}',
    '{$_POST['bloco_3_q2']}',
    '{$_POST['bloco_4_q1']}'
    )"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feedbacks</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https: //fonts.googleapis.com/css2? family= Lora & display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="../index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="" style="border-radius: 30px;">
        <h1>Little Life</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a href="../desenvolvedoras.html">Desenvolvedoras</a></li>
          <li><a href="../sobre.html">Sobre</a></li>
          <li><a href="../index.html">Contato</a></li>
          <li class="dropdown"><a href="#services"><span>Doenças</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="../index.html ">Bacterioses</a></li>
              <li><a href="../index.html ">Viroses</a></li>
              <li><a href="../index.html ">Protozoses</a></li>
              <li><a href="../index.html ">Micoeses</a></li>
            </ul>
          </li>

        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->


  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Obrigado pela sua resposta!</h2>
          <p>A equipe Little Life agradece.
          </p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="../assets/img/logo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>

    </div>
    </div>
    </div>

    </div>
  </section>




  <footer id="footer" class="footer" style="margin-top: 80px;">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Little Life</span>
          </a>
          <p style="font-family: Montserrat">Um site feito por jovens para ajudar os pais.</p>
          <div class="social-links d-flex mt-4">
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Links Úteis</h4>
          <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../sobre.html">Sobre</a></li>
            <li><a href="../contact">Contato</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Colaboradores</h4>
          <ul>
            <li><a href="desenvolvedoras.html #desenvolvedoras">Stephanny Fladja</a></li>
            <li><a href="desenvolvedoras.html #desenvolvedoras">Mariana Freitas</a></li>
            <li><a href="desenvolvedoras.html #desenvolvedoras">Jeciane Araújo</a></li>

          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contato</h4>
          <p>
            S/N RN-288 IFRN <br>
            Caicó, 59300-000, Rio Grande do Norte<br>
            Brasil <br><br>
            <strong>Telefone:</strong> 3422-1920<br>
            <strong>Email:</strong> littlelife@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Little Life</span></strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>