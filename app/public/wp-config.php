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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '8P;)lm=fCEyc2QX<B517}KLq6n2HX1RQIpuq[MOLid`x>U9[#!-#!cgE,ha05QIC' );
define( 'SECURE_AUTH_KEY',   'BAC(7}1}k.s(ns4ZT4bj>;`v?zRK(!td=x4g%s5ZM50CcfA~cYWmjvDPx^FHnhpQ' );
define( 'LOGGED_IN_KEY',     'y?l;H+-JY,Xp{f[J<#d9mw _2z .lo<B=~/Hp/^2-yeUL[T@{=2ah*6):P63Z?YD' );
define( 'NONCE_KEY',         '__~SZQ3@w}OK_.EZ.j;/etshUm<a`oWPdgouB2,]X;jZ,mD)__:Q4fnL639(pOd0' );
define( 'AUTH_SALT',         '.|tkOF^s+mg0_{Ns,R,jv![A.jKd?:tF#cS$$un<|**| L{s$6>.=d:9aWF1>k]K' );
define( 'SECURE_AUTH_SALT',  'BLgeyz&{o Y1(3*gPphX&q0*(.AR _&rmbA~-]V6O2P4_ JkzfBZzr~r( {50#~_' );
define( 'LOGGED_IN_SALT',    ':M}FJ^w9f+M-]exPqdxL+!x)KM3Hq}/cTI *_{0/wt?[r!PS?E$!8K/(mg*AbB4-' );
define( 'NONCE_SALT',        'B<[?=sZ!<.U[8E19J~uC~MR8p$^!2?y=YjL%~Kdd7XX/|v. o{.c0e_T-4I<my?Q' );
define( 'WP_CACHE_KEY_SALT', 'F,V/= #x>1!4.c6_u. y<!GHMo&4ik}`Y&yq(Ebe3LP_n1c @3EvmlmfhTN<)qnZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
