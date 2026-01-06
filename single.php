<div class="navbar"><?php get_header()?></div>
<!--div class="the_grid"-->
<?php
    while(have_posts()){
        the_post();?>
        <div class="post-content">
        <h2><?php the_title()?></h2>
        <div class="tag"><?php the_tags()?></div>
        <p><?php the_content()?></p></div>

<?php }
?>
<!--/div-->

<?php get_footer()?>
