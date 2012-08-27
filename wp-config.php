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
define('DB_NAME', 'mu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'aditya.com');

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
define('AUTH_KEY',         'Y)/GY5=4d+{{?Q+I5ir-BL@DbRI/AcIPs?e/~SGPNX;:]I7_mBYsu>Gi13:*g<<r');
define('SECURE_AUTH_KEY',  '@^QQH?:Peh?3}NO@S>Lxx^lhw1GK%3Y)=DH jEg%XN/;qHW<**r/U):OF,g+cX+}');
define('LOGGED_IN_KEY',    '[C6K`a3~u H9IMkFzAR$o(Y26&BEoTX3GSyueTGxux{%U}@3gfvEO_G5Xu)QpC+T');
define('NONCE_KEY',        'AYsmD?tQ:xrLo[%[NmMK5@IY378AU9h~4L/m:),a>=  nS+C*2!|K%0nNWs_Rr1w');
define('AUTH_SALT',        '/V}a/P#>GWO[871D-pa5?Xa2$f;^9{/Gbbm#kc<(yb= `%IjJKP,3c{%rp{>.@~p');
define('SECURE_AUTH_SALT', '!.prCP-(1[-C)g(]LC|Q&!{zG{I$wCp=aV#P#^j8Vxd2p>-.o%yC`}ru7Gm9eL&C');
define('LOGGED_IN_SALT',   '$$6/C{)fw^(QM/.t9|Cb.DH*oz]!%ZcL+~rW7<ji}Lx6h[m-f$@6<.Ub]3cMp687');
define('NONCE_SALT',       'LK@]9@k5zDa5D~n|NZ=4A=HXYZ<T<~YhC5*FKi8etWxd.HorN`gY4Z<|+4qoLXs&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aditya_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */

//define('WPLANG', 'ar');
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multi site settings*/
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
$base = '/mu/';
define('DOMAIN_CURRENT_SITE', 'aditya.com');
define('PATH_CURRENT_SITE', '/mu/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
