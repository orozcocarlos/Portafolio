<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';

session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Carlos Orozco</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicom/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicom/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicom/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicom/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicom/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicom/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicom/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicom/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicom/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicom/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicom/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicom/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicom/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicom/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/favicom/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



   <!-- reCAPTCHA Javascript -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- =======================================================
  * Template Name: Personal - v4.6.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="../">Carlos Orozco</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img loading="lazy" src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I am an <span>Electronics and Communications Engineer</span> from Ecuador</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Practical</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
                       
        <a href="https://www.linkedin.com/in/carlos-orozco-64892021/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.youtube.com/channel/UCgR2CZLCClCdTeo_l5W53eQ" class="linkedin" target="_blank"><i class="bi bi-youtube"></i></a>
        <a href="https://github.com/corozco6489" class="linkedin" target="_blank"><i class="bi bi-github"></i></a>
        <a href="https://wa.me/5930983592690" class="linkedin" target="_blank"><i class="bi bi-whatsapp"></i></a>
        
      </div>
      <!-- <br>
      <br>
      <div class="btn">
        <a href="CV2.pdf"  class="btn btn-success" download="CV_OROZCO.pdf">Download CV</a>
      </div> -->
      

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img loading="lazy" src="assets/img/carlos-modified.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Ingeniero  &amp; Desarrollador</h3>
          <p class="fst-italic">
            Ingeniero en Electrónica y Comunicaciones graduado de la Universidad Técnica de Ambato.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>8 Sept 1996</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>thingslearned.rf.gd</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+593 983592690</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Ambato, Ecuador</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>25</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Ingeniero</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>corozco6489@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Disponible</span></li>
              </ul>
            </div>
          </div>
          <p>
            Soy un estudiante de ingeniería en Electrónica y
