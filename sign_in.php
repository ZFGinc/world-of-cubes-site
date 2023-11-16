<?php
require_once __DIR__ . '/src/helpers.php';

checkGuest();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
  <head>
    <?php include_once __DIR__ . '/components/head.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Sign In</title>

    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="assets/css/sign_in.css" media="screen">

    <script class="u-script" type="text/javascript" src="assets/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="assets/js/nicepage.js" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": ""
      }
    </script>

    <meta name="theme-color" content="#A9EEE6">
    <meta property="og:title" content="sign_in">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
  </head>
  <body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en">

  <?php include(__DIR__ . '/src/header.php'); ?>
  

    <section class="u-align-center u-clearfix u-gradient u-section-1" id="carousel_4ffc">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">Welcome Back</h3>
            <div class="u-expanded-width u-form u-login-control u-white u-form-1">

              <form action="src/actions/login.php" class="u-clearfix u-form-custom-backend u-form-spacing-20 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;" method="post">
                
                <?php if(hasMessage('error')): ?>
                    <div class="notice error"><?php echo getMessage('error') ?></div>
                <?php endif; ?>
              
                <div class="u-form-group u-form-name">
                  <label for="username-a30d" class="u-label">Email</label>
                  <input type="text" placeholder="Enter your Email" id="email" name="email" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                </div>
                <div class="u-form-group u-form-password">
                  <label for="password-a30d" class="u-label">Password</label>
                  <input type="password" placeholder="Enter your Password" id="password" name="password" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
                </div>
                <div class="u-align-right u-form-group u-form-submit">
                  <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-palette-1-base u-btn-1">Login</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>

            </div>
            <a href="#" class="u-border-active-palette-2-base u-border-hover-palette-1-base u-border-none u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-hover-palette-1-base u-text-white u-btn-2">Forgot password?</a>
            <a href="./sign_up.php" class="u-border-active-palette-2-base u-border-hover-palette-1-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-hover-palette-1-base u-text-white u-btn-3">Don't have an account?</a>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-19c3">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">ZFGin, 2023</p>
      </div>
    </footer>

    <?php include_once __DIR__ . '/components/scripts.php' ?>
  </body>
  </html>