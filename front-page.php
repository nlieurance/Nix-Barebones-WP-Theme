<div class="navbar"><?php get_header()?></div>
<div class="container">
<div class="the_grid">
<?php


while(have_posts()){
    the_post();?>
<div class="postcard"><?php the_post_thumbnail()?><h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2></div>
<?php }
?>
</div><!--end of grid-->
</div><!--end of container-->
<div class="footer">
<?php get_footer()?>
</div>