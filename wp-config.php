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
define( 'DB_NAME', 'christinefernandes-assignment' );

/** Database username */
define( 'DB_USER', 'christine' );

/** Database password */
define( 'DB_PASSWORD', 'Password1.' );

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
define( 'AUTH_KEY',         'zdeII(%MTa>(XI5+bfS=]9Q[6 n0{P(0s#oQPv7X1^k(UHYYjEow,E^=M7NbvA=[' );
define( 'SECURE_AUTH_KEY',  'YTk3)pk~#~TMl6-9+xA+H9v?hbj*GcgH)T%O}vgk27juY,||W1uq6,QjnT#A+j% ' );
define( 'LOGGED_IN_KEY',    '],6lEk}hO&vFJ.bck0{}WQViq}+}4*,;Cs3o:q7&mtFZg1;|[TC}4h4bgViQd:>m' );
define( 'NONCE_KEY',        '39]0)=wa18K#1EzX-39-[)elySpt<%.WN[v(x*X;1W{Q%=F50D^yQnR_pN%/RmM?' );
define( 'AUTH_SALT',        'nWU(7N`a!BF>P2<t6LRq#POQ]nHvXP5|8U;VR`s[~,]y;bmU4E, yj}.R.RQwPET' );
define( 'SECURE_AUTH_SALT', 'x@2hcQ9j`9SHM@uG0z(ao2sT:4G`T h{FN=Z:K#FkF >U{?>@PrYow{fn!5A7*N#' );
define( 'LOGGED_IN_SALT',   '4?#wi&1Cj^`{^#Do)&lgYl;Pmx-sf0*J*+|G8zi|N0Ha,(1X9>6myJ1a{bnrm]bT' );
define( 'NONCE_SALT',       'B8lt/gMVAS<#._TJu7qa [B@%nL-fkauM|vWeiRV1DRzN+<H5@cFoBI]MNg*n_1`' );

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
