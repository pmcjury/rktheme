<?php
/**
 * @package WordPress
 * @subpackage Robert Klara
 */

get_header(); ?>
<div id="bd">
    <div id="lt_col" class="left">
        <ul id="nav">
        <?php wp_list_pages("title_li=&sort_column=menu_order&depth=1&exclude=33"); ?>
        </ul>
        <div class="clear"></div>
    </div><!-- lt_col -->
    <div id="rt_col" class="right">
        <div class="clear"></div>
    </div><!-- #rt_col -->
    <div class="clear"></div>
</div><!-- #bd -->
<?php get_footer();