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
define('DB_NAME', 'wp_siamgit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'D=d-$3aFweqQE0^8T!<B)]Njv=I|T5[T=UUsoge)>)s]F<wW?D]-@9_Ww?2f8p+Q');
define('SECURE_AUTH_KEY',  'Qzn,s84Mi;1<f8G-&`E$/7WtFj]!slpq47heJh>!%HEmkFtWy$pAqB^kJ]MrT1Id');
define('LOGGED_IN_KEY',    'wQOdr$0|WfA:atKAx>95ry +/*8~F9+? JxI26td[6~H%_J;(MU=cCpG@heaW)f6');
define('NONCE_KEY',        '3S8D$>b(^XLzI`)8+0s<#i]6?>>zt!sTMf$L3>oQa?-9f>L<1^wbU3TUzD0#a%+;');
define('AUTH_SALT',        'R@c`[]D&AvkupnZM3qd8Q<7)AQy:Or3fc?(/S`+dQSG8j65 c+^XaES`-[2P]+E$');
define('SECURE_AUTH_SALT', '|Ku_$/L5S.v>7;dZma)Q0a%!6[n]$0}?vLH_bq/R[;{XppWPdQ789uEe$ly5N8>f');
define('LOGGED_IN_SALT',   '`DhFL6[.{Y:F4R6^Zv/0y:79dP#YQp$uz!63 HH_Wn8^n{{~LP@X^tJ/%v +sfXs');
define('NONCE_SALT',       'KH<b_<N+u5YwP:az^ll+u^K..9_HLkyCxkw+f-|Ht*SXk-hyCUeDo`.{B1(T?9tR');

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
