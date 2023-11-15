<?php
require_once __DIR__ . '/src/helpers.php';
require_once __DIR__ . '/src/helperUser.php';
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
  <head>
  <?php include_once __DIR__ . '/components/head.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="{name}">
    <meta name="description" content="">

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
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="user">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
  </head>
  <body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="ru">
    
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
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <div class="u-expanded-width u-products u-products-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-products-datasource="site" data-items-per-page="3" data-products-id="1">
          <div class="u-repeater u-repeater-1"><!--product_item-->
            <div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-1" data-product-id="6">
              <div class="u-container-layout u-similar-container u-container-layout-1"><!--product_image-->
                <a class="u-product-title-link" href="products/женские-туфли.html"><img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-1" src="images/d754debf.svg"></a><img src="images/414330ad.svg" class="u-product-second-image"><!--/product_image--><!--product_title-->
                <h3 class="u-product-control u-text u-text-1">
                  <a class="u-product-title-link" href="products/женские-туфли.html">Женские туфли</a>
                </h3><!--/product_title--><!--product_price-->
                <div class="u-product-control u-product-price u-product-price-1" data-add-zero-cents="false">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-hide-price u-old-price">$20</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 1.5rem; font-weight: 700;">$17</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price-->
              </div>
            </div><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-2" data-product-id="5">
              <div class="u-container-layout u-similar-container u-container-layout-2"><!--product_image-->
                <a class="u-product-title-link" href="products/мужская-футболка.html"><img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-2" src="images/53c4c417.svg"></a><!--/product_image--><!--product_title-->
                <h3 class="u-product-control u-text u-text-2">
                  <a class="u-product-title-link" href="products/мужская-футболка.html">Мужская футболка</a>
                </h3><!--/product_title--><!--product_price-->
                <div class="u-product-control u-product-price u-product-price-2" data-add-zero-cents="false">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-hide-price u-old-price">$300</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 1.5rem; font-weight: 700;">$245</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price-->
              </div>
            </div><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-3" data-product-id="4">
              <div class="u-container-layout u-similar-container u-container-layout-3"><!--product_image-->
                <a class="u-product-title-link" href="products/летняя-шляпа.html"><img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-3" src="images/6537f30a.svg"></a><!--/product_image--><!--product_title-->
                <h3 class="u-product-control u-text u-text-3">
                  <a class="u-product-title-link" href="products/летняя-шляпа.html">Летняя шляпа</a>
                </h3><!--/product_title--><!--product_price-->
                <div class="u-product-control u-product-price u-product-price-3" data-add-zero-cents="false">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-hide-price u-old-price">$25</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 1.5rem; font-weight: 700;">$19</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price-->
              </div>
            </div><!--/product_item--><!--product_item-->
            <!--/product_item--><!--product_item-->
            <!--/product_item-->
          </div>
        </div><!--/products-->
      </div>
    </section>
    

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-19c3"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">ZFGin, 2023</p>
      </div>
    </footer>

    <?php include_once __DIR__ . '/components/scripts.php' ?>
  </body>
</html>