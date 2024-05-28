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
define( 'DB_NAME', 'wp_ecmmarce2' );

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
define( 'AUTH_KEY',         '`0M$Q $^c-%A4JKhaOT)WwgbhZa2s$OuT:L=x,hhXa8HzT>& Pfdj$R>b=y#aT?W' );
define( 'SECURE_AUTH_KEY',  '+NW&=FD4~_Ph^,x_`^>t}_Ib;diLH)$MV}O:bDiU6<;9U)!x;PnrQwa@0:0Pv=TV' );
define( 'LOGGED_IN_KEY',    'e)NX(>`boG%c%5)~DYx6xo35[[,jfsBYn;>TCKe*|n<5V$ 9Zni@fh5Su2ps sx^' );
define( 'NONCE_KEY',        'pFojl&H9U`0h}Dhg.]N>L~H4cF8&LIcp@uib@>H164pfTg]8|7*C}rGJSEOfdzFI' );
define( 'AUTH_SALT',        '_*iDp2,e,^J|skUnoD>_i$.o/=TgUY{aA][ES8.[}${WB:/}4|8jz|}Dm~0GusXU' );
define( 'SECURE_AUTH_SALT', '!7+5Gqy>{{Mpk0,[%hGSd^*l4ZM*,@q#fGnyd>n|6n=12dFU#5iu*%Pbl9%mWOr1' );
define( 'LOGGED_IN_SALT',   'wiQTa,|ofvR`uwmz~hoG+wVNW_R(?$mArWaeoOb3].kJE9E@#j2=#t8Vf+j?l[6}' );
define( 'NONCE_SALT',       'dQsI80GgQ# hd>/-%;`.`0:~kSb3y&@]qTW&6L9n%4&a PjU=|>{[dSje1:Il4PK' );

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
