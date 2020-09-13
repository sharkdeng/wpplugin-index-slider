
<?php
   /*
   Plugin Name: Index Slider
   Plugin URI: https://github.com/sharkdeng/wpplugin-index-slider
   description: This plugin shows slider on your index.php
   Version: 0.1
   Author: Shark Deng
   Author URI: https://github.com/sharkdeng
   License: GPL2
   */
    
    
    
    
    function fix_content( $text ) {
        return str_replace( 'wordpress', 'WordPress', $text );
    }
    add_filter( 'the_content', 'fix_content' );
?>



