<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_woocommerce' );

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
define( 'AUTH_KEY',         'v6lqloyXOMO,f[Tj6{M~9*M*j#p[roBAgA*PyJgkly,v,0F_woBs/_7htaBmuR${' );
define( 'SECURE_AUTH_KEY',  'QKSfeTJ2CxPjMv }FGD8Iy^hEQlSFLzIc>,W,-L$5:A#2Qxj*LQ>k+P,PPP.+c]f' );
define( 'LOGGED_IN_KEY',    '-%],u>$O^,J9`o*:l)Eft{N(sg^Q.{/wB(ak`B?QwT5SR[QU&z?nq?!8(&=D=+zc' );
define( 'NONCE_KEY',        ' mHsJ=_-e%o| >^kHm6uH3*YG>$f,EPUxQ=ix0$7Lxng3zGSZ~a80MT: J=0E0yL' );
define( 'AUTH_SALT',        '=P1xU1SuFRh34 m%Tv,)W~Z[R(l0^rD[C:D~Z_DBq=3AT+-aTi*Q@AV+o>oI^z~2' );
define( 'SECURE_AUTH_SALT', '*rT_qKqv]p4aMbx~PAdjE]b!#8||F11 %q<|>UI_Hi&tqA*MC+k<csFM |yj<@l&' );
define( 'LOGGED_IN_SALT',   'i[Dte6HHPfyHNA2rC apw?,:1^S`8~[qE~*]ZOv[=wCBJq/N>aJww[ShxJNr57Id' );
define( 'NONCE_SALT',       'BJ095X~E5n@,FMKVu{<4f*:LFrI+a)M-{_HHmA^>wut8=[&j@w1FD;.bIUa3lq6u' );

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
