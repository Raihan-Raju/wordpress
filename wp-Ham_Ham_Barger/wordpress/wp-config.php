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
define( 'DB_NAME', 'hamhambarger' );

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
define( 'AUTH_KEY',         '1dTa*74p3Y=;ylGRpN[[jM,^e1G7{58xH&5T60x3#2@F}xI)%87Ljeg%Z0by2SMC' );
define( 'SECURE_AUTH_KEY',  'a1(^{)(0AQ&nv]-=SJy`6Z9zekS[|byo{u=X$)Nn^[YXcB4>GIH?15A5!r@c66]C' );
define( 'LOGGED_IN_KEY',    'BSl|]YKKYX:3`;hoI<Wzb_N;G*FMoYBPJ3K]z(oZ6zCDQ7EV]ta2 4yd$$AA[{U_' );
define( 'NONCE_KEY',        'JN!@e4~5Z8yN0&telFPY$k*:K.if> rp)<=*T6*|5K8M{3PCusTMELqLf6*DINW9' );
define( 'AUTH_SALT',        'Ly?0u+n!J@s<ZMP*7ZO Xx_:rx=K#A4(#b$H*)N61V idz6*gDH>[]?S%2vD#HZ1' );
define( 'SECURE_AUTH_SALT', 'NU`K!yKNE#F^2L%3y`qKD;2l1JBYl<9Ud)u|;%{8LO4JAi-hKS;8Q?g%#9aO%(oV' );
define( 'LOGGED_IN_SALT',   'Df0))IHS@e$?b fUW/X-]amR_pP_cp1%2R}z9~Iz&OP$IVL0C]n>!w`le-*eFG5K' );
define( 'NONCE_SALT',       '5@rzrJZxsQ-[zI@ADN2Px4Q3e(zlmC&9*%M}al,Z+_?Ou;XQ=~3[]+1&s:}%6`5n' );

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
