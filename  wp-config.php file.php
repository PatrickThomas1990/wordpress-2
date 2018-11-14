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
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'fjCh/K,juYjlQY-L;Rza^X~+e)_VED79j&&v+m>o<C/#xD^lIGuK>gvw5^nlq]=_');
define('SECURE_AUTH_KEY',  'yDi?Py6rP~T7.PJi{<y&8N0 zC(W?,CN;hbO2IEz|%q|E:K6dllni&}iz4Gp4>G~');
define('LOGGED_IN_KEY',    '#@+s,$bg}pkhvN9(B%FV>LM^:PVp=5Axii)jOVu31F`OmH_9RoK9XX67dm4fV`r3');
define('NONCE_KEY',        'g/)20u%5:To>1X&M?_wxZ(!LQ:g=kEIow+DQt[/~y/^Epo;p!F}-aFz<}PF6JdYa');
define('AUTH_SALT',        'Ah[|dc%U%yhO5zX;HJxNwcpgaxDWU|9<?Jg2MOjJCf_(w)r|4_ueY+<m26*/7|At');
define('SECURE_AUTH_SALT', 'dgE2@fl83{/:sN-uP@860kM8mE=<82T4]x((JO@~F}jGhDWCT}<7&T<)uC/-P7!/');
define('LOGGED_IN_SALT',   '@q:YD4Vm9>,bD+Vn!4-6(i!5NaWI!O|3]N2V&P?L]uqGI;YdA(s7nKNA?AZg&<4H');
define('NONCE_SALT',       'gV 8QQV:TDKK,=Yc>4;|S+1WSntI)wn!^9%!0MfRYAo:M4v@qO1%))Hh1%W_9$H%');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
