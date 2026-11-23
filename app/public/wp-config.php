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
define( 'AUTH_KEY',          'vyRJ59q#yU[Xd^WFzG9Eyx?h]K0LJPk7KYu~l}K2M473D|F K6t(@:9@+!&~?k$)' );
define( 'SECURE_AUTH_KEY',   '1<[^yW.0+bJ~yuwBDbzSmKK$KqgG9+h]b:|DIt-IO[Mk-=ZgGBhb8C@gV{o/F &h' );
define( 'LOGGED_IN_KEY',     'Ud>2(T{~~R|TT%)^o*AzRhw08>#vdt4t>$NoJ<7ot&N[QqV+!/>KInrlV,w%|:;1' );
define( 'NONCE_KEY',         'c#nMfVO[]tjNN1$M$</B>nA~yNHG#GAwx0%-Fi]px3:f$H|4>UA8eQq H(Xw59af' );
define( 'AUTH_SALT',         '1ds?zl_ZP8Dj0(m9=pOz=?u~W>&as7;zW3]UVler#0;,,uoo=*0*.Ci^5S}sh7KQ' );
define( 'SECURE_AUTH_SALT',  'beHDu9;wEn%i~53HLQ(b{B6d|@BQ<>^ u=) ILV&$F0-|cI(beddEn!A]=K[Br,<' );
define( 'LOGGED_IN_SALT',    ')W3V5=R+<E,81-i}k4X0u0? 7;!_l2xF-B(eoia>uRGK^F%<VJD[J;WBz6Hii_bD' );
define( 'NONCE_SALT',        '>(5.Ff)fP%/#^{N3RQ:<7,,fr:A&z !:GO?08o$||jv>BlYQ~j3WF/&vXrEwI<~q' );
define( 'WP_CACHE_KEY_SALT', '!Z)mK1ZqzK`&e{f#.LVNT~ IdqVioy_X1m&fp.BC;,P3cm(m#LTun&Id(p`OSFL^' );


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
