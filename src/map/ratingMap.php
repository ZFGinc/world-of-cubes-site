<div class="<?php if($isstart) echo 'u-active' ?> u-align-center u-carousel-item u-container-style u-image u-shading u-slide u-image-1" data-image-width="520" data-image-height="520">
    <div class="u-container-layout u-valign-middle u-container-layout-1">
        <img alt="" class="u-expanded-width u-image u-image-default u-image-3" style="width: 628px; height: 628px;" src="<?php echo $map['icon'] ?>">
        <h2 class="u-text u-text-default u-text-1"><?php echo $map['name'] ?></h2>
        <div class="rating-result">
            <span class="<?php if($map['rating'] >= 1) echo 'active';?>"></span>	
            <span class="<?php if($map['rating'] >= 2) echo 'active';?>"></span>    
            <span class="<?php if($map['rating'] >= 3) echo 'active';?>"></span>  
            <span class="<?php if($map['rating'] >= 4) echo 'active';?>"></span>    
            <span class="<?php if($map['rating'] == 5) echo 'active';?>"></span>
        </div>
        <a href="map.php/?id=<?php echo $map['id'] ?>" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-1 u-palette-2-base u-radius-50 u-btn-1">See more</a>
    </div>
</div>