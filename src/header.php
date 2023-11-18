<?php
$first = '<li class="u-nav-item">
<form action="/src/actions/logout.php" method="post">
  <button class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" role="button">Quit</button>
</form>
</li>';

$two = '<li class="u-nav-item">
<form action="/src/actions/logout.php" method="post">
    <button class="u-button-style u-nav-link" role="button">Quit</button>
</form>
</li>';

?>
    
    
    <header class="u-clearfix u-header u-palette-1-base u-sticky u-sticky-d56c u-header" id="sec-730b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="/" class="u-image u-logo u-image-1">
          <img src="/assets/images/icon.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu-1">
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/" style="padding: 10px 20px;">Maps</a>
              </li>
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/upload_map.php" style="padding: 10px 20px;">New map</a>
              </li>
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/download" style="padding: 10px 20px;">Download game</a>
              </li>
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/user.php" style="padding: 10px 20px;">Account</a>
              </li>

              <?php
                if(isset($auth)) {
                  if($auth == true){
                    echo $first;
                  }
                }
              ?>

            </ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/">Maps</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/upload_map.php">New map</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="">Download game</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/user.php">Account</a>
                  </li>

                  <?php
                    if(isset($auth)) {
                      if($auth == true){
                        echo $two;
                      }
                    }
                  ?>


                </ul>
              </div>
            </div>
              <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
      <style class="u-sticky-style" data-style-id="d56c">
      .u-sticky-fixed.u-sticky-d56c:before, 
      .u-body.u-sticky-fixed 
      .u-sticky-d56c:before {
        borders: top right bottom left !important
      }
      </style>
    </header>