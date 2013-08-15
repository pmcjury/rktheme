<?php
/*
 * Template Name: Right Sidebar
 * @package WordPress
 * @subpackage Robert Klara
 */

get_header(); ?>
<div id="bd">
    <div id="lt_col" class="left wide">
        <?php $css_class = is_front_page() ? 'front_page' : 'page'; ?>
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="<?php echo $css_class; ?>" id="page-<?php the_ID(); ?>">
                <div class="entry">
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                <div class="clear"></div>
                </div>
            <div class="clear"></div>
            </div>
         <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
         <?php endwhile; endif; ?>
        <div class="clear"></div>
    </div><!-- lt_col -->
    <div id="rt_col home" class="left narrow">
        <?php get_sidebar(); ?>
        <div class="clear"></div>
    </div><!-- #rt_col -->
    <div class="clear"></div>
</div><!-- #bd -->
<?php get_footer();