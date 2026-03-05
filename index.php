<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('partials/title-meta.php'); ?>

  <?php include('partials/head-css.php'); ?>
  <style>
    .authority-section .partner-box {
      background: rgba(255, 255, 255, 0.03);
      padding: 2.5rem 4rem;
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.05);
      min-width: 250px;
      text-align: center;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      backdrop-filter: blur(5px);
    }

    .authority-section .partner-box:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.06);
      border-color: #FF5722;
      box-shadow: 0 15px 30px rgba(255, 87, 34, 0.1);
    }

    .partner-box h3 {
      margin: 0;
      font-weight: 700;
      letter-spacing: -0.5px;
    }
  </style>
</head>

<body class="body-bg1">

  <?php include('partials/loader.php'); ?>

  <?php include('partials/header/navbar.php'); ?>
  <?php include('partials/sidebar.php'); ?>
  <?php include('partials/header/mobile-nav.php'); ?>


  <!--===== HERO AREA STARTS =======-->
  <div class="hero1-section-area"
    style="background-image: url(assets/img/all-images/bg/hero-bg1.png); background-position: center top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="hero-header-area">
            <h5><img src="assets/img/icons/sub-logo1.svg" alt=""> Consultoría de Crecimiento Digital</h5>
            <div class="space32"></div>
            <h1 class="text-anime-style-3">Transformamos clics en <img src="assets/img/elements/elements1.png" alt=""
                class="elements1 keyframe5"></h1>
            <div class="space40 d-md-block d-none"></div>
            <div class="space16 d-block d-md-none"></div>
            <h1 class="text-anime-style-3"><img src="assets/img/all-images/others/others-img1.png" alt=""
                class="others-img1"> ventas reales</h1>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
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
      <div class="space60"></div>
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-bottom-images">
            <img src="assets/img/elements/elements3.png" alt="" class="elements3">
            <div class="img1 image-anime reveal">
              <img src="assets/img/all-images/hero/hero-img2.png" alt="">
            </div>
            <div class="started-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="190" height="190" viewBox="0 0 190 190" fill="none"
                class="keyframe5">
                <path
                  d="M89.6307 2.22405C92.2799 1.12669 93.6046 0.578013 95 0.578013C96.3954 0.578013 97.7201 1.12669 100.369 2.22405L156.806 25.6008C159.455 26.6982 160.78 27.2468 161.766 28.2336C162.753 29.2203 163.302 30.5449 164.399 33.1942L187.776 89.6307C188.873 92.2799 189.422 93.6046 189.422 95C189.422 96.3954 188.873 97.7201 187.776 100.369L164.399 156.806C163.302 159.455 162.753 160.78 161.766 161.766C160.78 162.753 159.455 163.302 156.806 164.399L100.369 187.776C97.7201 188.873 96.3954 189.422 95 189.422C93.6046 189.422 92.2799 188.873 89.6307 187.776L33.1942 164.399C30.5449 163.302 29.2203 162.753 28.2336 161.766C27.2468 160.78 26.6982 159.455 25.6008 156.806L2.22405 100.369C1.12669 97.7201 0.578013 96.3954 0.578013 95C0.578013 93.6046 1.12669 92.2799 2.22405 89.6307L25.6008 33.1942C26.6982 30.5449 27.2468 29.2203 28.2336 28.2336C29.2203 27.2468 30.5449 26.6982 33.1942 25.6008L89.6307 2.22405Z"
                  fill="#C0F037" />
              </svg>
              <a href="contact.php"><span><i class="fa-solid fa-arrow-right"></i></span></a>
              <div class="space10"></div>
              <a href="contact.php">Empieza Aquí</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('partials/slider.php'); ?>

  <!--===== AUTHORITY AREA STARTS =======-->
  <div class="authority-section sp4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="heading1 text-center space-margin60">
            <h5 style="color: #fff;"><img src="assets/img/icons/sub-logo1.svg" alt=""> Socios Estratégicos</h5>
          </div>
          <div class="partner-logos d-flex flex-wrap justify-content-center align-items-center gap-5" data-aos="fade-up"
            data-aos-duration="1000">
            <div class="partner-box" style="filter: grayscale(1); opacity: 0.7; transition: 0.3s; cursor: pointer;"
              onmouseover="this.style.filter='none'; this.style.opacity='1'"
              onmouseout="this.style.filter='grayscale(1)'; this.style.opacity='0.7'">
              <h3 style="color: #fff; font-family: 'Space Grotesk', sans-serif;">Google <span
                  style="color: #4285F4;">Partner</span></h3>
            </div>
            <div class="partner-box" style="filter: grayscale(1); opacity: 0.7; transition: 0.3s; cursor: pointer;"
              onmouseover="this.style.filter='none'; this.style.opacity='1'"
              onmouseout="this.style.filter='grayscale(1)'; this.style.opacity='0.7'">
              <h3 style="color: #fff; font-family: 'Space Grotesk', sans-serif;">HubSpot <span
                  style="color: #FF7A59;">Partner</span></h3>
            </div>
            <div class="partner-box" style="filter: grayscale(1); opacity: 0.7; transition: 0.3s; cursor: pointer;"
              onmouseover="this.style.filter='none'; this.style.opacity='1'"
              onmouseout="this.style.filter='grayscale(1)'; this.style.opacity='0.7'">
              <h3 style="color: #fff; font-family: 'Space Grotesk', sans-serif;">Meta <span
                  style="color: #0668E1;">Business Partner</span></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== AUTHORITY AREA ENDS =======-->

  <!--===== HERO AREA ENDS =======-->

  <!--===== ABOUT AREA STARTS =======-->
  <div class="about1-section-area sp6">
    <img src="assets/img/elements/elements9.png" alt="" class="elements9">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="images">
            <div class="img1 reveal">
              <img src="assets/img/all-images/about/about-img1.png" alt="">
            </div>
            <img src="assets/img/elements/elements8.png" alt="" class="elements8">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="about-header heading1">
            <h5 data-aos="fade-left" data-aos-duration="800"><img src="assets/img/icons/sub-logo2.svg"
                alt="">Estrategias Basadas en ROI</h5>
            <div class="space20"></div>
            <h2 class="text-anime-style-3">Aceleramos tu Negocio con Inbound Marketing e IA</h2>
            <div class="space16"></div>
            <p data-aos="fade-left" data-aos-duration="900">En Niumedia, no somos una agencia común. Somos expertos en
              convertir prospectos en clientes mediante automatización avanzada y estrategias de performance
              optimizadas.</p>
            <div class="space32"></div>
            <div class="bg-progress" data-aos="fade-left" data-aos-duration="1000">
              <div class="progress-bar">
                <label>Retorno de Inversión (ROI) <span>+300%</span></label>
                <div class="progress">
                  <div class="progress-inner" style="width: 100%;"></div>
                </div>
              </div>

              <div class="progress-bar m-0">
                <label>Automatización con IA <span>99%</span></label>
                <div class="progress">
                  <div class="progress-inner" style="width: 99%;"></div>
                </div>
              </div>

            </div>
            <div class="space32"></div>
            <div class="btn-area1" data-aos="fade-left" data-aos-duration="1100">
              <a href="contact.php" class="vl-btn1" style="overflow: hidden;">Asesoría Sin Costo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== ABOUT AREA ENDS =======-->

  <!--===== OTHERS AREA STARTS =======-->
  <div class="serve-section-area sp10">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 m-auto">
          <div class="heading1 space-margin60 text-center">
            <h5 style="color: #fff;"><img src="assets/img/icons/sub-logo1.svg" alt="">Industrias en las que nos
              especializamos</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="slider2-section-area">
      <div class="marquee-wrap">
        <div class="marquee-text">
          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img1.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>Real Estate</a></h3>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img2.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>Fintech & Banca</a></h3>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img3.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>Seguros</a></h3>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img1.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>SaaS B2B</a></h3>

          <div class="brand-single-box">
            <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img2.png" alt=""><span><i
                    class="fa-solid fa-arrow-right"></i></span>Media Entertainment</a></h3>
          </div>

          <div class="brand-single-box">
            <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img3.png" alt=""><span><i
                    class="fa-solid fa-arrow-right"></i></span>Website Design</a></h3>
          </div>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img1.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>Real Estate</a></h3>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img2.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>Fintech & Banca</a></h3>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img3.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>Seguros</a></h3>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img1.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>SaaS B2B</a></h3>

          <div class="brand-single-box">
            <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img2.png" alt=""><span><i
                    class="fa-solid fa-arrow-right"></i></span>Media Entertainment</a></h3>
          </div>

          <div class="brand-single-box">
            <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img3.png" alt=""><span><i
                    class="fa-solid fa-arrow-right"></i></span>Website Design</a></h3>
          </div>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img1.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>Real Estate</a></h3>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img2.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>Fintech & Banca</a></h3>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img3.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>Seguros</a></h3>

          <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img1.png" alt=""><span><i
                  class="fa-solid fa-arrow-right"></i></span>SaaS B2B</a></h3>

          <div class="brand-single-box">
            <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img2.png" alt=""><span><i
                    class="fa-solid fa-arrow-right"></i></span>Media Entertainment</a></h3>
          </div>

          <div class="brand-single-box">
            <h3><a href="project-single.php"><img src="assets/img/all-images/others/serve-img3.png" alt=""><span><i
                    class="fa-solid fa-arrow-right"></i></span>Website Design</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== OTHERS AREA ENDS =======-->

  <!--===== SERVICE AREA STARTS =======-->
  <div class="service1-section-area sp6"
    style="background-image: url(assets/img/all-images/bg/bg3.png); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 m-auto">
          <div class="service-header heading1 text-center space-margin60">
            <h5><img src="assets/img/icons/sub-logo2.svg" alt="">Crecimiento Digital Estratégico</h5>
            <div class="space20"></div>
            <h2 class="text-anime-style-3">Servicios Diseñados para Escalar tu ROI</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <div class="service-branding-boxesarea" data-aos="fade-up" data-aos-duration="900">
            <div class="service-brand-head">
              <h2><a href="service-single.php">Inbound Marketing & HubSpot</a></h2>
              <div class="space8"></div>
              <ul class="service-list">
                <li><a href="#">#HubSpotPartner</a></li>
                <li><a href="#">#InboundStrategy</a></li>
              </ul>
              <ul class="service-list">
                <li><a href="#">#LeadGeneration</a></li>
                <li><a href="#">#CRMOptimization</a></li>
              </ul>
            </div>
            <div class="hidden-img">
              <img src="assets/img/all-images/service/service-img1.png" alt="">
            </div>
            <div class="arrow">
              <a href="service-single.php"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="space60"></div>
          <div class="service-branding-boxesarea" data-aos="fade-up" data-aos-duration="1000">
            <div class="service-brand-head">
              <h2><a href="service-single.php">Performance & Paid Media</a></h2>
              <div class="space8"></div>
              <ul class="service-list">
                <li><a href="#">#GoogleAdsPartner</a></li>
                <li><a href="#">#MetaAds</a></li>
              </ul>
              <ul class="service-list">
                <li><a href="#">#ROIFocused</a></li>
                <li><a href="#">#ConversionTracking</a></li>
              </ul>
            </div>
            <div class="hidden-img">
              <img src="assets/img/all-images/service/service-img2.png" alt="">
            </div>
            <div class="arrow">
              <a href="service-single.php"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="space60"></div>
          <div class="service-branding-boxesarea" data-aos="fade-up" data-aos-duration="1100">
            <div class="service-brand-head">
              <h2><a href="service-single.php">Agentes de IA y Automatización</a></h2>
              <div class="space8"></div>
              <ul class="service-list">
                <li><a href="#">#AIAgents</a></li>
                <li><a href="#">#WorkflowAutomation</a></li>
              </ul>
              <ul class="service-list">
                <li><a href="#">#B2BAutomation</a></li>
                <li><a href="#">#SmartSystems</a></li>
              </ul>
            </div>
            <div class="hidden-img">
              <img src="assets/img/all-images/service/service-img3.png" alt="">
            </div>
            <div class="arrow">
              <a href="service-single.php"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="space60"></div>
          <div class="service-branding-boxesarea" data-aos="fade-up" data-aos-duration="1200">
            <div class="service-brand-head">
              <h2><a href="service-single.php">SEO y Estrategia de Contenidos</a></h2>
              <div class="space8"></div>
              <ul class="service-list">
                <li><a href="#">#ContentMarketing</a></li>
                <li><a href="#">#OrganicGrowth</a></li>
              </ul>
              <ul class="service-list">
                <li><a href="#">#SearchOptimization</a></li>
                <li><a href="#">#AuthorityBuilding</a></li>
              </ul>
            </div>
            <div class="hidden-img">
              <img src="assets/img/all-images/service/service-img4.png" alt="">
            </div>
            <div class="arrow">
              <a href="service-single.php"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="space100"></div>
          <div class="started-btn" data-aos="zoom-in" data-aos-duration="1000">
            <svg xmlns="http://www.w3.org/2000/svg" width="190" height="190" viewBox="0 0 190 190" fill="none"
              class="keyframe5">
              <path
                d="M89.6307 2.22405C92.2799 1.12669 93.6046 0.578013 95 0.578013C96.3954 0.578013 97.7201 1.12669 100.369 2.22405L156.806 25.6008C159.455 26.6982 160.78 27.2468 161.766 28.2336C162.753 29.2203 163.302 30.5449 164.399 33.1942L187.776 89.6307C188.873 92.2799 189.422 93.6046 189.422 95C189.422 96.3954 188.873 97.7201 187.776 100.369L164.399 156.806C163.302 159.455 162.753 160.78 161.766 161.766C160.78 162.753 159.455 163.302 156.806 164.399L100.369 187.776C97.7201 188.873 96.3954 189.422 95 189.422C93.6046 189.422 92.2799 188.873 89.6307 187.776L33.1942 164.399C30.5449 163.302 29.2203 162.753 28.2336 161.766C27.2468 160.78 26.6982 159.455 25.6008 156.806L2.22405 100.369C1.12669 97.7201 0.578013 96.3954 0.578013 95C0.578013 93.6046 1.12669 92.2799 2.22405 89.6307L25.6008 33.1942C26.6982 30.5449 27.2468 29.2203 28.2336 28.2336C29.2203 27.2468 30.5449 26.6982 33.1942 25.6008L89.6307 2.22405Z"
                fill="#C0F037" />
            </svg>
            <a href="contact.php"><span><i class="fa-solid fa-arrow-right"></i></span></a>
            <div class="space10"></div>
            <a href="contact.php">Más Información</a>
          </div>
          <div class="space50"></div>
        </div>
      </div>
    </div>
  </div>
  <!--===== SERVICE AREA ENDS =======-->

  <!--===== CASE AREA STARTS =======-->
  <div class="portfolio1-section-area sp6">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="portfolio-header heading1 space-margin60">
            <h5><img src="assets/img/icons/sub-logo2.svg" alt="">Showcasing Our Impact</h5>
            <div class="space24"></div>
            <h2 class="text-anime-style-3">Our Portfolio showcase</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="portfolio-slider-area owl-carousel">
            <div class="portfolio-boxarea">
              <div class="img1">
                <img src="assets/img/all-images/portfolio/portfolio-img1.png" alt="">
              </div>
              <div class="arrow-content">
                <div class="arrow">
                  <a href="project-single.php"><span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
                <div class="content-area">
                  <p>User Interface design</p>
                  <div class="space16"></div>
                  <a href="project-single.php">Web Design For Business</a>
                </div>
              </div>
            </div>

            <div class="portfolio-boxarea">
              <div class="img1">
                <img src="assets/img/all-images/portfolio/portfolio-img2.png" alt="">
              </div>
              <div class="arrow-content">
                <div class="arrow">
                  <a href="project-single.php"><span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
                <div class="content-area">
                  <p>User Interface design</p>
                  <div class="space16"></div>
                  <a href="project-single.php">Web Design For Business</a>
                </div>
              </div>
            </div>

            <div class="portfolio-boxarea">
              <div class="img1">
                <img src="assets/img/all-images/portfolio/portfolio-img3.png" alt="">
              </div>
              <div class="arrow-content">
                <div class="arrow">
                  <a href="project-single.php"><span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
                <div class="content-area">
                  <p>User Interface design</p>
                  <div class="space16"></div>
                  <a href="project-single.php">Web Design For Business</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CASE AREA ENDS =======-->

  <!--===== TESTIMONIAL AREA START =======-->
  <section class="testimonials-2 sp6"
    style="background-image: url(assets/img/all-images/bg/bg2.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto text-center">
          <div class="heading1 space-margin60">
            <h5><img src="assets/img/icons/sub-logo2.svg" alt=""> Real Feedback</h5>
            <div class="space20"></div>
            <h2 class="text-anime-style-3">Client Success Stories</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-7 col-md-12 left _relative m-auto">
          <div class="swiper swiper-testimonial-2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-boxarea">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="26" viewBox="0 0 32 26" fill="none">
                    <path
                      d="M17.4814 6.11477C17.4814 7.7281 17.9031 9.08294 18.7464 10.1793C19.3441 10.9346 20.155 11.4308 21.1793 11.6679C22.1876 11.9026 23.1409 11.9191 24.0026 11.7193C24.2959 13.4609 23.8193 15.3053 22.6093 17.2596C21.3968 19.2127 19.8336 20.6812 17.9196 21.6651L20.8181 25.8359C22.2848 25.1099 23.6781 24.1896 24.9614 23.0768C26.2631 21.9639 27.4181 20.6843 28.4448 19.2378C29.4714 17.7913 30.2414 16.1578 30.7364 14.3061C31.2314 12.4544 31.3689 10.5661 31.1324 8.62277C30.8244 6.0561 29.9958 4.00277 28.6464 2.4811C27.2983 0.93988 25.619 0.16927 23.6084 0.16927C21.8393 0.16927 20.3708 0.700937 19.2084 1.77894C18.0583 2.83494 17.4839 4.28205 17.4851 6.12027L17.4814 6.11477ZM0.754095 6.11477C0.754095 7.7281 1.17576 9.08294 2.01909 10.1793C2.61798 10.9493 3.42893 11.4485 4.45193 11.6771C5.47859 11.9032 6.4197 11.9167 7.27526 11.7174C7.56859 13.4408 7.11026 15.2924 5.8966 17.2541C4.68659 19.1974 3.1246 20.6641 1.2106 21.6541L4.10176 25.8359C5.56965 25.1099 6.95076 24.1902 8.24509 23.0768C9.55849 21.9473 10.725 20.6576 11.7174 19.2378C12.7368 17.7894 13.4958 16.1578 13.9908 14.3061C14.4936 12.4559 14.6287 10.525 14.3886 8.62277C14.0843 6.0561 13.2593 4.00277 11.9136 2.4811C10.5691 0.95088 8.89287 0.185772 6.88476 0.185772C5.11254 0.183327 3.64465 0.719269 2.48109 1.7936C1.33098 2.8496 0.755316 4.29671 0.754095 6.13494V6.11477Z"
                      fill="white" />
                  </svg>
                  <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                  <div class="space16"></div>
                  <p>“Partnering with Renev was a turning point for our business. From an start, their team demonstrated
                    level professionalism and expertise that’s hard to find. They took time understand not only our
                    immediate needs but also our long-term vision, and they crafted a solution that truly aligned with
                    both. </p>
                  <div class="space32"></div>
                  <div class="names-area">
                    <div class="man-textarea">
                      <div class="man">
                        <img src="assets/img/all-images/testimonial/testimonial-img5.png" alt="">
                      </div>
                      <div class="text">
                        <a href="#">Sheldon Jackson</a>
                        <div class="space12"></div>
                        <p>Owner FeatherDev</p>
                      </div>
                    </div>
                    <img src="assets/img/elements/elements20.png" alt="" class="elements20">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-boxarea">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="26" viewBox="0 0 32 26" fill="none">
                    <path
                      d="M17.4814 6.11477C17.4814 7.7281 17.9031 9.08294 18.7464 10.1793C19.3441 10.9346 20.155 11.4308 21.1793 11.6679C22.1876 11.9026 23.1409 11.9191 24.0026 11.7193C24.2959 13.4609 23.8193 15.3053 22.6093 17.2596C21.3968 19.2127 19.8336 20.6812 17.9196 21.6651L20.8181 25.8359C22.2848 25.1099 23.6781 24.1896 24.9614 23.0768C26.2631 21.9639 27.4181 20.6843 28.4448 19.2378C29.4714 17.7913 30.2414 16.1578 30.7364 14.3061C31.2314 12.4544 31.3689 10.5661 31.1324 8.62277C30.8244 6.0561 29.9958 4.00277 28.6464 2.4811C27.2983 0.93988 25.619 0.16927 23.6084 0.16927C21.8393 0.16927 20.3708 0.700937 19.2084 1.77894C18.0583 2.83494 17.4839 4.28205 17.4851 6.12027L17.4814 6.11477ZM0.754095 6.11477C0.754095 7.7281 1.17576 9.08294 2.01909 10.1793C2.61798 10.9493 3.42893 11.4485 4.45193 11.6771C5.47859 11.9032 6.4197 11.9167 7.27526 11.7174C7.56859 13.4408 7.11026 15.2924 5.8966 17.2541C4.68659 19.1974 3.1246 20.6641 1.2106 21.6541L4.10176 25.8359C5.56965 25.1099 6.95076 24.1902 8.24509 23.0768C9.55849 21.9473 10.725 20.6576 11.7174 19.2378C12.7368 17.7894 13.4958 16.1578 13.9908 14.3061C14.4936 12.4559 14.6287 10.525 14.3886 8.62277C14.0843 6.0561 13.2593 4.00277 11.9136 2.4811C10.5691 0.95088 8.89287 0.185772 6.88476 0.185772C5.11254 0.183327 3.64465 0.719269 2.48109 1.7936C1.33098 2.8496 0.755316 4.29671 0.754095 6.13494V6.11477Z"
                      fill="white" />
                  </svg>
                  <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                  <div class="space16"></div>
                  <p>“Partnering with Renev was a turning point for our business. From an start, their team demonstrated
                    level professionalism and expertise that’s hard to find. They took time understand not only our
                    immediate needs but also our long-term vision, and they crafted a solution that truly aligned with
                    both. </p>
                  <div class="space32"></div>
                  <div class="names-area">
                    <div class="man-textarea">
                      <div class="man">
                        <img src="assets/img/all-images/testimonial/testimonial-img6.png" alt="">
                      </div>
                      <div class="text">
                        <a href="#">Sheldon Jackson</a>
                        <div class="space12"></div>
                        <p>Owner FeatherDev</p>
                      </div>
                    </div>
                    <img src="assets/img/elements/elements20.png" alt="" class="elements20">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-boxarea">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="26" viewBox="0 0 32 26" fill="none">
                    <path
                      d="M17.4814 6.11477C17.4814 7.7281 17.9031 9.08294 18.7464 10.1793C19.3441 10.9346 20.155 11.4308 21.1793 11.6679C22.1876 11.9026 23.1409 11.9191 24.0026 11.7193C24.2959 13.4609 23.8193 15.3053 22.6093 17.2596C21.3968 19.2127 19.8336 20.6812 17.9196 21.6651L20.8181 25.8359C22.2848 25.1099 23.6781 24.1896 24.9614 23.0768C26.2631 21.9639 27.4181 20.6843 28.4448 19.2378C29.4714 17.7913 30.2414 16.1578 30.7364 14.3061C31.2314 12.4544 31.3689 10.5661 31.1324 8.62277C30.8244 6.0561 29.9958 4.00277 28.6464 2.4811C27.2983 0.93988 25.619 0.16927 23.6084 0.16927C21.8393 0.16927 20.3708 0.700937 19.2084 1.77894C18.0583 2.83494 17.4839 4.28205 17.4851 6.12027L17.4814 6.11477ZM0.754095 6.11477C0.754095 7.7281 1.17576 9.08294 2.01909 10.1793C2.61798 10.9493 3.42893 11.4485 4.45193 11.6771C5.47859 11.9032 6.4197 11.9167 7.27526 11.7174C7.56859 13.4408 7.11026 15.2924 5.8966 17.2541C4.68659 19.1974 3.1246 20.6641 1.2106 21.6541L4.10176 25.8359C5.56965 25.1099 6.95076 24.1902 8.24509 23.0768C9.55849 21.9473 10.725 20.6576 11.7174 19.2378C12.7368 17.7894 13.4958 16.1578 13.9908 14.3061C14.4936 12.4559 14.6287 10.525 14.3886 8.62277C14.0843 6.0561 13.2593 4.00277 11.9136 2.4811C10.5691 0.95088 8.89287 0.185772 6.88476 0.185772C5.11254 0.183327 3.64465 0.719269 2.48109 1.7936C1.33098 2.8496 0.755316 4.29671 0.754095 6.13494V6.11477Z"
                      fill="white" />
                  </svg>
                  <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                  <div class="space16"></div>
                  <p>“Partnering with Renev was a turning point for our business. From an start, their team demonstrated
                    level professionalism and expertise that’s hard to find. They took time understand not only our
                    immediate needs but also our long-term vision, and they crafted a solution that truly aligned with
                    both. </p>
                  <div class="space32"></div>
                  <div class="names-area">
                    <div class="man-textarea">
                      <div class="man">
                        <img src="assets/img/all-images/testimonial/testimonial-img7.png" alt="">
                      </div>
                      <div class="text">
                        <a href="#">Sheldon Jackson</a>
                        <div class="space12"></div>
                        <p>Owner FeatherDev</p>
                      </div>
                    </div>
                    <img src="assets/img/elements/elements20.png" alt="" class="elements20">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-boxarea">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="26" viewBox="0 0 32 26" fill="none">
                    <path
                      d="M17.4814 6.11477C17.4814 7.7281 17.9031 9.08294 18.7464 10.1793C19.3441 10.9346 20.155 11.4308 21.1793 11.6679C22.1876 11.9026 23.1409 11.9191 24.0026 11.7193C24.2959 13.4609 23.8193 15.3053 22.6093 17.2596C21.3968 19.2127 19.8336 20.6812 17.9196 21.6651L20.8181 25.8359C22.2848 25.1099 23.6781 24.1896 24.9614 23.0768C26.2631 21.9639 27.4181 20.6843 28.4448 19.2378C29.4714 17.7913 30.2414 16.1578 30.7364 14.3061C31.2314 12.4544 31.3689 10.5661 31.1324 8.62277C30.8244 6.0561 29.9958 4.00277 28.6464 2.4811C27.2983 0.93988 25.619 0.16927 23.6084 0.16927C21.8393 0.16927 20.3708 0.700937 19.2084 1.77894C18.0583 2.83494 17.4839 4.28205 17.4851 6.12027L17.4814 6.11477ZM0.754095 6.11477C0.754095 7.7281 1.17576 9.08294 2.01909 10.1793C2.61798 10.9493 3.42893 11.4485 4.45193 11.6771C5.47859 11.9032 6.4197 11.9167 7.27526 11.7174C7.56859 13.4408 7.11026 15.2924 5.8966 17.2541C4.68659 19.1974 3.1246 20.6641 1.2106 21.6541L4.10176 25.8359C5.56965 25.1099 6.95076 24.1902 8.24509 23.0768C9.55849 21.9473 10.725 20.6576 11.7174 19.2378C12.7368 17.7894 13.4958 16.1578 13.9908 14.3061C14.4936 12.4559 14.6287 10.525 14.3886 8.62277C14.0843 6.0561 13.2593 4.00277 11.9136 2.4811C10.5691 0.95088 8.89287 0.185772 6.88476 0.185772C5.11254 0.183327 3.64465 0.719269 2.48109 1.7936C1.33098 2.8496 0.755316 4.29671 0.754095 6.13494V6.11477Z"
                      fill="white" />
                  </svg>
                  <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                  <div class="space16"></div>
                  <p>“Partnering with Renev was a turning point for our business. From an start, their team demonstrated
                    level professionalism and expertise that’s hard to find. They took time understand not only our
                    immediate needs but also our long-term vision, and they crafted a solution that truly aligned with
                    both. </p>
                  <div class="space32"></div>
                  <div class="names-area">
                    <div class="man-textarea">
                      <div class="man">
                        <img src="assets/img/all-images/testimonial/testimonial-img8.png" alt="">
                      </div>
                      <div class="text">
                        <a href="#">Sheldon Jackson</a>
                        <div class="space12"></div>
                        <p>Owner FeatherDev</p>
                      </div>
                    </div>
                    <img src="assets/img/elements/elements20.png" alt="" class="elements20">
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-boxarea">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="26" viewBox="0 0 32 26" fill="none">
                    <path
                      d="M17.4814 6.11477C17.4814 7.7281 17.9031 9.08294 18.7464 10.1793C19.3441 10.9346 20.155 11.4308 21.1793 11.6679C22.1876 11.9026 23.1409 11.9191 24.0026 11.7193C24.2959 13.4609 23.8193 15.3053 22.6093 17.2596C21.3968 19.2127 19.8336 20.6812 17.9196 21.6651L20.8181 25.8359C22.2848 25.1099 23.6781 24.1896 24.9614 23.0768C26.2631 21.9639 27.4181 20.6843 28.4448 19.2378C29.4714 17.7913 30.2414 16.1578 30.7364 14.3061C31.2314 12.4544 31.3689 10.5661 31.1324 8.62277C30.8244 6.0561 29.9958 4.00277 28.6464 2.4811C27.2983 0.93988 25.619 0.16927 23.6084 0.16927C21.8393 0.16927 20.3708 0.700937 19.2084 1.77894C18.0583 2.83494 17.4839 4.28205 17.4851 6.12027L17.4814 6.11477ZM0.754095 6.11477C0.754095 7.7281 1.17576 9.08294 2.01909 10.1793C2.61798 10.9493 3.42893 11.4485 4.45193 11.6771C5.47859 11.9032 6.4197 11.9167 7.27526 11.7174C7.56859 13.4408 7.11026 15.2924 5.8966 17.2541C4.68659 19.1974 3.1246 20.6641 1.2106 21.6541L4.10176 25.8359C5.56965 25.1099 6.95076 24.1902 8.24509 23.0768C9.55849 21.9473 10.725 20.6576 11.7174 19.2378C12.7368 17.7894 13.4958 16.1578 13.9908 14.3061C14.4936 12.4559 14.6287 10.525 14.3886 8.62277C14.0843 6.0561 13.2593 4.00277 11.9136 2.4811C10.5691 0.95088 8.89287 0.185772 6.88476 0.185772C5.11254 0.183327 3.64465 0.719269 2.48109 1.7936C1.33098 2.8496 0.755316 4.29671 0.754095 6.13494V6.11477Z"
                      fill="white" />
                  </svg>
                  <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                  <div class="space16"></div>
                  <p>“Partnering with Renev was a turning point for our business. From an start, their team demonstrated
                    level professionalism and expertise that’s hard to find. They took time understand not only our
                    immediate needs but also our long-term vision, and they crafted a solution that truly aligned with
                    both. </p>
                  <div class="space32"></div>
                  <div class="names-area">
                    <div class="man-textarea">
                      <div class="man">
                        <img src="assets/img/all-images/testimonial/testimonial-img9.png" alt="">
                      </div>
                      <div class="text">
                        <a href="#">Sheldon Jackson</a>
                        <div class="space12"></div>
                        <p>Owner FeatherDev</p>
                      </div>
                    </div>
                    <img src="assets/img/elements/elements20.png" alt="" class="elements20">
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="testimonial-boxarea">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="26" viewBox="0 0 32 26" fill="none">
                    <path
                      d="M17.4814 6.11477C17.4814 7.7281 17.9031 9.08294 18.7464 10.1793C19.3441 10.9346 20.155 11.4308 21.1793 11.6679C22.1876 11.9026 23.1409 11.9191 24.0026 11.7193C24.2959 13.4609 23.8193 15.3053 22.6093 17.2596C21.3968 19.2127 19.8336 20.6812 17.9196 21.6651L20.8181 25.8359C22.2848 25.1099 23.6781 24.1896 24.9614 23.0768C26.2631 21.9639 27.4181 20.6843 28.4448 19.2378C29.4714 17.7913 30.2414 16.1578 30.7364 14.3061C31.2314 12.4544 31.3689 10.5661 31.1324 8.62277C30.8244 6.0561 29.9958 4.00277 28.6464 2.4811C27.2983 0.93988 25.619 0.16927 23.6084 0.16927C21.8393 0.16927 20.3708 0.700937 19.2084 1.77894C18.0583 2.83494 17.4839 4.28205 17.4851 6.12027L17.4814 6.11477ZM0.754095 6.11477C0.754095 7.7281 1.17576 9.08294 2.01909 10.1793C2.61798 10.9493 3.42893 11.4485 4.45193 11.6771C5.47859 11.9032 6.4197 11.9167 7.27526 11.7174C7.56859 13.4408 7.11026 15.2924 5.8966 17.2541C4.68659 19.1974 3.1246 20.6641 1.2106 21.6541L4.10176 25.8359C5.56965 25.1099 6.95076 24.1902 8.24509 23.0768C9.55849 21.9473 10.725 20.6576 11.7174 19.2378C12.7368 17.7894 13.4958 16.1578 13.9908 14.3061C14.4936 12.4559 14.6287 10.525 14.3886 8.62277C14.0843 6.0561 13.2593 4.00277 11.9136 2.4811C10.5691 0.95088 8.89287 0.185772 6.88476 0.185772C5.11254 0.183327 3.64465 0.719269 2.48109 1.7936C1.33098 2.8496 0.755316 4.29671 0.754095 6.13494V6.11477Z"
                      fill="white" />
                  </svg>
                  <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                  <div class="space16"></div>
                  <p>“Partnering with Renev was a turning point for our business. From an start, their team demonstrated
                    level professionalism and expertise that’s hard to find. They took time understand not only our
                    immediate needs but also our long-term vision, and they crafted a solution that truly aligned with
                    both. </p>
                  <div class="space32"></div>
                  <div class="names-area">
                    <div class="man-textarea">
                      <div class="man">
                        <img src="assets/img/all-images/testimonial/testimonial-img10.png" alt="">
                      </div>
                      <div class="text">
                        <a href="#">Sheldon Jackson</a>
                        <div class="space12"></div>
                        <p>Owner FeatherDev</p>
                      </div>
                    </div>
                    <img src="assets/img/elements/elements20.png" alt="" class="elements20">
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="pagination-buttons">
            <div class="swiper-button-next">
              <button><i class="fa-solid fa-angle-left"></i></button>
            </div>
            <div class="swiper-button-prev">
              <button><i class="fa-solid fa-angle-right"></i></button>
            </div>
          </div>
        </div>
        <div class="map-testimonial">
          <div class="swiper swiper-thumb2">
            <div class="swiper-wrapper list-img">
              <div class="swiper-slide">
                <div>
                  <img src="assets/img/all-images/testimonial/testimonial-img5.png" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <img src="assets/img/all-images/testimonial/testimonial-img6.png" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <img src="assets/img/all-images/testimonial/testimonial-img7.png" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <img src="assets/img/all-images/testimonial/testimonial-img8.png" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <img src="assets/img/all-images/testimonial/testimonial-img9.png" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div>
                  <img src="assets/img/all-images/testimonial/testimonial-img10.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--===== TESTIMONIAL AREA END =======-->



  <?php include('partials/slider.php'); ?>

  <?php include('partials/cta.php'); ?>

  <?php include('partials/footer.php'); ?>

  <?php include('partials/footer-scripts.php'); ?>

</body>

</html>