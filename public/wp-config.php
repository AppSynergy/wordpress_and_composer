<?php


if (!defined('ABSPATH') ) {
  define('ABSPATH', dirname(__FILE__) . '/wp');
}


if (file_exists(ABSPATH . '../../wp-config.php')) {
	require_once(ABSPATH . '../../wp-config.php');
}
