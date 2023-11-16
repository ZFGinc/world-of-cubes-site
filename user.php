<?php
require_once __DIR__ . '/src/helpers.php';
require_once __DIR__ . '/src/helperUser.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
  <head>
  <?php include_once __DIR__ . '/components/head.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $user['name'] ?></title>

    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="assets/css/user.css" media="screen">

    <script class="u-script" type="text/javascript" src="assets/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="assets/js/nicepage.js" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
    </script>
    <meta name="theme-color" content="#A9EEE6">
    <meta property="og:title" content="user">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
  </head>
  <body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en">
    
  <?php include_once __DIR__ . '/src/header.php'?>

    <section class="u-clearfix u-section-1" id="sec-0255">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img alt="<?php echo $user['name'] ?>" class="u-image u-image-circle u-image-1" src="<?php echo $user['avatar'] ?>" data-image-width="256" data-image-height="256" />
                  <h2 class="u-text u-text-default u-text-1"><?php echo $user['name'] ?></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-palette-1-light-1 u-section-2" id="sec-f5a6">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1"> User maps</h1>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-grey-10 u-section-3" id="sec-0504">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-products u-products-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-products-datasource="site" data-items-per-page="3" data-products-id="1">
          <div class="u-repeater u-repeater-1">
            
          <?php
          if (isset($user)) {
            $conn = getPDO();
            $sql = "SELECT id, icon, name, rating FROM maps WHERE author = " . $user['id'];

            $result = $conn->query($sql); 

            if ($result->rowCount() > 0) {
              while ($map = $result->fetch(\PDO::FETCH_ASSOC)) {
                echo include './src/map/map_mini.php';
              }
            } else {
              echo '<p class="u-text u-text-default u-text-1">This user has not posted his maps</p>';
            }
          }
          ?>

          </div>
        </div>
      </div>
    </section>
    

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-19c3"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">ZFGin, 2023</p>
      </div>
    </footer>

    <?php include_once __DIR__ . '/components/scripts.php' ?>
  </body>
</html>