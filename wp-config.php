<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nawaf' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CapK|Fa>5zy`@c+hCIk2UTF_M+Y~:la<_]2o 7sa4Sx9EnS/8H}AjR3AM7 9LO1u' );
define( 'SECURE_AUTH_KEY',  'NzU!Wm+QQ.Pe_?~@FSOwksUM8LPRX-[jF/hIVsyB!1T6Eem 6a}H,x/`W/SUP6SP' );
define( 'LOGGED_IN_KEY',    'qy}<f6K+;x>AC5,:K$8]+SB@yF(Xs`+!cNhS>t%Z8Iu3)6M,>>W=0[HHi8^MSZY_' );
define( 'NONCE_KEY',        '{TVS%BdY.Ocok]H*VH&y4Lz@Y-cib&kxWE=-S7PDVZz:Aki&d%6M$bJvHaw5A1%N' );
define( 'AUTH_SALT',        'HVcs(/LNHiWZFQB|&r]b,APZ5OW3Y)(1JDCU~Ewz%BBA?y;W%Nbjs1pO8:MPUhZB' );
define( 'SECURE_AUTH_SALT', 'MWm rbB~;6BBKaEvKchkVRa{m3$7X}XZ>&~6m:w*v(UOfVoMuvy9aM~p =@#QVAU' );
define( 'LOGGED_IN_SALT',   'szU;PJtls5Trd|/Xy{.8C5B:/h>Kgf>D%D76O=~A`/YzW}3n1j$TkLm5`D!C)KQC' );
define( 'NONCE_SALT',       '|LS]1YHv!{Fc<0.>epL<U{+s~b(LQ]x3a+T*8N2#^_^sE8,f6l%<yrRNnwC @7R/' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
