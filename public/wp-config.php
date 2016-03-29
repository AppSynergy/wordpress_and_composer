<?php


if (!defined('ABSPATH') ) {
  define('ABSPATH', dirname(__FILE__) . '/wp');
}


if (file_exists(ABSPATH . '../../config.php')) {
	require_once(ABSPATH . '../../config.php');
}
