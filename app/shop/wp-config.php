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
define( 'DB_NAME', 'wp_leviatan' );

/** MySQL database username */
define( 'DB_USER', 'lev_user1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zxcasdqwe123' );

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
define( 'AUTH_KEY',         ')p[XCCF(HzWf*%!6D4izpbGB16Ir7;@4`kCWm):OA%QF*~Rceno}Ke&`Ly@?Fpoc' );
define( 'SECURE_AUTH_KEY',  '@?O,^k1oUu)`MD7CL ULarXx.Di-U9RQY BLO(?xiM/v`OmIT1LGE{k^|<Prn{~S' );
define( 'LOGGED_IN_KEY',    'DDb,,Nf]GKmsc>M&F>4YNC>o0}>q}Vk$u/Qq1k~[-#D@aoo:/vju8A>>JIar?p/R' );
define( 'NONCE_KEY',        'nz~v^8!Nm:Ie1qcj>r#Nx7k:0|Z/euJydv3vI~.^N({mw<9~bnZ7V]qfpo47DV7s' );
define( 'AUTH_SALT',        'EB&W$zK/O!@usnNxAcI k1AM@7QGw~pBtt-5B,2rufrB^oewJ,ZizwuB&!@0WAhn' );
define( 'SECURE_AUTH_SALT', 'X$O!#0>SZ3if9M4DE!F]xpQ<*_jm,)pBU_vdvdy&#OxoJ x,=g9|.p.a^aVhR/*)' );
define( 'LOGGED_IN_SALT',   'tH&D.}*mvod(/}P{596JwUS({(AOehQ/?cDiDMh1`y=Nm;SCc@H,&r86(1Lq/u}i' );
define( 'NONCE_SALT',       'qRQ_;0|ix/;^H-hvPhITZ-9[de!DNM~NZ5%Sa[ZK2|*CLq>M>$9y(@[w9AS<)t)u' );

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
