<div class="container sidebar">
    
      <div class="row">
        <div class="col-3 header-image">
          	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width;?>" alt="murphy's Logo" />
        </div>
      </div>
      
      <div class="row">
    	<div class="col-3 site-identitiy">
            <h1><?php echo get_bloginfo('name'); ?></h1>
            <h3><?php echo get_bloginfo('description'); ?></h3>
        </div>
      </div>
        
      <div class="row">
          <div class="col-3 navbar">
          	<?php wp_nav_menu( array('menu' => 'Header Menu')); ?>
          </div>
      </div>
    
</div>
          
