<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'composewp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&cWFU66|Onl$+@[qc!h=3(dsW/RCco+,b.^bBnxr^%|*?fs{x~4LR1GF0DYu:=,C');
define('SECURE_AUTH_KEY',  '%!>.s2MQUJX{F[nO&*Sin[?n6K%X|>:qW+aIiDe4h9^>6Q;IP#o1P}LgON-HAV `');
define('LOGGED_IN_KEY',    'Jk&o`cq}y-Xg~G^B!2f)J8,x,Di.uQ$5JBokZ<%(IIFx<,Z?o+R>4AEYx R{Y|BA');
define('NONCE_KEY',        '69Ew <D*1~v3r-b*Ob-y7}!@Mp7h$+KE2AR+.!`vDtzciiUeAI|3b-bW?QN+94jr');
define('AUTH_SALT',        'm@F7Y=bpJF:*a`&Bx|nJXi*1bQ69I(-!pwPuPqL`=(n.?pi2&^zy[;>7FH t-mWw');
define('SECURE_AUTH_SALT', 's`-5FbO5GO(^W[,+,lJ)WP&K$-=]^0Q}|-&;;f>y%r2|jw/(8j[yi^U/FRGpAKh@');
define('LOGGED_IN_SALT',   'Q/!k&2]xD,s2jzgBM+3/xt8_++b%Z~t^K2<iLmg=IK.|:+D{dM0kWt~`!#)>CL+q');
define('NONCE_SALT',       '2|& db=$9+}55JNUEQ?j,6)ek~9YTpRd!|!3GeK=Z&FS70HgzMUn56Rv9T$|Uc6i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);


/** Content directory **/
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp');


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
