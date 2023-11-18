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

  $auth = checkAuth();
  if($auth == true){
    $user = getUserId();
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

    <SCRIPT SRC="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></SCRIPT>
    <link rel="stylesheet" href="/assets/css/map.css" media="screen">
    <link rel="stylesheet" href="/assets/css/nicepage.css" media="screen">

    <script class="u-script" type="text/javascript" src="/assets/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="/assets/js/nicepage.js" defer=""></script>

    <meta name="generator" content="Nicepage 5.21.10, nicepage.com">
    <link rel="stylesheet" data-font="Josefin+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">

    <style>
      .left{
        width: 35px;
        height: 15px;
        margin: 10px
      }
      .right{
        width: 35px;
        height: 15px;
        margin: 10px
      }
    </style>

    <script>
      function sendrating (star) {
        $.get({
          url: '/src/actions/sendrating.php?id=' + <?php echo $_GET['id'] ?> + '&star=' + star + '&user=<?php echo $user; ?>', 
          success: function(result){console.log(result);}
        });
        redirectThis();
        return false;
      }
      function redirectLogin(){
        window.location.href = "/sign_in.php";
      }
      function redirectThis(){
        window.location.href = "/map.php/?id=<?php echo $_GET['id'] ?>";
      }
    </script>
  
  </head>
  <body class="u-body u-xl-mode">

    <?php include(__DIR__ . '/src/header.php'); ?>

    <section class="u-clearfix u-block-a6b7-1">
    
      <div class="u-clearfix u-sheet u-block-a6b7-21">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-block-a6b7-3">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-block-a6b7-4">
                  <div class="u-container-layout u-valign-top u-block-a6b7-5" src="">
                    <img class="u-expanded-width u-image u-block-a6b7-23" src="
                      <?php echo "/" . $map['icon'] ?>
                    " data-image-width="1080" data-image-height="1080">
                    <div style=" display: inline-flex; justify-content:space-between;">
                      <a href="<?php echo "/" . $map['archive'] ?>" class="left u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-3 u-text-body-alt-color u-text-hover-white u-block-a6b7-16">
                        ​Скачать&nbsp;
                      </a>
                      <a href="/user.php?id=<?php echo $map['author'] ?>" class="right u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-3 u-text-body-alt-color u-text-hover-white u-block-a6b7-16">
                        <?php echo $author['name'] ?>
                      </a>
                    </div>
                    <div style=" display: inline-flex; justify-content:space-between; visibility: <?php if($auth == true && hasMapRatingSend($_GET['id'])) echo 'hidden';?>;">
                      <p class="u-small-text u-text u-text-variant" style="margin-left: 35px;">Оценить</p>
                      <div class="rating-area">
                        <input type="radio" id="star-5" name="rating-5" value="5" onclick="<?php if($auth == true) echo 'sendrating(5)'; else echo 'redirectLogin()'?>">
                        <label for="star-5" title="Оценка «5»"></label>	
                        <input type="radio" id="star-4" name="rating-4" value="4" onclick="<?php if($auth == true) echo 'sendrating(4)'; else echo 'redirectLogin()'?>">
                        <label for="star-4" title="Оценка «4»"></label>    
                        <input type="radio" id="star-3" name="rating-3" value="3" onclick="<?php if($auth == true) echo 'sendrating(3)'; else echo 'redirectLogin()'?>">
                        <label for="star-3" title="Оценка «3»"></label>  
                        <input type="radio" id="star-2" name="rating-2" value="2" onclick="<?php if($auth == true) echo 'sendrating(2)'; else echo 'redirectLogin()'?>">
                        <label for="star-2" title="Оценка «2»"></label>    
                        <input type="radio" id="star-1" name="rating-1" value="1" onclick="<?php if($auth == true) echo 'sendrating(1)'; else echo 'redirectLogin()'?>">
                        <label for="star-1" title="Оценка «1»"></label>
                      </div>
                    </div>
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
                    <div class="rating-result">
                        <span class="<?php if($map['rating'] >= 1) echo 'active';?>"></span>	
                        <span class="<?php if($map['rating'] >= 2) echo 'active';?>"></span>    
                        <span class="<?php if($map['rating'] >= 3) echo 'active';?>"></span>  
                        <span class="<?php if($map['rating'] >= 4) echo 'active';?>"></span>    
                        <span class="<?php if($map['rating'] == 5) echo 'active';?>"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include_once __DIR__ . '/src/footer.php'?>
    
  </body>
</html>