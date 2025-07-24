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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lofri_bbdd_2024' );

/** Database username */
define( 'DB_USER', 'lofri_ad_24' );

/** Database password */
define( 'DB_PASSWORD', 'eKu49k[,669#' );

/** Database hostname */
define( 'DB_HOST', 'lofri.es' );

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
define( 'AUTH_KEY',         '5A90Fufb5+>|qJ~g^vK(@Y}cYxs)&$CyD~F@4cvz [Ovx^7Va3k50;mOb5L%{Uqp' );
define( 'SECURE_AUTH_KEY',  'lct.L3Ce%w%wgSUUqm|(.Cco%^Q4s^S4 x<]dr(DXDslXew]Mvum1*qrwYrsEdjG' );
define( 'LOGGED_IN_KEY',    'Jmxs>u|6FDr8`Jsr`xj3)CZO<z)`.PMoK(uCx`:`x8QBh.EnHK(7HGc;}xM[}`3h' );
define( 'NONCE_KEY',        'Tv8,&a/IhxLAsb;_-Ceg-,sU?fR/e>/M2TqXd@,&e<E&)E;$F]Ati`h0@;zKcex,' );
define( 'AUTH_SALT',        'D?b*Zu2j#>}{Mh.a$cN}|;gT*I{Hu#s!]SgpGe|0C=O@o09R!JK>[xA^82{jcA}6' );
define( 'SECURE_AUTH_SALT', 'D@+,MOGLo4uIa26Y?t$I-`z*]ja-,fjw|fJg[DoR<5*ls7;U#&)BSe$y0BN]]I`/' );
define( 'LOGGED_IN_SALT',   'pw6(3|^ro!7(eq-!4Ey;mlESa7#^`}5In(-T~vpTVF: ~kF4u>NB|>6u(Hjd;o6s' );
define( 'NONCE_SALT',       '@>yE2y]Kd7NN`C:qp4Dd=(o2N$-2Zat$pP~6;T(.`xI|m:}(F}G~@QTC/%7TXji(' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
