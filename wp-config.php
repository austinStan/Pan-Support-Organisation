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
define( 'DB_NAME', 'PSO_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '[o)PxT*..AFJF>5OKr{ZXe;u1uZ-a{yF&rc5kF6p{]0>pIGi^{!#r2_6[<1D4Ze/' );
define( 'SECURE_AUTH_KEY',  '2a3=tT%;.}T)09v*(H7T~]iXT7o}Lt$<]06/4cx|ks`,lQ.y@lt@m<sHJ1u3pdaE' );
define( 'LOGGED_IN_KEY',    'm[iQ3`7<mn:2JFio*HccMFf?W*PFB.:0qKXhvMXg,`/[Ml^kf1)qfGmy{a;hYzUz' );
define( 'NONCE_KEY',        '5D`ZP8,7Vyu:#-i?8-=Zq.=fBHiBLRof6zg6Ug)_7b;2!4o*IaJcq}FJHsQY!7 E' );
define( 'AUTH_SALT',        '4I0?_[iHn*o&qbh;C^D$2D#}dy-y7!V.~d^Pg}}[v=+,!,$UmIL}nHYxG#AGSmRy' );
define( 'SECURE_AUTH_SALT', 'R19Z?0szjGnf+.}JL=dS@HXJg[kVG&!to#Bl?_lq,Pp-e@;P)j8~nQU?i-Y->PZC' );
define( 'LOGGED_IN_SALT',   '@hb}W#k7<oV4/,h}P11&Br|_oS2@lR^]a!v_}]xmr$(!+aWPkn#2U5.ugAF.c/aj' );
define( 'NONCE_SALT',       ',a2uR{^v,O_.=b~7nQqhsIWAme%LUnL(L5@e*p^-QlmmFUL]?vc5^<iY@Zw5tZ&=' );

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
define('WP_ALLOW_REPAIR', true);
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


