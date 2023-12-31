<div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-1">
  <div class="u-container-layout u-similar-container u-container-layout-3">

    <a class="u-product-title-link" href="map.php/?id=<?php echo $map['id'] ?>">
      <img alt="" class="u-expanded-width u-image u-image-contain u-image-default u-product-control u-image-3" src="<?php echo $map['icon'] ?>">
    </a>

    <h3 class="u-product-control u-text u-text-3">
      <a class="u-product-title-link" href="map.php/?id=<?php echo $map['id'] ?>">
        <?php echo $map['name'] ?>
      </a>
    </h3>
    
    <div class="u-product-control u-product-price u-product-price-3" data-add-zero-cents="false">
      <div class="u-price-wrapper u-spacing-10">
        <div class="u-price u-text-palette-2-base" style="font-size: 1.5rem; font-weight: 700;">
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