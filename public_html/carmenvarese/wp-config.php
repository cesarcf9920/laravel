<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u614117122_RE6Vv' );

/** Database username */
define( 'DB_USER', 'u614117122_7bdIV' );

/** Database password */
define( 'DB_PASSWORD', 'SnQmWs0JA6' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'w9ma{!#}@aqr$Qngv35>+@561K&Vh_T(!.u,mQpm-y&v BV_L</!R.:[+9p:qh.[' );
define( 'SECURE_AUTH_KEY',   'F,i*aIOW2b4o6E-si7m5/XIzcH]Ys<IUG:E)ua&aXVc<`~B6sI=QqIW_YFu^t]Kj' );
define( 'LOGGED_IN_KEY',     'B#2Ry#BA|F-(0W*`^o#FKn-*y^[:&=P3t]0-NyX$6UYEc2{7ZV4p{lZ=S|^H~%k,' );
define( 'NONCE_KEY',         '2Y!$uZJl[R5?X8N;/&J3?Hva{aY5wF:e[`Be{5)kZ.tTxly^5/}qNX8gN1L}d>fi' );
define( 'AUTH_SALT',         'Hl*A5/!Bd@X{]MGgWiv%EJ),&#uUxzW)L~kpa{Co.]#n1{aq6VN1YEQ<=//YK8&4' );
define( 'SECURE_AUTH_SALT',  '7&H-pIGFD`am5(B05xxuO!v{[apL{%HhjE[1+6`V.BUzL,.Pa#p?m`-%[Cv|N2uI' );
define( 'LOGGED_IN_SALT',    '&-8 J4Ixe-:LXfyto/+Q%uGn5#M1n<0FgdK!iY9-)^J+@>qTyPLUdc:I.AlXPaYt' );
define( 'NONCE_SALT',        ' `Ijkm(M37jC|K/77`Hv`>g_|>ZayAWCoX$tzdD4%N_loam8{I*&:o%}r)#4tOMj' );
define( 'WP_CACHE_KEY_SALT', 'Zms1BX*cUk|c!1@4KykQ;/qy&h+P39C k9ztP`uctH:A.i2P[0?e/<aP1f;V:ZyA' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
