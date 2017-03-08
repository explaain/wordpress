<?php
/**
* Plugin Name: Explaain
* Plugin URI: http://explaain.com/
* Description: Bring your articles to life
* Version: 1.0
* Author: Explaain
* Author URI: http://explaain.com/
* License: GPL12
*/

add_action( 'wp_footer', 'explaain_use_script' );
function explaain_use_script() {
  // Need to detect https
  ?>
<script src="http://use.explaain.com/explaain.js"></script>
  <?php
}


?>
