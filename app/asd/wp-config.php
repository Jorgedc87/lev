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
/** The name of the database for WordPress */
define( 'DB_NAME', 'leviatan_db' );

/** MySQL database username */
define( 'DB_USER', 'pmauser2' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ',%2Aqcqkz[r0Z^:18hnrX|;ZjA([.dY~1.(d}$UJQAbwr<zsD[,&JU5Y]%]dyf&&' );
define( 'SECURE_AUTH_KEY',  '|lS oW)Y$ktf5EP>u-UFD3$?hCRr2}3&ZCm;0<(J3Am!N{@)S#zvX.i[9>W.3b};' );
define( 'LOGGED_IN_KEY',    ' 2)Ajgk0|1k:V!|!Q*~fTK^7K$ba[d,8!}5&18C(].PUeb$CeD<Ptg>K>f :6`)l' );
define( 'NONCE_KEY',        '!s24C 5sG%I)ShUF3hUs`4JD9!;VB@5[^r|[s@!d4J.kezo5DnUd{^5,|,$*ykfy' );
define( 'AUTH_SALT',        'NXb#=AHQW<lP[Y>=<pr)c4:Lt3ZtwlRl`PW08Z$G/p8T$h&d {oo#q%=nH?#71Cy' );
define( 'SECURE_AUTH_SALT', 'cd]A.seq9R 5:ggwC]g4Jw:,nm194nUI~A;GTQI&K+UIGx_U3%e7FRKg/ldTZ$Ty' );
define( 'LOGGED_IN_SALT',   'SlAhGNLu8BjYpKoU/><TJt8FU@&@|#pMWG[?`#]uC5Fui3mBlGh593HJ`2T!//Ot' );
define( 'NONCE_SALT',       'I1O=M~U+h$v8]q oy@[T).-~Zh{rV$zd&60adqOKr)]y0LA/6}E ,QHI W0@tI6#' );

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
