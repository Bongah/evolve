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
define( 'DB_NAME', 'evolvedb' );

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
define( 'AUTH_KEY',         'Ez=isUI/^!mR<Ow#{Wd~$NKdWD[/|ERItUc:C*y J,{T*X|kjH^ ;WGnft#;dJ<Z' );
define( 'SECURE_AUTH_KEY',  'lR#w6hJE)<0v2;?bZrhWVxFIZ|~M$+L;%RiG4AV-ZT@gC`%Y{,,u*P_T qav{{,Y' );
define( 'LOGGED_IN_KEY',    '.En8JcX)~s(Zd7/9_z]<J;82>DrNOa4]|ZD}N;o9@{/?9b]S2xpJ%R`!T_Q!4<St' );
define( 'NONCE_KEY',        ' x[iXWs_37X n$]m|cW}uq-w&IcHZfQ[Y@6v^O=e8dRZ`9u,Mtt~L<3KJsjzqS%P' );
define( 'AUTH_SALT',        '_>1~ZiDc_e9H&8iCz[ys]DcXa Sz*u9./?,@GlwS}3Uhe4IUu-bvY)dD )9(6xL5' );
define( 'SECURE_AUTH_SALT', 'h~CCu!P<MweZd92ckbL9)w+%PP)D62t-`lpEtQr}le@.Vu+3>]+&H*?^&r7=&f,f' );
define( 'LOGGED_IN_SALT',   'h]V_N%<K) M/-1$NX,HnkzaK|dE-P@B>3KeXE|y[!FwG@M44FDOe:6Cq^je/y-oV' );
define( 'NONCE_SALT',       'bsNZ6rD&`|OrwU}8!6.0Kx`b32h753>jjMM(6(#1$IJjGnY/mvdLNg~n0w3FP52-' );

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
