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
define('DB_NAME', 'dailypu_dpsdev');

/** MySQL database username */
define('DB_USER', 'dailypu_dpsdev');

/** MySQL database password */
define('DB_PASSWORD', '62~ks3Kk');

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
define('AUTH_KEY',         'c]$Zd|I_U/7~$74>P04F0`d!-C25(dn|0*Mb><Y4WatzUy2Io>BatY<.%r{I]/jx');
define('SECURE_AUTH_KEY',  '%!h[%1eNUAPLe(fV7EP,UnmAntkxLy5$ofj_N%n#HPK$W|B0^Uu6*NIYj6|-#nQx');
define('LOGGED_IN_KEY',    '{W-#i|k;x3{#EbId z^M>(Vf5d3+F+z~00#BUtA(eCf2wy&w$gw{H-8z1yr6y-9u');
define('NONCE_KEY',        '9[(~yW~ggY`gF>}Ce+-_0= /T:I8|&g#UY)c`e%_N;X+-vZB/_7[fsey$%|$_W)w');
define('AUTH_SALT',        'byO4_~/`lSss@`z@32,j$*9)ZS-fHDhP,Lm%B _-~%4&vR|BQ+s+PH-In&RdjqcI');
define('SECURE_AUTH_SALT', 'SUxsVG Thl>:r{k(BZvcSKs*RmLI@a2|8~R0$_bf!W|G+v-ketB^%(R1/8.Z,=nv');
define('LOGGED_IN_SALT',   '-g(qR%O$aa^iXftlfZ=Qw+[5 0|+0X]0mK{#-O<|^|Bv=7od<|[$X 7r[2$x{$Jm');
define('NONCE_SALT',       '< `>LSISj**W%zlNi;M _{m(bv>[0Qoq|g|-Xv9j oT|7F|~%![/fmo1C]hQ?Zwh');

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
