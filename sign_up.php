<?php
require_once __DIR__ . '/src/helpers.php';
checkGuest();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
  <head>
    <?php include_once __DIR__ . '/components/head.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Sign Up</title>

    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="assets/css/sign_up.css" media="screen">

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
    <meta property="og:title" content="sign_up">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
  </head>
  <body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en">

  <?php include_once __DIR__ . '/src/header.php'?>

    <section class="u-align-center u-clearfix u-gradient u-section-1" id="carousel_4ffc">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">Registration</h3>
            <div class="u-expanded-width u-form u-login-control u-white u-form-1">

              <form action="src/actions/register.php" enctype="multipart/form-data" class="u-clearfix u-form-custom-backend u-form-spacing-20 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;" method="post">
                <div class="u-form-group u-form-name">
                  <label for="name" class="u-label">
                      Username
                    <input
                        class="u-grey-5 u-input u-input-rectangle u-input-1"
                        required="" 
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your Username"
                        value="<?php echo old('name') ?>"
                        <?php echo validationErrorAttr('name'); ?>>
                    <?php if(hasValidationError('name')): ?>
                        <small><?php echo validationErrorMessage('name'); ?></small>
                    <?php endif; ?>
                  </label>
                </div>

                <div class="u-form-group u-form-name">
                  <label for="email" class="u-label">
                    E-mail
                    <input
                        class="u-grey-5 u-input u-input-rectangle u-input-1"
                        required="" 
                        type="text"
                        id="email"
                        name="email"
                        placeholder="Enter your E-mail"
                        value="<?php echo old('email') ?>"
                        <?php echo validationErrorAttr('email'); ?>>
                    <?php if(hasValidationError('email')): ?>
                        <small><?php echo validationErrorMessage('email'); ?></small>
                    <?php endif; ?>
                  </label>
                </div>

                <div class="u-form-group u-form-password">
                  <label for="password" class="u-label">
                      Password
                      <input
                          class="u-grey-5 u-input u-input-rectangle u-input-2"
                          required=""
                          type="password"
                          id="password"
                          name="password"
                          placeholder="******"
                          <?php echo validationErrorAttr('password'); ?>
                      >
                      <?php if(hasValidationError('password')): ?>
                          <small><?php echo validationErrorMessage('password'); ?></small>
                      <?php endif; ?>
                  </label>
                </div>

                <div class="u-form-group u-form-password">
                  <label for="password_confirmation" class="u-label">
                      Password
                      <input
                          class="u-grey-5 u-input u-input-rectangle u-input-2"
                          required=""
                          type="password"
                          id="password_confirmation"
                          name="password_confirmation"
                          placeholder="******"
                          <?php echo validationErrorAttr('password_confirmation'); ?>
                      >
                      <?php if(hasValidationError('password_confirmation')): ?>
                          <small><?php echo validationErrorMessage('password_confirmation'); ?></small>
                      <?php endif; ?>
                  </label>
                </div>

                <div class="u-form-group u-form-password">
                  <label for="avatar" class="u-label">
                      Avatar
                      <input
                          class="u-grey-5 u-input u-input-rectangle u-input-2"
                          required=""
                          type="file"
                          id="avatar"
                          name="avatar"\
                          accept="image/png, image/jpeg"
                          <?php echo validationErrorAttr('avatar'); ?>
                      >
                      <?php if(hasValidationError('avatar')): ?>
                          <small><?php echo validationErrorMessage('avatar'); ?></small>
                      <?php endif; ?>
                  </label>
                </div>

                <div class="u-form-checkbox u-form-group">

                  <fieldset>
                    <label for="terms" class="u-block-d51a-57 u-field-label">
                      <input
                        class="u-field-input"
                        type="checkbox"
                        id="terms"
                        name="terms"
                      >
                      I accept the terms &amp; conditions
                    </label>
                  </fieldset>
                </div>


                <div class="u-align-right u-form-group u-form-submit">
                  <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-palette-1-base u-btn-1">Register</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>

            </div>
            <p class="u-text u-text-default u-text-white u-text-2">Have an account? </p>
            <a href="/sign_in.php" class="u-border-active-palette-2-base u-border-hover-palette-1-base u-border-none u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-2">Sign in!</a>
          </div>
        </div>
      </div>
    </section>
    
    <?php include_once __DIR__ . '/src/footer.php'?> 

    <?php include_once __DIR__ . '/components/scripts.php' ?>
  </body>
</html>