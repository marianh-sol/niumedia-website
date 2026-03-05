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
  <div class="inner-section-area" style="background-image: url(assets/img/all-images/bg/hero-bg1.png); background-position: center top; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="hero-header-area">
            <h1>404 Error</h1>
            <div class="space32"></div>
            <h4><a href="index.php">Home</a> <i class="fa-solid fa-angle-right"></i> <a href="#">404 Error</a></h4>
          </div>
        </div>
        <div class="col-lg-2"></div>
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

  <!--===== OTHERS AREA STARTS =======-->
  <div class="error-section-area sp6">
    <img src="assets/img/elements/elements15.png" alt="" class="elements15">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="images-content heading1 text-center">
            <div class="img1">
              <img src="assets/img/all-images/others/erorr-img.png" alt="">
            </div>
            <div class="space60"></div>
            <h2>Oops!! Page Not Found</h2>
            <div class="space18"></div>
            <p>It seems that the page you were trying to reach is no longer available or <br class="d-lg-block d-none"> might have been moved. Don’t worry; you’re not alone-errors happen! We <br class="d-lg-block d-none"> understand how frustrating it can be when a link doesn’t work as expected.</p>
            <div class="space32"></div>
            <div class="btn-area1">
              <a href="index.php" class="vl-btn1" style="overflow: hidden;">back to home page</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== OTHERS AREA ENDS =======-->

  <?php include('partials/slider.php'); ?>

  <?php include('partials/cta.php'); ?>

  <?php include('partials/footer.php'); ?>

  <?php include('partials/footer-scripts.php'); ?>

</body>

</html>