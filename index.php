<?php
require_once __DIR__ . '/src/helpers.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
  <head>
  <?php include_once __DIR__ . '/components/head.php'?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Of Cubes</title>
    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="assets/css/maps.css" media="screen">

    <script class="u-script" type="text/javascript" src="assets/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="assets/js/nicepage.js" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/default-logo.png"
      }
    </script>
    <meta name="theme-color" content="#A9EEE6">
    <meta property="og:title" content="maps">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
  </head>
  <body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en">
    
    <?php include(__DIR__ . '/src/header.php'); ?>

    <section class="u-align-center u-clearfix u-section-1" id="sec-a4b5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-palette-1-light-1 u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-align-center u-text u-text-default u-text-1"> To the players from the players!</h2>
            <div class="u-border-3 u-border-white u-line u-line-horizontal u-line-1"></div>
            <p class="u-align-center u-text u-text-2"> We present to your attention a list of cards to pass.<br>Anyone can create and post a map on the site or download someone else's map, go through and evaluate it.&nbsp;<br>All maps are moderated before publication. But if you find something that you think is unacceptable on the site or the map belongs to you, you can contact support.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-palette-1-light-1 u-section-2" id="sec-f98b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1"> Most Popular</h1>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-section-3" id="sec-d68e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div id="carousel-210e" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
            <li data-u-target="#carousel-210e" class="u-active u-grey-30" data-u-slide-to="0"></li>
            <li data-u-target="#carousel-210e" class="u-grey-30" data-u-slide-to="1"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
              <?php
                $conn = getPDO();
                $sql = "SELECT id, icon, name, rating, description FROM maps ORDER BY rating DESC LIMIT 5;";

                $result = $conn->query($sql); 

                if ($result->rowCount() > 0) {
                  $isstart = true;
                  while ($map = $result->fetch(\PDO::FETCH_ASSOC)) {
                    include './src/map/ratingMap.php';
                    $isstart = false;
                  }
                }
              ?>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-60 u-hidden-sm u-hidden-xs u-icon-circle u-spacing-9 u-carousel-control-1" href="#carousel-210e" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">+Previous</span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-60 u-hidden-sm u-hidden-xs u-icon-circle u-spacing-9 u-carousel-control-2" href="#carousel-210e" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">+Next</span>
          </a>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-palette-1-light-1 u-section-4" id="sec-fc3e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-1"> All Maps</h1>
      </div>
    </section>

    <section class="u-clearfix u-section-5" id="sec-73a2">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">

            <?php
              $conn = getPDO();
              $sql = "SELECT id, icon, name, rating FROM maps ORDER BY name DESC LIMIT 9;";

              $result = $conn->query($sql); 

              if ($result->rowCount() > 0) {
                while ($map = $result->fetch(\PDO::FETCH_ASSOC)) {
                  include './src/map/indexMap.php';
                }
              } else {
                echo "<p></p>";
                echo '<h4 class="u-text u-text-default u-text-1">This user has not posted maps</h4>';
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
  </body>
</html>