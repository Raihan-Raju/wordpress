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
define( 'DB_NAME', 'word_press' );

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
define( 'AUTH_KEY',         ' Z(3&tSuR0;c|,cL@x#cpn<j):0$S#Zb9$DzZjYg4<t@b<069K6m@-@iWuJb>DM|' );
define( 'SECURE_AUTH_KEY',  ':!EEK%-nplg>bjxL^`tynp0Q$0$;;;--IrY]2BZw[ $EK#Ay5ZTdB){gVU@l5&r,' );
define( 'LOGGED_IN_KEY',    'z{tWc7CNzQnmH/]|sWW^P~,vST}lC}jj/%Ke`/6,vk&jzu 1U[-x/:~3CoR*)0xM' );
define( 'NONCE_KEY',        '2sO^@Ovq^3G(:4Z[e+l_>Gm//_Cf4l]pK_AgA1:~N_Rc<yr1.$c5hT0{i!TL<0yC' );
define( 'AUTH_SALT',        ';uF~WYRQxv_Vy_43SusypYsT=f}V2~woo]%v,vi0Ads)0Gy+!f#TN*NIQ7iW#vt>' );
define( 'SECURE_AUTH_SALT', '(UwgE%r*`=UOt${(v?$jm=ul1YFP5jC85x2v7*#ET+4|h|^hU>OPK0/Q#1^l,CW2' );
define( 'LOGGED_IN_SALT',   '45`#46l:0|[~+K@?K0z;Vh[4S[^Qy9P>|v ?uep5lUoPronM(P;^WHj<`<gU1wi6' );
define( 'NONCE_SALT',       'e4x?g<AQ.X3J6OD*Zi0l#0nfTzp%wjH4H%OQrp,8&t9l&(g%nL|[VO~T3@$9^7^*' );

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
