<div class="u-align-center u-container-style u-list-item u-repeater-item">
  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
    <img alt="" class="u-expanded-width u-image u-image-default u-image-3" src="<?php echo $map['icon'] ?>">
    <h3 class="u-text u-text-default u-text-3"><?php echo $map['name'] ?></h3>
    <div class="rating-result">
      <span class="<?php if($map['rating'] >= 1) echo 'active';?>"></span>	
      <span class="<?php if($map['rating'] >= 2) echo 'active';?>"></span>    
      <span class="<?php if($map['rating'] >= 3) echo 'active';?>"></span>  
      <span class="<?php if($map['rating'] >= 4) echo 'active';?>"></span>    
      <span class="<?php if($map['rating'] == 5) echo 'active';?>"></span>
    </div>
    <a href="map.php/?id=<?php echo $map['id'] ?>" class="u-border-2 u-border-grey-25 u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-3">See more</a>
  </div>
</div>