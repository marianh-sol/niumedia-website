<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('partials/title-meta.php'); ?>

  <?php include('partials/head-css.php'); ?>
</head>

<body class="body-bg1">

  <?php include('partials/loader.php'); ?>

  <?php include('partials/header/navbar.php'); ?>
  <?php include('partials/sidebar.php'); ?>
  <?php include('partials/header/mobile-nav.php'); ?>

  <!--===== HERO AREA STARTS =======-->
  <div class="inner-section-area"
    style="background-image: url(assets/img/all-images/bg/hero-bg1.png); background-position: center top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-header-area">
            <h1>Contacto</h1>
            <div class="space32"></div>
            <h4><a href="index.php">Inicio</a> <i class="fa-solid fa-angle-right"></i> <a href="#">Contacto</a></h4>
          </div>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-3">
          <div class="imges-header">
            <div class="img1">
              <img src="assets/img/all-images/hero/hero-img1.png" alt="" class="keyframe6">
            </div>
            <div class="arrow">
              <a href="contact.php">
                <img src="assets/img/elements/elements2.png" alt="" class="keyframe5">
                <img src="assets/img/icons/arrow1.svg" alt="" class="arrow1">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="space30"></div>
    </div>
  </div>

  <?php include('partials/slider.php'); ?>

  <!--===== CONTACT AREA STARTS =======-->
  <div class="contact-inner-area sp6">
    <img src="assets/img/elements/elements15.png" alt="" class="elements15">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 m-auto">
          <div class="heading1 text-center">
            <h5><span><img src="assets/img/icons/sub-logo2.svg" alt=""></span>¿Tienes dudas? ¡Contáctanos!</h5>
            <div class="space20"></div>
            <h2>Conecta con Niumedia Hoy</h2>
          </div>

          <div class="space40"></div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="widget-contactbox">
                <div class="icons">
                  <img src="assets/img/icons/mail2.svg" alt="">
                </div>
                <div class="content">
                  <h4>Email</h4>
                  <a href="mailto:hola@niumedia.mx">hola@niumedia.mx</a>
                </div>
              </div>
              <div class="space30 d-lg-none d-block"></div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="widget-contactbox">
                <div class="icons">
                  <img src="assets/img/icons/phn2.svg" alt="">
                </div>
                <div class="content">
                  <h4>Teléfono</h4>
                  <a href="tel:+525500000000">+52 55 0000 0000</a>
                </div>
              </div>
              <div class="space30 d-lg-none d-block"></div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="widget-contactbox">
                <div class="icons">
                  <img src="assets/img/icons/clock2.svg" alt="">
                </div>
                <div class="content">
                  <h4>Horario</h4>
                  <a href="javascript:void(0);">Lun-Vie: 9 AM – 6 PM</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="space60"></div>
          <div class="row">
            <div class="col-lg-6">
              <div class="contact-images">
                <img src="assets/img/elements/elements21.png" alt="" class="elements21">
                <div class="img1">
                  <img src="assets/img/all-images/contact/contact-img1.png" alt="">
                </div>
                <div class="img2">
                  <img src="assets/img/all-images/contact/contact-img2.png" alt="">
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="contact-author-boxarea">
                <h3>Escríbenos</h3>
                <div class="space8"></div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-area">
                      <input type="text" placeholder="Nombre*">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="input-area">
                      <input type="text" placeholder="Apellido*">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="input-area">
                      <input type="number" placeholder="Teléfono*">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="input-area">
                      <input type="email" placeholder="Email*">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-area">
                      <input type="text" placeholder="Interesado en (Servicio)*">
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="input-area">
                      <textarea placeholder="Tu mensaje"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="space32"></div>
                    <div class="input-area text-end">
                      <button type="submit" class="vl-btn1" style="overflow: hidden;">Enviar Mensaje</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="space60"></div>
          <div class="maps-area">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CONTACT AREA ENDS =======-->

  <?php include('partials/slider.php'); ?>

  <?php include('partials/cta.php'); ?>

  <?php include('partials/footer.php'); ?>

  <?php include('partials/footer-scripts.php'); ?>

</body>

</html>