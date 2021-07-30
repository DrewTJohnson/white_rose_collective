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
define( 'DB_NAME', 'drewtjohnson.com' );

/** MySQL database username */
define( 'DB_USER', 'drew' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^kQ*>#@U$ yS9x`90G(&MM4tJ hAKcDtYYZ+%mOYrJ8 Jj?V~Oo_G>GKjZSwNlHw' );
define( 'SECURE_AUTH_KEY',  '2)>!l$,<,g>MtZlVFQ:WROf3LO~7#ne|3~3dI;whiD>~Ik5CX($i0t7QW_E-AJLf' );
define( 'LOGGED_IN_KEY',    'dn67]^+2&Lz-yT3>/*]!t3SV`hO0H{WQ(iIquI%H/(oM5z3W8.&VZJ(80tBJ6Fag' );
define( 'NONCE_KEY',        'T-aVYv&8I.#WUV3w:okPHsdZ)I5Qf^oFFpTH12O2Q}?&W.Ex_V`y~!~lwR@KB,-C' );
define( 'AUTH_SALT',        '1,8!yyj<&%+`!Xo&PI>_;,eZE30rS9ZD99M-QnXtiR6v7c$G$zX<]MiBM@=h{C~X' );
define( 'SECURE_AUTH_SALT', '>.i*+&DE/Se8Go-{-@@Ud d9P{AmVDsCr1iqD.k2ybNcw(4ijSMi-f;BgAxBak6^' );
define( 'LOGGED_IN_SALT',   'e;*q7YvFD5,m!u {dF( GuXK!C<hF|ACR1/.A!BW%UMA(6D~F_H}WyfqT8^p]QrA' );
define( 'NONCE_SALT',       'T[s>n_RV7&_mIMBA`H_)k]X[G%?zvte<,(g0Lf8PIq&gld.BvYWmwR1hwlc}8US7' );

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
