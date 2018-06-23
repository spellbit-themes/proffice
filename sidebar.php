<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proffice
 */
?>
<div class="col-lg-4">
  <aside class="sidebar">
  
    <?php
    if(is_page()){
      if(is_active_sidebar('page-sidebar')){
      dynamic_sidebar( 'page-sidebar' );
    }
  }else{
      if(is_active_sidebar('blog-sidebar')){
      dynamic_sidebar( 'blog-sidebar' );
    }}
    ?>  
  </aside>
</div><!-- end sidebar -->