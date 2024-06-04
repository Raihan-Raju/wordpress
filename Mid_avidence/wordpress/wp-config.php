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
define( 'DB_NAME', 'wp_raihans_volgs' );

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
define( 'AUTH_KEY',         ' Bj(+tYtlqnG-P>22[IMZ}<TjUN7gt.^EgF=6jt<5Vgi/D9rYJ=| nV1P.,nsD^w' );
define( 'SECURE_AUTH_KEY',  'iHhTtSjr20,)o,;!to<`Cs %#wON64Oa4hOK)Bp=lOO(%  *XAXM0KT=jkykgDG8' );
define( 'LOGGED_IN_KEY',    'm;C<rvoo3{t]zR3-4*:,7fXtN8s<#um>Cif(xV~q5aIs#6KlcqP=iq%HpXq>$zkY' );
define( 'NONCE_KEY',        'LLO3lv,O*LOucY F^dPX-bNb<1%#%q34x$7M8jaj!zSx*PWg)Q^X1lXy`.%^C4Ka' );
define( 'AUTH_SALT',        'G9U:IC2=TJ~<Nrl}K9O)iHN1X2NJBgr&1htdFBi,f[M4z.@PZgxg3/(K>A6wRjVT' );
define( 'SECURE_AUTH_SALT', 'pkEci]+u4wSYWbjd5%jiwfTw{%3PmS^E9J^G@_3f*s J3h]!=~3R!wK00=7%LUDy' );
define( 'LOGGED_IN_SALT',   'dGHpqaAW*dv!e2(pB9_9Y#Rz}*KyN{*+)9OpkD XX0qz=GmfOXO]}Zh}9VnUlP=,' );
define( 'NONCE_SALT',       '2o>toZs.VW>x;~p_Fs?)UOwb{q5-Q))L;L}~/5V2EJ^-&UxO=*Ni09X_WoL+0R3f' );

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
