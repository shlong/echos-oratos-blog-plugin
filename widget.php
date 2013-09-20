<?php
/**
 * A widget that displays a link to the credit page
 *
 * @package EchosOratos_Plugin
 * @subpackage EchosOratos_Widgets
 * @since EchosOratos_Plugin 0.1
 */

class Credits_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'credits_widget', // Base ID
            'Credits Widget', // Name
            array( 'description' => __( 'Shows link to credits', 'text_domain' ), )
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        $url = get_site_url( null, '/credits' );
        echo '<a href="' . $url . '">Credits</a>';
    }

} // class Credits_Widget

add_action( 'widgets_init', function(){
    register_widget( 'Credits_Widget' );
});

?>
