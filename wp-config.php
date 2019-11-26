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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressUser' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'K2mJLj/v?)`&*`sy`g-$2A5OYO&or8t1ay#pjxt+;Z<<M2AA/f.N()}cqQSfwi-R' );
define( 'SECURE_AUTH_KEY',  '+9nt!V%p=Xf]UbS5h:jk@DI+bLeyMKCABq]fYPdz=T>`b^489yL!:S&D)mq2nz4h' );
define( 'LOGGED_IN_KEY',    'i/eqy.->t]@fJ(j-G5L1P*9UI80I(IdiJBD|hS^qsTV6T_47U.)0}q,*T8WyGBcx' );
define( 'NONCE_KEY',        'o&u lfyO|1W4Sw6LPd^i}4+t9lbpBTm:&HZ^nc-~60#@)3`Qz>xiA6Pp*70VSN($' );
define( 'AUTH_SALT',        '(Sacxs8&j&>IkEnK]}<BpD@nU}7J[ |/@f(-9V!yGBJjnc]t0s.#M0yWze~[9/N(' );
define( 'SECURE_AUTH_SALT', 'Yj,yT#0K1>e%s7yTpC7{im0&62H{*L,O%79|#IIi)tQ[.r3&=LY_%H[n!EcG c:9' );
define( 'LOGGED_IN_SALT',   '8U[UT1ZSMt4G|OP2PEwF/+A[SG9H;{,;2r{R_2#$cZ-lg:-92x~+dF#nO#(lK6op' );
define( 'NONCE_SALT',       'r );sxy>@dYU{`3(k5( ?Fdr4b#OY.;#UkAnZIqJ=z&5~Ld ;a4jq*:/R/LF!070' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

set_time_limit(300);