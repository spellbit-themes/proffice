<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proffice
 */

if (  is_active_sidebar( 'blog-widget' ) ) : ?>
	


<aside class="sidebar">

<?php  dynamic_sidebar( 'blog-widget' ); ?>
  
</aside>

<?php else: ?>



              <div class="card custuom-single-card">
                <div class="card-header">search</div>
              <div class="card-body">
                <div class="input-group">
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                <div class="input-group-prepend">
                  <button class="btn th-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
              </div>
              </div>
            </div><!-- end single card -->
              <div class="card custuom-single-card">
              <div class="card-header">RECENT POSTS</div>
              <div class="card-body">
                <ul>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                </ul>
              </div>
            </div><!-- end single card -->
              <div class="card custuom-single-card">
              <div class="card-header">ARCHIVES</div>
              <div class="card-body">
                <ul>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                </ul>
              </div>
            </div><!-- end single card -->
              <div class="card custuom-single-card">
              <div class="card-header">CATEGORIES</div>
              <div class="card-body">
                <ul>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                  <li><a href="#">Worth A Thousand Words</a></li>
                </ul>
              </div>
            </div><!-- end single card -->
              
              
         

<?php endif; ?>
