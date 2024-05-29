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
define( 'DB_NAME', 'wp_flavita' );

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
define( 'AUTH_KEY',         'Vr.wGIR;lJ_ef! $_AUNtX9/KrQtOre;8a7zNd_pd-xya_M`)1%Q0N3fHo>r$+q&' );
define( 'SECURE_AUTH_KEY',  'jHPDas~v;.Ne$hx!A0)pSdI#qh[yu>[=Nq!#[>fg/Ao:kwVE*?#Wv=lgQ1`d/HfX' );
define( 'LOGGED_IN_KEY',    '8z7t&G6_?fL)W,o*%qbVuUdM<FG2tA(1Ub>e9gf(vEzcmM[v[C9TSrZ:5?8pH))n' );
define( 'NONCE_KEY',        '!sI@/>&Z=S#OwQg<H9G>-@xzY`r9)_XCub@^@6t,9]8:e3HHrCcreI`v#<Uzt]wQ' );
define( 'AUTH_SALT',        'TXNh=VSq$Xq2.E2C_y><c^C.aJ&wH=xF>-w{1?7OPIbVB`2E;_$ i(>SHE9{vT;r' );
define( 'SECURE_AUTH_SALT', 'C4EQN/wQriq4VE?m}|,-JR#/s$`;JLA:`2hS gH]DRd@xmb-Jre@))AUEUQ<;g#`' );
define( 'LOGGED_IN_SALT',   'gLj~)+A-?JFIW)l7z_pb`&Y^Mb#]Kz/9#JAz`_($<{P`wU05ucz3dEGS8-,i 9aR' );
define( 'NONCE_SALT',       'C+3k8+.acGTnvw/A3[3!0jDX~-8}hE0eI(]|oTcJgD*5ZT{_s= lC1K6[vbYrQ<1' );

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
