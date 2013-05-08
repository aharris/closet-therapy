<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'closetth_wor1');

/** MySQL database username */
define('DB_USER', 'closetth_wor1');

/** MySQL database password */
define('DB_PASSWORD', 'ZeU6sri4');

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
define('AUTH_KEY',         '$0+Pxbc&hmNxXv]%++P+)92 @mp?nN0|t<gmE(y)EZ&P/czwfMLKh^).^Td{lI`W');
define('SECURE_AUTH_KEY',  'm?Mq_Nj02_Sn=h~L1kL^;0ooS&Yv8KONTdU|Y34S91E68l&ul;sIE}u~)c!Z6(!E');
define('LOGGED_IN_KEY',    'q$<FiXydWt2@302 DW^~`6T&_|Kx.Ewi/;L#Q@5;4Y(4]kW6pZ/n*A5J-B^nD:kE');
define('NONCE_KEY',        'N#!DdSq~I>8bC5[9I.{K%T3oib)hJKXMHAsT[BxJ]5$%]Zgj.A~-+5J;TYNWf!4=');
define('AUTH_SALT',        '8=d!1|!t8rA+hO|u8f=Tz{#$-lT|+WiTA0el @YeXN;+`T7+T??-[+?j$<E0&!*l');
define('SECURE_AUTH_SALT', 'Mg/we,!!;sOin>ZG)/v(9%~S+oH6HE4[X&&.i^:K5(^cR[8E7aB?A)WWK2!r..pu');
define('LOGGED_IN_SALT',   'W~OI&go_v>*GI.H0uAc_+[XRJU{%A kz|/1uwfW8^:#gny;szVNQ_IyH9-}Kwnvr');
define('NONCE_SALT',       '/@X5>t%9i`,mG2@~$]QnEZrGqM7{}QADL+v@@sxEZAv64Ey,%e?$wz$kNCX]PbgV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pao_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
