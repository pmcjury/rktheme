<?php
/**
 * @package WordPress
 * @subpackage McJury Enterprises
 */

function register_header_menu() {
    register_nav_menu('header-menu-top',__( 'Header Menu Top' ));
    register_nav_menu('header-menu-bottom',__( 'Header Menu Bottom' ));
}
add_action( 'init', 'register_header_menu' );

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

add_action('admin_menu', 'rk_theme_page');
function rk_theme_page() {
    add_option( 'latest_news', '' );
    add_theme_page(__('RK Theme Options'), __('RK Theme Options'), 'edit_themes', basename(__FILE__), 'rk_theme_page_options');
}

function rk_theme_page_options() {
    if( !empty( $_POST['action'] ) ) {
        if( $_POST['action'] == 'update' ) {
            $rkOptions = array( 'latest_news');
            foreach( $rkOptions as $option ) {
                if ( isset( $_POST[$option] ) ) {
                    $value = $_POST[$option];
                }
                $value = trim( $value );
                $value = stripslashes_deep( $value );
                update_option( $option, $value );
            }
        }
    }

    ?>
<div class="wrap">
        <?php screen_icon(); ?>
    <h2>Robert Klara Theme Options</h2>
        <?php if( $_POST['action'] == 'update' ) : ?>
    <div style="background-color: rgb(255, 251, 204);" id="message" class="updated fade">
        <p><strong>Settings saved.</strong></p>
    </div>
        <?php endif; ?>
    <form name="form" action="" method="post" id="rk-options">
            <?php wp_nonce_field('options-options') ?>
        <input type="hidden" name="action" value="update" />
        <input type='hidden' name='rk_option_page' value='options' />

        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="rk_theme_header_home_pitch"><?php _e('Special Message') ?></label></th>
                <td>
                    <textarea cols="10" rows="3" name="latest_news" id="latest_news" class="large-text" ><?php form_option('latest_news'); ?></textarea>
                    <span class="setting-description"><?php _e('This is the message to show on the home page for the latest_news. It can be overridden with an alt value in the post'); ?></span>
                </td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" name="Update" value="<?php _e('Save Changes') ?>" class="button-primary" />
        </p>
    </form>
</div>
<?php
}