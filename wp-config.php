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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'XL75++gNn]|f29A9`$)h(z_*F:KGV:@PubFL2t{Qlmuwx!K2z%vMJF;;C4 a<N]o');
define('SECURE_AUTH_KEY',  '!Ns/Gw?vf&QcI4iNt7Zqr;S:!F7`a>s/},_s%IPY2*#I2]R;2X4Cn(eQ8Nr/Y}dM');
define('LOGGED_IN_KEY',    '+FsHyfn4|3y-p);}AO(rAn=MI%9g/q&`!T,>>nP@?-)JUM@Hyw(Z9/%wWC2<52,T');
define('NONCE_KEY',        'Ey#P]ZbZjaq95Q4dvp}m]m9P4z6l8Uq%K8eq,R`Lg|F26``dY{wRen(2nWR9dJ:[');
define('AUTH_SALT',        '*t9&#UHlS/.S(G^Rhe{95$P Qv)VqjV|ocJ,*J/bWU*!BI~_U2hU3Km<YqOr_9Ut');
define('SECURE_AUTH_SALT', 'GSMl!/{@+_ubc0bO2UwwOV+Q/i4wP})]43,9eO!{R>.G4.W2WO8Bp%4,eGt#Z<oQ');
define('LOGGED_IN_SALT',   'a,ddho5>_Rp)Hv&GElg_qq4H)+]&#Kv]XUvwl*#cqP]Yg5UsaLpUNKuz;sJKI@h3');
define('NONCE_SALT',       '{m/iMQvKk^TCwa0csZ(>47j7hbo{-J3%|h_]wjI:/qs[JB]PRzXDYE#(hvQm81>]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ct';

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