Comunicaciones, con ganas y motivación de
aprender cosas nuevas en el campo laboral. Me
considero una persona humilde con una alta
capacidad de aprendizaje rápido en cualquier
tarea de manera autodidactica. A continuación
veras mi experiencia y habilidades.

          </p>
          <br>
      <br>
      <div class="btn curriculum">
        <a href="CarlosOrozco.pdf"  class="btn btn-success" download="CarlosOrozco.pdf">Download CV</a>
      </div>
        </div>
      </div>

    </div><!-- End About Me -->

 

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">Proteus <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Matlab <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">LabVIEW <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">Python <i class="val">30%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">HTML , CSS <i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>CCNA</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>MIKROTIK</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Computadoras</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Diseño Web</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Bases de Datos</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Ciberseguridad</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Networking</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Programación</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Fibra Optica</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Cableado Estructurado</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Wireless networks</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Inteligencia Artificial</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->


  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>PRIMARIA</h4>
          
            <p><em>Escuela José Joaquín de Olmedo, Ambato, Ecuador</em></p>
            <p>UNIDAD EDUCATIVA JOSE JOAQUIN OLMEDO es una escuela de Educación Regular situada en la provincia de TUNGURAHUA, cantón de AMBATO en la parroquia de AMBATILLO</p>
            <a href="https://www.google.com/maps/dir//unidad+educativa+jose+joaquin+olmedo+ambato/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x91d381d67635e7bd:0x63d8e531e719c926?sa=X&ved=2ahUKEwizvqXlprzzAhVaTDABHYLxDh8Q9Rd6BAhTEAM" class="btn btn-success active" aria-current="page" target="_blank">Conocer</a>
          </div>
          <div class="resume-item">
            <h4>SECUNDARIA</h4>
          
            <p><em>Instituto Superior Tecnológico Docente "Guayaquil", Ambato, Ecuador</em></p>
            <p>Bachillerato Técnico en Electrónica de Consumo</p>
            <a href="https://www.google.com/maps/dir/-1.235665,-78.6682389/unidad+educativa+guayaquil+ambato/@-1.2443118,-78.6764942,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x91d38183c15286d3:0x9ff36d7b31fb778e!2m2!1d-78.6154018!2d-1.2581427" class="btn btn-success active" aria-current="page" target="_blank">Conocer</a>

          </div>
          <div class="resume-item">
            <h4>EDUCACION SUPERIOR</h4>
        
            <p><em>Universidad Técnica de Ambato, Ambato, Ecuador</em></p>
            <p>Título de Ingeniero en Electrónica y Comunicaciones otorgado por  la Universidad Técnica de Ambato.</p>
            <a href="https://uta.edu.ec/v4.0/" class="btn btn-success active" aria-current="page" target="_blank">Conocer</a>

          </div>
        </div>
        
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Electricista</h4>
         
            <p><em>Ambato, Ecuador </em></p>
            <p>
            <ul>
              <li>Instalación de medidores de luz eléctrica
              </li>
              <li>Instalaciones eléctricas residenciales y
                empresariales</li>
                <li>
                  Instalación de aparatos eléctricos

                </li>

            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Técnico de Computadoras</h4>
           
            <p><em>Prácticas Preprofesionales en Icono Sistemas</em></p>
            <p>
            <ul>
              <li>Mantenimiento y Armado de
                computadoras(software y hardware)</li>
                <li>Instalación de sistemas operativos</li>
                <li>Resolución de problemas de software y
                  hardware
                  </li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-laptop"></i></div>
            <h4><a href="">Web Design</a></h4>
            <p>Development of static pages and landing pages using html, css and javascript</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-laptop-code"></i></div>
            <h4><a href="">Development</a></h4>
            <p>Development of static pages and landing pages using html, css and javascript</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-microchip"></i></div>
            <h4><a href="">Digital Electronic</a></h4>
            <p>Research skills about the design and development of hardware (components such as integrated circuits, professional electronic boards, among others)</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-wifi"></i></div>
            <h4><a href="">Wifi</a></h4>
            <p>Configuration of routers and switches with the different routing protocols</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-users-cog"></i></div>
            <h4><a href="">IOT</a></h4>
            <p>Provide greater comfort, security, energy and communication to homes through an automation system</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-robot"></i></div>
            <h4><a href="">Robótica</a></h4>
            <p>Create artificial intelligence. It combines various disciplines such as mathematics and physics.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Arduino</li>
            <li data-filter=".filter-card">IOT</li>
            <li data-filter=".filter-web">Web</li>
            <li data-filter=".filter-matlab">Matlab</li>
            <li data-filter=".filter-php">CRUD-PHP</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img loading="lazy"  src="https://image.freepik.com/psd-gratis/plantilla-interfaz-whatsapp-maqueta-telefono-movil_106244-1495.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>ChatBot</h4>
              <br>
              <p>Arduino - Whatsapp</p>
              <br>
              <div class="portfolio-links">
                
                <a href="https://youtu.be/vqRQqrNxscw" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://la.mathworks.com/matlabcentral/mlc-downloads/downloads/daea137a-5cd3-485e-9855-ceef8b7ce951/8c87c747-d9db-4653-b2e8-893d4e4cc9b2/images/1617204293.PNG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Optical Character Recognition
              </h4>
              <br>
              <p> (OCR)</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://la.mathworks.com/matlabcentral/fileexchange/89654-optical-character-recognition-ocr?s_tid=srchtitle" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://www.youtube.com/watch?v=Ns0gigWsijE" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/things.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pagina WEB</h4>
              <br>
              <p>Web</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://corozco6489.github.io/thingslearned/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/thingslearned" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://images.unsplash.com/photo-1528752511608-fbec4b6ea67f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=776&q=80" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>ChatBot</h4>
              <br>
              <p>Arduino - Telegram</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://youtu.be/Vg7jWmY2d4s" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://github.com/corozco6489/telegram_nodejs_esp32cam" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-php">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/sensores.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Crud Sensores</h4>
              <br>
              <p>PHP-MYSQL</p>
              <br>
              <div class="portfolio-links">
               
                <a href="http://tabladinamicas.rf.gd/sensores/index.html" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/crud_sensores" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>


        
        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://la.mathworks.com/matlabcentral/mlc-downloads/downloads/b6086d6c-2c90-4677-99c2-83b59ec84502/2c24a7ad-410a-4af9-85cd-3ee766cd9b30/images/1618269106.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Códigos de Líneas
              </h4>
              <br>
              <p>Matlab Guide </p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://www.mathworks.com/matlabcentral/fileexchange/89461-codigos-de-lineas" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://www.youtube.com/watch?v=Ns0gigWsijE" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/screencapture-corozco6489-github-io-Bootstrap5Simple-2021-10-18-08_45_57.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bootstrap 5 Simple</h4>
              <br>
              <p>Web</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://corozco6489.github.io/Bootstrap5Simple/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/Bootstrap5Simple" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-php">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/dinamica.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tabla Dinamica</h4>
              <br>
              <p>PHP-MYSQL</p>
              <br>
              <div class="portfolio-links">
               
                <a href="http://tabladinamicas.rf.gd/tabla_dinamica/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/tabla_dinamica" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>




        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://images.unsplash.com/photo-1614846027182-cecfee3a427b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>GooGle Cloud</h4>
              <br>
              <p>mqtt-esp8266</p>
              <br>
              <div class="portfolio-links">
                
                <a href="https://youtu.be/DjXhDnkmuNo" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://github.com/Charles6489/esp8266-get" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://la.mathworks.com/matlabcentral/mlc-downloads/downloads/7544ce00-76bb-40dd-ae64-bdac9554629a/6e7e6cb0-aa24-47a7-a1a1-ed865e9ecee9/images/1616884439.PNG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Series de Fourier
              </h4>
              <br>
              <p>Matlab Guide </p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://la.mathworks.com/matlabcentral/fileexchange/89471-fourier-series" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://www.youtube.com/watch?v=A4pPMjUCpu4" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-php">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/login.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tabla Dinamica</h4>
              <br>
              <p>PHP-MYSQL</p>
              <h4>Login:Admin</h4>
              <h4>Password:admin</h4>
              <br>
              <div class="portfolio-links">
               
                <a href="http://tabladinamicas.rf.gd/ejemplo_login_registro_main/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/ejemplo_login_registro" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>




        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/page1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Portafolio Ejemplo</h4>
              <br>
              <p>Web</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://corozco6489.github.io/Pagina1/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/Pagina1" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://image.freepik.com/psd-gratis/plantilla-banner-web-delicioso-menu-hamburguesas-comida_120329-1779.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web Tienda Food</h4>
              <br>
              <p>Web</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://corozco6489.github.io/food/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/food" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>



        
        <div class="col-lg-4 col-md-6 portfolio-item filter-php">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/automovil.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Registros Placas</h4>
              <br>
              <p>PHP-MYSQL</p>
        
              <br>
              <div class="portfolio-links">
               
                <a href="http://tabladinamicas.rf.gd/crud_html_javascritpt_php/index.html" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/crud_html_javascritpt_php" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://la.mathworks.com/matlabcentral/mlc-downloads/downloads/0926d5af-689c-4525-970f-ddc28ce62037/e742d0c9-67cc-41df-85fd-0960e97b6e38/images/1616884683.PNG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Transformada de Fourier
              </h4>
              <br>
              <p>Matlab Guide </p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://la.mathworks.com/matlabcentral/fileexchange/89476-fourier-transform" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://www.youtube.com/watch?v=mFPzV0_ZAaU" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://images.unsplash.com/photo-1558137623-ce933996c730?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=806&q=80" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Modbus</h4>
              <br>
              <p>Arduino - NodeRED</p>
              <br>
              <div class="portfolio-links">
                
                <a href="https://youtu.be/FHhumt2GADU" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://github.com/Charles6489/modbus_arduino_factory_io_nodered" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>




        <div class="col-lg-4 col-md-6 portfolio-item filter-php">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/agenda.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Registros Placas</h4>
              <br>
              <p>PHP-MYSQL</p>
        
              <br>
              <div class="portfolio-links">
               
                <a href="http://tabladinamicas.rf.gd/agenda/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/agenda" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>




        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://la.mathworks.com/matlabcentral/mlc-downloads/downloads/99531845-4005-4440-8ddb-0cc5104f4062/63b04383-fcaf-45a5-b662-d9ab57f3734c/images/1616882985.PNG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Antena de Onda Progresiva
              </h4>
              <br>
              <p>Matlab Guide </p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://la.mathworks.com/matlabcentral/fileexchange/89466-antena-de-onda-progresiva" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://www.youtube.com/watch?v=PGiCUdlkhHw" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/tienda.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web Tienda</h4>
              <br>
              <p>Web</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://corozco6489.github.io/electrocode/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/electrocode" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://images.unsplash.com/photo-1620634415912-ec5aa1e89d0d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>GooGle Cloud</h4>
              <br>
              <p>mqtt-esp8266</p>
              <br>
              <div class="portfolio-links">
                
                <a href="https://youtu.be/eidRBIPeYoY" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://github.com/Charles6489/esp8266-get" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>


        
        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://la.mathworks.com/matlabcentral/mlc-downloads/downloads/742c566e-a278-4e8d-b29c-08f79fb3060a/ff2c2392-d99b-4f5a-b3e5-c6fc117f34e1/images/1616880509.PNG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SINGLE STUB SHUNT TUNING
              </h4>
              <br>
              <p>Matlab Guide </p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://la.mathworks.com/matlabcentral/fileexchange/89451-single-stub-shunt-tuning" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://www.youtube.com/watch?v=g3iBlooyHTw" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/page2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Portafolio 1</h4>
              <br>
              <p>Web</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://corozco6489.github.io/portafolio2/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/portafolio2/" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://images.unsplash.com/photo-1562877773-a37120131ec4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80g" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>AWS</h4>
              <br>
              <p>mqtt-esp8266</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://youtu.be/hCI1DQcofOY" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://github.com/corozco6489/mqtt-esp8266" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://la.mathworks.com/matlabcentral/mlc-downloads/downloads/a4832235-7133-4809-8081-ccfac616edcf/023bc73a-8024-4c03-be78-763983a7eefd/images/1616892993.PNG" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SINGLE STUB SERIES TUNING
              </h4>
              <br>
              <p>Matlab Guide </p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://la.mathworks.com/matlabcentral/fileexchange/89486-single-stub-series-tuning" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://www.youtube.com/watch?v=1RVlOyMxK_k" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>


        
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/ejemplo.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pagina 3</h4>
              <br>
              <p>Portafolio 3</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://corozco6489.github.io/pruebaweb/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/pruebaweb" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://i.ytimg.com/vi/12cHkBRj3QY/maxresdefault.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4> Procesamiento de Imagenes
              </h4>
              <br>
              <p>Matlab Guide </p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://la.mathworks.com/matlabcentral/fileexchange/96942-proyecto-modulaciones-digitales-aplicado-a-imagenes-matlab" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://www.youtube.com/watch?v=12cHkBRj3QY" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>




        
        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://i.ytimg.com/vi/UgPA1TDpH7Q/mqdefault.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4> Log Periodic Dipole Antenna
              </h4>
              <br>
              <p>Matlab Guide </p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://la.mathworks.com/matlabcentral/fileexchange/96872-log-periodic-antenna" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://youtu.be/eCaaMCwWpmY" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>





        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img loading="lazy" src="assets/img/civil.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Portafolio Civil</h4>
              <br>
              <p>Web</p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://corozco6489.github.io/Civil/" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://github.com/corozco6489/Civil" target="_blank" ><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-matlab">
          <div class="portfolio-wrap">
            <img loading="lazy" src="https://i.ytimg.com/vi/2jk2lun9zBs/maxresdefault.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4> Modulacion PCM
              </h4>
              <br>
              <p>Matlab Guide </p>
              <br>
              <div class="portfolio-links">
               
                <a href="https://la.mathworks.com/matlabcentral/fileexchange/97107-modulacion-pcm?s_tid=srchtitle" target="_blank"><i class="bx bx-link"></i></a>
                <a href="https://www.youtube.com/watch?v=2jk2lun9zBs" target="_blank" ><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>





      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Ambato - Ecuador</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
           
                          
              <a href="https://www.linkedin.com/in/carlos-orozco-64892021/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.youtube.com/channel/UCgR2CZLCClCdTeo_l5W53eQ" class="linkedin" target="_blank"><i class="bi bi-youtube"></i></a>
              <a href="https://github.com/corozco6489" class="linkedin" target="_blank"><i class="bi bi-github"></i></a>
              <a href="https://wa.me/5930983592690" class="linkedin" target="_blank"><i class="bi bi-whatsapp"></i></a>
              
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>corozco6489@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+593 0983592690</p>
          </div>
        </div>
      </div>

      <?php
                    if (!empty($success)) {
                        ?>
                        <div class="alert alert-success">Your message was sent successfully!</div>
                        <?php
                    }
                    ?>

                    <?php
                    if (!empty($error)) {
                        ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                        <?php
                    }
                    ?>



<form action="submit.php" method="post"  >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5"  id="message" placeholder="Message" required></textarea>
              </div>
              <div class="form-group text-center">
                            <div class="g-recaptcha" data-sitekey="<?= CONTACTFORM_RECAPTCHA_SITE_KEY ?>"></div>
              </div>             
              <div class="text-center"><button type="submit" class="btn btn-success">Send Message</button></div>
            </form>



    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="https://kit.fontawesome.com/6be3be3114.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>