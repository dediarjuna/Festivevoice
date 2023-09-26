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
define( 'DB_NAME', 'festivevoice' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'O9M5yM&5J&)TVg8y#lO3 %`K v.Uvkqrr[C-tn)=o;cC+Lr,XFT(G)bxEbAspbQ9' );
define( 'SECURE_AUTH_KEY',  '1cadSs~ykD2>+vFK.:U$()q[*WPnCqb?.258&Y`1d0Y6x@0K)@2(4bp[n@jguFCl' );
define( 'LOGGED_IN_KEY',    'BZ{YJR{0z$I#%v2wf]YXOuc(V~#!b9:Bo/WAB]ekK)Z},BW?YtIfA,Ek6,ALwhuW' );
define( 'NONCE_KEY',        'Cu+ <s&,2mO})h2m6fR%ZYc4/]_;+:$IO*g6BcE.[^{y97]&K|7D;c7xt/*7)5a3' );
define( 'AUTH_SALT',        'qK)1!i~1Lm9J&k~gxNVFp}R2i)dPwBgh/#0-cx>7K|XKCV+/&JZ!hK< xon&l5kt' );
define( 'SECURE_AUTH_SALT', '|`<{/f}aO%=W@c[&IcICR!Pcx|FP0ab$%@N1Ooe#M5eaf`3](4b&t^dJy*{f` n{' );
define( 'LOGGED_IN_SALT',   'oJ0j%{>-oA>A[1$P-qx(S`vd||>qE23d}t@1Jp$<4XQ]9sJshPjeEnsp//fS[+~B' );
define( 'NONCE_SALT',       'kcyj7Z9i6?8oJpt%1lUlc6,C}8;M#M82tuLN&<uyBx~RhzY4tez{d4COD?26AcvD' );

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
