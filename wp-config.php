<?php

// DATABASE
$table_prefix = 'tbl_';
define('DB_NAME', 'composewp');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// SALTING
define('AUTH_KEY', '&cWFU66|Onl$+@[qc!h=3(dsW/RCco+,b.^bBnxr^%|*?fs{x~4LR1GF0DYu:=,C');
define('SECURE_AUTH_KEY', '%!>.s2MQUJX{F[nO&*Sin[?n6K%X|>:qW+aIiDe4h9^>6Q;IP#o1P}LgON-HAV `');
define('LOGGED_IN_KEY', 'Jk&o`cq}y-Xg~G^B!2f)J8,x,Di.uQ$5JBokZ<%(IIFx<,Z?o+R>4AEYx R{Y|BA');
define('NONCE_KEY', '69Ew <D*1~v3r-b*Ob-y7}!@Mp7h$+KE2AR+.!`vDtzciiUeAI|3b-bW?QN+94jr');
define('AUTH_SALT', 'm@F7Y=bpJF:*a`&Bx|nJXi*1bQ69I(-!pwPuPqL`=(n.?pi2&^zy[;>7FH t-mWw');
define('SECURE_AUTH_SALT', 's`-5FbO5GO(^W[,+,lJ)WP&K$-=]^0Q}|-&;;f>y%r2|jw/(8j[yi^U/FRGpAKh@');
define('LOGGED_IN_SALT', 'Q/!k&2]xD,s2jzgBM+3/xt8_++b%Z~t^K2<iLmg=IK.|:+D{dM0kWt~`!#)>CL+q');
define('NONCE_SALT', '2|& db=$9+}55JNUEQ?j,6)ek~9YTpRd!|!3GeK=Z&FS70HgzMUn56Rv9T$|Uc6i');

// ARCHITECTURE
define('WP_HOME', 'http://localhost/Dev/composewp');
define('WP_SITEURL', WP_HOME.'/wp');
define('WP_CONTENT_DIR', dirname(__FILE__).'/wp-content');
define('WP_CONTENT_URL', WP_HOME.'/wp-content');

// OPTIMIZATION
define('WP_MEMORY_LIMIT', '64M');
define('WP_DEBUG', false);
define('DISALLOW_FILE_EDIT', true);

// CORE
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__).'/wp');
}
require_once ABSPATH.'wp-settings.php';
