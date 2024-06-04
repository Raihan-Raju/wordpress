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
define( 'DB_NAME', 'Royal Shop' );

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
define( 'AUTH_KEY',         '|:F1m2+/d;o~{3K51~2md@>?uq*6oJ]CDXP[_z&DT5@WDbs{9rA#Lch;!P[>wX+E' );
define( 'SECURE_AUTH_KEY',  'CR.OQot+?W_<@oU3<a7,:5d=P3+H<A-B{!u2m}_L:_36-b+_[KrM6!K5m)A6XPMF' );
define( 'LOGGED_IN_KEY',    '0$QwHGQnF~Vd?5v4Ne4~[{^wyO9IC@7v83AG42*cRWJQx|`JQ>Gu*(X9X>CNsx,J' );
define( 'NONCE_KEY',        'f%Q#Om44qZ[uA;let@RfsAtT^?kwY$(+*<;Qiw5p#/3M[`LLcM2d@,9](L9/d}(A' );
define( 'AUTH_SALT',        '@>uFFS+RnFI/^<8n*Ln@]5Vs:)N:PmnzR!jaPn:To:A;Eo#3qkpT5H5cnS_MVI3Q' );
define( 'SECURE_AUTH_SALT', '#oxyXbIUL&,NgoourifUnHYpe3>=;>]ZsUj~WjomP:DcKbe11.rv63PcL?9}n)%8' );
define( 'LOGGED_IN_SALT',   'HPp`C>5?D&Nnb/h7&TDlG+q~1H-h?Of^#!Kjn9irjVaw4MR+6|7`N6G7-qGd0moC' );
define( 'NONCE_SALT',       '<NN$|urG83iBJk/67mXv:c@W0 rJ[xre3Agp,NC!#J#}8c(kHX?!3xUEs`sVD+w,' );

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
