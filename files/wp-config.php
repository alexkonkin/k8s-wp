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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
// define( 'WP_HOME', 'http://172.16.95.10:30008/' );
// define( 'WP_SITEURL', 'http://172.16.95.10:30008/' );

/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE') );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IkZ#+af;x;q[a 3Ue .$~e]>NT,5{,N@&C%%dwKjkEBR|A|njWm1lv_o]pf(p*Uq' );
define( 'SECURE_AUTH_KEY',  'L)Y!$- KuiX[m}E@dU*RpbpOHy9$OMnG3TE!a23tSKMupaZxKjKxnmPH5.(<EU?b' );
define( 'LOGGED_IN_KEY',    'OED7{yJ(8ItB~oi9=$WDT5FF|[Sc;~J>7WMe2o5F6`xL9e|&Y#PUb_*..4y<OJjt' );
define( 'NONCE_KEY',        'Fgx@t<wj2wAU5E}T`4BXO#xJPv~%> -ybn~;K!O:T#N;efy-F%%,.p-Sl&QYs1au' );
define( 'AUTH_SALT',        '@/|l~`1f_Sc/^(}~9oAN$fwMq;w[@t>9-Nbjt#wQncUh`HD9zlAk_~,@sD5zhV7C' );
define( 'SECURE_AUTH_SALT', 'BfD+Je*ILgE541+r81|5c9GR:RAZ*N6Zs!8-9C:dQ%H&ybM3.A;]8@!Kuu!@iZ,R' );
define( 'LOGGED_IN_SALT',   'Y$l9]~cv(raOAaSUxQiKea:^s4KULjbXEBx&;P: uG/U ZR~RL}[DNdvOI-)?f]I' );
define( 'NONCE_SALT',       'o=h$|o7PN58JKWj&#Ih;hYAB`wA=}1{&&AfdBrdCw(qX2jz`_#&yq.O;hALF jNN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
