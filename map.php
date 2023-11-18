<?php
require_once __DIR__ . '/src/helpers.php';
?>

<?php

  if (isset($_GET['id'])) {
    $map = getMap($_GET['id']);
    $author = getUser($map['author']);
  } else {
    redirect('/');
  }
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once __DIR__ . '/components/head.php'?>

    <title>
      <?php echo $map['name'] ?>
    </title>
    <link rel="stylesheet" href="/assets/css/map.css" media="screen">
    <link rel="stylesheet" href="/assets/css/nicepage.css" media="screen">

    <script class="u-script" type="text/javascript" src="/assets/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="/assets/js/nicepage.js" defer=""></script>

    <meta name="generator" content="Nicepage 5.21.10, nicepage.com">
    <link rel="stylesheet" data-font="Josefin+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">
  </head>
  <body class="u-body u-xl-mode">

    <?php include(__DIR__ . '/src/header.php'); ?>

    <section class="u-clearfix u-block-a6b7-1" custom-posts-hash="[I,T]" data-state="{&quot;min-height&quot;:{&quot;canCollapse&quot;:{&quot;XL&quot;:null,&quot;LG&quot;:null,&quot;MD&quot;:null,&quot;SM&quot;:null,&quot;XS&quot;:null}}}" data-post-id="2128098000" data-section-properties="{&quot;grid-spacing&quot;:&quot;0&quot;,&quot;spacingAdditional&quot;:&quot;none&quot;,&quot;width&quot;:&quot;section&quot;,&quot;align&quot;:&quot;center&quot;,&quot;margin&quot;:&quot;none&quot;,&quot;stretch&quot;:true}" data-id="a6b7" data-posts-content="[{'images':[[570,655]],'maps':[],'videos':[],'icons':[{}],'textWidth':570,'textHeight':655,'id':1,'groupId':2,'headingProp':'h2','textProp':'text'}]" data-height-lg="317.78099999999995" data-style="new-grid-01" id="sec-16da" data-source="Sketch" data-manual-length-set="true">
    
      <div class="u-clearfix u-sheet u-block-a6b7-21">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-block-a6b7-3">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-block-a6b7-4">
                  <div class="u-container-layout u-valign-top u-block-a6b7-5" src="">
                    <img class="u-expanded-width u-image u-block-a6b7-23" src="
                      <?php echo "/" . $map['icon'] ?>
                    " data-image-width="1080" data-image-height="1080">
                    <a href="<?php echo "/" . $map['archive'] ?>" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-3 u-text-body-alt-color u-text-hover-white u-block-a6b7-16">
                      ​Скачать&nbsp;
                    </a>
                  </div>
                </div>
                <div class="u-align-center u-container-style u-layout-cell u-size-30 u-white u-block-a6b7-8">
                  <div class="u-container-layout u-block-a6b7-9">
                    <h2 class="u-text u-block-a6b7-10">
                      <?php echo $map['name'] ?>
                    </h2>
                    <p class="u-small-text u-text u-text-variant u-block-a6b7-24">
                      <?php echo $map['description'] ?>
                    </p>
                    <a href="/user.php?id=<?php echo $map['author'] ?>" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-block-a6b7-13">
                      <?php echo $author['name'] ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
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